<?php
	include 'INCLUDES/userdetails.php';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Blank Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
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
	<link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
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
					<li class="has-sub active">
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
					<li class="has-sub">
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
			<h1 class="page-header">Manage Schedule</h1>
			<!-- end page-header -->
			
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Schedule Table</h4>
				</div>
				<div class="panel-body">
					<div style="padding: 20px;"><a href="#modal-dialog" class="btn btn-sm btn-success" data-toggle="modal"><i class="fas fa-plus"></i> Add Schedule</a></div>
                            <table id="data-table-buttons" class="table table-striped table-bordered">
                            	
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">#</th>
                                        <th class="text-nowrap">Academic Year</th>
                                        <th class="text-nowrap">Date and Time of Exam</th>
                                        <th class="text-nowrap">Room</th>
                                        <th class="text-nowrap">Program</th>
                                        <th class="text-nowrap">Enabled</th>
                                    </tr>
                                </thead>
                                
                                <tbody><?php 
	                                $tablesql = "SELECT *,  IF (A.SCHED_STAT = 0,'No', 'Yes') AS status from SCHED AS A INNER JOIN ACADYR AS B ON A.ACADYR_FK = B.ACADYR INNER JOIN ROOM AS C ON A.ROOM_FK = c.ROOM_ID INNER JOIN PROGRAM AS D ON A.PROG_FK = D.PROG_ID";
	                                $tableresult = mysqli_query($connect, $tablesql) or die("Bad query: $tablesql");
	                                $a = 0;
	                                while ($row = mysqli_fetch_assoc($tableresult)) {
	                                	
	                                	$a+=1;
	                                	$ID = $row['SCHED_ID'];
	                                    $acadyr = $row['ACADYR_NAME'];
	                                    $date = $row['SCHED_DATE']. '/' .$row['SCHED_TIME'];
	                                    $program = $row['PROG_NAME'];
	                                    $enabled = $row['status'];
	                                    $room = $row['ROOM_NAME'];


                                                
                                 ?>
                                    <tr class="odd gradeX">
                                       <td><?php echo $a; ?></td>
                                       <td><?php echo $acadyr ?></td>
                                       <td><?php echo $date; ?></td>
                                       <td><?php echo $room; ?></td>
                                       <td><?php echo $program ?></td>
                                       <td><?php echo $enabled; ?></td>
                                       <?php } ?>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                   <div class="modal fade" id="modal-dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Add New Schedule</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group row m-b-10">
													<label class="col-md-3 col-form-label text-md-right">Academic Year <span class="text-danger">*</span></label>
													<div class="col-md-6">
														 <select class="form-control" name="fchoice" id="acadyr" >
														 	<option value="" selected disabled>Select period</option>
				                                            <?php 
					                                            $selectcat = "SELECT * FROM acadyr where acadyr_stat = 0 ORDER BY ACADYR DESC ";

					                                            $selectresult = mysqli_query($connect, $selectcat) or die("Bad Query: $sql");
					                                            while($row = mysqli_fetch_assoc($selectresult)){
					                                                 $prod_cat_name = $row['ACADYR_NAME'];
					                                                 $prod_cat_id = $row['ACADYR'];   
		                                            			
		                                          			?>
		                                          			<option value="<?php  echo $prod_cat_id ?>"><?php echo "$prod_cat_name"; ?></option>
						                                          <?php 
						                                            }
						                                          ?>
				                                        </select>
													</div>
												</div>
												<div class="form-group row m-b-15">
													<label class="col-md-3 col-form-label text-md-right">Date</label>
													<div class="col-md-9">
														<div class="input-group date" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
				                                            <input type="date" class="form-control" id="date" placeholder="Select Date" />
				                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				                                        </div>
														
													</div>
												</div>
												<div class="form-group row m-b-15">
													<label class="col-md-3 col-form-label text-md-right">Start Time</label>
													<div class="col-md-9">
														<div class="input-group bootstrap-timepicker">
															<input id="start" type="time" class="form-control" />
															<span class="input-group-addon"><i class="fa fa-clock"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group row m-b-15">
													<label class="col-md-3 col-form-label text-md-right">End Time</label>
													<div class="col-md-9">
														<div class="input-group bootstrap-timepicker">
															<input id="end" type="time" class="form-control" />
															<span class="input-group-addon"><i class="fa fa-clock"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group row m-b-10">
													<label class="col-md-3 col-form-label text-md-right">Room <span class="text-danger">*</span></label>
													<div class="col-md-6">
														 <select class="form-control" name="fchoice" id="room" >
														 	<option value="" selected disabled>Select room</option>
				                                            <?php 
					                                            $selectcat = "SELECT * FROM room where room_stat = 0 ORDER BY room_id DESC ";

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
												<div class="form-group row m-b-10">
													<label class="col-md-3 col-form-label text-md-right">Program <span class="text-danger">*</span></label>
													<div class="col-md-6">
														 <select class="form-control" name="fchoice" id="program" >
														 	<option value="" selected disabled>Select program</option>
				                                            <?php 
					                                            $selectcat = "SELECT * FROM program where prog_stat = 0 ORDER BY prog_id DESC ";

					                                            $selectresult = mysqli_query($connect, $selectcat) or die("Bad Query: $sql");
					                                            while($row = mysqli_fetch_assoc($selectresult)){
					                                                 $prod_cat_name = $row['PROG_NAME'];
					                                                 $prod_cat_id = $row['PROG_ID'];   
		                                            			
		                                          			?>
		                                          			<option value="<?php  echo $prod_cat_id ?>"><?php echo "$prod_cat_name"; ?></option>
						                                          <?php 
						                                            }
						                                          ?>
				                                        </select>
													</div>
												</div>
												<div class="form-group row m-b-10">
													<label class="col-md-3 col-form-label text-md-right">Enabled <span class="text-danger">*</span></label>
													<div class="col-md-6">
														 <select class="form-control" name="fchoice" id="ena" data-parsley-group="step-3" data-parsley-required="true">
														 	<option value="" selected disabled>Select</option>
														 	<option value="1">Yes</option>
														 	<option value="0">No</option>
				                                            
				                                        </select>
													</div>
												</div>
												
											</form>
										</div>
										<div class="modal-footer">
											<button href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
											<button id="submit" href="javascript:;" class="btn btn-success">Submit</a>
										</div>
									</div>
								</div>
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

            var e = document.getElementById('acadyr');
            var get = e.options[e.selectedIndex].value;
            var f = document.getElementById('program');
            var get2 = f.options[f.selectedIndex].value;
            var h = document.getElementById('ena');
            var get3 = h.options[h.selectedIndex].value;
            var i = document.getElementById('room');
            var get4 = i.options[i.selectedIndex].value;
            var date = document.getElementById('date').value;
            var start = document.getElementById('start').value;
            var end = document.getElementById('end').value;
            //alert(get2+get3+get4+get+start+end+date);

           // var mnameuser = document.getElementById('mname').value;
            //var lnameuser = document.getElementById('lname').value;
            //var u_username = document.getElementById('u_name').value;
           // var u_pass = document.getElementById('defpass').value;


            if (get == "")
            {
            
                if (document.getElementById('acadyr').options[e.selectedIndex].value == '')
                {
                    document.getElementById('acadyr').options[0].innerText = "Please select";
                    document.getElementById('acadyr').focus();
                    document.getElementById('acadyr').style.borderColor = "#B94A48";
                    document.getElementById('acadyr').style.color = "#B94A48";
                }
					

            }

            else
            {
            	
                swal({
                        title: "Save new schedule?",
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
                                    url: 'INCLUDES/submitSched.php',
                                    async: false,
                                    data: {
                                        _acadyr: get,
                                        _program: get2,
                                        _enabled: get3,
                                        _start: start,
                                        _end: end,
                                        _date: date,
                                        _room: room

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
                                            window.location = 'adminSched.php';
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
