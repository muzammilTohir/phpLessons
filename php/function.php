<?php
//first example for function
  $name = "Tohir";
  function sayHi(){
    //if we want to use global variable in func we must declare global inside function this variable, then it will work
    global $name;
    $name = "Muhammadloiq";
    return $name;
  }
   sayHi();

   //second example for function wuth global &
   // $age = 17;
   // function sayAge($age){
   //   $age = 20;
   //   return "I am $age years old";
   // }
   // echo sayAge($age);
   // //after updating into function it will change if we put & symbols left side of variables
   // echo "<br> After three years I will be " . $age;
 ?>
