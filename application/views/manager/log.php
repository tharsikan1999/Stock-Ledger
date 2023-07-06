<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Login_Signup.css">
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
    <nav class="nav">
        <div class="nav-logo">
            <p>STOCK LEDGER </p>
        </div>
       
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Username or Email" id="loginEmail">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" id="loginPassword">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="submit-box">
                <input type="submit" class="submit" value="Sign In" onclick="validateLogin()">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>

        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname" id="regFirstName">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname" id="regLastName">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" id="regEmail">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Division" id="regDivision">
                <i class="bx bx-home"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" id="regPassword">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Confirm Password" id="regConfirmPassword">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="submit-box">
                <input type="submit" class="submit" value="Register" onclick="validateRegistration()">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                
            </div>
        </div>
    </div>
</div>   


<script>

      const preloader = document.querySelector(".center");

           window.addEventListener("load",function(){
             preloader.style.display = "none";
         });

    function myMenuFunction() {
        var i = document.getElementById("navMenu");

        if(i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }
 
    function login() {
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

    function validateLogin() {
        var email = document.getElementById("loginEmail").value;
        var password = document.getElementById("loginPassword").value;

        if (email.trim() === "") {
            alert("Please enter your email.");
            return false;
        }

        if (password.trim() === "") {
            alert("Please enter your password.");
            return false;
        }

        // Perform additional login validation logic here
        
        // If validation passes, submit the form or redirect to the desired page
        alert("Login successful!");
    }

    function validateRegistration() {
        var firstName = document.getElementById("regFirstName").value;
        var lastName = document.getElementById("regLastName").value;
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

        // Perform additional registration validation logic here
        
        // If validation passes, submit the form or redirect to the desired page
        alert("Registration successful!");
    }
</script>

</body>
</html>
