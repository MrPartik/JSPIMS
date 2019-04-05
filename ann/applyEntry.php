<?php


function validate(){
global $access;
global $page, $error,$errMsg;
global $fNameE,$mNameE,$lNameE,$bDateE,$citizenE,$contactE,$addressE,$emailE,$schLastE,$pwordE,$pword2E,$agreeE,$schedE;

	if ($_POST['fName']==NULL){
		$fNameE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "First Name";
		}else{
			$errMsg= "$errMsg, First Name";
		}
	}

	if ($_POST['lName']==NULL){
		$lNameE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Last Name";
		}else{
			$errMsg= "$errMsg, Last Name";
		}
	}

	if ($_POST['bDate']==NULL){
		$bDateE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Birth Date";
		}else{
			$errMsg= "$errMsg, Birth Date";
		}
	}

	if ($_POST['citizen']==NULL){
		$citizenE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Citizenship";
		}else{
			$errMsg= "$errMsg, Citizenship";
		}
	}

	if ($_POST['address']==NULL){
		$addressE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Permanent Address";
		}else{
			$errMsg= "$errMsg, Permanent Address";
		}
	}

	$schedule=$_POST['sched'];
	$sched=explode("-",$schedule);
	$schedID=$sched[0];
	$schedCtr=$sched[1]+1;
	$schedBal=$sched[2]-1;

  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');
  $sc=getScheduleDTL($schedID);
  $bal=$sc[11];
  
  if ($bal==0) {
		$schedE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Exam Schedule reach the maximum limit";
		}else{
			$errMsg= "$errMsg, Exam Schedule reach the maximum limit";
		}
  }

	if (($_POST['pword']<>$_POST['pword2']) || ($_POST['pword']==NULL) || ($_POST['pword2']==NULL) ){
		$pwordE="#FFCCCC";
		$pword2E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Password";
		}else{
			$errMsg= "$errMsg, Password";
		}
	}

	if ($_POST['agree']==NULL) {
		$agreeE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Terms and Condition";
		}else{
			$errMsg= "$errMsg, Terms and Condition";
		}
	}

return $error;
}



//########################  MAIN ##########################
session_start();
$page = "applyEntry.php";
include('ems_ann.php');
include('msg_web.php');
head();
if (!$_POST['Submit']){
	 input_data_APPLYENTRY();
}else{
	$err=validate();
	if ($err==1){
		input_data_APPLYENTRY();
	}else{
		$appNo=process_add_APPLYENTRY();
		$link = "<script>window.open('applyAdm.php?apply=$appNo')</script>";
		echo $link;
		$success="Confirm Entrance Exam Registration";
		msg($success,$error,$page,$subMenu);
	}
}

?>