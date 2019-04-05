<?php
include('ems_ann.php');
disable_cache();


//########################  MAIN ##########################
session_start();
$page = "appSearch.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="appMenu";
$mainMenu="appMainMenu";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
   	 	main_form_PROFILE($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_App($success,$error,$page,$subMenu,$mainMenu);
  }
}

?>