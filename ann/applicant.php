<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
$subMenu=$subM;

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page ?>">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td height="850" class="home-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr><td width="122" align="center" valign="top">
		  <?php 
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
			?> &nbsp; </td>
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
          <td class="content-home"><h3>APPLICANT</h3>
            &nbsp;
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="456" valign="top">&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td align="center"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0" id="subMenu">
                  <tr>
                    <td width="146" align="center"><a href="appSearch.php"><img src="images/app_Search.gif" width="125" height="125" /></a></td>
                    <td width="319">&nbsp;</td>
                    <td width="146" align="center"><a href="appProfileList.php"><img src="images/app_profile1.gif" width="125" height="125" /></a></td>
                  </tr>
                  <tr>
                    <td align="center"><a href="appSearch.php" id="subMenu_link">Search Applicant</a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="appProfileList.php" id="subMenu_link">Applicant Profile</a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
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
    <td valign="bottom">
   <?php getSysFooter(); ?>
   </td>
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

//########################  MAIN ##########################
session_start();
$page = "appSearch.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="appMenu";
$mainMenu="appMainMenu";
$pageName="APPLICANT";

if (!isset($user)){
  header("Location:applicant.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
   	 	main_form($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_App($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>