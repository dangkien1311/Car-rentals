<?php
    class Searchcontroller extends controller {
        function __construct()
        {
            parent::__construct();
            if(isset($_GET['pickUpDate']) && isset($_GET['dropOffDate'])){
                $datereturn = new DateTime($_GET['dropOffDate']);
                $daterent = new DateTime($_GET['pickUpDate']);
                if($daterent >= $datereturn) {
                    if($_SERVER['PHP_SELF'] == '/Car-rentals/controller/index.php' ) {
                        echo "<script>alert('ngày trả không hợp lệ');
                        window.location.replace('../controller/index.php');
                        </script>";
                    }
                    else {
                        echo "<script>alert('ngày trả không hợp lệ');
                        window.location.replace('../controller/main.php');
                        </script>";
                    }
                } else {
                    if(isset($_GET['searchButton'])) {
                        unset($_SESSION['pup']);
                        unset($_SESSION['dop']);
                        unset($_SESSION['put']);
                        unset($_SESSION['dot']);

                        $_SESSION['pup'] = $_GET['pu'];
                        $_SESSION['dop'] = $_GET['do'];
                        $_SESSION['put'] = date("Y-m-d H:i:s",strtotime($_GET['pickUpDate']));
                        $_SESSION['dot'] = date("Y-m-d H:i:s",strtotime($_GET['dropOffDate']));

                        echo "<script>console.log('Debug Objects: " .$_SESSION['pup'] .
                                                                    $_SESSION['dop'] .
                                                                    $_SESSION['put']  .
                                                                    $_SESSION['dot'] ."' );</script>";
                    }
                }
            } 
        }
    }

?>