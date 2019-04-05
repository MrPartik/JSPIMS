<?php
function msg($suc,$err,$pageBack,$sub_Menu){
global $error,$success;      
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
              <td width="476" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="84">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="error">
                    <?php 
		  if ($err<>O ){
		  echo $err;
		  } 
		  ?>
                    &nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="success">
                    <?php 
		  if ($suc<>NULL ){
		  echo $suc;
		  } 
		  ?>
                    &nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" class="instruction">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" align="center" class="instruction"><a href="<?php echo $pageBack ?>" class="backLink">Back</a></td>
                </tr>
              </table></td>
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
/*session_start();
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
getWebFooter();*/

?>