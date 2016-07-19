<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Samfa Craftman</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="https://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
		<script type="text/javascript" src="modernizr.custom.79639.js"></script>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../js/lightbox.min.js"></script>
		<link href="../css/lightbox.css" rel="stylesheet" />
        

		<style type="text/css">
			hr.style-head:after{
					content: 'Check Confirm!';
			}
			#menu4{font-weight:bold;}
		</style>

</head>

<body>
	    <div id="container">
	    	<div class="bg" id="item_51"></div>
	    	
	    	<div data-import="header.html">กรุณารอซักครู่...</div>
			
			<div id="DATA">

				<div id="blog" class="order">

		        	<div id="Detail" style="min-height: 710px;">
		        		<hr class="style-head" >
						<hr class="selectLine">
						<div id="order2">
<?php
					include('../include/config.inc.php');
								
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
					
					for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
                    { // Loop Order
                    ?>
                        <div id="order2">
                        <div id="box-product">
                        <div id="model-product" style="width:50%;" >
                    <?php
                        $door = $_SESSION["ImgDoor"][$i];
                        $x =  $_SESSION["Height"][$i];
                        $y =  $_SESSION["Width"][$i];
                        $quan =  $_SESSION["Quantity"][$i];
                        $acsr1 =  $_SESSION["Acsr1"][$i];
                        $acsr2 =  $_SESSION["Acsr2"][$i];
                        $acsr3 =  $_SESSION["Acsr3"][$i];
                        $wood_c = $_SESSION["WoodForDoor"][$i];
                        $frame_c = $_SESSION["WoodForFraming"][$i];
                    
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
		        	</div><!--/*end Detail*/-->
                    <?php
                      } // End Loop Order
                    ?>
							<div style="display:block; position: relative;">
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
										<tr>
											<td>Remark : </td>
											<td colspan="3"><?=$remark ?></td>
										</tr>
									</table>

									<form name="report" action="report.php" method="POST">
										<input type="hidden" name="door" value="<?=$door?>">
	                                    <input type="hidden" name="door_order" value="<?=$door_order?>">
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
										<input type="hidden" name="Acsr1" value="<?=$acsr1?>">
	                                    <input type="hidden" name="Acsr2" value="<?=$acsr2?>">
	                                    <input type="hidden" name="Acsr3" value="<?=$acsr3?>">
										<input type="hidden" name="door_color" value="<?=$wood_c?>">
										<input type="hidden" name="framing_style" value="<?=$frame_c?>">
	                                    <input type="hidden" name="order_no" value="<?=$id?>">
                                        <input type="hidden" name="remark" value="<?=$remark?>">
	                              	</form>
	                        </div>

						</div><!--/*end order2*/-->
		        	<hr class="style-End">
					<div id="footer">
						<a href="javascript:history.back(1);">< Back</a>
	                    <a href="JavaScript:fncSubmit()">Confirm ></a>
		        	</div>
			  	</div><!--/*end blog*/-->
				<div id="footerPan">
					<p>
						<a href="profile.html">COMPANY PROFILE</a> | 
						<a href="woodis.html">WOOD IS?</a> | 
						<a href="gallery.html">GALLERY</a> | 
						<a href="order.html">ORDER US!</a> | 
						<a href="contact.html">CONTACTS US</a>
						<br/>
						<span>Copyright &copy; 2015 Samfah Craftman Co., Ltd, All rights reserved.</span>
					</p>
		        </div><!--/*end footer*/-->

			</div><!--/*end DATA*/-->

		</div><!--/*end container*/-->
</body>
<script><!--/*ClearText*/-->
		function clearText(thefield){
		if (thefield.defaultValue==thefield.value)
		thefield.value = ""
		} 
		
		function fncSubmit()
		{
		document.report.submit();
		}
	</script>
</html>