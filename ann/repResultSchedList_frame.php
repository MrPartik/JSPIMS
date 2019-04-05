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
	$sex=$_GET['sex'];
	//echo "$search * $program * $progCh * $sex";

      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php 	
if ($search<>''){
	 $query="SELECT *  FROM applicant 
	 		WHERE smSchedExamID='$sched' and smAppSem='$search' and $progCh='$program' and smSex='$sex' and smExamTaken='Yes' 
			ORDER BY smLName,smFName,smMName";
     //echo $query;
	 $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  <tr class="total">
    <td width="75" class="label1" ><div align="center">Applicant No. </div></td>
    <td width="244" class="label1" >Name</td>
    <td width="49" class="label1" >Sex</td>
    <td width="70" class="label1" >Date Taken</td>
    <td width="287" class="label1" ><table width="275" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="137" class="label1">Topic</td>
        <td width="36" align="center" class="label1">Raw  Score</td>
        <td width="35" align="center" class="label1">%File  Rank</td>
        <td width="42" align="center" class="label1">Stanine</td>
      </tr>
      <?php 
			$query3="SELECT * FROM topics order by tpID";
			$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
			while ($row3 = mysql_fetch_object($result3)){ 
				$tpID=$row3->tpID;
				$tpTopic=$row3->tpTopic;
				$query4="select count(*) FROM answer INNER JOIN questions ON answer.ansQzItemNo = questions.qzItemNo
						WHERE ansAppNo='$appNo' and ansPeriod='$search' and ansRem='C' and qzTopic='$tpID'";
  				$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
				$row4=mysql_fetch_row($result4);
				$score=$row4[0];
				$equiv=equivalent($tpID,$sex,$score);
			?>
      <?php } ?>
    </table></td>
  </tr>
  <?php
	    $bcool = "#FFFFFF";
	  $tpStat=0;
		while ($row = mysql_fetch_object($result)){
			$name=$row->smLName . ", " . $row->smFName . " " . $row->smMName;
			$appNo=$row->smAppNo;
		?>
  <tr>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="center"><?php echo $row->smAppNo ?></div></td>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $name ?></div></td>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->smSex ?></div></td>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text"><?php $new_date = date("M d Y", strtotime($row->smExamDateFns));
			echo $new_date ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
      <?php 
			$query3="SELECT * FROM topics order by tpID";
			$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
			while ($row3 = mysql_fetch_object($result3)){ 
				$tpID=$row3->tpID;
				$tpTopic=$row3->tpTopic;
				$query4="select count(*) FROM answer INNER JOIN questions ON answer.ansQzItemNo = questions.qzItemNo
						WHERE ansAppNo='$appNo' and ansPeriod='$search' and ansRem='C' and qzTopic='$tpID'";
  				$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
				$row4=mysql_fetch_row($result4);
				$score=$row4[0];
				$equiv=equivalent($tpID,$sex,$score);
			?>
      <tr>
        <td width="174" class="text"><?php echo $tpTopic ?></td>
        <td width="33" align="center" class="text"><?php echo $score ?></td>
        <td width="42" align="center" class="text"><?php echo $equiv[0] ?></td>
        <td width="51" align="center" class="text"><?php echo $equiv[1] ?></td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
  <?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
 	    } //WHILE APPLICANT
		?>
  <tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="left">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="left"><?php
  }	//SEARCH ?></td>
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
