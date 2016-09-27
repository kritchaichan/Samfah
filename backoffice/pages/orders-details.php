<?php
session_start();
$_SESSION['frmAction'] = md5('itoffside.com' . rand(1,9999));
if ($_SESSION['checkSign'] != 'itoffside') {
    header('Location: login.php');
}
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

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.0/css/buttons.dataTables.min.css">
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
  	<link rel="stylesheet" type="text/css" href="../vendor/datatables-editor/css/editor.dataTables.min.css">
  	<link rel="stylesheet" type="text/css" href="../vendor/datatables-editor/examples/resources/syntax/shCore.css">
  	<!--<link rel="stylesheet" type="text/css" href="../vendor/datatables-editor/examples/resources/demo.css">-->

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
    td.details-control {
    background: url('../vendor/datatables-editor/examples/resources/details_open.png') no-repeat center center;
    cursor: pointer;
    }
    tr.details td.details-control {
        background: url('../vendor/datatables-editor/examples/resources/details_close.png') no-repeat center center;
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.0/js/dataTables.buttons.min.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="../vendor/datatables-editor/js/dataTables.editor.min.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="../vendor/datatables-editor/examples/resources/syntax/shCore.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="../vendor/datatables-editor/examples/resources/demo.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="../vendor/datatables-editor/examples/resources/editor-demo.js">
  	</script>

	<script type="text/javascript" language="javascript" class="init">
      var orderID = "<?php echo $orderID; ?>";
      $(document).ready(function() {
        function format ( d ) {
        return 'Accessories Framing: '+d.Orders_Details_Accessories_Framing+'<br>'+
            'Accessories GlassWork : '+d.Orders_Details_Accessories_GlassWork+'<br>'+
            'Wood Door : '+d.Orders_Details_Wood_for_Door+'<br>'+
            'Wood Framing : '+d.Orders_Details_Wood_for_Framing+'<br>'+
            'Remark : '+d.Orders_Details_Remark;
        }
          var dt = $('#dataTables-example').DataTable( {
              processing: false,
              serverSide: false,
              ajax: "../lib/dborders-details.php?id="+orderID,
              columns: [
                  {
                      class:          "details-control",
                      orderable:      false,
                      data:           null,
                      defaultContent: ""
                  },
                  { "data": "Orders_Details_ID" },
                  { "data": "Picture_Door_ID" },
                  { "data": "Orders_Details_Height" },
                  { "data": "Orders_Details_Width" },
                  { "data": "Orders_Details_Thickness" },
                  { "data": "Orders_Details_Delivery_Date" }
              ],
              order: [['1', 'asc']]
          } );

          // Array to track the ids of the details displayed rows
          var detailRows = [];

          $('#dataTables-example tbody').on( 'click', 'tr td.details-control', function () {
              var tr = $(this).closest('tr');
              var row = dt.row( tr );
              var idx = $.inArray( tr.attr('id'), detailRows );

              if ( row.child.isShown() ) {
              tr.removeClass( 'details' );
              row.child.hide();

              // Remove from the 'open' array
              detailRows.splice( idx, 1 );
          }
          else {
              tr.addClass( 'details' );
              row.child( format( row.data() ) ).show();

              // Add to the 'open' array
              if ( idx === -1 ) {
                  detailRows.push( tr.attr('id') );
              }
            }
        } );

          // On each draw, loop over the `detailRows` array and show any child rows
          dt.on( 'draw', function () {
              $.each( detailRows, function ( i, id ) {
                  $('#'+id+' td.details-control').trigger( 'click' );
              } );
          } );
      } );
    </script>

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
                          <table id="dataTables-example" class="display" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                    <th></th>
                                    <th>Orders Details NO.</th>
                                    <th>Picture Name</th>
                                    <th>Height</th>
                                    <th>Width</th>
                                    <th>Thickness</th>
                                    <th>Delivery Date</th>
                                  </tr>
                              </thead>
                          </table>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                        <form name="print" method="POST" action="print-order.php">
                        <input type="hidden" name="orderid" value="<?=$orderID?>">
                        <input type="hidden" name="customerid" value="<?=$customerID?>">
                        <input class="btn btn-lg btn-default btn-block" type="button" name="btnSubmit" value="Print Order" onclick="submitForm()" />
                        </form>

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

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
      function submitForm()
      {
      document.print.target = "Print PDF";
      window.open("","Print PDF","width=900,height=900,toolbar=0");
      document.print.submit();
      }
    </script>

</body>

</html>
