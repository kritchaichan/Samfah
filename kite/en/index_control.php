<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Samfa</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/ourstory.css" />
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/slick.css" rel="stylesheet">
    <link href="../assets/css/full-slider.css" rel="stylesheet">
    <link href="../assets/animate/animate.css" />
</head>
<body>
    <!-- Full Page Image Background Carousel Header -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <div class="bg-dot">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        </div>
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
                <?php require_once("order.html"); ?>
                </div>
            </div>
            
        </div>
        
    </div>
    <script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins.js"></script>
	<script type="text/javascript" src="../assets/js/functions.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script type="text/javascript" src="../assets/flip/jquery.flip.min.js"></script>
    <script type="text/javascript" src="../assets/animate/viewportchecker.js"></script>
    <script>
        $(function(){
        $("#card").flip({
            trigger: 'click'
            });
        $('#flip').click(function(){
            $("#card").flip('toggle');
           });
        $('#flip-back').click(function(){
            $("#card").flip('toggle');
           });
        });
    </script>
    <script>
        $( "#botton-chang-map" ).click(function() {
        $( ".ff" ).slideToggle("slow");
        });
    </script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.topcapil-image-boxset-animate').addClass("hidden-animate").viewportChecker({
            classToAdd: 'visible-animate animated slideInLeft',
            offset: 900
       });
    jQuery('.topcapil-document-animate').addClass("hidden-animate").viewportChecker({
            classToAdd: 'visible-animate animated fadeInUp',
            offset: 400
       });
    jQuery('.topcapil-document-animate').addClass("hidden-animate").viewportChecker({
            classToAdd: 'visible-animate animated fadeInUp',
            offset: 400
       });
    });
    </script>
</body>
</html>