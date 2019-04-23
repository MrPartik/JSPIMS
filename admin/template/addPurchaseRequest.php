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
            $output .= '<option value="'.$row['STOCK_KEY_UNIT'].'">'.$row['STOCK_Name'].'</option>';
        }
    return $output;
}

function stock_details($connect)
 {
    $output = '';

    $results = mysqli_query($connect, "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, sp.STOCK_NAME, sp.STOCK_MODEL, sp.STOCK_SIZE, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME  
            FROM t_spare_stocks AS sp 
            INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
            INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
            INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID ");
    
    while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<input type="text" value="'.$row['STOCK_MODEL'].'">';
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
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN RESPONSIVE TABLE STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END RESPONSIVE TABLE STYLE ================== -->
	<link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- ================== BEGIN PAGE CSS STYLE ================== -->
    <link href="../assets/plugins/morris/morris.css" rel="stylesheet" />
    <!-- ================== END PAGE CSS STYLE ================== -->

</head>
<body>
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
			<h1 class="page-header">Purchase Request</h1>
			<!-- end page-header -->
			<!-- end #header -->

			<!-- begin panel -->
             <div class="row">
                <!-- begin col-6 -->
                <div class="col-12">
                    <!-- begin nav-tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-items">
                            <a href="#AddIndiv" data-toggle="tab" class="nav-link active">
                                <span class="d-sm-none">Request for Old Stock</span>
                                <span class="d-sm-block d-none">Request for Old Stock</span>
                            </a>
                        </li>
                        <li class="nav-items">
                            <a href="#AqPO" data-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Request for New Stock</span>
                                <span class="d-sm-block d-none">Request for New Stock</span>
                            </a>
                        </li>
                    </ul>
                    <!-- end nav-tabs -->
                    <!-- begin tab-content -->
                    <div class="tab-content">
                        <!-- begin tab-pane -->
                        <div class="panel panel-inverse tab-pane fade active show" id="AddIndiv">

                            <section class="panel">
                                <header class="panel-heading" style="background-color: gray; color: white">
                                    Purchase Form
                                <span class="tools pull-right"><a class="fa fa-chevron-down" href="javascript:;"></a></span>
                                </header>
                                <div class="alert alert-danger m-b-0">
                                    <h5><i class="fa fa-info-circle"></i> Reminder</h5>
                                    <p>Only purchase multiple items of the same supplier.</p>
                                </div>
                                <div class="panel-body" id="r_input">
                                    <div class="adv-table">
                                        <table class="display table table-bordered table-striped">                                
                                            <tr>
                                                <td>                          
                                                    <form>
                                                        <div class="form-content">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p><button type="button" id="btnAdd" class="btn btn-primary">Add</button></p>
                                                                </div>
                                                            </div>
                                                             <?php  

                                                                 include('INCLUDES/connect.php');

                                                                {
                                                                    
                                                                $result = mysqli_query($connect, "SELECT MAX(SUM_ID) FROM t_spare_requisition_summary");
                                                                $row = mysqli_fetch_array($result);
                                                                $sum_id = $row[0];
                                                                $new_id = $sum_id + 1;

                                                            ?>
                                                            <div class="form-group">
                                                                <input type="" id="batch_id" value="<?php echo $new_id; ?>">
                                                            </div> <?php } ?>
                                                            <div class="form-group">
                                                                <input type="" id="currentdate" value="<?php echo date('Y-m-d') ?>">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div style="padding: 1px; margin-bottom: 10px; background-color: #E0E1E7;">                                                             
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row group">
                                                                <div class="col-md-2" id="input" >

                                                                </div>                                                        
                                                                <div class="col-md-5">
                                                                    <div class="form-group m-r-10">
                                                                       <label>Stock Name:</label>
                                                                       <select name="r_sku" id="r_sku" class="form-control m-r-10" style="margin-left:10px">
                                                                           <option value="" selected disabled></option>
                                                                           <?php echo stock_name($connect);?>
                                                                       </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Quantity</label>
                                                                        <input style="color: black; padding-right: 2px;" type="number" id="r_quantity" class="form-control" required="" minlength="3" min="1" max="100" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                    <label>Supplier</label>
                                                                    <div id="supplierName">
                                                                        <input class="form-control" disabled="true">
                                                                    </div>
                                                                    </div>
                                                                </div>   
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <button href="#supplierModel" class="btn btn-warning" id="supID" data-toggle="modal" data-id="'3'" style="margin-top: 23px;">View Supplier(s)</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <button style="display:none"type="button" class="btn btn-danger btnRemove" style="margin-top: 23px;">Remove</button>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <div style="padding: 1px; margin-bottom: 10px; background-color: #E0E1E7;">                                                 
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                        </div>  
                                                    </form>  
                                                        <button id="submitRequest" href="javascript:;" class="btn btn-success"> Submit</button>
                                                </td> 
                                            </tr>
                                        </table>
                                        </div>
                                        </div>
                        </div>
                    </div>
                </section>

                           </div>
                        </div>
                    </div>
                </div>
            </div>      
            
            <!--  
                M O D A LS
            --> 
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="supplierModel" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Here are the some supplier(s) suggested for your request:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel" style="padding:12px" id="supplierT">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
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
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../assets/plugins/morris/raphael.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/js/demo/chart-morris.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    
     <script>
        $(document).ready(function() {
           $('#r_sku').change(function(){
                var stock_id = $(this).val();
                $.ajax({
                    url:"load_req_stocks.php",
                    method:"POST",
                    data:{stock_id:stock_id},
                    success:function(data){
                        $('#input').html(data);
                    }
                });
           });
        });
    </script>
    <script>
        $(document).ready(function() {
           $('#r_sku').change(function(){
                var stock_id = $(this).val();
                $.ajax({
                    url:"load_req_supplier.php",
                    method:"POST",
                    data:{stock_id:stock_id},
                    success:function(data){
                        $('#supplierT').html(data);
                    }
                });
           });
        });
    </script>
<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=select]',function(){
            var id  = $(this).data('id');
            $.ajax({
                    url:"load_req_supplier_1.php",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        $('#supplierName').html(data);
                        $('#supplierModel').modal('toggle');
                    }
                }); 
      });
  });
