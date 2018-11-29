<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=inventory_management_system", "root", "");
function fill_unit_select_box($connect)
{ 
 $output = '';
 $query = "SELECT * FROM product";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["product_name"].'">'.$row["product_name"].'</option>';
 }
 return $output;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h3>Sharif Stationary</h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Product<i class="fas fa-caret-down caret"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="add_product.html">Add new Product</a>
                                </li>
                                <li>
                                    <a href="view_product.html">Product Report</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Stock</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                        <li>
                                            <a href="add_stock.html">Add New Stock</a>
                                        </li>
                                        <li>
                                            <a href="view_stock.html">Stock Report</a>
                                        </li>

                                    </ul>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages<i class="fas fa-caret-down"></i></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h3>Sharif Stationary</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Product<i class="fas fa-caret-down caret"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="add_product.html">Add new Product</a>
                                </li>
                                <li>
                                    <a href="view_product.html">Product Report</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Stock<i class="fas fa-caret-down caret"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Add new Stock</a>
                                </li>
                                <li>
                                    <a href="register.html">Stock Report</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Supplier<i class="fas fa-caret-down caret"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Add new Supplier</a>
                                </li>
                                <li>
                                    <a href="register.html">Suppliers List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Sales<i class="fas fa-caret-down caret"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Add Sales</a>
                                </li>
                                <li>
                                    <a href="register.html">Sales Table</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Expense<i class="fas fa-caret-down caret"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Add Expenses</a>
                                </li>
                                <li>
                                    <a href="register.html">Expense Table</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Reports</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Users<i class="fas fa-caret-down caret"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Add New Users</a>
                                </li>
                                <li>
                                    <a href="register.html">User List</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">

                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>A4 Paper Has Reached Minimus Stock Limit</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Yellow Paper Has Been Updated On Stock</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/download.png" alt="Sharif Stationary" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Sharif Stationary</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/download.png" alt="Sharif Stationary" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Sharif Stationary</a>
                                                    </h5>
                                                    <span class="email">Demo@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- Start to Copy From Here -->

                        <!-- <div class="container">
                         <h3 align="center">Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</h3>
                         <br />
                         <h4 align="center">Enter Item Details</h4>
                         <br />
                         <form method="post" id="insert_form">
                          <div class="table-repsonsive">
                           <span id="error"></span>
                           <table class="table table-bordered" id="item_table">
                            <tr>
                             <th>Enter Item Name</th>
                             <th>Enter Quantity</th>
                             <th>Select Unit</th>
                             <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
                            </tr>
                           </table>
                           <div align="center">
                            <input type="submit" name="submit" class="btn btn-info" value="Insert" />
                           </div>
                          </div>
                         </form>
                        </div> -->

                        <!-- SeCond Form -->
                            <form method="POST" id="insert_form">
                                <!-- <div class="col-lg-7">
                                    <div class="card">
                                        <div class="card-header">Purchase Information</div>
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center title-2">Provide Information</h3>
                                            </div>
                                            <hr>
                                            
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="dc_date" class="control-label mb-1">DC Date</label>
                                                            <input id="dc_date" name="dc_date" type="date" class="form-control cc-exp" value="" data-val="true"
                                                                autocomplete="cc-exp" data-val-required="Please enter DC Date">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="dc_no" class="control-label mb-1">DC NO</label>
                                                        <div class="input-group">
                                                            <input id="dc_no" name="dc_no" type="number" class="form-control cc-cvc" value="" data-val="true" 
                                                                autocomplete="off" data-val-required="Please enter DC Date">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="order_date" class="control-label mb-1">Order Date</label>
                                                            <input id="order_date" name="order_date" type="date" class="form-control cc-exp" value="" data-val="true" 
                                                                autocomplete="cc-exp" data-val-required="Please enter order Date">
                                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="order_no" class="control-label mb-1">Order No</label>
                                                        <div class="input-group">
                                                            <input id="order_no" name="order_no" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter order number"
                                                                 autocomplete="off">

                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div> -->
                                <span id="error"></span>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <div class="col-lg-7">
                                        <div class="card">
                                            <div class="card-header">Purchase Information</div>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Provide Information</h3>
                                                </div>
                                                <hr>
                                                
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="company_name" class="control-label mb-1">Company Name</label>
                                                            <div class="input-group">
                                                                <input id="company_name" name="company_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="dc_no" class="control-label mb-1">DC NO</label>
                                                            <div class="input-group">
                                                                <input id="dc_no" name="dc_no" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="dc_date" class="control-label mb-1">DC Date</label>
                                                                <input id="dc_date" name="dc_date" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        
                                                        <div class="col-6">
                                                            <label for="order_no" class="control-label mb-1">Order No</label>
                                                            <div class="input-group">
                                                                <input id="order_no" name="order_no" type="text" class="form-control ">

                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="order_date" class="control-label mb-1">Order Date</label>
                                                                <input id="order_date" name="order_date" type="date" class="form-control">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                            <table class="table table-borderless table-data3" id="item_table">
                                                <button type="button" name="add" class="btn btn-success btn-sm add" style="margin-bottom: 5px;"><i class="fas fa-plus"></i>  Add Row</button>
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>MT</th>
                                                        <th>Ream</th>
                                                        <th>Unit Price</th>
                                                        <th>Discount Percent</th>
                                                        <th>Total Discount</th>
                                                        <th>Vat</th>
                                                        <th>Total Vat</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                        
                                                    </tr>
                                                </thead>
                                                <!-- <tbody class="input_fields_wrap">
                                                    <tr>
                                                        <td ><input type="number" name="" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input" class="pu-input"></td>
                                                        <td><input type="number" name="" class="pu-input"></td>
                                                        <td colspan="2" style="padding-left: 0; padding-right: 30px;">
                                                            <button type="button" class="btn btn-primary add_field_button">
                                                                <i class="fas fa-plus-circle"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody> -->
                                            </table>
                                        </div>
                                        
                                        <!-- END DATA TABLE-->
                                    </div>
                                </div>
                                <div align="center">
                                    <input type="submit" name="submit" class="btn btn-info" value="Insert" />
                                </div>
                            </form>


                        <!-- end of second form -->


                        <!-- End the Copy From Here -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Utshab Technologies. All rights reserved. Template by <a href="https://colorlib.com">Utshab Technologies</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counte
    r-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    


</body>

</html>
<!-- end document-->
<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tbody><tr>';
  html += '<td><select name="product_name[]" class="pu-input product_name"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><input type="text" name="mt[]" class="pu-input mt" /></td>';
  html += '<td><input type="text" name="ream[]" class="pu-input ream"></td>';
  html += '<td><input type="text" name="unit_price[]" class="pu-input unit_price"></td>';
  html += '<td><input type="text" name="d_price[]" class="pu-input d_price"></td>';
  html += '<td><input type="text" name="td_price[]" class="pu-input td_price"></td>';
  html += '<td><input type="text" name="vat[]" class="pu-input vat"></td>';
  html += '<td><input type="text" name="t_vat[]" class="pu-input t_vat"></td>';
  html += '<td><input type="text" name="total[]" class="pu-input total"></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></span></button></td></tr></tbody>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.product_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"inc.process/add_purchase_process.php",
    method:"POST",
    data: form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      
      // $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
      alert('Information Saved Successfully');
      location.reload();
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>
