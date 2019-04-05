<?php
include('ems_ann.php');
disable_cache();

function selPeriod(){
  $cur_yr=date("Y",mktime());
  $cur_yr=$cur_yr+1;
  for ($yr=2010; $yr<=$cur_yr; $cur_yr--){
  	for ($sem=1; $sem<=3 ; $sem++){
    	$per[]=$sem . "-" . ($cur_yr-1) . "-" . $cur_yr;
	}
  }
  foreach($per as $i){
    if ($i == $_POST['selPeriod']){
        echo "<option selected>$i</option>";
    }else{
        echo "<option>$i</option>";
    }
  }	 
}


function main_form($subM,$mMenu){
$subMenu=$subM;
$search=$_POST['selPeriod'];
list ($prCode,$prDesc) = getProgramAll();
$sex=$_POST['sex'];

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page ?>">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td height="850" class="services-page">
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
          <td class="content-home"><h3>EXAM RESULT BY exam schedule</h3>
            </td>
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
                <td width="456" valign="top"><table width="730" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="3" ><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="113" >Select Period </td>
                        <td width="387"><select name="selPeriod" class="textfield">
                          <?php
				  selPeriod();
          		?>
                          </select></td>
                        </tr>
                      <tr>
                        <td >Program Choices</td>
                        <td ><select name="choices" class="textfield">
                          <?php
  $ch = array("First Choice","Second Choice","Third Choice");
  foreach($ch as $items){
    if ($items == $choices){
       echo "<option selected>$items</option>";
    }else{     
       echo "<option>$items</option>";
    }
  }					?>
                          </select></td>
                        </tr>
                      <tr>
                        <td >Degree Program</td>
                        <td ><select name="program" class="textfield">
                          <?php
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                          </select></td>
                      </tr>
                      <tr>
                        <td >Sex</td>
                        <td ><select name="sex" id="select"  value="" class="textfield" placeholder="">
                          <?php
  $s = array("Male","Female");
  foreach($s as $items){
    if ($items == $sex){
       echo "<option selected>$items</option>";
    }else{     
       echo "<option>$items</option>";
    }
  }					
  ?>
                        </select></td>
                      </tr>
                      <tr>
                        <td >&nbsp;</td>
                        <td ><input name="Submit" type="submit" id="Submit" value="Search" class="submit"/></td>
                      </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td width="143" >&nbsp;</td>
                    <td width="383" class="text">&nbsp;</td>
                    <td width="204" >&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" >Select Exam Schedule</td>
                    <td >&nbsp;</td>
                  </tr>
                  </table></td>
              </tr>
              <tr>
              <?php
			  if ($_POST['choices']=='First Choice'){
				  $progCh='smProgramCode1';
			  }else{
			  	if ($_POST['choices']=='Second Choice'){
				  	$progCh='smProgramCode2';
			 	}else{
			  		if ($_POST['choices']=='Third Choice'){
				  		$progCh='smProgramCode2';
					}
				}
			  }
			  ?>
                <td align="center"><iframe width="730" height="700" src="repResultSched_frame.php?search=<?php echo $_POST['selPeriod'] ?>&&progCh=<?php echo $progCh ?>&&prog=<?php echo $_POST['program'] ?>&&sex=<?php echo $_POST['sex'] ?>" marginheight="1" marginwidth="1"  frameborder="1" scrolling="Yes" > </iframe></td>
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
$page = "repResultSched.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="repMenu";
$mainMenu="repMainMenu";
$pageName="EXAM RESULT BY EXAM SCHEDULE";

if (!isset($user)){
  header("Location:applicant.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
   	 	main_form($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_Rep($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}

?>