<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../view/assets/css/styles.css">
    <link rel="stylesheet" href="../view/assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <?php
       include "../model/controller.php";
       include "../controller/login.php";
       include "../model/model.php";
       session_start();
    ?>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <img src="../view/assets/img/logo1.png" alt="" height="50px" width="80px">
            </div>

            <ul id="nav">
                <li class="user-management">
                    <button class="user-management-btn js-user-management-btn" onclick="showHideUserManagement()">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Quản lí đặt chỗ
                    </button>
                    <div class="nav-user-management js-nav-user-management">
                        <header class="user-management-header">Quản lý đặt chỗ</header>
                        <p class="user-management-sub-header">Nếu bạn không có tài khoản, bạn vẫn có thể quản lý đặt xe của mình.</p>
                        <label for="user-management-identify" class="user-management-label">
                            <i class="fa-solid fa-id-card"></i>
                            Thẻ căn cước
                        </label>
                        <input id="user-management-identify" type="text" class="user-management-input" placeholder="Số thẻ căn cước">
                        <label for="user-management-phone-number" class="user-management-label">
                            <i class="fa-solid fa-square-phone"></i>
                            Số điện thoại
                        </label>
                        <input id="user-management-phone-number" type="text" class="user-management-input" placeholder="Số điện thoại">
                        <button class="user-management-select">
                            Chọn
                        </button>
                    </div>
                </li>
                <li class="hotline">
                    <button class="hotline-btn js-hotline-btn" onclick="showHideHotlineFrame()">
                        <i class="fa-solid fa-phone"></i>
                        Hotline
                    </button>
                    <ul class="hotline-select js-hotline">
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
                        Đăng nhập
                    </button>
                    <form action ="" method = "GET" class="nav-user-management js-login">  
                        <?php
                            new signUpManager();
                        ?>
                        <header class="user-management-header">Đăng nhập vào tài khoản của bạn</header>
                        <p class="user-management-sub-header">Đăng nhập để quản lý tài khoản và đăng ký của bạn.</p>
                        <label for="login-phone-number" class="user-management-label">
                            <i class="fa-solid fa-square-phone"></i>
                            Số điện thoại
                        </label>
                        <!-- <input type="hidden" value="<?php echo $rand; ?>" name="randcheck"> -->
                        <input id="login-phone-number" name ="signInNum" type="text" class="user-management-input" placeholder="Số điện thoại">
                        <label for="user-management-password" class="user-management-label">
                            <i class="fa-solid fa-key"></i>
                            Mật khẩu
                        </label>
                        <input id="user-management-password" name ="signInpass" type="password" class="user-management-input" placeholder="Mật khẩu">
                        <i class="fa-solid fa-eye js-login-fa-eye" onclick="showHideLoginPassword()" style="margin-left: -30px; cursor: pointer;"></i>
                        <i class="fa-solid fa-eye-slash js-login-fa-eye-slash" onclick="showHideLoginPassword()" style="margin-left: -30px; cursor: pointer;"></i>
                        <div class="login-select">
                            <button type = "submit" name ="signin" class="login-btn"> Đăng nhập</button>
                            <p class="or">hoặc</p>
                            <a class="register js-open-register">Tạo một tài khoản</a>
                        </div>
                     </form> 
                </li>
            </ul>
        </div>