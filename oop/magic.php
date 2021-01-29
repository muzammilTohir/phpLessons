<?php
    class Magic{
        public $name = "Tohir";
        public function __get($magicname){
            if($magicname === 'username'){
                return $this->name;
            }
            return "Error!";
        }
    }

    $magic = new Magic();
    echo $magic->username;
?>

<p><br></p>

<?php
    trait Mytreit{
        public function hello(){
            echo "Hello everyone";
        }
    }

    trait Yourtreit{
        public function hello(){
        echo "Hello world";
        }   
    }
    class Hello{
        use Mytreit, Yourtreit{
            Mytreit::hello insteadOf Yourtreit;
            Yourtreit::hello as hi;
        }
    }

    $hello = new Hello();
    
    $hello->hi();
?>