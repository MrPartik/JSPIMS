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

function viewList_APPSEARCH(){
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
<table width="1155" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="form2" method="post" action="<?php echo $page2 ?>">
<?php 	
if ($search<>''){
	 $query="select *  
	 		FROM sched where scPeriod='$search' order by scPeriod,scDate,scTime,scRoom ";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
    <td colspan="2" class="label1" align="center" ><span class="left">
      <input name="Assign" type="submit" id="submit2" value="Enabled" />
    </span></td>
    <td width="107" class="label1" >Period</td>
    <td width="94" class="label1" >Date</td>
    <td width="102" class="label1" >Time</td>
    <td width="70" class="label1" >Room</td>
    <td width="93" class="label1" >Status</td>
    <td width="114" class="label1" >Program1</td>
    <td width="114" class="label1" >Program2</td>
    <td width="109" class="label1" >Program3</td>
    <td width="111" class="label1" >Program4</td>
    <td width="148" class="label1" >Program5</td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
		$ptr=0;
		while ($row = mysql_fetch_object($result)){
			$scID=$row->scID;
			$scStatus=$row->scStatus;
		?>
  	<tr>
    <td width="57" bgcolor="<?php echo $bcool ?>" class="text"><div align="center">
	<?php echo $row->scID ?></div></td>
    <td width="36" bgcolor="<?php echo $bcool ?>" class="text">
    <?php
					echo "<input type=hidden name=scID[$ptr] value=$scID >";  
					if ($scStatus=="Enabled"){
						echo "<input type=checkbox name=inc[$ptr] value=$scID checked=checked>";
					}else{
						echo "<input type=checkbox name=inc[$ptr] value=$scID >";
					}
			?>
    </td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scPeriod ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scDate ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scTime ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scRoom ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scStatus ?></div></td>
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
		  $ptr=$ptr+1;
 	    } 
		?><input type="hidden" name="tPtr" value="<?php echo $ptr ?>">
        <input type="hidden" name="period" value="<?php echo $search ?>">
  	<tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td colspan="8" bgcolor="#FFFFFF" class="left">
      <?php
}	?>
    </td>
  </tr>
</form>
</table>
<?php
}

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

function process_update(){
	$inc=$_POST['inc'];
	$tPtr=$_POST['tPtr'];
	$per=$_POST['period'];
	$scID=$_POST['scID'];
	$user=$_SESSION['user'];
	//$ps=$_POST['pNo'];//political status
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
    //echo "//$inc * $tPtr * $ldNo";
  $ptr=0;
  while ($ptr<$tPtr){
	//echo "<br>%% $ptr * inc=$inc[$ptr] * scID=$scID[$ptr]" ; 
	if ($inc[$ptr]<>''){
		$status='Enabled';
	}else{
		$status='Disabled';
	}
   	$query="UPDATE sched SET scStatus='$status',scLUser='$user',scLDate='now()' 
			WHERE scID='$scID[$ptr]'";
	//echo "<br>$query";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	$ptr=$ptr+1;
  }
}

//########################  MAIN ##########################
session_start();
$page = "exmEnabled.php";
$page2 = "exmEnabled_frame.php";
$pageBack="exmSched.php";
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
		viewList_APPSEARCH();
	}else{
		process_update();
		$success="Successfully enabled Exam Schedule";
		msg_inner();
	}
  }else{
 	 	$error="Your not allowed to access this page2!";
	 	msg($success,$error,$pageBack,$subMenu);
  }
}

?>
