<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>ORDER US</title>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap  -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="../assets/css/order.css">
  
  <!-- ICON  -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  

  <script type="text/javascript" src="../assets/js/masonry.pkgd.min.js"></script>
    
<style>

.grid1 {

  padding: 0;
  overflow-y: auto;
  display: block;
  width: 100%;
  height: 850px;
  position: relative;

}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */
.grid-item{
  display: inline-block;
  margin: 5px;
}

.grid-item img {
  float: left;
  width: 300px;
  height: 400px;
  margin-bottom: 25px;
  border: solid 20px white;
}
.grid-item img:after {
  content: "UTF+e013";
  color: red  ;
}
.grid-item--width2 img{ 
width: 500px; 
height: 400px;
}
</style>
</head>
<body>
<div id="main-order">

  <div class="slide order" id="first">
    <section id="page-top" class="section-style bg-fh" data-background-image="../images/background/order.jpg">
      <div class="container">
        <h1 class="site-title">
          ORDER US
        </h1><!-- /.site-title -->
      </div><!-- /.container -->  
    </section><!-- /#page-top -->
    <!-- Page Top Section  End -->  
  </div>

  <div class="slide order" id="second">
    
    <section id="page-order" class="section-style" data-background-image="../images/background/welcome.jpg">
      <div class="container">
        <div class="content-image">
          <div class="box-catalog">CLASSIC CATALOGUE</div>
          <div class="grid1">
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" >
            </div>
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            
            <div class="grid-item grid-item--width2"><img src="../images/pic_door_classic/CSP003.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../images/pic_door_classic/CSP003.jpg" alt="door" ></div>
            
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            <div class="grid-item"><img src="../images/pic_door_classic/CP1.jpg" alt="door" ></div>
            
            <div class="grid-item grid-item--width2"><img src="../images/pic_door_classic/CSP003.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../images/pic_door_classic/CSP003.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../images/pic_door_classic/CSP003.jpg" alt="door" ></div>
            <div class="grid-item grid-item--width2"><img src="../images/pic_door_classic/CSP003.jpg" alt="door" ></div>
          </div>   
        </div>
      </div><!-- /.container -->  
    </section><!-- /#page-top -->
    <!-- Page Top Section  End -->  


    

    <section id="order_summary" class="section-style">
        <div class="container text-center">
          <div class="box-order">Our Summary</div>
          <form action="form.php" method="post" name="form2">
            <div id="box-product">
              <div id="model-product">
                <img src="../images/pic_door_classic/CSP002.jpg" alt="door" >
                <h5>CP1</h5>
              </div><!--/*end model-product*/-->
              <div id="detail-product">
                <div class="detail-form">
                    <input type="hidden" name="door" value="<?=$door?>">
                    <label>Size</label>
                    <label>Height : <input type="number" name="x" min="1" max="300" class="input_css"> Cm</label>
                    <label>Width : <input type="number" name="y" min="1" max="500" class="input_css"> Cm</label>
                    <label>Thicknes : <input type="number" name="quantity" min="1" max="5" class="input_css"> Cm</label>
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
                  <label><img style="width:77px; height:77px; border:3px solid black; cursor: pointer;" class="wood_color" src="../images/no_image.png" alt="ไม้"><span class="wood_color_name"></span></label>
                </div>
                <div class="option-product" onclick="$('#color').hide();$('#style').show();">
                  <label>Select Framing</label>
                  <label><img style="width:77px; height:77px; border:3px solid black; cursor: pointer;" class="frame" src="../images/no_image.png" alt="ไม้"><span class="frame_name"></span></label>
                </div>    
              </div><!--/*end detail-product*/-->
              <div class="select-product">
                <div id="color">
                  <label><input type="radio" name="door_color" value="makalao" 
                    onclick="$('.wood_color').attr('src','../images/wood_color/makalao.jpg');
                    $('.wood_color_name').text('Makalao');$('#color').hide();"><span>Makalao</span>
                  </label>
                  <label><input type="radio" name="door_color" value="teak" 
                    onclick="$('.wood_color').attr('src','../images/wood_color/teak.jpg');
                    $('.wood_color_name').text('Teak');$('#color').hide();"><span>Teak</span>
                  </label>
                  <label><input type="radio" name="door_color" value="laored" 
                    onclick="$('.wood_color').attr('src','../images/wood_color/laored.jpg');
                    $('.wood_color_name').text('Laored');$('#color').hide();"><span>Laored</span>
                  </label>
                </div>
                <div id="style">
                  <label><input type="radio" name="framing_style" value="makalao" 
                    onclick="$('.frame').attr('src','../images/wood_frame/makalao.jpg');
                    $('.frame_name').text('Makalao');$('#style').hide();"><span>Makalao</span>
                  </label>
                  <label><input type="radio" name="framing_style" value="teak" 
                    onclick="$('.frame').attr('src','../images/wood_frame/teak.jpg');
                    $('.frame_name').text('Teak');$('#style').hide();"><span>Teak</span>
                  </label>
                  <label><input type="radio" name="framing_style" value="laored" 
                    onclick="$('.frame').attr('src','../images/wood_frame/laored.jpg');
                    $('.frame_name').text('Laored');$('#style').hide();"><span>Laored</span>
                  </label>
                </div>
              </div><!--/*end select-product*/-->
            </div><!--/*end box-product*/-->
                  </form><!--/*end form*/-->
          <dib type="button" class="btn box-form btn-block top30">+</dib>
          <div class="btn btn-block "><h2>Next</h2></div>
        </div><!-- /.container -->
    </section><!-- /#order_summary -->
    <!-- order_summary Section End -->

    <!-- Form Section -->
    <section id="form" class="section-style">
        <div class="container text-center">
          <div class="box-form">Contact Information</div>
          <h4 class="section-description">Customer's information</h4><!-- /.Section-title -->
          <form name="form" action="confirm.php" method="POST" class="form-horizontal" role="form">
            <div class="table-responsive">
              <table class="text-left">
                  <tbody>
                    <tr>
                      <td><label>Firstname :</label></td>
                      <td><input type="text" id="Firstname" class="form-control"></td>
                      <td><label>Surname :</label></td>
                      <td><input type="text" id="Surname" class="form-control"></td>
                    </tr>
                    <tr>
                      <td style="vertical-align:top;"><label>Delivered Address :</label></td>
                    </tr>
                    <tr>
                      <td colspan="4"><input type="text" id="address1" class="form-control"></td>
                    </tr>
                    <tr>
                      <td colspan="4"><input type="text" id="address2" class="form-control"></td>
                    </tr>
                    <tr>
                      <td colspan="4"><input type="text" id="address3" class="form-control"></td>
                    </tr>
                  <tr>
                    <td><label>Mobile phone NO :</label></td>
                    <td><input type="text" name="mobile" value="" class="form-control"/></td>
                    <td><label>Telephone NO :</label></td>
                    <td><input type="text" name="telephone" value="" class="form-control"/></td>
                  </tr>
                  <tr>
                    <td><label>Email@ :</label></td>
                    <td><input type="text" name="email" value="" class="form-control"/></td>
                    <td><label>Line ID :</label></td>
                    <td><input type="text" name="line" value="" class="form-control"/></td>
                  </tr>
                  <tr>
                    <td colspan="1"><label>Facebook Name :</label></td>
                    <td colspan="3"><input type="text" name="fbname" class="form-control"/></td>
                  </tr>
                    
                </tbody>
              </table>
            </div>
            <h5 class="text-center top17" style="vertical-align:top;">your expected delivery date : <input type="text" name="day" size="5">/<input type="text" name="month" size="5">/<input type="text" name="year" size="5"></h5>
          </form>
          
          <h5 class="top30">
            Please confirm your purchase order by clicking "confirm". We will contact back in 24 hrs.
          </h5><!-- /.section-description -->
          
          <h4 class="">
            Thank you for your order.
          </h4><!-- /.section-description --> 

          <dib type="button" class="btn box-form btn-block top30">Confirm</dib>
        </div><!-- /.container -->

    </section><!-- /#contact -->
    <!-- Form Section End -->

  </div>

