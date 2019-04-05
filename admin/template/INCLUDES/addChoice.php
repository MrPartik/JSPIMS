<?php 

	include('connect.php');

	$choicea = $_POST['choicea'];
	$choiceb = $_POST['choiceb'];
	$choicec = $_POST['choicec'];
	$choiced = $_POST['choiced'];
	$option1 = $_POST['option1'];
	$option2 = $_POST['option2'];
	$option3 = $_POST['option3'];
	$option4 = $_POST['option4'];
	$tanong = $_POST['tanong'];
	

	//insert to applicant table
	$insertquery2 = "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choicea', $option1, $tanong)";
	mysqli_query($connect, $insertquery2);
	echo "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choicea', $option1, $tanong)";
	
	$insertquery3 = "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choiceb', $option2, $tanong)";
	mysqli_query($connect, $insertquery3);
	echo "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choice2', $option2, $tanong)";
	
	$insertquery4 = "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choicec', $option3, $tanong)";
	mysqli_query($connect, $insertquery4);
	echo "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choicec', $option3, $tanong)";
	
	$insertquery5 = "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choiced', $option4, $tanong)";
	mysqli_query($connect, $insertquery5);
	echo "INSERT INTO `Q_CHOICE`(QC_DESC,QC_ISCORRECT,Q_FK) VALUES ('$choiced', $option4, $tanong)";
	
	//echo $insert_pass;
	
?>