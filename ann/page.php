<?php
function main_form(){
?>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="services-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr><td width="122" align="center" valign="top">
  <?php getWebMenu(); ?>
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
          <td class="content-home"><h3> ENTRANCE EXAM MANAGEMENT SYSTEM<br>
            ONLINE APPICATION </h3>
            </td>
          </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="23">&nbsp;</td>
              <td width="476" valign="top">
                <form name="form1" method="post" action="" class="form">
                  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td colspan="3" align="center"><span class="title_text">Application for 1st Semester, SY 2019-2020</span></td>
                      </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="3" align="center"><img src="images/apply.jpg" width="470" height="173"></td>
                      </tr>
                    <tr>
                      <td width="194">&nbsp;</td>
                      <td width="21">&nbsp;</td>
                      <td width="485">&nbsp;</td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight" >First Name</td>
                      <td valign="top" class="textBigRight" >&nbsp;</td>
                      <td><input type="text" name="firstname" value="" class="textfield" placeholder="First Name"></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Middle Name</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><label for="textfield2"></label>
                        <input type="text" name="middlename" value="" class="textfield" placeholder="Middle Name"></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Last Name</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><input type="text" name="lastname"  value="" class="textfield" placeholder="Last Name"></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Date of Birth</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><input type="date" name="birth"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Gender</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><select name="sex" id="select"  value="" class="textfield" placeholder="">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Citizenship</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><input type="text" name="username2"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Contact Number</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><label for="textfield7"></label>
                        <input type="text" name="password"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Address</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><input type="text" name="username"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Email Address</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><label for="textfield6"></label>
                        <input type="text" name="password"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">School Last  Attended</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><input type="text" name="password2"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">SHS Track</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><label for="textfield7"></label>
                        <input type="text" name="password"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Degree Program</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">First Choice</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><label for="textfield6"></label>
                        <input type="text" name="password"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Second Choice</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><input type="text" name="username"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td valign="top" class="textBigRight">Third Choice</td>
                      <td valign="top" class="textBigRight">&nbsp;</td>
                      <td><input type="text" name="username"  value="" class="textfield" placeholder=""></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="3"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="26" bgcolor="#FFCC66">&nbsp;TERMS AND CONDITION</td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          </tr>
                        <tr>
                          <td>Application to courses not aligned to SHS track is subject to conditions. <br>
                            <br>
                            I am aware that:<br>
                            <ol>
                              <li>the University will create and maintain computerized and hard copy records of my personal data in the course of my study and after I leave the University;</li>
                              <li>these records will be processed in compliance with the Data Privacy Act 2012.</li>
                              </ol>
                            I hereby give my consent that my personal data in custody of the University may be used by the University for internal reports and for related student administration to external parties.</td>
                          </tr>
                        <tr>
                          <td><hr></td>
                          </tr>
                        </table></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="checkbox" name="checkbox" id="checkbox">
                        I agree to the terms and condition above</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button2" id="button2" value="Cancel" class="submit"> 
                        <input type="submit" name="button" id="button" value="Submit Application" class="submit"></td>
                      </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                      </tr>
                    </table>
                  </form>
                </td>
              <td width="41">&nbsp;</td>
              </tr>
            <tr>
              <td height="71">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
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
  </table></td>
</tr>
</table>
<?php 
}

//########################  MAIN ##########################
session_start();
$page = "page.php";
include('ems_ann.php');

if (!$_POST['Submit']){
 	main_form();
}else{
	$err=validate();
	if ($err==1){
   		main_form();
	}else{
		process_add_topic();
		$success="Confirm Addition of Topic in " . $_POST['subj'] . " subject. ";
		msg($success,$error,$page,$subMenu);
	}
}
getWebFooter();

?>