<?php
    class Users extends Dbconnect{

        //running sql statement through database in this class

        protected function getuser($id){
            $sql = "SELECT * FROM users WHERE user_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
           // var_dump($stmt);
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo $row['user_firstname'] . '<br>';
            }
        }

        //this method is the same with getusersStmt that is doing the same action but 2 options which ones is more comfortable
        protected function getOne($name){
            $sql = "SELECT * FROM users WHERE user_firstname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }

        protected function getusersStmt($firstname,$lastname){
            $sql = "SELECT * FROM users WHERE user_firstname = ? AND user_lastname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname,$lastname]);
            $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $names;
            // var_dump($stmt);    
    }

    protected function addusersStmt($firstname,$lastname,$dateofbirth){
        $sql = "INSERT INTO users(user_firstname,user_lastname,user_dateofbirth) VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname,$dateofbirth]);
        echo $stmt->rowCount() . " records added successfully<br>";
    }

    protected function updateusersStmt($name){
        $sql = "UPDATE users SET user_firstname = ?  WHERE user_id = 2";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        echo $stmt->rowCount() . " records UPDATED successfully<br>";
    }

    protected function deleteusersStmt($id){
        // sql to delete a record
        $sql = "DELETE FROM users WHERE user_id=?";
        $stmt = $this->connect()->prepare($sql);

        // use exec() because no results are returned
        $stmt->execute([$id]);
        echo "Record deleted successfully<br>";
       
    }

    protected function orderbyfirstnameusersStmt(){
        $sql = "SELECT user_firstname,user_lastname,user_dateofbirth FROM users ORDER BY user_firstname";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        // set array to associative
        return $stmt->PDO::FETCH_ASSOC;
      }
} 
    
?>