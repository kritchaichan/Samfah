<?php
//Check Login
session_start();
$_SESSION['frmAction'] = md5('itoffside.com' . rand(1,9999));
if ($_SESSION['checkSign'] != 'itoffside') {
    header('Location: login.php');
}
//Check Login
require_once('../../app/config.inc.php');
//@ini_set('display_errors', '0');
if($_POST["Action"] == "Save")
{
   //--image upload
  $filename = $_FILES['fileToUpload']['name'] ;
  $array_last = explode("." , $filename);
  //$name = $array_last[0];
  $num = count($array_last)-1;
  $lastname = strtolower($array_last[$num]);
  $codename = $_POST["codename"];
  $caption = $_POST["caption"];
  $type = $_POST["optionsRadios"];

  if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
      echo '<script>alert("Can\'t Upload Image Please Upload try again.");</script>';
      echo '<script>window.location.href = "upload_picture.php";</script>';
  }
  else if($codename == ""){
      echo '<script>alert("Please Input Codename.");</script>';
      echo '<script>window.location.href = "upload_picture.php";</script>';
  }
  // Allow certain file formats
  else if($lastname != "jpg" && $lastname != "jpeg") {
  echo '<script>alert("Sorry, only JPG, JPEG files are allowed.");</script>';
  echo '<script>window.location.href = "upload_picture.php";</script>';
  }
  else if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo '<script>alert("Sorry, your file is too large 5MB.");</script>';
  echo '<script>window.location.href = "upload_picture.php";</script>';
  }
  else
  {
    //--SET DIRECTORY IMAGE
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
      /*if($type == "Classic"){
        $location = "images\pic_door_classic";
      }
      else if ($type == "Contemporary"){
        $location = "images\pic_door_contemporary";
      }
      else if($type == "Modern"){
        $location = "images\pic_door_modern";
      }*/
      //end upload image
      $date = date('Y-m-d H:i:s');
      $sql  = "INSERT INTO picture_door ";
      $sql .= "(Picture_Door_Name,Picture_Door_Type,Picture_Door_Caption,DateTime) VALUES ";
      $sql .= "('{$codename}','{$type}','{$caption}','{$date}') ";

      $result = mysqli_query ($objCon,$sql);

      if($result == false){
            echo '<script>alert("Upload Image Unsuccess!");</script>';
      }
      else{
        $newname = $codename . "." . $array_last[1];
        $path = getcwd().DIRECTORY_SEPARATOR;
        $newpath = substr($path, 0,22);
        $target = $newpath."\\".$location."\\".$newname;
        echo $target;
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'] , $target);
        echo '<script>alert("Upload Image Success!");</script>';
        echo '<script>window.location.href = "upload_picture.php";</script>';
        //header('Location:upload_picture.php');
      }
  }
}
?>
