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

function viewList_PROGRAM(){
//sysProgram_frame.php

  global $page2, $error,$errMsg;
  global $prCodeE;

	session_start();
 	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
    $query="select * FROM program order by prCode"; 
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());

      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="735" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="<?php echo $page2 ?>" method="post" name="form2" id="form2">
    <?php 
	if ($error==1) { ?>
    <tr >
      <td height="19" colspan="5" align="center" class="text"><span class="text">
		<?php 
        	echo "Invalid Entry on : </span>";
			echo "<span class='error2'><br>$errMsg</span>"; 
			echo "<span class='text'>          <br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span><br><br>";
		?>
      </span></td>
    </tr>    
    <?php } ?>
    <tr class="label1">
      <td width="41" align="left"><span class="style27">
        <input name="sdDelete" type="submit" id="sdDelete" value="Del" />
      </span></td>
	  <td width="83" height="19" align="left">Code</td>
      <td width="296"align="left" >Description</td>
      <td width="95" align="left">Last User </td>
      <td width="125" align="left">Last Update </td>
   	</tr>
    <?php
	    $bcool = "#FFFFFF";
		$ptr=0;
		while ($row = mysql_fetch_object($result)){
			 	$prCode=$row->prCode;
	  		 	$prDesc=$row->prDesc;
	  		 	$prCat=$row->prCat;
	  		 	$prLUser=$row->prLUser;
	  		 	$prLDate=$row->prLDate;
		?>
    <tr class="text" align="center" bgcolor="<?php echo $bcool ?>">
      <td>
	  	<?php echo "<input type=checkbox name=Delete[$ptr]  > " ?>
      	<input type="hidden" name="prCode[]" value="<?php echo $row->prCode ?>" /></td>
      <td bgcolor="<?php echo $prCodeE[$ptr] ?>"><div align="left">
      	<?php echo $prCode ?></div></td>
      <td align="left"><?php echo $prDesc; ?></td>
      <td><?php echo $prLUser; ?></td>
      <td><?php echo $prLDate; ?></td>
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
  global $prCodeE;

  $error=0;
  $errMsg="";

	$tPtr=$_POST['tPtr'];
	$noChk=$_POST['Delete'];
	$prCode=$_POST['prCode'];

	$ptr=0;

  	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	
	while ($ptr<$tPtr){
 		if ($noChk[$ptr]==on){
 			$query="SELECT * FROM applicant 
				WHERE (smProgramCode1='$prCode[$ptr]' or smProgramCode2='$prCode[$ptr]' or smProgramCode3='$prCode[$ptr]')";
 			$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  			if (mysql_num_rows($result) >= 1) {
    			$prCodeE[$ptr]="#FF99FF";
				$error=1;
			}
 		}
  		$ptr=$ptr+1;
	}
	
	if ($error==1){
		if ($errMsg==""){
			$errMsg= "Program is already assigned to an applicant";
		}else{
			$errMsg= "$errMsg, Program is already assigned to an applicant";
		}
	}

	mysql_free_result($result);
  	mysql_close($conn);
 	return $error;
}


function process_delete_PROGRAM(){
//sysProgram_frame.php

$tPtr=$_POST['tPtr'];
$noChk=$_POST['Delete'];
$prCode=$_POST['prCode'];

$ptr=0;

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	while ($ptr<$tPtr){
 		if ($noChk[$ptr]==on){
 			$query="DELETE FROM program  
				WHERE prCode='$prCode[$ptr]'";
			$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
		}
  		$ptr=$ptr+1;
	}
 	mysql_close($conn);
}

//########################  MAIN ##########################
session_start();
$page = "exmProgram.php";
$page2 = "exmProgram_frame.php";
$pageBack="exmProgram.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exMenu";
$pageName="Program File Maintenance";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		if (!$_POST['Delete'])  {
			viewList_PROGRAM();
		}else{
			$err=validate();
			if ($err==1){
				viewList_PROGRAM();
			}else{
				process_delete_PROGRAM();
				viewList_PROGRAM();
			}
		}
  }else{
 	 	$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>
