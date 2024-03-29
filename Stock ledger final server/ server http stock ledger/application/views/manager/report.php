<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inventory Management</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
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
    <div class="Dashboard">
        <!--NAVBAR-->
        <div class="dash-menu">
            <div class="left-dash">
                <img class="logo" src="<?php echo base_url(); ?>resources/frontend/img/Itum logo.png" alt="">


            </div>
            <div class="right-dash">

                <h4>Admin</h4>
                <img class="admin-avatar" src="<?php echo base_url(); ?>resources/frontend/img/User.jpg" alt="">

            </div>
        </div>

        <!--contetn-->
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
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Admin/dashboardView">
                            <div class="slide-dashboard">

                                <img class="dash-light" src="<?php echo base_url(); ?>resources/frontend/img/dashboard light.png" alt="">

                                <p>Dashboard</p>
                            </div>
                        </a>

                    </div>


                    <div class="box1">
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Admin/inboundView">
                            <div class="inbound">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/arrow-up-light.png" alt="">
                                <p>Inbound</p>

                            </div>
                        </a>

                    </div>

                    <div class="box1">
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Admin/outboundView">
                            <div class="outbound">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/arrow-down-light.png" alt="">
                                <p>Outbound</p>

                            </div>
                        </a>

                    </div>

                    <div class="box1">
                        <div class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Admin/reportView">

                            <div id="active" class="report">
                                <img src="<?php echo base_url(); ?>resources/frontend/img/report-dark.png" alt="">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/report-light.png" alt="">
                                <p class="active">Report</p>

                            </div>
                        </a>

                    </div>

                    <div class="box1">
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Admin/historyView">

                            <div class="history">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/history-light.png" alt="">
                                <p>History</p>
                            </div>

                        </a>

                    </div>



                </div>
            </div>

            <!--Page bar-->

            <div class="page-bar">
                <div class="buttons">
                    <div class="left-buttons">


                    </div>
                    <div class="right-index-url">
                        <p> Home - Pages - History</p>
                    </div>
                </div>
                <div style="padding: 100px; text-align:center;">
                    <h2 style="margin-bottom:50px;">Monthly Report</h2>

                    <table style="text-align: center;width:100%;">
                        <tr>
                            <th>Department ID</th>
                            <th>Department Name</th>
                            <th>Type Name</th>
                            <th>Total Amount</th>
                        </tr>
                        <?php foreach ($rep as $item) { ?>
                            <tr>
                                <td><?php echo $item->dep_id; ?></td>
                                <td><?php echo $item->dep_name; ?></td>
                                <td><?php echo $item->type_name; ?></td>
                                <td><?php echo abs($item->total_type_price); ?></td>

                            </tr>
                        <?php } ?>
                    </table>
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
    </div>
    <script src="<?php echo base_url(); ?>resources/frontend/Js/Report.Js">
    </script>
    <script>
        const preloader = document.querySelector(".center");

window.addEventListener("load",function(){
    preloader.style.display = "none";
});
    </script>
</body>

</html>