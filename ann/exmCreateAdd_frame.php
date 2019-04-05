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

function msg_inner(){
global $error,$success;      
?>
<link href="conf/emsdell.css" rel="stylesheet" type="text/css" />
	<div id="body">
     <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
       <tr>
         <td height="84">&nbsp;</td>
       </tr>
       <tr>
         <td height="19"><div align="center" class="error">
           <?php 
		  						if ($error<>O ){
		  							echo $error;
		  						} 
		  						?>
           &nbsp;</div></td>
       </tr>
       <tr>
         <td height="19"><div align="center" class="instruction">
           <?php 
		  						if ($success<>NULL ){
		  							echo $success;
		  						} 
		  						?>
           &nbsp;</div></td>
       </tr>
       <tr>
         <td height="19"><div align="center" class="text"> <a href="<?php echo $pageBack ?>">Back</a></div></td>
       </tr>
     </table>
</div>
     <?php 
}

//########################  MAIN ##########################
session_start();
$page = "exmCreate.php";
$page2 = "exmCreateAdd_frame.php";
$pageBack="exmCreateAdd.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exMenu";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
	if (!$_POST['Assign']) {
		  viewList_CREATEADD();
	}else{
			process_add();
			$success="Successfully add question item to Exam.";
			msg_inner();
	}
  }else{
 	 	$error="Your not allowed to access this page2!";
	 	msg($success,$error,$pageBack,$subMenu);
  }
}

?>
