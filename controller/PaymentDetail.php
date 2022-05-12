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
                    if($this->model->delete('booking',$deliteam,'carCategoryID')){
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
                             echo "<script>alert('xác nhận thành công');
                            window.location.replace('../controller/main.php');
                            </script>";
                }
            }
        }
    }
?>