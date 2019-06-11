<?php
	include 'INCLUDES/userdetails.php';
	//include 'INCLUDES/sidebar.php';
	include 'INCLUDES/header.php';


?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">

<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>JSPIMS | Dashboard</title>
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
	<!-- ================== BEGIN RESPONSIVE TABLE STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END RESPONSIVE TABLE STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
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
          <li class="has-sub active">
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
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">

		<div id="content" class="content">
			<div class="row">
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-red-transparent-7">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			        	<div class="stats-content">
			        		<?php
			        			$query = "SELECT count(STOCK_ID) AS stock FROM t_spare_stocks"; 
			        			$exec = mysqli_query($connect, $query);
			        			while ($row = mysqli_fetch_assoc($exec)) {
			        				$acadyr = $row['stock'];
			        			}
			        		 ?>
							<div class="stats-title">TOTAL SPARE PARTS</div>
							<div class="stats-number"><?php echo $acadyr; ?></div>
                        </div>
			        </div>
			    </div>
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-orange-transparent-7">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			        	<div class="stats-content">
			        		<?php
			        			$query = "SELECT count(PURCHASE_ID) AS NUM FROM t_spare_requisition_purchased"; 
			        			$exec = mysqli_query($connect, $query);
			        			while ($row = mysqli_fetch_assoc($exec)) {
			        				$acadyr = $row['NUM'];
			        			}
			        		 ?>
							<div class="stats-title">TOTAL PURCHASE ORDERS</div>
							<div class="stats-number"><?php echo $acadyr; ?></div>
                        </div>
			        </div>
			    </div>
			    
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-yellow-transparent-7">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			        	<div class="stats-content">
			        		<?php
			        			$query = "SELECT count(SUP_ID) AS NUM FROM r_supplier"; 
			        			$exec = mysqli_query($connect, $query);
			        			while ($row = mysqli_fetch_assoc($exec)) {
			        				$acadyr = $row['NUM'];
			        			}
			        		 ?>
							<div class="stats-title">TOTAL NUMBER OF SUPPLIERS</div>
							<div class="stats-number"><?php echo $acadyr; ?></div>
                        </div>
			        </div>
			    </div>
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-green-transparent-7">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			        	<div class="stats-content">
			        		<?php
			        			$query = "SELECT count(REQ_ID) AS NUM FROM t_spare_requisition_old_stock"; 
			        			$exec = mysqli_query($connect, $query);
			        			while ($row = mysqli_fetch_assoc($exec)) {
			        				$acadyr = $row['NUM'];
			        			}
			        		 ?>
							<div class="stats-title">PENDING REQUESTS</div>
							<div class="stats-number"><?php echo $acadyr; ?></div>
                        </div>
			        </div>
			    </div>
			 </div>

				<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title"></h4>
				</div>
			

			<div class="panel-body">
				<div id="this-container2">
				</div>
			</div>
    </div>
			

			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title"></h4>
				</div>
			<div class="panel-body">
        <div id="this-container"></div>
			</div>
    </div>

      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title"></h4>
        </div>
			<div class="panel-body">
				<?php  $lastline = exec('C:\\"Program Files"\\R\\R-3.5.3\\bin\\Rscript.exe C:\xampp\htdocs\myscript_test.R', $print);?>
				<img style="width: auto;" src="../assets/img/user/animation.gif"><img style="width: auto;" src="<?php echo 'cluster2.png'?>">
				
			</div>
        </div>


        <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title"></h4>
        </div>
      <div class="panel-body">


        <div class="note note-warning note-with-right-icon" style="padding: -5000px;">
          <div class="note-icon"><i class="fa fa-lightbulb"></i></div>
          <div class="note-content text-right">
            <h4><b>Supplier Recommender Feature!</b></h4>
            <p>Suppliers are ranked from the fastest delivery perfomance to average delivering service. Predictive analysis is utilized to help you in supplier selection.</p>
          </div>
        </div>
        <center><h4><span class="lead semi-bold">Recommended Suppliers</span></h4></center>

				<?php
					$json ="";
          //var_dump($print);
					foreach($print as $obj){
						$json .= $obj;
					}

				?>	<table id="recommendedSupplier" class="table">  
                                <thead>
                                    <tr> 
                                        <th class="text-nowrap"><span class="label label-warning">Supplier</span></th>
                                        <th class="text-nowrap"><span class="label label-warning">Ficed Delivery Days</span></th>
                                        <th class="text-nowrap"><span class="label label-warning">Actual Delivery Days</span></th>
                                        <th class="text-nowrap"><span class="label label-warning">Predicted Value</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                /*if (is_array($json)) {echo "array";} else if(is_array($json) == false) echo "not array";
                                $json2 =json_encode($json,TRUE); */
                                foreach(json_decode($json,TRUE) as $item){
						?>
							<tr class="default">

								<td><?php echo $item['SUP_NAME']?></td>
                <td><?php echo $item['FIXED_DEL_DAYS']?></td>
								<td><?php echo $item['ACTUAL_DELIVERY_DAYS']?></td>
								<td><?php echo $item['Excpected Days of Deliver']?></td>
							
                                    </tr>
						<?php
					} 
                                    ?>
                                </tbody>
                            </table>
                    </div>

                   

			</div>
    </div>
      </div>
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
	<!-- ================== BEGIN RESPONSIVE TABLE JS ================== -->
	<!-- ================== END RESPONSIVE TABLE JS ================== -->
	<script src="../assets/js/sweetalert/sweetalert.min.js"></script>

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/highlight/highlight.common.js"></script>
	<script src="../assets/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
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

	<script src="../assets/hcharts/highcharts.js"></script>
	<script src="../assets/hcharts/modules/series-label.js"></script>
	<script src="../assets/hcharts/modules/exporting.js"></script>
	<script src="../assets/hcharts/modules/export-data.js"></script>
	<script src="../assets/hcharts/modules/data.js"></script>
	<script src="../assets/hcharts/modules/drilldown.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	