</script>
<script type="text/javascript">
        $('#submitRequest').click(function(e){
            e.preventDefault();

            var e = document.getElementById('r_sku');
            var sku = e.options[e.selectedIndex].value;
            var batch_id = document.getElementById('batch_id').value;
            var date = document.getElementById('currentdate').value;
            //var sname = document.getElementById('r_name').value;
            var smodel = document.getElementById('r_model').value;
            //var size = document.getElementById('r_size').value;
            //var sbrand = document.getElementById('r_brand').value;
            //var sunit = document.getElementById('sunit').value;
            var quan = document.getElementById('r_quantity').value;
            //var sup = document.getElementById('r_supp');*/

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
                                    url: 'INCLUDES/addSuppliers.php',
                                    async: false,
                                    data: {
                                        sku:sku,
                                        batch_id:batch_id,
                                        currentdate:currentdate,
                                        //sname:sname,
                                        smodel: smodel,
                                        quan: quan,
                                        /*sbrand: sbrand,
                                        size: size,
                                        sunit: sunit,
                                        sup: sup*/
                                    },
                                    success: function(data) {

                                        swal("Stock Updated! ", "Page will be reloaded.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'reviewRequest.php';
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
            MorrisChart.init();
        });
    </script>
    <script>

        $('.form-content').multifield({
            section: '.group',
            btnAdd:'#btnAdd',
            btnRemove:'.btnRemove',
        });

        $(function(){
            $('select').on('change',function(){                        
                $('input[name=place]').val($(this).val());            
            });
        });

        $(function(){
            $('select').on('change',function(){                        
                $('input[name=reqperson]').val($(this).val());            
            });
        });

        $(function(){
            $('select').on('change',function(){                        
                $('input[name=asttypesss]').val($(this).val());            
            });
        });
	<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
			TableManageButtons.init();
		});
	</script>
</body>
</html>
