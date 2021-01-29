<?php
    class User{

        //we cant use private keyword in static 
        public static $gpa = array(7,9.27,8.2,10);
        public $name = "Tohir";
        protected $email;
        var $role = "user";

        //create a constructor
        public function __construct($name,$email){
            $this->name=$name;
            if(strpos($email,'@')>-1){
                $this->email = $email;
            }
        }

        public function __destruct(){
            echo "The $this->name is removed....<br>";
        }

        //create a setter for a private properties
        public function setEamil($email){
            if(strpos($email,'@')>-1){
                $this->email = $email;
            }
        }

        //create a getter for a private properties
        public function getEmail(){
            return $this->email;
        }

        public function message(){
            return $this->email . " is sending a new message from " . $this->role;
        }

        //we can call static variable using self:: instead of $this->. we remember it
        public static function takeScholoroships(){
            for($i=0;$i<count(self::$gpa);$i++){
                $take = self::$gpa[$i];
                if($take>9){
                    echo $take . " is taken!<br>";
                }
            }
            
        }
    }

    //we can access directly without creating an object in static. with using ClassName:: instead of creating an object.
    User::takeScholoroships();
    echo "<br>";
    echo "<br>";

    //we have to initialize after calling constructor inside object like this, otherwise it shows error
    $user1 = new User('Ibrohim','ibo@gmail.com');
   // $user1 = new User();
    echo "Role of class = " . $user1->role . "<br>";
    echo $user1->name . "<br>";
    echo $user1->message() . "<br>";
    $user1->setEamil('thebestttohir@gmail.com');
    echo $user1->getEmail() . "<br>";
    unset($user1);
    //checking class what type of var or meth are there?
    print_r(get_class_vars('User'));
    print_r(get_class_methods('User'));
    echo "<br>";



    //create a new class and extend from another class. It takes all properties and methods also can use as usual
    class UserAdmin extends User{
        public $level;
        var $role = "admin";

        public function __construct($name,$email,$level){
            parent::__construct($name,$email);
            $this->level=$level;
        }

        public function message(){
            return $this->email . " is sending a anew message from " . $this->role;
        }
    }

    //create a instiance for new userAdmin class and call all fields and methods from parents class
    $admin = new UserAdmin('Dilshod','dilshod@gmail.com',7);
    echo "Role of class = " . $admin->role . "<br>";
    echo $admin->message() . "<br>";
    echo $admin->name . "<br>";
    echo $admin->getEmail() . "<br>";
    echo $admin->level . "<br>";
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   // $user = new User();
      //  echo "Hello $user->name";
    ?>
</body>
</html>