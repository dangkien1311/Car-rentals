<?php 
    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'home':
                include '../view//Homeheader.php';
                include "../view/result.php"; 
                break;
            default:
                include '../view//header.php';
                include "../view/result.php"; 
                break;

        }
    } else {
        include '../view//header.php';
        include "../view/result.php"; 
    }
?>
 <?php
 if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'home':
                include '../view//hFooter.php';
                break;
            default:
            include '../view//Footer.php';
                break;

        }
    } else {
        include '../view//Footer.php';
    }
?>
