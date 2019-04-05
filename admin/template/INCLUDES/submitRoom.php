<?php 

	include('connect.php');

	$bldg = $_POST['_bldg'];
	$room = $_POST['_room'];
	

	//insert to applicant table
	$insertquery2 = "INSERT INTO `room`(`ROOM_NAME`, BLDG_FK) VALUES ('$room',$bldg)";

	mysqli_query($connect, $insertquery2);
	echo "INSERT INTO `room`(`ROOM_NAME`, BLDG_FK) VALUES ('$room',$bldg)";
	
	//echo $insert_pass;
	
?>