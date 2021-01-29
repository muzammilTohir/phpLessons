<?php

    ob_start();

//calling file in browser using this in below
    $fileN = file_get_contents("text.txt");
    echo $fileN;
//writing to a file using this in below
    file_put_contents("text.txt","  Valekum assalom",FILE_APPEND);

    header("location: index.php");

    $fileN = file_get_contents("text.txt");
    echo $fileN;
 ?>
