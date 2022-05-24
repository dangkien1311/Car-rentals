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
            $sql = "SELECT * FROM `$table` WHERE NOT EXISTS (SELECT * 
            FROM bookingdetail
            WHERE carcategory.carCategoryID = bookingdetail.carCategoryID);";
            if($result = $this->conn->query($sql)) {
                $data = null;
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            } 
            return false;
        }

        function getArrayDetail($userID) {
            $sql = "SELECT dailyHireRate,Name,CarIMG,usercart.*,accountmanager.citizenID
            FROM carcategory
            LEFT JOIN usercart ON carcategory.carCategoryID = usercart.carCategoryID 
            LEFT JOIN accountmanager 
            ON usercart.customerID = accountmanager.customerID
            WHERE accountmanager.citizenID = $userID;";
            if($result = $this->conn->query($sql)) {
                $data = null;
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            } 
            return false;
        }


        // function getArrayIn($table,$col,$CarValue) {
        //     if(is_array($CarValue) || !is_string($table) ||!is_string($col)) 
        //         return false;
        //     $CarValue = (string)$CarValue;
        //     $sql = "SELECT * FROM `$table` WHERE `$col` = '$CarValue' AND NOT EXISTS 
        //     (SELECT * 
        //     FROM bookingdetail 
        //     WHERE carcategory.carCategoryID = bookingdetail.carCategoryID) ;";
        //     if($result = $this->conn->query($sql)) {
        //         $data = null;
        //         while ($row = $result->fetch_assoc()) {
        //             $data[] = $row;
        //         }
        //         return $data;
        //     } 
        //     return false;
        // }

        // function getArrayInPriceAndCar($table,$col,$CarName,$EPrice) {
        //     if(!is_string($table) ||!is_string($col)|| is_array($CarName)) 
        //         return false;
        //     $CarName = (String)$CarName;
        //     $sql = "SELECT * FROM `$table` WHERE `$col` = '$CarName' AND 
        //     (CASE
        //         WHEN $EPrice = 1 THEN dailyHireRate BETWEEN 1 AND 2
        //         WHEN $EPrice = 2 THEN dailyHireRate BETWEEN 2 AND 3
        //         WHEN $EPrice = 3 THEN dailyHireRate BETWEEN 3 AND 4
        //         ELSE dailyHireRate > 4
                
        //     END) AND NOT EXISTS (SELECT * 
        //                     FROM bookingdetail 
        //                     WHERE carcategory.carCategoryID = bookingdetail.carCategoryID)
        //     ORDER BY dailyHireRate ASC;";
        //     if($result = $this->conn->query($sql)) {
        //         $data = null;
        //         while ($row = $result->fetch_assoc()) {
        //             $data[] = $row;
        //         }
        //         return $data;
        //     } 
        //     return false;
        // }

        // function getArrayInPrice($table,$EPrice) {
        //     if(!is_string($table)) 
        //         return false;
        //     $sql = "SELECT * FROM `$table` WHERE 
        //     (CASE
        //         WHEN $EPrice = 1 THEN dailyHireRate BETWEEN 1 AND 2
        //         WHEN $EPrice = 2 THEN dailyHireRate BETWEEN 2 AND 3
        //         WHEN $EPrice = 3 THEN dailyHireRate BETWEEN 3 AND 4
        //         ELSE dailyHireRate > 4
                
        //     END)  AND NOT EXISTS (SELECT * 
        //                     FROM bookingdetail 
        //                     WHERE carcategory.carCategoryID = bookingdetail.carCategoryID)
        //     ORDER BY dailyHireRate ASC;";
        //     if($result = $this->conn->query($sql)) {
        //         $data = null;
        //         while ($row = $result->fetch_assoc()) {
        //             $data[] = $row;
        //         }
        //         return $data;
        //     } 
        //     return false;
        // }


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
    
        function update($table, $data, $id,$name_collumn) {
            $id = (int)$id;
            if(!is_string($table) || !is_array($data) || !is_integer($id))
                return false;
            $content = "";
            foreach ($data as $key => $value) {
                $content .= $key." = '".$this->conn->escape_string($value)."', ";
            }
            $content = trim($content, ', ');
            $sql = "UPDATE `$table` SET $content WHERE $name_collumn = $id;";
            return $this->conn->query($sql);
        }
    
        function delete($table, $id,$namecollumn) {
            $id = (int)$id;
            $nameset = $namecollumn;
            if(!is_string($table) || !is_integer($id) || !is_string($nameset))
                return false;
            $sql = "DELETE FROM `$table` WHERE $nameset = '$id';";
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