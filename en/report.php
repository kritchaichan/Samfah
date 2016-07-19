<!DOCTYPE html>
<html>
	<head>
		<title>Samfa Craftman</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="https://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
		<script type="text/javascript" src="modernizr.custom.79639.js"></script>
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../js/lightbox.min.js"></script>
		<link href="../css/lightbox.css" rel="stylesheet" />

		<style type="text/css">
		#blog{
			margin-top: 0px;
		}
		#order2{
			overflow: hidden;
			height: 900px;

		}
		hr.style{
			border:2px solid black;
			margin-top: 7.5%;
    		height: 0px;
		}
		hr.style:before{
			content: "Order";
		    display: inline-block;
		    position: relative;
		    top: -0.9em;
		    left: -7em;
		    font-size: 40px;
		    padding: 0 0.25em;
		    background: white;
		    z-index: 0;
		}
		#no{
		    display: inline-block;
		    position: relative;
		    top: 55px;
  			left: 285px;
		    font-size: 14px;
		    padding: 0 0.25em;
		    background: white;
		    z-index: 0;
		    float: left;
		}
		#topdate{
		    display: inline-block;
		    position: relative;
		    top: 55px;
  			left: 675px;
		    font-size: 14px;
		    padding: 0 0.25em;
		    background: white;
		    z-index: 0;
		    float: left;
		}
		input[type="submit"] {
		  border: 0; 
		  clip: rect(0 0 0 0); 
		  height: 1px; margin: -1px; 
		  overflow: hidden; 
		  padding: 0; 
		  position: absolute; 
		  width: 0px;
		}
		input[type="submit"] + span {
		  display: block;
		  cursor: pointer;
		  text-align: center;
		}

		/* the basic, unchecked style */
		input[type="submit"] + span:before {
		  content: '';
		  content-font: 100px;
		  display: inline-block;
		  background-color: #fff;
		  /* box-shadow: inset 0px 2px 3px 1px rgba(0, 0, 0, .5), 0px 1px 0px 0px rgba(255, 255, 255, .8); */
		  width: 50px;
		  height: 50px;
		  margin: 5px 0px;
		  border-radius: 1em; 
		  border: 1px solid grey; 
		  margin-right: 0.5em;
		  font-size: 14px;
		  vertical-align: top;
		  background: url(../images/print_icon1.gif)no-repeat center center;
		  background-size: 40px;
		  transition: 0.5s ease all;
		}
		</style>

</head>

	
	<?php
	session_start();
		include('../include/config.inc.php');
		
		
		for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
        {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$name = $firstname." ".$lastname;
		$address=  $_POST['address'];
		$mobile =  $_POST['mobile'];
		$telephone =  $_POST['telephone'];
		$email =  $_POST['email'];
		$line =  $_POST['line'];
		$fbname =  $_POST['fbname'];
		$date_delivery =  $_POST['date'];
		$door_order = $_POST['door_order'];
		$remark = $_POST['remark'];
		
        $door = $_SESSION["ImgDoor"][$i];
        $x =  $_SESSION["Height"][$i];
        $y =  $_SESSION["Width"][$i];
        $quan =  $_SESSION["Quantity"][$i];
        $acsr1 =  $_SESSION["Acsr1"][$i];
        $acsr2 =  $_SESSION["Acsr2"][$i];
        $acsr3 =  $_SESSION["Acsr3"][$i];
        $wood_c = $_SESSION["WoodForDoor"][$i];
        $frame_c = $_SESSION["WoodForFraming"][$i];
		
		$acsr = $acsr1." ".$acsr2." ".$acsr3;
		
		$new_id = mysql_result(mysql_query("Select Max(order_no)+1 as MaxID from reservation"),0,"MaxID");//เลือกเอาค่า id ที่มากที่สุดในฐานข้อมูลและบวก 1 เข้าไปด้วยเลย
		
         if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
              $order_no="00001";
         }else{
			  $id=sprintf("%05d",$new_id);
              $order_no=sprintf("%05d",$new_id);//ถ้าไม่ใช่ค่าว่าง
         }
		
		$date = date('Y-m-d');
		$date_reserve =  date('Y-m-d H:i:s');
		
		$sql="INSERT INTO `sf`.`reservation` (`order_no`, `pic_name`, `height`, `width`, `quantity`, `accessories`, `wood_color`, `frame`, `remark` ,`name`, `deliverd_address`, `mobile`, `telephone`, `email`, `line_id`, `fbname`, `delivery_date`, `date_for_order`, `date_for_reserve`) VALUES ('$order_no', '$door', '$x', '$y', '$quan', '$acsr', '$wood_c', '$frame_c','$remark', '$name', '$address', '$mobile', '$telephone', '$email', '$line', '$fbname', '$date_delivery', '$date', '$date_reserve')";
		
		/*$sql ="INSERT INTO `u982279518_samfa`.`reservation` (`order_no`, `pic_name`, `height`, `width`, `quantity`, `accessories`, `wood_color`, `frame`, `remark` , `name`, `deliverd_address`, `mobile`, `telephone`, `email`, `line_id`, `fbname`, `delivery_date`, `date_for_order`, `date_for_reserve`, `status`) VALUES ('$order_no', '$door', '$x', '$y', '$quan', '$acsr', '$wood_c', '$frame_c','$remark', '$name', '$address', '$mobile', '$telephone', '$email', '$line', '$fbname', '$date_delivery', '$date', '$date_reserve', 'New Order')";*/
		
		$result = mysql_query ($sql);
		}
 
 // Send Mail Order
