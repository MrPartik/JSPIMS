<?php
//################################################################################################
//  Project Name				: Licensure Examination for teacher Automated Network-System (LEARN)
//	Program/Filr Name			: examLoadItem_frame.php	
//	Description of the Program	: LEARN uses PHP and MySQL.
//  Date Created				: May 2016
//	Programmed by 				: Ma. Emmie T. Delluza,BSCoE,DPA,MIS
// 	Copyright Notice 			: Copyright (C) 2016 by the Emsdell Ltd.
//	License						: This program is intended for the Catanduanes State University for the
//								  dissertation of Gemma G. Acedo. 
//								  Unauthorized copy  of the source code or any section is PROHIBITED
//##################################################################################################

include('ems_ann.php');
disable_cache();

function convertMoText($dad){

  	switch($dad) {
	   case(01): 	$ba='January';	  	break;
	   case(02): 	$ba='February';	  	break;
	   case(03): 	$ba='March';	  	break;
	   case(04): 	$ba='April';	  	break;
	   case(05): 	$ba='May';	  		break;
	   case(06): 	$ba='June';	  		break;
	   case(07): 	$ba='July';	  		break;
	   case(8): 	$ba='August';		break;
	   case(9): 	$ba='September';	break;
	   case(10): 	$ba='October';	  	break;
	   case(11): 	$ba='November';	  	break;
	   case(12): 	$ba='December';	  	break;
	}	
	return $ba;
}



//########################  MAIN ##########################
session_start();
$page = "exmQuestion.php";
$page2 = "exmQuestion_frame.php";

$user=$_SESSION['user'];
if (!isset($user)){
  header("Location:appSearch.php");
}else{
  $acc=getAccess($page);
  if ($acc==1){
 		if ($_POST['qzDelete']) {
			process_delete__QUESTIONSDELETE();
     		viewList_QUESTIONS();
		}else{	
	 		viewList_QUESTIONS();
		}
  }else{
      $error="Your not allowed to access this page2!";
	  msg2();
  }
}
?>
