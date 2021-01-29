<?php
    $conn = mysqli_connect('localhost','bahrom','bahrom1234','phpsql');

    if(!$conn){
        echo "Connecting error: " . mysqli_connect_error();
    }else{
        echo "Connection success!";
    }
?>