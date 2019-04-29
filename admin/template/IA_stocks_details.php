<?php
    include 'INCLUDES/userdetails.php';
    include 'INCLUDES/header.php';
    include 'INCLUDES/sidebar.php';

function details($connect)
{
    $output='';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Stock Keeping Unit</label>';
            $output .= '<input type="text" id="batchnumber" name="batchnumber" class="form-control" value="SP-A-0001"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Stock Name</label>';
            $output .= '<input type="text" id="datereq" name="datereq" class="form-control" value=" 
Fanbelt (Plain) PKB/SP B71"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Stock Brand</label>';
            $output .= '<input type="text" id="daterev" name="daterev" class="form-control" value="Bando"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Unit Type</label>';
            $output .= '<input type="text" id="status" name="status" class="form-control" value="5480/Evico"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Stock Quantity</label>';
            $output .= '<input type="text" id="remarkss" name="remarkss" class="form-control" value="10"></div>';
            $output .= '<div class="form-group m-r-10">';
            $output .= '<label>Stock Level Status</label>';
            $output .= '<input type="text" id="remarkss" name="remarkss" class="form-control" value="CRITICAL" style="background-color:red"></div>';
        
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
                    <h4 class="panel-title">Spare Parts Inventory</h4>
                </div>
                <div class="panel-body" id="r_input">
                        <div class="row" style="margin-left:5px">
                            
                            <?php echo details($connect);?>
                        </div>
                <div class="panel-body">
                        <table id="data-table-buttons" class="table table-striped table-bordered">  
                                <thead>
                                    <tr>
                                        <th hidden></th>
                                        <th class="text-nowrap">AQ No.</th>
                                        <th class="text-nowrap">Incharge of Acquisition</th>
                                        <th class="text-nowrap">Date Acquired</th>
                                        <th class="text-nowrap">Mode of Acquisition</th>
                                        <th class="text-nowrap">Supplier</th>
                                        <th class="text-nowrap">Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--<tbody>
                                <?php 
                                   /* $stock= 
                                    mysqli_query($connect, "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, CONCAT(sp.STOCK_CRITICAL_LEVEL,' ', qu.R_QU_NAME,' per ', sl.SL_NAME) AS CRITICAL , sup.SUP_NAME  
                                                                    FROM t_spare_stocks AS sp 
                                                                    INNER JOIN r_shelf_life sl ON sl.SL_ID = sp.STOCK_SHELF_LIFE 
                                                                    INNER JOIN r_quantity_unit_type qu
                                                                    ON qu.R_QU_ID = sp.STOCK_QUANTITY_UNIT_TYPE
                                                                    INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
                                                                    INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
                                                                    INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID"); 
                                    while ($row=mysqli_fetch_assoc($stock)) {
                                        $sid = $row["STOCK_ID"];
                                        $sku = $row["STOCK_KEY_UNIT"];
                                        $sname = $row["STOCK_Name"];
                                        $sut = $row["UNIT_TYPE"];
                                        $scon = $row["CON_NAME"];
                                        $squa = $row["STOCK_QUANTITY"];
                                        $scl = $row["CRITICAL"];
*/                                
                                ?> -->
                                    <tr class="odd gradeX">
                                        <td hidden></td>
                                        <td>03</td>
                                        <td>Cecilia Violago</td>
                                        <td>2019-04-12</td>
                                        <td>Purchase Order</td>
                                        <td>Jecara</td>
                                        <td>2</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td hidden></td>
                                        <td>02</td>
                                        <td>Cecilia Violago</td>
                                        <td>2019-04-10</td>
                                        <td>Purchase Order</td>
                                        <td>Jecara</td>
                                        <td>7</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td hidden></td>
                                        <td>01</td>
                                        <td>Cecilia Violago</td>
                                        <td>2019-04-05</td>
                                        <td>Purchase Order</td>
                                        <td>Miguel</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
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
