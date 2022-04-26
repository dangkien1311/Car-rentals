<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <img src="./assets/img/logo1.png" alt="" height="50px" width="80px">
            </div>

            <ul id="nav">
                <li class="user-management">
                    <a href="">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Quản lí đặt chỗ
                    </a>
                    <div class="nav-user-management">
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
                    <a href="">
                        <i class="fa-solid fa-phone"></i>
                        Hotline
                    </a>
                    <ul class="hotline-select">
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
                    <a href="">
                        <i class="fa-solid fa-circle-user"></i>
                        Đăng nhập
                    </a>
                    <div class="nav-user-management">
                        <header class="user-management-header">Đăng nhập vào tài khoản của bạn</header>
                        <p class="user-management-sub-header">Đăng nhập để quản lý tài khoản và đăng ký của bạn.</p>
                        <label for="login-phone-number" class="user-management-label">
                            <i class="fa-solid fa-square-phone"></i>
                            Số điện thoại
                        </label>
                        <input id="login-phone-number" type="text" class="user-management-input" placeholder="Số điện thoại">
                        <label for="user-management-password" class="user-management-label">
                            <i class="fa-solid fa-key"></i>
                            Mật khẩu
                        </label>
                        <input id="user-management-password" type="password" class="user-management-input" placeholder="Mật khẩu">
                        <div class="login-select">
                            <button class="login-btn">
                                Đăng nhập
                            </button>
                            <p class="or">hoặc</p>
                            <button class="register js-open-register">Tạo một tài khoản</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="slider">
            <div class="slider__background">

                <img src="./assets/img/ha-giang.png" alt="">
            </div>
            <form action="test.php" method = "get">
            <div class="content">
                <div class="content-select">
                    <div class="pick-up-location">
                        <label for="pu">
                            <i class="fa-solid fa-location-dot"></i>
                        </label>
                        <select name="pu" id="pu">
                            <option value="">--Điểm bịp--</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                        </select>
                        <!-- <input id="pu-input" type="text" name = "pickUp" class="pick-up-location-input" placeholder="Địa điểm lấy xe"> -->
                    </div>
                    <div class="drop-off-location">
                        <label for="do">
                            <i class="fa-solid fa-location-dot"></i>
                        </label>
                        <select name="do" id="do">
                            <option value="">--Điểm mù--</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                        </select>
                        <!-- <input id="do-input" type="text" name ="dropOff" class="drop-off-location-input" placeholder="Địa điểm trả xe"> -->
                    </div>
                    <div class="pick-up-time">
                        <!-- <label for="pu-time-input">
                            <i class="fa-solid fa-calendar-days"></i>
                        </label> -->
                        <input id="pu-time-input" type="datetime-local" name = "pickUpDate" class="pick-up-time-input" placeholder="Thời gian lấy xe">
                    </div>
                    <div class="drop-off-time">
                        <!-- <label onclick="openCalendar()" for="do-time-input">
                            <i class="fa-solid fa-calendar-days"></i>
                        </label> -->
                        <input id="do-time-input" type="datetime-local" name = "dropOffDate" class="drop-off-time-input" placeholder="Thời gian trả xe">
                    </div>
                </div>
                <div class="search-wrapper">
                    <button type = "submit" class="search">tìm chuyến</button>
                </div>
            </div>
            </form>
        </div>

        <div id="contain">
            <div id="common question">

            </div>

            <div id="related_searches">

            </div>
        </div>

        <div id="footer">
             
        </div>
    </div>

    <div class="register-modal js-register-modal">
        <div class="register-container js-register-container">
            <div class="register-close js-close-register">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <header class="register-header">
                Tham gia dịch vụ thuê xe giá đắt
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
                <form action="test.php" method ="POST" class="registration-frame">
                    <header class="register-frame-header">Đăng ký</header>
                    <label for="register-phone-number"  class="register-frame-label">
                        <i class="fa-solid fa-square-phone"></i>
                            Số điện thoại
                    </label>
                    <input id="register-phone-number" name = "phone_data" type="text" class="register-frame-input" placeholder="Số điện thoại">
                    <label for="register-identify" class="register-frame-label">
                        <i class="fa-solid fa-id-card"></i>
                        Thẻ căn cước
                    </label>
                    <input id="register-identify" name = "reg_data" type="text" class="register-frame-input" placeholder="Số thẻ căn cước">
                    <label for="register-password" class="register-frame-label">
                        <i class="fa-solid fa-key"></i>
                        Mật khẩu
                    </label>
                    <input id="register-password" name = "pass_data" type="text" class="register-frame-input" placeholder="Mật khẩu">
                    <p class="about">Bằng việc đăng nhập hoặc đăng ký tài khoản, bạn đồng ý với Điều Khoản & Điều Kiện và Thông báo về Quyền riêng tư.</p>
                    <button type = "submit" class="register-btn">Đăng kí</button>
                </form>
            </div>
        </div>
    </div>

    <SCript>
        const modal = document.querySelector('.js-register-modal')
        const openRegister = document.querySelector('.js-open-register')
        const closeRegister = document.querySelector('.js-close-register')
        const registerRegister = document.querySelector('.js-register-container')

        openRegister.addEventListener('click', function () {
            modal.classList.add('open')
        })

        closeRegister.addEventListener('click', function () {
            modal.classList.remove('open')
        })

        modal.addEventListener('click', function () {
            modal.classList.remove('open')
        })

        registerRegister.addEventListener('click', function (event) {
            event.stopPropagation()
        })
        
    </SCript>

</body>
</html>