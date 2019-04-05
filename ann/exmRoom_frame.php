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

function viewList_ROOM(){
//ldrSearch_frame.php

  global $page2, $error,$errMsg;
  global $rmCodeE; //error var

	session_start();
 	include('conf.php');
  	
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * FROM rooms order by rmCode"; 
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="715" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="<?php echo $page2 ?>" method="post" name="form2" id="form2">
    <?php 
	if ($error==1) { ?>
    <tr >
      <td height="19" colspan="6" align="center" class="text"><?php 
        	echo "Invalid Entry on : </span>";
			echo "<span class='error2'><br>$errMsg</span>"; 
			echo "<span class='text'>          <br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span><br><br>";
		?></td>
    </tr>
    <?php } ?>
    <tr height="19" class="label1">
      <td width="46" align="center"><span class="style27">
        <input name="sdDelete" type="submit" id="sdDelete" value="Del" />
      </span></td>
      <td width="109" height="19" align="left">Code</td>
      <td width="134"align="left" >Room Building</td>
      <td width="84"align="left" >Room No.</td>
      <td width="84" align="left">Last User </td>
      <td width="180" align="left">Last Update </td>
    </tr>
    <?php
	    $bcool = "#FFFFFF";
		$ptr=0;
		while ($row = mysql_fetch_object($result)){
			 	$rmCode=$row->rmCode;
	  		 	$rmBldg=$row->rmBldg;
			    $rmNo=$row->rmNo;
	  		 	$rmLUser=$row->rmLUser;
	  		 	$rmLDate=$row->rmLDate;
	?>
    <tr class="text"  bgcolor="<?php echo $bcool ?>" >
      <td align="center" ><?php echo "<input type=checkbox name=Delete[$ptr]  > " ?>
        <input type="hidden" name="rmCode[]" value="<?php echo $row->rmCode ?>" /></td>
      <td bgcolor="<?php echo $rmCodeE[$ptr] ?>"><?php echo $rmCode ?></td>
      <td><?php echo $rmBldg; ?></td>
      <td><?php echo $rmNo; ?></td>
      <td><?php echo $rmLUser; ?></td>
      <td><?php echo $rmLDate; ?></td>
    </tr>
    <?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
	      $ptr=$ptr+1;
 	 
	 } 
	mysql_free_result($result);
  	mysql_close($conn);
	 ?>
    <input type="hidden" name="tPtr" value="<?php echo $ptr ?>" />
  </form>
</table>
<?php
}

function validate(){
  global $page2, $error,$errMsg;
  global $rmCodeE;

  $error=0;
  $errMsg="";

	$tPtr=$_POST['tPtr'];
	$noChk=$_POST['Delete'];
	$rmCode=$_POST['rmCode'];

	$ptr=0;

  	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	
	while ($ptr<$tPtr){
 		if ($noChk[$ptr]==on){
 			$query="SELECT * FROM sched WHERE scRoom='$rmCode[$ptr]'";
 			$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  			if (mysql_num_rows($result) >= 1) {
    			$rmCodeE[$ptr]="#FF99FF";
				$error=1;
			}
 		}
  		$ptr=$ptr+1;
	}
	
	if ($error==1){
		if ($errMsg==""){
			$errMsg= "Room already used for classes";
		}else{
			$errMsg= "$errMsg, Room already used for classes";
		}
	}
	mysql_free_result($result);
  	mysql_close($conn);
 	return $error;
}


function process_delete_ROOM(){
//sysRoomFile_frame.php

$tPtr=$_POST['tPtr'];
$noChk=$_POST['Delete'];
$rmCode=$_POST['rmCode'];

$ptr=0;

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	while ($ptr<$tPtr){
 		if ($noChk[$ptr]==on){
 			$query="DELETE FROM rooms 
				WHERE rmCode='$rmCode[$ptr]'";
			$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
 		}
  		$ptr=$ptr+1;
	}
  	mysql_close($conn);
}

//########################  MAIN ##########################
session_start();
$page = "exmRoom.php";
$page2 = "exmRoom_frame.php";
$pageBack="exmRoom.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exMenu";
$mainMenu="exmMainMenu";
$pageName="Room File Maintenance";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		if (!$_POST['Delete'])  {
			viewList_ROOM();
		}else{
			$err=validate();
			if ($err==1){
				viewList_ROOM();
			}else{
				process_delete_ROOM();
				viewList_ROOM();
			}
		}
  }else{
 	 	$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>
