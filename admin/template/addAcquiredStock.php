<?php
	include 'INCLUDES/userdetails.php';
	include 'INCLUDES/header.php';
	include 'INCLUDES/sidebar.php';

$connect = mysqli_connect('localhost', 'root', '','jspims');

 function stock_name($connect)
 {
    $output = '';

    $results = mysqli_query($connect, "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME  
            FROM t_spare_stocks AS sp 
            INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
            INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
            INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID");
    
    while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<option value="'.$row['STOCK_ID'].'">'.$row['STOCK_Name'].'</option>';
        }
    return $output;
}
function stock_details($connect)
 {
    $output = '';

    $results = mysqli_query($connect, "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME  
            FROM t_spare_stocks AS sp 
            INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
            INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
            INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID");
    
    while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<input type="text" value="'.$row['STOCK_Name'].'">';
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
	<title>Color Admin | Blank Page</title>
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
    <link href="../assets/css/default/style.min.css" rel="stylesheet" />
    <link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
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
			<h1 class="page-header">Acquire Stock</h1>
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-12">
                    <!-- begin nav-tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-items">
                            <a href="#AddIndiv" data-toggle="tab" class="nav-link active">
                                <span class="d-sm-none">Add new stock</span>
                                <span class="d-sm-block d-none">Acquire new stock</span>
                            </a>
                        </li>
                        <li class="nav-items">
                            <a href="#AqPO" data-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Acquire from Purchase Order</span>
                                <span class="d-sm-block d-none">Acquire from Purchase Order</span>
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-tabs -->
                    <!-- begin tab-content -->
                    <div class="tab-content">
                        <!-- begin tab-pane -->
                        <div class="panel panel-inverse tab-pane fade active show" id="AddIndiv">
                           <div class="panel-body">  

                                <!--HIDDENFIELDS-->
                                <form class="form-inline">
                                <div id="hide" name="hide" class="form-group" style="display:none">
                                    <?php echo stock_details($connect);?>
                                </div>
                                        <div class="form-group m-r-10">
                                               <label>Date Acquired:</label>
                                                <input type="Date" id="aq_date" value="<?php echo date('Y-m-d') ?>"  max="<?php echo date('Y-m-d')?>" class="form-control"required style="margin-left:10px"/>
                                        </div>
                                        <div class="form-group m-r-10">
                                               <label>Supplier:</label>
                                               <select id="supplier" class="form-control m-r-10" style="margin-left:10px">
                                                   <option value="" selected disabled></option>
                                                   <?php
                                                   $supsql="SELECT * FROM r_supplier";
                                                   $results = mysqli_query($connect, $supsql) or die("Bad Query: $sql");
                                                            while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $supid = $row['SUP_ID'];
                                                                 $sup = $row['SUP_NAME'];
                                                    ?>
                                                    <option value="<?php echo "$supid"; ?>"><?php echo "$sup"; ?></option>
                                                    <?php } ?>
                                               </select>
                                               <br>
                                               <a data-toggle="modal" href="#rrr" class="btn btn-sm btn-warning m-r-5">New Supplier</a>
                                        </div>
                                        <br>
                                        <div class="form-group" style="padding-top:20px">
                                                <div class="form-group m-r-10">
                                                   <label>Stock Name:</label>
                                                   <select name="stockname" id="stockname" class="form-control m-r-10" style="margin-left:10px">
                                                       <option value="" selected disabled></option>
                                                       <?php echo stock_name($connect);?>
                                                   </select>
                                                </div>
                                                <div class="form-group" style="margin-left:10px">
                                                    Quantity: 
                                                    <input type="number" min="1" name="quantity" id="quantity" class="form-control" required style="margin-left:7px">
                                                </div>
                                    </form> 
                                                <button id="submita" href="javascript:;" class="btn btn-success">Save</button> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                        M O D A L S
                    -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="supplier" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add New Supplier</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="col-md-10">
                                                            <div class="col-md-12 form-group">
                                                                <label>Supplier Name:</label>
                                                                <input type="text" id="sup_name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="col-md-10 form-group">
                                                                <label>Supplier Address:</label>
                                                                <textarea id="sup_add" class="form-control" rows="3"></textarea> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="col-md-12 form-group">
                                                                <label>Supplier Contact No:</label>
                                                                <input type="text" id="sup_cont" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="col-md-12 form-group">
                                                                <label>Supplier Email:</label>
                                                                <input type="text" id="sup_email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>    
                                                        <div class="modal-footer">
                                                            <button id="submitSUP" href="javascript:;" class="btn btn-success">Save</button>
                                                            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                                                        </div>        
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirm" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                             <div class="modal-body">
                                                <form role="form" method="POST" action="INCLUDES/addSuppliers.php">
                                                    <div class="col-md-10">
                                                        <div class="col-md-12 form-group">
                                                            <label></label>
                                                            <input type="text" name="sup_name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                                                    </div>
                                                </form>            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="rrr" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Confirmation</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                  <form>                          
                                <div id="hide" name="hide" class="form-group">
                                    <?php echo stock_details($connect);?>
                                </div>

                                <input type="text" id="sku1"></form>
                                                                <div class="modal-footer">
                                                                    <button id="submit" href="javascript:;" class="btn btn-success">Save</button>
                                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                                                                </div>         
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                        <!-- end tab-pane -->
                        <!-- begin tab-pane -->
                        <div class="tab-pane fade" id="AqPO">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>
                                Nullam ac sapien justo. Nam augue mauris, malesuada non magna sed, feugiat blandit ligula. 
                                In tristique tincidunt purus id iaculis. Pellentesque volutpat tortor a mauris convallis, 
                                sit amet scelerisque lectus adipiscing.
                            </p>
                        </div>
                        <!-- end tab-pane -->
                    </div>
                    <!-- end tab-content -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
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
    <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="../assets/plugins/masked-input/masked-input.min.js"></script>
    <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="../assets/plugins/password-indicator/js/password-indicator.js"></script>
    <script src="../assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
    <script src="../assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/moment.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="../assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
    <script src="../assets/js/demo/form-plugins.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
    <script>
        $(document).ready(function() {
           $('#stockname').change(function(){
                var stock_id = $(this).val();
                $.ajax({
                    url:"load_stocks.php",
                    method:"POST",
                    data:{stock_id:stock_id},
                    success:function(data){
                        $('#hide').html(data);
                    }
                });
           });
        });
    </script>

    <script>
        $(document).ready(function() {
            App.init();
            FormPlugins.init();
        });
    </script>

	<script type="text/javascript">
        $('#submita').click(function(e){
            e.preventDefault();
            var sku = document.getElementById('sku').value;
            var date = document.getElementById('aq_date').value;
            var sname = document.getElementById('sname').value;
            var scon = document.getElementById('scon').value;
            var sbrand = document.getElementById('sbrand').value;
            var e = document.getElementById('stockname');
            var stockid = e.options[e.selectedIndex].value;
            var quan = document.getElementById('quantity').value;
            var sunit = document.getElementById('sunit').value;
            //var scon = document.getElementById('scon').value;
            var f = document.getElementById('supplier');
            var sup = f.options[f.selectedIndex].value;

            if (sku == "")
            {
            }
            else
            {
                swal({
                        title: "Confirm Details?",
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
                                    url: 'INCLUDES/addacquired.php',
                                    async: false,
                                    data: {
                                        sku:sku,
                                        date:date,
                                        sname:sname,
                                        stockid: stockid,
                                        quan: quan,
                                        sbrand: sbrand,
                                        scon: scon,
                                        sunit: sunit,
                                        sup: sup
                                    },
                                    success: function(data) {
                                        
                                        swal("Stock Updated! ", "Page will be reloaded.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'addAcquiredStock.php';
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

<script type="text/javascript">
        $('#submitSUP').click(function(e){
            e.preventDefault();

            var supname = document.getElementById('sup_name').value;
            var supadd = document.getElementById('sup_add').value;
            var supcont = document.getElementById('sup_cont').value;
            var supmail = document.getElementById('sup_email').value;
           // var mnameuser = document.getElementById('mname').value;
            //var lnameuser = document.getElementById('lname').value;
            //var u_username = document.getElementById('u_name').value;
           // var u_pass = document.getElementById('defpass').value;
            if (supname == "")
            {
                if (document.getElementById('supname').options[e.selectedIndex].value == '')
                {
                    document.getElementById('supname').options[0].innerText = "Please select";
                    document.getElementById('supname').focus();
                    document.getElementById('supname').style.borderColor = "#B94A48";
                    document.getElementById('supname').style.color = "#B94A48";
                }
            }
            else
            {
                swal({
                        title: "Add New Supplier?",
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
                                    url: 'INCLUDES/addSuppliers.php',
                                    async: false,
                                    data: {
                                        supname: supname,
                                        supadd: supadd,
                                        supcont: supcont,
                                        supmail: supmail

                                        /*_acctype: get,
                                        _mname: mnameuser,
                                        _lname: lnameuser,
                                        _username: u_username,
                                        _defpass: u_pass*/
                                    },
                                    success: function(data) {
                                        

                                        swal("Stock Updated! ", "Page will be reloaded.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'acquired.php';
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
<script type="text/javascript">
        $('#TRY').click(function(e){
            e.preventDefault();

            var supname = document.getElementById('sup_name').value;
            var supadd = document.getElementById('sup_add').value;
            var supcont = document.getElementById('sup_cont').value;
            var supmail = document.getElementById('sup_email').value;
           // var mnameuser = document.getElementById('mname').value;
            //var lnameuser = document.getElementById('lname').value;
            //var u_username = document.getElementById('u_name').value;
           // var u_pass = document.getElementById('defpass').value;
            if (supname == "")
            {
                if (document.getElementById('supname').options[e.selectedIndex].value == '')
                {
                    document.getElementById('supname').options[0].innerText = "Please select";
                    document.getElementById('supname').focus();
                    document.getElementById('supname').style.borderColor = "#B94A48";
                    document.getElementById('supname').style.color = "#B94A48";
                }
            }
            else
            {
                swal({
                        title: "Add New Supplier?",
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
                                    url: 'INCLUDES/addSuppliers.php',
                                    async: false,
                                    data: {
                                        supname: supname,
                                        supadd: supadd,
                                        supcont: supcont,
                                        supmail: supmail

                                        /*_acctype: get,
                                        _mname: mnameuser,
                                        _lname: lnameuser,
                                        _username: u_username,
                                        _defpass: u_pass*/
                                    },
                                    success: function(data) {
                                        

                                        swal("Stock Updated! ", "Page will be reloaded.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'addAcquiredStock.php';
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
