<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Style.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/Inbound.css" />


  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Inventory Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src=" https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js "></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function totalAmount(stock, unit, tst) {
      let st = document.getElementById(stock).value;
      let un = document.getElementById(unit).value;
      document.getElementById(tst).value = st * un;
    }

    var btn1 = "block";
    var btn2 = "none";
    var mid5 = "none";
    var last5 = "none";

    function index() {
      document.getElementById("add10").style.display = btn1;
      document.getElementById("add15").style.display = btn2;
      document.getElementById("mid5").style.display = mid5;
      document.getElementById("last5").style.display = last5;
    }

    function add10() {
      btn1 = "none";
      btn2 = "block";
      mid5 = "block";
      last5 = "none";
      document.getElementById("add10").style.display = btn1;
      document.getElementById("add15").style.display = btn2;
      document.getElementById("mid5").style.display = mid5;
      document.getElementById("last5").style.display = last5;
    }

    function add15() {
      btn1 = "none";
      btn2 = "none";
      mid5 = "block";
      last5 = "block";
      document.getElementById("add10").style.display = btn1;
      document.getElementById("add15").style.display = btn2;
      document.getElementById("mid5").style.display = mid5;
      document.getElementById("last5").style.display = last5;
    }
  </script>
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
        <img class="logo" src="<?php echo base_url(); ?>resources/frontend/img/Itum logo.png" alt="" />

      </div>
      <div class="right-dash">
        
        <h4>Admin</h4>
        <img class="admin-avatar" src="<?php echo base_url(); ?>resources/frontend/img/User.jpg" alt="" />
      </div>
    </div>

    <!--contetn-->
    <div class="content">
      <div class="navbar">
        <div class="main-hang-burgar">
          <div class="hanburgar">
            <div class="hagburgar-box1"></div>
            <div class="hagburgar-box2"></div>
            <div class="hagburgar-box3"></div>
          </div>
        </div>

        <div class="slide-bar">
          <div class="box1">
            <div id="active1" class="sidebar1"></div>
            <a href="<?php echo base_url(); ?>index.php/Admin/dashboardView">
              <div class="slide-dashboard">
                <img class="dash-light" src="<?php echo base_url(); ?>resources/frontend/img/dashboard light.png" alt="" />

                <p>Dashboard</p>
              </div>
            </a>
          </div>

          <div class="box1">
            <div class="sidebar1"></div>
            <a href="<?php echo base_url(); ?>index.php/Admin/inboundView">
              <div id="active" class="inbound">
                <img src="<?php echo base_url(); ?>resources/frontend/img/arrow-up-dark.png" alt="" />
                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/arrow-up-light.png" alt="" />
                <p class="active">Inbound</p>
              </div>
            </a>
          </div>

          <div class="box1">
            <div id="active1" class="sidebar1"></div>
            <a href="<?php echo base_url(); ?>index.php/Admin/outboundView">
              <div class="outbound">
                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/arrow-down-light.png" alt="" />
                <p>Outbound</p>
              </div>
            </a>
          </div>

          <div class="box1">
            <div id="active1" class="sidebar1"></div>
            <a href="<?php echo base_url(); ?>index.php/Admin/reportView">
              <div class="report">
                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/report-light.png" alt="" />
                <p>Report</p>
              </div>
            </a>
          </div>

          <div class="box1">
            <div id="active1" class="sidebar1"></div>
            <a href="<?php echo base_url(); ?>index.php/Admin/historyView">
              <div class="history">
                <img class="light" src="<?php echo base_url(); ?>resources/frontend/img/history-light.png" alt="" />
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
            <p> Home - Pages - Inbound</p>
          </div>
        </div>
        <h2 class="text-center" id="inbound-heading">INBOUND ITEMS</h2>
        <form id="inbound_form" name="inbound_form">
          <div class="row col-md-12 col-lg-12 col-sm-12">
            <span class="col-md-9 col-lg-9 col-sm-9 px-4">PO.NO: <input type="text" name="po_no" id="po_no" required/></span>
            <span class="col-md-3 col-lg-3 col-sm-3">GRN: <input type="text" name="grn_no" id="grn_no" required/></span>
          </div>

          <div class="row col-md-12 py-2">
            <span class="col-md-9 col-lg-9 col-sm-9 px-4">NAME: <input type="text" name="name" id="name" required/></span>
            <span id="col-sm-33" class="col-md-3 col-lg-3 col-sm-3">DATE : <input type="date" name="date" id="date" required/></span>
          </div>
          <!-- Label -->
          <div class="row col-md-12 col-lg-12 col-sm-12" id="inbound-menu">
            <span class="col-md-2 col-lg-2 col-sm-2 text-center">TYPE</span>
            <span class="col-md-2 col-lg-2 col-sm-2 text-center">PRODUCT</span>
            <span class="col-md-2 col-lg-2 col-sm-2 text-center">STOCK</span>
            <span class="col-md-2 col-lg-2 col-sm-2 text-center">UNIT PRICE</span>
            <span class="col-md-2 col-lg-2 col-sm-2 text-center">TOTAL AMOUNT</span>
            <span class="col-md-2 col-lg-2 col-sm-2 text-center">DESCRIPTION</span>
          </div>

          <!-- 1st line of form -->

          <div id="first5" name="first5">
            <!-- 1st -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type" id="type" class="product" onchange="changeproduct('type','product')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product" id="product">
                  <option value="">Select the product</option>
                  <!-- automatically map the database array using js -->

                </select>
              </span>
              <!-- ID is hidden --></span>

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock" id="stock" onkeyup="totalAmount('stock','unit','tstock')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit" id="unit" onkeyup="totalAmount('stock','unit','tstock')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock" id="tstock" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des" id="des" placeholder="More details" /></span>
            </div>
            <!-- 2nd -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type2" id="type2" class="product2" onchange="changeproduct('type2','product2')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product2" id="product2">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock2" id="stock2" onkeyup="totalAmount('stock2','unit2','tstock2')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit2" id="unit2" onkeyup="totalAmount('stock2','unit2','tstock2')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock2" id="tstock2" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des2" id="des2" placeholder="More details" /></span>
            </div>
            <!-- 3rd -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type3" id="type3" class="product3" onchange="changeproduct('type3','product3')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product3" id="product3">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock3" id="stock3" onkeyup="totalAmount('stock3','unit3','tstock3')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit3" id="unit3" onkeyup="totalAmount('stock3','unit3','tstock3')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock3" id="tstock3" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des3" id="des3" placeholder="More details" /></span>
            </div>
            <!-- 4th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type4" id="type4" class="product4" onchange="changeproduct('type4','product4')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product4" id="product4">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock4" id="stock4" onkeyup="totalAmount('stock4','unit4','tstock4')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit4" id="unit4" onkeyup="totalAmount('stock4','unit4','tstock4')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock4" id="tstock4" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des4" id="des4" placeholder="More details" /></span>
            </div>
            <!-- 5th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type5" id="type5" class="product5" onchange="changeproduct('type5','product5')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product5" id="product5">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock5" id="stock5" onkeyup="totalAmount('stock5','unit5','tstock5')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit5" id="unit5" onkeyup="totalAmount('stock5','unit5','tstock5')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock5" id="tstock5" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des5" id="des5" placeholder="More details" /></span>
            </div>
          </div>
          <div id="add10" style="text-align: right">
            <div id="circle-button-inbound" onclick="add10()">
              <p>+</p>
            </div>
          </div>

          <div id="mid5" name="mid5" style="display: none">
            <!-- 6th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type6" id="type6" class="product6" onchange="changeproduct('type6','product6')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product6" id="product6">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock6" id="stock6" onkeyup="totalAmount('stock6','unit6','tstock6')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit6" id="unit6" onkeyup="totalAmount('stock6','unit6','tstock6')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock6" id="tstock6" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des6" id="des6" placeholder="More details" /></span>
            </div>
            <!-- 7th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type7" id="type7" class="product7" onchange="changeproduct('type7','product7')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product7" id="product7">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock7" id="stock7" onkeyup="totalAmount('stock7','unit7','tstock7')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit7" id="unit7" onkeyup="totalAmount('stock7','unit7','tstock7')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock7" id="tstock7" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des7" id="des7" placeholder="More details" /></span>
            </div>
            <!-- 8th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type8" id="type8" class="product8" onchange="changeproduct('type8','product8')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product8" id="product8">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock8" id="stock8" onkeyup="totalAmount('stock8','unit8','tstock8')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit8" id="unit8" onkeyup="totalAmount('stock8','unit8','tstock8')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock8" id="tstock8" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des8" id="des8" placeholder="More details" /></span>
            </div>
            <!-- 9th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type9" id="type9" class="product9" onchange="changeproduct('type9','product9')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product9" id="product9">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock9" id="stock9" onkeyup="totalAmount('stock9','unit9','tstock9')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit9" id="unit9" onkeyup="totalAmount('stock9','unit9','tstock9')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock9" id="tstock9" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des9" id="des9" placeholder="More details" /></span>
            </div>
            <!-- 10th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type10" id="type10" class="product10" onchange="changeproduct('type10','product10')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product10" id="product10">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock10" id="stock10" onkeyup="totalAmount('stock10','unit10','tstock10')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit10" id="unit10" onkeyup="totalAmount('stock10','unit10','tstock10')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock10" id="tstock10" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des10" id="des10" placeholder="More details" /></span>
            </div>
          </div>
          <div id="add15">
            <div id="add152">
              <div id="circle-button-inbound2" onclick="add15()">
                <p>+</p>
              </div>
            </div>
          </div>

          <div id="last5" name="last5" style="display: none">
            <!-- 11th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type11" id="type11" class="product11" onchange="changeproduct('type11','product11')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product11" id="product11">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock11" id="stock11" onkeyup="totalAmount('stock11','unit11','tstock11')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit11" id="unit11" onkeyup="totalAmount('stock11','unit11','tstock11')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock11" id="tstock11" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des11" id="des11" placeholder="More details" /></span>
            </div>
            <!-- 12th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type12" id="type12" class="product12" onchange="changeproduct('type12','product12')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product12" id="product12">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock12" id="stock12" onkeyup="totalAmount('stock12','unit12','tstock12')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit12" id="unit12" onkeyup="totalAmount('stock12','unit12','tstock12')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock12" id="tstock12" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des12" id="des12" placeholder="More details" /></span>
            </div>
            <!-- 13th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type13" id="type13" class="product13" onchange="changeproduct('type13','product13')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product13" id="product13">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock13" id="stock13" onkeyup="totalAmount('stock13','unit13','tstock13')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit13" id="unit13" onkeyup="totalAmount('stock13','unit13','tstock13')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock13" id="tstock13" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des13" id="des13" placeholder="More details" /></span>
            </div>
            <!-- 14th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type14" id="type14" class="product14" onchange="changeproduct('type14','product14')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product14" id="product14">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock14" id="stock14" onkeyup="totalAmount('stock14','unit14','tstock14')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit14" id="unit14" onkeyup="totalAmount('stock14','unit14','tstock14')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock14" id="tstock14" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des14" id="des14" placeholder="More details" /></span>
            </div>
            <!-- 15th -->
            <div class="row col-md-12 col-lg-12 col-sm-12 py-1">
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="type15" id="type15" class="product15" onchange="changeproduct('type15','product15')">
                  <option value="">Select the type</option>
                  <!-- map the database array -->
                  <?php foreach ($types as $item) {  ?>
                    <option value="<?php echo $item->type_id; ?>"><?php echo $item->type_name; ?></option>
                  <?php } ?>
                </select>
              </span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center">
                <select name="product15" id="product15">
                  <option value="">Select the product</option>
                  <!-- map the database array -->

                </select>
              </span>
              

              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="stock15" id="stock15" onkeyup="totalAmount('stock15','unit15','tstock15')" placeholder="Enter amount of  stock" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="unit15" id="unit15" onkeyup="totalAmount('stock15','unit15','tstock15')" placeholder="Enter uni t price" /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="number" min="1" size="15" name="tstock15" id="tstock15" placeholder="TOTAL" readonly /></span>
              <span class="col-md-2 col-lg-2 col-sm-2 text-center"><input type="text" name="des15" id="des15" placeholder="More details" /></span>
            </div>
          </div>
          <div id="py-2" class="text-center py-2">
            <input type="submit" id="save-button-inbound" class="btn btn-md btn-ld btn-outline-warning text-white" value="SAVE" />
          </div>
        </form>
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
        <p>
          Copyrights <img src="<?php echo base_url(); ?>resources/frontend/img/copyright.png" alt="" />
          <a href="https://itum.mrt.ac.lk/"><span>ITUM</span></a>
        </p>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url(); ?>resources/frontend/Js/Inbound.Js"></script>
  <script>
    function changeproduct(type,pro) {

      var $prd = $("#"+pro);
      $prd.empty();
      tt = $('#'+type).val();

      $.ajax({
        url: "<?php echo base_url(); ?>" + "index.php/Admin/getprod/" + tt,
        method: 'get',
        dataType: 'json',
        success: function(response) {
          // console.log(response);
          response.map(function(item) {
            $("#"+pro).append(
              "<option value='" + item.pro_id + "'>" + item.pro_name + "</option>"
            );
          });
        }
      });

    }
    // $(document).ready(function() {
    //   $("[id^=type]").change(function(e) {
    //     prdname = e.target.className;

    //     var $product = $('#'+prdname);
    //     $product.empty();

    //     $.ajax({
    //       url: "<?php echo base_url(); ?>" + "index.php/Admin/getprod/" + e.target.value,
    //       method: 'get',
    //       dataType: 'json',
    //       success: function(response) {
    //         // console.log(response);
    //         response.map(function(item) {
    //           $("#"+prdname).append(
    //             "<option value='" + item.pro_id + "'>" + item.pro_name + "</option>"
    //           );
    //         });
    //       }
    //     });
    //   });
    // });
  </script>
</body>

</html>