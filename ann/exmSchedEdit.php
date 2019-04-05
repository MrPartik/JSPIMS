<?php
include('ems_ann.php');
disable_cache();

function selPeriod(){
  $cur_yr=date("Y",mktime());
  $cur_yr=$cur_yr+1;
  for ($yr=2010; $yr<=$cur_yr; $cur_yr--){
  	for ($sem=1; $sem<=3 ; $sem++){
    	$per[]=$sem . "-" . ($cur_yr-1) . "-" . $cur_yr;
	}
  }
  foreach($per as $i){
    if ($i == $_POST['selPeriod']){
        echo "<option selected>$i</option>";
    }else{
        echo "<option>$i</option>";
    }
  }	 
}

function selTime(){
  $time = array(
  				"07:00 AM","07:30 AM","08:00 AM","08:30 AM","09:00 AM","09:30 AM",
  				"10:00 AM","10:30 AM","11:00 AM","11:30 AM","12:00 PM","12:30 PM",
				"01:00 PM","01:30 PM","02:00 PM","02:30 PM","03:00 PM","03:30 PM",
				"04:00 PM","04:30 PM","05:00 PM","05:30 PM","06:00 PM","06:30 PM",
				"07:00 PM","07:30 PM","08:00 PM","08:30 PM","09:00 PM","09:30 PM",
				"10:00 PM");
   return $time;
}


function main_form($subM,$mMenu){
global $access;
global $page, $error,$errMsg;
global $periodE,$program1E,$program2E,$program3E,$program4E,$program5E,$timeE,$roomE,$exDateE;
$subMenu=$subM;

$rooms=getRooms();
list ($prCode,$prDesc) = getProgramAll();

if (($error==1) && ($_POST['Submit'])){
/*	$topic=$_POST['topic'];
	$ques=$_POST['ques'];
	$optA=$_POST['optA'];
	$optB=$_POST['optB'];
	$optC=$_POST['optC'];
	$optD=$_POST['optD'];
	$ans=$_POST['ans'];*/
}

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page2 ?>">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td height="850" class="news-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr><td width="122" align="center" valign="top"><?php 
			    if ($mMenu=="sysMainMenu") {
					getSysMainMenu();
				}
			    if ($mMenu=="repMainMenu") {
					getRepMainMenu();
				}
			    if ($mMenu=="exmMainMenu") {
					getExmMainMenu();
				}
			    if ($mMenu=="appMainMenu") {
					getAppMainMenu();
				}
			?></td>
  <td width="838" valign="top"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="11">&nbsp;</td>
      <td width="780">&nbsp;</td>
      <td width="10">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td ><table width="795" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="content-home"><h3>CREATE EXAM SCHEDULE</h3>
            </td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
                  <tr>
                    <td><?php 
			    if ($subMenu=="repMenu") {
					repMenu();
				}
			    if ($subMenu=="sysMenu") {
					sysMenu();
				}
			    if ($subMenu=="exmMenu") {
					exmMenu();
				}
			    if ($subMenu=="appMenu") {
					appMenu();
				}
			?>&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td width="456" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><?php 
		if ($error==1) {   
			echo "<span class='error'>Invalid Entry on : </span>";
			echo "<span class='text'><br>$errMsg</span>"; 
			echo "<span class='text'>          <br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span><br />";
			echo "<br>";
		}
		?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><table width="600" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="95" > Period </td>
                    <td width="305" style="background-color:<?php echo $periodE ?>"><select name="selPeriod" class="textfield" >
                      <?php
				  selPeriod();
          		?>
                    </select></td>
                    </tr>
                  <tr>
                    <td >Date of Exam</td>
                    <td style="background-color:<?php echo $exDateE ?>"><input name="exDate" type="Date" class="textfield" id="exDate" placeholder=""  value="<?php echo $_POST['exDate'] ?>"  /></td>
                    </tr>
                  <tr>
                    <td >Time</td>
                    <td style="background-color:<?php echo $timeE ?>">
                      <select name="clTimeIn" id="clTimeIn" >
                        <?php 
			$time1=selTime();
			foreach($time1 as $i){
    			if ($i == $_POST['clTimeIn']){
        			echo "<option selected>$i</option>";
    			}else{
       				 echo "<option>$i</option>";
    			}
		    }	 
			?>
                        </select>
                      -
  			<select name="clTimeOut" id="clTimeOut">
   			<?php 
			$time2=selTime();
			foreach($time2 as $i){
    			if ($i == $_POST['clTimeOut']){
        			echo "<option selected>$i</option>";
    			}else{
       				 echo "<option>$i</option>";
    			}
		    }	 
			?>
  			</select>
                    </td>
                    </tr>
                  <tr>
                    <td >Room</td>
                    <td style="background-color:<?php echo $roomE ?>">
                      <select name="room" class="textfield" id="room">
                        <?php
					for($i=0;$i<sizeof($rooms);$i++){
						if ($rooms[$i]==$_POST['room']){
							echo "<option value=$rooms[$i] selected>$rooms[$i]</option>";
						}else{
							echo "<option value=$rooms[$i] >$rooms[$i]</option>";
						}
					}
					?>
                        </select>
                    </td>
                    </tr>
                  <tr>
                    <td valign="top" >Program 1</td>
                    <td style="background-color:<?php echo $program1E ?>">
                      <select name="program1" class="textfield" id="program">
                        <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program1']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                        </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 2</td>
                    <td style="background-color:<?php echo $program2E ?>">
                    <select name="program2" class="textfield" id="program2">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program2']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                      </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 3</td>
                    <td style="background-color:<?php echo $program3E ?>">
                    <select name="program3" class="textfield" id="program3">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program3']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                      </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 4</td>
                    <td style="background-color:<?php echo $program4E ?>">
                    <select name="program4" class="textfield" id="program4">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program4']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                      </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 5</td>
                    <td style="background-color:<?php echo $program5E ?>">
                    <select name="program5" class="textfield" id="program5">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program5']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                    </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Status</td>
                    <td style="background-color:<?php echo $program5E ?>">
                    <select name="suAccStatus" id="suAccStatus" class="textfield">
                      <?php
  $AdmStatus = array("Enabled","Disabled");
  foreach($AdmStatus as $items){
    if ($items == $suAccStatus){
       echo "<option selected>$items</option>";
    }else{     
       echo "<option>$items</option>";
    }
  }
?>
                    </select></td>
                  </tr>
                  <tr>
                    <td class="text" >&nbsp;</td>
                    <td ><input name="Submit" type="submit" id="Submit" value="Submit" class="submit" /></td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td align="center">&nbsp;</td>
                </tr>
              <tr>
                <td height="19">&nbsp;</td>
                </tr>
            </table></td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
    <td valign="bottom"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
    <td valign="bottom"> <?php getSysFooter(); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
    <td valign="bottom">&nbsp;</td>
  </tr>
  </table></td>
</tr>
</table>
</form>
<?php 
}

