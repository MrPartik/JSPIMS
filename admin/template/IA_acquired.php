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
	<title>JSPIMS | Acquisition</title>
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
	
	<!-- begin #page-container -->
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
                        <li class="has-sub active">
                            <a href="javascript:;">
                                <b class="caret"></b>
                                <i class="fa fa-download"></i>
                                <span>Acquisition</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active"><a href="IA_acquired.php">Acquired</a></li>
                                <li><a href="IA_addAcquiredStock.php">Acquire New Stock</a></li>
                                <li><a href="IA_addAcquiredStock_fromPO.php">Acquire Purchase Order</a></li>
                                <li><a href="IA_addAcquiredStock_fromPO.php">Other Modes of Acquisition</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret"></b>
                                <i class="fa fa-upload"></i>
                                <span>Issuance</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="IA_acquired.php">Issued Requests</a></li>
                                <li><a href="IA_issuance_pendingrequests.php">Pending Requests</a></li>
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
			<h1 class="page-header">Acquired Stocks</h1>
			<!-- end page-header -->
            <div class="form-group">
			<a href="IA_addAcquiredStock.php" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbspAdd New Acquisition</a>
            </div>
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Issued Requests</h4>
				</div>
				<div class="panel-body">
						<table id="data-table-buttons" class="table table-striped table-bordered">  
                                <thead>
                                    <tr>
                                    	<th style="display: none;" hidden></th>
                                        <th class="text-nowrap">Acquisition No.</th>
                                        <th class="text-nowrap">Date Purchased</th>
                                        <th class="text-nowrap">Accept Status</th>
                                        <th class="text-nowrap">Date Acquired</th>
                                        <th class="text-nowrap">Method of Acquisition</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                    $acq= mysqli_query($connect, "SELECT * FROM t_spare_acquisition_from_purchased AS sp 
                                                                    INNER JOIN t_spare_requisition_purchased as ut on sp.REF_PO_ID = ut.PURCHASE_ID
                                                                    INNER JOIN r_accept_status as at ON at. ACCEPT_STATUS_ID = ut.PURCHASE_ACCEPT_STATUS");
                                    while ($row=mysqli_fetch_assoc($acq)) {
                                        $sid = $row["AQ_PO_ID"];
                                        $pid = $row["REF_PO_ID"];
                                        $AQ_DATE = $row["AQ_PO_DATE"];
                                        $accstat = $row["ACCEPT_STATUS_NAME"];
                                        $pdate = $row["DATE_PURCHASED"];
                                
                                ?>
                                    <tr class="odd gradeX">
                                    	<td><?php echo $sid;?></td>
                                        <td><?php echo $pdate;?></td>
                                        <td><?php echo $accstat;?></td>
                                        <td><?php echo $AQ_DATE;?></td>
                                        <td><span class="label label-info m-l-5">Purchased</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="fa fa-eye"></i></td>
                                <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                   

			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-cyan" data-theme="default" data-theme-file="../assets/css/material/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default/Cyan" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/material/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/material/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/material/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/material/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/material/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black" data-original-title="" title="">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
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
	
	<script type="text/javascript">
        $('#submit').click(function(e){
            e.preventDefault();

            var e = document.getElementById('bldg');
            var get = e.options[e.selectedIndex].value;
            var room = document.getElementById('room').value;
           // var mnameuser = document.getElementById('mname').value;
            //var lnameuser = document.getElementById('lname').value;
            //var u_username = document.getElementById('u_name').value;
           // var u_pass = document.getElementById('defpass').value;


            if (get == "")
            {
            
                if (document.getElementById('bldg').options[e.selectedIndex].value == '')
                {
                    document.getElementById('bldg').options[0].innerText = "Please select";
                    document.getElementById('bldg').focus();
                    document.getElementById('bldg').style.borderColor = "#B94A48";
                    document.getElementById('bldg').style.color = "#B94A48";
                }
					

            }

            else
            {
            	
                swal({
                        title: "Save new room?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#b05544',
                        confirmButtonText: 'Yes',
                        cancelButtonText: "No",
                        closeOnConfirm: false,
                        closeOnCancel: false

                },
                function(isConfirm){
                    if (isConfirm) {
                    	 

                      
                        $.ajax({
                                    type: 'POST',
                                    url: 'INCLUDES/submitRoom.php',
                                    async: false,
                                    data: {
                                        _room: room,
                                        _bldg: get

                                        /*_acctype: get,
                                        _mname: mnameuser,
                                        _lname: lnameuser,
                                        _username: u_username,
                                        _defpass: u_pass*/
                                    },
                                    success: function(data) {
                                        

                                        swal("Room added! ", "Page will be reloaded.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'adminRoom.php';
                                            //document.getElementById('add-regular').click();
                                            
										    //mywindow.close();

										    return true;
                                        },3000);
                                        

                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Account is not created.", "error");
                    }
                });
                
             }
           
            

        });
    </script>

	<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
			TableManageButtons.init();
		});
	</script>
</body>
</html>
