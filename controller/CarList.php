<?php
include "../model/controller.php";
include "../model/model.php";
    class CarList extends controller {
        function __construct()
        {
            parent::__construct();
            if(isset($_GET['CarBrand'])){
                $CarBrand = $_GET['CarBrand'];
                    if(isset($_GET['cPrice'][0])){
                         if(isset($_GET['CarType'])){
                            foreach($CarBrand as $Car){
                                 $product = $this->model->getArrayInPrice('carcategory','Brand',$Car,1,2);
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
                        else if(isset($_GET['cPrice'][1])){
                                if(isset($_GET['CarType'])){
                                    echo "<script>console.log('Debug Objects: " . '1'. "' );</script>";
                                    foreach($CarBrand as $Car){
                                    $product = $this->model->getArrayInPrice('carcategory','Brand',$Car,2,3);
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
                       else if(isset($_GET['cPrice'][2])){
                                 if(isset($_GET['CarType'])){
                                    echo "<script>console.log('Debug Objects: " . '2'. "' );</script>";
                                    foreach($CarBrand as $Car){
                                        $product = $this->model->getArrayInPrice('carcategory','Brand',$Car,3,4);
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
                         else if(isset($_GET['cPrice'][3])){
                            if(isset($_GET['CarType'])){
                                echo "<script>console.log('Debug Objects: " . '3'. "' );</script>";
                                foreach($CarBrand as $Car){
                                    $product = $this->model->getArrayInPrice('carcategory','Brand',$Car,4,20);
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
                        } else {
                            if(isset($_GET['CarType'])){
                            foreach($CarBrand as $Car){
                                $product = $this->model->getArrayInPrice('carcategory','Brand',$Car,2,3);
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
            } else {
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
