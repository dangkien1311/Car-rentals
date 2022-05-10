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
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <img src="./assets/img/logo1.png" alt="" height="50px" width="80px">
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
        <div id="container">

            <div id="slider">
                <form action="test.php" method = "get" class="content">
                    <div class="content-select">
                        <div class="pick-up-location">
                            <label for="pu">
                                <i class="fa-solid fa-location-dot"></i>
                            </label>
                            <select name="pu" id="pu">
                                <option value="">--Điểm nhận--</option>
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
                                <option value="">--Điểm trả--</option>
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
                
                </form>
    
            </div>
            <div id="container-body">
                <form action = "" method = "get" class="container-body-category">
                    <header class="container-body-category-header">
                        <i class="fa-solid fa-filter"></i>
                        BỘ LỌC TÌM KIẾM
                    </header>
                    <label class="category-select-header js-types-of-cars">
                        Các loại xe
                        <i class="fa-solid fa-sort-down js-types-of-cars-down"></i>
                        <i class="fa-solid fa-sort-up js-types-of-cars-up"></i>
                    </label>
                    <div class="category-select-box js-types-of-cars-box">
                        <label class="category-select">
                            <input type="checkbox" name = "CarBrand[]" value = "Hyundai">
                            Xe Hyundai
                        </label>
                        <label class="category-select">
                            <input type="checkbox" name = "CarBrand[]" value = "BMW">
                            Xe BMW
                        </label>
                        <label class="category-select">
                            <input type="checkbox" name = "CarBrand[]" value = "Audi">
                            Xe Audi
                        </label>
                        <label class="category-select">
                            <input type="checkbox" name = "CarBrand[]" value= "Mercedes">
                            Xe Mercedes
                        </label>
                    </div>
                    <label class="category-select-header js-price-range">
                        Khoảng giá(vnd/ngày)
                        <i class="fa-solid fa-sort-down js-price-range-down"></i>
                        <i class="fa-solid fa-sort-up js-price-range-up"></i>
                    </label>
                    <div class="category-select-box js-price-range-box">
                        <label class="category-select">
                            <input type="checkbox" name = "Price[]" value = "1">
                            Từ 1.000.000 - 2.000.000 vnd
                        </label>
                        <label class="category-select">
                            <input type="checkbox" name = "Price[]" value = "2">
                            Từ 2.000.000 - 3.000.000 vnd
                        </label>
                        <label class="category-select">
                            <input type="checkbox" name = "Price[]" value = "3">
                            Từ 3.000.000 - 4.000.000 vnd
                        </label>
                        <label class="category-select">
                            <input type="checkbox" name = "Price[]" value = "4">
                            Trên 4.000.000 vnd
                        </label>
                    </div> 
                    <input name = "CarType" type="submit" value="Sort">
                </form>
                <div class="list-car">
                    <header class="list-car-header">Kết quả tìm kiếm:</header>
                    <?php
                        include '../controller/CarList.php';
                        new CarList();
                    ?>
        <div id="footer">
             
        </div>
        <div class="user-information-modal js-user-information-modal">
        <div class="container js-container">
            <div class="user-information-close js-user-information-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <header class="user-information-header">Thông tin chi tiết của tôi</header>
            <div class="user-information-body">
                <span class="user-information">Số điện thoại: </span>
                <input id="user-phone-input" type="text" class="user-information-input js-user-phone" value="0379883623" disabled>
                <label for="user-phone-input" class="edit-user-phone js-edit-user-phone">
                    <i class="fa-solid fa-pen js-fa-pen"></i>
                    Chỉnh sửa
                </label>
                <br>
                <span class="user-information">Thẻ căn cước: </span>
                <input type="text" class="user-information-input" value="034202004760" disabled>
                <br>
                <button class="accept-edit js-accept-edit">
                    OK
                </button>
            </div>
        </div>
    </div>
    </div>

    <div class="user-information-modal js-user-information-modal">
        <div class="container js-container">
            <div class="user-information-close js-user-information-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <header class="user-information-header">Thông tin chi tiết của tôi</header>
            <div class="user-information-body">
                <span class="user-information">Số điện thoại: </span>
                <input id="user-phone-input" type="text" class="user-information-input js-user-phone" value="0379883623" disabled>
                <label for="user-phone-input" class="edit-user-phone js-edit-user-phone">
                    <i class="fa-solid fa-pen js-fa-pen"></i>
                    Chỉnh sửa
                </label>
                <br>
                <span class="user-information">Thẻ căn cước: </span>
                <input type="text" class="user-information-input" value="034202004760" disabled>
                <br>
                <button class="accept-edit js-accept-edit">
                    OK
                </button>
            </div>
        </div>
    </div>

    <SCript>
        const showLoginFrame = document.querySelector('.js-login')
        const showUserManagement = document.querySelector('.js-nav-user-management')
        const userManagement = document.querySelector('.js-user-management-btn')
        const login = document.querySelector('.js-login-btn')
        const hotline = document.querySelector('.js-hotline-btn')
        const showHotlineFrame = document.querySelector('.js-hotline-frame')
        const userInformationBtn = document.querySelector('.js-user-information-btn')
        const userInformationModal = document.querySelector('.js-user-information-modal')
        const userInformationContainer = document.querySelector('.js-container')
        const userInformationClose = document.querySelector('.js-user-information-close')
        const userInformationAcceptEdit = document.querySelector('.js-accept-edit')
        const userInformationEdit = document.querySelector('.js-edit-user-phone')
        const userInformationFapen = document.querySelector('.js-fa-pen')
        const userPhone = document.querySelector('.js-user-phone')
        var container = document.getElementById("container")
        var header = document.getElementById("header")
        const typesOfCars = document.querySelector('.js-types-of-cars')
        const typesOfCarsBox = document.querySelector('.js-types-of-cars-box')
        const priceRange = document.querySelector('.js-price-range')
        const priceRangeBox = document.querySelector('.js-price-range-box')
        const typesOfCarsDown = document.querySelector('.js-types-of-cars-down')
        const typesOfCarsUp = document.querySelector('.js-types-of-cars-up')
        const priceRangeDown = document.querySelector('.js-price-range-down')
        const priceRangeUp = document.querySelector('.js-price-range-up')


        function showHideUserManagement() {
            if (showUserManagement.style.display == 'none') {
                showUserManagement.style.display = 'block'
                userManagement.style.color = 'rgb(0, 96, 196)'
                userManagement.style.backgroundColor = '#fff'
            } else {
                showUserManagement.style.display = 'none'
                userManagement.style.color = '#000'
                userManagement.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            }
        }

        function showHideLoginFrame() {
            if (showLoginFrame.style.display == 'none') {
                showLoginFrame.style.display = 'block'
                login.style.color = 'rgb(0, 96, 196)'
                login.style.backgroundColor = '#fff'
            } else {
                showLoginFrame.style.display = 'none'
                login.style.color = '#000'
                login.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            }
        }

        function showHideHotlineFrame() {
            if (showHotlineFrame.style.display == 'none') {
                showHotlineFrame.style.display = 'block'
                hotline.style.color = 'rgb(0, 96, 196)'
                hotline.style.backgroundColor = '#fff'
            } else {
                showHotlineFrame.style.display = 'none'
                hotline.style.color = '#000'
                hotline.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            }
        }

        container.addEventListener('click', function () {
            if (showLoginFrame.style.display === 'block') {
                showLoginFrame.style.display = 'none'
                login.style.color = '#000'
                login.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showLoginFrame.style.display = 'none'
            }

            if (showHotlineFrame.style.display === 'block') {
                showHotlineFrame.style.display = 'none'
                hotline.style.color = '#000'
                hotline.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showHotlineFrame.style.display = 'none'
            }

            if (showUserManagement.style.display === 'block') {
                showUserManagement.style.display = 'none'
                userManagement.style.color = '#000'
                userManagement.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showUserManagement.style.display = 'none'
            }
        })

        header.addEventListener('click', function () {
            if (showLoginFrame.style.display === 'block') {
                showLoginFrame.style.display = 'none'
                login.style.color = '#000'
                login.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showLoginFrame.style.display = 'none'
            }

            if (showHotlineFrame.style.display === 'block') {
                showHotlineFrame.style.display = 'none'
                hotline.style.color = '#000'
                hotline.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showHotlineFrame.style.display = 'none'
            }

            if (showUserManagement.style.display === 'block') {
                showUserManagement.style.display = 'none'
                userManagement.style.color = '#000'
                userManagement.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showUserManagement.style.display = 'none'
            }
        })

        showUserManagement.addEventListener('click', function (event) {
            event.stopPropagation()
        
        })

        showLoginFrame.addEventListener('click', function (event) {
            event.stopPropagation()
        })

        showHotlineFrame.addEventListener('click', function (event) {
            event.stopPropagation()
        })

        userManagement.addEventListener('click', function (event) {
            if (showLoginFrame.style.display === 'none' && showHotlineFrame.style.display === 'none') {
                event.stopPropagation()
            }
        })

        login.addEventListener('click', function (event) {
            if (showUserManagement.style.display === 'none' && showHotlineFrame.style.display === 'none') {
                event.stopPropagation()
            }
        })

        hotline.addEventListener('click', function (event) {
            if (showUserManagement.style.display === 'none' && showLoginFrame.style.display === 'none') {
                event.stopPropagation()
            }
        })

        userInformationBtn.addEventListener('click', function () {
            userInformationModal.classList.add('open')
        })

        userInformationClose.addEventListener('click', function () {
            userInformationModal.classList.remove('open')
            userPhone.disabled = true
        })

        userInformationAcceptEdit.addEventListener('click', function () {
            userInformationModal.classList.remove('open')
            userPhone.disabled = true
        })

        userInformationModal.addEventListener('click', function () {
            userInformationModal.classList.remove('open')
            userPhone.disabled = true
        })

        userInformationContainer.addEventListener('click', function (event) {
            event.stopPropagation()
        })

        userInformationEdit.addEventListener('mouseover', function () {
            userInformationEdit.style.textDecoration = 'underline'
            userInformationFapen.classList.add('open')
        })

        userInformationEdit.addEventListener('mouseout', function () {
            userInformationEdit.style.textDecoration = 'none'
            userInformationFapen.classList.remove('open')
        })

        userInformationEdit.addEventListener('click', function () {
            userPhone.disabled = false
            userPhone.value = ""
        })

        typesOfCars.addEventListener('click', function () {
            if (typesOfCarsBox.style.display === 'none') {
                typesOfCarsBox.style.display = 'block'
                typesOfCarsDown.classList.add('close')
                typesOfCarsUp.classList.add('open')
            } else {
                typesOfCarsBox.style.display = 'none'
                typesOfCarsDown.classList.remove('close')
                typesOfCarsUp.classList.remove('open')
            }
        })

        priceRange.addEventListener('click', function () {
            if (priceRangeBox.style.display === 'none') {
                priceRangeBox.style.display = 'block'
                priceRangeDown.classList.add('close')
                priceRangeUp.classList.add('open')
            } else {
                priceRangeBox.style.display = 'none'
                priceRangeDown.classList.remove('close')
                priceRangeUp.classList.remove('open')
            }
        })
               
    </SCript>
</body>
</html>
