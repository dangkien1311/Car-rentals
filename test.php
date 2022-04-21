<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// if(isset($_GET["pickUp"])) {
   
//   echo $_GET["pickUp"];
// }

$dropOffdata ="";
$pudata ="";
$puddata ="";
$doddata ="";

$pudata = test_input($_GET["pickUp"]);
$dropOffdata = test_input($_GET["dropOff"]);
$puddata = test_input($_GET["pickUpDate"]);
$doddata = test_input($_GET["dropOffDate"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($pudata) 
  && isset($puddata) 
  && isset($dropOffdata) 
  && isset($doddata)) {
      echo "<h2>Your Input:</h2>";
      echo $pudata; 
      echo "<br>";
      echo $dropOffdata;
      echo "<br>";
      echo $puddata;
      echo "<br>";
      echo $doddata;
}

?>