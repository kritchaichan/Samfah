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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
  <?php
  $orderID = $_GET["orderid"];
  $customerID = $_GET["customerid"];

  require_once('../../app/config.inc.php');
  $strsql  = "SELECT * ";
  $strsql .= "FROM ";
  $strsql .= "orders,customers,orders_details ";
  $strsql .= "WHERE ";
  $strsql .= "orders.Customer_ID = customers.Customer_ID AND "; // เลือก ตารางที่เราเก็บข้อมูล
  $strsql .= "orders.Order_ID = orders_details.Order_ID AND "; // เลือก ตารางที่เราเก็บข้อมูล
  $strsql .= "orders.Order_ID = 1"; // เลือก ตารางที่เราเก็บข้อมูล
  $result = mysqli_query($objCon,$strsql);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($objCon));
    exit();
  }
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $firstname = $row['Customer_FirstName'];
      $lastname = $row['Customer_LastName'];
      $address = $row['Customer_Address'];
      $phone = $row['Customer_Phone'];
      $mobile = $row['Customer_Mobile'];
      $email = $row['Customer_Email'];
      $lineid = $row['Customer_LineID'];
      $fbname = $row['Customer_FBName'];
  }

  ?>

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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Order No.<?=$orderID?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Information
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table cellpadding="5" style="font-weight:bold; text-align:left;">
  										<tr>
  											<td>Firstname : </td>
  											<td><?=$firstname ?></td>
  											<td>Lastname : </td>
  											<td><?=$lastname ?></td>
  										</tr>
  										<tr>
  											<td style="vertical-align:top;">Delivered Address : </td>
  											<td colspan="3"><?=$address ?></td>
  										</tr>
  										<tr>
                        <td>Telephone No :</td>
                        <td><?=$phone ?></td>
  											<td>Mobile Phone No :</td>
  											<td><?=$mobile ?></td>
  										</tr>
  										<tr>
  											<td>Email :</td>
  											<td><?=$email ?></td>
  											<td>Line ID :</td>
  											<td><?=$lineid ?></td>
  										</tr>
  										<tr>
  											<td>Facebook Name :</td>
  											<td><?=$fbname ?></td>
  										</tr>
  									</table>


                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-heading">
                            Order Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script type="text/javascript" charset="utf-8">
    </script>

</body>

</html>
