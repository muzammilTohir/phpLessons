<?php
  class First{
    public $xabar = "we can not change";

    public static function information(){
      return self::$xabar;
    }
  }

  $first = First::information();
  echo $first;

 ?>
