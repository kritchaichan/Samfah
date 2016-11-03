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
                            <a href="edit_picture.php"><i class="fa fa-table fa-fw"></i> Edit Picture</a>
                        </li>
                        <li>
                            <a href="orders.php"><i class="fa fa-table fa-fw"></i> Orders</a>
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
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                              <div class="panel-body">
                        <form name="upload" method="POST" action="upload_picture-action.php" style="text-align: left;" enctype="multipart/form-data">
                            <div class="radio-inline">
                                <label>Gallery Type</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="Showroom" checked>SHOWROOM
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="Folios">FOLIOS
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="Process">PROCESS
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="Othercrafts">OTHER CRAFTS
                                    </label>
                                </div>
                            </div>
                            <div class="radio-inline">
                                <label>Order Type</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios5" value="Classic">CLASSIC
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios6" value="Contemporary">CONTEMPORARY
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios7" value="Modern">MODERN
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                                  <label>Code Name</label>
                                                  <input type="text" name="codename" value="" class="form-control">
                                                  <p class="help-block">Example : CPS002,CTG005 etc.</p>
                            </div>
                            <div class="form-group">
                                                  <label>Caption</label>
                                                  <input type="text" name="caption" value="" class="form-control">
                                                  <p class="help-block">Example : Wonderful Door.</p>
                            </div>
                            <div class="form-group">
                                <label>เลือกรูปภาพที่ต้องการ</label>
                            </div>
                            <div class="form-group">
                                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/JPG" onchange="readURL(this);">
                            </div>
                            <div class="form-group">
                                <img id="blah" src="../../images/no_image.png" alt="your image" />
                            </div>
                            <div class="form-group">
                                <input class="btn btn-lg btn-default btn-block" type="Submit" name="Action" value="Save" >
                            </div>
                        </form>
                  </div>
                  <!-- End Form Input Picture -->
              </div>
              <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
          </div>
          <!-- /.col-lg-12 -->

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
