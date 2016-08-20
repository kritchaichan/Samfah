<?php
session_start();

require_once ('../app/config.inc.php');

$doorsQuery = $objCon->query("
    SELECT
    picture_door.Picture_Door_ID,
    picture_door.Picture_Door_Name,
	 picture_door.Picture_Door_Type,
    COUNT(picture_door_like.LIKE_ID) As likes

    FROM picture_door

    LEFT JOIN picture_door_like
    ON picture_door.Picture_Door_ID = picture_door_like.Picture_Door_ID
	
	WHERE Picture_Door_Type = 'Classic'

    GROUP BY picture_door.Picture_Door_Name

");

while($row = $doorsQuery->fetch_object()){
  $doors[] = $row;
}

//echo '<pre>',print_r($articles,true),'</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ORDER US</title>

  <!-- Bootstrap  -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/order.css">

  <!-- ICON  -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
</style>

</head>
<script language="JavaScript">
//----- Ajax with JQuery
$(document).ready(function(){
	$("#btn_add_order").click(function(){

			$.post("order-post.php", { 
			data1: $("#door").val(), 
			data2: $("#x").val(), 
			data3: $("#y").val(), 
			data4: $("#z").val(), 
			data5: $("#quantity").val(),
			data6: $("#acsr1").val(),
			data7: $("#acsr2").val(),
			data8: $("#acsr3").val(),
			data9: $("#door_color").val(),
			data10: $("#framing_style").val()}, 
				function(result){
					$("#detailsorders").html(result);
				}
			);

		});
	});

$(document).ready(function(){
	$("#btn_likes").click(function(){
			var likes = "#likes_"+$("#PicID").val();
			$.post("order-like.php", { 
			data1: $("#PicTYPE").val(), 
			data2: $("#PicID").val()},
				function(result){
					$("#CPS003").html(result);
				}
			);
		});
	});
	   
	</script>	
<body>
<div id="main-order">
  
  <div class="samfah-cover-order-re">
      <div class="samfah-cover-order-abb">
          <div class="samfah-cover-order-table">
              <div class="samfah-cover-order-tc samfah-cover-order-vl">
                  <div class="samfah-heading-in-cover-order">
                      <h1>ORDER</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="slide order" id="second">
    <section id="page-order" data-background-image="../images/background/welcome.jpg">
      <div class="container-order">
          <div class="box-catalog">
            <a href="" class="arrow-btn pull-left"><span class="glyphicon glyphicon-menu-left"></span></a>
            CLASSIC CATALOGUE
            <a href="" class="arrow-btn pull-right"><span class="glyphicon glyphicon-menu-right"></span></a>
          </div>
          <div class="grid1"><!-- gird1-->
            <?php foreach ($doors as $door): ?>
            <div class="grid-item"><!-- gird-item -->
              <div class="header-gallery"><!-- header-gallery -->
              <?php if($door->Picture_Door_Type == "Classic"){$path_door  = '../images/pic_door_classic/'.$door->Picture_Door_Name.'.jpg';
            }?>
                <img src="<?=$path_door?>" alt="door" >
              </div><!-- /End header-gallery -->
              <div class="footer-gallery"><!-- /footer-gallery -->
                <a href="order-like.php?type=picture_door&id=<?php echo $door->Picture_Door_ID; ?>" id=""><?php echo $door->likes; ?><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
                <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
              </div><!-- /End footer-gallery -->
            </div><!-- /End gird-item -->
            <?php endforeach; ?>

          </div>   
        </div>
      </div><!-- /.container -->  
    </section><!-- /#page-top -->
    <!-- Page Top Section  End -->  


    

    <section id="order_summary">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12">
              <div class="box-order">Our Summary</div>
            </div>
            <div class="col-md-12">
              <div class="col-md-3">
                <img src="../images/pic_door_classic/CSP002.jpg" alt="door" >
                <h5>CP1</h5>
              </div>
              <div class="col-md-5 text-left ">
                <div class="col-md-7">
                  <input type="hidden" name="door" id="door" value="CSP006">
                  <label>Size</label>
                  <label>X : <input type="number" name="x" id="x" min="1" max="300" class="input_css"> Cm</label>
                  <label>Y : <input type="number" name="y" id="y" min="1" max="500" class="input_css"> Cm</label>
                  <label>Thickness : <input type="number" name="z" id="z" min="1" max="500" class="input_css"> Inch</label>
                  <label>Quantity : <input type="number" name="quantity" id="quantity" min="1" max="100" class="input_css"> Pcs</label>
                </div>
                <div class="col-md-5">
                  <label>Accessories</label>
                  <label><input type="checkbox" id="acsr1" name="Acsr1" value="Door/Windows"><span>Door/Windows</span></label>
                  <label><input type="checkbox" id="acsr2" name="Acsr2" value="Frame"><span>Frame</span></label>
                  <label><input type="checkbox" id="acsr3" name="Acsr3" value="Glass"><span>Glass work</span></label>
                </div>
              <div class="col-md-12">
                <div class="option-product" onclick="$('#color').show();$('#style').hide();"><!--/option-product/-->
                  <label>Select Wood</label>
                  <label><img style="width:77px; height:77px; border:3px solid black; cursor: pointer;" class="wood_color" id="wood_color" src="../images/no_image.png" alt="ไม้"><span class="wood_color_name"></span></label>
                </div><!--/end option-product/-->
                <div class="option-product" onclick="$('#color').hide();$('#style').show();"><!--/option-product/-->
                  <label>Select Framing</label>
                  <label><img style="width:77px; height:77px; border:3px solid black; cursor: pointer;" class="frame" id="frame" src="../images/no_image.png" alt="ไม้"><span class="frame_name"></span></label>
                </div><!--/end option-product/-->
              </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12">
                  <div id="color">
                    <label><input type="radio" name="door_color" id="door_color" value="makalao" 
                      onclick="$('.wood_color').attr('src','../images/wood_color/makalao.jpg');
                      $('.wood_color_name').text('Makalao');$('#color').hide();"><span>Makalao</span>
                    </label>
                    <label><input type="radio" name="door_color" id="door_color" value="teak" 
                      onclick="$('.wood_color').attr('src','../images/wood_color/teak.jpg');
                      $('.wood_color_name').text('Teak');$('#color').hide();"><span>Teak</span>
                    </label>
                    <label><input type="radio" name="door_color" id="door_color" value="laored" 
                      onclick="$('.wood_color').attr('src','../images/wood_color/laored.jpg');
                      $('.wood_color_name').text('Laored');$('#color').hide();"><span>Laored</span>
                    </label>
                  </div>
                  <div id="style">
                    <label><input type="radio" name="framing_style" id="framing_style" value="makalao" 
                      onclick="$('.frame').attr('src','../images/wood_frame/makalao.jpg');
                      $('.frame_name').text('Makalao');$('#style').hide();"><span>Makalao</span>
                    </label>
                    <label><input type="radio" name="framing_style" id="framing_style" value="teak" 
                      onclick="$('.frame').attr('src','../images/wood_frame/teak.jpg');
                      $('.frame_name').text('Teak');$('#style').hide();"><span>Teak</span>
                    </label>
                    <label><input type="radio" name="framing_style" id="framing_style" value="laored" 
                      onclick="$('.frame').attr('src','../images/wood_frame/laored.jpg');
                      $('.frame_name').text('Laored');$('#style').hide();"><span>Laored</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container -->
    </section><!-- /#order_summary -->
    <!-- order_summary Section End -->

    <!-- Form Section -->
    <section id="form">
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



<!-- contact show large / desktop -->
<div class="background-contact">#
    <div class="border-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="samfah-heading-contact">
                        <h1>CONTACT US</h1>
                    </div>
                    <div class="address-1 ff">
                        <p>ชั้น 2 เบลล์ คอนโด (อยู่ด้านหลังเซนทรัลพระราม 9) 33/4 ถนนพระราม 9 เขตห้วยขวาง กรุงเทพฯ</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.311418118858!2d100.56714951529739!3d13.760084200807574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e8bebe79b15%3A0x7e096fb783c7a968!2z4LiE4Lit4LiZ4LmC4LiU4LmA4Lia4LilIOC4nuC4o-C4sOC4o-C4suC4oSA5IEJlbGxlIEdyYW5kIFJhbWE5!5e0!3m2!1sth!2sth!4v1471186176291" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="address-2 ff">
                        <p>เมืองพัทยา อำเภอ บางละมุง ชลบุรี 20150</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.236875594829!2d100.88516641529318!3d12.956688818709814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102bde329889eed%3A0xb3a2b2a2efad1071!2z4LmA4LiU4Lit4Liw4Lie4Liy4Lij4Liy4LmE4LiU4Liq4LmMIOC4o-C4teC4quC4reC4o-C5jOC4lw!5e0!3m2!1sth!2sth!4v1471186267696" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="botton-chang-map">
                        <p id="botton-chang-map"><i class="fa fa-refresh" aria-hidden="true"></i>    Chang branch Click</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="samfah-socile">
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

</body>

<script>
  $('.grid1').masonry({
  itemSelector: '.grid-item',
   columnWidth: 25
  });
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
<script type="text/javascript" src="../assets/js/masonry.pkgd.min.js"></script>
<!-- Masonry js -->
<script>
  $('#color').hide();
  $('#style').hide();
</script>

</html>