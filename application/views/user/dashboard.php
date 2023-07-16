<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <div class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/User/index">
                            <div id="active" class="slide-dashboard">

                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/dashboard light.png" alt="">
                                <img class="dash-dark" src="<?php echo base_url(); ?>resources/frontend/img/dashboard.png" alt="">

                                <p class="active">Dashboard</p>
                            </div>
                        </a>

                    </div>

                </div>
            </div>

            <!--Page bar-->

            <div class="page-bar">

                <!--Report Chart-->

                <div class="total-circle-box">
                    <div class="cricle1-sub-box">
                        <div class="skill">
                            <div class="outer">
                                <div class="inner">
                                    <img src="<?php echo base_url(); ?>resources/frontend/img/total.png" alt="">
                                </div>
                            </div>
                        </div>
                        <svg class="svg1" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#e91e63" />
                                    <stop offset="100%" stop-color="#673ab7" />
                                </linearGradient>
                            </defs>
                            <circle class="circle1" cx="80" cy="80" r="70" stroke-linecap="round" />
                        </svg>
                        <h3>Total Stocks</h3>
                        <h2 class="totalNumber">
                            <?php echo $total[0]['total_stock']; ?>

                        </h2>
                    </div>
                    <div class="cricle2-sub-box">

                        <div class="skill">
                            <div class="outer">
                                <div class="inner">
                                    <img src="<?php echo base_url(); ?>resources/frontend/img/avilable.png" alt="">
                                </div>
                            </div>
                        </div>
                        <svg class="svg2" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#e91e63" />
                                    <stop offset="100%" stop-color="#673ab7" />
                                </linearGradient>
                            </defs>
                            <circle class="circle2" cx="80" cy="80" r="70" stroke-linecap="round" />
                        </svg>
                        <h3>Available Stocks</h3>
                        <h2 class="avilableStocks">
                            <?php echo $available[0]['total_stock']; ?>

                        </h2>

                    </div>
                    <div class="cricle3-sub-box">
                        <div class="skill">
                            <div class="outer">
                                <div class="inner">
                                    <img src="<?php echo base_url(); ?>resources/frontend/img/Low stock.png" alt="">
                                </div>
                            </div>
                        </div>
                        <svg class="svg3" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#e91e63" />
                                    <stop offset="100%" stop-color="#673ab7" />
                                </linearGradient>
                            </defs>
                            <circle class="circle3" cx="80" cy="80" r="70" stroke-linecap="round" />
                        </svg>
                        <h3>Low Stocks</h3>
                        <h2 class="lowStock">
                            <?php echo $low[0]['total_stock']; ?>

                        </h2>
                    </div>
                    <div class="cricle4-sub-box">
                        <div class="skill">
                            <div class="outer">
                                <div class="inner">
                                    <img src="<?php echo base_url(); ?>resources/frontend/img/unavilable.png" alt="">
                                </div>
                            </div>
                        </div>
                        <svg class="svg4" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                                <linearGradient id="GradientColor">
                                    <stop offset="0%" stop-color="#e91e63" />
                                    <stop offset="100%" stop-color="#673ab7" />
                                </linearGradient>
                            </defs>
                            <circle class="circle4" cx="80" cy="80" r="70" stroke-linecap="round" />
                        </svg>
                        <h3>Out Of Stocks</h3>
                        <h2 class="outOfStock">
                            <?php echo $outof[0]['total_stock']; ?>
                        </h2>
                    </div>

                </div>



                <!--Tables-->

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="table-first-th">Product No <div class="dropdown-buttons">
                                    <i class="fas fa-caret-up"></i>
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-second-th">Product Name
                                <div class="dropdown-buttons">
                                    <i id="second-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="second-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-third-th">Up Date
                                <div class="dropdown-buttons">
                                    <i id="fourth-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="fourth-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-fourth-th">Available Stocks
                                <div id="dropdown-buttons" class="dropdown-buttons">
                                    <i id="five-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="five-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>

                            <th class="table-five-th">Total Cost
                                <div class="dropdown-buttons">
                                    <i id="seven-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="seven-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th>Avilable</th>
                        </tr>
                    </thead>
                    <tbody id="tables">
                        <?php foreach ($stock_dash as $item) {  ?>
                            <tr>
                                <td><?php echo $item['pro_id']; ?></td>
                                <td><?php echo $item['pro_name']; ?></td>
                                <td><?php echo $item['last_updated_date']; ?></td>
                                <td id="tables-stocks"><?php echo $item['available_stock']; ?></td>
                                <td><?php echo $item['total_amount']; ?></td>
                                <td id="table-avilable-circle">
                                    <div class="table-avilable-circle" id="<?php echo $item['pro_id']; ?>">
                                        <script>
                                            var val = "<?php echo $item['available_stock']; ?>";
                                            if (val < 1) {
                                                document.getElementById("<?php echo $item['pro_id']; ?>").style.background = " #FF5274";
                                            } else if (val < 11) {
                                                document.getElementById("<?php echo $item['pro_id']; ?>").style.background = " #FFC107";
                                            } else {
                                                document.getElementById("<?php echo $item['pro_id']; ?>").style.background = " #71D875";
                                            }
                                        </script>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>



                    </tbody>

                </table>


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

    <script src="<?php echo base_url(); ?>resources/frontend/Js/User_Dash.js"></script>
</body>

</html>