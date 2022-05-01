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
    <title>mvc</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../view/assets/css/home.css">
    <link rel="stylesheet" href="../view/assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <img src="../view//assets//img//logo1.png" alt="" height="50px" width="80px">
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
                    <button class="hotline-btn js-hotline-btn" onclick="showHideHomeHotlineFrame()">
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
                    <ul class="nav-user js-login">
                        <li>Số điện thoại: 0379883623</li>
                        <li>Thẻ căn cước: 034202004760</li>
                        <li>
                            <a href="index.php" class="logout">
                                Đăng xuất
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
