<?php
  	include 'connect.php'; 

	   $remarks = $_POST['remarks'];
	   $bno = $_POST['bno'];

	   	$update = mysqli_query($connect,"UPDATE `t_spare_requisition_summary` SET `DATE_REVISED` = CURRENT_DATE, `REMARKS` = '$remarks' WHERE `t_spare_requisition_summary`.`BATCH_NO` = '$bno' "); 
?> 