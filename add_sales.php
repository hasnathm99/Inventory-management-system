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
<?php require 'include/header.php' ?>
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

    <?php require 'include/footer.php' ?>
<!-- end document-->
<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tbody><tr>';
  html += '<td><select name="product_name[]" class="pu-input product_name"><option value="">--Select--</option><?php echo fill_unit_select_box($connect); ?></select></td>';
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
