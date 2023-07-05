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


                <!--Fillter Options-->

                <div class="Fillter-options">
                    <div class="left-Fillter-options">
                        <p>Show</p>
                        <div class="filter-number-box">
                            <p class="number-fillter-box">10</p>
                            <i class="fa-sharp fa-solid fa-arrow-up"></i>
                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                        </div>
                        <p>Entries</p>

                    </div>
                    <form class="search-form" action="">
                        <i class="fas fa-search"></i>
                        <input class="search-button" type="text" placeholder="Search Here ">


                    </form>
                </div>


                <!--Tables-->
                <table id="myTable">
                    <thead>
                        <th>Product No</th>
                        <th>Product Name</th>
                        <th>Division</th>
                        <th>Add Date</th>
                        <th>Up Date</th>
                        <th>Stocks</th>
                        <th>Cost</th>
                        <th>Total Cost</th>
                        <th>Available
            </div>
            </th>
            </thead>

            <tbody id="tables">


                <tr>
                    <td>1</td>
                    <td>Product 1</td>
                    <td>It</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">72</td>
                    <td>81</td>
                    <td class="table-total-cost">32468</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>Product 2</td>
                    <td>Civil</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">13</td>
                    <td>678</td>
                    <td class="table-total-cost">7893</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Product 3</td>
                    <td>Civil</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">0</td>
                    <td>678</td>
                    <td class="table-total-cost">896</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Product 4</td>
                    <td>It</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">38</td>
                    <td>678</td>
                    <td class="table-total-cost">90643</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Product 5</td>
                    <td>Marine</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">55</td>
                    <td>678</td>
                    <td class="table-total-cost">963</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Product 6</td>
                    <td>Mechanical</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">07</td>
                    <td>678</td>

                    <td class="table-total-cost">85432</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Product 7</td>
                    <td>It</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">0</td>
                    <td>678</td>

                    <td class="table-total-cost">98523</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Product 8</td>
                    <td>Civil</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">73</td>
                    <td>678</td>

                    <td class="table-total-cost">13431</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Product 9</td>
                    <td>Mechanical</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">11</td>
                    <td>678</td>

                    <td class="table-total-cost">4372</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Product 10</td>
                    <td>Marine</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">0</td>
                    <td>678</td>

                    <td class="table-total-cost">6786</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Product 11</td>
                    <td>It</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">11</td>
                    <td>678</td>

                    <td class="table-total-cost">235</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Product 12</td>
                    <td>Mechanical</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">38</td>
                    <td>678</td>

                    <td class="table-total-cost">5473</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Product 13</td>
                    <td>Civil</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">03</td>
                    <td>678</td>

                    <td class="table-total-cost">578</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Product 14</td>
                    <td>Mechanical</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">1</td>
                    <td>678</td>

                    <td class="table-total-cost">4562</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Product 15</td>
                    <td>It</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">24</td>
                    <td>678</td>

                    <td class="table-total-cost">2354</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>

                    <td>16</td>
                    <td>Product 16</td>
                    <td>Civil</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">0</td>
                    <td>678</td>

                    <td class="table-total-cost">4564</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Product 17</td>
                    <td>Marine</td>
                    <td>2023-07-02</td>
                    <td>2023-07-02</td>
                    <td id="stocks-values">05</td>
                    <td>678</td>
                    <td class="table-total-cost">45645</td>
                    <td id="table-avilable-circle">
                        <div class="table-avilable-circle"></div>
                    </td>

            </tbody>
            </table>
            <div class="table-positions">
                <div class="left-select-positions">

                    <p>Showing 1 to 10 of 20 Invoices</p>

                </div>
                <div class="right-select-positions">
                    <div class="left-position-arrow">
                        <i class="fas fa-angle-left fa-lg"></i>
                    </div>
                    <div class="table-position-no1">
                        <p>01</p>
                    </div>
                    <div class="table-position-no2">
                        <p>02</p>
                    </div>
                    <div class="table-position-no3">
                        <p>03</p>
                    </div>
                    <div class="table-position-no4">
                        <p>04</p>
                    </div>
                    <div class="table-position-no5">
                        <p>05</p>
                    </div>
                    <div class="right-postions-arrow">
                        <i class="fas fa-angle-right fa-lg"></i>
                    </div>

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
            <a href="<?php echo base_url(); ?>index.php/Welcome/index">
                <p>Log Out</p>
            </a>
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



    <script src="<?php echo base_url(); ?>resources/frontend/Js/Dashboard.js">

    </script>
</body>

</html>