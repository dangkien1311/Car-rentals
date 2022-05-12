<?php
    class Searchcontroller extends controller {
        function __construct()
        {
            parent::__construct();
            if(isset($_GET['pickUpDate']) && isset($_GET['dropOffDate'])){
                $datereturn = date("Y-m-d H:i:s",strtotime($_GET['dropOffDate']));
                $daterent =  date("Y-m-d H:i:s",strtotime($_GET['pickUpDate']));
                $now = date('Y-m-d H:i:s');
                 if($daterent <= $datereturn && $daterent >= $now && $datereturn >= $now) {
                    if(isset($_GET['searchButton'])) {
                        unset($_SESSION['pup']);
                        unset($_SESSION['dop']);
                        unset($_SESSION['put']);
                        unset($_SESSION['dot']);

                        $_SESSION['pup'] = $_GET['pu'];
                        $_SESSION['dop'] = $_GET['do'];
                        $_SESSION['put'] = date("Y-m-d H:i:s",strtotime($_GET['pickUpDate']));
                        $_SESSION['dot'] = date("Y-m-d H:i:s",strtotime($_GET['dropOffDate']));
                        } 
                } else {
                    if($_SERVER['PHP_SELF'] == '/Car-rentals/controller/index.php' ) {
                        echo "<script>alert('thời gian không hợp lệ');
                        window.location.replace('../controller/index.php');
                        </script>";
                    }
                    else {
                        echo "<script>alert('thời gian không hợp lệ');
                        window.location.replace('../controller/main.php');
                        </script>";
                    }
            } 
        }
    }
}
?>