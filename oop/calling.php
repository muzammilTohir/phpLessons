<?php
    include 'autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 20%;
  background-color: LightGray;
  box-shadow: 0 0 8px 0 blue;
}
</style>
</head>
<body>
<div class="l-form">        
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form">
<h1 class="form__title">Search</h1>
<div class="form__div">
<label for="" class="form__label">Enter an input for executing one action:</label><br>
<input type="text" name="num" placeholder="Search..">
</div>
<input type="submit" class="form__button" value="Searching">
</form>
</div>
<?php
    $test = new Test();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['num'];
   switch ($input) {
       case 'getone':
        $test->getusers();
           break;
        case 'get':
            $test->getusersStmt('Sardor','Botirov');
           break;
        case 'set':
            $test->setusersStmt('Shaxboz','Kimdirov','1992-08-12');
           break;
        case 'update':
            $test->updateusersStmt();
           break;
        case 'delete':
            $test->deleteusersStmt(14);
           break;
        case 'order':
            $test->orderbyfirstnameusersStmt();
            break;
       
       default:
           echo "Invalid input!";
           break;
   }
}
?>
</body>
</html>