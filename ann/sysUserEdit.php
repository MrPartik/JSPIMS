<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
$subMenu=$subM;
global $page2, $error,$errMsg;
global $NameE; //error var

$un=$_GET['un'];
$sysU = getUserDTL($un);
$suID=$un;

//echo "$un * $sysU[0]";

if (($error==1) && ($_POST['Submit'])){
	$psCode=$_POST['psCode'];
	$deptCode=$_POST['deptCode'];
	$suID=$_POST['suID'];
	$suFullName=$_POST['suFullName'];
	$suUType=$_POST['suUType'];
	$suAccStatus=$_POST['suAccStatus'];
}else{
	$suFullName=$sysU[2];
	$suUType=$sysU[3];
	$suAccStatus=$sysU[5];
	$LUser=$sysU[6];
	$LDate=$sysU[7];

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
          <td class="content-home"><h3>SYSTEM USER - EDIT</h3>
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
                <td valign="top"><table width="520" height="58" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="58" id="nav1"><table width="500" border="0" align="center" cellpadding="0">
                      <tr>
                        <td width="115" >Username</td>
                        <td width="379" ><strong><?php echo $suID ?></strong>
                          <input name="suID" type="hidden" id="suID" value="<?php echo $suID ?>" size="15" maxlength="15" /></td>
                      </tr>
                      <tr >
                        <td><span class="<?php echo $NameE ?>">Name</span></td>
                        <td><input name="suFullName" type="text" id="suFullName" maxlength="80" size="50" value="<?php echo $suFullName ?>" class="textfield"/></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                  <table width="520" height="86" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td id="nav2"><table width="500" border="0" align="center" cellpadding="0">
                        <tr>
                          <td width="115">Deparment. </td>
                          <td width="379"><select name="suDept" id="suDept" class="textfield">
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
                          </select>
                            </span></td>
                        </tr>
                        <tr>
                          <td>User Type </td>
                          <td><span class="field_value_entry">
                            <select name="suUType" id="suUType" class="textfield">
                              <?php 
			$Flag = array("Admin","TestingStaff","College","VPAA");
  			foreach($Flag as $items){
    			if ($items == $suUType){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}
			?>
                            </select>
                          </span></span></span></td>
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
                          </select>
                            </span></span></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>
                  <table width="520" height="52" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="52" id="nav3"><table width="500" border="0" align="center" cellpadding="0">
                        <tr>
                          <td width="115">Last User </td>
                          <td width="379" class="instruction"><?php echo $LUser; ?>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>Last Update </td>
                          <td class="instruction"><?php echo $LDate; ?></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>
                  <table width="520" height="57" border="0" align="center" cellpadding="0">
                    <tr>
                      <td height="53" id="nav4"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="115">&nbsp;</td>
                          <td width="385"><input type="submit" name="Submit" value="Save" id="submit" class="submit"/></td>
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
  global $NameE;

  $error=0;
  $NameE="";
  $errMsg="";
  
if ($_POST['suFullName'] == NULL){
    $NameE="error2";
    $error = 1;
	if ($errMsg==""){
		$errMsg= "Full Name";
	}else{
		$errMsg= "$errMsg, Full Name";
	}
}

 return $error;
}


function process_edit_USER(){
//sysUserEdit.php

	if ($_POST['suID']){
	$suID=$_POST['suID'];
	}else{
	$suID=$_GET['suID'];
	}	
	$psCode=$_POST['psCode'];
	$deptCode=$_POST['deptCode'];

	$suID=$_POST['suID'];
	$suFullName=$_POST['suFullName'];

	$suDept=$_POST['suDept'];
	$suUType=$_POST['suUType'];
	$suAccStatus=$_POST['suAccStatus'];

	$LUser=$_SESSION['user'];

	switch($suUType) {
      case ("VPAA"): $suARights=60; break;
      case ("College"): $suARights=70; break;
      case ("TestStaff"): $suARights=80; break;
      case ("Admin"): $suARights=90; break;
      default : $suARights=0; break;
    }

	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');

	$fullName=$suFullName;
	$query="UPDATE users SET 
 		suFullName='$fullName',suDeptCode='$suDept',suUType='$suUType',suStatus='$suAccStatus',
		suLUser='$LUser',suLDate=now()
	    WHERE suID='$suID'";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  
	mysql_close($conn);
}

//########################  MAIN ##########################
session_start();
$page = "sysUser.php";
$page2 = "sysUserEdit.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";
$mainMenu="sysMainMenu";
$pageName="SYSTEM USER - EDIT";

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
			process_edit_USER();
			$success="Confirm Update of System User";
			msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
	    }
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>