<?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    class Database {
        private $host;
        private $username;
        private $password;
        private $databaseName;
        private $conn;

        function __construct($databaseName) {
            $this->host = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->databaseName = $databaseName;
            $this->connect();
	    }

        function connect() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
            if($this->conn->connect_error){
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    
        function disconnect() {
            if(is_object($this->conn))
                $this->conn->close();
        }

        function escape_string($s) {
            return $this->conn->escape_string($s);
        } 

        function getArray($table) {
            if(!is_string($table)) 
                return false;
            $sql = "SELECT * FROM `$table`;";
            if($result = $this->conn->query($sql)) {
                $data = null;
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            } 
            return false;
        }

        function getArrayIn($table,$col,$CarValue) {
            if(is_array($CarValue) || !is_string($table) ||!is_string($col)) 
                return false;
            $CarValue = (string)$CarValue;
            $sql = "SELECT * FROM `$table` WHERE `$col` = '$CarValue';";
            if($result = $this->conn->query($sql)) {
                $data = null;
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            } 
            return false;
        }

        function getArrayInPrice($table,$col,$CarName,$Hprice,$EPrice) {
            if(!is_string($table) ||!is_string($col)|| is_array($CarName)) 
                return false;
            $CarName = (String)$CarName;
            $sql = "SELECT * FROM `$table` WHERE `$col` = '$CarName' AND dailyHireRate BETWEEN $Hprice AND $EPrice;";
            if($result = $this->conn->query($sql)) {
                $data = null;
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            } 
            return false;
        }

        function insert($table, $data) {
            if(!is_array($data) || !is_string($table)) 
                return false;
            $keys = "";
            $values = "";
            foreach ($data as $key => $value) {
                $keys .= ($key).",";
                $values .= "'".$this->conn->escape_string($value)."',";
            }
            $keys = trim($keys, ',');
            $values = trim($values, ',');
            $sql = "INSERT INTO `$table` ($keys) VALUES ($values);";
            if($this->conn->query($sql)) 
                return $this->conn->insert_id;
            return false;
        }
    
        function update($table, $data, $id) {
            $id = (int)$id;
            if(!is_string($table) || !is_array($data) || !is_integer($id))
                return false;
            $content = "";
            foreach ($data as $key => $value) {
                $content .= $key." = '".$this->conn->escape_string($value)."', ";
            }
            $content = trim($content, ', ');
            $sql = "UPDATE `$table` SET $content WHERE citizenID = $id;";
            return $this->conn->query($sql);
        }
    
        function delete($table, $id) {
            $id = (int)$id;
            if(!is_string($table) || !is_integer($id))
                return false;
            $sql = "DELETE FROM `$table` WHERE id = $id;";
            return $this->conn->query($sql);
        }

        function query($sql, $return = false) {
            $return = (bool)$return;
            if(!is_string($sql) || !is_bool($return)) 
                return false;
            if($result = $this->conn->query($sql)) {
                if($return) {
                    $data = null;
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                    return $data;
                } else {
                    return true;
                }
            }
            return false;
        }
    }

?>