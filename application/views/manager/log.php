<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Login_Signup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Login & Registration</title>
</head>

<body>

    <!--add pre loader-->


    <div class="center">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <div class="wrapper">
        

        <!----------------------------- Form box ----------------------------------->
        <div class="form-box">

            <!------------------- login form -------------------------->


            <div class="login-container" id="login">
               <nav class="nav">
                   <a href="<?php echo base_url(); ?>index.php/Welcome/index"><img class="log-logo" src="<?php echo base_url(); ?>resources/frontend/img/log.png" alt=""></a>
               </nav>
                <div class="top">
                    <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                    <header>Login</header>
                </div>
                <form id="login_form" name="login_form">
                    <div class="input-box">
                    <i class="bx bx-user"></i>
                        <input type="text" class="input-field" placeholder="Username or Email" id="username" name="username">
                        
                    </div>
                    <div class="input-box">
                    <i class="bx bx-lock-alt"></i>
                        <input type="password" class="input-field" placeholder="Password" id="password" name="password">
                        
                    </div>
                    <div class="submit-box">
                        <input type="button" id="LoginBtn" name="LoginBtn" class="submit" value="Sign In" onclick="validateLogin()">
                    </div>
                </form>
                
            </div>



            <!------------------- registration form -------------------------->
            <div class="register-container" id="register">
            <nav class="nav">
                   <a href="<?php echo base_url(); ?>index.php/Welcome/index"><img class="log-logo" src="<?php echo base_url(); ?>resources/frontend/img/log.png" alt=""></a>
               </nav>
                <form id="reg_form" name="reg_form">
                    <div class="top1">
                        <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                        <header>Sign Up</header>
                    </div>
                    <div class="two-forms">
                        <div class="input-box">
                        <i class="bx bx-user"></i>
                            <input type="text" class="input-field" placeholder="Firstname" id="fname" name="fname">
                            
                        </div>
                        <div class="input-box">
                        <i class="bx bx-user"></i>
                            <input type="text" class="input-field" placeholder="Lastname" id="lname" name="lname">
                            
                        </div>
                    </div>
                    <div class="input-box">
                    <i class="bx bx-envelope"></i>
                        <input type="text" class="input-field" placeholder="Email" id="regEmail" name="regEmail">
                        
                    </div>
                    <div class="input-box">
                    <i class="bx bx-home"></i>
                        <input type="text" class="input-field" placeholder="Division" id="regDivision" name="regDivision">
                       
                    </div>
                    <div class="input-box">
                    <i class="bx bx-lock-alt"></i>
                        <input type="password" class="input-field" placeholder="Password" id="regPassword" name="regPassword">
                       
                    </div>
                    <div class="input-box">
                    <i class="bx bx-lock-alt"></i>
                        <input type="password" class="input-field" placeholder="Confirm Password" id="regConfirmPassword">
                       
                    </div>
                    <div class="submit-box">
                        <input type="button" id="reg_btn" name="reg_btn" class="submit" value="Register" onclick="validateRegistration()">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>


    <script>
        const preloader = document.querySelector(".center");

        window.addEventListener("load", function() {
            preloader.style.display = "none";
        });


        const registerPageBtn = document.querySelector(".top span a");

        const loginPageBtn = document.querySelector(".top1 span a");

        const loginPage = document.querySelector("#login");

        const registerPage = document.querySelector("#register");

        


        registerPageBtn.addEventListener("click",()=>{
            
            loginPage.style.display = "none";

            registerPage.style.display = "flex";
        });

        loginPageBtn.addEventListener("click",()=>{
            
            loginPage.style.display = "flex";

            registerPage.style.display = "none";
        });

       

        function validateLogin() {
            var email = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (email.trim() === "") {
                alert("Please enter your email.");
                return false;
            }

            if (password.trim() === "") {
                alert("Please enter your password.");
                return false;
            }

            return true;
        }

        function validateRegistration() {
            var firstName = document.getElementById("fname").value;
            var lastName = document.getElementById("lname").value;
            var email = document.getElementById("regEmail").value;
            var division = document.getElementById("regDivision").value;
            var password = document.getElementById("regPassword").value;
            var confirmPassword = document.getElementById("regConfirmPassword").value;

            if (firstName.trim() === "") {
                alert("Please enter your first name.");
                return false;
            }

            if (lastName.trim() === "") {
                alert("Please enter your last name.");
                return false;
            }

            if (email.trim() === "") {
                alert("Please enter your email.");
                return false;
            }

            if (division.trim() === "") {
                alert("Please enter your division.");
                return false;
            }

            if (password.trim() === "") {
                alert("Please enter a password.");
                return false;
            }

            if (confirmPassword.trim() === "") {
                alert("Please confirm your password.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#LoginBtn").click(function() {
                base_url = "<?php echo base_url(); ?>";

                var formvalid = validateLogin();
                if (formvalid) {

                    $.ajax({
                        url: base_url + 'index.php/Welcome/verifyuser',
                        data: $("#login_form").serialize(),
                        method: 'post',
                        success: function(response) {
                            // console.log(response);
                            if (response == 'admin') {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Welcome Admin!'
                                })

                                window.location = base_url + 'index.php/Admin/index';
                            } else if (response == 'user') {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Welcome User!'
                                })

                                window.location = base_url + 'index.php/User/dashboardView';
                            } else {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    title: 'Oops! Please check your username and password'
                                })
                            }
                        },
                        error: function() {
                            alert("Something Wrong");
                        }
                    });
                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'Please enter valid username and password'
                    })

                }
            });

            $("#reg_btn").click(function() {
                base_url = "<?php echo base_url(); ?>";

                var formvalid = validateRegistration();
                if (formvalid) {

                    $.ajax({
                        url: base_url + 'index.php/Welcome/registration',
                        data: $("#reg_form").serialize(),
                        method: 'post',
                        success: function(response) {
                            // console.log(response);
                            if (response == true) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Welcome Admin!'
                                })

                                window.location = base_url + 'index.php/Admin/index';
                            } else {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    title: 'Oops! Please try again'
                                })
                            }
                        },
                        error: function() {
                            alert("Something Wrong");
                        }
                    });
                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'Please try again!'
                    })

                }
            });




        });
    </script>

</body>

</html>