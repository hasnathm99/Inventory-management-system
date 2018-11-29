<?php


if(isset($_POST["ream_quantity"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=inventory_management_system", "root", "");
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["ream_quantity"]); $count++)
 {  
  $query = "INSERT INTO purchase 
  (order_id, unit_name, mt_quantity, ream_quantity, unit_price, discount_MT, total_discount, vat, total_vat, total_amount) 
  VALUES (:order_id, :unit_name, :mt_quantity, :ream_quantity, :unit_price, :discount_MT, :total_discount, :vat, :total_vat, :total_amount)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':order_id'   => $order_id,
    ':unit_name'  => $_POST["unit_name"][$count], 
    ':mt_quantity' => $_POST["mt_quantity"][$count], 
    ':ream_quantity'  => $_POST["ream_quantity"][$count]
    ':unit_price'  => $_POST["unit_price"][$count]
    ':discount_MT'  => $_POST["discount_MT"][$count]
    ':total_discount'  => $_POST["total_discount"][$count]
    ':vat'  => $_POST["vat"][$count]
    ':total_vat'  => $_POST["total_vat"][$count]
    ':total_amount'  => $_POST["total_amount"][$count]
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