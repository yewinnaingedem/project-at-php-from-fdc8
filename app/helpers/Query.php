<?php
    include "DBConnection.php";

    trait Query{
        use DBConnection;
        
        public function selectList($query){
            $conn = $this->connect();
            if(!$conn->query($query)){
                echo "Error Description: " . $conn->error . "</br>";
            }
            else{
                $result = $conn->query($query);
            }
            $this->disconnect($conn);
            return $result;
        }

        public function selectRecord($query){
            $conn = $this->connect();
            if(!$conn->query($query)){
                echo "Error Description: " . $conn->error . "</br>";
            }
            else{
                $result = $conn->query($query);
            }
            $this->disconnect($conn);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    return $row;
                }
            }

        }

        public function insert($tableName,$data){
            //insert into customers(customer_name,address) values('Myat Thu Aung','Yangon')
            // print_r($tableName);
            // print_r($data);

            $keys = array_keys($data);
            $values = array_values($data);

            //print_r($values);

            $keysString = "";
            foreach ($keys as $key) {
                $keysString .= $key . ","; //$keysString = $keysString + $key;
            }
            $keysString = substr($keysString,0,-1);
            //print_r($keysString);

            $valuesString = "";
            foreach ($values as $value) {
                $valuesString .= "'" . $value . "',"; //$valuesString = $valuesString + $value;
            }
            $valuesString = substr($valuesString,0,-1);
            // print_r($valuesString);

            $query = "insert into {$tableName}({$keysString}) values({$valuesString})";

            $conn = $this->connect();
            if($conn->query($query) === false){
                echo "Error {$query}.</br>{$conn->error}.";
            }
            $this->disconnect($conn);
        }

        public function update($tableName,$data,$condition){
            //update students set
            // name = 'myat thu',
            // age = 33
            // where id = 1

            $keyValuePairs = "";
            foreach ($data as $key => $value) {
                $keyValuePairs .= $key . "='" . $value . "',";
            }
            $keyValuePairs = substr($keyValuePairs,0,-1);            

            $query = "update " . $tableName . " set " . $keyValuePairs . " " . $condition;
            
            $conn = $this->connect();

            if($conn->query($query) === FALSE){
                echo "Error {$query}.</br>{$conn->error}.";
            }

            $this->disconnect($conn);

        }

        public function delete($tableName,$condition){            
            $query = "delete from {$tableName} {$condition}";

            $conn = $this->connect();
            if($conn->query($query) === false){
                echo "Error {$query}.</br>{$conn->error}.";
            }

            $this->disconnect($conn);            
        }


    }
?>