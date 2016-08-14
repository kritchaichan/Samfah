<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Samfa</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Full-Slider CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/full-slider.css">
    
    <!-- Jquery Core script -->
	<script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>
    
    <link type="text/css" href="../assets/css/style.css" />
    
    
</head>
<body>
    <!-- Full Page Image Background Carousel Header -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set Slide Ourstory -->
                <div class="fill">
            	<?php require_once("ourstory.html"); ?>
            	</div>
            </div>
            <div class="item">
                <!-- Set Slide Gallery -->
                <div class="fill">
                <?php require_once("gallery.html"); ?>
                </div>
            </div>
            <div class="item">
                <!-- Set Slide Order Us -->
                <div class="fill">
                <?php require_once("order.php"); ?>
                </div>
            </div>
        </div>
        
    </div>
</body>

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
    
</html>