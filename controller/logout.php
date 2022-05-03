<?php
session_start();
unset($_SESSION['UserPhone']);
unset($_SESSION['UserIDcard']);
header("Location: ../index.php");
?>