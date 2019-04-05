<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
$subMenu=$subM;
	$search=$_POST['search'];
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
          <td class="content-home"><h3>USER'S LOG</h3>
            &nbsp;
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
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
                <td colspan="2" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" valign="top"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="middle" >Enter Date:</td>
                    <td colspan="2" ><input name="search" type="text" id="search" value="<?php echo $search ?>" class="textfield"/>
                      <span class="text">
                      <input type="submit" name="Search" value="Search" id="submit" class="submit" />
                      </span></td>
                  </tr>
                  <tr>
                    <td width="76" class="text"><div align="center"></div></td>
                    <td width="301" ><span class="text"><span class="button">(e.g. yyyy-mm-dd)</span></span></td>
                    <td width="223" class="text">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td colspan="2" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="26" valign="top">&nbsp;</td>
                <td width="754" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="center"><?php
	 $search=$_POST['search'];
	 if ($search<>""){
	  ?>
                    <iframe width="700" height="600" src="sysUserLog_frame.php?search=<?php echo $search ?>" marginheight="0" marginwidth="0" frameborder="1" scrolling="Yes"> </iframe>
                    <?php
	  }
	  ?></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td colspan="2" align="center">&nbsp;</td>
                </tr>
              <tr>
                <td height="19" colspan="2">&nbsp;</td>
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
$page = "sysUserLog.php";
$page2 = "sysUserLog.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";
$mainMenu="sysMainMenu";
$pageName="USER'S LOG";

if (!isset($user)){
  header("Location:applicant.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		main_form($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_Sys($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>