<?php
include('ems_ann.php');
disable_cache();

function selPeriod(){
}

function main_form($subM,$mMenu){
$subMenu=$subM;

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from control";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	$find=mysql_num_rows($result);
	if ($find == 1 ){
		$row2 = mysql_fetch_array($result);
		$sem=$row2['scSem'];
		$syFr=$row2['scSYFr'];
		$syTo=$row2['scSYTo'];
		$defPer=$sem . "-" . $syFr . "-" . $syTo;
	}

if ($_POST['Submit']){
	$period=$_POST['selPeriod'];
}else{
	$period=$defPer;
}

//echo $period;
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
          <td class="content-home"><h3>SYSTEM control</h3>
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
                        <td width="114" >Default Period</td>
                        <td width="413"><span class="text">
                          <select name="selPeriod" class="textfield">
                            <?php
  							$cur_yr=date("Y",mktime());
  							$cur_yr=$cur_yr+1;
  							for ($yr=2010; $yr<=$cur_yr; $cur_yr--){
  								for ($sem=1; $sem<=3 ; $sem++){
    								$per[]=$sem . "-" . ($cur_yr-1) . "-" . $cur_yr;
								}
  							}
  							foreach($per as $i){
    							if ($i == $period){
        							echo "<option selected>$i</option>";
   								}else{
       								echo "<option>$i</option>";
    							}
  							}	 
          					?>
                            </select>
                          </span></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input name="Submit" type="submit" value="Submit" id="submit" class="submit"/></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2">NOTE: Set Default Period for  Online Entrance Exam Application</td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
                      <td id="nav3">&nbsp;</td>
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

function process_edit(){
//sysUserAdd.php

	$period=$_POST['selPeriod'];
	$per=explode("-",$period);
	$sem=$per[0];
	$syFr=$per[1];
	$syTo=$per[2];
	//echo "$sem * $syFr * $syTo";
	$user=$_SESSION['user'];

	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="UPDATE control SET 
 		scSem='$sem',scSYFr='$syFr',scSYTo='$syTo',
		scLUser='$user',scLDate=now()";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  
	mysql_close($conn);
}
//########################  MAIN ##########################
session_start();
$page = "sysControl.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";
$mainMenu="sysMainMenu";
$pageName="SYSTEM CONTROL";

if (!isset($user)){
  header("Location:applicant.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
 	if (!$_POST['Submit']){
		main_form($subMenu,$mainMenu);
	}else{
		process_edit();
		$success="Confirm update of default period";
		msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>