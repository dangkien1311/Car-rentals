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
  exit();
}

// if(isset($_GET["pickUp"])) {
   
//   echo $_GET["pickUp"];
// }

// $dropOffdata ="";
// $pudata ="";
// $puddata ="";
// $doddata ="";
// $pudataErr ="";
// $dropOffdataErr ="";
// $puddataErr ="";
// $doddataErr ="";

// $pudata = test_input($_GET["pickUp"]);
// $dropOffdata = test_input($_GET["dropOff"]);
// $puddata = test_input($_GET["pickUpDate"]);
// $doddata = test_input($_GET["dropOffDate"]);

// if ($_SERVER["REQUEST_METHOD"] == "get") {
//   if (empty($_POST["pickUp"])) {
//     $pudataErr = "Name is required";
//   } else {
//     $pudata = test_input($_GET["pickUp"]);
//   }

//   if (empty($_POST["dropOff"])) {
//     $dropOffdataErr = "Email is required";
//   } else {
//     $dropOffdata = test_input($_GET["dropOff"]);
//   }

//   if (empty($_POST["pickUpDate"])) {
//     $puddataErr = "pickUpDate is required";
//   } else {
//     $puddata = test_input($_GET["pickUpDate"]);
//   }

//   if (empty($_POST["dropOffDate"])) {
//     $doddataErr = "dropOffDate is required";
//   } else {
//     $doddata = test_input($_GET["dropOffDate"]);
//   }
// }

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }

// if(isset($pudata) 
//   && isset($puddata) 
//   && isset($dropOffdata) 
//   && isset($doddata)) {
//     if(strtotime($puddata) > strtotime($doddata )){
//       echo '<script language="javascript">';
//       echo 'alert("Ngày nhận không hợp lệ")';
//       echo '</script>';
//     }
//     else{
//       echo "<h2>Your Input:</h2>";
//       echo $pudata; 
//       echo "<br>";
//       echo $dropOffdata;
//       echo "<br>";
//       echo $puddata;
//       echo "<br>";
//       echo $doddata;
//     }
// } 


$username_data= '';
$idcard_data = '';
$password_data = '';
 
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["phone_data"])) {
        $username_data = $_POST['phone_data'];
    }
    if (isset($_POST["reg_data"])) {
        $idcard_data = $_POST['reg_data'];
    }
    if (isset($_POST["pass_data"])) {
      $password_data = $_POST['pass_data'];
  }
 

  // echo "<h2>Your Input:</h2>";
  //       echo $username_data; 
  //       echo "<br>";
  //       echo $idcard_data;
  //       echo "<br>";
  //       echo $password_data;
//insert dữ liệu vào database table
    $sql = "INSERT INTO accountmanager (username, citizenID, password)
                        VALUES ('{$username_data}', '{$idcard_data}','{$password_data}')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
// //Đóng database
// $conn->close();

?>