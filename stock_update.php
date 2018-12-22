<?php
require('include/db_connect.php');

//get total ream values from sales table
$query1="select product_name, sum(ream) from sales group by product_name";
$quer1_run=mysqli_query($connect, $query1);

while($row1=mysqli_fetch_array($quer1_run)){
	echo $product_name=$row1['product_name'].' ';
	echo $sales_ream=$row1['sum(ream)'].' ';
	echo '<br>';

	//get total ream value from product table
}
	$query2="select product_name,total_ream from  product ";
	$query2_run=mysqli_query($connect,$query2);
	while($row2=mysqli_fetch_array($query2_run)){
		echo $product_name=$row2['product_name'] .' ';
		echo $total_ream=$row2['total_ream'] .' ';

		
	}

	//update values in product table
		$query3="update product set total_ream=$total_ream-$sales_ream group by product_name ";
		$quer3_run=mysqli_query($connect, $query3);
		if($quer3_run){
			echo 'ok';
		}
	



?>