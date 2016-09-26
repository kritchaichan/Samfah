<?php
include "../vendor/datatables-editor/php/DataTables.php";
// Alias Editor classes so they are easy to use
use DataTables\Editor;
use DataTables\Editor\Field;

Editor::inst($db, 'picture_door', 'Picture_Door_ID')
 ->fields(
  Field::inst('Picture_Door_ID')->validator('Validate::notEmpty'),
  Field::inst('Picture_Door_Name')->validator('Validate::notEmpty'),
  Field::inst('Picture_Door_Type')->validator('Validate::notEmpty'),
  Field::inst('Picture_Door_Caption')
 )
 ->process($_POST)
 ->json();
?>
