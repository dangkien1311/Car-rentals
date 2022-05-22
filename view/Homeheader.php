<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../view/assets/css/result.css">
    <link rel="stylesheet" href="../view/assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../view/assets/CarSort.js"></script>
</head>
<body>
    <?php
        session_start();
        include '../model/controller.php';
        // include '../model/model.php';
        include '../controller/PaymentDetail.php';
        include '../controller/CarList.php';
    ?>
    <div id="wrapper">
        <div id="header">
            <a href="../controller/main.php" id="logo">
                <img src="../view/assets/img/logoCar.png" alt="" width="80px">
            </a>
            <ul id="nav">
                <li class="user-management">
                    <button class="user-management-btn js-user-management-btn" onclick="showHideUserManagement()">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Quản lí đặt chỗ
                    </button>
                    <form action ="" method ="POST" class="nav-user-management js-nav-user-management">
                        <header class="user-management-header">Các lượt xe bạn thuê:</header>
                        <div class="rental-car-container">
                            <?php
                                new  PaymentDetails();
                            ?>
                        </div>
                        <div class="rental-car-total-amount">
                            <span class="total-amount">Tổng số tiền: <?php echo $_SESSION['totalamount'];?> vnd/ngày</span>
                            <button name="comfirmButton" type = "submit" class="rental-car-accept">Xác nhận</button>
                        </div>
                    </form>
                    <!-- <div class="rental-car-history">
                        <header class="user-management-header">Các lượt xe bạn thuê:</header>
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
                            <a href="main.php?del_product='.$product[$i]['bookingID'].'" class="rental-car-delete" >Xóa</a>
                        </div>
                    </div> -->
                </li>
                <li class="hotline">
                    <button class="hotline-btn js-hotline-btn" onclick="showHideHotlineFrame()">
                        <i class="fa-solid fa-phone"></i>
                        Hotline
                    </button>
                    <ul class="hotline-select js-hotline-frame">
                        <header class="hotline-header">Hotline</header>
                        <p class="hotline-sub-header">Call me!</p>
                        <li>
                            <p class="number-1">0379883623 - Để phản hồi về dịch vụ và xử lý sự cố</p>
                        </li>
                        <li>
                            <p class="number-2">0378996909 - Để đặt dịch vụ y tế và thuê xe</p>
                        </li>
                    </ul>
                </li>
                <li class="login">
                    <button class="user-management-btn js-login-btn" onclick="showHideLoginFrame()">
                        <i class="fa-solid fa-circle-user"></i>
                        Tài khoản của tôi
                    </button>
                    <div class="rental-car-history-frame js-rental-car-history-frame">
                        <header class="user-management-header">Các lượt xe bạn đã thuê:</header>
                        <div class="rental-car-container">
                            <div class="rental-car-box">
                                <div class="rental-car-img">
                                    <img src="../view/assets/CarIMG/Mercedesc200.png" alt="">
                                </div>
                                <div class="rental-car-information">
                                    <span class="rental-car-brand">Mercedes 200</span>
                                    <br>
                                    <span class="rental-car-about">Điểm nhận: Hà Nội</span>
                                    <br>
                                    <span class="rental-car-about">Điểm trả: Thái Bình</span>
                                    <br>
                                    <span class="rental-car-about">Thuê từ : 15:00 đến : 17:00</span>
                                </div>  
                            </div>
                            <div class="rental-car-box">
                                <div class="rental-car-img">
                                    <img src="../view/assets/CarIMG/Mercedesc200.png" alt="">
                                </div>
                                <div class="rental-car-information">
                                    <span class="rental-car-brand">Mercedes 200</span>
                                    <br>
                                    <span class="rental-car-about">Điểm nhận: Hà Nội</span>
                                    <br>
                                    <span class="rental-car-about">Điểm trả: Thái Bình</span>
                                    <br>
                                    <span class="rental-car-about">Thuê từ : 15:00 đến : 17:00</span>
                                </div>  
                            </div>
                            <div class="rental-car-box">
                                <div class="rental-car-img">
                                    <img src="../view/assets/CarIMG/Mercedesc200.png" alt="">
                                </div>
                                <div class="rental-car-information">
                                    <span class="rental-car-brand">Mercedes 200</span>
                                    <br>
                                    <span class="rental-car-about">Điểm nhận: Hà Nội</span>
                                    <br>
                                    <span class="rental-car-about">Điểm trả: Thái Bình</span>
                                    <br>
                                    <span class="rental-car-about">Thuê từ : 15:00 đến : 17:00</span>
                                </div>  
                            </div>
                            <div class="rental-car-box">
                                <div class="rental-car-img">
                                    <img src="../view/assets/CarIMG/Mercedesc200.png" alt="">
                                </div>
                                <div class="rental-car-information">
                                    <span class="rental-car-brand">Mercedes 200</span>
                                    <br>
                                    <span class="rental-car-about">Điểm nhận: Hà Nội</span>
                                    <br>
                                    <span class="rental-car-about">Điểm trả: Thái Bình</span>
                                    <br>
                                    <span class="rental-car-about">Thuê từ : 15:00 đến : 17:00</span>
                                </div>  
                            </div>
                            <div class="rental-car-box">
                                <div class="rental-car-img">
                                    <img src="../view/assets/CarIMG/Mercedesc200.png" alt="">
                                </div>
                                <div class="rental-car-information">
                                    <span class="rental-car-brand">Mercedes 200</span>
                                    <br>
                                    <span class="rental-car-about">Điểm nhận: Hà Nội</span>
                                    <br>
                                    <span class="rental-car-about">Điểm trả: Thái Bình</span>
                                    <br>
                                    <span class="rental-car-about">Thuê từ : 15:00 đến : 17:00</span>
                                </div>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="nav-user js-login">
                        <button class="user-information-btn js-user-information-btn">
                            Thông tin tài khoản của tôi
                        </button>
                        <button class="rental-car-history js-rental-car-history">
                            Lịch sử đặt xe 
                        </button>
                        
                        <a href="../controller/logout.php" class="logout">
                            Đăng xuất
                        </a>
                    </div>
                    
                </li>
            </ul>
        </div>
        <form action ="" method ="POST" class="user-information-modal js-user-information-modal">
             <?php
                include "../controller/login.php";
                new UserIformationController(); 
            ?> 
            <div class="container js-container">
                <div class="user-information-close js-user-information-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <header class="user-information-header">Thông tin chi tiết của tôi</header>
                <div class="user-information-body">
                    <div class="user-phone-edit-box">
                        <span class="user-information">Số điện thoại: </span>
                        <input id="user-phone-input" type="text" name = "UserPhoneNum" class="user-information-input js-user-phone" value="" disabled>
                        <label for="user-phone-input" class="edit-user-phone js-edit-user-phone">
                            <i class="fa-solid fa-pen js-fa-pen"></i>
                            Chỉnh sửa
                        </label>
                        <div class="user-new-phone js-user-new-phone">
                            <div class="wrapper-input">
                                <span>Số điện thoại mới: </span>
                                <input type="text" name= "newUserPhoneNum" class="user-new-phone-input">
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="user-Id-box">
                        <span class="user-information">Thẻ căn cước: </span>
                        <input id = "user-id-input" type="text"  name = "UserIdNum" class="user-information-input" value="" disabled>
                    </div>
                    <button type = "submit" name="UserConfirm" class="accept js-accept">
                        OK
                    </button>
                </div>
            </div>
        </form>
        