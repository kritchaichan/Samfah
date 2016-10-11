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
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-editor/js/dataTables.altEditor.free.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>

	<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {

    var columnDefs = [{
          title: "Picture ID",
          id: "Picture_Door_ID",
          data: "Picture_Door_ID",
          type: "number"
        }, {
          title: "Picture Name",
          id: "Picture_Door_Name",
          data: "Picture_Door_Name",
          type: "text"
        }, {
          title: "Picture Type",
          id: "Picture_Door_Type",
          data: "Picture_Door_Type",
          type: "text"
        }, {
          title: "Picture Caption",
          id: "Picture_Door_Caption",
          data: "Picture_Door_Caption",
          type: "readonly"
        },{
          title: "Picture NO.",
          id: "Picture_Door_Sequence_Number",
          data: "Picture_Door_Sequence_Number",
          type: "text"
        }]

          var myTable;

          myTable = $('#dataTables-example').DataTable({
            dom: 'Bfrltip',                   //Element order: Button container(B) is essential.
             ajax: "../lib/dbpicture.php",   //Receiving data from this source.
               columns: columnDefs,            //Columns defined above.
               select: 'single',               //Only single column selection is implemented.
               altEditor: true,                //Enable altEditor.
               responsive: true,               //Enable responsiveness.
               buttons: [                     //All implemented buttons. Do not change name attribute.
                 {
              extend: 'selected', // Bind to Selected row
              text: 'Edit',
              name: 'edit'        // do not change name
            },
            {
              extend: 'selected', // Bind to Selected row
              text: 'Delete',
              name: 'delete'      // do not change name
           }]

          });

        });
// If the user has unsaved changes when reloading/leaving the page, then
// an alert is displayed asking the user to confirm the action
$(window).bind('beforeunload',function(){
   if(!$('#cancelButton').is(':disabled')){
   return "";
    }
});

function objToStringWithID (obj) {
    var result = '';
    for (var p in obj) {
        if (obj.hasOwnProperty(p)) {
            result = obj['Picture_Door_ID'];
        }
    }
    return result;
}

function objToStringWithType (obj) {
    var result = '';
    for (var p in obj) {
        if (obj.hasOwnProperty(p)) {
            result = obj['Picture_Door_Type'];
        }
    }
    return result;
}


function objToString (obj) {
    var str = '';
    for (var p in obj) {
        if (obj.hasOwnProperty(p)) {
            str += p + '::' + obj[p] + '\n';
        }
    }
    return str;
}


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
                    <h1 class="page-header">Pictures Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Order by Customers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- /.table-responsive -->
- saveButton    - onClick, takes all the data from the datatable and sends it to the server
- cancelButton  - onClick, asks the user if the wants to undo unsaved changes and (if yes)
                  reloads the datatable with the data from the server.
- messages      - Displays the response from the server.
-->
  <div>
    <button type='button' class='btn btn-default' id='saveButton' value='Save'>Save</button>
    <button type='button' class='btn btn-default' id='cancelButton' value='Cancel' disabled='true'>Cancel</button>
    <span id='messages'>&nbsp;</span>
  </div>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
