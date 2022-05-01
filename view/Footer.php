        <div id="footer">
             
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

    <form form action="" method ="POST" class="register-modal js-register-modal" >
         <?php
                new loginManager();
         ?>  
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
                <div class="registration-frame">
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
                    <i class="fa-solid fa-eye js-register-fa-eye" onclick="showHideRegisterPassword()" style="margin-left: -30px; cursor: pointer;"></i>
                    <i class="fa-solid fa-eye-slash js-register-fa-eye-slash" onclick="showHideRegisterPassword()" style="margin-left: -30px; cursor: pointer;"></i>
                    <p class="about">Bằng việc đăng nhập hoặc đăng ký tài khoản, bạn đồng ý với Điều Khoản & Điều Kiện và Thông báo về Quyền riêng tư.</p>
                    <button name = "signup" type = "submit" class="register-btn" >Đăng kí</button>
                </div>
            </div>
        </div>
    </form>
    
    <script src="../view/main.js"></script>
</body>
</html>