<?php
// session_start();

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
  <title>Gallery</title>

  <!-- Bootstrap  -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/order.css">
  <!-- Lightbox CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/css/lightbox.min.css">
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

	//Ajax Btn Likes
	var HttPRequest = false;
	   function doCallAjax(PicID) {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
			var url = "order-like.php?type=picture_door&id="+PicID;
			HttPRequest.open('GET',url,true);
			HttPRequest.send(null);
			HttPRequest.onreadystatechange = function()
			{
				 if(HttPRequest.readyState == 3)  // Loading Request
				  {
				   document.getElementById("likes"+PicID).innerHTML = "Now is Loading...";
				  }
				 if(HttPRequest.readyState == 4) // Return Request
				  {
				   document.getElementById("likes"+PicID).innerHTML = HttPRequest.responseText;
				  }
			}
	   }
     
  </script> 
<body>
<div id="main-order">
  <div class="slide order" id="second">
    <section id="page-order" data-background-image="../images/background/welcome.jpg">
      <div class="container-order">
          <div class="box-catalog">
            <a href="" class="arrow-btn pull-left"><span class="glyphicon glyphicon-menu-left"></span></a>
            OTHER CRAFTS
            <a href="" class="arrow-btn pull-right"><span class="glyphicon glyphicon-menu-right"></span></a>
          </div>
          <div class="grid1"><!-- gird1-->
            <?php foreach ($doors as $door): ?>	
            <div class="grid-item"><!-- gird-item -->
              <div class="header-gallery"><!-- header-gallery -->
              <?php if($door->Picture_Door_Type == "Classic"){$path_door  = '../images/pic_door_classic/'.$door->Picture_Door_Name.'.jpg';
            }?>
                <a href="<?=$path_door?>" data-lightbox="image-1" data-title="<?php echo $door->Picture_Door_Name; ?>"><img src="<?=$path_door?>" alt="door" ></a>
              </div><!-- /End header-gallery -->
              <div class="footer-gallery"><!-- /footer-gallery -->
                <a href="#page-order" id="" onClick="JavaScript:doCallAjax(<?php echo $door->Picture_Door_ID; ?>);"><span id="likes<?php echo $door->Picture_Door_ID; ?>"><?php echo $door->likes; ?></span><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
                <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
              </div><!-- /End footer-gallery -->
            </div><!-- /End gird-item -->
            <?php endforeach; ?>

          </div>   
        </div>
      </div><!-- /.container -->  
    </section><!-- /#page-top -->
    <!-- Page Top Section  End -->  
  </div>
</div>


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
<script src="../assets/js/lightbox.min.js"></script>
<!-- Lightbox js -->

</html>