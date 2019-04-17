<?php

$connect = mysqli_connect('localhost', 'root', '','jspims');

$output='';

if (isset($_POST["stock_id"])) {
	if ($_POST["stock_id"] != '') {
		    
		$sql = "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, ut.UNIT_ID, con.CON_ID, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME  
            FROM t_spare_stocks AS sp 
            INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
            INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
            INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID
            WHERE sp.STOCK_ID = '".$_POST["stock_id"]."'";
	}
	else {
		$sql = "SELECT sp.STOCK_ID, sp.STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', sp.STOCK_NAME, sp.STOCK_MODEL), sp.STOCK_SIZE) as STOCK_Name, sp.STOCK_BRAND, ut.UNIT_TYPE, con.CON_NAME, sp.STOCK_QUANTITY, sp.STOCK_CRITICAL_LEVEL, sup.SUP_NAME  
            FROM t_spare_stocks AS sp 
            INNER JOIN r_unit_type as ut on sp.STOCK_UNIT_TYPE = ut.UNIT_ID
            INNER JOIN r_condition as con on sp.STOCK_CONDITION = con.CON_ID
            INNER JOIN r_supplier as sup on sp.STOCK_SUPPLIER = sup.SUP_ID";
	}
	$results = mysqli_query($connect, $sql);

	 while($row = mysqli_fetch_assoc($results))
        {
            $output .= '<input id="sku" type="text" value="'.$row['STOCK_KEY_UNIT'].'">';
            $output .= '<input id="sname" type="text" value="'.$row['STOCK_Name'].'">';
            $output .= '<input id="sbrand" type="text" value="'.$row['STOCK_BRAND'].'">';
            $output .= '<input id="sunit" type="number" value="'.$row['UNIT_ID'].'">';
            $output .= '<input id="scon" type="number" value="'.$row['CON_ID'].'">';
        }
    echo $output;
}

?>