<?php
	include 'INCLUDES/userdetails.php';
	if( isset($_POST["prog"])){

	$prog = $_POST['prog'];
	}


?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>EEMS | APPLICANTS</title>
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
	<link href="../assets/css/material/theme/orange.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN RESPONSIVE TABLE STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END RESPONSIVE TABLE STYLE ================== -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Loading...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">
					Color Admin Material
				</a>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<a href="#" data-toggle="navbar-search" class="icon">
						<i class="material-icons">search</i>
					</a>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle icon">
						<i class="material-icons">inbox</i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<span class="d-none d-md-inline">Hi, John Smith</span>
						<img src="../assets/img/user/user-14.jpg" alt="" /> 
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<form action="" method="POST">
						<button type="submit" name="logout" class="dropdown-item">Log Out</button>
						</form>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
			
			<div class="search-form">
				<button class="search-btn" type="submit"><i class="material-icons">search</i></button>
				<input type="text" class="form-control" placeholder="Search Something..." />
				<a href="#" class="close" data-dismiss="navbar-search"><i class="material-icons">close</i></a>
			</div>
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-14.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								John Smith
								<small>Front end developer</small>
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
						<a href="adminDashboard.php">
							<i class="material-icons">insert_chart</i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="adminApplicant.php">
							<span class="badge pull-right">10</span>
							<i class="material-icons">list</i>
							<span>Applicants</span>
						</a>
						
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="material-icons">edit</i>
						    <span>Maintenance</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="adminAcademic.php">Academic Year</a></li>
							<li><a href="adminProgram.php">Program</a></li>
							<li><a href="adminBldg.php">Building</a></li>
							<li><a href="adminRoom.php">Room</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="material-icons">book</i>
						    <span>Exam <span class="label label-theme m-l-5">NEW</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="adminQuestion.php">Load Question</a></li>
							<li><a href="adminExam.php">Create Exam</a></li>
							<li><a href="adminSched.php">Exam Schedule</a></li>
							<li><a href="extra_404_error.html">Enabled Exams</a></li>
						</ul>
					</li>
					<li class="has-sub active">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="material-icons">report</i>
						    <span>Reports <span class="label label-theme m-l-5">NEW</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="appProgram.php">List of Applicants by Program</a></li>
							<li class="active"><a href="appRoom.php">List of Applicants by Room</a></li>
							<li><a href="appSched.php">List of Applicants by Sched</a></li>
						</ul>
					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
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
			<h1 class="page-header">Generate Reports</h1>
			<!-- end page-header -->
			
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Applicants Table</h4>
				</div>
				<div class="panel-body">
					<form>
						<div class="form-group row m-b-10">
							<label class="col-md-3 col-form-label text-md-right">Filtery by Room: <span class="text-danger"></span></label>
							<div class="col-md-6">
								 <select class="form-control" name="fchoice" id="prog" data-parsley-group="step-3" data-parsley-required="true">
								 	<option value="" selected disabled>Select room</option>
	                                <?php 
	                                    $selectcat = "SELECT * FROM ROOM where ROOM_STAT = 0 ";

	                                    $selectresult = mysqli_query($connect, $selectcat) or die("Bad Query: $sql");
	                                    while($row = mysqli_fetch_assoc($selectresult)){
	                                         $prod_cat_name = $row['ROOM_NAME'];
	                                         $prod_cat_id = $row['ROOM_ID'];   
	                        			
	                      			?>
	                      			<option value="<?php  echo $prod_cat_id ?>"><?php echo "$prod_cat_name"; ?></option>
	                                      <?php 
	                                        }
	                                      ?>
	                            </select>
							</div>
						</div>
						
						
					</form>

                           <div id="inserted_item_data"></div>
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
	<script type="text/javascript">
		 $('#prog').change(function(){

 	 function fetch_item_data()
		 {var e2 = document.getElementById('prog');
		  var prog = e2.options[e2.selectedIndex].value;
		  $.ajax({
		   url:"fetchByRoom.php",
		   method:"POST",
		   data:{prog:prog},
		   success:function(data)
		   {
		    $('#inserted_item_data').html(data);
		   }
		  })
		 }
		 fetch_item_data();
		  					 });

		 
	</script>
</body>
</html>
