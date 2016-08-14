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
</head>
<body>
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php include_once('ourstory.html');?>
    </div>
</div>
	<script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins.js"></script>
	<script type="text/javascript" src="../assets/js/functions.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script type="text/javascript" src="../assets/js/slick.js"></script>
    <script type="text/javascript" src="../assets/js/slick.min.js"></script>
    <script type="text/javascript" src="../assets/flip/jquery.flip.min.js"></script>
    <script>
    $(function(){
        $('.topcapil-cover').slick({
            /*autoplay: true,*/
            nextArrow: '<div  class="slick-nextfac-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
            prevArrow: '<div  class="slick-prevfac-1"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
        });
    })
    </script>
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
</body>
</html>