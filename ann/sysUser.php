<?php
include('ems_ann.php');
disable_cache();

function main_form($subM,$mMenu){
$subMenu=$subM;
$suUType=$_POST['suUType'];

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
          <td class="content-home"><h3>SYSTEM USER</h3>
            &nbsp;
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" valign="top">
                <table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
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
                    <td width="449" s="S">User Type
                      <select name="suUType" id="suUType" class="textfield">
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
                    <td width="151"><input type="submit" name="Search" value="Search" id="submit2" class="submit"/></td>
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
                <td valign="top">&nbsp;</td>
                <td valign="top"><a href="sysUserAdd.php">Add System User</a></td>
              </tr>
              <tr>
                <td width="26" valign="top">&nbsp;</td>
                <td width="754" valign="top">&nbsp;</td>
                </tr>
              <tr>
                <td colspan="2" align="center"><?php
		$suUType=$_POST['suUType'];
	   if ($suUType<>NULL){
	   ?>
	    <iframe width="750" height="600" src="sysUser_frame.php?suUType=<?php echo $suUType ?>" marginheight="0" marginwidth="0" scrolling="yes" style="border-color:#999999" > </iframe>
	    <?php 
	    } ?></td>
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
$page = "sysUser.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="sysMenu";
$mainMenu="sysMainMenu";
$pageName="SYSTEM USER";

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