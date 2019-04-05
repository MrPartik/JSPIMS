<?php 

    include('connect.php');

    $id = $_GET['this'];
    

    $selectname = "SELECT *, B.ACCUSERNAME, YEAR(A.APP_BDATE) AS YR FROM `applicant` AS A INNER JOIN ACC AS B 
    ON A.ACC_FK = B.ACCID
    WHERE A.APP_ID ='$id'";
    $nameresult = mysqli_query($connect, $selectname) or die('Bad query: $sql'); 

    while ($row = mysqli_fetch_assoc($nameresult) ) {
        $app_fname = $row['APP_FNAME'];
        $app_lname = $row['APP_LNAME'];
        $app_mname = $row['APP_MNAME'];
        $app_sex = $row['APP_SEX'];
        $app_bdate = $row['APP_BDATE'];
        $app_pbirth = $row['APP_PBIRTH'];
        $app_address = $row['APP_ADDRESS'];
        $app_civil = $row['APP_CIVIL'];
        $app_citizenship = $row['APP_CITIZENSHIP'];
        $app_disability = $row['APP_DISABILITY'];
        $app_pic = $row['APP_PIC'];
        $app_contact = $row['APP_CONTACT'];
        $app_email = $row['APP_EMAIL'];
        //$app_fchoice = $row[''];
        //$app_schoice = $row[''];
        //$app_tchoice = $row[''];
        $app_mothername = $row['MOTHERNAME'];
        $app_motherciv = $row['MOTHERCIV'];
        $app_motheroccu = $row['MOTHEROCCU'];
        $app_motheremp = $row['MOTHEREMP'];
        $app_fathername = $row['FATHERNAME'];
        $app_fatherciv = $row['FATHERCIV'];
        $app_fatheroccu = $row['FATHEROCCU'];
        $app_fatheremp = $row['FATHEREMP'];
        $app_guardname = $row['GUARDNAME'];
        $app_guardciv = $row['GUARDCIV'];
        $app_guardoccu = $row['GUARDOCCU'];
        $app_guardemp = $row['GUARDEMP'];
        $appnum = $row['ACCUSERNAME'];
        $yr = $row['YR'];

        //$app_fname = $row[''];
        //$app_fname = $row[''];

    }
    /*
    $selectname2 = "SELECT * FROM PROGRAM WHERE PROG_ID ='$fchoice'";
    $nameresult2 = mysqli_query($connect, $selectname2) or die('Bad query: $sql'); 

    while ($row2 = mysqli_fetch_assoc($nameresult2) ) {
        $program = $row2['PROG_NAME'];
    }
    */
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

    <style type="text/css">
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            border-color: #ffffff;
            padding: 3px 10px;
}
    </style>
	

