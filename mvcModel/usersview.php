<?php
    class UsersView extends Users{
        public function showUser($id){
            $this->getuser($id);
        }

        public function getAll($firstname,$lastname){
            $names = $this->getusersStmt($firstname,$lastname);
            foreach ($names as $name) {
                echo $name['user_id'] . " ";
                echo $name['user_firstname'] . " ";
                echo $name['user_lastname'] . " ";
                echo $name['user_dateofbirth'] . '<br>';
            }  
            
            //$results = $this->getOne($name);
            // echo "Full name: " . $results[0]['user_firstname'] . " " . $results[0]['user_lastname'] . "<br>Date of birth: " . $results[0]['user_dateofbirth'];
        }

        public function orderUser(){
            $result = $this->orderbyfirstnameusersStmt();
            foreach($result->fetchAll() as $take) {
                foreach($take as $one){
                    echo $one . "<br>";
                }
              print_r($take);
              echo "<bR>";
            }
        }
    }
?>