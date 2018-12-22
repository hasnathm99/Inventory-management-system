<?php
require('db_connect.php');

if(isset($_POST['submit'])){

  
    $company_name=$_POST['company_name'];
    $order_date=$_POST['order_date'];
    $product_name=$_POST['product_name'];
    $ream=$_POST['ream'];
    $m_unit_price=$_POST['m_unit_price'];
    $s_unit_price=$_POST['s_unit_price'];
    $total=$_POST['total'];

  //get total_ream from product table
    $query1="select total_ream from product where product_name='$product_name' ";
    $query1_run=mysqli_query($connect , $query1);
    while($row=mysqli_fetch_array($query1_run)){
      $total_ream=$row['total_ream'];
    }
    $update_ream=$total_ream - $ream;

  //calculate profit/loss
    $p_l=($s_unit_price - $m_unit_price) * $ream;
    

  //insert into sales table
    $query2="insert into sales(company_name,order_date,product_name,ream,unit_price,market_unit_price, total,profit_loss) values('$company_name' , '$order_date' , '$product_name' , '$ream' , '$s_unit_price' , '$m_unit_price' , '$total' , '$p_l')";
    $query2_run=mysqli_query($connect , $query2);
    
  //update total ream in product table
    $query3="update product set total_ream='$update_ream' where product_name='$product_name' ";
    $query3_run=mysqli_query($connect , $query3);

    if($query3_run){
      $message= "Sales successful";
      // header('location: ../add_sales.php');
      header("Refresh:0; url=../add_sales.php");
    }
  
}

?>
<script type="text/javascript">
  var message='<?php echo $message; ?>';
  alert(message);
</script>