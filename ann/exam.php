<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
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
			?>&nbsp;</td>
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
          <td class="content-home"><h3>EXAM</h3>
            </td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="456" align="center">&nbsp;</td>
              </tr>
              <tr>
                <td height="19"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
                  <tr>
                    <td>&nbsp; </td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td height="19">&nbsp;</td>
              </tr>
              <tr>
                <td height="19"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" id="subMenu">
                  <tr>
                    <td width="188" align="center"><a href="exmQuestion.php"><img src="images/ex_question.gif" width="125" height="125" /></a></td>
                    <td width="154">&nbsp;</td>
                    <td width="208" align="center"><a href="exmSched.php"><img src="images/ex_sched1.gif" width="125" height="125" /></a></td>
                  </tr>
                  <tr>
                    <td align="center"><a href="exmQuestion.php" id="subMenu_link">Load Question</a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="exmSched.php" id="subMenu_link">Exam Schedule</a></td>
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
                    <td width="188" align="center"><a href="exmCreate.php"><img src="images/ex_create1.gif" width="125" height="125" /></a></td>
                    <td>&nbsp;</td>
                    <td width="208" align="center"><a href="exmEnabled.php"><img src="images/ex_enabled.gif" width="125" height="125" /></a></td>
                  </tr>
                  <tr>
                    <td align="center"><a href="exmCreate.php" id="subMenu_link">Create Exam</a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="exmEnabled.php" id="subMenu_link">Enabled Exam</a></td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center"><a href="exmRoom.php"><img src="images/ex_room.gif" width="125" height="125" /></a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="exmProgram.php"><img src="images/ex_program.gif" width="125" height="125" /></a></td>
                  </tr>
                  <tr>
                    <td align="center"><a href="exmRoom.php" id="subMenu_link2">Room File Maintenance</a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="exmProgram.php" id="subMenu_link3">Program File Maintenance</a></td>
                  </tr>
                </table></td>
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
$page = "exmQuestion.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exmMenu";
$mainMenu="exmMainMenu";
$pageName="Load Exam Question";

if (!isset($user)){
  header("Location:applicant.php");
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