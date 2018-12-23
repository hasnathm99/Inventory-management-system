<?php include 'header.php'; 
require('db_connect.php');
//$connect = new PDO("mysql:host=localhost;dbname=inventory_management_system", "root", "");
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
            
            //get input in date format like 2018-12-05
            $start_date=$_POST['start_date'];
            $end_date=$_POST['end_date'];
            $time = new DateTime('00:00:00');

            //convert date to timestamp format like 2018-12-05 00:00:00
            $date1 = new DateTime($start_date);
            $sdate = new DateTime($date1->format('Y-m-d') .' ' .$time->format('H:i:s'));
            $strDate = $sdate->format('Y-m-d H:i:s'); // Outputs like '2017-03-14 00:00:00'

            $date2 = new DateTime($end_date);
            $edate = new DateTime($date2->format('Y-m-d') .' ' .$time->format('H:i:s'));
            $endDate = $edate->format('Y-m-d H:i:s'); // Outputs like '2017-03-14 00:00:00''

            //get data between the two converted date $sdate and $edate
            $query='select amount,date from pl_per_day where date between "2018-12-11 00:00:00" and "2018-12-24 00:00:00"';
                    $query_run=mysqli_query($connect , $query);
                    while($row=mysqli_fetch_array($query_run))
                        {
                            $moddate=$row['date'];
        ?>

        <tr>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $moddate; ?></td>
            
            
        <?php }  } ?>
        </tr>
    </tbody>
</table>
<?php require 'footer.php' ?>
