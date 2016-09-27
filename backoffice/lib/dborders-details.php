<?php
$orderID = $_GET['id'];
include "../vendor/datatables-editor/php/DataTables.php";
// Alias Editor classes so they are easy to use
use DataTables\Editor;
use DataTables\Editor\Field;

Editor::inst($db, 'orders_details', 'Orders_Details_ID')
 ->fields(
  Field::inst('Orders_Details_ID')->validator('Validate::notEmpty'),
  Field::inst('Order_ID')->validator('Validate::notEmpty'),
  Field::inst('Picture_Door_ID')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Height')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Width')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Thickness')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Accessories_Framing')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Accessories_GlassWork')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Wood_for_Door')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Wood_for_Framing')->validator('Validate::notEmpty'),
  Field::inst('Orders_Details_Remark'),
  Field::inst('Orders_Details_Delivery_Date')
 )
 ->WHERE('Order_ID',$orderID)
 ->process($_POST)
 ->json();
?>
