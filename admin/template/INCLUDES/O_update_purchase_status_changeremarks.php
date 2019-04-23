<?php
      $connect = mysqli_connect('localhost','root','','jspims');

	   $remarks = $_POST['remarks'];
	   $bno = $_POST['batch_no'];

	   	$update = mysqli_query($connect,"UPDATE `t_spare_requisition_purchased` SET `PURCHASE_STATUS` = '$remarks' WHERE `REF_BATCH_NO` = '$bno' "); 
?>