function validate(){
global $page, $error,$errMsg;
global $periodE,$program1E,$program2E,$program3E,$program4E,$program5E,$timeE,$roomE,$exDateE;

	$periodE="#FFFFFF";
	$program1E="#FFFFFF";
	$program2E="#FFFFFF";
	$program3E="#FFFFFF";
	$program4E="#FFFFFF";
	$program5E="#FFFFFF";
	$timeE="#CCCCCC";
	$roomE="#CCCCCC";
	
	$selPeriod = $_POST['selPeriod'];
	//$per=explode("-",$selPeriod);
	$exDate = $_POST['exDate'];
	$sched1a=convert_MTime($_POST['clTimeIn']);
	$sched1b=convert_MTime($_POST['clTimeOut']);
	$time=$sched1a . "-" . $sched1b;
	$room=$_POST['room'];
	$program1 = $_POST['program1'];
	$prog1=explode("-",$program1);
 
  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');
  $query="SELECT * FROM sched WHERE scPeriod='$selPeriod' and scDate='$exDate' and scTime='$time' and scRoom='$room'";
  //echo $query;
  $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  if (mysql_num_rows($result) >= 1) {
	$periodE="#FFCCCC";
	$exDateE="#FFCCCC";
	$timeE="#FFCCCC";
	$roomE="#FFCCCC";
	$error=1;
	$errMsg="Exam Schedule already on file";
  }

	if ($_POST['selPeriod']==NULL){
		$periodE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Period";
		}else{
			$errMsg= "$errMsg, Period";
		}
	}
    if ($_POST['clTimeIn']<>NULL) {
	  if ($_POST['clTimeOut']==NULL){
		$timeE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Time";
		}else{
			$errMsg= "$errMsg, Time";
		}
	  }
	}

return $error;
}
  
    
function process_add(){
//studRClassEntry.php

	$selPeriod = $_POST['selPeriod'];
	//$per=explode("-",$selPeriod);
	$exDate = $_POST['exDate'];
	$sched1a=convert_MTime($_POST['clTimeIn']);
	$sched1b=convert_MTime($_POST['clTimeOut']);
	$time=$sched1a . "-" . $sched1b;
	$room=$_POST['room'];

	$program1 = $_POST['program1'];
	if ($program1<>""){ $prog1=explode("-",$program1); 	$pg1=$prog1[0];	}else{ 	$pg1=""; }
	$program2 = $_POST['program2'];
	if ($program2<>""){ $prog2=explode("-",$program2); 	$pg3=$prog2[0];	}else{ 	$pg2=""; }
	$program3 = $_POST['program3'];
	if ($program3<>""){ $prog3=explode("-",$program3); 	$pg3=$prog3[0];	}else{ 	$pg3=""; }
	$program4 = $_POST['program4'];
	if ($program4<>""){ $prog4=explode("-",$program4); 	$pg4=$prog4[0];	}else{ 	$pg4=""; }
	$program5 = $_POST['program5'];
	if ($program5<>""){ $prog5=explode("-",$program5); 	$pg5=$prog5[0];	}else{ 	$pg5=""; }

	$LUser=$_SESSION['user'];
	$scStatus=$_POST['suAccStatus'];
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	$query="INSERT INTO sched(scPeriod,scDate,scTime,scRoom,
			scProgram1,scProgram2,scProgram3,scProgram4,scProgram5,scStatus,
			scLUser,scLDate)
			VALUES ('$selPeriod ','$exDate','$time','$room',
			'$pg1','$pg2','$pg3','$pg4','$pg5','$scStatus',
			'$LUser',now())";
	//echo $query;
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());

}


//########################  MAIN ##########################
session_start();
$page = "exmSched.php";
$page2 = "exmSchedAdd.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exmMenu";
$mainMenu="exmMainMenu";
$pageName="Create Exam Schedule";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
	if (!$_POST['Submit'])  {
		main_form($subMenu,$mainMenu);
	}else{
		$err=validate();
		if ($err==1){
			main_form($subMenu,$mainMenu);
		}else{
			process_add();
			$success="Confirm Addition of Exam Schedule";
			msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
		}
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}


?>