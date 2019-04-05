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
			?>  </td>
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
          <td class="content-home"><h3>SEARCH APPLICANT</h3>
            &nbsp;
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
                  <tr>
                    <td><?php 
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
			?>
                      &nbsp;</td>
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
                <td width="456" valign="top"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0"  >
                  <tr>
                    <td width="85" >Enter Name </td>
                    <td width="270" ><input name="search" type="text" id="search" class="textfield" maxlength="30" value="<?php echo $_POST['search'] ?>"/></td>
                    <td width="120" align="left"><input type="submit" name="Submit" id="button" value="Search" class="submit" /></td>
                    </tr>
                </table></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td align="center"><iframe width="750" height="700" src="appSearch_frame.php?search=<?php echo $_POST['search'] ?>" marginheight="1" marginwidth="1"  frameborder="1" scrolling="Yes" > </iframe></td>
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

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
   	 	main_form($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_App($success,$error,$page,$subMenu,$mainMenu);
  }
}

?>