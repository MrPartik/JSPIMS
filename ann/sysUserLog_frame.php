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

function viewList_SYSUSERLOG(){
//ldrSearch_frame.php

	$search=$_GET['search'];

 	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');

      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="695" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php 	
    if ($search<>''){
 	 	$query="select * from login where logDate='$search' 
	 		order by Login";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  <tr>
    <td width="157" class="label1" ><div align="center">User's ID </div></td>
    <td width="85" class="label1" >Active</td>
    <td width="154" class="label1" >Login</td>
    <td width="129" class="label1" >Logout</td>
  </tr>
  <?php
	    $bcool = "#FFFFFF";
		while ($row = mysql_fetch_object($result)){
		?>
  <tr>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="center"><?php echo $row->userID ?></a></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->Active ?>&nbsp;</div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->Login ?>&nbsp;</div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->LogOut ?>&nbsp;</div></td>
  </tr>
  <?php if ($bcool=="#D7D7D7"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#D7D7D7";
		  }	
 	    } 
		?>
  <tr bgcolor="#FFFFFF">
    <td class="field_value_entry">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td class="field_value_entry"><span class="left">
      <?php
		}	?>
    </span></td>
  </tr>
  <?php
   	mysql_close($conn);		?>
</table>
<?php
}

//########################  MAIN ##########################
session_start();
$page = "sysUserLog.php";
$page2 = "sysUserLog_frame.php";
$pageBack="sysUserLog.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";
$pageName="USER'S LOG";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		viewList_SYSUSERLOG();
  }else{
 	 	$error="Your not allowed to access this page2!";
	 	msg($success,$error,$pageBack,$subMenu);
  }
}

?>
