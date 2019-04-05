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
$page = "repResultSem.php";
$page2 = "repResultSem_frame.php";
$pageBack="repResultSem.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="repMenu";

if (!isset($user)){
  header("Location:applicant.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		viewList_RESULTSEM();
  }else{
 	 	$error="Your not allowed to access this page2!";
		msg_Rep($success,$error,$page,$subMenu,$mainMenu);
  }
}

?>
