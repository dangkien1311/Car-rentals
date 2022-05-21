    <div id="container">
        <div id="slider">
            <form action="" method = "get" class="content">
                <?php
                    include "../controller/SearchControl.php";
                    new SearchController();
                ?>
                <div class="content-select">
                    <div class="pick-up-location">
                        <label for="pu">
                            <i class="fa-solid fa-location-dot"></i>
                        </label>
                        <select name="pu" id="pu" required>
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
                        <select name="do" id="do" required >
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
                        <input id="pu-time-input" type="datetime-local" name = "pickUpDate" required class="pick-up-time-input" placeholder="Thời gian lấy xe">
                    </div>
                    <div class="drop-off-time">
                        <!-- <label onclick="openCalendar()" for="do-time-input">
                            <i class="fa-solid fa-calendar-days"></i>
                        </label> -->
                        <input id="do-time-input" type="datetime-local" name = "dropOffDate" required class="drop-off-time-input" placeholder="Thời gian trả xe">
                    </div>
                </div>
                <div class="search-wrapper">
                    <button type = "submit" name = "searchButton" class="search">tìm chuyến</button>
                </div>
            
            </form>
        </div>
        <div id="container-body">
            <form action ="<?php 
                            if(isset($_GET['act'])) {
                                if($_GET['act'] == 'home') {
                                    echo '../controller/main.php';
                                }
                                else {
                                    echo '../controller/index.php';
                                }
                            }
                            ?>" 
                    method = "get" class="container-body-category">
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
                        <input type="checkbox" name = "Price[]" value = "1" onclick="onlyOne(this)">
                        Từ 1.000.000 - 2.000.000 vnd
                    </label>
                    <label class="category-select">
                        <input type="checkbox" name = "Price[]" value = "2" onclick="onlyOne(this)">
                        Từ 2.000.000 - 3.000.000 vnd
                    </label>
                    <label class="category-select">
                        <input type="checkbox" name = "Price[]" value = "3" onclick="onlyOne(this)">
                        Từ 3.000.000 - 4.000.000 vnd
                    </label>
                    <label class="category-select">
                        <input type="checkbox" name = "Price[]" value = "4" onclick="onlyOne(this)">
                        Trên 4.000.000 vnd
                    </label>
                </div> 
                <button name = "CarType" type="submit" class="category-search-btn">
                    Tìm kiếm
                </button>
            </form>
            <form  action = ""  method = "POST" class="list-car">
                <header class="list-car-header"></header>
                <div class="list-car-body">
                    <?php
                        include '../controller/CarList.php';
                        new CarList();
                        
                    ?> 
                </div>
            </form>
        </div>    
    </div>    


     