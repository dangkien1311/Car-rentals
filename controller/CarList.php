<?php
include "../model/controller.php";
include "../model/model.php";
    class CarList extends controller {
        function __construct()
        {
            parent::__construct();
            if((isset($_GET['Price'])) && (isset($_GET['CarBrand']))){
                $CarPrice = $_GET['Price'];
                $CarBrand = $_GET['CarBrand'];
                    if(isset($_GET['CarType'])){
                        foreach($CarBrand as $Car){
                            foreach($CarPrice as $price){
                                $product = $this->model->getArrayInPriceAndCar('carcategory','Brand',$Car,$price);
                                if($product == false) {
                                    die("Hiện tại xe không sẵn sàng bấm sort để tiếp tục");

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
                                            <button class="book">Đặt xe</button>
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
                                    <button class="book">Đặt xe</button>
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
                                    die("Hiện tại xe không sẵn sàng bấm sort để tiếp tục");

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
                                            <button class="book">Đặt xe</button>
                                        </div>
                                        </div>';
                                    
                                }
                         }  
                   }

            }else {
                $product = $this->model->getArray('carcategory');
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
                            <button class="book">Đặt xe</button>
                        </div>
                    </div>';
                    }
                }      
            }
        } 
?>
