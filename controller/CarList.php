<?php
    include '../model/model.php';
    $conn = new database('carrental');
    if(isset($_POST['action'])){
        $sql = "SELECT * FROM carcategory WHERE NOT EXISTS (SELECT * 
        FROM bookingdetail 
        WHERE carcategory.carCategoryID = bookingdetail .carCategoryID)";
        if(isset($_POST['brand'])) {
            $CarBrand = implode(', ', $_POST['brand']);
            $sql .= "AND Brand IN ('".$CarBrand."')";
        }
        if(isset($_POST['price'])) {
            $PriceVal = implode(', ', $_POST['price']);
            if($PriceVal == 1) {
                $sql .="AND dailyHireRate BETWEEN 1 AND 2";
            }
            if($PriceVal == 2) {
                $sql .="AND dailyHireRate BETWEEN 2 AND 3";
            }
            if($PriceVal == 3) {
                $sql .="AND dailyHireRate BETWEEN 3 AND 4";
            }
            if($PriceVal == 4) {
                $sql .="AND dailyHireRate > 4";
            }
        }
        $result = $conn->query($sql,true);
        if(!$result) {
            die("<h3>No Products Found</h3>");
        } else {
            $html = ''; 
            if(count($result) > 0) {
                if(strpos($_SERVER['HTTP_REFERER'], 'index.php') !== false) {
                    echo "<script>console.log('Debug Objects: " . $_SERVER['SCRIPT_FILENAME']. "' );</script>";
                for( $i = 0; $i < count($result);$i++) {
                    $EachCarPrice = number_format((float)$result[$i]['dailyHireRate'] * 1000000,0,'','.');
                    $html.='<div class="list-car-select">
                            <img src="'.$result[$i]['CarIMG'].'" alt="" class="car-img">
                            <div class="car-information">
                                <div class="car-brand">'.$result[$i]['Name'].'</div>
                                <p for="" class="reg-number">Biển số xe: '.$result[$i]['regNumber'].'</p>
                                <label for="" class="car-seat">
                                    <i class="fa-solid fa-people-group"></i>
                                    '.$result[$i]['Seat'].' chỗ ngồi
                                </label>
                                <label for="" class="package">
                                    <i class="fa-solid fa-suitcase"></i>
                                    '.$result[$i]['Capacity'].' hành lí
                                </label>
                                <br>
                                <label for="" class="car-gearbox">
                                    <i class="fa-solid fa-gears"></i>
                                    '.$result[$i]['Model'].'
                                </label>
                                <label for="" class="car-gearbox">
                                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                    Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                </label>
                                <a href="" class="book" >Vui lòng đăng nhập để đặt xe </a>
                            </div>
                        </div>';
                }
             } else {
                    for( $i = 0; $i < count($result);$i++) {
                    $EachCarPrice = number_format((float)$result[$i]['dailyHireRate'] * 1000000,0,'','.');
                    $html.= '<div class="list-car-select">
                    <img src="'.$result[$i]['CarIMG'].'" alt="" class="car-img">
                    <div class="car-information">
                        <div class="car-brand">'.$result[$i]['Name'].'</div>
                        <p for="" class="reg-number">Biển số xe: '.$result[$i]['regNumber'].'</p>
                        <label for="" class="car-seat">
                            <i class="fa-solid fa-people-group"></i>
                            '.$result[$i]['Seat'].' chỗ ngồi
                        </label>
                        <label for="" class="package">
                            <i class="fa-solid fa-suitcase"></i>
                            '.$result[$i]['Capacity'].' hành lí
                        </label>
                        <br>
                        <label for="" class="car-gearbox">
                            <i class="fa-solid fa-gears"></i>
                            '.$result[$i]['Model'].'
                        </label>
                        <label for="" class="car-gearbox">
                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                        </label>
                        <a href="main.php?id_product='.$result[$i]['carCategoryID'].'" class="book" >Đặt xe</a>
                    </div>
                </div>';
             }
            }
            } else {
                $html = "<h3>No Products Found</h3>";
            }
        }
        echo $html;
    }
    if(isset($_GET['id_product'])) {    
        if(isset($_SESSION['pup'])&&
           isset($_SESSION['dop'])&&
           isset($_SESSION['put'])&&
           isset($_SESSION['dot'])){    
               $idProduct =  $conn->escape_string($_GET['id_product']);
               $ctID =  $conn->escape_string($_SESSION['UserIDcard']);
               $customerID = $conn->query("select customerID from `accountmanager` where citizenID = '$ctID';", true);
               $result = $conn->query("select * from `usercart` where carCategoryID = '$idProduct';", true);
            //    if($result === false) {
            //        die("Failed in bookingmanager");
            //    }
               if($result === NULL){
                           $data = array(
                        'customerID' => $customerID[0]['customerID'],
                       'dateFrom' =>  $_SESSION['put'],
                       'dateTo' =>  $_SESSION['dot'],
                       'carCategoryID'	=> $idProduct,
                       'puPlace'=>   $conn->escape_string($_SESSION['pup']),
                       'doPlace'=>  $conn->escape_string($_SESSION['dop']),
                   );
                   if($conn->insert('usercart', $data) !== false){
                       echo "<script>alert('thêm vào giỏ thành công');
                               window.location.replace('main.php');
                               </script>";
                   }
                   else {
                       echo "<script>alert('add: Failed!');
                               window.location.replace('main.php');
                               </script>";
                   }
                   
                //    echo "<script>console.log('Debug Objects: (" .gettype($_SESSION['put']). ")' );</script>";
               } else {
                    echo "<script>alert('xe đã tồn tại trong giỏ hàng');
                    window.location.replace('main.php');
                    </script>";
               }
        // echo "<script>console.log('Debug Objects: " . $_SESSION['put']. "' );</script>";
           } else {
               echo "<script>alert('vui lòng nhập đủ thông tin');
               window.location.replace('main.php');
               </script>";
          }
        // echo "<script>console.log('Debug Objects: " . $_SESSION['put']. "' );</script>";
      } 
?>