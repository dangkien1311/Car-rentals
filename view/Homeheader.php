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
</head>
<body>
    <?php
        include '../model/controller.php';
        include '../model/model.php';
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
                        <i class="fa-solid fa-pen-to-square"></i>
                        Quản lí đặt chỗ
                    </button>
                    <div class="nav-user-management js-nav-user-management">
                        <header class="user-management-header">Các lượt xe bạn thuê:</header>
                    </div>
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
                    <div class="nav-user js-login">
                        <button class="user-information-btn js-user-information-btn">
                            Thông tin tài khoản của tôi
                        </button>
                        <a href="./index.php" class="logout">
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
                            <!-- <button type="submit" name="UserConfirm" class="accept-edit">
                                Xác nhận
                            </button> -->
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
        