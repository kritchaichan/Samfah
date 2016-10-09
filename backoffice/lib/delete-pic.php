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

$filedelete = $newpath.'\\'.$location.'\\'.$name.'.jpg';
//echo $filedelete.'<br/>';
unlink($filedelete);
?>