/*require('PHPMailer/PHPMailerAutoload.php');  // path to the PHPMailer class
 
$mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->CharSet = "UTF-8";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "disoder.tg@gmail.com"; // SMTP username
$mail->Password = "joenova3"; // SMTP password 
 
$mailuser = 1;
$mailadmin = 2;

if($mailuser == 1){
$mail->From     = "Samfa Craftsman";
$mail->FromName = 'Samfa Craftsman';
$mail->AddAddress($email);
$mail->isHTML(true);  
$mail->Subject  = 'Thank you for your order No.'.$order_no ;
$mail->Body     = 'Thank you for your order No.'.$order_no.' <br> We will contact you in 24 hour' ;

$mail->WordWrap = 50;  

$mail->Send();

}
if($mailadmin == 2){
 
$mail->From     = "Samfa Craftsman";
$mail->FromName = 'Samfa Craftsman';
$mail->AddAddress('disoder.tg@gmail.com');
$mail->isHTML(true);  
$mail->Subject  = 'You have new order No.'.$order_no ;
$mail->Body     = 'You have new order No.'.$order_no.'<br> From : '.$name ;

$mail->Send();

$mail->WordWrap = 50;  

}*/

	?>

	<body>
	    <div id="container">		
			<div id="DATA">
				<div id="blog" class="order">	
					<div id="no">NO.<?=$id?></div>
                    <?php $array_date_order = explode("-" , $date);
					echo "<div id="."topdate".">"."date.".$array_date_order[0].".".$array_date_order[1].".".$array_date_order[2]."</div>";
					?>
					<hr class="style" >				
		        	<div id="Detail">
