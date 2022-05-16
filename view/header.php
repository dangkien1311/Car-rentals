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
       include "../model//controller.php";
       include "../controller/login.php";
       include "../model//model.php";
       session_start();
    ?>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <img src="../view/assets/img/logoCar.png" alt="" width="80px">
            </div>

            <ul id="nav">
                <li class="user-management">
                    <button class="user-management-btn js-user-management-btn" onclick="showHideUserManagement()">
                        <!-- <i class="fa-solid fa-pen-to-square"></i>
                        Quản lí đặt chỗ -->
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
                        <input id="login-phone-number" name ="signInNum" type="text" required class="user-management-input" placeholder="Số điện thoại">
                        <label for="user-management-password" class="user-management-label">
                            <i class="fa-solid fa-key"></i>
                            Mật khẩu
                        </label>
                        <input id="user-management-password" name ="signInpass" type="password" required class="user-management-input" placeholder="Mật khẩu">
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
        <form form action="" method ="POST" class="register-modal js-register-modal" >
         <?php
                new loginManager();
         ?>  
        <div class="register-container js-register-container">
            <div class="register-close js-close-register">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <header class="register-header">
                Tham gia dịch vụ thuê xe giá rẻ
            </header>
            <div class="register-content">
                <div class="register-introduce">
                    <div class="register-intro">
                        <p class="register-intro-p">Là một chủ tài khoản bạn có thể:</p>
                        <label for="" class="register-intro-label">
                            <i class="fa-solid fa-circle-check"></i>
                            Được tham gia các giao dịch và chương trình độc quyền
                        </label>
    
                        <label for="" class="register-intro-label">
                            <i class="fa-solid fa-circle-check"></i>
                            Quản lý tất cả các lượt đặt trước của bạn
                        </label>
    
                        <label for="" class="register-intro-label">
                            <i class="fa-solid fa-circle-check"></i>
                            Lưu trữ chi tiết thanh toán và tài xế để đặt chỗ nhanh hơn
                        </label>
    
                        <label for="" class="register-intro-label">
                            <i class="fa-solid fa-circle-check"></i>
                            So sánh nhiều báo giá để tìm ra thỏa thuận hoàn hảo
                        </label>
                    </div>
    
                    <div class="password-intro">
                        <label for="" class="password-order">Mật khẩu của bạn nên có ít nhất:</label>
                        <label for="" class="password-intro-label">
                            <i class="fa-solid fa-circle-check"></i>
                            8 ký tự (tối đa 60)
                        </label>
                        <label for="" class="password-intro-label">
                            <i class="fa-solid fa-circle-check"></i>
                            3 trong số này:
                        </label>
    
                        <ul class="password-request">
                            <li>1 số</li>
                            <li>1 chữ viết hoa</li>
                            <li>1 chữ viết thường</li>
                            <li>1 ký tự đặc biệt (ví dụ ? # !)</li>
                        </ul>
                    </div>
                </div>
                <div class="registration-frame">
                    <header class="register-frame-header">Đăng ký</header>
                    <label for="register-phone-number"  class="register-frame-label">
                        <i class="fa-solid fa-square-phone"></i>
                            Số điện thoại
                    </label>
                    <input id="register-phone-number" name = "phone_data" type="text" required class="register-frame-input" placeholder="Số điện thoại">
                    <label for="register-identify" class="register-frame-label">
                        <i class="fa-solid fa-id-card"></i>
                        Thẻ căn cước
                    </label>
                    <input id="register-identify" name = "reg_data" type="text" required class="register-frame-input" placeholder="Số thẻ căn cước">
                    <label for="register-password" class="register-frame-label">
                        <i class="fa-solid fa-key"></i>
                        Mật khẩu
                    </label>
                    <input id="register-password" name = "pass_data" type="password" required class="register-frame-input" placeholder="Mật khẩu">
                    <i class="fa-solid fa-eye js-register-fa-eye" onclick="showHideRegisterPassword()" style="margin-left: -30px; cursor: pointer;"></i>
                    <i class="fa-solid fa-eye-slash js-register-fa-eye-slash" onclick="showHideRegisterPassword()" style="margin-left: -30px; cursor: pointer;"></i>
                    <p class="about">Bằng việc đăng nhập hoặc đăng ký tài khoản, bạn đồng ý với Điều Khoản & Điều Kiện và Thông báo về Quyền riêng tư.</p>
                    <button name = "signup" type = "submit" class="register-btn" >Đăng kí</button>
                </div>
            </div>
        </div>
    </form>
    