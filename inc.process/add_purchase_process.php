<?php
//insert.php;

if(isset($_POST["product_name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=inventory_management_system", "root", "");

 for($count = 0; $count < count($_POST["product_name"]); $count++)
 {  
  $query = "INSERT INTO purchase 
  (company_name, dc_no, dc_date, order_no, order_date, product_name, mt, ream, unit_price, d_price, td_price, vat, t_vat, total) 
  VALUES (:company_name, :dc_no, :dc_date, :order_no, :order_date, :product_name, :mt, :ream, :unit_price, :d_price, :td_price, :vat, :t_vat, :total)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(

   array(
    ':company_name'  => $_POST["company_name"],
    ':dc_no'  => $_POST["dc_no"],
    ':dc_date'  => $_POST["dc_date"],
    ':order_no'  => $_POST["order_no"],
    ':order_date'  => $_POST["order_date"], 
    ':product_name'  => $_POST["product_name"][$count],
    ':mt'  => $_POST["mt"][$count],
    ':ream' => $_POST["ream"][$count], 
    ':unit_price' => $_POST["unit_price"][$count], 
    ':d_price' => $_POST["d_price"][$count], 
    ':td_price' => $_POST["td_price"][$count], 
    ':vat' => $_POST["vat"][$count], 
    ':t_vat' => $_POST["t_vat"][$count], 
    ':total' => $_POST["total"][$count], 
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>