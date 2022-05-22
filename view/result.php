    <div id="container">
        <div id="slider">
            <form action="" method = "GET" class="content">
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
            <form action ="" method = "get" class="container-body-category">
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
                        <input type="radio" name = "CarBrand" value = "Hyundai" class = "ProductDetail Brand">
                        Xe Hyundai
                    </label>
                    <label class="category-select">
                        <input type="radio" name = "CarBrand" value = "BMW" class = "ProductDetail Brand">
                        Xe BMW
                    </label>
                    <label class="category-select">
                        <input type="radio" name = "CarBrand" value = "Audi" class = "ProductDetail Brand">
                        Xe Audi
                    </label>
                    <label class="category-select">
                        <input type="radio" name = "CarBrand" value= "Mercedes" class = "ProductDetail Brand">
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
                        <input type="radio" name = "Price" value = "1" onclick="onlyOne(this)" class = "ProductDetail Price">
                        Từ 1.000.000 - 2.000.000 vnd
                    </label>
                    <label class="category-select">
                        <input type="radio" name = "Price" value = "2" onclick="onlyOne(this)" class = "ProductDetail Price">
                        Từ 2.000.000 - 3.000.000 vnd
                    </label>
                    <label class="category-select">
                        <input type="radio" name = "Price" value = "3" onclick="onlyOne(this)" class = "ProductDetail Price">
                        Từ 3.000.000 - 4.000.000 vnd
                    </label>
                    <label class="category-select">
                        <input type="radio" name = "Price" value = "4" onclick="onlyOne(this)" class = "ProductDetail Price">
                        Trên 4.000.000 vnd
                    </label>
                </div> 
                <!-- <button name = "CarType" type="submit" class="category-search-btn">
                    Tìm kiếm
                </button> -->
            </form>
            <div class="list-car">
                <header class="list-car-header"></header>
                <div class="list-car-body CarResult">
                    <?php
                         $product = $conn->getArray('carcategory');
                         for( $i = 0; $i < count($product);$i++) {
                            $EachCarPrice = number_format((float)$product[$i]['dailyHireRate'] * 1000000,0,'','.');
                            echo'<div class="list-car-select">
                                    <img src="'.$product[$i]['CarIMG'].'" alt="" class="car-img">
                                    <div class="car-information">
                                        <div class="car-brand">'.$product[$i]['Name'].'</div>
                                        <p for="" class="reg-number">Biển số xe: '.$product[$i]['regNumber'].'</p>
                                        <label for="" class="car-seat">
                                            <i class="fa-solid fa-people-group"></i>
                                            '.$product[$i]['Seat'].' chỗ ngồi
                                        </label>
                                        <label for="" class="package">
                                            <i class="fa-solid fa-suitcase"></i>
                                            '.$product[$i]['Capacity'].' hành lí
                                        </label>
                                        <br>
                                        <label for="" class="car-gearbox">
                                            <i class="fa-solid fa-gears"></i>
                                            '.$product[$i]['Model'].'
                                        </label>
                                        <label for="" class="car-gearbox">
                                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                                            Giá thuê xe(theo ngày): '.$EachCarPrice.' vnd
                                        </label>
                                        <a href="" class="book" >Vui lòng đăng nhập để đặt xe</a>
                                    </div>
                                </div>';
                        }
                    ?> 
                </div>
            </div>
        </div>    
    </div>    


     