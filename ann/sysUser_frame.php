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

function viewList_SYSUSER(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	$suUType=$_GET['suUType'];
  	$query="select count(*) from users where suUType='$suUType'";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	$row=mysql_fetch_row($result);
	$total_records=$row[0];

      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php 	
  if (($total_records > 0) && ($start < $total_records)){
	 $query="select * FROM users  
			WHERE suUType='$suUType' order by suFullName";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  <form action="<?php echo $page ?>" method="post" name="form2" id="form2">
    <tr class="label1">
      <td width="99" height="22" align="left">UserName</td>
      <td width="214"align="left" >Full Name </td>
      <td width="85" align="left">User Type </td>
      <td width="65" align="left" >Status</td>
      <td width="97" align="left">Department</td>
      <td width="93" align="left">Last User </td>
      <td width="121" align="left">Last Update </td>
    </tr>
    <?php
	        	//include('./conf/empSubMenu.php');

	    $bcool = "#FFFFFF";
		$ptr=0;
		while ($row = mysql_fetch_object($result)){
	  		 	$suID=$row->suID;
	  		 	$suFullName=$row->suFullName;
	  		 	$suUType=$row->suUType;
	  		 	$suDeptCode=$row->suDeptCode;
	  		 	$suStatus=$row->suStatus;
	  		 	$suLUser=$row->suLUser;
	  		 	$suLDate=$row->suLDate;
		?>
    <tr class="text">
      <td bgcolor="<?php echo $bcool ?>"><a href="sysUserEdit.php?un=<?php echo $suID ?>" 
			target="_parent"><?php echo $suID ?></a></td>
      <td bgcolor="<?php echo $bcool ?>"><?php echo $suFullName ?></td>
      <td bgcolor="<?php echo $bcool ?>"><?php echo $suUType; ?></td>
      <td bgcolor="<?php echo $bcool ?>"><?php echo $suStatus; ?></td>
      <td bgcolor="<?php echo $bcool ?>"><?php echo $suDeptCode; ?></td>
      <td bgcolor="<?php echo $bcool ?>"><?php echo $suLUser; ?></td>
      <td bgcolor="<?php echo $bcool ?>"><?php echo $suLDate; ?></td>
    </tr>
    <?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
	      $ptr=$ptr+1;
 	    } 

		?>
    <input type="hidden" name="tPtr" value="<?php echo $ptr ?>" />
    <?php
  }
   	mysql_close($conn);		?>
  </form>
</table>
<?php
}

//########################  MAIN ##########################
session_start();
$page = "sysUser.php";
$page2 = "sysUser_frame.php";
$pageBack="sysUser.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		viewList_SYSUSER();
  }else{
 	 	$error="Your not allowed to access this page2!";
	 	msg($success,$error,$pageBack,$subMenu);
  }
}

?>
