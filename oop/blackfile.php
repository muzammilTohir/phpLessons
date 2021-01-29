<!DOCTYPE html>
<html>
<body>

<?php 
$str = "Hi"; 
echo "The string: ".$str."<br>"; 
echo "TRUE - Raw 20 character binary format: ". htmlspecialchars(sha1($str, TRUE)) ."<br>"; 
$password = 'rasmuslerdorf';
echo "FALSE - 40 character hex number: ".sha1($str)."<br>"; 
$hash = password_hash($password, PASSWORD_DEFAULT);
if(password_verify($password,$hash)){
    echo "Success";
}
else{
    echo "Error";
}
echo $hash;
?>

</body>
</html>
