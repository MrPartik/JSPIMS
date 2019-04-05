<?php 

	include('connect.php');

	$acadyr = $_POST['_acadyr'];
	$program = $_POST['_program'];
	$enabled = $_POST['_enabled'];
	$start = $_POST['_start'];
	$end = $_POST['_end'];
	$date = $_POST['_date'];	
	$room = $_POST['_room']
	

	//insert to applicant table
	$insertquery2 = "INSERT INTO `sched`(`ACADYR_FK`, `PROG_FK`, `ROOM_FK`, `SCHED_TIME`, `SCHED_DATE`, `SCHED_STAT`) VALUES ($acadyr, $program, $room, concat('$start' + '-' +'$end'), '$date', $enabled)";

	mysqli_query($connect, $insertquery2);
	echo "INSERT INTO `room`(`ROOM_NAME`, BLDG_FK) VALUES ('$room',$bldg)";
	
	//echo $insert_pass;
	
?>