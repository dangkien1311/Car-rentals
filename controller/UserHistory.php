<?php
    class UserHistory extends controller {
        function __construct()
        {
            parent::__construct();
            $userID =  $this->model->escape_string($_SESSION['UserIDcard']);
            $customerID = $this->model->query("select customerID from `accountmanager` where citizenID = '$userID';", true);
            $SqlHistory = $this->model->query("SELECT carcategory.CarIMG, carcategory.Name, userbookinghistory.* 
            FROM userbookinghistory
            LEFT JOIN carcategory ON userbookinghistory.carCategoryID = carcategory.carCategoryID
            WHERE userbookinghistory.customerID = '".$customerID[0]['customerID']."';", true);

            if($SqlHistory == false) {
                echo '';
            } else {
                for($i = 0; $i < count($SqlHistory);$i++) {
                    echo '<div class="rental-car-box">
                        <div class="rental-car-img">
                            <img src="'.$SqlHistory[$i]['CarIMG'].'" alt="">
                        </div>
                        <div class="rental-car-information">
                            <span class="rental-car-brand">'.$SqlHistory[$i]['Name'].'</span>
                            <br>
                            <span class="rental-car-about">Điểm nhận: '.$SqlHistory[$i]['puPlace'].'</span>
                            <br>
                            <span class="rental-car-about">Điểm trả: '.$SqlHistory[$i]['doPlace'].'</span>
                            <br>
                            <span class="rental-car-about">Thuê từ : '.$SqlHistory[$i]['dateFrom'].' đến : '.$SqlHistory[$i]['dateTo'].'</span>
                            <br>
                            <span class="rental-car-about">Thời gian thuê : '.$SqlHistory[$i]['bookingTime'].'</span>
                        </div>  
                    </div>';
                }
            }
        }

    }