<?php
function msg_App($suc,$err,$pageBack,$subMenu,$mMenu,$pName){
global $error,$success;      
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="home-page">
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
          <td class="content-home"><h3><?php echo $pName ?></h3>
            </td>
          </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" >
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
			?>
                    &nbsp;</td>
                </tr>
              </table></td>
              </tr>
            <tr>
              <td width="23">&nbsp;</td>
              <td width="476" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="84">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="error">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="success">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="error">
                    <?php 
		  if ($err<>O ){
		  echo $err;
		  } 
		  ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="success">
                    <?php 
		  if ($suc<>NULL ){
		  echo $suc;
		  } 
		  ?>
                  </span></td>
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
    <td valign="bottom"> <?php getSysFooter(); ?></td>
  </tr>
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
    <td valign="bottom">&nbsp;</td>
  </tr>
  </table></td>
</tr>
</table>
<?php 
}


function msg_Exam($suc,$err,$pageBack,$subMenu,$mMenu,$pName){
global $error,$success;      
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="news-page">
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
          <td class="content-home"><h3><?php echo $pName ?> ff</h3>
            </td>
        </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" >
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
              <td width="23">&nbsp;</td>
              <td width="476" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="84">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="error">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="success">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="error">
                    <?php 
		  if ($err<>O ){
		  echo $err;
		  } 
		  ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="success">
                    <?php 
		  if ($suc<>NULL ){
		  echo $suc;
		  } 
		  ?>
                  </span></td>
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
    <td valign="bottom"> <?php getSysFooter(); ?></td>
  </tr>
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
    <td valign="bottom">&nbsp;</td>
  </tr>
  </table></td>
</tr>
</table>
<?php 
}

//news-page
function msg_Rep($suc,$err,$pageBack,$subMenu,$mMenu,$pName){
global $error,$success;      
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="services-page">
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
          <td class="content-home"><h3><?php echo $pName ?> </h3>
            </td>
        </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" >
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
              <td width="23">&nbsp;</td>
              <td width="476" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="84">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="error">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="success">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="error">
                    <?php 
		  if ($err<>O ){
		  echo $err;
		  } 
		  ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="success">
                    <?php 
		  if ($suc<>NULL ){
		  echo $suc;
		  } 
		  ?>
                  </span></td>
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
    <td valign="bottom"> <?php getSysFooter(); ?></td>
  </tr>
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
    <td valign="bottom">&nbsp;</td>
  </tr>
  </table></td>
</tr>
</table>
<?php 
}


function msg_Sys($suc,$err,$pageBack,$subMenu,$mMenu,$pName){
global $error,$success;      
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="about-page">
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
          <td class="content-home"><h3><?php echo $pName ?> </h3>
            </td>
        </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" >
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
              <td width="23">&nbsp;</td>
              <td width="476" valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="84">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="error">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" ><div align="center" class="success">&nbsp;</div></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="error">
                    <?php 
		  if ($err<>O ){
		  echo $err;
		  } 
		  ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="19" align="center">&nbsp;<span class="success">
                    <?php 
		  if ($suc<>NULL ){
		  echo $suc;
		  } 
		  ?>
                  </span></td>
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
    <td valign="bottom"> <?php getSysFooter(); ?></td>
  </tr>
  <tr>
    <td align="center" valign="bottom">&nbsp;</td>
    <td valign="bottom">&nbsp;</td>
  </tr>
  </table></td>
</tr>
</table>
<?php 
}

?>