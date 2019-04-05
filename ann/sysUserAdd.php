<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
$subMenu=$subM;
  global $page2, $error,$errMsg;
  global $sysUserE,$NameE,$LNameE,$FNameE,$MNameE; //error var

global $deptCode,$psCode;

global $suID,$suLName,$suFName,$suMName,$suFullName;
global $suPosition,$suDept,$suUType,$suAccStatus;

if (($error==1) && ($_POST['Submit'])){
	$psCode=$_POST['psCode'];
	$deptCode=$_POST['deptCode'];

	$suID=$_POST['suID'];
	$suLName=$_POST['suLName'];
	$suFName=$_POST['suFName'];
	$suMName=$_POST['suMName'];
	$suFullName=$smFName . ' ' . $smLName . ' ' . $smMName;

	$suDept=$_POST['suDept'];
	$suUType=$_POST['suUType'];
	$suAccStatus=$_POST['suAccStatus'];
}

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
          <td class="content-home">
          </td>
        </tr>
        <tr>
          <td class="content-home"><h3>SYSTEM USER - add</h3>
            &nbsp;
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="780" valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
           <tr>
              <td>
		  <?php 
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
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top" align="center"><?php 
		if ($error==1) {
			echo "Invalid Entry on : </span>";
			echo "<span class='center'><br>$errMsg</span>"; 
			echo "<span class='center'>          <br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span>";
		}?></td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"><table width="550" height="124" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="549" id="nav1"><table width="535" border="0" align="center" cellpadding="0">
                      <tr>
                        <td width="114" ><span class="<?php echo $sysUserE ?>">Username</span></td>
                        <td width="413"><input name="suID" type="text" id="suID" value="<?php echo $suID ?>" size="20" maxlength="15" class="textfield"/>
                          <br />
                          <span class="text">Valid combination: A-Z,a-z,0-9,Underscores ( _ ) and dash ( - )</span></td>
                      </tr>
                      <tr>
                        <td ><span class="<?php echo $LNameE ?>">Last Name</span></td>
                        <td><input name="suLName" type="text" id="suLName" value="<?php echo $suLName ?>" size="35" maxlength="30" class="textfield"/></td>
                      </tr>
                      <tr>
                        <td ><span class="<?php echo $FNameE ?>">First Name </span></td>
                        <td><input name="suFName" type="text" id="suFName" value="<?php echo $suFName ?>" size="50" maxlength="50" class="textfield"/></td>
                      </tr>
                      <tr>
                        <td>Middle Initial </td>
                        <td><input name="suMName" type="text" id="suMName" value="<?php echo $suMName ?>" size="35" maxlength="30" class="textfield"/></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                  <table width="550" height="86" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="511" id="nav2"><table width="535" border="0" align="center" cellpadding="0">
                        <tr>
                          <td width="114">Deparment. </td>
                          <td width="415"><select name="suDept" id="suDept" class="textfield">
                            <option value="CIT">CIT</option>
                            <option value="COED">COED</option>
                            <option value="CAS">CAS</option>
                            <option value="CBA">CBA</option>
                            <option value="CICT">CICT</option>
                            <option value="CAF">CAF</option>
                            <option value="CHS">CHS</option>
                            <option value="COE">COE</option>
                            <option value="GTO">GTO</option>
                            <option value="VPAA">VPAA</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>User Type</td>
                          <td><select name="suUType" id="suUType" class="textfield">
                            <?php 
			$Flag = array("Admin","TestStaff","College","VPAA");
  			foreach($Flag as $items){
    			if ($items == $suUType){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}
			?>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Access Status </td>
                          <td><select name="suAccStatus" id="suAccStatus" class="textfield">
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
                      </table></td>
                    </tr>
                  </table>
                  <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td id="nav3"><table width="535" border="0" align="center" cellpadding="0">
                        <tr>
                          <td width="114">&nbsp;</td>
                          <td width="415"><input name="Submit" type="submit" value="Submit" id="submit" class="submit"/></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
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
  global $page2, $error,$errMsg;
  global $sysUserE,$NameE,$LNameE,$FNameE,$MNameE;

  $error=0;
  $LNameE="";
  $FNameE="";
  $MNameE="";
  $NameE="";
  $SalaryE="";
  $sysUserE="";
  $errMsg="";
  
  
$suID=$_POST['suID'];
include('conf.php');
$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
mysql_select_db($db) or die ('Unable to connect to database');
$query="SELECT * FROM users WHERE suID='$suID'";
$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
if (mysql_num_rows($result) == 1) {
	$sysUserE="error2";
	$error=1;
	$errMsg="Username";
}

if ($suID==""){
	$sysUserE="error2";
	$error=1;
	$errMsg="Username";
}
if (!ereg('^([a-zA-Z]|[0-9])+([a-zA-Z0-9_-])+$', $suID)){
	$sysUserE="error2";
	$error=1;
	$errMsg="Username";
}
 
if ($_POST['suLName'] == NULL){
    $NameE="error2";
	$LNameE="error2";
    $error = 1;
	if ($errMsg==""){
		$errMsg= "Last Name";
	}else{
		$errMsg= "$errMsg, Last Name";
	}
}

if ($_POST['suFName'] == NULL){
    $NameE="error2";
	$FNameE="error2";
    $error = 1;
	if ($errMsg==""){
		$errMsg= "First Name";
	}else{
		$errMsg= "$errMsg, First Name";
	}
}


if ($_POST['suMName']==NULL){
    $NameE="error2";
	$MNameE="error2";
	$error=1;
	if ($errMsg==""){
		$errMsg= "Middle Name";
	}else{
		$errMsg= "$errMsg, Middle Name";
	}
}

 return $error;
}

function process_add_USER(){
//sysUserAdd.php

	$psCode=$_POST['psCode'];
	$deptCode=$_POST['deptCode'];

	$suID=$_POST['suID'];
	$suLName=$_POST['suLName'];
	$suFName=$_POST['suFName'];
	$suMName=$_POST['suMName'];
	$suFullName="$suLName, $suFName $suMName";

	$suDept=$_POST['suDept'];
	$suUType=$_POST['suUType'];
	$suAccStatus='Enabled';
	$LUser=$_SESSION['user'];

	switch($suUType) {
      case ("VPAA"): $suARights=60; break;
      case ("College"): $suARights=70; break;
      case ("TestStaff"): $suARights=80; break;
      case ("Admin"): $suARights=90; break;
    }
	
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$pass='12345';
	$passWord = md5($pass);
	$query="INSERT INTO users 
	 		(suID,suPassword,suFullName,suARights,suUType,suDeptCode,suStatus,suLUser,suLDate) VALUES 	
	 		('$suID','$passWord','$suFullName','$suARights','$suUType','$suDept','$suAccStatus','$LUser',now())";
  	$result = mysql_query($query);
  
	mysql_close($conn);
}
//########################  MAIN ##########################
session_start();
$page = "sysUser.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";
$mainMenu="sysMainMenu";
$pageName="SYSTEM USER - ADD";

if (!isset($user)){
  header("Location:applicant.php");
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
			process_add_USER();
			$success="Confirm Addition of System User. <br><br>	REMINDER :Default user password is 12345. <br>
					Kindly change your password upon Sign-in.";
			msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
	    }
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>