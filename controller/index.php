<?php 
    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'home':
                include '../view/Homeheader.php';
                break;
            default:
                include '../view/header.php';
                break;

        }
    } else {
        include '../view/header.php';
    }
?>
 <?php include "../view/MainPage.php"; ?>
 <?php include "../view/Footer.php"?>

