<?php
class First{
  const JUST = "we can not change";

  public static function information(){
    return self::JUST;
  }
}

  class Second extends First{
    private static $taking = "It is static variable";
    private $giving = "Hello Browser";
    public static function getInfrom(){
      echo $this->giving;
      echo parent::information() . "<br>";
      echo self::$taking;
    }
  }

  $objecting = Second::getInfrom();
  echo $objecting;
 ?>
