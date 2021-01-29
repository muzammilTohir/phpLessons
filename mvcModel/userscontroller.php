<?php
    class UsersController extends Users{
        public function createUser($firstname,$lastname,$dateofbirth){
            $this->setusersStmt($firstname,$lastname,$dateofbirth);
        }

        public function updateUser($name){
            $this->updateusersStmt($name);
        }

        public function deleteUser($id){
            $this->deleteusersStmt($id);
        }
    }
?>