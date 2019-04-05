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
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php 	
if ($search<>''){
	 $query="select *  
	 		FROM sched where scPeriod='$search' ";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  <tr class="total">
    <td width="75" class="label1" ><div align="center">Schedule ID </div></td>
    <td width="105" class="label1" >Period</td>
    <td width="106" class="label1" >Date</td>
    <td width="105" class="label1" >Time</td>
    <td width="57" class="label1" >Room</td>
    <td width="100" class="label1" >Program1</td>
    <td width="100" class="label1" >Program2</td>
    <td width="100" class="label1" >Program3</td>
    <td width="100" class="label1" >Program4</td>
    <td width="102" class="label1" >Program5</td>
  </tr>
  <?php
	    $bcool = "#FFFFFF";
		while ($row = mysql_fetch_object($result)){
		?>
  <tr>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="center">
	<a href="repAppSchedList.php?search=<?php echo $row->scID ?>" target="_parent"><?php echo $row->scID ?></a></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scPeriod ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scDate ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scTime ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scRoom ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scProgram1 ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram2 ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram3 ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram4 ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram5 ?></td>
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
    <td colspan="7" bgcolor="#FFFFFF" class="left"><?php
}	?></td>
  </tr>
</table>
<?php
}

//########################  MAIN ##########################
session_start();
$page = "repAppSched.php";
$page2 = "repAppSched_frame.php";
$pageBack="repAppSched.php";
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
	 	msg($success,$error,$pageBack,$subMenu);
  }
}

?>
