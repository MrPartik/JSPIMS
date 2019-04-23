<?php
      $connect = mysqli_connect('localhost','root','','jspims');

	   $remarks = $_POST['remarks'];
	   $bno = $_POST['batch_no'];

	  if ($remarks == '5') {
	  	$update = mysqli_query($connect,"UPDATE `t_spare_requisition_purchased` SET `PURCHASE_STATUS` = '$remarks', DELIVERY_DATE = CURRENT_DATE WHERE `REF_BATCH_NO` = '$bno' ");
	  }
	  else {
	   	$update = mysqli_query($connect,"UPDATE `t_spare_requisition_purchased` SET `PURCHASE_STATUS` = '$remarks' WHERE `REF_BATCH_NO` = '$bno' "); 
	   	}
?>