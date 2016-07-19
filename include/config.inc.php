<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "samfa";
								
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
		
	if (!$objCon) {
	echo $objCon->connect_error;
	exit();
	}
?>