<?php
	include('INCLUDES/connect.php');
	$selectcat = "SELECT * FROM acadyr where acadyr_stat = 0 ";
    $selectresult = mysqli_query($connect, $selectcat) or die("Bad Query: $sql");
    while($row = mysqli_fetch_assoc($selectresult)){
         $acadyear = $row['ACADYR_NAME'];
        }

?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>CSU | EEMS</title>
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
	<link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== form wizard css ================== -->
	<link href="../assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="../assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== end form wizard css ================== -->

	<link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
	

</head>
<body class="boxed-layout">
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
				<a href="index.html" class="navbar-brand">
					<img src="../assets/img/pics/csu.gif" style="width: 40px; margin-left: 30px;" />
					 <span class="text-warning">Cataduanes State University</span>
				</a>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
		
			<!-- end header navigation right -->
			
			<div class="search-form">
				<button class="search-btn" type="submit"><i class="material-icons">search</i></button>
				<input type="text" class="form-control" placeholder="Search Something..." />
				<a href="#" class="close" data-dismiss="navbar-search"><i class="material-icons">close</i></a>
			</div>
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		
		
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div class="row align-items-center justify-content-center">
		<div id="content" class="col" style="margin: 50px;">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
				<li class="breadcrumb-item active">Blank Page</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">ENTRANCE EXAM MANAGEMENT SYSTEM ONLINE APPLICATION <br><small><center>Application for S.Y. <strong class="text-primary"><?php echo $acadyear ?></strong> </center></small></h1>
			
			<!-- end page-header -->
			
			<!-- begin panel -->
			<form action="applySlip.php"  method="POST" name="form-wizard" class="form-control-with-bg">
				<!-- begin wizard -->
				<div id="wizard">
					<!-- begin wizard-step -->
					<ul>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-1">
								<span class="number">1</span> 
								<span class="info text-ellipsis">
									Personal Info
									<small class="text-ellipsis">Name, address, etc.</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-2">
								<span class="number">2</span> 
								<span class="info text-ellipsis">
									Contact Info
									<small class="text-ellipsis">Email and phone no. is required</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-3">
								<span class="number">3</span>
								<span class="info text-ellipsis">
									Degree Program
									<small class="text-ellipsis">Enter your username and password</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-4">
								<span class="number">4</span>
								<span class="info text-ellipsis">
									Schedule
									<small class="text-ellipsis">Enter your username and password</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-5">
								<span class="number">5</span>
								<span class="info text-ellipsis">
									Other Info
									<small class="text-ellipsis">Enter your username and password</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-6">
								<span class="number">6</span>
								<span class="info text-ellipsis">
									EEMS ACCESS
									<small class="text-ellipsis">Enter your username and password</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-7">
								<span class="number">7</span> 
								<span class="info text-ellipsis">
									Completed
									<small class="text-ellipsis">Complete Registration</small>
								</span>
							</a>
						</li>
					</ul>
					<!-- end wizard-step -->
					<!-- begin wizard-content -->
					<div>
						<!-- begin step-1 -->
						<div id="step-1">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Personal info about yourself</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">First Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="firstname" id="firstname" placeholder="First Name" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Last Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="lastname" id="lastname" placeholder="Last Name" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Middle Name <span class="text-danger"></span></label>
											<div class="col-md-6">
												<input type="text" name="midname" id="midname" placeholder="Middle Name" data-parsley-group="step-1" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Sex <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="sex" id="sex" data-parsley-group="step-1" data-parsley-required="true">
		                                            <option value="" selected disabled>Select</option>
		                                            <option value="Male">Male</option>
		                                            <option value="Female">Female</option>
		                                        </select>
											</div>
										</div>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Date of Birth <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="date" name="bdate" id="bdate" data-parsley-group="step-1" class="form-control" id="datepicker-autoClose" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Place of Birth <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="pbirth" id="pbirth" placeholder="ex. Manila" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Civil Status <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="civil" id="civil" data-parsley-group="step-1" data-parsley-required="true">
		                                            <option value="" selected disabled>Select status</option>
		                                            <option value="Single">Single</option>
		                                            <option value="Married">Married</option>
		                                            <option value="Widowed">Widowed</option>
		                                            <option value="Annulled/Nullified">Annulled/Nullified</option>
		                                            <option value="Divorced">Divorced</option>
		                                        </select>
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Citizenship <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="citizen" id="citizen" placeholder="ex. Filipino" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Disability <span class="text-danger"></span></label>
											<div class="col-md-6">
												 <select class="form-control" name="disability" id="disability" data-parsley-group="step-1" data-parsley-required="true">
		                                            <option value="None" selected>None</option>
		                                            <option value="Total/Partial Blindness">Total/Partial Blindness</option>
		                                            <option value="Low Vision">Low Vision</option>
		                                            <option value="Total/Partial Deaf">Total/Partial Deaf</option>
		                                            <option value="Oral Defect">Oral Defect</option>
		                                        </select>
		                                        <label class="col-form-label text-right text-warning f-s-10">Do you have any PHYSICAL DISABILITY OR CONDITION that requires special attention or would make it difficult for you to take a regular test?</label>
											</div>
											
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Upload Picture <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="file" accept="image/*" name="pic" id="pic" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>

										<!-- end form-group -->
										<!-- begin form-group -->
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-1 -->
						<!-- begin step-2 -->
						<div id="step-2">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 md-offset-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">You contact info, so that we can easily reach you</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 text-md-right col-form-label">Home Address</label>
											<div class="col-md-9">
												<input type="text" name="address" id="address" placeholder="112 Don Fabian, Brgy.Commonwealth, Q.C." class="form-control m-b-10" data-parsley-group="step-2" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Phone Number <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="number" name="phone" id="phone" placeholder="123-456-7890" maxlength="11" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="number" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Email Address <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="email" name="email" id="email" placeholder="someone@example.com" class="form-control" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="email" />
											</div>
										</div>
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-2 -->
						<!-- begin step-3 -->
						<div id="step-3">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Select your login username and password</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">First Choice <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="fchoice" id="fchoice" data-parsley-group="step-3" data-parsley-required="true">
												 	<option value="" selected disabled>Select program</option>
		                                            <?php 
			                                            $selectcat = "SELECT * FROM program where prog_stat = 0 ";

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
											<label class="col-md-3 col-form-label text-md-right">Second Choice <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="schoice" id="schoice" data-parsley-group="step-3" data-parsley-required="true">
		                                            <option value="" selected disabled>Select program</option>
		                                            <?php 
			                                            $selectcat = "SELECT * FROM program where prog_stat = 0 ";

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
											<label class="col-md-3 col-form-label text-md-right">Third Choice <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="tchoice" id="tchoice" data-parsley-group="step-3" data-parsley-required="true">
		                                            <option value="" selected disabled>Select program</option>
		                                            <?php 
			                                            $selectcat = "SELECT * FROM program where prog_stat = 0 ";

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
										<!-- end form-group -->
										<!-- begin form-group -->
										
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-3 -->
						<!-- begin step-4 -->
						<div id="step-4">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Choose exam schedule <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="examsched" id="examsched" data-parsley-group="step-4" data-parsley-required="true">
		                                            <option value="" selected disabled>Select schedule</option>
		                                            <?php 
			                                            $selectcat1 = "SELECT * FROM SCHED AS A INNER JOIN ROOM AS B ON A.ROOM_FK = B.ROOM_ID WHERE A.SCHED_STAT = 0";

			                                            $selectresult1 = mysqli_query($connect, $selectcat1) or die("Bad Query: $sql");
			                                            while($row = mysqli_fetch_assoc($selectresult1)){
			                                                 $prod_cat_name1 = $row['SCHED_TIME'].'/'.$row['SCHED_DATE'].'/'.$row['ROOM_NAME'];
			                                                 $prod_cat_id1 = $row['SCHED_ID'];   
                                            			
                                          			?>
                                          			<option value="<?php  echo $prod_cat_id1 ?>"><?php echo "$prod_cat_name1"; ?></option>
				                                          <?php 
				                                            }
				                                          ?>
		                                        </select>
											</div>
										</div>
										<!-- end form-group -->
									</div>
								</div>
									<!-- end col-8 -->
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						
			<div class="invoice" id="printablediv">
                <!-- begin invoice-company -->
                <div class="invoice-company text-inverse f-w-600">
                    <span class="pull-right hidden-print">
                    <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                    </span>
                  <img src="../assets/img/pics/csu.gif" />
					 <img src="../assets/img/pics/headerCSU.png" style="width: 230px; height: 70px; margin-top: 10px;"  />
                </div>
                <!-- end invoice-company -->
                <!-- begin invoice-header -->
                <div class="invoice-header">
                    
                    <div class="invoice-to" align="center">
                        <address class="m-t-5 m-b-5">
                            <strong class="text-inverse" >ADMISSION SLIP</strong>
                        </address>
                    </div>
                    
                </div>
                <!-- end invoice-header -->
                <!-- begin invoice-content -->
                <div class="invoice-content">
                	<!-- begin table-responsive -->
                    <div class="table-responsive">
                        <table class="table table-invoice">
                            <thead>
                                <tr class="borderless">
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-inverse">CONTROL NUMBER: </span><span class="text-warning">[LAGAY VARIABLE DITO]</span>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-inverse">DATE ISSUED:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </span><span class="text-warning">[LAGAY VARIABLE DITO]</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <span class="text-inverse" style="text-align: left !important">Please admit [LAGAY VARIABLE DITO] to take the College Entrance Exam for [LAGAY VARIABLE DITO] on [LAGAY VARIABLE DITO] at the Cataduanes State University, [LAGAY VARIABLE DITO] at [LAGAY VARIABLE DITO] </span><br />
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        <span class="f-w-600">______________________________________</span><br /><small style="text-align: center !important;">Testing Officer/Personnel Authorized<br />to receive and/or process applications</small><br />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                	<!-- end table-responsive -->
                	<!-- begin invoice-price -->
                    
                	<!-- end invoice-price -->
                </div>
                <!-- end invoice-content -->
                <!-- begin invoice-note -->
                
                <!-- end invoice-note -->
                <!-- begin invoice-footer -->
                <div class="invoice-footer">
                    <p class="m-b-5 f-w-600">
                        System generated by EEMS on [LAGAY VARIABLE DITO]
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"> CSU-F-GCT-01</span>
                        <span class="m-r-10"> Rev.1</span>
                        <span class="m-r-10">Effectivity Date: Dec. 12, 2018</span>
                    </p>
                </div>
                <!-- end invoice-footer -->
            </div>
						<input style="display: none;" type="button" value="Print 1st Div" id="clickthis" onclick="javascript:printDiv('printablediv')" />
						<div id="step-5">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Other Information</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Mother's Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="motname" id="motname" placeholder="ex. Juana Cruz" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Civil Status <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="motcivil" id="motcivil" data-parsley-group="step-5" data-parsley-required="true">
		                                            <option value="" selected disabled>Select status</option>
		                                            <option value="Single">Single</option>
		                                            <option value="Married">Married</option>
		                                            <option value="Widowed">Widowed</option>
		                                            <option value="Annulled/Nullified">Annulled/Nullified</option>
		                                            <option value="Divorced">Divorced</option>
		                                        </select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Mother's Occupation <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="motoccu" id="motoccu" placeholder="ex. Teacher" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Mother's Employer/Company <span class="text-danger"></span></label>
											<div class="col-md-6">
												<input type="text" name="motemp" id="motemp" placeholder="ex. Lagro High School" data-parsley-group="step-5" class="form-control" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Father's Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="fatname" id="fatname" placeholder="ex. Juana Cruz" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Civil Status <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="fatcivil" id="fatcivil" data-parsley-group="step-5" data-parsley-required="true">
		                                            <option value="" selected disabled>Select status</option>
		                                            <option value="Single">Single</option>
		                                            <option value="Married">Married</option>
		                                            <option value="Widowed">Widowed</option>
		                                            <option value="Annulled/Nullified">Annulled/Nullified</option>
		                                            <option value="Divorced">Divorced</option>
		                                        </select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Father's Occupation <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="fatoccu" id="fatoccu" placeholder="ex. Teacher" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Father's Employer/Company <span class="text-danger"></span></label>
											<div class="col-md-6">
												<input type="text" name="fatemp" id="fatemp" placeholder="ex. Lagro High School" data-parsley-group="step-5" class="form-control" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Guardian's Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="guardname" id="guardname" placeholder="ex. Juana Cruz" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Civil Status <span class="text-danger">*</span></label>
											<div class="col-md-6">
												 <select class="form-control" name="guardcivil" id="guardcivil" data-parsley-group="step-5" data-parsley-required="true">
		                                            <option value="" selected disabled>Select status</option>
		                                            <option value="Single">Single</option>
		                                            <option value="Married">Married</option>
		                                            <option value="Widowed">Widowed</option>
		                                            <option value="Annulled/Nullified">Annulled/Nullified</option>
		                                            <option value="Divorced">Divorced</option>
		                                        </select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Guardian's Occupation <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="guardoccu" id="guardoccu" placeholder="ex. Teacher" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Guardian's Employer/Company <span class="text-danger"></span></label>
											<div class="col-md-6">
												<input type="text" name="guardemp" id="guardemp" placeholder="ex. Lagro High School" data-parsley-group="step-5" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->

										<!-- end form-group -->
										<!-- begin form-group -->
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>

						<div id="step-6">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Password <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="password" name="password" id="password" placeholder="Your password" class="form-control" data-parsley-group="step-6" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Confirm Pasword <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="password" name="password2" id="password2" placeholder="Confirmed password" class="form-control" data-parsley-group="step-6" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<div id="error"  style="display: none;"  class="alert alert-danger fade show">Passwords do not match!</div>
											<div id="match"  style="display: none;"  class="alert alert-lime fade show">Passwords match!</div>
											<div id="fillin"  style="display: none;"  class="alert alert-danger fade show">You did not made any entries!</div>
									</div>
								</div>
									<!-- end col-8 -->
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>

						<div id="step-7">
							<div class="jumbotron m-b-0 text-center">
								<h2 class="text-inverse">Terms and Condition</h2>
								<p class="m-b-30 f-s-16">I affirm that:
									I have read all the information contained in the General Information Bulletin on Freshmen Admission and understood all the instructions relative to my application for the CSU College Entrance Examination.
									All the information supplied in this application are true, complete, and accurate
									I have not taken the CSU Entrance Examination previously
									I will abide by the University rules and policies on the test administration
									I am aware that all information written in this application may be chechked against the original documents and I understand that I will be allowed to take the examination upon the submission of complete requirements. 

									Furthermore, I understand that all information I provide in this form as well as during the CEE may be used, disclosed and processed by the University in accordance with the Data Privacy Act for research and such other legitimate purposes only and may be submitted to the government agencies requiring such information. I understand that my personal details will be treated with utmost confidentiality. </p>
																	<p><button id="submit" class="btn btn-primary btn-lg">I accept the terms and condition</button></p>
							</div>
						</div>
						
						<!-- end step-4 -->
					</div>
					<!-- end wizard-content -->
				</div>
				<!-- end wizard -->
			</form>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		</div>
		
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
	<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/demo/form-plugins.demo.min.js"></script>
	<!-- ================== form wizard JS ================== -->
	<script src="../assets/plugins/parsley/dist/parsley.js"></script>
	<script src="../assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="../assets/js/demo/form-wizards-validation.demo.min.js"></script>
	<!-- ================== end form wizard JS ================== -->

	<script src="../assets/js/sweetalert/sweetalert.min.js"></script>

	<script src="../assets/js/includes/match_pass.js"></script>

	<script type="text/javascript">
        $('#submit').click(function(e){
            e.preventDefault();

            //var e = document.getElementById('getsel');
            //var get = e.options[e.selectedIndex].value;
            var password = document.getElementById('password').value;
            //var password2 = document.getElementById('password2').value;
            var lastname = document.getElementById('lastname').value;
            var firstname = document.getElementById('firstname').value;
            var lastname = document.getElementById('lastname').value;
            var midname = document.getElementById('midname').value;
            var pbirth = document.getElementById('pbirth').value;
            var bdate = document.getElementById('bdate').value;
            var citizen = document.getElementById('citizen').value;
            var address = document.getElementById('address').value;
            var phone = document.getElementById('phone').value;
            var email = document.getElementById('email').value;
            var motname = document.getElementById('motname').value;
            var motoccu = document.getElementById('motoccu').value;
            var motemp = document.getElementById('motemp').value;
            var fatname = document.getElementById('fatname').value;
            var fatoccu = document.getElementById('fatoccu').value;
            var fatemp = document.getElementById('fatemp').value;
            var guardname = document.getElementById('guardname').value;
            var guardoccu = document.getElementById('guardoccu').value;
            var guardemp = document.getElementById('guardemp').value;
            var pic = document.getElementById('pic').value;
            var e = document.getElementById('civil');
            var civil = e.options[e.selectedIndex].value;
            var f = document.getElementById('sex');
            var sex = f.options[f.selectedIndex].value;
            var g = document.getElementById('disability');
            var disability = g.options[g.selectedIndex].value;
            var h = document.getElementById('fchoice');
            var fchoice = h.options[h.selectedIndex].value;
            var i = document.getElementById('schoice');
            var schoice = i.options[i.selectedIndex].value;
            var j = document.getElementById('tchoice');
            var tchoice = j.options[j.selectedIndex].value;
            var k = document.getElementById('examsched');
            var examsched = k.options[k.selectedIndex].value;
            var l = document.getElementById('motcivil');
            var motcivil = l.options[l.selectedIndex].value;
            var m = document.getElementById('fatcivil');
            var fatcivil = m.options[m.selectedIndex].value;
            var n = document.getElementById('guardcivil');
            var guardcivil = n.options[n.selectedIndex].value;
             var hangoutButton = $("#clickthis");
           // var mnameuser = document.getElementById('mname').value;
            //var lnameuser = document.getElementById('lname').value;
            //var u_username = document.getElementById('u_name').value;
           // var u_pass = document.getElementById('defpass').value;


            if (firstname == "")
            {
            	
                if (document.getElementById('firstname').options[e.selectedIndex].value == '')
                {
                    document.getElementById('firstname').options[0].innerText = "Please select";
                    document.getElementById('firstname').focus();
                    document.getElementById('firstname').style.borderColor = "#B94A48";
                    document.getElementById('firstname').style.color = "#B94A48";
                }
                
				

            }

            else
            {
            	
                swal({
                        title: "You agreed to the terms and conditions. Would you like to proceed?",
                        text: "Application will be submitted.",
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
                                    url: 'INCLUDES/submitApp.php',
                                    async: false,
                                    data: {
                                        _fname: firstname,
                                        _lname: lastname,
                                        _mname: midname,
                                        _pbirth: pbirth,
                                        _citizen: citizen,
                                        _civil: civil,
                                        _address: address,
                                        _pbirth: pbirth,
                                        _phone: phone,
                                        _email: email,
                                        _sex: sex,
                                        _disability: disability,
                                        _fchoice: fchoice,
                                        _schoice: schoice,
                                        _tchoice: tchoice,
                                        _examsched: examsched,
                                        _motname: motname,
                                        _motoccu: motoccu,
                                        _motcivil: motcivil,
                                        _motemp: motemp,
                                        _fatname: fatname,
                                        _fatoccu: fatoccu,
                                        _fatcivil: fatcivil,
                                        _fatemp: fatemp,
                                        _motemp: motemp,
                                        _guardname: guardname,
                                        _guardoccu: guardoccu,
                                        _guardcivil: guardcivil,
                                        _guardemp: guardemp,
                                        _password: password,
                                        _bdate: bdate,
                                        _pic: pic

                                        /*_acctype: get,
                                        _mname: mnameuser,
                                        _lname: lnameuser,
                                        _username: u_username,
                                        _defpass: u_pass*/
                                    },
                                    success: function(data) {
                                        

                                        swal("Application is submitted! ", "You may now access your account.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            //window.location = 'applySlip.php';
                                            //document.getElementById('add-regular').click();
                                           // $(document).ready(function() {
												    // When the document is ready/loaded, execute function

																	//hangoutButton.click();
																	window.location.href = 'INCLUDES/slip.php?firstname='+firstname+'&lastname='+lastname+'&midname='+midname+'&fchoice='+fchoice+'&examsched='+examsched+'&pic='+pic;
												    // Assign "click"-event-method to userImage
												    
												//});
                                           

										    //return true;
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
    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>

	<script>
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
			FormPlugins.init();
		
		});
	</script>
</body>
</html>
