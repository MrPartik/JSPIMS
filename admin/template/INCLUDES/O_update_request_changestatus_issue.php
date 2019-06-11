<?php
      $connect = mysqli_connect('localhost','root','','jspims');

	   $remarks = $_POST['remarks'];
	   $bno = $_POST['bno'];

	   	$update_req = mysqli_query($connect,"UPDATE `t_spare_requisition_summary` SET `DATE_APPROVED` = CURRENT_DATE, `DATE_RELEASED` = CURRENT_DATE, `STATUS_REQ` = '$remarks' WHERE `t_spare_requisition_summary`.`BATCH_NO` = '$bno' "); 
	    $add_issuance = mysqli_query($connect,"INSERT INTO `t_spare_requisition_issued` (`REF_BATCH_NO`, `DATE_ISSUED`,`ISSUE_ACCEPT_STATUS`) VALUES ('$bno', CURRENT_DATE, 1)");

	    echo "UPDATE `t_spare_requisition_summary` SET `DATE_APPROVED` = CURRENT_DATE, `DATE_RELEASED` = CURRENT_DATE, `STATUS_REQ` = '$remarks' WHERE `t_spare_requisition_summary`.`BATCH_NO` = '$bno' ";
	    echo "INSERT INTO `t_spare_requisition_issued` (`REF_BATCH_NO`, `DATE_ISSUED`,`ISSUE_ACCEPT_STATUS`) VALUES ('$bno', CURRENT_DATE,  1)";

?>