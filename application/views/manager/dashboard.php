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
            <i id="notification-icon" class="fa-solid fa-bell"></i>
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
                        <div class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Welcome/dashboardView">
                            <div id="active" class="slide-dashboard">

                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/dashboard light.png" alt="">
                                <img class="dash-dark" src="<?php echo base_url(); ?>resources/frontend/img/dashboard.png" alt="">

                                <p class="active">Dashboard</p>
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

            <div class="page-bar">
                <!--Button-->
                <div class="buttons">
                    <div class="left-buttons">
                        <div class="add-button">
                            <p>Add Item</p>
                        </div>
                        <div class="edit-button">
                            <p>Edit Item</p>

                        </div>
                        <div class="delete-button">
                            <p>Delete Item</p>
                        </div>

                    </div>
                    <div class="right-index-url">
                        <p> Home - Pages - Dashboard</p>
                    </div>
                </div>


                <!--
                    Add Items,Edit Items ,Delete Items

                -->

                <div class="add-edit-delete-manage-box">


                    <div class="main-input-box">
                        <div class="Product-No-box">
                            <h3>Product-No</h3>
                            <input type="number" placeholder="Enter Product-No" name="Product-No" id="Product-No">

                        </div>
                        <div class="Product-Name-box">
                            <h3>Product-Name</h3>
                            <input type="text" placeholder="Enter Product-Name" name="Product-Name" id="Product-Name">

                        </div>
                        <div class="Division-box">
                            <h3>Enter Division</h3>
                            <input type="text" placeholder="Enter Division" name="Division" id="Division">

                        </div>
                        <div class="Add-Date-box">
                            <h3>Add-Date</h3>
                            <input type="date" name="Add-Date" id="Add-Date">

                        </div>
                        <div class="Up-Date-box">
                            <h3>Up-Date</h3>
                            <input type="date" name="Up-Date" id="Up-Date">

                        </div>
                        <div class="Stocks-box">
                            <h3>Enter Stocks</h3>
                            <input type="number" placeholder="Enter Stocks" name="Stocks" id="Stocks">

                        </div>
                        <div class="Cost-box">
                            <h3>Enter Cost</h3>
                            <input type="number" placeholder="Enter Cost" name="Cost" id="Cost">

                        </div>
                        <div class="Total-Cost-box">
                            <h3>Enter Total-Cost</h3>
                            <input type="number" placeholder="Enter Total-Cost" name="Total-Cost" id="Total-Cost">

                        </div>





                    </div>

                    <div class="main-button-box">
                        <div class="add-button-box">
                            <button id="add-button" type="button">Add Item</button>
                        </div>
                        <div class="edit-button-box">
                            <button id="edit-button" type="button">Edit Item</button>

                        </div>
                        <div class="delete-button-box">
                            <button id="delete-button" type="button">Delete Item</button>

                        </div>

                        <div class="close-button">
                            <button id="close-button" type="button">Cancel</button>
                        </div>
                    </div>




                </div>

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
                        <h2 class="totalNumber"></h2>
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
                        <h2 class="avilableStocks"></h2>

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
                        <h2 class="lowStock"></h2>
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
                        <h2 class="outOfStock"></h2>
                    </div>

                </div>


                
                <!--Tables-->

              


              
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr >
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
                            <th class="table-Division-th">Division
                                <div class="dropdown-buttons">
                                    <i id="Division-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="Division-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-third-th">Add Date
                                <div class="dropdown-buttons">
                                    <i id="third-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="third-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-fourth-th">Up Date
                                <div class="dropdown-buttons">
                                    <i id="fourth-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="fourth-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-five-th">Stocks  
                                <div id="dropdown-buttons" class="dropdown-buttons">
                                    <i id="five-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="five-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-six-th">Cost  
                                <div class="dropdown-buttons">
                                    <i id="six-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="six-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-seven-th">Total Cost
                                <div class="dropdown-buttons">
                                    <i id="seven-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="seven-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th>Avilable</th>
                        </tr>
                    </thead>
                    <tbody id="tables">
                        <tr>
                            <td>154-24</td>
                            <td>Blue - Pen</td>
                            <td>IT</td>
                            <td>08 Mar 2018</td>
                            <td>09 Mar 2018</td>
                            <td id="tables-stocks" >0</td>
                            <td>453 Rs</td>
                            <td>346546.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">

                            </div></td>

                        </tr>
                        <tr>
                            <td>154-234</td>
                            <td>Pencil</td>
                            <td>Civil</td>
                            <td>12 Mar 2018</td>
                            <td>24 Mar 2018</td>
                            <td id="tables-stocks">10</td>
                            <td>4356 Rs</td>
                            <td>45636.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>
                        </tr>
                        <tr>
                            <td>35-24</td>
                            <td>Pencil</td>
                            <td>Marine</td>
                            <td>25 Mar 2018</td>
                            <td>26 Mar 2018</td>
                            <td id="tables-stocks" >567</td>
                            <td>2341 Rs</td>
                            <td>435654.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>23-24</td>
                            <td>Pencil</td>
                            <td>IT</td>
                            <td>28 Mar 2018</td>
                            <td>12 Mar 2018</td>
                            <td id="tables-stocks">35</td>
                            <td>678 Rs</td>
                            <td>3456546.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>545-24</td>
                            <td>Marker</td>
                            <td>IT</td>
                            <td>01 Mar 2018</td>
                            <td>05 Mar 2018</td>
                            <td id="tables-stocks">8</td>
                            <td>1234 Rs</td>
                            <td>465363.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>86-24</td>
                            <td>Black - Pen</td>
                            <td>Marine</td>
                            <td>26 Mar 2018</td>
                            <td>29 Mar 21 520018</td>
                            <td id="tables-stocks">547</td>
                            <td>785 Rs</td>
                            <td>546436.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>654-24</td>
                            <td>Eraser</td>
                            <td>Electrical</td>
                            <td>26 Mar 2018</td>
                            <td>26 Mar 2018</td>
                            <td id="tables-stocks">3264</td>
                            <td>1341 Rs</td>
                            <td>325643.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>6-67</td>
                            <td>Shirt</td>
                            <td>IT</td>
                            <td>04 Mar 2018</td>
                            <td>09 Mar 2018</td>
                            <td id="tables-stocks">768</td>
                            <td>2315 Rs</td>
                            <td>346546.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>978-243</td>
                            <td>T-Shirt</td>
                            <td>Electrical</td>
                            <td>16 Mar 2018</td>
                            <td>19 Mar 2018</td>
                            <td id="tables-stocks">1342</td>
                            <td>346546 Rs</td>
                            <td>32656733.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>35-456</td>
                            <td>Cap</td>
                            <td>Mechanical</td>
                            <td>11 Mar 2018</td>
                            <td>22 Mar 2018</td>
                            <td id="tables-stocks">7</td>
                            <td>343654 Rs</td>
                            <td>45636324.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>789-234</td>
                            <td>Short</td>
                            <td>IT</td>
                            <td>08 Mar 2018</td>
                            <td>09 Mar 2018</td>
                            <td id="tables-stocks">0</td>
                            <td>345 Rs</td>
                            <td>345435655.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>789-234</td>
                            <td>Short</td>
                            <td>IT</td>
                            <td>08 Mar 2018</td>
                            <td>09 Mar 2018</td>
                            <td id="tables-stocks">0</td>
                            <td>345 Rs</td>
                            <td>345435655.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                        <tr>
                            <td>789-234</td>
                            <td>Short</td>
                            <td>IT</td>
                            <td>08 Mar 2018</td>
                            <td>09 Mar 2018</td>
                            <td id="tables-stocks">18</td>
                            <td>345 Rs</td>
                            <td>345435655.00 Rs</td>
                            <td id="table-avilable-circle"><div class="table-avilable-circle">
                                
                            </div></td>

                        </tr>
                       
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

                <!-- Notifications bar -->

                <div class="notifications-box">
        <div class="header-notifications">
            <p>All Notifications</p>
        </div>

        <div class="items-for-notifications">
            <div class="notify-box">
            <td id="notification-pno">154-24</td>
            </div>
            <div class="notify-box">
            <td>Blue-Pen</td>
            </div>
            <div class="notify-box">
            <td id="tables-stocks">0</td>
            </div>
            <div class="notify-box">
            <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
            </div>
        </div>

        <div class="items-for-notifications">
            <div class="notify-box">
            <td id="notification-pno">154-24</td>
            </div>
            <div class="notify-box">
            <td>Blue-Pen</td>
            </div>
            <div class="notify-box">
            <td id="tables-stocks">0</td>
            </div>
            <div class="notify-box">
            <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
            </div>
        </div>

        <div class="items-for-notifications">
            <div class="notify-box">
            <td id="notification-pno">154-24</td>
            </div>
            <div class="notify-box">
            <td>Blue-Pen</td>
            </div>
            <div class="notify-box">
            <td id="tables-stocks">0</td>
            </div>
            <div class="notify-box">
            <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
            </div>
        </div>

        <div class="items-for-notifications">
            <div class="notify-box">
            <td id="notification-pno">154-24</td>
            </div>
            <div class="notify-box">
            <td>Blue-Pen</td>
            </div>
            <div class="notify-box">
            <td id="tables-stocks">0</td>
            </div>
            <div class="notify-box">
            <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
            </div>
        </div>

        <div class="items-for-notifications">
            <div class="notify-box">
            <td id="notification-pno">154-24</td>
            </div>
            <div class="notify-box">
            <td>Blue-Pen</td>
            </div>
            <div class="notify-box">
            <td id="tables-stocks">0</td>
            </div>
            <div class="notify-box">
            <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
            </div>
        </div>

        <div class="items-for-notifications">
            <div class="notify-box">
            <td id="notification-pno">154-24</td>
            </div>
            <div class="notify-box">
            <td>Blue-Pen</td>
            </div>
            <div class="notify-box">
            <td id="tables-stocks">0</td>
            </div>
            <div class="notify-box">
            <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
            </div>
        </div>

        <div class="items-for-notifications">
            <div class="notify-box">
            <td id="notification-pno">154-24</td>
            </div>
            <div class="notify-box">
            <td>Blue-Pen</td>
            </div>
            <div class="notify-box">
            <td id="tables-stocks">0</td>
            </div>
            <div class="notify-box">
            <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
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


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script src="<?php echo base_url(); ?>resources/frontend/Js/Dashboard.js">

    </script>
</body>

</html>