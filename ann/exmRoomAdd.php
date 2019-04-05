<?php
include('ems_ann.php');
disable_cache();


function main_form_ROOMADD($subM,$mMenu){
global $access;
global $page2, $error,$errMsg;
global $rmCodeE,$rmBldgE,$rmNoE;
$subMenu=$subM;

if (($error==1) && ($_POST['Submit'])){
	$rmCode=$_POST['rmCode'];

	$rmBldg=$_POST['rmBldg'];
	$rmNo=$_POST['rmNo'];
	$rmLUser=$_POST['rmLUser'];
	
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
          <td class="content-home"><h3>room file maintenance - add</h3>
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
                <td align="center"><table width="550" height="124" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="549" id="nav1"><table width="535" border="0" align="center" cellpadding="0">
                      <tr>
                        <td width="114" class="text" >&nbsp;</td>
                        <td width="413"><br /></td>
                      </tr>
                      <tr>
                        <td >Room Building </td>
                        <td><input name="rmBldg" type="text" id="rmBldg" value="<?php echo $rmBldg ?>" size="35" maxlength="10" style="background-color: <?php echo $rmBldgE ?>" /></td>
                      </tr>
                      <tr>
                        <td >Room No. </td>
                        <td><input name="rmNo" type="text" id="rmNo" value="<?php echo $rmNo ?>" size="5" maxlength="5" style="background-color: <?php echo $rmNoE ?>" /></td>
                      </tr>
                      <tr>
                        <td class="text">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text">&nbsp;</td>
                        <td><input name="Submit" type="submit" value="Save" id="submit" class="submit" /></td>
                      </tr>
                    </table></td>
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


function validate_ROOM(){
//sysRoomsFileAdd.php

  global $page2, $error,$errMsg;
  global $rmCodeE, $rmBldgE, $rmNoE;

  $error=0;
  $errMsg="";
  $error2 ="#FFCCCC";

  $rmCodeE="";
  $rmBldgE="";
  $rmNoE="";
  $rmLUserE="";
  $rmLDateE="";
  
  $rmBldg=$_POST['rmBldg'];
  $rmNo=$_POST['rmNo'];
  $rmCode=$rmBldg . $rmNo;


if (($_POST['rmBldg'] == NULL) and ($_POST['rmNo'] == NULL)){
	$rmBldgE=$error2;
	$rmNoE=$error2;
	$error=1;
	$errMsg="Room Building and Number";
}else{
	if ($_POST['rmBldg'] == NULL){
		$rmBldgE=$error2;
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Room Building";
		}else{
			$errMsg= "$errMsg, Room Building";
		}
	}else{
		if ($_POST['rmNo'] == NULL){
			$rmNoE=$error2;
			$error = 1;
			if ($errMsg==""){
				$errMsg= "Room No";
			}else{
				$errMsg= "$errMsg, Room No";
			}
		}else{
			include('conf.php');
			$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
			mysql_select_db($db) or die ('Unable to connect to database');
			$query="SELECT * FROM rooms WHERE rmCode='$rmCode'";
			$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
			if (mysql_num_rows($result) == 1) {
				$rmBldgE=$error2;
				$rmNoE=$error2;
				$error=1;
				$errMsg="Room Building and Number";
			}
			mysql_free_result($result);
			mysql_close($conn);
		}
	}
}
 return $error;
}
  
    
function process_add_ROOM(){
//sysRoomsFileAdd.php

	$rmBldg=strtoupper($_POST['rmBldg']);
	$rmNo=$_POST['rmNo'];
	$rmLUser=$_SESSION['user'];
	$rmCode=$rmBldg . $rmNo;

	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$pass='12345';
	$passWord = md5($pass);
	$query="INSERT INTO rooms 
	 		(rmCode,rmBldg,rmNo,rmLUser,rmLDate) VALUES 	
	 		('$rmCode','$rmBldg','$rmNo','$rmLUser',now())";
  	$result = mysql_query($query);
  
	mysql_close($conn);
}

//########################  MAIN ##########################
session_start();
$page = "exmRoom.php";
$page2 = "exmRoomAdd.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exmMenu";
$mainMenu="exmMainMenu";
$pageName="ROOM FILE MAINTENANCE - ROOM";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
 	if (!$_POST['Submit']){
   	 	 main_form_ROOMADD($subMenu,$mainMenu);
	}else{
		$err=validate_ROOM();
		if ($err==1){
   	 		main_form_ROOMADD($subMenu,$mainMenu);
		}else{
			process_add_ROOM();
			$success="Confirm Addition of Room.";
			msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
	    }
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}


?>