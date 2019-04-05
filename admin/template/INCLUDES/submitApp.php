<?php 

	include('connect.php');

	$firstname = $_POST['_fname'];
	$lastname = $_POST['_lname'];
	$midname = $_POST['_mname'];
	$pbirth = $_POST['_pbirth'];
	$citizen = $_POST['_citizen'];
	$civil = $_POST['_civil'];
	$address = $_POST['_address'];
	$phone = $_POST['_phone'];
	$email = $_POST['_email'];
	$sex = $_POST['_sex'];
	$disability = $_POST['_disability'];
	$fchoice = $_POST['_fchoice'];
	$schoice = $_POST['_schoice'];
	$tchoice = $_POST['_tchoice'];
	$examsched = $_POST['_examsched'];
	$motname = $_POST['_motname'];
	$motoccu = $_POST['_motoccu'];
	$motcivil = $_POST['_motcivil'];
	$motemp = $_POST['_motemp'];
	$fatname = $_POST['_fatname'];
	$fatoccu = $_POST['_fatoccu'];
	$fatcivil = $_POST['_fatcivil'];
	$fatemp = $_POST['_fatemp'];
	$guardname = $_POST['_guardname'];
	$guardoccu = $_POST['_guardoccu'];
	$guardcivil = $_POST['_guardcivil'];
	$guardemp = $_POST['_guardemp'];
	$password = $_POST['_password'];
	$bdate = $_POST['_bdate'];
	$pic = $_POST['_pic'];
	/*$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?~@#-_+<>[]{}";
	$insert_pass = substr(str_shuffle($chars),0,6);
	$insert_username = substr($insert_name, 0, 1) . substr($insert_mname, 0, 1) . $insert_lname. $insert_type;*/



	//insert to acc
	$selectname = "SELECT acadyr_name as acad from acadyr";
	$nameresult = mysqli_query($connect, $selectname) or die('Bad query: $sql'); 

	while ($row = mysqli_fetch_assoc($nameresult) ) {
	    $acad = $row['acad'];
	}

	$selectname1 = "SELECT max(APP_ID) as app from applicant";
	$nameresult1 = mysqli_query($connect, $selectname1) or die('Bad query: $sql'); 

	while ($row = mysqli_fetch_assoc($nameresult1) ) {
	    $appid = $row['app'];
	}

	if($appid == NULL){
	$appid = 1;
	$appnum = substr($acad, 0,4) . '-' . $appid . 'CT' . '0';



	$insertquery = "INSERT INTO `acc`(`ACCTYPE_FK`, `ACCUSERNAME`, `ACCPASSWORD`) VALUES (2, '$appnum', '$password')";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `acc`(`ACCTYPE_FK`, `ACCUSERNAME`, `ACCPASSWORD`) VALUES (2, '$appnum', '$password')";

	}
	else{
	$appid += 1;
	$appnum = substr($acad, 0,4) . '-' . $appid . 'CT' . '0';
	$insertquery = "INSERT INTO `acc`(`ACCTYPE_FK`, `ACCUSERNAME`, `ACCPASSWORD`) VALUES (2, '$appnum', '$password')";

	mysqli_query($connect, $insertquery);
	echo "INSERT INTO `acc`(`ACCTYPE_FK`, `ACCUSERNAME`, `ACCPASSWORD`) VALUES (2, '$appnum', '$password')";
	}


	//insert to applicant table
	$insertquery2 = "INSERT INTO `applicant`(`APP_FNAME`, `APP_LNAME`, `APP_MNAME`, `APP_SEX`, `APP_BDATE`, `APP_PBIRTH`,`APP_ADDRESS`, `APP_CIVIL`, `APP_CITIZENSHIP`, `APP_DISABILITY`,  `APP_CONTACT`, `APP_EMAIL`, `APP_FIRST_FK`, `APP_SECOND_FK`, `APP_THIRD_FK`, `SCHED_FK`, `MOTHERNAME`, `MOTHERCIV`, `MOTHEROCCU`, `MOTHEREMP`, `FATHERNAME`, `FATHERCIV`, `FATHEROCCU`, `FATHEREMP`, `GUARDNAME`, `GUARDCIV`, `GUARDOCCU`, `GUARDEMP`, `ACC_FK`, APP_PIC, ACADYR_FK) VALUES ('$firstname', '$lastname', '$midname', '$sex', '$bdate', '$pbirth', '$address', '$civil', '$citizen',   '$disability', '$phone', '$email',  $fchoice, $schoice, $tchoice, $examsched, '$motname', '$motcivil', '$motoccu', '$motemp', '$fatname', '$fatcivil', '$fatoccu', '$fatemp', '$guardname', '$guardcivil', '$guardoccu', '$guardemp', (SELECT MAX(ACCID) FROM ACC), '$pic', 1)";

	mysqli_query($connect, $insertquery2);
	echo "INSERT INTO `applicant`(`APP_FNAME`, `APP_LNAME`, `APP_MNAME`, `APP_SEX`, `APP_BDATE`, `APP_PBIRTH`,`APP_ADDRESS`, `APP_CIVIL`, `APP_CITIZENSHIP`, `APP_DISABILITY`,  `APP_CONTACT`, `APP_EMAIL`, `APP_FIRST_FK`, `APP_SECOND_FK`, `APP_THIRD_FK`, `SCHED_FK`, `MOTHERNAME`, `MOTHERCIV`, `MOTHEROCCU`, `MOTHEREMP`, `FATHERNAME`, `FATHERCIV`, `FATHEROCCU`, `FATHEREMP`, `GUARDNAME`, `GUARDCIV`, `GUARDOCCU`, `GUARDEMP`, `ACC_FK`, ACADYR_FK) VALUES ('$firstname', '$lastname', '$midname', '$sex', '$bdate', '$pbirth', '$address', '$civil', '$citizen',   '$disability', '$phone', '$email',  $fchoice, $schoice, $tchoice, $examsched, '$motname', '$motcivil', '$motoccu', '$motemp', '$fatname', '$fatcivil', '$fatoccu', '$fatemp', '$guardname', '$guardcivil', '$guardoccu', '$guardemp', (SELECT MAX(ACCID) FROM ACC), '$pic', 1)";
	
	//echo $insert_pass;
	
?>




