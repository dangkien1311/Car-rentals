<?php
    class CarList extends controller {
        function __construct()
        {
            parent::__construct();
            if($_SERVER['PHP_SELF'] == '/Car-rentals/controller/index.php'){
                if((isset($_GET['Price'])) && (isset($_GET['CarBrand']))){
                    $CarPrice = $_GET['Price'];
                    $CarBrand = $_GET['CarBrand'];
                        if(isset($_GET['CarType'])){
                            foreach($CarBrand as $Car){
                                foreach($CarPrice as $price){
                                    $product = $this->model->getArrayInPriceAndCar('carcategory','Brand',$Car,$price);
                                    if($product == false) {
                                        echo "<script>alert('Hiện tại xe không sẵn sàng');
                                        window.location.replace('../controller/index.php');
                                        </script>";
                                    }
                                    for( $i = 0; $i < count($product);$i++) {
                                        $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                                        echo'<div class="list-car-select">
                                                <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                                <div class="car-information">
                                                    <div class="car-brand">'.$product[$i]['Name'].'</div>
                                                    <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                                    <label for="" class="car-seat">
                                                        <i class="fa-solid fa-people-group"></i>
                                                        '.$product[$i]['Seat'].' chỗ ngồi
                                                    </label>
                                                    <label for="" class="package">
                                                        <i class="fa-solid fa-suitcase"></i>
                                                        '.$product[$i]['Capacity'].' hành lí
                                                    </label>
                                                    <br>
                                                    <label for="" class="car-gearbox">
                                                        <i class="fa-solid fa-gears"></i>
                                                        '.$product[$i]['Model'].'
                                                    </label>
                                                    <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                                        Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                                    </label>
                                                    <p class="book">Vui lòng đăng nhập để đặt xe</p>
                                                </div>
                                            </div>';
                                    }
                                }
                            }  
                    }
                } 
                else if(isset($_GET['CarBrand'])){
                    $CarBrand = $_GET['CarBrand'];
                        if(isset($_GET['CarType'])){
                            foreach($CarBrand as $Car){
                                $product = $this->model->getArrayIn('carcategory','Brand',$Car);
                                if($product == false) {
                                    echo "<script>alert('Hiện tại xe không sẵn sàng');
                                    window.location.replace('../controller/index.php');
                                    </script>";
                                }
                                for( $i = 0; $i < count($product);$i++) {
                                    $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                                    echo'<div class="list-car-select">
                                            <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                            <div class="car-information">
                                                <div class="car-brand">'.$product[$i]['Name'].'</div>
                                                <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                                <label for="" class="car-seat">
                                                    <i class="fa-solid fa-people-group"></i>
                                                    '.$product[$i]['Seat'].' chỗ ngồi
                                                </label>
                                                <label for="" class="package">
                                                    <i class="fa-solid fa-suitcase"></i>
                                                    '.$product[$i]['Capacity'].' hành lí
                                                </label>
                                                <br>
                                                <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-gears"></i>
                                                    '.$product[$i]['Model'].'
                                                </label>
                                                <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                                    Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                                </label>
                                                <p  class="book" >Vui lòng đăng nhập để đặt xe</p>
                                            </div>
                                        </div>';
                            }
                        }  
                    }
                }
                else if((isset($_GET['Price']))){
                    $CarPrice = $_GET['Price'];
                        if(isset($_GET['CarType'])){
                                foreach($CarPrice as $price){
                                    $product = $this->model->getArrayInPrice('carcategory',$price);
                                    if($product == false) {
                                        echo "<script>alert('Hiện tại xe không sẵn sàng');
                                        window.location.replace('../controller/index.php');
                                        </script>";
                                    }
                                    for( $i = 0; $i < count($product);$i++) {
                                        $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                                        echo'<div class="list-car-select">
                                                <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                                <div class="car-information">
                                                    <div class="car-brand">'.$product[$i]['Name'].'</div>
                                                    <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                                    <label for="" class="car-seat">
                                                        <i class="fa-solid fa-people-group"></i>
                                                        '.$product[$i]['Seat'].' chỗ ngồi
                                                    </label>
                                                    <label for="" class="package">
                                                        <i class="fa-solid fa-suitcase"></i>
                                                        '.$product[$i]['Capacity'].' hành lí
                                                    </label>
                                                    <br>
                                                    <label for="" class="car-gearbox">
                                                        <i class="fa-solid fa-gears"></i>
                                                        '.$product[$i]['Model'].'
                                                    </label>
                                                    <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                                        Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                                    </label>
                                                    <p  class="book" >Vui lòng đăng nhập để đặt xe</p>
                                                </div>
                                            </div>';
                                    }
                            }  
                    }

                }else {
                    $product = $this->model->getArray('carcategory');
                    if($product == false) {
                        echo "<script>alert('Hiện tại xe không sẵn sàng');
                        window.location.replace('../controller/index.php');
                        </script>";
                    }
                        for( $i = 0; $i < count($product);$i++) {
                            $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                            echo'<div class="list-car-select">
                                    <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                    <div class="car-information">
                                        <div class="car-brand">'.$product[$i]['Name'].'</div>
                                        <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                        <label for="" class="car-seat">
                                            <i class="fa-solid fa-people-group"></i>
                                            '.$product[$i]['Seat'].' chỗ ngồi
                                        </label>
                                        <label for="" class="package">
                                            <i class="fa-solid fa-suitcase"></i>
                                            '.$product[$i]['Capacity'].' hành lí
                                        </label>
                                        <br>
                                        <label for="" class="car-gearbox">
                                            <i class="fa-solid fa-gears"></i>
                                            '.$product[$i]['Model'].'
                                        </label>
                                        <label for="" class="car-gearbox">
                                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                            Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                        </label>
                                        <p  class="book" >Vui lòng đăng nhập để đặt xe</p>
                                    </div>
                                </div>';
                        }
                    }     
            } else {
                if((isset($_GET['Price'])) && (isset($_GET['CarBrand']))){
                    $CarPrice = $_GET['Price'];
                    $CarBrand = $_GET['CarBrand'];
                        if(isset($_GET['CarType'])){
                            foreach($CarBrand as $Car){
                                foreach($CarPrice as $price){
                                    $product = $this->model->getArrayInPriceAndCar('carcategory','Brand',$Car,$price);
                                    if($product == false) {
                                        echo "<script>alert('Hiện tại xe không sẵn sàng');
                                       window.location.replace('../controller/main.php');
                                       </script>";
                                    }
                                    for( $i = 0; $i < count($product);$i++) {
                                        $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                                        echo'<div class="list-car-select">
                                                <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                                <div class="car-information">
                                                    <div class="car-brand">'.$product[$i]['Name'].'</div>
                                                    <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                                    <label for="" class="car-seat">
                                                        <i class="fa-solid fa-people-group"></i>
                                                        '.$product[$i]['Seat'].' chỗ ngồi
                                                    </label>
                                                    <label for="" class="package">
                                                        <i class="fa-solid fa-suitcase"></i>
                                                        '.$product[$i]['Capacity'].' hành lí
                                                    </label>
                                                    <br>
                                                    <label for="" class="car-gearbox">
                                                        <i class="fa-solid fa-gears"></i>
                                                        '.$product[$i]['Model'].'
                                                    </label>
                                                    <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                                        Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                                    </label>
                                                    <a href="main.php?id_product= '. $product[$i]['carCategoryID'] .'" class="book" >Đặt xe</a>
                                                </div>
                                            </div>';
                                    }
                                }
                            }  
                    }
                } 
                else if(isset($_GET['CarBrand'])){
                    $CarBrand = $_GET['CarBrand'];
                        if(isset($_GET['CarType'])){
                            foreach($CarBrand as $Car){
                                $product = $this->model->getArrayIn('carcategory','Brand',$Car);
                                if($product == false) {
                                    echo "<script>alert('Hiện tại xe không sẵn sàng');
                                        window.location.replace('../controller/main.php');
                                        </script>";
                                }
                                for( $i = 0; $i < count($product);$i++) {
                                    $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                                    echo'<div class="list-car-select">
                                            <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                            <div class="car-information">
                                                <div class="car-brand">'.$product[$i]['Name'].'</div>
                                                <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                                <label for="" class="car-seat">
                                                    <i class="fa-solid fa-people-group"></i>
                                                    '.$product[$i]['Seat'].' chỗ ngồi
                                                </label>
                                                <label for="" class="package">
                                                    <i class="fa-solid fa-suitcase"></i>
                                                    '.$product[$i]['Capacity'].' hành lí
                                                </label>
                                                <br>
                                                <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-gears"></i>
                                                    '.$product[$i]['Model'].'
                                                </label>
                                                <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                                    Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                                </label>
                                                <a href="main.php?id_product= '. $product[$i]['carCategoryID'] .'" class="book" >Đặt xe</a>
                                            </div>
                                        </div>';
                            }
                        }  
                    }
                }
                else if((isset($_GET['Price']))){
                    $CarPrice = $_GET['Price'];
                        if(isset($_GET['CarType'])){
                                foreach($CarPrice as $price){
                                    $product = $this->model->getArrayInPrice('carcategory',$price);
                                    if($product == false) {
                                        echo "<script>alert('Hiện tại xe không sẵn sàng');
                                        window.location.replace('../controller/main.php');
                                        </script>";
                                    }
                                    for( $i = 0; $i < count($product);$i++) {
                                        $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                                        echo'<div class="list-car-select">
                                                <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                                <div class="car-information">
                                                    <div class="car-brand">'.$product[$i]['Name'].'</div>
                                                    <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                                    <label for="" class="car-seat">
                                                        <i class="fa-solid fa-people-group"></i>
                                                        '.$product[$i]['Seat'].' chỗ ngồi
                                                    </label>
                                                    <label for="" class="package">
                                                        <i class="fa-solid fa-suitcase"></i>
                                                        '.$product[$i]['Capacity'].' hành lí
                                                    </label>
                                                    <br>
                                                    <label for="" class="car-gearbox">
                                                        <i class="fa-solid fa-gears"></i>
                                                        '.$product[$i]['Model'].'
                                                    </label>
                                                    <label for="" class="car-gearbox">
                                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                                        Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                                    </label>
                                                    <a href="main.php?id_product= '. $product[$i]['carCategoryID'] .'" class="book" >Đặt xe</a>
                                                </div>
                                            </div>';
                                        
                                    }
                            }  
                    }

                }else {
                    $product = $this->model->getArray('carcategory');
                    if($product == false) {
                        echo "<script>alert('Hiện tại xe không sẵn sàng');
                                       window.location.replace('../controller/main.php');
                                       </script>";
                    }
                        for( $i = 0; $i < count($product);$i++) {
                            $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                            echo'<div class="list-car-select">
                                    <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                    <div class="car-information">
                                        <div class="car-brand">'.$product[$i]['Name'].'</div>
                                        <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                        <label for="" class="car-seat">
                                            <i class="fa-solid fa-people-group"></i>
                                            '.$product[$i]['Seat'].' chỗ ngồi
                                        </label>
                                        <label for="" class="package">
                                            <i class="fa-solid fa-suitcase"></i>
                                            '.$product[$i]['Capacity'].' hành lí
                                        </label>
                                        <br>
                                        <label for="" class="car-gearbox">
                                            <i class="fa-solid fa-gears"></i>
                                            '.$product[$i]['Model'].'
                                        </label>
                                        <label for="" class="car-gearbox">
                                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                            Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                        </label>
                                        <a href="main.php?id_product='.$product[$i]['carCategoryID'].'" class="book" >Đặt xe</a>
                                    </div>
                                </div>';
                        }
                    }      
                }
               if(isset($_GET['id_product'])) {    
                 if(isset($_SESSION['pup'])&&
                    isset($_SESSION['dop'])&&
                    isset($_SESSION['put'])&&
                    isset($_SESSION['dot'])){    
                        $idProduct =  $this->model->escape_string($_GET['id_product']);
                        $ctID =  $this->model->escape_string($_SESSION['UserIDcard']);
                        $result = $this->model->query("select * from `booking` where carCategoryID = '$idProduct';", true);
                        $customerID = $this->model->query("select customerID from `accountmanager` where citizenID = '$ctID';", true);
                        if($result === false) {
                            die("Failed in bookingmanager");
                        }
                        if($result === NULL){
                                    $data = array(
                                'customerID' => $this->model->escape_string($customerID[0]['customerID']),
                                'dateFrom' =>  $_SESSION['put'],
                                'dateTo' =>  $_SESSION['dot'],
                                'carCategoryID'	=> $idProduct,
                                'puPlace'=>   $this->model->escape_string($_SESSION['pup']),
                                'doPlace'=>  $this->model->escape_string($_SESSION['dop']),
                                'Quantity'=> '1'
                            );
                            if($this->model->insert('booking', $data) !== false){
                                echo "<script>alert('thêm vào giỏ thành công');
                                        window.location.replace('main.php');
                                        </script>";
                            }
                            else {
                                echo "<script>alert('add: Failed!');
                                        window.location.replace('main.php');
                                        </script>";
                            }
                            
                            // echo "<script>console.log('Debug Objects: (" .gettype($_SESSION['put']). ")' );</script>";
                        }
                // echo "<script>console.log('Debug Objects: " . $_SESSION['put']. "' );</script>";
                    } else {
                        echo "<script>alert('vui lòng nhập đủ thông tin');
                        window.location.replace('main.php');
                        </script>";
                   }
               } 
        } 
    }
?>
