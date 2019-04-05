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
         <td height="19"><div align="center" class="text"> <a href="<?php echo $page ?>">Back</a></div></td>
       </tr>
     </table>
</div>
     <?php 
}

function viewList_CREATEEXAM(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
	//$topicID=$_GET['topic'];
	$topic=$_GET['topic'];
	 //echo "$search * $topic";
	//$topic=getTopicDTL($topicID);
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<form name="form2" method="post" action="<?php echo $page2 ?>">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	
if ($topic<>''){
	if ($topic=='ALL'){
	 $query="select questions.*,exam.* 
	 	FROM questions LEFT JOIN exam ON questions.qzItemNo = exam.examItemNo 
		WHERE  (  ((exam.examPeriod)='$search')  ) ";
	}else{
	 $query="select questions.*,exam.* 
	 	FROM questions LEFT JOIN exam ON questions.qzItemNo = exam.examItemNo 
		WHERE  ( ((questions.qzTopic)='$topic') AND ((exam.examPeriod)='$search')  ) ";
	}
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
    <td colspan="2" class="label1" ><div align="center">ID <span class="left">
      <input name="Delete" type="submit" id="submit2" value="Del" />
    </span></div></td>
    <td colspan="2" class="label1" >List of Question</td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
		$ptr=0;
		while ($row = mysql_fetch_object($result)){
			$qzItemNo=$row->qzItemNo;
			$qzImage==$row->qzImage;
		?>
  	<tr>
    <td width="33" valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="center">
	<?php echo $row->qzItemNo ?></div></td>
    <td width="31" valign="top" bgcolor="<?php echo $bcool ?>" class="text">
    <?php
					echo "<input type=hidden name=qzItemNo[$ptr] value=$qzItemNo >";  
					if ($inc=="Yes"){
						echo "<input type=checkbox name=inc[] value=$qzItemNo checked=checked>";
					}else{
						echo "<input type=checkbox name=inc[] value=$qzItemNo >";
					}
			?></td>
    <td colspan="2" bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
	<?php echo $row->qzQuestion ?></div>
    <?php 
	if ($row->qzImage<>""){
		$pic='question/' . $row->qzImage;
		?><img src="<?php echo $pic ?>" /><br /><?php
	}
	?>
    </td>
    </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td width="48" align="center" bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td width="838" bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">A.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptA ?>
    <?php 
	if ($row->qzImgA<>""){
		$picA='question/' . $row->qzImgA;
		?><br /><img src="<?php echo $picA ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">B.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptB ?>
    <?php 
	if ($row->qzImgB<>""){
		$picB='question/' . $row->qzImgB;
		?><br /><img src="<?php echo $picB ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">C.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptC ?>
    <?php 
	if ($row->qzImgC<>""){
		$picC='question/' . $row->qzImgC;
		?><br /><img src="<?php echo $picC ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td  align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">D.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptD ?>
    <?php 
	if ($row->qzImgD<>""){
		$picD='question/' . $row->qzImgD;
		?><br /><img src="<?php echo $picD ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">E.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptE ?>
    <?php 
	if ($row->qzImgE<>""){
		$picE='question/' . $row->qzImgE;
		?><br /><img src="<?php echo $picE ?>" /><br /><?php
	}
	?>
      </td>
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
    <td colspan="3" class="left">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="left"><?php
}	?></td>
  </tr>
</table>
</form>
<?php
}

function validate(){
global $page, $error,$errMsg;

  $per=$_POST['period'];

  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');

  $query="SELECT * FROM answer WHERE ansPeriod='$per'";
  $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());

  if (mysql_num_rows($result) >= 1) {
	$error=1;
	$errMsg="Cannot delete an item since some questions item in the exam are already answered";
  }
  return $error;
}

function process_delete(){
	$inc=$_POST['inc'];
	$tPtr=$_POST['tPtr'];
	$per=$_POST['period'];
	$qzItemNo=$_POST['qzItemNo'];
	$user=$_SESSION['user'];
	//$ps=$_POST['pNo'];//political status
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
    //echo "//$inc * $tPtr * $ldNo";
 
  $ptr=0;
  while ($ptr<$tPtr){
	//echo "<br>%% $tPtr * inc=$inc * ldNo=$ldNo" ;
	$ctr=0;
	if ($inc[$ptr]<>""){
		//DELETE FROM table_name WHERE some_column = some_value
    	$query="DELETE FROM exam WHERE examPeriod='$per' AND examItemNo='$inc[$ptr]'";
	//echo "<br>$query";
		$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	}
	$ptr=$ptr+1;
  }
}


//########################  MAIN ##########################
session_start();
$page = "exmCreate.php";
$page2 = "exmCreate_frame.php";
$pageBack="exmCreate.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exMenu";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
	if (!$_POST['Delete']) {
		viewList_CREATEEXAM();
	}else{
		$err=validate();
		if ($err==1){
			viewList_CREATEEXAM();
		}else{
			process_delete();
			$success="Successfully delete a question from exam.";
			msg_inner();
		}
	}
  }else{
 	 	$error="Your not allowed to access this page2!";
	 	msg($success,$error,$pageBack,$subMenu);
  }
}

?>
