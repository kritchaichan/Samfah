<?php
	$serverName = "mysql.hostinger.in.th";
	$userName = "u982279518_samfa";
	$userPassword = "12345678";
	$dbName = "u982279518_samfa";
								
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
		
	if (!$objCon) {
	echo $objCon->connect_error;
	exit();
	}
?>