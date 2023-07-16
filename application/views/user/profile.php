<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Profile.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="body">

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




    <!--DASHBOARD-->
    <!--DASHBOARD-->
    <div class="Dashboard">
        <!--NAVBAR-->
        <div class="dash-menu">
            <div class="left-dash">
                <a href="<?php echo base_url(); ?>index.php/Welcome/index"><img class="logo" src="<?php echo base_url(); ?>resources/frontend/img/Itum logo.png" alt=""></a>
            </div>
            <div class="right-dash">
                <h4>USER</h4>
                <img class="admin-avatar" src="<?php echo base_url(); ?>resources/frontend/img/rr.png" alt="">
            </div>
        </div>

        <!--contetent-->
        <div class="content">

            <div class="navbar">
                <div class="main-hang-burgar">
                    <div class="hanburgar">
                        <div class="hagburgar-box1">

                        </div>
                        <div class="hagburgar-box2">

                        </div>
                        <div class="hagburgar-box3">

                        </div>
                    </div>
                </div>


                <div class="slide-bar">

                    <div class="box1">

                        <a href="<?php echo base_url(); ?>index.php/User/index">
                            <div class="slide-dashboard">

                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/dashboard light.png" alt="">

                                <p>Dashboard</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <!--Page bar-->
            <div class="page-bar">
                <!--Button-->
                <div class="buttons">
                    <div class="left-buttons">

                    </div>
                    <div class="right-index-url">
                        <p> Home - Pages - Profile</p>
                    </div>
                </div>


                <div class="p-Information">
                    <div class="left-personal-information">
                        <img src="<?php echo base_url(); ?>resources/frontend/img/rr.png" alt="">

                        <div class="box">
                            <h3><?php echo $dp[0]['fname'] . " " . $dp[0]['lname']; ?></h3>
                            <p><span>Member Since:</span> November 2023</p>
                        </div>

                    </div>
                    <div class="right-personal-information">
                        <h2><b>Personal Information</b></h2><br />
                        <p>Full Name : <span><?php echo $dp[0]['fname'] ." " . $dp[0]['lname']; ?></span></p>
                        <p>Email(Username) : <span><?php echo $dp[0]['username']; ?></span></p>
                        <p>Division : <span><?php echo $dp[0]['dep_name']; ?></span></p>
                        <p> Role : <span id="admin">USER</span></p>
                    </div>
                </div>





            </div>










        </div>





        <!--User Dropdown Bar -->

        <div class="user-dashboard">
            <div class="user-profile">
                <i class="fas fa-user fa-lg"></i>
                <p>Profile</p>
            </div>

            <div class="logout-user-profile">
                <i class="fas fa-sign-out-alt fa-lg"></i>
                <p>Log Out</p>
            </div>

        </div>



        <!--Footer-->
        <div class="footer">
            <div class="main-logout">
                <div class="logout">
                    <img src="<?php echo base_url(); ?>resources/frontend/img/logout.png" alt="">
                    <p><a href="<?php echo base_url(); ?>index.php/Welcome/index">Logout</a></p>
                </div>
            </div>
            <div class="copyright">
                <p>Copyrights <img src="<?php echo base_url(); ?>resources/frontend/img/copyright.png" alt=""> <a href="https://itum.mrt.ac.lk/"><span>ITUM</span></a></p>
            </div>
        </div>





        <script src="<?php echo base_url(); ?>resources/frontend/Js/Profile.js">
        </script>

</body>

</html>