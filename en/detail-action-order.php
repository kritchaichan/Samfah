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
			hr.style-head:after{content: 'Make your Style?';}
		</style>

		<style type="text/css">
		</style>

</head>

<body>
	    <div id="container">
	    	<div class="bg" id="item_51"></div>
	    	<div id="header">
				<div id="HeadMenu">
					<ul>
						<li><a href="index.html">SAMFAH CRAFTMAN</a></li>
						<li><a href="index.html">森 和 興 木 廠</a></li>
					</ul>
				</div>
	    		<div class="showmenu">
					<nav>
						<ul>
							<li style="width:150px;"><a id="menu1" href="profile.html">Company Profile</a></li>		
							<li><a id="menu2" href="woodis.html">Wood is?</a></li>
							<li><a id="menu3" href="gallery.html">Gallery</a></li>
							<li><a id="menu4" href="order.html" style="font-weight:bold;">Order Us!</a></li>
							<li><a id="menu5" href="contact.html">Contact Us</a></li>
						</ul>
					</nav>
				</div><!--/*end showmenu*/-->
	    	</div><!--/*end head*/-->
			
			<div id="DATA">

				<div id="blog" class="order">

		        	<div id="Detail" style="min-height: 710px;">
		        		<hr class="style-head" >
						<hr class="selectLine">
						<div id="order2">
							<div id="box-product">
								<div id="model-product">
									    <?php
										// ไม่แสดง error
											@ini_set('display_errors', '0');
											  include('../include/config.inc.php');
											 //image upload
											$date_name=  date('Ymd-His');
											$date=  date('Y-m-d H:i:s');
											$filename = $_FILES['fileField']['name'] ;
											$array_last = explode("." , $filename);
											$name = $array_last[0];
											$name_c = $array_last[0].$date_name;
											$num = count($array_last)-1;
											$lastname = strtolower($array_last[$num]);
											
											if(!file_exists($_FILES['fileField']['tmp_name']) || !is_uploaded_file($_FILES['fileField']['tmp_name'])) {
									        echo '<script>alert("Can\'t Upload Image Please Upload try again.");window.location.replace("madetoorder.php");</script>';
											}
											// Allow certain file formats
											else if($lastname != "jpg" && $lastname != "jpeg") {
											echo '<script>alert("Sorry, only JPG, JPEG files are allowed.");window.location.replace("madetoorder.php");</script>';
											}
											else if ($_FILES["fileField"]["size"] > 2000000) {
											echo '<script>alert("Sorry, your file is too large.");window.location.replace("madetoorder.php");</script>';
											}
											else {
										
											//end upload image
											$sql="insert into pic_order";
											$sql.="(name_pic,type,date) VALUES ";
											$sql.="('{$name_c}','{$array_last[1]}','{$date}') ";

											$result = mysql_query ($sql);
											
											if($result == false){
									       		echo '<script>alert("Upload Image Unsuccess!");window.location.replace("madetoorder.php");</script>';
											}
											else if ($result == true){
												$newname = $name_c.".".$array_last[1];
												$path = getcwd().DIRECTORY_SEPARATOR;
												$target = $path."../pic_door_order/".$newname;
												move_uploaded_file($_FILES['fileField']['tmp_name'] , $target);
											}
										}
										
										$door_c = substr($door,0,2);
										$link = "madetoorder.php";
										
												$img_door  = '<img src="../pic_door_order/'.$name_c.'.jpg" alt="door" >';
												$img_door .= '<h5>'.$name.'</h5>';
												echo $img_door;
											/*if($numOfdoor !== null && $numOfdoor == 1)
											{
												$img_door  = '<img src="pic_door/'.$door.'.jpg" alt="door" >';
												$img_door .= '<h5>'.$door.'</h5>';
												echo $img_door;
											}
											else if($numOfdoor !== null && $numOfdoor > 1)
											{
												$img_door  = '<img src="images/'.$door[.'.jpg" alt="door" >';
												$img_door .= '<h5>'.$door[0].'</h5>';
												$img_door .= '<img src="images/'.$door.'.jpg" alt="door" >';
												$img_door .= '<h5>'.$door[1].'</h5>';
												echo $img_door;
											}*/
									?>
								</div><!--/*end model-product*/-->
								<form action="form.php" method="post" name="form2">
									<div id="detail-product">
											<h3>1st</h3>
											<div class="detail-form">
										  		<input type="hidden" name="door" value="<?=$name_c?>">
                                                <input type="hidden" name="door_order" value="<?=$name?>">
										  		<label>Size</label>
										  		<label>Width : <input type="number" name="x" min="1" max="300" class="input_css"> Cm</label>
										  		<label>Height : <input type="number" name="y" min="1" max="500" class="input_css"> Cm</label>
										  		<label>Quantity : <input type="number" name="quantity" min="1" max="5" class="input_css"> Pcs</label>
											</div>
											<div class="detail-form">
										  		<label>Accessories</label>
										  		<label><input type="checkbox" id="acsr1" name="Acsr1" value="Door/Windows"><span>Door/Windows</span></label>
										  		<label><input type="checkbox" id="acsr2" name="Acsr2" value="Frame"><span>Frame</span></label>
										  		<label><input type="checkbox" id="acsr3" name="Acsr3" value="Glass"><span>Glass work</span></label>
											</div>
											
											<div class="option-product" onclick="$('#color').show();$('#style').hide();">
												<label>Select Wood</label>
												<label><img style="width:77px; height:77px; border:3px solid black; cursor: pointer;" id="wood_color" src="../images/no_image.png" alt="ไม้"><span id="wood_color_name"></span></label>
											</div>
											<div class="option-product" onclick="$('#color').hide();$('#style').show();">
												<label>Select Framing</label>
												<label><img style="width:77px; height:77px; border:3px solid black; cursor: pointer;" id="frame" src="../images/no_image.png" alt="ไม้"><span id="frame_name"></span></label>
											</div>
									</div><!--/*end detail-product*/-->
									<div class="select-product">
										<div id="color">
											<label><input type="radio" name="door_color" value="makalao" 
												onclick="$('#wood_color').attr('src','../wood_color/makalao.jpg');
												$('#wood_color_name').text('Makalao');$('#color').hide();">
												<span>Makalao</span>
											</label>
											<label><input type="radio" name="door_color" value="teak" 
												onclick="$('#wood_color').attr('src','../wood_color/teak.jpg');
												$('#wood_color_name').text('Teak');$('#color').hide();"><span>Teak</span>
											</label>
											<label><input type="radio" name="door_color" value="laored" 
												onclick="$('#wood_color').attr('src','../wood_color/laored.jpg');
												$('#wood_color_name').text('Laored');$('#color').hide();"><span>Laored</span>
											</label>
										</div>
										<div id="style">
                                        	<label><input type="radio" name="framing_style" value="makalao" 
												onclick="$('#frame').attr('src','../wood_frame/makalao.jpg');
												$('#frame_name').text('Makalao');$('#style').hide();"><span>Makalao</span>
											</label>
                                            <label><input type="radio" name="framing_style" value="teak" 
												onclick="$('#frame').attr('src','../wood_frame/teak.jpg');
												$('#frame_name').text('Teak');$('#style').hide();"><span>Teak</span>
											</label>
                                            <label><input type="radio" name="framing_style" value="laored" 
												onclick="$('#frame').attr('src','../wood_frame/laored.jpg');
												$('#frame_name').text('Laored');$('#style').hide();"><span>Laored</span>
											</label>
										</div>
									</div><!--/*end select-product*/-->
							</div><!--/*end box-product*/-->
								<label>Remark : <input name="remark" value="" style="width:50%;" class="form_css"></label>
								</form><!--/*end form*/-->

						</div><!--/*end order2*/-->
						<div>
							<div style="text-align:left; margin : 0 auto; width:500px;">
								<h5>Note!</h5>
								<h6>- We welcome your special requested type of wood.</h6>
								<h6>- The actual color of wood may have minimal change from the pictures.</h6>
							</div>
						</div>
		        	</div><!--/*end Detail*/-->
		        	<hr class="style-End">
					<div id="footer">
						<a href="javascript:history.back(1);">< Back</a>
	                    <a href="JavaScript:fncSubmit()">Next ></a>
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
  		 if(document.form2.x.value == "" || document.form2.y.value == "" )
   		{
      		 alert('Please fill in all blanks.');
      		 document.form1.x.focus();
			 document.form1.y.focus();
       		 return false;
  		}
		if(document.form2.quantity.value == ""){
    		 document.form1.quantity.focus();
			 return false;
		}
		if(document.form2.door_color.value == "" || document.form2.framing_style.value == ""){
			 document.form1.door_color.focus();
			 document.form1.framing_style.focus();
			
			return false;
			
		}
		if(document.getElementById('acsr1').checked == false && document.getElementById('acsr2').checked == false && document.getElementById('acsr3').checked == false){
			
			alert('Please fill in all blanks.');
			return false;
			
		}
		
		document.form2.submit();
		}

		$('#color').hide();
		$('#style').hide();
	</script>
</html>