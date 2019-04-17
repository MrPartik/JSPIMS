<?php

$connect = mysqli_connect('localhost', 'root', '','jspims');

$output='';

if (isset($_POST["stock_id"])) {
	if ($_POST["stock_id"] != '') {
		    
		$sql = "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, sp.STOCK_NAME, sp.STOCK_MODEL, sp.STOCK_SIZE, sp.STOCK_BRAND, ut.UNIT_TYPE, ut.UNIT_ID, con.CON_ID, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME  
            FROM t_spare_stocks AS sp 
            INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
            INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
            INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID
            WHERE sp.STOCK_ID = '".$_POST["stock_id"]."'";
	}
	else {
		$sql = "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME  
            FROM t_spare_stocks AS sp 
            INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
            INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
            INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID";
	}
	$results = mysqli_query($connect, $sql);

	 while($row = mysqli_fetch_assoc($results))
        { 	
        	$output .= '<div class="form-group"><label>SKU</label><input maxlength="150" type="text" id="r_sku" class="form-control" required="" style="color: black;" value="'.$row['STOCK_KEY_UNIT'].'"></div>';
        	$output .= '<div class="form-group"><label>Name</label><input maxlength="150" type="text" id="r_name" class="form-control" required="" style="color: black;" value="'.$row['STOCK_NAME'].'"></div>';
            $output .= '<div class="form-group"><label>Model</label><input maxlength="150" type="text" id="r_model" class="form-control" required="" style="color: black;" value="'.$row['STOCK_MODEL'].'"></div>';
            $output .= '<div class="form-group"><label>SIZE</label><input maxlength="150" type="text" id="r_size" class="form-control" required="" style="color: black;" value="'.$row['STOCK_SIZE'].'"></div>';
            $output .= '<div class="form-group"><label>BRAND</label><input maxlength="150" type="text" id="r_brand" class="form-control" required="" style="color: black;" value="'.$row['STOCK_BRAND'].'"></div>';
            $output .= '<div class="form-group"><label>UNIT</label><input maxlength="150" type="text" id="r_unit" class="form-control" required="" style="color: black;" value="'.$row['UNIT_TYPE'].'"></div>';
        }
    echo $output;
}

?>


<!--<thead>
                                                            <tr>
                                                                <th>Supplier Name</th>
                                                                <th>Amount</th>
                                                                <th>ET Delivery</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>Jecara/Miguel</td>
                                                                <td>1,200</td>
                                                                <td>1 day</td>
                                                                <td class="with-btn" nowrap="">
                                                                    <a href="pendingRequests.php" class="btn btn-sm btn-primary width-60 m-r-2">Select</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tastic</td>
                                                                <td>15,000</td>
                                                                <td>2 days</td>
                                                                <td class="with-btn" nowrap="">
                                                                    <a href="pendingRequests.php" class="btn btn-sm btn-primary width-60 m-r-2">Select</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>*/