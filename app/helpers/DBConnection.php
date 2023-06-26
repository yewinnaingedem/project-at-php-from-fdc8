<?php
    trait DBConnection{
        private $serverName = "localhost";
        private $userName = "root";
        private $password = "";
        private $dbName = "php_fdc8";

        public function connect(){
            $conn = mysqli_connect($this->serverName,$this->userName,$this->password,$this->dbName);

            if(!$conn){
                die('Connection failed!' . mysqli_connect_error());
            }
            
            return $conn;
        }

        public function disconnect($conn){
            $conn->close();
        }
    }
?>