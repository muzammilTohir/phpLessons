<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    ob_start();
    //constant variables
    // define('NAME','Tohir');
    //   echo "Hello " . NAME . ", I come back";
    $number = array("Tohir","Ibrohim","Abdulaziz");
    print_r($number);
    echo "<br>";
    array_push($number,"Dilshod");
    for($i=0;$i<count($number);$i++){
      echo $number[$i] . "<br>";
    }
    $newArray = array_merge($number,array("Izzat","Abror"));
    $newName = include('function.php');
    echo $newName . "<br>";
    array_push($newArray,$newName);
    print_r($newArray);
    ///header("location: file.php");
     ?>

  </body>
</html>
