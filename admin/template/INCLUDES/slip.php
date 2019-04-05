<?php 

    include('connect.php');

    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $midname = $_GET['midname'];
    $fchoice = $_GET['fchoice'];
    $examsched = $_GET['examsched'];
    $pic = $_GET['pic'];
    $current_timestamp = strtotime("now");
    $current_timestamp_fndate = date("Y-m-d");

    $selectname = "SELECT * FROM SCHED AS A INNER JOIN ROOM AS B ON A.ROOM_FK = B.ROOM_ID WHERE A.SCHED_ID ='$examsched'";
    $nameresult = mysqli_query($connect, $selectname) or die('Bad query: $sql'); 

    while ($row = mysqli_fetch_assoc($nameresult) ) {
        $petsa = $row['SCHED_DATE'];
        $oras = $row['SCHED_TIME'];
        $kwarto = $row['ROOM_NAME'];
    }

    $selectname2 = "SELECT * FROM PROGRAM WHERE PROG_ID ='$fchoice'";
    $nameresult2 = mysqli_query($connect, $selectname2) or die('Bad query: $sql'); 

    while ($row2 = mysqli_fetch_assoc($nameresult2) ) {
        $program = $row2['PROG_NAME'];
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
	<link href="../../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../../assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../../assets/css/material/style.min.css" rel="stylesheet" />
	<link href="../../assets/css/material/style-responsive.min.css" rel="stylesheet" />
	<link href="../../assets/css/material/theme/orange.css" rel="stylesheet" id="theme" />
	<link href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="../../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== form wizard css ================== -->
	<link href="../../assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="../../assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== end form wizard css ================== -->

	<link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
	

</head>
<body class="boxed-layout" onload="window.print()"">
	<!-- begin #page-loader -->
	
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<!-- begin #header -->
		<div class="invoice" id="printablediv">
                <!-- begin invoice-company -->
                <div class="invoice-company text-inverse f-w-600">
                    <span class="pull-right hidden-print">
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                    </span>
                  <img src="../../assets/img/pics/csu.gif" />
					 <img src="../../assets/img/pics/headerCSU.png" style="width: 230px; height: 70px; margin-top: 10px;"  />
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
                                        <span class="text-inverse">CONTROL NUMBER: </span><span class="text-warning"><?php echo $current_timestamp; ?></span>
                                        <td><?php echo '<img src="'.$pic.'"/>';?></td>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-inverse">DATE ISSUED:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </span><span class="text-warning"><?php echo $current_timestamp_fndate;?></span>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td align="center">
                                        <span class="text-inverse" style="text-align: left !important">Please admit <?php echo $firstname.' '.$midname.' '.$lastname; ?> to take the College Entrance Exam for <?php echo $program; ?> on <?php echo $petsa; ?> at the Cataduanes State University, <?php echo $kwarto; ?> at <?php echo $oras; ?> </span><br />
                                        
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
                        System generated by EEMS on <?php echo $current_timestamp; ?>
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
	
		
		<!-- begin #sidebar -->
		
		
		<!-- end #sidebar -->
		
		<!-- begin #content -->
	
		
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
	<script src="../../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../../assets/js/theme/material.min.js"></script>
	<script src="../../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="../../assets/js/demo/form-plugins.demo.min.js"></script>
	<!-- ================== form wizard JS ================== -->
	<script src="../../assets/plugins/parsley/dist/parsley.js"></script>
	<script src="../../assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="../../assets/js/demo/form-wizards-validation.demo.min.js"></script>
	<!-- ================== end form wizard JS ================== -->

	<script src="../../assets/js/sweetalert/sweetalert.min.js"></script>

	<script src="../../assets/js/includes/match_pass.js"></script>

	

	<script>
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
			FormPlugins.init();
		
		});
	</script>
</body>
</html>