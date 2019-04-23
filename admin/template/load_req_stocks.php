<?php

$connect = mysqli_connect('localhost', 'root', '','jspims');

$output='';

if (isset($_POST["stock_id"])) {
	if ($_POST["stock_id"] != '') {
		    
		$sql = "SELECT STOCK_ID, STOCK_KEY_UNIT, CONCAT_WS(' ', CONCAT_WS(' ', STOCK_NAME, STOCK_MODEL), STOCK_SIZE) as STOCK_Name, STOCK_BRAND FROM t_spare_stocks WHERE STOCK_KEY_UNIT = '".$_POST["stock_id"]."'";
	}
	else {
		$sql = "SELECT * FROM t_spare_stocks";
	}
	$results = mysqli_query($connect, $sql);

	 while($row = mysqli_fetch_assoc($results))
        { 	
        	$output .= '<input class="form-control" value="'.$row['STOCK_ID'].'">';
        }
    echo $output;
}

?>