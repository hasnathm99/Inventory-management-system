<?php
require_once('db_connect.php');
$id=$_GET['id'];
?>
<?php include 'header.php'; ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- Start to Copy From Here -->
                            <?php
                            $query1="select * from expense where id=$id ";
							$query1_run=mysqli_query($connect , $query1);
							while($row=mysqli_fetch_array($query1_run)){
								$title=$row['title'];
								$amount=$row['amount'];
								$remarks=$row['remarks'];
								$date=$row['date'];
								
							}
                            ?>
                                <form action="edit_expense_process_func.php?id=<?php echo $id; ?>" method="POST">
                                    <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header"><b>Edit Expense Information</b></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Provide New Information</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="title" class="control-label mb-1">Title</label>
                                                <input id="title" name="title" type="text" class="form-control" value="<?php echo $title; ?>" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="amount" class="control-label mb-1">Amount</label>
                                                <input id="amount" name="amount" type="text" class="form-control " value="<?php echo $amount; ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="remarks" class="control-label mb-1">Remarks</label>
                                                <input id="remarks" name="remarks" type="text" class="form-control " value="<?php echo $remarks; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="date" class="control-label mb-1">Date</label>
                                                <input id="date" name="date" type="date" class="form-control " value="<?php echo $date; ?>">
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update</span>
                                                    <span id="payment-button-sending" style="display:none;">Updating...</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                </form>
                            
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
        <?php require 'footer.php' ?>
