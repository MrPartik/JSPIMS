<?php 

	include('connect.php');

	$program = $_POST['_program'];
	

	//insert to applicant table
	$insertquery2 = "INSERT INTO `program`(PROG_NAME) VALUES ('$program')";

	mysqli_query($connect, $insertquery2);
	echo "INSERT INTO `program`(PROG_NAME) VALUES ('$program')";
	
	//echo $insert_pass;
	
?>