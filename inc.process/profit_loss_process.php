<?php include 'header.php'; 
require('db_connect.php');
?>

<br>
<table class="table table-borderless table-data3">
    <h3>Expense Table</h3>
    <br>
    <thead>
        <tr>
            <th>Title</th>
            <th>Amount</th>                           
            <th>Amount</th>                           
        </tr>
    </thead>
    <tbody>
        <?php

        if(isset($_POST['submit'])){
        	$start_date=$_POST['start_date'];
        	$end_date=$_POST['end_date'];
            $date = date("d M Y H:i:s");
            echo strtotime($start_date);

            //creating concat function
            function func($value){
                list($date , $time)=explode(' ' , $value);
                echo $date;
            }

            
        	$query="select amount,date from pl_per_day ";
        	$query_run=mysqli_query($connect , $query);
        	while($row=mysqli_fetch_array($query_run)){
                $moddate=strtotime($row['date']);
        ?>

        <tr>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo func($row['date']); ?></td>
            <td><?php echo date('y-m-d H M S' , $moddate) ; ?></td>
            
        <?php }  } ?>
        </tr>
    </tbody>
</table>
<?php require 'footer.php' ?>
