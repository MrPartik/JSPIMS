<?php

$connect = mysqli_connect('localhost', 'root', '','jspims');

$output='';

if (isset($_POST["stock_id"])) {
	if ($_POST["stock_id"] != '') {
		    
		$sql = "SELECT sa.AQ_ID, sa.ITEM_SKU,r.SUP_NAME FROM t_spare_acquisition as sa INNER JOIN r_supplier as r ON r.SUP_ID = sa.SUPPLIER WHERE sa.ITEM_SKU = '".$_POST["stock_id"]."'";
	}
	else {
		$sql = "SELECT sa.ITEM_SKU,r.SUP_NAME FROM t_spare_acquisition as sa INNER JOIN r_supplier as r ON r.SUP_ID = sa.SUPPLIER";
	}
	$results = mysqli_query($connect, $sql); 

	 while($row = mysqli_fetch_assoc($results))
        {   
            $output .= '<div class="table-responsive"><table class="table m-b-0" ">';
            $output .= '<thead><tr>';
            $output .= '<th>Supplier Name</th>';
            $output .= '<th>Price Per Piece</th>';
            $output .= '<th>ET Delivery</th>';
            $output .= '<th>Action</th></tr></thead><tbody><tr>';
            $output .= '<td data-target="SupName">'.$row['SUP_NAME'].'</td>';
            $output .= '<td>1,200</td>';
            $output .= '<td>1 day</td>';
            $output .= '<td class="with-btn" nowrap="">';
            $output .= '<a data-id="'.$row['AQ_ID'].'" id="submitReq" data-role="select" href="#" class="btn btn-sm btn-primary width-60 m-r-2">Select</a>';
            $output .= '</td>';
            $output .= '</tr></tbody>';
            $output .= '</table></div>';
        }
    echo $output;
}
?>