<?php
      $connect = mysqli_connect('localhost','root','','jspims');

	   $remarks = $_POST['remarks'];
	   $bno = $_POST['bno'];

	   	$update_req = mysqli_query($connect,"UPDATE `t_spare_requisition_summary` SET `DATE_APPROVED` = CURRENT_DATE, `DATE_RELEASED` = CURRENT_DATE, `STATUS_REQ` = '$remarks' WHERE `t_spare_requisition_summary`.`BATCH_NO` = '$bno' "); 
	    $add_purchase = mysqli_query($connect,"INSERT INTO `t_spare_requisition_purchased` (`REF_BATCH_NO`, `DATE_PURCHASED`, `PURCHASE_STATUS`, `DELIVERY_DATE`, `P_ACCEPT_STATUS`) VALUES ('$bno', CURRENT_DATE, '2', NULL, '1')");
?>