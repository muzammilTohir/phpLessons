<?php
    class Databaseconn{
        private $host = "localhost";
        private $user = "root";
        private $pwd = "sardor";
        private $dbName = "oopdb";

        public function newconnecting(){
            
            try{
                $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
                $pdo = new PDO($dsn,$this->user,$this->pwd);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(PDOException $e){
                echo "Failed to connect: " .$e->getMessage();
            }
        }
    }
?>