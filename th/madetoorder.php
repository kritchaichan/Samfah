<!DOCTYPE html>

<html>
	<head>
		<title>Samfa Craftman</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="https://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
		<script type="text/javascript" src="modernizr.custom.79639.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' /> 
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../js/lightbox.min.js"></script>
		<link href="../css/lightbox.css" rel="stylesheet" />
        <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
		<link href="../css/th.css" rel="stylesheet" />
		<style type="text/css">
		hr.style-head:after{
				content: 'Order your style!';
			}
			#menu4{font-weight:bold;}
		</style>

</head>

	<body>
	    <div id="container">
	    	<div class="bg" id="item_51"></div>
	    	<div data-import="header.html">กรุณารอซักครู่...</div>
			
			<div id="DATA">

				<div id="blog" class="order">
					<div id="Style">
						<hr class="style-head" >
						<hr class="selectLine">
						<div id="order2">
							<form name="upload" method="post" action="detail-action-order.php" style="text-align: left;" enctype="multipart/form-data">
								<table>
									<tbody>
										<tr>
											<td><h4 style="text-align: center;">ใส่รูปภาพ</h4></td>
										</tr>
										<tr>
											<td><label><img id="blah" src="#" alt="your image" /><input type="file" name="fileField" id="fileField" accept="image/JPG" onchange="readURL(this);"><span></span><h4 style="text-align: center;">Click for upload.</h4></label></td>
										</tr>
									</tbody>
								</table>
								<table>
									<tbody>
										<tr>
											<td>
												<h4>สำคัญ!</h4>
												<h5>- ใส่รูปแบบประตูที่ต้องการ</h5>
												<h5>- สามารถอัพโหลดได้จาก คอมพิวเตอร์ มือถือ และ แท็ปเล็ต</h5>
												<h5>- สนับสนุนไฟล์สกุล JPG, JPEG เท่านั้น</h5>
												<h5>- ขนาดสูงสุดไม่เกิน : 2 MB/รูป</h5>
                                                <h5>- ชื่อไฟล์ต้องไม่มีจุด (ยกเว้นสกุลภาพ)</h5>
											</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div><!--/*end order2*/-->
						<hr class="style-End">
						<div id="footer">
							<a href="order.html">< ย้อนกลับ</a>
							<a href="JavaScript:upload.submit();">ต่อไป ></a>
			        	</div>
		        	</div><!--/*end pageStyle*/-->

				<div id="footerPan">
					<p>
						<a href="profile.html">COMPANY PROFILE</a> | 
						<a href="woodis.html">WOOD IS?</a> | 
						<a href="gallery.html">GALLERY</a> | 
						<a href="order.html">ORDER US!</a> | 
						<a href="contact.html">CONTACTS US</a>
						<br/>
						<span>Copyright &copy; 2015 Samfah Craftman Co., Ltd, All rights reserved.</span>
					</p>
		        </div><!--/*end footer*/-->

			</div><!--/*end DATA*/-->
		
		</div><!--/*end container*/-->


</body>
	<script><!--/*ClearText*/-->
		function clearText(thefield){
		if (thefield.defaultValue==thefield.value)
		thefield.value = ""
		} 
		
		$('#Detail').hide();
		$('#blah').hide();

		$('a[href="#Detail"]').click(function(){
		  $('#Detail').show();
		  $('#Style').hide();
		});

		$('a[href="#Style"]').click(function(){
		  $('#Detail').hide();
		  $('#Style').show();
		});
		
		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
					$('#blah')
                        .attr('src', e.target.result)
                        .css({
                        	'max-width':'300px',
                        	'max-height':'300px',
                        	'text-align':'center'
                        })
                        .show();

                    $('#fileField+span').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>

</html>