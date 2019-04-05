<?php 

	include('connect.php');

	$syear = $_POST['_syear'];
	

	//insert to applicant table
	$insertquery2 = "INSERT INTO `acadyr`(`ACADYR_NAME`) VALUES ('$syear')";

	mysqli_query($connect, $insertquery2);
	echo "INSERT INTO `acadyr`(`ACADYR_NAME`) VALUES ('$syear')";
	
	//echo $insert_pass;
	
?>