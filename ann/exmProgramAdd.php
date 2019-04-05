<?php
include('ems_ann.php');
disable_cache();


function main_form_PROGRAMADD($subM,$mMenu){
global $access;
global $page2, $error,$errMsg;
global $prCodeE, $prDescE ;//error var
$subMenu=$subM;

if (($error==1) && ($_POST['Submit'])){
    $prCode=$_POST['prCode'];
	$prDesc=$_POST['prDesc'];
	$prLUser=$_SESSION['user'];
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
          <td class="content-home"><h3>PROGRAM file maintenance - add</h3>
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
                <td valign="top">&nbsp;</td>
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
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><table width="550" height="124" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="549" id="nav1"><table width="535" border="0" align="center" cellpadding="0">
                      <tr>
                        <td width="114" align="left"><span class="<?php echo $prCodeE ?>">Code</span></td>
                        <td width="413"><input name="prCode" type="text" id="prCode" value="<?php echo $prCode ?>" size="20" maxlength="15" style="background-color:<?php echo 

$prCodeE ?>"/>
                          <br />
                          <span class="babes">Valid combination: A-Z,a-z,0-9,Underscores ( _ ) and dash ( - )</span></td>
                      </tr>
                      <tr>
                        <td  align="left"><span class="<?php echo $prDescE ?>">Description</span></td>
                        <td><input name="prDesc" type="text" id="prDesc" value="<?php echo $prDesc ?>" size="50" maxlength="50" style="background-color:<?php echo $prDescE ?>" 

/></td>
                      </tr>
                      <tr>
                        <td class="text" >&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text" >&nbsp;</td>
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


function validate(){
  global $page2, $error,$errMsg;
  global $prCodeE, $prDescE;

    $error=0;
    $errMsg="";
    $error2 ="#FFCCCC";

    $prCodeE="";
	$prDescE="";
  
    $prCode=$_POST['prCode'];
	$prDesc=$_POST['prDesc'];
  
	if ($prCode==""){
		$prCodeE=$error2;
		$error=1;
		$errMsg="Program Code";
	}else{
		include('conf.php');
		$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
		mysql_select_db($db) or die ('Unable to connect to database');
		$query="SELECT * FROM program WHERE prCode='$prCode'";
		$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
		if (mysql_num_rows($result) == 1) {
			$prCode=$error2;
			$error=1;
			$errMsg="Program Code";
		}
		mysql_free_result($result);
  		mysql_close($conn);
	}

	if ($prDesc == NULL){
    	$prDescE=$error2;
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Program Description";
		}else{
			$errMsg= "$errMsg, Program Description";
		}
	}
 return $error;
}
  
    
function process_add_PROGRAMS(){
//sysProgramAdd.php

    $prCode=strtoupper($_POST['prCode']);
	$prDesc=$_POST['prDesc'];
	$prLUser=$_SESSION['user'];

	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="INSERT INTO program 
	 		(prCode,prDesc,prLUser,prLDate) VALUES 	
	 		('$prCode','$prDesc','$prLUser',now())";
    $result = mysql_query($query) or die ("Error in query : $query . " . mysql_error());
	//echo $query;
	mysql_close($conn);
}


//########################  MAIN ##########################
session_start();
$page = "exmProgram.php";
$page2 = "exmProgramAdd.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exmMenu";
$mainMenu="exmMainMenu";
$pageName="PROGRAM FILE MAINTENANCE - ADD";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
 	if (!$_POST['Submit']){
   	 	 main_form_PROGRAMADD($subMenu,$mainMenu);
	}else{
		$err=validate();
		if ($err==1){
   	 		main_form_PROGRAMADD($subMenu,$mainMenu);
		}else{
			process_add_PROGRAMS();
			$success="Confirm Addition of Programs.";
			msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
	    }
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}


?>