<?php

$id = $_GET['id'];
$type = $_GET['type'];
$name = $_GET['name'];

$path = getcwd().DIRECTORY_SEPARATOR;
$newpath = substr($path, 0,22); //path local
//$newpath = substr($path, 0,28); //path host

switch ($type) {
  case 'Classic':
    $location = "images\pic_door_classic";
    break;
  case 'Contemporary':
    $location = "images\pic_door_contemporary";
    break;
  case 'Modern':
    $location = "images\pic_door_modern";
    break;
  case 'Showroom':
    $location = "images\showroom";
    break;
  case 'Folios':
    $location = 'images\folios';
    break;
  case 'Process':
    $location = "images\process";
    break;
  case 'Othercrafts':
    $location = "images\pic_door_modern";
    break;
}

//--SET DIRECTORY IMAGE HOST
/*switch ($type) {
  case 'Classic':
    $location = "images/pic_door_classic";
    break;
  case 'Contemporary':
    $location = "images/pic_door_contemporary";
    break;
  case 'Modern':
    $location = "images/pic_door_modern";
    break;
  case 'Showroom':
    $location = "images/showroom";
    break;
  case 'Folios':
    $location = 'images/folios';
    break;
  case 'Process':
    $location = "images/process";
    break;
  case 'Othercrafts':
    $location = "images/pic_door_modern";
    break;
}*/

require_once('../../app/config.inc.php');
$strsql  = "DELETE FROM picture_door ";
$strsql .= "WHERE ";
$strsql .= "Picture_Door_ID = ".$id; // เลือก ตารางที่เราเก็บข้อมูล
$strsql .= " AND Picture_Door_Type = '".$type."'"; // เลือก ตารางที่เราเก็บข้อมูล
$strsql .= " AND Picture_Door_Name = '".$name."'"; // เลือก ตารางที่เราเก็บข้อมูล
$result = mysqli_query($objCon,$strsql);
$filedelete = $newpath.'\\'.$location.'\\'.$name.'.jpg';
//echo $filedelete.'<br/>';

if($result) {
  if(unlink($filedelete)) {
    echo "Success";
  }
  else{
    echo "file";
  }
}else{
  die('Invalid query: ' . mysql_error());
}

mysqli_close($objCon);
?>
