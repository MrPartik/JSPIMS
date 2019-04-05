<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
$subMenu=$subM;

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page ?>">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td height="850" class="services-page">
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
          <td class="content-home"><h3>REPORTS</h3>
            </td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="456" valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table width="502" border="0" align="center" cellpadding="0" cellspacing="0" id="subMenu">
                  <tr>
                    <td width="198" align="center"><a href="repAppSem.php"><img src="images/rep_AppPer.gif" width="125" height="125" /></a></td>
                    <td width="102">&nbsp;</td>
                    <td width="200" align="center"><a href="repAppSched.php"><img src="images/rep_AppSched.gif" width="125" height="125" /></a></td>
                    </tr>
                  <tr>
                    <td align="center"><a href="repAppSem.php" id="subMenu_link">Applicant by Period</a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="repAppSched.php" id="subMenu_link">Applicant by Exam Schedule</a></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="200" align="center"><a href="repResultSem.php"><img src="images/rep_result.gif" width="125" height="125" /></a></td>
                    <td>&nbsp;</td>
                    <td width="200" align="center"><a href="repResultSched.php"><img src="images/rep_ResSched.gif" width="125" height="125" /></a></td>
                    </tr>
                  <tr>
                    <td align="center"><a href="repResultSem.php" id="subMenu_link">Exam Result by Period</a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="repResultSched.php" id="subMenu_link">Exam Result by Schedule</a></td>
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

//########################  MAIN ##########################
session_start();
$page = "repResultSem.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="repMenu";
$mainMenu="repMainMenu";
$pageName="APPLICANT BY PERIOD";

if (!isset($user)){
  header("Location:applicant.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
   	 	main_form($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_Rep($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>