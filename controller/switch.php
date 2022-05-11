<?php
   class url {
        public function getURl(){
            if(isset($_GET['act'])) {
                if($_GET['act'] === 'home') {
                    return '../controller/main.php';
                }
                else {
                    return '../controller/index.php';
                }
            }
        }
    }
?>