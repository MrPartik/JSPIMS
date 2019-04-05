<?php
function input_data_TAKEEXAM(){
global $access;
?>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page ?>">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="home-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr><td width="122" align="center" valign="top">
  <?php getTakeExamLoginMenu(); ?>
  </td>
  <td width="838" valign="top"> <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="11">&nbsp;</td>
      <td width="780">&nbsp;</td>
      <td width="10">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><table width="795" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="content-services"><h3>APPLICANT user login</h3>
            &nbsp;
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="936" class="content-services" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="23">&nbsp;</td>
                <td width="476" valign="top"><table width="470" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
                  <tr>
                    <td colspan="2" class="textBig" >If you are already registered as an authorized applicant then kindly enter your Applicant Number and Password</td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td colspan="2" align="center"><span class="error">
                      <?php 
				  echo $access . "<br>";  	?>
                    </span></td>
                    </tr>
                  <tr>
                    <td width="95" valign="top" class="textBig">Applicant No. </td>
                    <td width="375"><input type="text" name="user" class="textfield" placeholder="Username" /></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBig">Password</td>
                    <td><label for="textfield2"></label>
                      <input type="password" name="password" class="textfield" placeholder="Password" /></td>
                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="Submit" id="button" value="Login" class="submit" /></td>
                    </tr>
                  </table></td>
                <td width="41">&nbsp;</td>
                <td width="240" valign="top"><img src="images/logoEEMS.gif" width="225" height="100" /><span class="textBig"><br />
                  This application is innovative  entrance exam management system for tertiary level  is developed to assist the university guidance and testing services. This system is design to be simple and easily understood. Its flexibility makes it amenable for future changes and amendments to either incorporate other aspects of intelligence. The questions of the entrance exam are loaded and visually displayed on the screen of the system. The examinee answers the question on the computer system, immediately the question is marked and notified. The result of the examination is also directly displayed into the server at the end of the examination which goes a long way to lessen the fears of the Examinee that they were marked down in the examination. </span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td width="240" valign="top">&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td width="240" valign="top">&nbsp;</td>
                </tr>
              <tr>
                <td height="147">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td width="240" valign="top">&nbsp;</td>
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
    <td valign="bottom"></td>
  </tr>
  </table></td>
</tr>
</table>
<?php getWebFooterHome(); ?>
</form>
<?php 
}



//########################  MAIN ##########################
session_start();
$page = "page.php";
include('ems_ann.php');

if (!$_POST['Submit']){
 	input_data_TAKEEXAM();
}else{
   disable_cache();
   get_Applicant_user();
}


?>