<?php

$connect = mysqli_connect('localhost', 'root', '','jspims');

$output='';

if (isset($_POST["id"])) {
    if ($_POST["id"] != '') {
            
        $sql = "SELECT sa.AQ_ID, sa.ITEM_SKU,r.SUP_NAME FROM t_spare_acquisition as sa INNER JOIN r_supplier as r ON r.SUP_ID = sa.SUPPLIER WHERE sa.AQ_ID = '3'";
    }
    else {
        $sql = "SELECT sa.ITEM_SKU,r.SUP_NAME FROM t_spare_acquisition as sa INNER JOIN r_supplier as r ON r.SUP_ID = sa.SUPPLIER";
    }
    $results = mysqli_query($connect, $sql);

     while($row = mysqli_fetch_assoc($results))
        {   
           $output .= '<input maxlength="150" type="text" id="r_supp" class="form-control" required="" style="color: black;" value="'.$row['SUP_NAME'].'"></div>';
        }
    echo $output;
}

?>