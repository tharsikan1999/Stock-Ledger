<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Inventory Management</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Style.css">


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
                        <div id="active1" class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Admin/reportView">

                            <div class="report">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/report-light.png" alt="">
                                <p>Report</p>

                            </div>
                        </a>
                    </div>

                    <div class="box1">
                        <div class="sidebar1">

                        </div>
                        <a href="<?php echo base_url(); ?>index.php/Admin/historyView">

                            <div id="active" class="history">
                                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/history-light.png" alt="">
                                <img src="<?php echo base_url(); ?>resources/frontend/img/history-dark.png" alt="">
                                <p class="active">History</p>
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
                <h2 id="history-header">Stock History</h2>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="table-first-th">GRN/SIR NO <div class="dropdown-buttons">
                                    <i class="fas fa-caret-up"></i>
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-second-th">PO/ISSUE NO
                                <div class="dropdown-buttons">
                                    <i id="second-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="second-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-third-th">PRODUCT ID
                                <div class="dropdown-buttons">
                                    <i id="third-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="third-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-fourth-th">DATE
                                <div id="dropdown-buttons" class="dropdown-buttons">
                                    <i id="fourth-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="fourth-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>

                            <th class="table-five-th">Department/Supplier
                                <div class="dropdown-buttons">
                                    <i id="five-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="five-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-six-th">UNIT PRICE
                            <div class="dropdown-buttons">
                                    <i id="six-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="six-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-seven-th">QUANTITY
                            <div class="dropdown-buttons">
                                    <i id="seven-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="seven-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-eight-th">TOTAL PRICE
                            <div class="dropdown-buttons">
                                    <i id="eight-fa-caret-up" class="fas fa-caret-up"></i>
                                    <i id="eight-fa-caret-down" class="fas fa-caret-down"></i>
                                </div>
                            </th>
                            <th class="table-nine-th">DELETE
                            <div >
                                    
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tables">
                        <?php foreach ($stock_history as $item) {  ?>
                            <tr>
                                <td><span><?php echo $item['grn']; ?></span><span><?php echo $item['sir']; ?></span></td>
                                <td><span><?php echo $item['po_no']; ?></span><span><?php echo $item['issue_no']; ?></span></td>
                                <td><?php echo $item['pro_id']; ?></td>
                                <td><?php echo $item['date']; ?></td>
                                <td><span><?php echo $item['dep_id']; ?></span><span><?php echo $item['supplier']; ?></span></td>
                                <td><?php echo $item['unit_price']; ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td><?php echo $item['price']; ?></td>
                                <td class="deleteForH" id="<?php echo $item['id']; ?>"><button id="delete-button-history" onclick="dltStock(<?php echo $item['id']; ?>)"><i class="fas fa-times"></i></button></td>

                            </tr>
                        <?php } ?>



                    </tbody>

                </table>


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
                    <p>Logout</p>
                </div>
            </div>
            <div class="copyright">
                <p>Copyrights <img src="<?php echo base_url(); ?>resources/frontend/img/copyright.png" alt=""> <a href="https://itum.mrt.ac.lk/"><span>ITUM</span></a></p>
            </div>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/frontend/Js/Histroy.Js">
    </script>
    <script>
        function dltStock(id) {
            // console.log("Delete"+id);
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/Admin/deleteStock/" + id,
                method: 'get',
                dataType: 'json',
                success: function(response) {
                    // console.log(response);
                    if (response) {
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
                            title: 'Successfully Deleted!'
                        })
                        window.location = "<?php echo base_url(); ?>"  + 'index.php/Admin/historyView';
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
                    alert("Something went wrong");
                }
            });
        }
    </script>
</body>

</html>