</div>
</body>

  <script>


  // $('.grid1').masonry({
  //   itemSelector: '.grid-item',
  //   columnWidth: 25
  // });


  //----------------------------------START Slide Div UP-DOWN
  // 	$(function() {
  //   var list = $('.slide.order');
  //   var current = 0;

  //   var main = $('#main-order');

  //   $('#main-order').bind('mousewheel', function(event) {
  //     if (event.originalEvent.wheelDelta >= 0) {
  //       scroll(-1);
  //     } else {
  //       scroll(1);
  //     }
  //   });

  //   /* Functions */
  //   var isScrolling = false;

  //   function scroll(dir) {
  //     if (isScrolling) {
  //       return;
  //     }
  //     isScrolling = true;

  //     if (dir == -1) {
  //       if (current > 0) {
  //         current--;
  //       }
  //     } else {
  //       if (current < list.size() - 1) {
  //         current++;
  //       }
  //     }
  //     var number = 100 * current;
  //     var value = "translateY(-" + number + "vh)";
  //     main.css("transform", value);
  //     for (var i = 0; i < list.size(); i++) {
  //       $('#nav li:nth-child(' + (i + 1) + ')').removeClass('active');
  //     }
  //     $('#nav li:nth-child(' + (current + 1) + ')').addClass('active');

  //     setTimeout(function() {
  //       isScrolling = false;
  //     }, 500);
  //   }
  // });
  //----------------------------------END Slide Div UP-DOWN

  </script>

  <script>
    $('#color').hide();
    $('#style').hide();
  </script>
  <!-- jQuery Library -->
  <script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
  <!-- Modernizr js -->
  <script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
  <!-- Plugins -->
  <script type="text/javascript" src="../assets/js/plugins.js"></script>
  <!-- Custom JavaScript Functions -->
  <script type="text/javascript" src="../assets/js/functions.js"></script>
  <!-- Custom JavaScript Functions -->

</html>