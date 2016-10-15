<?php

$id = $_GET['id'];
$type = $_GET['type'];
$name = $_GET['name'];
$caption = $_GET['caption'];
$no = $_GET['no'];

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

$sql="SELECT Picture_Door_Name FROM picture_door WHERE Picture_Door_ID = $id AND Picture_Door_Type = '$type'";
$result=mysqli_query($objCon,$sql);

// Associative array
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$nameold = $row["Picture_Door_Name"];

echo "Name OLD : ".$nameold.'<br/>';

$strsql  = "UPDATE picture_door ";
$strsql .= "SET ";
/*$strsql .= "Picture_Door_Name =  '$name' ";
$strsql .= ",Picture_Door_Caption =  '$caption' ";
$strsql .= ",Picture_Door_Sequence_Number =  '$no' ";*/
if($name != "" && $name != 'null') {
$strsql .= "Picture_Door_Name =  '$name' ";
}
if($caption != "" && $caption != 'null') {
$strsql .= ",";
$strsql .= "Picture_Door_Caption =  '$caption' ";
}
if($no != "" && $no != 'null') {
$strsql .= ",";
$strsql .= "Picture_Door_Sequence_Number =  '$no' ";
}
$strsql .= "WHERE ";
$strsql .= "Picture_Door_ID = ".$id; // เลือก ตารางที่เราเก็บข้อมูล
$result = mysqli_query($objCon,$strsql);
$fileoldname = $newpath.'\\'.$location.'\\'.$nameold.'.jpg';
$filenewname = $newpath.'\\'.$location.'\\'.$name.'.jpg';
echo $fileoldname.'<br/>';
echo $filenewname.'<br/>';
if($result) {
$flgRename = rename($fileoldname, $filenewname);
    if($flgRename){
      echo "File Rename";
    }else{
      echo "File can not rename";
    }
}else{
  die('Invalid query: ' . mysqli_error($objCon));
}

mysqli_close($objCon);
?>