</body>
</html>

<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
      $('#recommendedSupplier').DataTable({
            dom: 'Bfrtip',
            buttons: [
                { extend: 'copy', className: 'btn-sm' },
                { extend: 'csv', className: 'btn-sm' },
                { extend: 'excel', className: 'btn-sm' },
                { extend: 'pdf', className: 'btn-sm' },
                { extend: 'print', className: 'btn-sm' }
            ],
            responsive: true
            ,"ordering": false
        });
		});
					Highcharts.chart('this-container', {
						    chart: {
						        type: 'bar',
						        // inverted: true
						    },
						    title: {
						        text: 'Stocks per Unit Type'
						    },
						    subtitle: {
						        text: 'Jayross Spare Parts Inventory Management System'
						    },
						    xAxis: {
						        type: 'category'
						    },
						    yAxis: {
						        title: {
						            text: 'Total Item Quantity'
						        }

						    },
						    legend: {
						        enabled: false
						    },
						    plotOptions: {
						        series: {
						            borderWidth: 0,
						            dataLabels: {
						                enabled: true,
						                format: '{point.y:.1f}%'
						            }
						        }
						    },

						    tooltip: {
						        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
						        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
						    },

						    "series": [
						        {
						            "name": "Year",
						            "colorByPoint": true,
						            "data": [
						            <?php ///count(distinct c.companyname)
							               $tablesql = "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE,ut.UNIT_ID, con.CON_NAME, sp.STOCK_QUANTITY, CONCAT(sp.STOCK_CRITICAL_LEVEL,' ', qu.R_QU_NAME,' per ', sl.SL_NAME) AS CRITICAL , sup.SUP_NAME, sp.STOCK_CRITICAL_LEVEL  
                                                                    FROM t_spare_stocks AS sp 
                                                                    INNER JOIN r_shelf_life sl ON sl.SL_ID = sp.STOCK_SHELF_LIFE 
                                                                    INNER JOIN r_quantity_unit_type qu
                                                                    ON qu.R_QU_ID = sp.STOCK_QUANTITY_UNIT_TYPE
                                                                    INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
                                                                    INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
                                                                    INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID
                                                                    ";
							                $tableresult = mysqli_query($connect, $tablesql) or die(mysqli_error($connect));

							 				while ($row = mysqli_fetch_assoc($tableresult)) {
							 					$sid = $row["STOCK_ID"];
		                                        $sku = $row["STOCK_KEY_UNIT"];
		                                        $sname = $row["STOCK_Name"];
		                                        $sut = $row["UNIT_TYPE"];
		                                        $sutid = $row["UNIT_ID"];
		                                        $scon = $row["CON_NAME"];
		                                        $squa = $row["STOCK_QUANTITY"];
		                                        $scl = $row["CRITICAL"];
		                                        $crt = $row["STOCK_CRITICAL_LEVEL"];
							                ?> 
							 				{
							 					"name": "<?php echo $sut;?>",
							 					"y":
							 					<?php 
							 						$tablesql1 ="SELECT COUNT(sp.STOCK_ID) as count1, ut.UNIT_ID as utid  
                                                                    FROM t_spare_stocks AS sp 
                                                                    INNER JOIN r_shelf_life sl ON sl.SL_ID = sp.STOCK_SHELF_LIFE 
                                                                    INNER JOIN r_quantity_unit_type qu
                                                                    ON qu.R_QU_ID = sp.STOCK_QUANTITY_UNIT_TYPE
                                                                    INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
                                                                    INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
                                                                    INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID WHERE ut.UNIT_ID = '$sutid'
                                                                     ";
							 						$tableresult1 = mysqli_query($connect, $tablesql1) or die(mysqli_error($connect)); 
							 						while ($row1 = mysqli_fetch_assoc($tableresult1)) {
							 					?>
							 					<?php echo $row1['count1'] ?>,
							 					<?php }?> 
                    							"drilldown": "<?php echo $sut;?>"
							 				},
							 				<?php } ?>
						                
						            ]
						        }
						    ],
						    "drilldown": {
						        "series": [
						            	<?php  $tablesql = "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE,ut.UNIT_ID, con.CON_NAME, sp.STOCK_QUANTITY, CONCAT(sp.STOCK_CRITICAL_LEVEL,' ', qu.R_QU_NAME,' per ', sl.SL_NAME) AS CRITICAL , sup.SUP_NAME, sp.STOCK_CRITICAL_LEVEL  
                                                                    FROM t_spare_stocks AS sp 
                                                                    INNER JOIN r_shelf_life sl ON sl.SL_ID = sp.STOCK_SHELF_LIFE 
                                                                    INNER JOIN r_quantity_unit_type qu
                                                                    ON qu.R_QU_ID = sp.STOCK_QUANTITY_UNIT_TYPE
                                                                    INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
                                                                    INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
                                                                    INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID  ";
							                $tableresult = mysqli_query($connect, $tablesql) or die(mysqli_error($connect));

							 				while ($row = mysqli_fetch_assoc($tableresult)) {
							 					$sid = $row["STOCK_ID"];
		                                        $sku = $row["STOCK_KEY_UNIT"];
		                                        $sname = $row["STOCK_Name"];
		                                        $sut = $row["UNIT_TYPE"];
		                                        $sutid = $row["UNIT_ID"];
		                                        $scon = $row["CON_NAME"];
		                                        $squa = $row["STOCK_QUANTITY"];
		                                        $scl = $row["CRITICAL"];
		                                        $crt = $row["STOCK_CRITICAL_LEVEL"];
							 					//echo 'programID'. $pid.'program'. $program;
							 					//echo $yearid;
							 					// SELECT PROG_NAME AS qtt2, PROG_ID AS qtt2id FROM PROGRAM
							 					//AND B.PROG_ID = $program 
							                ?> 
							 				{
								                "name": "<?php echo $sut;?>", 
								                "colorByPoint": true,
								                "id": "<?php echo $sut;?>", 
								                
								                 	<?php 
								                 		$tablesql2 ="SELECT count(sp.STOCK_ID) as count2, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, CONCAT(sp.STOCK_CRITICAL_LEVEL,' ', qu.R_QU_NAME,' per ', sl.SL_NAME) AS CRITICAL , sup.SUP_NAME, sp.STOCK_CRITICAL_LEVEL  
                                                                    FROM t_spare_stocks AS sp 
                                                                    INNER JOIN r_shelf_life sl ON sl.SL_ID = sp.STOCK_SHELF_LIFE 
                                                                    INNER JOIN r_quantity_unit_type qu
                                                                    ON qu.R_QU_ID = sp.STOCK_QUANTITY_UNIT_TYPE
                                                                    INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
                                                                    INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
                                                                    INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID  WHERE ut.UNIT_ID ='$sutid'
                                                                    group by sp.STOCK_NAME
                                                                      ";
								                 		$tableresult2 = mysqli_query($connect, $tablesql2) or die(mysqli_error($connect));
								                 		
								                 	?> "data": [
								                    <?php	while ($row2 = mysqli_fetch_assoc($tableresult2)) { ?>
								                    [ 
								                        "<?php echo $row2['SUP_NAME']?>" ,
								                        <?php echo $row2['count2']?>,
								                    ],<?php } ?>
								                     
								                    
								                ]
								               
								            },

						            <?php }?> 
						          
						            //dito lalagay second level drilldown
						            {
						            	<?php 
								                 		$tablesql5 ="SELECT sp.STOCK_ID, count(sp.STOCK_ID) as count2, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, CONCAT(sp.STOCK_CRITICAL_LEVEL,' ', qu.R_QU_NAME,' per ', sl.SL_NAME) AS CRITICAL , sup.SUP_NAME, sp.STOCK_CRITICAL_LEVEL  
                                                                    FROM t_spare_stocks AS sp 
                                                                    INNER JOIN r_shelf_life sl ON sl.SL_ID = sp.STOCK_SHELF_LIFE 
                                                                    INNER JOIN r_quantity_unit_type qu
                                                                    ON qu.R_QU_ID = sp.STOCK_QUANTITY_UNIT_TYPE
                                                                    INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
                                                                    INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
                                                                    INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID
                                                                    group by sp.STOCK_NAME
                                                                      ";
								                 		$tableresult5 = mysqli_query($connect, $tablesql5) or die(mysqli_error($connect));
								                 		
								                 	?> 
								                    <?php	while ($row5 = mysqli_fetch_assoc($tableresult5)) { $sid = $row5["STOCK_ID"]; ?>

						                "id": '<?php echo $row5['STOCK_Name']?>',
						                <?php 
								                 		$tablesql2 ="SELECT sp.STOCK_ID, count(sp.STOCK_ID) as count2,sup.SUP_NAME, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, CONCAT(sp.STOCK_CRITICAL_LEVEL,' ', qu.R_QU_NAME,' per ', sl.SL_NAME) AS CRITICAL , sup.SUP_NAME, sp.STOCK_CRITICAL_LEVEL  
                                                                    FROM t_spare_stocks AS sp 
                                                                    INNER JOIN r_shelf_life sl ON sl.SL_ID = sp.STOCK_SHELF_LIFE 
                                                                    INNER JOIN r_quantity_unit_type qu
                                                                    ON qu.R_QU_ID = sp.STOCK_QUANTITY_UNIT_TYPE
                                                                    INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
                                                                    INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
                                                                    INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID  WHERE sp.STOCK_ID ='$sid'
                                                                    group by sup.SUP_NAME
                                                                      ";
								                 		$tableresult2 = mysqli_query($connect, $tablesql2) or die(mysqli_error($connect));
								                 		
								                 	?> "data": [
								                    <?php	while ($row2 = mysqli_fetch_assoc($tableresult2)) { ?>
								                    [ 
								                        "<?php echo $row2['SUP_NAME']?>",
								                        <?php echo $row2['count2']?>,
								                    ],<?php } ?>
								                     
								                    
								                ]},{
								                  <?php }?> 
								                }
						            
						        ]
						    }
						});
	</script>

  <script>
    $(document).ready(function() {
    });



            // Create the chart
            Highcharts.chart('this-container2', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Number of Purchase Orders Per Year'
                },
                subtitle: {
                    text: 'Jayross SPIMS'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Total'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                "series": [
                    {
                        "name": "Year",
                        "colorByPoint": true,
                        "data": [
                        <?php ///count(distinct c.companyname)
                             $tablesql = "SELECT ACADYR as qttid, acadyr_name as qtt from acadyr WHERE acadyr IN (SELECT ACADYR FROM acadyr)";
                              $tableresult = mysqli_query($connect, $tablesql) or die(mysqli_error($connect));

                      while ($row = mysqli_fetch_assoc($tableresult)) {
                        $year = $row['qtt'];
                        $yearid = $row['qttid'];
                              ?> 
                      {
                        "name": "<?php echo $year;?>",
                        "y":
                        <?php 
                          $tablesql1 ="SELECT COUNT(APP_ID) as APPLY FROM APPLICANT WHERE ACADYR_FK = '$yearid' ";
                          $tableresult1 = mysqli_query($connect, $tablesql1) or die(mysqli_error($connect)); 
                          while ($row1 = mysqli_fetch_assoc($tableresult1)) {
                        ?>
                        <?php echo $row1['APPLY'] ?>,
                        <?php }?> 
                                  "drilldown": "<?php echo $year;?>"
                      },
                      <?php } ?>
                            
                        ]
                    }
                ],
                "drilldown": {
                    "series": [
                          <?php  $tablesql = "SELECT DISTINCT ACADYR_NAME qtt, ACADYR AS qttid, C.PROG_NAME AS qtt2, C.PROG_ID AS qtt2id FROM ACADYR AS A INNER JOIN APPLICANT AS B ON B.ACADYR_FK = A.ACADYR INNER JOIN PROGRAM AS C ON B.APP_FIRST_FK = C.PROG_ID ";
                              $tableresult = mysqli_query($connect, $tablesql) or die(mysqli_error($connect));

                      while ($row = mysqli_fetch_assoc($tableresult)) {
                        $year = $row['qtt'];
                        $yearid = $row['qttid'];
                        $program = $row['qtt2'];
                        $pid = $row['qtt2id'];
                        //echo 'programID'. $pid.'program'. $program;
                        //echo $yearid;
                        // SELECT PROG_NAME AS qtt2, PROG_ID AS qtt2id FROM PROGRAM
                        //AND B.PROG_ID = $program 
                              ?> 
                      {
                                "name": "<?php echo $year;?>", 
                                "colorByPoint": true,
                                "id": "<?php echo $year;?>", 
                                
                                  <?php 
                                    $tablesql2 ="SELECT DISTINCT B.PROG_NAME AS APP, COUNT(A.APP_ID) AS COUNT from APPLICANT AS A INNER JOIN PROGRAM AS B ON A.APP_FIRST_FK = B.PROG_ID WHERE A.ACADYR_FK = '$yearid'  ";
                                    $tableresult2 = mysqli_query($connect, $tablesql2) or die(mysqli_error($connect));
                                    
                                  ?> "data": [
                                    [ <?php while ($row2 = mysqli_fetch_assoc($tableresult2)) { ?>
                                        "<?php echo $row2['APP']?>",
                                        <?php echo $row2['COUNT']
                                          ;} ?>
                                    ],
                                     
                                    
                                ]
                               
                            },
                        <?php }?> 
                    ]
                }
            });
  </script>
