<?php
    include 'INCLUDES/userdetails.php';
    include 'INCLUDES/header.php';
    include 'INCLUDES/sidebar.php';
    include 'INCLUDES/connect.php';

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

    <link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body><br/><br/><br/>   
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
                                        <input type="text" id="bno" name="bno" class="form-control" disabled="true" value="<?php echo batchNo($connect);?>">
                                    </div>
                                    <div class="form-group m-r-10">
                                        <label>Date</label>
                                        <input type="text" id="currentdate" name="currentdate" class="form-control" disabled="true" value="<?php echo date('Y-m-d') ?>">
                                    </div>
                                    <div class="form-group m-r-10">
                                        <label>Request by:</label>
                                        <input type="text" id="currentdate" name="currentdate" class="form-control" disabled="true" value="<?php echo requested($connect) ?>">
                                    </div>
                                </div>
                                <div id="item_desc"></div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="crud_table">
                                         <tr>
                                          <th width="6%" hidden>b_no</th>
                                          <th width="6%" hidden>date</th>
                                          <th width="30%">Item Name</th>
                                          <th width="5%">Quantity</th>
                                          <th width="30%">Supplier</th>
                                          <th width="5%"></th>
                                         </tr>
                                         <tr>
                                          <td contenteditable="true" class="item_batch" hidden><?php echo batchNo($connect)?></td>
                                          <td contenteditable="true" class="item_date" hidden><?php echo date('Y-m-d') ?></td>
                                          <td class="item_name">
                                              <select id="stockname" name="stockname" class="form-control m-r-10">
                                                   <option value="" selected disabled></option>
                                                   <?php echo stock_name($connect);?>
                                               </select>
                                          </td>
                                          <td contenteditable="true" class="item_quan" type="number"></td>
                                          <td class="item_supplier">
                                            <select id="item_supplier" name="item_supplier" class="form-control m-r-10">
                                                   <option value="" selected disabled></option>
                                                   <?php echo supplier_name($connect);?>
                                               </select>
                                          </td>
                                          <td></td>
                                         </tr>
                                        </table>
                                      </div>
                                        <div align="right">
                                         <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
                                        </div>
                                        <div align="center">
                                         <button type="button" name="save" id="save" class="btn btn-info">Save</button>
                                        </div>
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
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="supplierModel_1" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Here are the some supplier(s) suggested for your request:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel" style="padding:12px" id="supplierY">
                                                
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

    <script src="../assets/js/sweetalert/sweetalert.min.js"></script>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code = "<td class='item_batch' hidden><?php $result = mysqli_query($connect, 'SELECT MAX(BATCH_NO) FROM t_spare_requisition_summary'); $row = mysqli_fetch_array($result); $sum_id = $row[0]; $new_id = $sum_id + 1; echo "$new_id"?></td>";
   html_code += "<td contenteditable='true' class='item_date'hidden><?php echo date('Y-m-d') ?></td>";
   html_code += "<td class='item_name'><select id='stock_name' class='form-control m-r-10'><option value='' selected disabled></option><?php $results = mysqli_query($connect, 'SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(" " , CONCAT_WS(" ", sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME FROM t_spare_stocks AS sp INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID'); while($row = mysqli_fetch_assoc($results)){$stockid = $row['STOCK_ID'];$stockname = $row['STOCK_Name'];?><option value='<?php echo "$stockid"; ?>''><?php echo "$stockname"; ?></option><?php } ?></select></td>";
   html_code += "<td contenteditable='true' class='item_quan'></td>";
   html_code += "<td class='item_supplier'><select id='item_supplier' class='form-control m-r-10'><option value='' selected disabled></option><?php $results = mysqli_query($connect, 'SELECT sup.SUP_ID, sup.SUP_NAME FROM r_supplier as sup where sup.SUP_ID != 1'); while($row = mysqli_fetch_assoc($results)){$supid = $row['SUP_ID'];$supname = $row['SUP_NAME'];?><option value='<?php echo "$supid"; ?>''><?php echo "$supname"; ?></option><?php } ?></select></td>";
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
  var item_quan = [];
  var item_supplier = [];
  var item_batch = [];
  var item_date = [];
  var bno = document.getElementById('bno').value;
  $('.item_name option:selected').each(function(){
   item_name.push($(this).val());
  });
  $('.item_quan').each(function(){
   item_quan.push($(this).text());
  });
  $('.item_supplier option:selected').each(function(){
   item_supplier.push($(this).val());
  });
  $('.item_batch').each(function(){
   item_batch.push($(this).text());
  });
  $('.item_date').each(function(){
   item_date.push($(this).text());
  });
  if (item_name == "")
    {
    }
  else
    {
  swal({
        title: "Confirm Request Details?",
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
                    url:"INCLUDES/IA_insert_request.php",
                    method:"POST",
                    data:{
                        item_name:item_name, 
                        item_quan:item_quan, 
                        item_supplier:item_supplier,
                        item_batch:item_batch,
                        item_date:item_date, 
                        bno:bno
                    },
            success:function(data)
            { 
            swal("Requested! ", "Page will be reloaded.", "success");
            setTimeout(function() 
            {   
                $("td[contentEditable='true']").text("");
            for(var i=2; i<= count; i++)
             {
                 $('tr#'+i+'').remove();
             }
                window.location = 'IA_Requestadded.php?batch_no='+ bno;

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
            swal("Cancelled", "Request is not created.", "error");
        }
    });
    }
 });
});
</script>
<script>
$(".item_quan").keypress(function(event) {
    $(".item_quan").keypress(function(e) {
    if (isNaN(String.fromCharCode(e.which))) e.preventDefault();
    });
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
