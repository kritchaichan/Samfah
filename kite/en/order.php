<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>ORDER US</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/order.css">
	<script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="../assets/js/masonry.pkgd.min.js"></script>
    
<style>
.grid {
  margin-left: 8%;
  margin-right: 8%;
  padding: 0;
  overflow-y: auto;
  display: block;
}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */

.grid-item img {
  float: left;
  width: 200px;
  height: 300px;
  margin-bottom: 25px;
  border: 2px solid hsla(0, 0%, 0%, 0.5);
}
.grid-item--width2 img{ 
width: 400px; 
height: 300px;
}
</style>
</head>
<body>
<div id="main-order">

  <div class="slide order" id="first">
    <div class="content">
      <h1>ORDER US</h1>
    </div>
  </div>

  <div class="slide order" id="second">
    <div class="content-image">
    
      <div class="Tab">
      <h2>CLASSIC CATALOGUE</h2>
      </div>
      
      
      <div class="grid">
      		<div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" > </div>
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            
            <div class="grid-item grid-item--width2"><img src="../../pic_door_classic/CST001.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../../pic_door_classic/CST001.jpg" alt="door" ></div>
            
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../../pic_door_classic/CSP002.jpg" alt="door" ></div>
            
            <div class="grid-item grid-item--width2"><img src="../../pic_door_classic/CST001.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../../pic_door_classic/CST001.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../../pic_door_classic/CST001.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../../pic_door_classic/CST001.jpg" alt="door" ></div>
      </div>
      
    </div>
  </div>

</div>

</body>
<script>

$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 25
});


//----------------------------------START Slide Div UP-DOWN
	$(function() {
  var list = $('.slide.order');
  var current = 0;

  var main = $('#main-order');

  $('#main-order').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
      scroll(-1);
    } else {
      scroll(1);
    }
  });

  /* Functions */
  var isScrolling = false;

  function scroll(dir) {
    if (isScrolling) {
      return;
    }
    isScrolling = true;

    if (dir == -1) {
      if (current > 0) {
        current--;
      }
    } else {
      if (current < list.size() - 1) {
        current++;
      }
    }
    var number = 100 * current;
    var value = "translateY(-" + number + "vh)";
    main.css("transform", value);
    for (var i = 0; i < list.size(); i++) {
      $('#nav li:nth-child(' + (i + 1) + ')').removeClass('active');
    }
    $('#nav li:nth-child(' + (current + 1) + ')').addClass('active');

    setTimeout(function() {
      isScrolling = false;
    }, 500);
  }
});
//----------------------------------END Slide Div UP-DOWN

</script>

</html>