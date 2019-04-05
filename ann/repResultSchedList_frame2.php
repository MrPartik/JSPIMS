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

function viewList_APPSEM(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
	$sched=$_GET['sched'];
	$program=$_GET['prog'];
	$progCh=$_GET['progCh'];
	//echo "$search * $program * $progCh";

      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php 	
if ($search<>''){
	 $query="select *  
	 		FROM applicant where smSchedExamID='$sched' and smAppSem='$search' and $progCh='$program' order by smLName,smFName,smMName";
     //echo $query;
	 $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  <tr class="total">
    <td width="76" class="label1" ><div align="center">Applicant No. </div></td>
    <td width="283" class="label1" >Name</td>
    <td width="75" class="label1" >Application Period</td>
    <td width="47" class="label1" >Exam Code</td>
    <td width="40" class="label1" >Exam Taken</td>
    <td width="43" class="label1" >Score</td>
    <td width="42" class="label1" >Total Item</td>
    <td width="144" class="label1" >Date Taken</td>
  </tr>
  <?php
	    $bcool = "#FFFFFF";
		while ($row = mysql_fetch_object($result)){
			$name=$row->smLName . ", " . $row->smFName . " " . $row->smMName
		?>
  <tr>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="center"><?php echo $row->smAppNo ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $name ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smAppSem ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smSchedExamID ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smExamTaken ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->smExamScore ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->smExamTItem ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smExamDateFns ?></div></td>
  </tr>
  <?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
 	    } 
		?>
  <tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td colspan="5" bgcolor="#FFFFFF" class="left"><?php
}	?></td>
  </tr>
</table>
<?php
}

//########################  MAIN ##########################
session_start();
$page = "repResultSched.php";
$page2 = "repResultSchedList_frame.php";
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
		viewList_APPSEM();
  }else{
 	 	$error="Your not allowed to access this page2!";
		msg_Rep($success,$error,$page,$subMenu,$mainMenu);
  }
}

?>
