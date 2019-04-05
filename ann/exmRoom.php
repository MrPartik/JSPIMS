<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
global $page, $error,$errMsg;
$subMenu=$subM;

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page ?>">
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
          <td class="content-home"><h3>rOOM file maintenance</h3>
            </td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
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
                <td colspan="2" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="26">&nbsp;</td>
                <td width="754"><a href="exmRoomAdd.php">Add Room</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="center"><iframe width="730" height="700" src="exmRoom_frame.php?search=<?php echo $_POST['selPeriod'] ?>" marginheight="1" marginwidth="1"  frameborder="1" scrolling="Yes" > </iframe>&nbsp;</td>
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
$page = "exmRoom.php";
$page2 = "exmRoom_frame.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exmMenu";
$mainMenu="exmMainMenu";
$pageName="Room File Maintenance";

if (!isset($user)){
  header("Location:exam.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
		main_form($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>