</head>
<body class="boxed-layout" onload="window.print();">
	<!-- begin #page-loader -->
	
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<!-- begin #header -->
		<div class="invoice" id="printablediv">
                <!-- begin invoice-company -->
                <div class="invoice-company text-inverse f-w-600">
                    <span class="pull-right hidden-print">
                    <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                    </span>
                    <?php echo $appnum ?>
                </div>
                <!-- end invoice-company -->
                <!-- begin invoice-header -->
                <div class="invoice-header">
                    <div class="invoice-from">
                        <address class="m-t-5 m-b-5">
                            <strong class="text-inverse"></strong>
                        </address>
                    </div>
                    <div class="invoice-to" align="center">
                        <address class="m-t-5 m-b-5">
                            <strong class="text-inverse">APPLICANT PROFILE</strong>
                        </address>
                    </div>
                    <div class="invoice-date">
                        <div class="date text-inverse m-t-5"></div>
                        <div class="invoice-detail">
                        </div>
                    </div>
                </div>
                <!-- end invoice-header -->
                <!-- begin invoice-content -->
                <div class="invoice-content">
                    <!-- begin table-responsive -->
                    <div class="table-responsive">
                        <table class="table table-invoice">
                            <thead>
                                <tr>
                                    <th width="20%">PERSONAL INFORMATION</th>
                                    <th class="text-center" width="10%"></th>
                                    <th class="text-center" width="10%"></th>
                                    <th class="text-right" width="10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-inverse"><?php echo $app_lname;?></span><br />
                                        <small>LAST NAME</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_fname;?></span><br />
                                        <small>FIRST NAME</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_mname;?></span><br />
                                        <small>MIDDLE NAME</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_sex;?></span><br />
                                        <small>SEX</small>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-nowrap"><?php echo $app_bdate?></span><br />
                                        <small>BIRTH DATE</small>
                                    </td>
                                    <td>
                                        <span class="text-nowrap"><?php $now=date('Y'); echo $now-$yr?></span><br />
                                        <small>AGE</small>
                                    </td>
                                    <td>
                                        <span class="text-nowrap"><?php echo $app_address;?></span><br />
                                        <small>ADDRESS</small>
                                    </td>
                                    <td>
                                        <span class="text-nowrap"><?php echo $app_pbirth;?></span><br />
                                        <small>PLACE OF BIRTH</small>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-nowrap"><?php echo $app_civil;?></span><br />
                                        <small>CIVIL STATUS</small>
                                    </td>
                                    <td>
                                        <span class="text-nowrap"><?php echo $app_citizenship;?></span><br />
                                        <small>AGE</small>
                                    </td>
                                    
                                </tr>

                            </tbody>
                        </table>
                        <table class="table table-invoice">
                            <thead>
                                <tr>
                                    <th width="20%">CONTACT INFORMATION</th>
                                    <th class="text-center" width="10%"></th>
                                    <th class="text-center" width="10%"></th>
                                    <th class="text-right" width="10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-inverse"><?php echo $app_email;?></span><br />
                                        <small>EMAIL ADDRESS</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_contact;?></span><br />
                                        <small>PHONE NUMBER</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-invoice">
                            <thead>
                                <tr>
                                    <th width="20%">OTHER INFORMATION</th>
                                    <th class="text-center" width="10%"></th>
                                    <th class="text-center" width="10%"></th>
                                    <th class="text-right" width="10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-inverse"><?php echo $app_mothername;?></span><br />
                                        <small>MOTHER'S NAME</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_motherciv;?></span><br />
                                        <small>CIVIL STATUS</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_motheroccu;?></span><br />
                                        <small>OCCUPATION</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_motheremp;?></span><br />
                                        <small>EMPLOYER/COMPANY</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-inverse"><?php echo $app_fathername;?></span><br />
                                        <small>FATHER'S NAME</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_fatherciv;?></span><br />
                                        <small>CIVIL STATUS</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_fatheroccu;?></span><br />
                                        <small>OCCUPATION</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_fatheremp;?></span><br />
                                        <small>EMPLOYER/COMPANY</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-inverse"><?php echo $app_mothername;?></span><br />
                                        <small>MOTHER'S NAME</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_fname;?></span><br />
                                        <small>CIVIL STATUS</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_mname;?></span><br />
                                        <small>OCCUPATION</small>
                                    </td>
                                    <td><span class="text-inverse"><?php echo $app_sex;?></span><br />
                                        <small>EMPLOYER/COMPANY</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                    <!-- begin invoice-price -->
                    <!--<div class="invoice-price">
                        <div class="invoice-price-left">
                            <div class="invoice-price-row">
                                <div class="sub-price">
                                    <small>SUBTOTAL</small>
                                    <span class="text-inverse">$4,500.00</span>
                                </div>
                                <div class="sub-price">
                                    <i class="fa fa-plus text-muted"></i>
                                </div>
                                <div class="sub-price">
                                    <small>PAYPAL FEE (5.4%)</small>
                                    <span class="text-inverse">$108.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-price-right">
                            <small>TOTAL</small> <span class="f-w-600">$4508.00</span>
                        </div>
                    </div>
                    <!-- end invoice-price -->
                </div>
                <!-- end invoice-content -->
                <!-- begin invoice-note -->
                <div class="invoice-note">
                    * Make all cheques payable to [Your Company Name]<br />
                    * Payment is due within 30 days<br />
                    * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
                </div>
                <!-- end invoice-note -->
                <!-- begin invoice-footer -->
                <div class="invoice-footer">
                    <p class="text-center m-b-5 f-w-600">
                        THANK YOU FOR YOUR BUSINESS
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> matiasgallipoli.com</span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> rtiemps@gmail.com</span>
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