<?php
require_once('include\db_connect.php');
?>
<?php require 'include/header.php' ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <h2>Today's Reviews</h2>
                    <br>
                    <div class="container-fluid">
                        <!-- Start to Copy From Here -->
                            <?php
                            $date=date('Y-m-d');
                            // $date='2018-12-18';
                            //get details from sales
                            $query="select sum(ream) , sum(profit_loss) from sales where order_date='$date' ";
                            $query_run=mysqli_query($connect ,  $query);
                            if($query_run){
                                while($row=mysqli_fetch_array($query_run)){
                                     $pl=$row['sum(profit_loss)'];
                                     $sold_ream=$row['sum(ream)'];
                                }
                            }
                            //get details from purchase
                            $query2="select sum(ream) from purchase where order_date='$date' ";
                            $query2_run=mysqli_query($connect , $query2);
                            if($query2_run){
                                while($row2=mysqli_fetch_array($query2_run)){
                                     $purchased_ream=$row2['sum(ream)'];
                                }
                            }
                            //get details from expense
                            $query3="select sum(amount) from expense where date='$date' ";
                            $query3_run=mysqli_query($connect , $query3);
                            if($query3_run){
                                while($row3=mysqli_fetch_array($query3_run)){
                                     $expense=$row3['sum(amount)'];
                                }
                            }
                            ?>
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                
                                                <div class="text">
                                                    <h3 style="color: white">Ream Purchased</h3>
                                                    <span  style="font-weight: 500;font-size: 18px "><?php echo round($purchased_ream,3) ;?></span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </div>
                                                
                                                <div class="text">
                                                    <h3 style="color: white">Ream Sold</h3>
                                                    <span  style="font-weight: 500;font-size: 18px "><?php echo round($sold_ream,3); ?></span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="fas fa-american-sign-language-interpreting"></i>
                                                </div>
                                                <br>
                                                <div class="text">
                                                    <h3 style="color: white">Expense</h3>
                                                    <span  style="font-weight: 500;font-size: 18px "><?php echo round($expense,3); ?></span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c4">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-money"></i>
                                                </div>
                                                <div class="text">
                                                    <h2 style="font-weight: 500;">Profit $ Loss</h2>
                                                    <span style="font-weight: 500;font-size: 18px "><?php $profit_loss= $pl-$expense;
                                                        echo round($profit_loss,3);
                                                     ?></span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- start manual input -->

                            <h2>Manual Reviews</h2>
                            <br>
                            <form action="inc.process\profit_loss_process.php" method="POST">
                                    <div class="col-lg-10">
                                        <div class="card">
                                            <div class="card-header"><b>Check Profit $ Loss</b></div>
                                            <div class="card-body">
                                                
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="start_date" class="control-label mb-1">Start Date</label>
                                                                <input  name="start_date" id="start_date" type="date" class="form-control " required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="end_date" class="control-label mb-1">End Date</label>
                                                            <div class="input-group">
                                                                <input id="end_date" name="end_date" type="date" class="form-control " required>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="submit" class="control-label mb-1"></label>
                                                            <div class="input-group">
                                                                <input id="submit" name="submit" type="submit" class="form-control btn btn-info" >
                                                            </div>
                                                        </div>
                                                    </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end of manual section -->

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
