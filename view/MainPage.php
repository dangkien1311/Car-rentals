<div id="slider">
            <div class="slider__background">
                <img src="../view//assets//img//ha-giang.png" alt="">
            </div>
            <form action="../view/result.php" method = "get">
            <div class="content">
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
            </div>
            </form>
        </div>

        <div id="contain">
            <div id="common question">

            </div>

            <div id="related_searches">

            </div>
        </div>