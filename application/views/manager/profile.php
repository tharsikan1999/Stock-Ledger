<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Style.css">
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
                <i class="fa-solid fa-bell"></i>
                <h4>Admin</h4>
                <img class="admin-avatar" src="<?php echo base_url(); ?>resources/frontend/img/User.jpg" alt="">
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
                        
                        <a href="<?php echo base_url(); ?>index.php/Welcome/dashboardView">
                            <div  class="slide-dashboard">

                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/dashboard light.png" alt="">

                                <p >Dashboard</p>
                            </div>
                        </a>

                    </div>


                    <div class="box1">
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/inboundView">
                            <div class="inbound">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/arrow-up-light.png" alt="">
                                <p>Inbound</p>
                            </div>
                        </a>
                    </div>

                    <div class="box1">
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/outboundView">
                            <div class="outbound">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/arrow-down-light.png" alt="">
                                <p>Outbound</p>

                            </div>
                        </a>
                    </div>

                    <div class="box1">
                        <div id="active1" class="sidebar1">
                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/reportView">
                            <div class="report">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/report-light.png" alt="">
                                <p>Report</p>
                            </div>
                        </a>
                    </div>

                    <div class="box1">
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/historyView">

                            <div class="history">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/history-light.png" alt="">
                                <p>History</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <!--Page bar-->

            <div class="buttons">
                    <div class="left-buttons">
                        

                    </div>
                    <div class="right-index-url">
                        <p> Home - Pages - Profile</p>
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


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script src="<?php echo base_url(); ?>resources/frontend/Js/Dashboard.js">

    </script>
</body>

</html>