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

	$search=$_GET['search'];
	$sched=$_GET['sched'];
	$program=$_GET['prog'];
	$progCh=$_GET['progCh'];
	$sex=$_GET['sex'];
	//echo "$search * $program * $progCh * $sex";

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);
	 $query="select * FROM sched where scID='$sched'";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	 $row = mysql_fetch_object($result)

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
          <td class="content-home"><h3>EXAM RESULT BY EXAM SCHEDULE</h3>
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
                <td width="456" valign="top"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td >Exam Schedule ID </td>
                    <td><strong><?php echo $row->scID ?></strong></td>
                    <td >&nbsp;</td>
                    <td >&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="123" >Period</td>
                    <td width="214"><strong><?php echo $row->scPeriod ?></strong></td>
                    <td width="87" >Program 1</td>
                    <td width="176" ><strong><?php echo $row->scProgram1 ?></strong></td>
                    </tr>
                  <tr>
                    <td >Date</td>
                    <td><strong><?php echo $row->scDate ?></strong></td>
                    <td >Program 2</td>
                    <td ><strong><?php echo $row->scProgram2 ?></strong></td>
                  </tr>
                  <tr>
                    <td >Time</td>
                    <td><strong><?php echo $row->scTime ?></strong></td>
                    <td >Program 3</td>
                    <td ><strong><?php echo $row->scProgram3 ?></strong></td>
                  </tr>
                  <tr>
                    <td >Room</td>
                    <td><strong><?php echo $row->scRoom ?></strong></td>
                    <td >Program 4</td>
                    <td ><strong><?php echo $row->scProgram4 ?></strong></td>
                  </tr>
                  <tr>
                    <td >Status</td>
                    <td><strong><?php echo $row->scStatus ?></strong></td>
                    <td >Program 5</td>
                    <td ><strong><?php echo $row->scProgram5 ?></strong></td>
                  </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><iframe width="730" height="700" src="repResultSchedList_frame.php?search=<?php echo $search ?>&&sched=<?php echo $row->scID ?>&&progCh=<?php echo $progCh ?>&&prog=<?php echo $program ?>&&sex=<?php echo $sex ?>" marginheight="1" marginwidth="1"  frameborder="1" scrolling="Yes" > </iframe></td>
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
$page = "repAppSched.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="repMenu";
$mainMenu="repMainMenu";

if (!isset($user)){
  header("Location:applicant.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
   	 	main_form($subMenu,$mainMenu);
  }else{
  		$error="Your not allowed to access this page!";
		msg_Rep($success,$error,$page,$subMenu,$mainMenu);
  }
}

?>