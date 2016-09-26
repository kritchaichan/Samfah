<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Samfa</title>
    
    <!-- Bootstrap  -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS  -->
	<link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/ourstory.css" />
    <link href="../assets/css/slick.css" rel="stylesheet">
    <link href="../assets/css/full-slider.css" rel="stylesheet">
    <!-- ICON  -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="loader">
        <div class="loader"></div>
    </div>
</div>
<!-- Preloader End-->
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
                <?php require_once("coming.php"); ?>
                </div>
            </div>
            
        </div>
        
    </div>
    <!-- jQuery Library -->
    <script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
    <!-- Modernizr js -->
    <script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
    <!-- Plugins -->
    <script type="text/javascript" src="../assets/js/plugins.js"></script>
    <!-- Custom JavaScript Functions -->
    <script type="text/javascript" src="../assets/js/functions.js"></script>
    <script type="text/javascript" src="../assets/js/masonry.pkgd.min.js"></script>
    <!-- Masonry js -->
    <script type="text/javascript" src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Ajax js -->
    <script type="text/javascript" src="../assets/flip/jquery.flip.min.js"></script>
    <!-- Flip js -->

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
    <!-- chang map our story -->
    <script>
        $( "#botton-chang-map" ).click(function() {
        $( ".ff" ).slideToggle("slow");
        });
    </script>
    <script>
        $( "#botton-chang-map-2" ).click(function() {
        $( ".ff" ).slideToggle("slow");
        });
    </script>
    <!-- end chang map our story -->
    <!-- chang map gallery -->
    <script>
        $( "#botton-chang-map-gallery" ).click(function() {
        $( ".ff-gallery" ).slideToggle("slow");
        });
    </script>
    <script>
        $( "#botton-chang-map-2-gallery" ).click(function() {
        $( ".ff-gallery" ).slideToggle("slow");
        });
    </script>
    <!-- end chang map gallery -->
    <!-- chang map order -->
    <script>
        $( "#botton-chang-map-order" ).click(function() {
        $( ".ff-order" ).slideToggle("slow");
        });
    </script>
    <script>
        $( "#botton-chang-map-2-order" ).click(function() {
        $( ".ff-order" ).slideToggle("slow");
        });
    </script>
    <!-- end chang map order -->
</body>
</html>