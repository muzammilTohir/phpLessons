<?php
    class Person{
        public $name;

        public function setName(string $name)
        {
            $this->name=$name;
        }

        public function getName()
        {
            return $this->name;
        }
    }
?>