<?php
                    for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
                    { // Loop Order
                    ?>
                        <div id="order2">
                        <div id="box-product">
                        <div id="model-product" style="width:50%;" >
                    <?php
                    
                        $pic_name = substr($door,0,2);
                        if($pic_name == "CS"){
                        $img_door  = '<img src="../pic_door_classic/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door.'</h5>';
                        echo $img_door;
                        $link = "classic.php";
                        }
                        else if ($pic_name == "CT"){
                        $img_door  = '<img src="../pic_door_contemporary/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door.'</h5>';
                        echo $img_door;
                        $link = "contemporary.php";
                        }
                        else if($pic_name == "MD"){
                        $img_door  = '<img src="../pic_door_modern/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door.'</h5>';
                        echo $img_door;
                        $link = "modern.php";
                        }
                        else{
                        $img_door  = '<img src="../pic_door_order/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door_order.'</h5>';
                        echo $img_door;
                        }
                    ?>
                    </div>
                    <div id="detail-product" style="width:50%;">
                    <?php 
                    //Ordinal Number
                    $number = $i+1;
                    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
                    if (($number%100) >= 11 && ($number%100) <= 13)
                       $abbreviation = $number. 'th';
                    else
                       $abbreviation = $number. $ends[$number % 10];
                      
                    ?>
                    <h3><?=$abbreviation?></h3>
                        <div class="detail-form">
                        <label>Size</label>
                        <label>Height : <?=$x?> Cm</label>
                        <label>Width : <?=$y?> Cm</label>
                        <label>Quantity : <?=$quan?> Pcs</label>
                        </div>
                                <div class="detail-form">
                                <label>Accessories</label>
                                <?php
                                                                        
                                if($acsr1 != ""){
                                    echo '<label><input type="checkbox" checked id="acsr" name="Acsr1" value="Door/Windows" disabled readonly><span>Door/Windows</span></label>';
                                }
                                else{
                                    echo '<label><input type="checkbox" disabled id="acsr" name="Acsr1" value="Door/Windows" disabled readonly><span>Door/Windows</span></label>';
                                }
                                                                        
                                if($acsr2 != ""){
                                    echo '<label><input type="checkbox" checked id="acsr" name="Acsr2" value="Frame" disabled readonly><span>Frame</span></label>';
                                }
                                else{
                                    echo '<label><input type="checkbox" disabled id="acsr" name="Acsr2" value="Door/Windows" disabled readonly><span>Frame</span></label>';
                                }
                                                                        
                                if ($acsr3 != ""){
                                    echo '<label><input type="checkbox" checked id="acsr" name="Acsr3" value="Glass" disabled readonly><span>Glass work</span></label>';
                                }
                                else{
                                    echo '<label><input type="checkbox" disabled id="acsr" name="Acsr3" value="Door/Windows" disabled readonly><span>Glass work</span></label>';
                                }
                                
                                ?>
                                </div>
                                                                
                                <div class="option-product" onclick="$('#color').show();$('#style').hide();">
                                    <label>Wood</label>
                                    <label><img style="width:77px; border:3px solid black;" src="../wood_color/<?=$wood_c.".jpg"?>" alt="ไม้"></label>
                                    </div>
                                <div class="option-product" onclick="$('#color').hide();$('#style').show();">
                            <label>Framing</label>
                            <label><img style="width:77px; border:3px solid black;" src="../wood_frame/<?=$frame_c.".jpg"?>" alt="ไม้"></label>
                        </div>
                    </div><!--/*end detail-product*/-->
                    </div><!--/*end box-product*/-->
                    <?php
                      } // End Loop Order
                    ?>
							<div style="margin-top:50px;"><!--/*Form*/-->
								<h3>Customer's information</h3>
									<table cellpadding="5" style="font-weight:bold; text-align:left;">
										<tr>
											<td>Firstname :</td>
											<td><?=$firstname ?></td>
											<td>Lastname :</td>
											<td><?=$lastname ?></td>
										</tr>
										<tr>
											<td style="vertical-align:top;">Delivered Address : </td>
											<td colspan="3"><?=$address ?></td>
										</tr>
										<tr>
											<td>Mobile Phone No :</td>
											<td><?=$mobile ?></td>
											<td>Telephone No :</td>
											<td><?=$telephone ?></td>
										</tr>
										<tr>
											<td>Email :</td>
											<td><?=$email ?></td>
											<td>Line ID :</td>
											<td><?=$line ?></td>
										</tr>
										<tr>
											<td>Facebook Name :</td>
											<td><?=$fbname ?></td>
										</tr>
										<tr>
											<td>Delivery date :</td>
											<td>
												<?=$date_delivery ?>
											</td>
										</tr>
									</table>
									<br>
							<div><!--/*end Form*/-->
                            <?php $array_date = explode("-" , $date_delivery);
							 echo "<div > Your expected delivery date:".$array_date[0]."/".$array_date[1]."/".$array_date[2]."</div>";
							?>
							<br>
							<div >We will contact you back in 24 hrs.</div>
						</div><!--/*end order2*/-->
		        	</div><!--/*end pageDetail*/-->
		        </div><!--/*end blog*/-->
		    </div><!--/*end DATA*/-->
	    </div><!--/*end container*/-->
        <form name="pdf" action="topdf.php" method="POST">
			<input type="hidden" name="door" value="<?=$door?>">
            <input type="hidden" name="firstname" value="<?=$firstname?>">
            <input type="hidden" name="lastname" value="<?=$lastname?>">
            <input type="hidden" name="address" value="<?=$address?>">
            <input type="hidden" name="mobile" value="<?=$mobile?>">
            <input type="hidden" name="telephone" value="<?=$telephone?>">
            <input type="hidden" name="email" value="<?=$email?>">
            <input type="hidden" name="line" value="<?=$line?>">
            <input type="hidden" name="fbname" value="<?=$fbname?>">
            <input type="hidden" name="date" value="<?=$date_delivery?>">
			<input type="hidden" name="x" value="<?=$x?>">
			<input type="hidden" name="y" value="<?=$y?>">
			<input type="hidden" name="quantity" value="<?=$quan?>">
			<input type="hidden" name="Acsr" value="<?=$acsr?>">
			<input type="hidden" name="door_color" value="<?=$wood_c?>">
			<input type="hidden" name="framing_style" value="<?=$frame_c?>">
            <input type="hidden" name="order_no" value="<?=$id?>">
	        <input type="hidden" name="remark" value="<?=$remark?>">
            <label><input type="submit" name="PDF" formtarget="_blank" data-wrapper-class="custom-btn"><span></span></label>
      	</form>
</body>
</html>

<?php
	session_destroy();
?>