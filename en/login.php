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
		<style type="text/css">
			hr.style-head:after{content: 'Login for Admin';}
			#menu4{font-weight:bold;}
		</style>

</head>

	<body>
	    <div id="container">
	    	<div class="bg" id="item_51"></div>
	    	<div data-import="header.html">กรุณารอซักครู่...</div>
			
			<div id="DATA">
				<div id="blog" class="order">
					<hr class="style-head">
					<div id="order2" >
						<?php
							error_reporting(0);
							session_start();
							$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
							$objDB = mysql_select_db("sf");
							$strSQL = "SELECT * FROM members WHERE Username = '".mysql_real_escape_string($_POST['Username'])."' 
							and Password = '".mysql_real_escape_string($_POST['Password'])."'";
							$objQuery = mysql_query($strSQL);
							$objResult = mysql_fetch_array($objQuery);

							if($_SESSION['UserID'] == "")
							{
								echo'
								<form name="login" method="post" action="login.php?Action=Login">
								  <table>
								    <tbody>
										<tr>
											<td>Username</td>
											<td><input name="Username" type="text" id="Username" size="15"></td>
										</tr>
										<tr>
											<td>Password</td> 
											<td><input name="Password" type="password" id="Password" size="15"></td>
										</tr>
								    </tbody>
								  </table>

								  <br>
						        
						            <input type="Submit" name="Login" value="Login" class="button">
						            <input type="Reset" name="Reset" value="Reset" class="button">   
						        
								</form>	
								';
							}
							else
							{
								echo '<script>window.location.replace("upload.php");</script>';
							}
							
							if($_GET["Action"] == "Login")
					        {

								if(!$objResult)
								{
										echo '<script>alert("Username and Password Incorrect!");</script>';
										
								}
								else
								{
										$_SESSION["UserID"] = $objResult["UserID"];
										session_write_close();
										echo '<script>alert("Welcome");window.location.replace("upload.php");</script>';
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