<?php
//################################################################################################
//  Project Name				: Automated Grading System (@Grades)
//	Program/File Name			: studSearch_frame.php	
//	Description of the Program	: @Grades uses PHP and MySQL.
//  Date Created				: December 2016
//	Programmed by 				: Ma. Emmie T. Delluza,BSCoE,DPA,MIS
// 	Copyright Notice 			: Copyright (C) 2016 by the Emsdell Ltd.
//	License						: This program is intended for the Catanduanes Institutte of the Philippines (CPIC). 
//								  Unauthorized copy  of the source code or any section is PROHIBITED
//##################################################################################################

include('ems_ann.php');
disable_cache();



//########################  MAIN ##########################
session_start();
$page = "appProfileList.php";
$page2 = "appProfileList_frame.php";
$pageBack="appProfileList.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exMenu";
$mainMenu="exmMainMenu";
$pageName="Applicant Profile";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		viewList_PROFILELIST();
  }else{
 	 	$error="Your not allowed to access this page!";
		msg_App($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>
