<?php
	include 'INCLUDES/userdetails.php';
	include 'INCLUDES/header.php';
	include 'INCLUDES/U_sidebar.php';

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
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
                                <div class="panel-body" id="r_input">
                                <div class="row" style="margin-left:5px">
                                    <div class="form-group m-r-10">
                                        <label>Request No.</label>
                                        <input type="text" class="form-control" disabled="true">
                                    </div>
                                    <div class="form-group m-r-10">
                                        <label>Date</label>
                                        <input type="text" class="form-control" disabled="true">
                                    </div>
                                </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="crud_table">
                                         <tr>
                                          <th width="30%">Item Name</th>
                                          <th width="10%">Quantity</th>
                                          <th width="45%">Unit</th>
                                          <th width="10%">Price</th>
                                          <th width="5%"></th>
                                         </tr>
                                         <tr>
                                          <td contenteditable="true" class="item_name">
                                              <select id="supplier" class="form-control m-r-10">
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
                                          </td>
                                          <td contenteditable="true" class="item_code"></td>
                                          <td contenteditable="true" class="item_desc"></td>
                                          <td contenteditable="true" class="item_price"></td>
                                          <td></td>
                                         </tr>
                                        </table>
                                        <div align="right">
                                         <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
                                        </div>
                                        <div align="center">
                                         <button type="button" name="save" id="save" class="btn btn-info">Save</button>
                                        </div>
                                        <br />
                                       </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="AqPO">
                            Hello
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
    <script src="../assets/js/theme/default.min.js"></script>
    <script src="../assets/js/apps.min.js"></script>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='item_name'><select id='supplier' class='form-control m-r-10'><option value='' selected disabled></option><?php $supsql='SELECT * FROM r_supplier';$results = mysqli_query($connect, $supsql) or die('Bad Query: $sql');while($row = mysqli_fetch_assoc($results)){$supid = $row['SUP_ID'];$sup = $row['SUP_NAME'];?><option value='<?php echo '$supid'; ?>''><?php echo "$sup"; ?></option><?php } ?></select></td>";
   html_code += "<td contenteditable='true' class='item_code'></td>";
   html_code += "<td contenteditable='true' class='item_desc'></td>";
   html_code += "<td contenteditable='true' class='item_price' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var item_name = [];
  var item_code = [];
  var item_desc = [];
  var item_price = [];
  $('.item_name').each(function(){
   item_name.push($(this).text());
  });
  $('.item_code').each(function(){
   item_code.push($(this).text());
  });
  $('.item_desc').each(function(){
   item_desc.push($(this).text());
  });
  $('.item_price').each(function(){
   item_price.push($(this).text());
  });
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:{item_name:item_name, item_code:item_code, item_desc:item_desc, item_price:item_price},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });
 
 function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();
 
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
