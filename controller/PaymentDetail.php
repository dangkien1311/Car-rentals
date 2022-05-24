<?php
    class PaymentDetails extends controller {
        function __construct()
        {
            parent::__construct();
            $userId = $_SESSION['UserIDcard'];
            $total = 0;
            $product = $this->model->getArrayDetail($userId);
            if($product == false) {
                $_SESSION['totalamount'] = 0;
                echo '';
            } else {
                for( $i = 0; $i < count($product);$i++){
                    $total += $product[$i]['dailyHireRate'];
                    $_SESSION['totalamount'] = number_format((float)$total * 1000000,0,'','.');
                }
                for( $i = 0; $i < count($product);$i++){
                        echo '
                            <div class="rental-car-box">
                                <div class="rental-car-img">
                                    <img src="'.$product[$i]['CarIMG'].'" alt="">
                                </div>
                                <div class="rental-car-information">
                                    <span class="rental-car-brand">'.$product[$i]['Name'].'</span>
                                    <br>
                                    <span class="rental-car-about">Điểm nhận: '.$product[$i]['puPlace'].'</span>
                                    <br>
                                    <span class="rental-car-about">Điểm trả: '.$product[$i]['doPlace'].'</span>
                                    <br>
                                    <span class="rental-car-about">Thuê từ : '.$product[$i]['dateFrom'].' đến : '.$product[$i]['dateTo'].'</span>
                                </div>
                                <a href="main.php?del_product='.$product[$i]['carCategoryID'].'" class="rental-car-delete" >Xóa</a>
                            </div>';
                }
                if(isset($_GET['del_product'])){
                    $deliteam = $_GET['del_product'];
                    if($this->model->delete('usercart',$deliteam,'carCategoryID')){
                        echo "<script>alert('xóa sản phẩm thành công');
                            window.location.replace('../controller/main.php');
                            </script>";
                    }
                    else{
                        echo "<script>alert('xóa sản phẩm thất bại');
                        window.location.replace('../controller/main.php');
                        </script>";
                    }
                    // echo "<script>console.log('Debug Objects: " . $deliteam. "' );</script>";
                }
                if(isset($_POST['comfirmButton'])){
                    $userID =  $this->model->escape_string($_SESSION['UserIDcard']);
                    $customerID = $this->model->query("select customerID from `accountmanager` where citizenID = '$userID';", true);
                    $bookingdetail = $this->model->query("select * from `usercart` where customerID = '". $customerID[0]['customerID']."';", true);
                    $IdtoString = $this->model->escape_string($customerID[0]['customerID']);
                    $this->model->query("DELETE FROM `usercart` WHERE customerID = '".$IdtoString."'");
                    $CurrentTime = date('Y-m-d H:i:s');
                    $bookingData = "INSERT INTO `booking` (`customerID`,`bookingTime`,`bookingStatus`,`paymentMethod`)
                    VALUES ('".$IdtoString."','".$CurrentTime."','IN PROGRESS','CASH')";
                    if($this->model->query($bookingData) != false) {
                        $bookingIDselect = $this->model->query("select MAX(bookingID) as MAXID from `booking` where customerID = '".$customerID[0]['customerID']."';", true);
                        // $bookingID = $this->model->escape_string($bookingIDselect);
                        $bookingHistory = "INSERT INTO `userbookinghistory` (`customerID`, `dateFrom`, `dateTo`,`carCategoryID`,`puPlace`,`doPlace`,`bookingTime`)
                                                VALUES";
                        $bookingdetailData = "INSERT INTO `bookingdetail` (`bookingID`, `dateFrom`, `dateTo`,`carCategoryID`,`puPlace`,`doPlace`)
                                                VALUES";
                        // for( $i = 0; $i < count( $bookingdetail);$i++) {
                        //     $bookingdetailData.= "('".$bookingID."', 
                        //                         '".$bookingdetail[$i]['dateFrom']."',
                        //                         '".$bookingdetail[$i]['dateTo']."',
                        //                         '".$bookingdetail[$i]['carCategoryID']."',
                        //                         '".$bookingdetail[$i]['puPlace']."',
                        //                         '".$bookingdetail[$i]['doPlace']."'),";
                        // }
                        for( $i = 0; $i < count( $bookingdetail);$i++) {
                            $bookingHistory .= "('".$IdtoString."',  
                                                '".$bookingdetail[$i]['dateFrom']."',
                                                '".$bookingdetail[$i]['dateTo']."',
                                                '".$bookingdetail[$i]['carCategoryID']."',
                                                '".$bookingdetail[$i]['puPlace']."',
                                                '".$bookingdetail[$i]['doPlace']."',
                                                '".$CurrentTime."'),";

                            $bookingdetailData .= "('".$bookingIDselect[0]['MAXID']."', 
                                                '".$bookingdetail[$i]['dateFrom']."',
                                                '".$bookingdetail[$i]['dateTo']."',
                                                '".$bookingdetail[$i]['carCategoryID']."',
                                                '".$bookingdetail[$i]['puPlace']."',
                                                '".$bookingdetail[$i]['doPlace']."'),";
                        }
                        $bookingHistory = rtrim($bookingHistory, ',');
                        $bookingdetailData = rtrim($bookingdetailData, ',');
                        if($this->model->query($bookingHistory) != false
                            && $this->model->query($bookingdetailData) != false) {
                            echo "<script>alert('xác nhận thành công');
                                    window.location.replace('main.php');
                                    </script>";
                        }
                    }
                }
            }
        }
    }
?>