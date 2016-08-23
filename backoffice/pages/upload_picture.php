<?php
session_start();
$_SESSION['frmAction'] = md5('itoffside.com' . rand(1,9999));
if ($_SESSION['checkSign'] != 'itoffside') {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Samfah Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="upload_picture.php"><i class="fa fa-file-picture-o fa-fw"></i> Upload Picture</a>
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Upload Picture</h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="row">
                      <div class="radio-inline" class="col-lg-6">
                          <label>Gallery Type</label>
                          <div class="radio">
                              <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                              </label>
                          </div>
                          <div class="radio">
                              <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                              </label>
                          </div>
                          <div class="radio">
                              <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                              </label>
                          </div>
                      </div>
                      <div class="radio-inline" class="col-lg-6">
                          <label>Order Type</label>
                          <div class="radio">
                              <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Radio 1
                              </label>
                          </div>
                          <div class="radio">
                              <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                              </label>
                          </div>
                          <div class="radio">
                              <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                              </label>
                          </div>
                      </div>
                  </div>
                  <!-- End Radio Button Group -->

                  <div class="form-group">
                    <form name="upload" method="post" action="upload_picture.php?Action=Save" style="text-align: left;" enctype="multipart/form-data">
                      <label>เลือกรูปภาพที่ต้องการ</label>
                      <input type="file" name="fileField" id="fileField" accept="image/JPG" onchange="readURL(this);">
                      <label><img id="blah" src="../../images/no_image.png" alt="your image" /></label>
                      <label><input class="btn btn-lg btn-default btn-block" type="Submit" name="Insert" value="Insert" class="button"></label>
                    </form>
                  </div>
                  <!-- End Form Input Picture -->
                  <?php
                  @ini_set('display_errors', '0');
								if($_GET["Action"] == "Save")
								{
										//@ini_set('display_errors', '0');
										 //image upload
										$filename = $_FILES['fileToUpload']['name'] ;
										$array_last = explode("." , $filename);
										$name = $array_last[0];
										$num = count($array_last)-1;
										$lastname = strtolower($array_last[$num]);

										if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
								        echo '<script>alert("Can\'t Upload Image Please Upload try again.");</script>';
										}
										// Allow certain file formats
										else if($lastname != "jpg" && $lastname != "jpeg") {
										echo '<script>alert("Sorry, only JPG, JPEG files are allowed.");</script>';
										}
										else if ($_FILES["fileToUpload"]["size"] > 200000) {
										echo '<script>alert("Sorry, your file is too large.");</script>';
										}
										else
											{

												$door_c = substr($name,0,2);

													if($door_c == "CS"){
														$location = "pic_door_classic";
														$type = "Classic";
														$db = "classic";

													}
													else if ($door_c == "CT"){
														$location = "pic_door_contemporary";
														$type = "Contemporary";
														$db = "contemporary";
													}
													else if($door_c == "MD"){
														$location = "pic_door_modern";
														$type = "Modern";
														$db = "modern";
													}

												//end upload image
												$date=  date('Y-m-d H:i:s');
												$sql="insert into ".$db;
												$sql.=" (name,type,date) VALUES ";
												$sql.=" ('{$name}','{$type}','{$date}') ";

												$result = mysql_query ($sql);

												if($result == false){
										       		echo '<script>alert("Upload Image Unsuccess!");</script>';
												}
												else if ($result == true){

												}
												    $newname = $name . "." . $array_last[1];
													$path = getcwd().DIRECTORY_SEPARATOR;
													$newpath = substr($path, 0,29);
													$target = $newpath."/".$location."/".$newname;
													move_uploaded_file($_FILES['fileToUpload']['tmp_name'] , $target);
													echo '<script>alert("Upload Image Success!");</script>';
											}
								}
						?>


                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--/*Show Image*/-->
    <script>

		$('#blah').hide();

		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
					$('#blah')
                        .attr('src', e.target.result)
                        .css({
                        	'max-width':'500px',
                        	'max-height':'500px',
                        	'text-align':'center'
                        })
                        .show();

                    $('#fileField+span').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
