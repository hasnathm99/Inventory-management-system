<?php
require_once('include\db_connect.php');
?>
<?php $currentPage = 'product_report'; include 'include/header.php' ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- Start to Copy From Here -->
                            <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <h3>Purchase Table</h3>
                                        <br>
                                        <thead>
                                            <tr>
                                                <th>DC NO</th>
                                                <th>DC Date</th>
                                                <th>Order No</th>
                                                <th>Order Date</th>
                                                <th>Product Name</th>
                                                <th>Ream</th>
                                                <th >Action</th>                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                $counter=0;

                                                $result_per_page=5;
                                                $query="select * from purchase";
                                                $query_run=mysqli_query($connect, $query);
                                                $number_of_result=mysqli_num_rows($query_run);
                                                $number_of_page=ceil($number_of_result/$result_per_page);
                                                if(!isset($_GET['page'])){ 
                                                    $page=1;
                                                }else{
                                                    $page=$_GET['page'];
                                                }

                                                $starting_limit_num=($page-1)*$result_per_page;
                                                $query="select * from purchase limit " .$starting_limit_num.",".$result_per_page;
                                                $query_run=mysqli_query($connect , $query);

                                                
                                                for($page=1;$page<=$number_of_page;$page++){
                                                // echo 
                                                echo '<a href="purchase_report.php?page=' .$page.' "><button class="btn btn-success" style="margin-right:1px">'. $page . '</button></a> ';
                                                 }
                                                
                                                // $query="select * from product";
                                                // $query_run=mysqli_query($connect, $query);
                                                while($row=mysqli_fetch_array($query_run)){
                                                    $counter++;

                                                ?>
                                            <tr>
                                                <td><?php echo $row['dc_no']; ?></td>
                                                <td><?php echo $row['dc_date']; ?></td>
                                                <td><?php echo $row['order_no']; ?></td>
                                                <td><?php echo $row['order_date']; ?></td>
                                                <td><?php echo $row['product_name']; ?></td>
                                                <td><?php echo $row['ream']; ?></td>
                                                <td><a href="inc.process\view_purchase_process.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                            <?php  
                                            } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                                <?php

                                ?>
                            </div>
                        </div>

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
