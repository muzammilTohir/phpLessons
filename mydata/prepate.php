<?php
    include_once 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    <?php
        $data = "Java";
        //create a template
        $sql = "SELECT * FROM users WHERE user_uid=?;";
        //create a prepate statement 
        $stmt = mysqli_stmt_init($conn);
        //prepare a prepare statement
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "Sql statement failed!"; 
        }else{
            //bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt,"s",$data);
            //run parameters inside the database
            mysqli_stmt_execute($stmt);
            //take a result from database
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['user_uid'] . "<br>";
            }
        }
    ?>
</body>
</html>