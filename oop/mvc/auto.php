<?php
    spl_autoload_register(function($user){
        $filename = $user . '.php';

        if(!file_exists($filename)){
            return false;
        }

        include $filename;
    });
  
