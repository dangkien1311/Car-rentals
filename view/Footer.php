<div id="footer">
             
        </div>
    </div>
     <script>
        const modal = document.querySelector('.js-register-modal')
        const openRegister = document.querySelector('.js-open-register')
        const closeRegister = document.querySelector('.js-close-register')
        const registerRegister = document.querySelector('.js-register-container')
        const showLoginPassword = document.querySelector('.js-login-fa-eye')
        const hideLoginPassword = document.querySelector('.js-login-fa-eye-slash')
        const showRegisterPassword = document.querySelector('.js-register-fa-eye')
        const hideRegisterPassword = document.querySelector('.js-register-fa-eye-slash')
        const showLoginFrame = document.querySelector('.js-login')
        const showUserManagement = document.querySelector('.js-nav-user-management')
        const showHotlineFrame = document.querySelector('.js-hotline')
        const userManagement = document.querySelector('.js-user-management-btn')
        const login = document.querySelector('.js-login-btn')
        const hotline = document.querySelector('.js-hotline-btn')
        var loginPassword = document.getElementById("user-management-password")
        var registerPassword = document.getElementById("register-password")
        var slider = document.getElementById("slider")
        var header = document.getElementById("header")
        const typesOfCars = document.querySelector('.js-types-of-cars')
        const typesOfCarsBox = document.querySelector('.js-types-of-cars-box')
        const priceRange = document.querySelector('.js-price-range')
        const priceRangeBox = document.querySelector('.js-price-range-box')
        const typesOfCarsDown = document.querySelector('.js-types-of-cars-down')
        const typesOfCarsUp = document.querySelector('.js-types-of-cars-up')
        const priceRangeDown = document.querySelector('.js-price-range-down')
        const priceRangeUp = document.querySelector('.js-price-range-up')

        // function showHideUserManagement() {
        //     if (showUserManagement.style.display == 'none') {
        //         showUserManagement.style.display = 'block'
        //         userManagement.style.color = 'rgb(0, 96, 196)'
        //         userManagement.style.backgroundColor = '#fff'
        //     } else {
        //         showUserManagement.style.display = 'none'
        //         userManagement.style.color = '#000'
        //         userManagement.style.backgroundColor = 'rgba(0, 0, 0, 0)'
        //     }
        // }

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

        slider.addEventListener('click', function () {
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

        function showHideLoginPassword() {
            if (loginPassword.type === "password") {
                loginPassword.type = "text"
                showLoginPassword.classList.add('close')
                hideLoginPassword.classList.add('open')
            } else {
                loginPassword.type = "password";
                hideLoginPassword.classList.remove('open')
                showLoginPassword.classList.remove('close')
            }
        }

        function showHideRegisterPassword() {
            if (registerPassword.type === "password") {
                registerPassword.type = "text"
                showRegisterPassword.classList.add('close')
                hideRegisterPassword.classList.add('open')
            } else {
                registerPassword.type = "password"
                hideRegisterPassword.classList.remove('open')
                showRegisterPassword.classList.remove('close')
            }
        }

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
        
     </script>
</body>
</html>