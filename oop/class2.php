<?php
declare(strict_types=1);  //when we give some string , int , float , etc . we should declare this form in above 
include('class1.php');
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
    $person = new Person();
    try{
      $person->setName(7);
      echo $person->getName();
    }
    catch(TypeError $e){
      echo "Error: " . $e->getMessage();
    }

?>
</body>
</html>
