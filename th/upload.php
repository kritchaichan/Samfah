<!DOCTYPE html>

<html>
	<head>
		<title>Samfa Craftman</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="https://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
		<script type="text/javascript" src="modernizr.custom.79639.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' /> 
		<link href="../css/th.css" rel="stylesheet" />
		<style type="text/css">
			hr.style-head:after{content: 'Insert your Product';}
		</style>

</head>

	<body>
	    <div id="container">
	    	<div class="bg" id="item_51"></div>
	    	<div data-import="header.html">กรุณารอซักครู่...</div>
			
			<div id="DATA">
				<div id="blog" class="order">
					<hr class="style-head">
					<div id="order2">
						<?php
							error_reporting(0);
							session_start();
							$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
							$objDB = mysql_select_db("sf");
							$strSQL = "SELECT * FROM members WHERE UserID = '".$_SESSION['UserID']."' ";
							$objQuery = mysql_query($strSQL);
							$objResult = mysql_fetch_array($objQuery);
							
							//Expire the session if user is inactive for 30
							//minutes or more.
							$expireAfter = 30;

							//Check to see if our "last action" session
							//variable has been set.
							if(isset($_SESSION['last_action'])){
							    
							    //Figure out how many seconds have passed
							    //since the user was last active.
							    $secondsInactive = time() - $_SESSION['last_action'];
							    
							    //Convert our minutes into seconds.
							    $expireAfterSeconds = $expireAfter * 60;
							    
							    //Check to see if they have been inactive for too long.
							    if($secondsInactive >= $expireAfterSeconds){
							        //User has been inactive for too long.
							        //Kill their session.
							        session_unset();
							        session_destroy();
							    }
							    
							}

							//Assign the current timestamp as the user's
							//latest activity
							$_SESSION['last_action'] = time();

							if(!$objResult){
							  echo '<script>alert("This page for Admin only!");window.location.replace("index.html");</script>';
							}
							else
							{
								echo'
								<form name="upload" method="post" action="upload.php?Action=Save" style="text-align: left;">
									<table>
										<tbody>
											<tr>
												<td>Product Code <input type="text" name="ProductName" id="ProductName" value=""></td>
											</tr>
											<tr>
												<td><h4 style="text-align: center;">Upload Picture</h4></td>
											</tr>
											<tr>
												<td><label><input type="file" name="fileToUpload" id="fileToUpload"><span></span></label></td>
											</tr>
										</tbody>
									</table>
									<table>
										<tbody>
											<tr>
												<td>
													<h5>IMPORTANT!</h5>
													<h6>- Crop your photos for 150x225 Pixel before upload</h6>
													<h6>- Upload your photos from your computer, tablet or mobile</h6>
													<h6>- Supported Image Formats : JPG, JPEG files are allowed</h6>
													<h6>- Max Size : 5 MB/images</h6>
												</td>
											</tr>
										</tbody>
									</table>
									<table>
										<tbody>
											<tr>
												<td><input type="Submit" name="Insert" value="Insert" class="button"></td>
												<td><input type="Reset" name="Reset" value="Reset" class="button"></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td><input type="Submit" name="Logout" value="Logout" class="button" formaction="upload.php?Action=Logout"></td>
											</tr>
										</tbody>
									</table>
								</form>
								';
								
								if($_GET["Action"] == "Logout")
								{
									session_destroy();
									echo '<script>alert("Logout");window.location.replace("login.php");</script>';
								}
								if($_GET["Action"] == "Save")
								{
									$target_dir = "uploads/";
									$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
									$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
									// Check if image file is a actual image or fake image
									if(isset($_POST["submit"])) {
									    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
									    if($check !== false) {
									        echo "File is an image - " . $check["mime"] . ".";
									    } else {
									        echo "File is not an image.";
									        exit();
									    }
									}
									// Check if file already exists
									if (file_exists($target_file)) {
									    echo "Sorry, file already exists.";
									    exit();
									}
									// Check file size
									if ($_FILES["fileToUpload"]["size"] > 500000) {
									    echo "Sorry, your file is too large.";
									    exit();
									}
									// Allow certain file formats
									if($imageFileType != "jpg" && $imageFileType != "jpeg") {
									    echo "Sorry, only JPG, JPEG files are allowed.";
									    exit();
									}

									// if everything is ok, try to upload file
								    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
								        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
								        $strSQL = "INSERT INTO Product ";
										$strSQL .="(ProductName,Picture) ";
										$strSQL .="VALUES ";
										$strSQL .="('".$_POST['ProductName']."','".$target_file."') ";
										$objQuery = mysql_query($strSQL);
								    } 
								    else 
								    {
								        echo "Sorry, there was an error uploading your file.";
								    }
								}
							}
							mysql_close($objConnect);
						?>
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
</html>