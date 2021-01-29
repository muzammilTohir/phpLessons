<?php
  $conn = mysqli_connect('localhost','tohir','test1234','example');
  if(!$conn){
    echo "Error!" . mysqli_connect_error();
  }
  else{
    echo "Success!";
  }
 ?>
