<?php
    include 'INCLUDES/userdetails.php';
    include 'INCLUDES/header.php';
    //include 'INCLUDES/O_sidebar.php';
    include 'INCLUDES/connect.php';

if (isset($_GET['batch_no'])) 
    {
        $bno = $_GET['batch_no'];
    }
function details($connect)
{
    $bno = $_GET['batch_no'];
    $output='';
    $results = mysqli_query($connect, "SELECT * FROM t_spare_requisition_summary AS RS INNER JOIN r_request_remarks as rr ON rr.REMARKS_ID = rs.REMARKS INNER JOIN r_request_status r ON r.STATUS_ID = RS.STATUS_REQ where BATCH_NO = $bno");
    while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Batch No.</label>';
            $output .= '<input type="text" id="batchnumber" name="batchnumber" class="form-control" disabled="true" value="'.$row['BATCH_NO'].'"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Date Requested</label>';
            $output .= '<input type="text" id="datereq" name="datereq" class="form-control" disabled="true" value="'.$row['DATE_REQUESTED'].'"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Date Revised</label>';
            $output .= '<input type="text" id="daterev" name="daterev" class="form-control" disabled="true" value="'.$row['DATE_REVISED'].'"></div>';
            $output .= '<div class="form-group col-md-3">';
            $output .= '<label>STATUS</label>';
            $output .= '<input type="text" id="status" name="status" class="form-control" disabled="true" value="'.$row['STATUS_VAL'].'"></div>';
        }
    return $output;
}
function show_requests($connect)
{   
    $bno = $_GET['batch_no'];
    $output = '';
    $results = mysqli_query($connect, "SELECT DISTINCT `STOCK_SUPPLIER`, SUP_NAME, REF_BATCH_NO FROM t_spare_requisition_old_stock INNER JOIN r_supplier ON r_supplier.SUP_ID = t_spare_requisition_old_stock.STOCK_SUPPLIER WHERE REF_BATCH_NO = $bno");
    
    while($row = mysqli_fetch_assoc($results))
        {
           
            $output .= '<div class="form-group col-md-3">';
            $output .= '<label>Supplier</label><input type="text" class="form-control" disabled="true" value="'.$row['SUP_NAME'].'"></div>'; 

            $output .= '<div class="row">';
            $output .= '<div class="table-responsive">';
            $output .= '<table class="table table-bordered" id="crud_table"><tr>';
            $output .= '<th width="30%">Item Name</th>';
            $output .= '<th width="5%">Quantity</th>';
            $output .= '<th width="10%">Unit</th>';
            $output .= '<th width="5%">Amount</th>';
            $results1 = mysqli_query($connect, "SELECT * from r_supplier r INNER JOIN t_spare_requisition_old_stock t ON r.SUP_ID = t.STOCK_SUPPLIER INNER JOIN t_spare_stocks s ON s.STOCK_ID = t.REF_STOCK_ID WHERE t.STOCK_SUPPLIER = $row[STOCK_SUPPLIER] AND t.REF_BATCH_NO = $row[REF_BATCH_NO]");
            while($row1 = mysqli_fetch_assoc($results1))
            {
            $output .= '<tr><td class="item_name">'.$row1['STOCK_NAME'].'</td>';
            $output .= '<td class="item_quan" type="number">'.$row1['QUANTITY'].'</td>';
            $output .= '<td class="item_unit" id="item_unit">'.$row1['STOCK_UNIT_TYPE'].'</td>';
            $output .= '<td class="item_unit" id="item_unit">10,000</td></tr>';
            } 
            $output .= '</table></div>';
            $output .= '</div>';   
        }                     
    return $output;
}
function purchase_details($connect)
{
    $bno = $_GET['batch_no'];
    $output='';
    $results = mysqli_query($connect, "SELECT * FROM `t_spare_requisition_purchased` p INNER JOIN r_purchase_status ps ON ps.P_STATUS_ID = p.PURCHASE_STATUS INNER JOIN r_accept_status ap ON ap.ACCEPT_STATUS_ID = p.PURCHASE_ACCEPT_STATUS where REF_BATCH_NO = $bno");
    while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Purchase No.:</label>';
            $output .= '<input type="text" id="batchnumber" name="batchnumber" class="form-control" disabled="true" value="'.$row['PURCHASE_ID'].'"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Purchase Date:</label>';
            $output .= '<input type="text" id="datereq" name="datereq" class="form-control" disabled="true" value="'.$row['DATE_PURCHASED'].'"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Purchase Status:</label>';
            $output .= '<input type="text" id="daterev" name="daterev" class="form-control" disabled="true" value="'.$row['P_STATUS_NAME'].'"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Date Delivered:</label>';
            $output .= '<input type="text" id="status" name="status" class="form-control" disabled="true" value="'.$row['DELIVERY_DATE'].'"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Accept Status:</label>';
            $output .= '<input type="text" id="status" name="status" class="form-control" disabled="true" value="'.$row['ACCEPT_STATUS_NAME'].'"></div>';
        }
    return $output;
}
function remarks($connect)
{
    $output = '';
    $results = mysqli_query($connect, "SELECT * FROM r_purchase_status");
    while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<option value="'.$row['P_STATUS_ID'].'">'.$row['P_STATUS_NAME'].'</option>';
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
    <link href="../assets/css/material/theme/red.css" rel="stylesheet" id="theme" />
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
        <div id="sidebar" class="sidebar" data-disable-slide-animation="true">
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
                    <li class="has-sub">
                        <a href="O_stocks.php">
                            <i class="fa fa-database"></i>
                            <span>Stocks</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="O_requests.php">
                            <i class="fa fa-upload"></i>
                            <span>Requests</span>
                        </a>
                    </li>
                    <li class="has-sub active">
                        <a href="O_purchased.php">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Purchased</span>
                        </a>
                    </li>
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div id="content" class="content">
            <!-- begin tab-pane -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-12">
                    <!-- begin nav-tabs -->
                    <ul class="nav nav-tabs" style="background-color:black;">
                        <li class="nav-items">
                            <a href="#ReqDetails" data-toggle="tab" class="nav-link active" style="color:white">
                                <span class="d-sm-none">Request Details</span>
                                <span class="d-sm-block d-none">Request Details</span>
                            </a>
                        </li>
                        <li class="nav-items">
                            <a href="#PurDetails" data-toggle="tab" class="nav-link" style="color:white">
                                <span class="d-sm-none">Purchase Status</span>
                                <span class="d-sm-block d-none">Purchase Status</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="panel tab-pane fade active show" id="ReqDetails">
                            <section class="panel">
                                <header class="panel-heading" style="background-color: gray; color: white">
                                    Request Details
                                    <span class="tools pull-right"><a class="fa fa-chevron-down" href="javascript:;"></a></span>
                                </header>
                                <div class="panel-body" id="r_input">
                                    <div class="row" style="margin-left:5px">
                                        
                                        <?php echo details($connect);?>
                                    </div>
                                    <div class="col-md-14">
                                        <div style="padding: 1px; margin-bottom: 10px; background-color: #757575;">
                                        </div>
                                    </div>
                                    <?php echo show_requests($connect);?>
                                </div>
                                <div class="col-md-12">
                                    <div style="padding: 1px; margin-bottom: 10px; background-color: #757575;"></div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="PurDetails">
                            <section class="panel">
                                <header class="panel-heading" style="background-color: gray; color: white">
                                    Purchase Details
                                    <span class="tools pull-right"><a class="fa fa-chevron-down" href="javascript:;"></a></span>
                                </header>
                                <div class="panel-body" id="r_input">
                                    <div class="row" style="margin-left:5px">
                                        
                                        <?php echo purchase_details($connect);?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div style="padding: 1px; margin-bottom: 10px; background-color: #757575;"></div>
                                </div>
                                </section>
                                <div class="row group" style="margin-left: 5px">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <select id="remarks" name="remarks" class="form-control m-r-10">
                                            <option value="" selected disabled></option>
                                            <?php echo remarks($connect);?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="button" name="changeremarks" id="changeremarks" href="javascript:;" class="btn btn-success">Change Remarks</button>
                                        <a type="button" href="O_purchased.php" name="return" id="return" class="btn btn-default">Return to Pending Requests</a>
                                    </div>
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

<script type="text/javascript">
        $('#changeremarks').click(function(e){
            e.preventDefault();
            var e = document.getElementById('remarks');
            var remarks = e.options[e.selectedIndex].value;
            var batch_no = document.getElementById('batchnumber').value;

            if (remarks == "")
            {
            }
            else
            {
                swal({
                        title: "Confirm Changes?",
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
                                    url: 'INCLUDES/O_update_purchase_status_changeremarks.php',
                                    data: {
                                        remarks:remarks,
                                        batch_no:batch_no
                                    },
                                    success: function(data) {
                                        
                                        swal("Remarks Updated! ", "Page will be reloaded.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'O_ReviewPurchased.php?batch_no='+ batch_no;
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
