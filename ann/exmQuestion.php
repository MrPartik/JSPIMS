<?php
include('ems_ann.php');
disable_cache();



//########################  MAIN ##########################
session_start();
$page = "exmQuestion.php";
$page2 = "exmQuestion_frame.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exmMenu";
$mainMenu="exmMainMenu";
$pageName="Load Exam Question";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
	if (!$_POST['Submit'])  {
		main_form_QUESTION($subMenu,$mainMenu);
	}else{
		$err=validate_QUESTION();
		if ($err==1){
			main_form_QUESTION($subMenu,$mainMenu);
		}else{
			process_add_QUESTION();
			$success="Confirm Addition of Question";
			msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
		}
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>