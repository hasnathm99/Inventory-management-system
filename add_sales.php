<?php 

include('include/db_connect.php');
include 'include/header.php' ?>
                        <!-- Start to Copy From Here -->

                            <form method="POST" action="inc.process/add_sales_process.php?">
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <div class="col-lg-7">
                                        <div class="card">
                                            <div class="card-header">sales Information</div>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Provide Information</h3>
                                                </div>
                                                <hr>
                                                
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="company_name" class="control-label mb-1">Company Name</label>
                                                            <div class="input-group">
                                                                <input id="company_name" name="company_name" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="order_date" class="control-label mb-1">Order Date</label>
                                                                <input id="order_date" name="order_date" type="date" class="form-control" required>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                            <table class="table table-borderless table-data3" id="item_table">
                                                
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Ream</th>
                                                        <th>Market Unit Price</th>
                                                        <th>Sales Unit Price</th>
                                                        <th>Total</th>              
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                      <td>
                                                            <div class="form-group">
                                                                <!-- <label for="product_name" class="control-label ">Product</label> -->
                                                                <select  name="product_name" required>
                                                                    <option value="NULL" >---Select---</option>
                                                                    <?php
                                                                    $query="select * from product ";
                                                                    $query_run=mysqli_query($connect,$query);
                                                                    $row_count=mysqli_num_rows($query_run);
                                                                    while($row=mysqli_fetch_array($query_run)){
                                                                        ?>
                                                                        <option value="<?php echo $row['product_name']; ?>" required> <?php echo $row['product_name']; ?></option required>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                
                                                            </div>
                                                        </td>
                                                        <td><div >
                                                            <div class="form-group">
                                                                <!-- <label for="ream" class="control-label ">Ream</label> -->
                                                                <input id="ream" name="ream" type="text" class="form-control" required>
                                                                
                                                            </div>
                                                        </div></td>
                                                        <td><div >
                                                            <div class="form-group">
                                                                <!-- <label for="m_unit_price" class="control-label ">Market Unit Price</label> -->
                                                                <input id="m_unit_price" name="m_unit_price" type="text" class="form-control" required>
                                                                
                                                            </div>
                                                        </div></td>
                                                        <td><div >
                                                            <div class="form-group">
                                                                <!-- <label for="s_unit_price" class="control-label">Sale Unit Price</label> -->
                                                                <input id="s_unit_price" name="s_unit_price" type="text" class="form-control" required>
                                                                
                                                            </div>
                                                        </div></td>
                                                        <td><div >
                                                            <div class="form-group">
                                                                <!-- <label for="total" class="control-label ">Total</label> -->
                                                                <input id="total" name="total" type="text" class="form-control" >
                                                                
                                                            </div>
                                                        </div></td>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <!-- END DATA TABLE-->
                                    </div>
                                </div>
                                <div align="center">
                                    <input type="submit" name="submit" class="btn btn-info" value="Insert" />
                                </div>
                            </form>


                        <!-- end of  form -->


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
<script >
    $(function() {
        $("#ream, #s_unit_price").on("keydown keyup", sum);
      function sum() {
      $("#total").val(Number($("#ream").val()) * Number($("#s_unit_price").val()));
      }
    });
</script>
