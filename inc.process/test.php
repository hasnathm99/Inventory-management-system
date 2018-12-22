<?php
require('db_connect.php');

$query="select product_name, sum(ream) from purchase group by product_name";
$query_run=mysqli_query($connect, $query);

while($row=mysqli_fetch_array($query_run)){
    
    $product_name=$row['product_name'];
    $sum_purchase_ream=$row['sum(ream)'];

    $query3="select sum(ream) from sales where product_name='$product_name' ";
    $query3_run=mysqli_query($connect , $query3);

    while ($row2=mysqli_fetch_array($query3_run)) {
    	$sum_sales_ream=$row2['sum(ream)'];
    }
    $update_ream=$sum_purchase_ream - $sum_sales_ream;
    	$query2="update product set total_ream =$update_ream where product_name='$product_name' ";
    	$quer2_run=mysqli_query($connect , $query2);

    
}
if($query_run){
	header('Location:../index.php');
}
?>