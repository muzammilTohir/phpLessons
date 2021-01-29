<?php
 declare(strict_types=1);
 include('user.php');
 $num1 = $_POST['num1'];
 $op = $_POST['op'];
 $num2 = $_POST['num2'];

 $calcul = new Calculator((int)$num1,(int)$num2,$op);

 try{
     echo $calcul->simplecalculator();
 }
 catch(TypeError $e){
     echo "Error: " . $e->getMessage();
 }
?>