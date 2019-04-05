<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
$subMenu=$subM;
	global $access;
global $page, $error,$errMsg;
global $oldPassE,$newPassE,$confPassE;

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page ?>">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td height="850" class="about-page">
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
          <td class="content-home"><h3>CHANGE PASSWORD</h3>
            </td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
                  <tr>
                    <td><?php 
			    if ($subMenu=="sysMenu") {
					sysMenu();
				}
			    if ($subMenu=="repMenu") {
					repMenu();
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
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="456" valign="top"><table width="527" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="2" align="center" class="labelTable">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" class="labelTable"><span class="text">
                      <?php 
		if ($error==1) {   
			echo "<span class='error'>Invalid Entry on : </span>";
			echo "<span class='text'><br>$errMsg</span>"; 
			echo "<span class='text'>          <br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span><br />";
		}
		?>
                      </span></td>
                  </tr>
                  <tr>
                    <td width="133" class="text">&nbsp;</td>
                    <td width="394" class="text">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="32">Old Password </td>
                    <td ><input name="oldPass" type="password" style="background-color:<?php echo $oldPassE ?>" id="input" class="textfield"/></td>
                    </tr>
                  <tr>
                    <td height="30">New Password </td>
                    <td ><input name="newPass" type="password" style="background-color:<?php echo $newPassE ?>" id="input" class="textfield"/></td>
                    </tr>
                  <tr>
                    <td height="28">Confirm Password </td>
                    <td ><input name="confPass" type="password" style="background-color:<?php echo $confPassE ?>" id="input" class="textfield"/></td>
                    </tr>
                  <tr>
                    <td class="text">&nbsp;</td>
                    <td class="text">&nbsp;</td>
                    </tr>
                  <tr>
                    <td class="text">&nbsp;</td>
                    <td><input name="Submit" type="submit" id="submit" value="Submit" class="submit"/></td>
                    </tr>
                  <tr>
                    <td class="text">&nbsp;</td>
                    <td class="text">&nbsp;</td>
                    </tr>
                </table></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
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
global $oldPassE,$newPassE,$confPassE;

$oldPassE="#FFFFFF";
$newPassE="#FFFFFF";
$confPassE="#FFFFFF";

$oldPass=$_POST['oldPass'];
$newPass=$_POST['newPass'];
$confPass=$_POST['confPass'];
$user=$_SESSION['user'];

	include('conf.php');
    $oPass = substr(md5($oldPass), 0, 20);

	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
  	$query="select * from users where suID='$user' && suPassword='$oPass'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  	if (mysql_num_rows($result) <> 1 ){
		$oldPassE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Enter valid password";
		}else{
			$errMsg= "$errMsg, Enter valid password";
		}
  	}
	mysql_free_result($result);
  	mysql_close($conn);

	if ($newPass==NULL){
		$newPassE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Enter new password";
		}else{
			$errMsg= "$errMsg, Enter new password";
		}
	}else{
		if ($newPass<>$confPass){
			$confPassE="#FFCCCC";
			$newPassE="#FFCCCC";
    		$error = 1;
			if ($errMsg==""){
				$errMsg= "New password did not match with the confirmation password";
			}else{
				$errMsg= "$errMsg, New password did not match with the confirmation password";
			}
		}
	}

return $error;
}


function process_change_PASSWORD(){
//sysPass.php
global $errors,$success;
  if (sizeof($errors)==0){
	include('conf.php');
	$oldPass=$_POST['oldPass'];
	$newPass=$_POST['newPass'];
	$confPass=$_POST['confPass'];
	$user=$_SESSION['user'];
    $oPass = substr(md5($oldPass), 0, 20);
	$nPass = md5($newPass);
			
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	$query="UPDATE users SET suPassword='$nPass' WHERE suID='$user' && suPassword='$oPass'";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	//mysql_free_result($result);
  	mysql_close($conn);
	//$errors=array();
	//$success="Password changed";
  }
}

//########################  MAIN ##########################
session_start();
$page = "sysChangeP.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";
$mainMenu="sysMainMenu";
$pageName="CHANGE PASSWORD";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
  	if (!$_POST['Submit']){
		main_form($subMenu,$mainMenu);
  	}else{
  		$err=validate();
		if ($err==1){
			main_form($subMenu,$mainMenu);
		}else{
			process_change_PASSWORD();
			$success="Confirm Change of Password";
			msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
		}
  	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>