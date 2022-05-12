<?php
session_start();
unset($_SESSION['UserPhone']);
unset($_SESSION['UserIDcard']);
unset($_SESSION['totalamount']);
unset($_SESSION['pup']);
unset($_SESSION['dop']);
unset($_SESSION['put']);
unset($_SESSION['dot']);
header("Location: ../index.php");
?>