<?php 
    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'home':
                include '../view//Homeheader.php';
                //$_SESSION['check'] = "access";
                break;
            default:
                include '../view//header.php';
                break;

        }
    } else {
        include '../view//header.php';
    }
?>
 <?php include "../view/MainPage.php"; ?>
 
 <?php
 if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'home':
                include '../view//hFooter.php';
                //$_SESSION['check'] = "access";
                break;
            default:
            include '../view//Footer.php';
                break;

        }
    } else {
        include '../view//Footer.php';
    }
?>
