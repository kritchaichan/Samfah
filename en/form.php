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

		<style type="text/css">
			hr.style-head:after{
					content: "Customer's information";
			}
			#menu4{font-weight:bold;}

		</style>

	</head>

	<body>
	    <div id="container">
	    	<div class="bg" id="item_51"></div>
	    	<div data-import="header.html">Please wait ...</div>
			
			<div id="DATA">

				<div id="blog" class="order">
					<div id="Style">
						<hr class="style-head" >
						<hr class="selectLine">
						<div id="order2">
							<?php		  
							
							// ไม่แสดง error
							@ini_set('display_errors', '0');
							
							include ("calendar-0.9.1/date_menu.php");
										  $door = $_POST['door'];
										  $door_order = $_POST['door_order'];
										  $x = $_POST['x'];
										  $y = $_POST['y'];
										  $quan = $_POST['quantity'];
										  $acsr1 = $_POST['Acsr1'];
										  $acsr2 = $_POST['Acsr2'];
										  $acsr3 = $_POST['Acsr3'];
										  $wood_color = $_POST['door_color'];
										  $frame = $_POST['framing_style'];
										  
										 /* if($door == "")
										  {
											  echo '<script>alert("ยังไม่เลือกลายประตู กรุณากลับไปเลือกประตูใหม่ !");window.location.replace("order.html");</script>';
										  }*/
							?>

							<div><!--/*Form*/-->
								<br>
								<br>
								<form name="form3" action="confirm.php" method="POST">
									<input type="hidden" name="door" value="<?=$door?>">
                                    <input type="hidden" name="door_order" value="<?=$door_order?>">
									<input type="hidden" name="x" value="<?=$x?>">
									<input type="hidden" name="y" value="<?=$y?>">
									<input type="hidden" name="quantity" value="<?=$quan?>">
									<input type="hidden" name="Acsr1" value="<?=$acsr1?>">
                                    <input type="hidden" name="Acsr2" value="<?=$acsr2?>">
                                    <input type="hidden" name="Acsr3" value="<?=$acsr3?>">
									<input type="hidden" name="door_color" value="<?=$wood_color?>">
									<input type="hidden" name="framing_style" value="<?=$frame?>">
									<table cellpadding="5" style="font-weight:bold; text-align:left;">
										<tr>
											<td>Firstname :</td>
											<td><input type="text" name="firstname" value="" class="form_css"/></td>
											<td>Lastname :</td>
											<td><input type="text" name="lastname" value="" class="form_css"/></td>
										</tr>
										<tr>
											<td style="vertical-align:top;">Delivered Address : </td>
											<td colspan="3"><input name="address" value="" style="width:100%;" class="form_css"></td>
										</tr>
										<tr>
											<td>Mobile Phone No :</td>
											<td><input type="text" name="mobile" value="" class="form_css"/></td>
											<td>Telephone No :</td>
											<td><input type="text" name="telephone" value="" class="form_css"/></td>
										</tr>
										<tr>
											<td>Email :</td>
											<td><input type="text" name="email" value="" class="form_css"/></td>
											<td>Line ID :</td>
											<td><input type="text" name="line" value="" class="form_css"/></td>
										</tr>
										<tr>
											<td>Facebook Name :</td>
											<td><input type="text" name="fbname" value="" class="form_css"/></td>
										</tr>
										<tr>
											<td>Delivery date :</td>
											<td>
												<input id="date" type="text" name="date" value="" onClick="return showCalendar('date', 'y-mm-dd');" class="form_css"/>
											</td>
											<td><img src="../images/icon_date.gif" alt="" border="0" onClick="return showCalendar('date', 'y-mm-dd');"/></td>
										</tr>
										<tr>
											<td style="vertical-align:top;">Remark : </td>
											<td colspan="3"><input name="remark" value="" style="vertical-align:top;" class="form_css"></td>
										</tr>
									</table>
									<br>
								</form>
							</div><!--/*end Form*/-->					
						</div><!--/*end Order2*/-->
						<hr class="style-End">
						<div id="footer">
							<a href="javascript:history.back(1);">< Back</a>
                            <a href="JavaScript:fncSubmit()">Next ></a>
			        	</div>
		        	</div><!--/*end pageStyle*/-->
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
		if(document.form3.firstname.value == "")
			{
				alert('Please fill in firstname.');
				document.form3.firstname.focus();
				return false;
			}	
		if(document.form3.lastname.value == "")
			{
				alert('Please fill in surname.');
				document.form3.lastname.focus();
				return false;
			}	
		if(document.form3.address.value == "")
			{
				alert('Please fill in delivered address.');
				document.form3.address.focus();	
				return false;
			}	
		if(document.form3.mobile.value == "")
			{
				alert('Please fill in mobile phone.');
				document.form3.mobile.focus();
				return false;
			}
		if(document.form3.email.value == "")
			{
				alert('Please fill in email.');
				document.form3.email.focus();
				return false;
			}
		if(document.form3.date.value == "")
			{
				alert('Please fill in delivery date.');
				document.form3.date.focus();
				return false;
			}
			
			document.form3.submit();
			
		}
	</script>

</html>