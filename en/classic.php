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
					content: 'Choose your style!';
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
				<div id="Style">
					<hr class="style-head" >
					<div class="selectHead" style="margin-left:250px;"><a href="madetocatalogue.html">Classic</a></div>
					<hr class="selectLine">
					<div id="order2">
						<table>
						    <tbody>
	                        		<form id="form1" action="detail-action.php" method="post" name="form1">
								<tr>
	                            <?php
								
								include('../include/config.inc.php');
								mysqli_set_charset($objCon,"utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย

								$strSQL="SELECT Picture_Door_Name FROM picture_door WHERE Picture_Door_Type = 'Classic'";
								
								$objQuery = mysqli_query($objCon,$strSQL);
								
								$total=0;

								while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
								{
									$n_door = $objResult["Picture_Door_Name"];
								
								  $output = '<td>
										<a href="../pic_door_classic/'.$n_door.'.jpg" data-lightbox="image-1" data-title="door">
											<img class="model" src="../pic_door_classic/'.$n_door.'.jpg" alt="door" >
										</a>
										<label><input type="radio" name="door" value="'.$n_door.'"><span>'.$n_door.'</span></label>
									</td>';
									echo $output;
									$total++;
									
									if($total%5==0 ){
										
										echo '</tr>';
										
									}
								}
								?>
		                        </tr>
		                    </tbody>
						</table>
	                    
					</div>
					<hr class="sytle-End">
					<div id="footer">
						<a href="order.html">< Back</a>
	                   <!-- <input type="submit" name="submit"/> -->
	                   <a href="JavaScript:fncSubmit()">Next ></a>
	                    </form>
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
	<script language="javascript"><!--/*ClearText*/-->
		function clearText(thefield){
		if (thefield.defaultValue==thefield.value)
		thefield.value = ""
		} 
		function fncSubmit()
		{
			var door = document.getElementsByName("door");
			var found = 1;
			for (var i = 0; i < door.length; i++) {       
				if (door[i].checked) {
					found = 0;
					document.form1.submit();
					break;
				}
			}
				if(found == 1){
     				alert('Please Choose Door your style.');
					return flase;
   				}
		}
		
		
   		
		
		
		
	</script>

</html>
<?php
mysqli_close($objCon);
?>