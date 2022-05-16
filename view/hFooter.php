    <div id="backtop">
        <i class="fa-solid fa-angle-up"></i>
    </div>
</body>
    <SCript>
        const showLoginPassword = document.querySelector('.js-login-fa-eye')
        const hideLoginPassword = document.querySelector('.js-login-fa-eye-slash')
        const showLoginFrame = document.querySelector('.js-login')
        const showUserManagement = document.querySelector('.js-nav-user-management')
        const userManagement = document.querySelector('.js-user-management-btn')
        const login = document.querySelector('.js-login-btn')
        const hotline = document.querySelector('.js-hotline-btn')
        const showHomeHotlineFrame = document.querySelector('.js-hotline-frame')
        var loginPassword = document.getElementById("user-management-password")
        var container = document.getElementById("container")
        var header = document.getElementById("header")
        const userInformationBtn = document.querySelector('.js-user-information-btn')
        const userInformationModal = document.querySelector('.js-user-information-modal')
        const userInformationContainer = document.querySelector('.js-container')
        const userInformationClose = document.querySelector('.js-user-information-close')
        const userInformationAcceptEdit = document.querySelector('.js-accept')
        const userInformationEdit = document.querySelector('.js-edit-user-phone')
        const userInformationFapen = document.querySelector('.js-fa-pen')
        const userPhone = document.querySelector('.js-user-phone')
        const userNewPhone = document.querySelector('.js-user-new-phone')
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
            if (showHomeHotlineFrame.style.display == 'none') {
                showHomeHotlineFrame.style.display = 'block'
                hotline.style.color = 'rgb(0, 96, 196)'
                hotline.style.backgroundColor = '#fff'
            } else {
                showHomeHotlineFrame.style.display = 'none'
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

            if (showHomeHotlineFrame.style.display === 'block') {
                showHomeHotlineFrame.style.display = 'none'
                hotline.style.color = '#000'
                hotline.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showHomeHotlineFrame.style.display = 'none'
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

            if (showHomeHotlineFrame.style.display === 'block') {
                showHomeHotlineFrame.style.display = 'none'
                hotline.style.color = '#000'
                hotline.style.backgroundColor = 'rgba(0, 0, 0, 0)'
            } else {
                showHomeHotlineFrame.style.display = 'none'
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

        showHomeHotlineFrame.addEventListener('click', function (event) {
            event.stopPropagation()
        })

        userManagement.addEventListener('click', function (event) {
            if (showLoginFrame.style.display === 'none' && showHomeHotlineFrame.style.display === 'none') {
                event.stopPropagation()
            }
        })

        login.addEventListener('click', function (event) {
            if (showUserManagement.style.display === 'none' && showHomeHotlineFrame.style.display === 'none') {
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
            if (userNewPhone.style.display === 'none') {
                userNewPhone.style.display = 'block'
            } else {
                userNewPhone.style.display = 'none'
            }
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

        function onlyOne(checkbox) {
            var checkboxes = document.getElementsByName('Price[]')
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false
            })
        }

        var usp  = '<?php echo $_SESSION['UserPhone']; ?>';
        var usi =  '<?php echo $_SESSION['UserIDcard']; ?>';
        document.getElementById("user-phone-input").value = usp;
        document.getElementById("user-id-input").value = usi;
    
    </SCript>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('#backtop'). fadeIn();
                } else {
                    $('#backtop').fadeOut();
                }
            });

            $("#backtop").click(function() {
                $('html, body ').animate({
                    scrollTop: 0
                }, 800);
            });
        });
    </script>
</html>
     