<?php
    include 'INCLUDES/userdetails.php';
    include 'INCLUDES/header.php';
    //include 'INCLUDES/sidebar.php';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>JSPIMS | Issuance Request </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/material/style.min.css" rel="stylesheet" />
    <link href="../assets/css/material/style-responsive.min.css" rel="stylesheet" />
    <link href="../assets/css/material/theme/red.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN RESPONSIVE TABLE STYLE ================== -->
    <link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!-- ================== END RESPONSIVE TABLE STYLE ================== -->
    <link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body><br/><br/><br/>
    <!-- begin #page-loader -->
    <!-- end #page-loader -->
    <div id="sidebar" class="sidebar" data-disable-slide-animation="true" style="position: fixed">
      <!-- begin sidebar scrollbar -->
      <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
          <li class="nav-profile">
            <a href="javascript:;" data-toggle="nav-profile">
              <div class="cover with-shadow"></div>
              <div class="image">
                <img src="../assets/img/user/user-12.jpg" alt="" />
              </div>
              <div class="info">
                <b class="caret pull-right"></b>
                <?php echo $fname; ?>
                <small><?php echo $role; ?></small>
              </div>
            </a>
          </li>
          <li>
            <ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
          </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
          <li class="nav-header">Navigation</li>
          <li class="has-sub">
            <a href="index.php">
              <i class="fa fa-chart-line"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
                  <b class="caret"></b>
              <i class="fa fa-database"></i>
              <span>Stock Monitoring</span>
            </a>
            <ul class="sub-menu">
              <li><a href="IA_stocks.php">All Stocks</a></li>
              <li><a href="IA_stocks_critical.php">Critical Stocks</a></li>
              <li><a href="IA_out_of_stocks.php">Out of Stock</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
                  <b class="caret"></b>
              <i class="fa fa-shopping-cart"></i>
              <span>Request  Purchase</span>
            </a>
            <ul class="sub-menu">
              <li><a href="IA_addRequest.php">Add New Request</a></li>
              <li><a href="IA_Pending_requestPurchase.php">Pending Requests</a></li>
              <li><a href="IA_Approved_requestPurchase.php">Approved Requests</a></li>
              <li><a href="IA_allRequests.php">All Requests</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
                  <b class="caret"></b>
              <i class="fa fa-download"></i>
              <span>Acquisition</span>
            </a>
            <ul class="sub-menu">
              <li><a href="IA_acquired.php">Acquired</a></li>
              <li><a href="IA_addAcquiredStock.php">Acquire New Stock</a></li>
              <li><a href="IA_addAcquiredStock_fromPO.php">Acquire Purchase Order</a></li>
              <li><a href="IA_addAcquiredStock_fromPO.php">Other Modes of Acquisition</a></li>
            </ul>
          </li>
          <li class="has-sub active">
            <a href="javascript:;">
                  <b class="caret"></b>
              <i class="fa fa-upload"></i>
              <span>Issuance</span>
            </a>
            <ul class="sub-menu">
              <li><a href="IA_Approved_requestIssuance.php">Issued Requests</a></li>
              <li class="active"><a href="IA_issuance_pendingrequests.php">Pending Requests</a></li>
              <li><a href="IA_addAcquiredStock_fromPO.php">All Requests</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="index.php">
              <i class="fa fa-minus"></i>
              <span>Dispatch or Dispose</span>
            </a>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
                  <b class="caret"></b>
                <i class="fa fa-file"></i>
                <span>Reports <span class="label label-theme m-l-5">NEW</span></span> 
            </a>
            <ul class="sub-menu">
              <li><a href="appProgram.php">List of Applicants by Program</a></li>
              <li class="active"><a href="appRoom.php">List of Applicants by Room</a></li>
              <li><a href="appSched.php">List of Applicants by Sched</a></li>
            </ul>
          </li>
          
        </ul>
        <!-- end sidebar nav -->
      </div>
      <!-- end sidebar scrollbar -->
    </div> 
    <!-- begin #page-container -->
    
        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Pending Requests</h1>
            <!-- end page-header -->
            <div class="form-group">
            <a href="IA_addRequest.php" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbspAdd New Request</a>
            </div>
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">ISSUANCE REQUESTS</h4>
                </div>
                <div class="panel-body">
                        <table id="data-table-buttons" class="table table-striped table-bordered">  
                                <thead>
                                </tbody>
                                    <tr>
                                        <th class="text-nowrap">Batch No</th>
                                        <th class="text-nowrap">Date Requested</th>
                                        <th class="text-nowrap">Date Approved</th>
                                        <th class="text-nowrap">Remarks</th>
                                        <th class="text-nowrap"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $req= mysqli_query($connect, "SELECT * FROM t_spare_requisition_summary RS INNER JOIN r_request_status RR ON RR.STATUS_ID = RS.STATUS_REQ WHERE RS.STATUS_REQ = '1' AND RS.REF_REQUEST_TYPE = 2");
                                    while ($row=mysqli_fetch_assoc($req)) {
                                        $bno = $row["BATCH_NO"];
                                        $datereq = $row["DATE_REQUESTED"];
                                        $daterev = $row["DATE_APPROVED"];
                                        $remarks = $row["STATUS_VAL"];
                                
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $bno;?></td>
                                        <td><?php echo $datereq;?></td>
                                        <td><?php echo $daterev;?></td>
                                        <td><?php echo $remarks;?></td>
                                        <td><a href="IA_Requestapproved.php?batch_no=<?php echo $bno; ?>" class="btn btn-sm btn-success">View</a></td>
                                <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                   

            </div>
            <!-- end panel -->
        </div>
        <!-- end #content -->
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <!--[if lt IE 9]>
        <script src="../assets/crossbrowserjs/html5shiv.js"></script>
        <script src="../assets/crossbrowserjs/respond.min.js"></script>
        <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="../assets/js/theme/material.min.js"></script>
    <script src="../assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN RESPONSIVE TABLE JS ================== -->
    <script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/js/demo/table-manage-responsive.demo.min.js"></script>
    <!-- ================== END RESPONSIVE TABLE JS ================== -->
    <script src="../assets/js/sweetalert/sweetalert.min.js"></script>
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/js/demo/table-manage-buttons.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            TableManageResponsive.init();
            TableManageButtons.init();
        });
    </script>
</body>
</html>
