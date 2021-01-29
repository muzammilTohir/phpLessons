<?php
    spl_autoload_register(function($connecting){
        $filename = $connecting . '.php';

        if(!file_exists($filename)){
            return false;
        }

        include $filename;
    });
  

