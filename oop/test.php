<?php
    class Test extends Dbconnect{
        
        public function getusers(){
            $sql = "SELECT * FROM users WHERE user_id = 1";
            $stmt = $this->connect()->query($sql);
           // var_dump($stmt);
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo $row['user_firstname'] . '<br>';
            }
            //fetching all information from database
           //$row = $stmt->fetchAll();
           //print_r($row);

           //fetching all information with another way
           //$result = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
           //var_dump($result);
        }

        public function getusersStmt($firstname,$lastname){
            $sql = "SELECT * FROM users WHERE user_firstname = ? AND user_lastname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname,$lastname]);
            $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($stmt);
            foreach ($names as $name) {
                echo $name['user_id'] . " ";
                echo $name['user_firstname'] . " ";
                echo $name['user_lastname'] . " ";
                echo $name['user_dateofbirth'] . '<br>';
            }        
    }

    public function setusersStmt($firstname,$lastname,$dateofbirth){
        $sql = "INSERT INTO users(user_firstname,user_lastname,user_dateofbirth) VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname,$dateofbirth]);
        echo $stmt->rowCount() . " records added successfully<br>";
    }

    public function updateusersStmt(){
        $sql = "UPDATE users SET user_id = 6 WHERE user_firstname = 'Ibrohim'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully<br>";
    }

    public function deleteusersStmt($id){
        // sql to delete a record
        $sql = "DELETE FROM users WHERE user_id=?";
        $stmt = $this->connect()->prepare($sql);

        // use exec() because no results are returned
        $stmt->execute([$id]);
        echo "Record deleted successfully<br>";
       
    }


    public function orderbyfirstnameusersStmt(){
        $sql = "SELECT user_firstname,user_lastname,user_dateofbirth FROM users ORDER BY user_firstname";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        // set array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $take) {
            foreach($take as $one){
                echo $one . "<br>";
            }
          print_r($take);
          echo "<bR>";
        }
      }
} 
?>