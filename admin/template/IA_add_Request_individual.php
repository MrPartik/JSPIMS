<?php
include 'INCLUDES/userdetails.php';
include 'INCLUDES/header.php';
include 'INCLUDES/sidebar.php';

function requested($connect)
{
	$output = '';
	$result = mysqli_query($connect, "SELECT CONCAT(F_NAME, ' ',L_NAME) AS NAME FROM r_users WHERE USERID = 1");
	$row = mysqli_fetch_assoc($result);
	$output = $row["NAME"];
	return $output;
}
function batchNo($connect) 
{
	$output = '';

	$result = mysqli_query($connect, "SELECT MAX(BATCH_NO) FROM t_spare_requisition_summary");
	$row = mysqli_fetch_array($result);
	$sum_id = $row[0];
	$new_id = $sum_id + 1;
	$output .= $new_id;
	return $output;
}
function supplier_name($connect)
 {
    $output = '';

    $results = mysqli_query($connect, "SELECT sup.SUP_ID, sup.SUP_NAME FROM r_supplier as sup where sup.SUP_ID != 1");
    
    while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<option value="'.$row['SUP_ID'].'">'.$row['SUP_NAME'].'</option>';
        }
    return $output; 
}
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Stock Management</title>
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
	<link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>
	<!-- begin #page-loader -->
	<!-- end #page-loader -->
	
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
		<h1 class="page-header">Manage Stocks</h1>
		<!-- end page-header -->

		<!-- begin panel -->
		<div class="panel panel-inverse">
			<div class="panel-heading">
				<h4 class="panel-title">Purchase Request Form</h4>
			</div>
			<div class="panel-body" id="r_input">
				<div class="row" style="margin-left:5px">
					<div class="form-group m-r-10">
						<label>Request No.</label>
						<input type="text" id="bno" name="bno" class="form-control" value="<?php echo batchNo($connect);?>">
					</div>
					<div class="form-group m-r-10">
						<label>Date</label>
						<input type="text" id="currentdate" name="currentdate" class="form-control" value="<?php echo date('Y-m-d') ?>">
					</div>
					<div class="form-group m-r-10">
						<label>Request by:</label>
						<input type="text" id="currentdate" name="currentdate" class="form-control" value="<?php echo requested($connect) ?>">
					</div>
				</div>
				<div id="item_desc"></div>
				<div class="table-responsive">
					<table class="table table-bordered" id="crud_table">
						<tr>
							<th width="6%" hidden>b_no</th>
							<th width="10%" >SKU</th>
							<th width="30%">Item Name</th>
							<th width="5%">Quantity</th>
							<th width="30%">Supplier</th>
						</tr>
						<tr>
							<td contenteditable="true" class="item_batch" hidden><?php echo batchNo($connect)?></td>
							<td contenteditable="true" class="item_date" >SP-A-0001</td>
							<td class="item_name">Fanbelt (Plain) PKB/SP B71 5480/Evico</td>
							<td contenteditable="true" class="item_quan" type="number"></td>
							<td class="item_supplier">
								<select id="item_supplier" name="item_supplier" class="form-control m-r-10">
									<option value="" selected disabled></option>
									<?php echo supplier_name($connect)?>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div align="center">
					<button type="button" name="save" id="save" class="btn btn-grey">Cancel</button>
					<button type="button" name="save" id="save" class="btn btn-info">Save</button>
				</div>
			</div>
		</section>
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
