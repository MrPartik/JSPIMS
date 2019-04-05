<?php
//#################################################################################################################################
// SECURITY FUNCTIONS
//#################################################################################################################################
//---------------------- used in every page for RELOADING/REFRESHING a page to avois duplication of data ------------------------
function disable_cache(){
  header('<META HTTP-EQUIV="pragma" CONTENT="nocache">');
  header("Cache-control: no-cache");
  //header("Expires: " . gmdate("D, d M Y H:i:s", microtime()) . " GMT");
}

//---------------------- used in the MAIN MENU and SUB MENU for security ------------------------
function link_with_disabled_back_button($url, $linktext){
  print "<a href=\"$url\"";
  print "ONCLICK=\"location.replace(this.href);return false;\">";
  print $linktext . "</a>";
}

function index_main(){
	$dev ="<span class=error>Detect UNAUTHORIZED COPY of this EEMS. <br></span>
	<br> "; 
	return $dev;
}

//---------------------- used in the MAIN MENU and SUB MENU for security ------------------------
function index_exp(){
	$dev ="<span class=error>Detect EXPIRED LICENSE.<br>Please pay in full for reactivation<br></span>"; 
	return $dev;
}

function configs(){
	ob_start(); // Turn on output buffering
	system('ipconfig /all'); //Execute external program to display output
	$mycom=ob_get_contents(); // Capture the output into a variable
	ob_clean(); // Clean (erase) the output buffer

	$findme = "Physical";
	$pmac = strpos($mycom, $findme); // Find the position of Physical text
	$mac=substr($mycom,($pmac+36),17); // Get Physical Address
	return $mac;
}

//#################################################################################################################################
// HEADING AND FOOTER
//#################################################################################################################################

//---------------------- header WEBSITE ------------------------

function head(){
	?><head>
	<meta charset="UTF-8">
	<title>EEMS</title>
	<link rel="stylesheet" href="css/style_web.css" type="text/css">
	</head><?php
}


function getWebMenu(){
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="122" border="0" cellspacing="0" cellpadding="0" >
  	 <tr><td height="136" align="center" ><img src="images/logo1.png"></td></tr>
  	 <tr><td valign="bottom">
   	    <table width="122" border="0" cellspacing="0" cellpadding="0" id="sidebar">
      	<tr><td id="home"><a href="home.html">Home</a></td></tr>
        <tr><td id="news"><a href="news.html">News</a></td></tr>
      	<tr><td id="selected_services"><a href="services.html">Services</a></td></tr>
      	<tr><td id="about"><a href="about.html">About</a></td></tr>
      	<tr><td id="contact"><a href="contact.html">CONTACT</a></td></tr>
    	</table>
      </td>
  	  </tr>
  	  <tr valign="bottom"><td valign="bottom"><table width="30" border="0" align="center" cellpadding="3" cellspacing="3" id="connect">
  	    <tr><td >&nbsp;</td></tr>
  	    <tr><td >&nbsp;</td></tr>
  	    <tr><td id="fb"><a href="http://www.facebook.com" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>
  	    <tr><td id="twitter"><a href="http://twitter.com/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>
  	    <tr><td id="googleplus"><a href="http://plus.google.com/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>
  	    <tr><td id="youtube"><a href="http://www.youtube.com/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>
	    </table></td></tr>
 	  </table>
<?php
}

function getTakeExamLoginMenu(){
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="122" border="0" cellspacing="0" cellpadding="0" >
  	 <tr><td height="136" align="center" ><img src="images/logo1.png"></td></tr>
  	 <tr>
  	   <td valign="bottom">
   	    <table width="122" border="0" cellspacing="0" cellpadding="0" id="sidebar">
      	<tr>
      	  <td id="selected_home"><a href="takeExamLogin.php">TAKE EXAM</a></td></tr>
        <tr>
      	  <td>&nbsp;</td></tr>
      	<tr>
      	  <td>&nbsp;</td></tr>

      	</table>
      </td>
  </tr>
  	  <tr valign="bottom"><td valign="bottom">&nbsp;</td></tr>
 	  </table>
<?php
}

function getTakeExamMenu(){
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="122" border="0" cellspacing="0" cellpadding="0" >
  	 <tr><td height="136" align="center" ><img src="images/logo1.png"></td></tr>
  	 <tr>
  	   <td valign="bottom">
   	    <table width="122" border="0" cellspacing="0" cellpadding="0" id="sidebar">
      	<tr>
      	  <td id="selected_home"><a href="takeExamLogin.php">TAKE EXAM</a></td></tr>
        <tr>
      	  <td id="news"><a href="logout.php">Log Out</a></td></tr>
      	<tr>
      	  <td id="about">&nbsp;</td></tr>

      	</table>
      </td>
  </tr>
  	  <tr valign="bottom"><td valign="bottom">&nbsp;</td></tr>
 	  </table>
<?php
}

function getWebFooter(){
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td class="services-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="122" align="center" valign="bottom">&nbsp;</td>
    <td width="838" valign="bottom"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="11">&nbsp;</td>
        <td width="780" class="content-home_bottom"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="459" id="footer_copyright">&#169; 2018 EmsDell Ltd.</td>
            <td width="341"><table width="320" border="0" align="right" cellpadding="0" cellspacing="0" id="footer">
              <tr>
                <td width="54" id="footer_link"><a href="home.html">Home</a></td>
                <td width="66" id="footer_link">&nbsp;| &nbsp;<a href="news.html">News</a></td>
                <td width="71" id="footer_link">&nbsp;| &nbsp;<a href="services.html">Services</a></td>
                <td width="52" id="footer_link">&nbsp;| &nbsp;<a href="about.html">About</a></td>
                <td width="77" id="footer_link">&nbsp;| &nbsp;<a href="contact.html"> Contact</a></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        <td width="10">&nbsp;</td>
      </tr>
      </table>      <br /></td>
  </tr>
  </table></td>
</tr>
</table>

<?php
}

function getWebFooterHome(){
?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td class="home-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="122" align="center" valign="bottom">&nbsp;</td>
    <td width="838" valign="bottom"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="11">&nbsp;</td>
        <td width="780" class="content-home_bottom"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="459" id="footer_copyright">&#169; 2018 EmsDell Ltd.</td>
            <td width="341"><table width="320" border="0" align="right" cellpadding="0" cellspacing="0" id="footer">
              <tr>
                <td width="54" id="footer_link"><a href="home.html">Home</a></td>
                <td width="66" id="footer_link">&nbsp;| &nbsp;<a href="news.html">News</a></td>
                <td width="71" id="footer_link">&nbsp;| &nbsp;<a href="services.html">Services</a></td>
                <td width="52" id="footer_link">&nbsp;| &nbsp;<a href="about.html">About</a></td>
                <td width="77" id="footer_link">&nbsp;| &nbsp;<a href="contact.html"> Contact</a></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        <td width="10">&nbsp;</td>
      </tr>
      </table>      <br /></td>
  </tr>
  </table></td>
</tr>
</table>

<?php
}


//#################################################################################################################################
// MAIN PAGES
//#################################################################################################################################

function getAppMainMenu(){
?>
<table width="122" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td height="136" align="center" >&nbsp;<img src="images/logo1.png" /></td>
  </tr>
  <tr>
    <td valign="bottom"><table width="122" border="0" cellspacing="0" cellpadding="0" id="sidebar">
      <tr><td id="selected_home"><a href="applicant.php">Applicant</a></td></tr>
      <tr><td id="news"><a href="exam.php">Exam</a></td></tr>
      <tr><td id="services"><a href="report.php">Reports</a></td></tr>
      <tr><td id="about"><a href="system.php">Tools</a></td></tr>
      <tr><td id="contact"><a href="logout.php">Log Out</a></td></tr>
    </table></td>
  </tr>
  <tr valign="bottom">
    <td valign="bottom">&nbsp;</td>
  </tr>
</table>
<?php
}

function getExmMainMenu(){
?>
<table width="122" border="0" cellspacing="0" cellpadding="0" >
  	 <tr><td height="136" align="center" ><img src="images/logo1.png"></td></tr>
  	 <tr><td valign="bottom">
   	    <table width="122" border="0" cellspacing="0" cellpadding="0" id="sidebar">
      	<tr><td id="home"><a href="applicant.php">Applicant</a></td></tr>
        <tr><td id="selected_news"><a href="exam.php">Exam</a></td></tr>
      	<tr><td id="services"><a href="report.php">Reports</a></td></tr>
      	<tr><td id="about"><a href="system.php">Tools</a></td></tr>
      	<tr><td id="contact"><a href="logout.php">Log Out</a></td></tr>
    	</table>
      </td>
  	  </tr>
  	  <tr valign="bottom"><td valign="bottom">&nbsp;</td></tr>
 	  </table>
<?php
}

function getRepMainMenu(){
?>
<table width="122" border="0" cellspacing="0" cellpadding="0" >
  	 <tr><td height="136" align="center" ><img src="images/logo1.png"></td></tr>
  	 <tr><td valign="bottom">
   	    <table width="122" border="0" cellspacing="0" cellpadding="0" id="sidebar">
      	<tr><td id="home"><a href="applicant.php">Applicant</a></td></tr>
        <tr><td id="news"><a href="exam.php">Exam</a></td></tr>
      	<tr><td id="selected_services"><a href="report.php">Reports</a></td></tr>
      	<tr><td id="about"><a href="system.php">Tools</a></td></tr>
      	<tr><td id="contact"><a href="logout.php">Log Out</a></td></tr>
    	</table>
      </td>
  	  </tr>
  	  <tr valign="bottom"><td valign="bottom">&nbsp;</td></tr>
 	  </table>
<?php
}

function getSysMainMenu(){
?>
<table width="122" border="0" cellspacing="0" cellpadding="0" >
  	 <tr><td height="136" align="center" ><img src="images/logo1.png"></td></tr>
  	 <tr><td valign="bottom">
   	    <table width="122" border="0" cellspacing="0" cellpadding="0" id="sidebar">
      	<tr><td id="home"><a href="applicant.php">Applicant</a></td></tr>
        <tr><td id="news"><a href="exam.php">Exam</a></td></tr>
      	<tr><td id="services"><a href="report.php">Reports</a></td></tr>
      	<tr><td id="selected_about"><a href="system.php">Tools</a></td></tr>
      	<tr><td id="contact"><a href="logout.php">Log Out</a></td></tr>
    	</table>
      </td>
  	  </tr>
  	  <tr valign="bottom"><td valign="bottom">&nbsp;</td></tr>
 	  </table>
<?php
}

function getSysFooter(){
?>
    <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="459" id="footer_copyright">&#169; 2018 EmsDell Ltd.</td>
        <td width="341"><table width="320" border="0" align="right" cellpadding="0" cellspacing="0" id="footer">
          <tr>
            <td width="54" id="footer_link" align="center"><a href="appSearch.php">Applicant</a></td>
            <td width="66" id="footer_link" align="center">&nbsp;| &nbsp;<a href="exmQuestion.php">Exam</a></td>
            <td width="71" id="footer_link" align="center">&nbsp;| &nbsp;<a href="repAppSem">Reports</a></td>
            <td width="52" id="footer_link" align="center">&nbsp;| &nbsp;<a href="sysChange.php">Tools</a></td>
            <td width="77" id="footer_link" align="center">&nbsp;| &nbsp;<a href="logout.php"> Log Out</a></td>
          </tr>
        </table>
<?php
}

//#################################################################################################################################
// SUB MENU 
//#################################################################################################################################

function getAccess($page){
  	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	
	$ar=$_SESSION['rights'];
	switch($ar) {
   		case(60): $query="select count(*) from menu WHERE mnFile='$page' && mnVPAA='Y' && (mnVPAAInc='Y' || mnMainSeq='0')";
					break; //college
   		case(70): $query="select count(*) from menu WHERE mnFile='$page' && mnCollege='Y' && (mnCollegeInc='Y' || mnMainSeq='0')";
					break; //college
     	case(80): $query="select count(*) from menu WHERE mnFile='$page' && mnTestStaff='Y' && (mnTestStaffInc='Y' || mnMainSeq='0')";
				  break; //testStaff
   		case(90): $query="select count(*) from menu WHERE mnFile='$page' && mnAdmin='Y' && (mnAdminInc='Y' || mnMainSeq='0')";
				  break; //admin
	}
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	$row=mysql_fetch_row($result);
	$total_records=$row[0];
	mysql_free_result($result);
  	mysql_close($conn);
	return $total_records;
}

function appMenu(){ //APPLICANT
	include('conf.php');
  	$ar=$_SESSION['rights'];
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	switch($ar) {
    		case(60): $query="select * from menu where mnVPAA='Y' and mnVPAAInc='Y' and mnCode='app' order by mnSubSeq"; 
					break; //Admin
    		case(70): $query="select * from menu where mnCollege='Y' and mnCollegeInc='Y' and mnCode='app' order by mnSubSeq"; 
					break; //Admin
    		case(80): $query="select * from menu where mnTestStaff='Y' and mnTestStaffInc='Y' and mnCode='app' order by mnSubSeq"; 
					break; //Admin
    		case(90): $query="select * from menu where mnAdmin='Y' and mnAdminInc='Y' and mnCode='app' order by mnSubSeq"; 
					break; //Admin
		}
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
		      ?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="300" border="0" align="left" cellpadding="0" cellspacing="0" class="center" id="subMenu" >
	  <tr>
<?php  
	 while ($row = mysql_fetch_object($result)){ 
	     $file=$row->mnFile;
		 $text=$row->mnSub;
		  ?>
    		<td align="left" id="subMenu_link" width="100%"><?php link_with_disabled_back_button("$file","$text "); ?></td>
	  <?php
	  }
	  ?>
  	  </tr>
</table>
<?php
}

function exmMenu(){ //EXAM
	include('conf.php');
  	$ar=$_SESSION['rights'];
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	switch($ar) {
    		case(60): $query="select * from menu where mnVPAA='Y' and mnVPAAInc='Y' and mnCode='exm' order by mnSubSeq"; 
					break; //Admin
    		case(70): $query="select * from menu where mnCollege='Y' and mnCollegeInc='Y' and mnCode='exm' order by mnSubSeq"; 
					break; //Admin
    		case(80): $query="select * from menu where mnTestStaff='Y' and mnTestStaffInc='Y' and mnCode='exm' order by mnSubSeq"; 
					break; //Admin
    		case(90): $query="select * from menu where mnAdmin='Y' and mnAdminInc='Y' and mnCode='exm' order by mnSubSeq"; 
					break; //Admin
		}
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
		      ?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="600" border="0" align="left" cellpadding="0" cellspacing="0" class="center" id="subMenu" >
	  <tr>
<?php  
	 while ($row = mysql_fetch_object($result)){ 
	     $file=$row->mnFile;
		 $text=$row->mnSub;
		  ?>
    		<td align="left" id="subMenu_link" width="40"><?php link_with_disabled_back_button("$file","$text "); ?></td>
	  <?php
	  }
	  ?>
  	  </tr>
</table>
<?php
}


function repMenu(){ //EXAM
	include('conf.php');
  	$ar=$_SESSION['rights'];
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	switch($ar) {
    		case(60): $query="select * from menu where mnVPAA='Y' and mnVPAAInc='Y' and mnCode='rep' order by mnSubSeq"; 
					break; //Admin
    		case(70): $query="select * from menu where mnCollege='Y' and mnCollegeInc='Y' and mnCode='rep' order by mnSubSeq"; 
					break; //Admin
    		case(80): $query="select * from menu where mnTestStaff='Y' and mnTestStaffInc='Y' and mnCode='rep' order by mnSubSeq"; 
					break; //Admin
    		case(90): $query="select * from menu where mnAdmin='Y' and mnAdminInc='Y' and mnCode='rep' order by mnSubSeq"; 
					break; //Admin
		}
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
		      ?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="600" border="0" align="left" cellpadding="0" cellspacing="0" class="center" id="subMenu" >
	  <tr>
<?php  
	 while ($row = mysql_fetch_object($result)){ 
	     $file=$row->mnFile;
		 $text=$row->mnSub;
		  ?>
    		<td align="left" id="subMenu_link" width="100%"><?php link_with_disabled_back_button("$file","$text "); ?></td>
	  <?php
	  }
	  ?>
  	  </tr>
</table>
<?php
}


function sysMenu(){ //EXAM
	include('conf.php');
  	$ar=$_SESSION['rights'];
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	switch($ar) {
    		case(60): $query="select * from menu where mnVPAA='Y' and mnVPAAInc='Y' and mnCode='sys' order by mnSubSeq"; 
					break; //Admin
    		case(70): $query="select * from menu where mnCollege='Y' and mnCollegeInc='Y' and mnCode='sys' order by mnSubSeq"; 
					break; //Admin
    		case(80): $query="select * from menu where mnTestStaff='Y' and mnTestStaffInc='Y' and mnCode='sys' order by mnSubSeq"; 
					break; //Admin
    		case(90): $query="select * from menu where mnAdmin='Y' and mnAdminInc='Y' and mnCode='sys' order by mnSubSeq"; 
					break; //Admin
		}
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
		      ?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="600" border="0" align="left" cellpadding="0" cellspacing="0" class="center" id="subMenu" >
	  <tr>
<?php  
	 while ($row = mysql_fetch_object($result)){ 
	     $file=$row->mnFile;
		 $text=$row->mnSub;
		  ?>
    		<td align="left" id="subMenu_link" width="20"><?php link_with_disabled_back_button("$file","$text "); ?></td>
	  <?php
	  }
	  ?>
  	  </tr>
</table>
<?php
}


//#################################################################################################################################
// other    FUNCTIONS 
//#################################################################################################################################

//###########################  convert Sem #############################
function convertSem($sem){
  if ($sem <> NULL){
 	if (ereg('1', $sem)){    
		$semWrd='1st';
   	}
 	if (ereg('2', $sem)){    
		$semWrd='2nd';
   	}
 	if (ereg('3', $sem)){    
		$semWrd='Summer';
   	}
  }
  return $semWrd;
}

function convert_MTime($time){
	switch($time) {
    	case("07:00 AM"):  $ntime="07:00";    break;
    	case("07:30 AM"):  $ntime="07:30";    break;
    	case("08:00 AM"):  $ntime="08:00";    break;
    	case("08:30 AM"):  $ntime="08:30";    break;
    	case("09:00 AM"):  $ntime="09:00";    break;
    	case("09:30 AM"):  $ntime="09:30";    break;
    	case("10:00 AM"):  $ntime="10:00";    break;
    	case("10:30 AM"):  $ntime="10:30";    break;
    	case("11:00 AM"):  $ntime="11:00";    break;
    	case("11:30 AM"):  $ntime="11:30";    break;
    	case("12:00 PM"):  $ntime="12:00";    break;
    	case("12:30 PM"):  $ntime="12:30";    break;
    	case("01:00 PM"):  $ntime="13:00";    break;
    	case("01:30 PM"):  $ntime="13:30";    break;
    	case("02:00 PM"):  $ntime="14:00";    break;
    	case("02:30 PM"):  $ntime="14:30";    break;
    	case("03:00 PM"):  $ntime="15:00";    break;
    	case("03:30 PM"):  $ntime="15:30";    break;
    	case("04:00 PM"):  $ntime="16:00";    break;
    	case("04:30 PM"):  $ntime="16:30";    break;
    	case("05:00 PM"):  $ntime="17:00";    break;
    	case("05:30 PM"):  $ntime="17:30";    break;
    	case("06:00 PM"):  $ntime="18:00";    break;
    	case("06:30 PM"):  $ntime="18:30";    break;
    	case("07:00 PM"):  $ntime="19:00";    break;
    	case("07:30 PM"):  $ntime="19:30";    break;
    	case("08:00 PM"):  $ntime="20:00";    break;
    	case("08:30 PM"):  $ntime="20:30";    break;
    	case("09:00 PM"):  $ntime="21:00";    break;
    	case("09:30 PM"):  $ntime="21:30";    break;
    	case("10:00 PM"):  $ntime="22:00";    break;
	}
	return $ntime;
}

function convert_RegTimeB($time){
	switch($time) {
    	case("07:00"):  $ntime="07:00 AM";    break;
    	case("07:30"):  $ntime="07:30 AM";    break;
    	case("08:00"):  $ntime="08:00 AM";    break;
    	case("08:30"):  $ntime="08:30 AM";    break;
    	case("09:00"):  $ntime="09:00 AM";    break;
    	case("09:30"):  $ntime="09:30 AM";    break;
    	case("10:00"):  $ntime="10:00 AM";    break;
    	case("10:30"):  $ntime="10:30 AM";    break;
    	case("11:00"):  $ntime="11:00 AM";    break;
    	case("11:30"):  $ntime="11:30 AM";    break;
    	case("12:00"):  $ntime="12:00 PM";    break;
    	case("12:30"):  $ntime="12:30 PM";    break;
    	case("13:00"):  $ntime="01:00 PM";    break;
    	case("13:30"):  $ntime="01:30 PM";    break;
    	case("14:00"):  $ntime="02:00 PM";    break;
    	case("14:30"):  $ntime="02:30 PM";    break;
    	case("15:00"):  $ntime="03:00 PM";    break;
    	case("15:30"):  $ntime="03:30 PM";    break;
    	case("16:00"):  $ntime="04:00 PM";    break;
    	case("16:30"):  $ntime="04:30 PM";    break;
    	case("17:00"):  $ntime="05:00 PM";    break;
    	case("17:30"):  $ntime="05:30 PM";    break;
    	case("18:00"):  $ntime="06:00 PM";    break;
    	case("18:30"):  $ntime="06:30 PM";    break;
    	case("19:00"):  $ntime="07:00 PM";    break;
    	case("19:30"):  $ntime="07:30 PM";    break;
    	case("20:00"):  $ntime="08:00 PM";    break;
    	case("20:30"):  $ntime="08:30 PM";    break;
    	case("21:00"):  $ntime="09:00 PM";    break;
    	case("21:30"):  $ntime="09:30 PM";    break;
    	case("22:00"):  $ntime="10:00 PM";    break;
	}
	return $ntime;
}


function equivalent($topic,$sex,$score){
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	$query="SELECT * FROM equiv WHERE eqTopic='$topic' and eqSex='$sex' and eqScore='$score'";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
 	if (mysql_num_rows($result) == 1 ){
    	$row = mysql_fetch_object($result);					
		$sData[0]=$row->eqPercent;
		$sData[1]=$row->eqStanine;
		$sData[2]=$row->eqScaled;
	}
	return $sData;
}

//#################################################################################################################################
// getStored    FUNCTIONS TO GET DATA FROM DATABASE
//#################################################################################################################################

function getControl(){
include('conf.php');
$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
mysql_select_db($db) or die ('Unable to connect to database');
$query2="SELECT * FROM control";
$result2 = mysql_query($query2) or die ("Error in query: $query2. " . mysql_error());
  if (mysql_num_rows($result2)==1){
	$row2=mysql_fetch_object($result2);
	$con[0]=$row2->scSchName;	
	$con[1]=$row2->scSchAddr;	
	$con[2]=$row2->scHead;	
	$con[3]=$row2->scHeadTitle;	
	$con[4]=$row2->scTestOff;	
	$con[5]=$row2->scTOTitle;	
	$con[6]=$row2->scSem;	
	$con[7]=$row2->scSYFr;	
	$con[8]=$row2->scSYTo;	
	$con[9]=$row2->scLUser;	
	$con[10]=$row2->scLDate;	
  }				
  return $con;
}

// get All Subject Code //use INDEX
function getProgramAll(){
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select prCode,prDesc from program Order by prCode";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	while ($row = mysql_fetch_object($result)){
		$prCode[]=$row->prCode;
		$prDesc[]=$row->prDesc;
	}
	mysql_free_result($result);
  	mysql_close($conn);
  	return array($prCode,$prDesc);
}

function getSchedule($per){
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from sched where scPeriod='$per' and scBal<>'0' Order by scPeriod,scDate,scTime,scRoom";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	while ($row = mysql_fetch_object($result)){
		$scID[]=$row->scID;
		$scPeriod[]=$row->scPeriod;
		$scDate[]=$row->scDate;
		$scTime[]=$row->scTime;
		$scRoom[]=$row->scRoom;
		$scProgram1[]=$row->scProgram1;
		$scProgram2[]=$row->scProgram2;
		$scProgram3[]=$row->scProgram3;
		$scProgram4[]=$row->scProgram4;
		$scProgram5[]=$row->scProgram5;
		$scCtr[]=$row->scCtr;
		$scBal[]=$row->scBal;
	}
	mysql_free_result($result);
  	mysql_close($conn);
  	return array($scID,$scPeriod,$scDate,$scTime,$scRoom,$scProgram1,$scProgram2,$scProgram3,$scProgram4,$scProgram5,$scCtr,$scBal);
}

function getScheduleDTL($scID){
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from sched where scID='$scID'";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	while ($row = mysql_fetch_object($result)){
		$sched[0]=$row->scID;
		$sched[1]=$row->scPeriod;
		$sched[2]=$row->scDate;
		$sched[3]=$row->scTime;
		$sched[4]=$row->scRoom;
		$sched[5]=$row->scProgram1;
		$sched[6]=$row->scProgram2;
		$sched[7]=$row->scProgram3;
		$sched[8]=$row->scProgram4;
		$sched[9]=$row->scProgram5;
		$sched[10]=$row->scCtr;
		$sched[11]=$row->scBal;
		$sched[12]=$row->scMax;
	}
	mysql_free_result($result);
  	mysql_close($conn);
  	return $sched;
}

function getTopic(){
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from topics Order by tpTopic";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	while ($row = mysql_fetch_object($result)){
		$tpID[]=$row->tpID;
		$tpTopic[]=$row->tpTopic;
	}
	mysql_free_result($result);
  	mysql_close($conn);
  	return array($tpID,$tpTopic);
}

function getTopicDTL($tpID){
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from topics where tpID='$tpID' Order by tpTopic";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	while ($row = mysql_fetch_object($result)){
		$topic=$row->tpTopic;
	}
	mysql_free_result($result);
  	mysql_close($conn);
  	return $topic;
}

function getUserDTL($un){
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from users where suID='$un' ";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	while ($row = mysql_fetch_object($result)){
		$sysU[]=$row->suID; //0
		$sysU[]=$row->suPassword; //1
		$sysU[]=$row->suFullName; //2
		$sysU[]=$row->suUType; //3
		$sysU[]=$row->suDeptCode; //4 
		$sysU[]=$row->suStatus; //5
		$sysU[]=$row->suLUser; //6
		$sysU[]=$row->suLDate; //7
	}
	mysql_free_result($result);
  	mysql_close($conn);
	return $sysU;
}

function getRooms(){
	include('conf.php');
  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from rooms order by rmCode";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	while ($row = mysql_fetch_object($result)){
		$rooms[]=$row->rmCode;
	}
	mysql_free_result($result);
  	mysql_close($conn);
	return $rooms;
}
//###################################   find STUDENT NUMBER ####################################
function getStudData($sn){
  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');
  $query="select * from applicant where smAppNo='$sn' order by smAppNo";
  $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  if (mysql_num_rows($result) == 1 ){
    $row = mysql_fetch_object($result);					
	$sData[0]=$row->smAppNo;
	$sData[1]=$row->smLName . ", " . $row->smFName . " " . $row->smMName;
	$sData[2]=$row->smSex;
	$sData[3]=$row->smBDate;
	$sData[4]=$row->smCitizen;
	$sData[5]=$row->smContactNo;
	$sData[6]=$row->smPmAddress;
	$sData[7]=$row->smSchLAttend;
	$sData[8]=$row->smAppSem;
	$sData[9]=$row->smEmail;
	$sData[10]=$row->smTrack;		
  	$sData[11]=$row->smProgramCode1;	
	$sData[12]=$row->smProgramCode2;
	$sData[13]=$row->smProgramCode3;
	$sData[14]=$row->smLName;
	$sData[15]=$row->smFName;
	$sData[16]=$row->smMName;
  }
  mysql_free_result($result);  mysql_close($conn);
  return $sData;
}
//#################################################################################################################################
// FUNCTIONS FOR ALL MODULES
//#################################################################################################################################

function get_user(){ 
  global $access;
  session_start();
  $user=$_POST['user'];
  $password=$_POST['password'];
  $password = substr(md5($password), 0, 20);
  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');

  // check and set PAID/UNPAID SYS
  $today=date("Y-m-d", mktime());  	
  $exp=$today;						// FULLY PAID system ==> unCOMMENT or ACTIVATE this code  
  							// NOT FULLY PAID system ==> COMMENT this code and SET the date of expiration in the conf.php    
  if ($today <= $exp){
	  $ok_e = 1;	// NOT expired
  }

  // check and set mac address
  $dateToday=date("d", mktime()); 
  if ($dateToday==14){
  	 // this will update mac address every 15th day of the month
	 $acc=configs();
 	 $query3="UPDATE computer SET num='$acc',LastUpdate=now()";
	 $result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
  }
  $query4="select * from computer where num='$num'";
  $result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
  $ok_m=mysql_num_rows($result4);

  // echo "$ok_m * $ok_e";
  
  if ($ok_m == 1 && $ok_e == 1){
 	$query="select * from users where suID='$user' and suPassword='$password' and suStatus='Enabled'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  	if (mysql_num_rows($result) == 1 ){
		$row = mysql_fetch_array($result);
    	$_SESSION['name']=$row['suFullName'];
		$_SESSION['user']=$row['suID'];
		$_SESSION['rights']=$row['suARights'];
		$_SESSION['dept']=$row['suDeptCode'];
		$_SESSION['desig']=$row['suDesig'];
		$userID=$row['suID'];
		//LoginSaveSession($user);
   		$query="INSERT INTO login (userID,active,login,logDate) VALUES ('$userID','Y',now(),now())";
  		$result = mysql_query($query) or die ("Error in query login-detail : $query. " . mysql_error());
		header("Location:appSearch.php");
  	}else{
		//heading_SITE();
		$access="Invalid User <br> <span class=center>Unauthorized to access this system</span><br>";
    	input_data();
  	}
  }else{
	if ($ok_m == 0 ){
		//heading_SITE();
		$access=index_main();
    	input_data();
		getSysFooter();  
	}else{
		if ($ok_e == 0 ){
			//heading_SITE();
			$access=index_exp();
    		input_data();
			getSysFooter();  
		}
	}
  } 
} 

//#################################################################################################################################
// PROCESS
//#################################################################################################################################

//###########################  cconfirmation of admission slip #############################

function main_form_ADMISSION(){
$user=$_GET['apply'];
	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

if ($user<>''){
	 $query="select applicant.*,sched.*,program.* 
		FROM (applicant LEFT JOIN sched ON applicant.smSchedExamID = sched.scID) 
		LEFT JOIN program ON applicant.smProgramCode1 = program.prCode
 		WHERE smAppNo='$user' order by smLName";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
 	 $find=mysql_num_rows($result);
  	 if ($find == 1 ){
		$row = mysql_fetch_array($result);
		$smAppNo=$row['smAppNo'];
		$smLName=$row['smLName'];
		$smFName=$row['smFName'];
		$smMName=$row['smMName'];
		$smProgramCode1=$row['smProgramCode1'];
		$progDesc=$row['prDesc'];
		$scDate = date("F d, Y", strtotime($row['scDate']));
		$scRoom=$row['scRoom'];
		$tm=explode("-",$row['scTime']);
		$timeStart=convert_RegTimeB($tm[0]);
		$smPic=$row['smPic'];
	 }
?>
<style type="text/css">
.repTitle {
	text-align: center;
	font-weight: bold;
	color: #003;
}
.txtPara {
	text-align: justify;
}
.textItalics {
	font-style: italic;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.sysText {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
<link rel="stylesheet" href="css/stylesRep.css" type="text/css">
<table width="675" border="0" align="center" cellpadding="0" cellspacing="0">
			  <tr>
			    <td width="643" align="center" class="text"><table width="650" border="0" cellspacing="0" cellpadding="0">
			      <tr>
			        <td width="83" rowspan="4"><img src="images/csu.gif" width="70" height="70" /></td>
			        <td width="567">Republic of the Philippines</td>
		          </tr>
			      <tr>
			        <td>CATANDUANES STATE UNIVERSITY</td>
		          </tr>
			      <tr>
			        <td>Virac, Catanduanes</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
		          </tr>
		        </table></td>
		      </tr>
			  <tr>
			    <td align="center" class="text"><hr /></td>
  </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text"><table width="670" border="0" cellspacing="0" cellpadding="0">
			      <tr>
			        <td width="125">&nbsp;</td>
			        <td width="128">&nbsp;</td>
			        <td width="142" class="repTitle">ADMISSION SLIP</td>
			        <td width="142">&nbsp;</td>
			        <td width="113" rowspan="5">
    <?php 
	if ($smPic<>""){
		$pic='applicant/' . $smPic;
		?><img src="<?php echo $pic ?>" width="90" height="90"/><br /><?php
	}
	?>
                    &nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>Control Number:</td>
			        <td><?php echo $smAppNo ?>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>Date Issued:</td>
			        <td><span class="right">
			          <?php 
				 $today=date("F d, Y");
				 echo $today;
				?>
			        </span></td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
		        </table></td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
  </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="justify" ><p>Please admit <?php echo "$smLName, $smFName $smMName"; ?> to take the College Entrance Examination for <?php echo $progDesc; ?> (1st Priority) on <?php echo $scDate ?> at the Catanduanes State University, Room No. <?php echo $scRoom ?> at <?php echo $timeStart ?>.</p></td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
  </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text"><table width="670" border="0" cellspacing="0" cellpadding="0">
			      <tr>
			        <td width="257">&nbsp;</td>
			        <td width="141">&nbsp;</td>
			        <td width="252"><hr /></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td align="center">Testing Officer/Personnel Authorized to receive and/or process applications</td>
		          </tr>
		        </table></td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text"><table width="670" border="0" cellspacing="0" cellpadding="0">
			      <tr>
			        <td colspan="2" class="sysText"><span class="right">System Generated by EEMS on
                        <?php 
				 $today=date("m/d/Y") . "   " . strftime("%I:%M:%S %p");
				 echo $today;
				?>
			        </span></td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td width="257">&nbsp;</td>
			        <td width="140">&nbsp;</td>
			        <td width="253">&nbsp;</td>
		          </tr>
			      <tr>
			        <td colspan="3"><hr /></td>
		          </tr>
			      <tr class="textItalics">
			        <td>CSU-F-GCT-01</td>
			        <td align="center">Rev.1</td>
			        <td align="right">Effectivity Date: Dec 12, 2018</td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
		        </table></td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
       </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
		      </tr>
			  <tr>
			    <td align="center" class="text">&nbsp;</td>
		      </tr>
</table>
<?php
}
}


//###########################  c/application FORMp #############################
function input_data_APPLYENTRY(){
global $access;
global $page, $error,$errMsg;
global $fNameE,$mNameE,$lNameE,$bDateE,$citizenE,$contactE,$addressE,$emailE,$schLastE,$pwordE,$pword2E,$agreeE,$schedE;

$con=getControl();
$per="$con[6]-$con[7]-$con[8]";

list ($prCode,$prDesc) = getProgramAll();
list ($scID,$scPeriod,$scDate,$scTime,$scRoom,$scProgram1,$scProgram2,$scProgram3,$scProgram4,$scProgram5,$scCtr,$scBal) = getSchedule($per);

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form enctype="multipart/form-data" method="post" action="<?php echo $page ?> " target="_parent">
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
            ONLINE APPLICATION </h3>
            </td>
          </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="23">&nbsp;</td>
              <td width="476" valign="top">
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center"><span class="title_text">
      <?php
      	$con=getControl();
		$sem=convertSem($con[6]);
	  	echo "Application for $sem Semester, SY $con[7]-$con[8]";
	  ?></span></td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td colspan="3" align="center"><img src="images/apply.jpg" width="470" height="173"></td>
      </tr>
    <tr>
      <td width="187">&nbsp;</td>
      <td width="15">&nbsp;</td>
      <td width="398">&nbsp;</td>
    </tr>
    <?php 
		if ($error==1) {   
            ?>        <tr>
                   <td colspan="3" align="center"><?php
			echo "<span class='error'>Invalid Entry on : </span>";
			echo "<span class='text'><br>$errMsg</span>"; 
			echo "<span class='text'><br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span><br />";
			echo "<br>";
			?></td>
                   </tr>
	  <?php
		}
		?>
      <tr>
        <td colspan="3" valign="top" class="textBigLeft"> <strong>APPLICANT'S NAME</strong></td>
        </tr>
      <tr>
      <td valign="top" class="textBigRight" >First Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input type="text" name="fName" value="<?php echo $_POST['fName'] ?>" class="textfield" placeholder="First Name" style="background-color:<?php echo $fNameE ?>"></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Middle Name</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>
        <input type="text" name="mName" value="<?php echo $_POST['mName'] ?>" class="textfield" placeholder="Middle Name"></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Last Name</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="lName"  value="<?php echo $_POST['lName'] ?>" class="textfield" placeholder="Last Name" style="background-color:<?php echo $lNameE ?>"></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Sex</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sex" id="select"  value="" class="textfield" placeholder="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Date of Birth</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="date" name="bDate"  value="<?php echo $_POST['bDate'] ?>" class="textfield" placeholder=""></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Place of Birth</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="bPlace"  value="<?php echo $_POST['bPlace'] ?>" class="textfield" placeholder="City/Town, Province" style="background-color:<?php echo $bPlaceE ?>" /></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="cStatus" id="track2"  value="" class="textfield" placeholder="">
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="Widow/Widower">Widow/Widower</option>
        <option value="Separated">Separated</option>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Citizenship</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="citizen"  value="<?php echo $_POST['citizen'] ?>" class="textfield" placeholder="Citizenship" style="background-color:<?php echo $citizenE ?>"></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Disability </td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="disability" id="track"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Total/Partial Blindness","Low Vision","Total/Partial Deaf","Oral Defect","One/No Hands","One/No Legs");
  			foreach($status as $items){
    			if ($items == $_POST['disability']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><span class="text">Do you have any PHYSICAL DISABILITY OR CONDITION that requires special attention or would make it difficult for you to take a regular test?</span></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Upload Recent Picture</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><span class="content-home" style="background-color:<?php echo $qzImageE ?>">
        <input name="qzImage" type="file"  />
      </span></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="textBigLeft"> <strong>CONTACT INFORMATION</strong></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Permanent Address</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="address"  value="<?php echo $_POST['address'] ?>" class="textfield" placeholder="Address" style="background-color:<?php echo $addressE ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Contact Number</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>
        <input type="text" name="contact"  value="<?php echo $_POST['contact'] ?>" class="textfield" placeholder="Mobile or Landline"></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Email Address</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>
        <input type="email" name="email"  value="<?php echo $_POST['email'] ?>" class="textfield" placeholder="Enter your Email" style="background-color:<?php echo $emailE ?>"></td>
    </tr>
   <!-- <tr>
      <td valign="top" class="textBigRight">School Last  Attended</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="schLast"  value="<?php //echo $_POST['schLast'] ?>" class="textfield" placeholder="Where" style="background-color:<?php //echo $schLastE ?>"></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">SHS Track</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="track" id="track3"  value="" class="textfield" placeholder="">
        <option value="Academic-STEM">Academic Track - STEM</option>
          <option value="Academic-ABM">Academic Track - ABM</option>
          <option value="Academic-HUMSS">Academic Track - HUMMS</option>
          <option value="Academic-GAS">Academic Track - GAS</option>
          <option value="Tech-ICT">Technical Vocational Livelihood Track - ICT</option>
          <option value="Tech-Industrial">Technical Vocational Livelihood Track - Industrial</option>
          <option value="Tech-Agri-Fishery">Technical Vocational Livelihood Track - Agri-Fishery</option>
          <option value="Tech-Econ">Technical Vocational Livelihood Track - Home Economics</option>
          <option value="Sports">Sports Track</option>
          <option value="Arts">Arts and Design  Track</option>
      </select></td>
      </tr> -->
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="textBigLeft"> <strong>DEGREE PROGRAM TO TAKE</strong></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">First Choice</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>
	<select name="program1" class="textfield">
              <?php
							echo "<option value=''></option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program1']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
      </select>                        </td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Second Choice</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="program2" class="textfield">
          <?php
							echo "<option value=''></option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program2']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
      </select></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">Third Choice</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="program3" class="textfield">
          <?php
							echo "<option value=''></option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program3']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
      </select></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="textBigLeft"><strong>
	  	<?php 
		$sem=convertSem($con[6]);
 	  	echo "WHEN TO TAKE ENTRANCE EXAM for $sem Sem., SY $con[7]-$con[8]";
	    ?> 
      </strong></td>
    </tr>
    <tr>
		<td valign="top" class="textBigRight">Schedule
      </td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sched" class="textfield" style="background-color:<?php echo $schedE ?>">
        <?php
					for($i=0;$i<sizeof($scID);$i++){
						$new_date = date("d-M-Y", strtotime($scDate[$i]));
						$tm=explode("-",$scTime[$i]);
						$tmS=convert_RegTimeB($tm[0]);
						$s="$new_date / $tmS / $scRoom[$i]";
						if ($pr==$_POST['sched']){
							echo "<option value=$scID[$i]-$scCtr[$i]-$scBal[$i] selected>$s</option>";
						}else{
							echo "<option value=$scID[$i]-$scCtr[$i]-$scBal[$i]>$s</option>";
						}
					}
					?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><span class="text">Date / Time Start / Room</span></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="textBigLeft" ><strong>OTHER INFORMATION</strong></td>
      </tr>
    <tr>
      <td valign="top" class="textBigRight" >Mother's Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input type="text" name="moName" value="<?php echo $_POST['moName'] ?>" class="textfield" placeholder="Mother's Name" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Mother's Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="moCStatus" id="cStatus"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['moCStatus']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Mother's Occupation</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input type="text" name="moOccp" value="<?php echo $_POST['moOccp'] ?>" class="textfield" placeholder="Mother's Occupation" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Mother's Employer</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="moEmployer" value="<?php echo $_POST['moEmployer'] ?>" class="textfield" placeholder="Mother's Employer" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Father's Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input type="text" name="faName" value="<?php echo $_POST['faName'] ?>" class="textfield" placeholder="Father's Name" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Father's Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="faCStatus" id="faCStatus"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['faCStatus']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Father's Occupation</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input type="text" name="faOccp" value="<?php echo $_POST['faOccp'] ?>" class="textfield" placeholder="Father's Occupation" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Father's Employer</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="faEmployer" value="<?php echo $_POST['faEmployer'] ?>" class="textfield" placeholder="Father's Employer" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Guardian's Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="guName" type="text" class="textfield" id="guName" placeholder="Guardian's Name" value="<?php echo $_POST['guName'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Guardian's Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="guCStatus" id="guCStatus"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['guCStatus']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Guardian's Occupation</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input type="text" name="guOccp" value="<?php echo $_POST['guOccp'] ?>" class="textfield" placeholder="Guardian's Occupation" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Guardian's Employer</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input type="text" name="guEmployer" value="<?php echo $_POST['guEmployer'] ?>" class="textfield" placeholder="Guardian's Employer" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">SIBLING'S</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbName1" type="text" class="textfield" id="sbName1" placeholder="Sibling's Name" value="<?php echo $_POST['sbName1'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Sex</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbSex1" id="sex"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Male","Female");
  			foreach($status as $items){
    			if ($items == $_POST['sbSex1']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbCStatus1" id="sbCStatus1"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['sbCStatus1']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
        </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Occupation/Grade/Year Level</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbOccp1" type="text" class="textfield" id="sbOccp1" placeholder="Occupation/Grade/Year Level" value="<?php echo $_POST['sbOccp1'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Employer/School Attending</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input name="sbEmployer1" type="text" class="textfield" id="sbEmployer1" placeholder="Employer/School Attending"  value="<?php echo $_POST['sbEmployer1'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbName2" type="text" class="textfield" id="sbName2" placeholder="Sibling's Name" value="<?php echo $_POST['sbName2'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Sex</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbSex2" id="sbSex"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Male","Female");
  			foreach($status as $items){
    			if ($items == $_POST['sbSex2']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbCStatus2" id="sbCStatus2"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['sbCStatus2']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Occupation/Grade/Year Level</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbOccp2" type="text" class="textfield" id="sbOccp2" placeholder="Occupation/Grade/Year Level" value="<?php echo $_POST['sbOccp2'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Employer/School Attending</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input name="sbEmployer2" type="text" class="textfield" id="sbEmployer2" placeholder="Employer/School Attending"  value="<?php echo $_POST['sbEmployer2'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbName3" type="text" class="textfield" id="sbName3" placeholder="Sibling's Name" value="<?php echo $_POST['sbName3'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Sex</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbSex3" id="sbSex3"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Male","Female");
  			foreach($status as $items){
    			if ($items == $_POST['sbSex3']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbCStatus3" id="sbCStatus3"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['sbCStatus3']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Occupation/Grade/Year Level</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbOccp3" type="text" class="textfield" id="sbOccp3" placeholder="Occupation/Grade/Year Level" value="<?php echo $_POST['sbOccp3'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Employer/School Attending</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input name="sbEmployer3" type="text" class="textfield" id="sbEmployer3" placeholder="Employer/School Attending"  value="<?php echo $_POST['sbEmployer3'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbName4" type="text" class="textfield" id="sbName4" placeholder="Sibling's Name" value="<?php echo $_POST['sbName4'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Sex</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbSex4" id="sbSex4"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Male","Female");
  			foreach($status as $items){
    			if ($items == $_POST['sbSex4']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbCStatus4" id="sbCStatus4"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['sbCStatus4']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Occupation/Grade/Year Level</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbOccp4" type="text" class="textfield" id="sbOccp4" placeholder="Occupation/Grade/Year Level" value="<?php echo $_POST['sbOccp4'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Employer/School Attending</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input name="sbEmployer4" type="text" class="textfield" id="sbEmployer4" placeholder="Employer/School Attending"  value="<?php echo $_POST['sbEmployer4'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Name</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbName5" type="text" class="textfield" id="sbName5" placeholder="Sibling's Name" value="<?php echo $_POST['sbName5'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Sex</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbSex5" id="sbSex5"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Male","Female");
  			foreach($status as $items){
    			if ($items == $_POST['sbSex5']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Civil Status</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><select name="sbCStatus5" id="sbCStatus5"  value="" class="textfield" placeholder="">
             <?php 
			$status = array("","Single","Married","Widow/Widower","Separated");
  			foreach($status as $items){
    			if ($items == $_POST['sbCStatus3']){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}?>
      </select></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight" >Occupation/Grade/Year Level</td>
      <td valign="top" class="textBigRight" >&nbsp;</td>
      <td><input name="sbOccp5" type="text" class="textfield" id="sbOccp5" placeholder="Occupation/Grade/Year Level" value="<?php echo $_POST['sbOccp5'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Employer/School Attending</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td><input name="sbEmployer5" type="text" class="textfield" id="sbEmployer5" placeholder="Employer/School Attending"  value="<?php echo $_POST['sbEmployer5'] ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td valign="top" class="textBigRight">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="textBigLeft"> <strong>EEMS ACCESS</strong></td>
                      </tr>
    <tr>
      <td valign="top" class="textBigRight">Password</td>
      <td>&nbsp;</td>
      <td><input type="password" name="pword" value="" class="textfield" placeholder="Password" style="background-color:<?php echo $pwordE ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">Confirm Password</td>
      <td>&nbsp;</td>
      <td><input type="password" name="pword2" value="" class="textfield" placeholder="Confirm Password" style="background-color:<?php echo $pword2E ?>" /></td>
    </tr>
    <tr>
      <td valign="top" class="textBigRight">&nbsp;</td>
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
            <td>I affirm that:<br>
              <ol>
                <li>I have read all the information contained in the General Information Bulletin on Freshmen Admission and understood all the instructions relative to my application for the CSU College Entrance Examination.</li>
                <li>All the information supplied in this application are true, complete, and accurate</li>
                <li>I have not taken the CSU Entrance Examination previously</li>
                <li>I will abide by the University rules and policies on the test administration</li>
                </ol>
              I am aware that all information written in this application may be chechked against the original documents and I understand that I will be allowed to take the examination upon the submission of complete requirements. 
              <br />
              <br />
              Furthermore, I understand that all information I provide in this form as well as during the CEE may be used, disclosed and processed by the University in accordance with the Data Privacy Act for research and such other legitimate purposes only and may be submitted to the government agencies requiring such information. I understand that my personal details will be treated with utmost confidentiality.</td>
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
      <td ><table width="353" border="0" cellspacing="0" cellpadding="0">
          <tr>
              <td width="22" style="background-color:<?php echo $agreeE ?>"><input type="checkbox" name="agree" id="checkbox" /></td>
              <td width="331">&nbsp;I agree to the terms and condition above</td>
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
      <td><input type="submit" name="button2" id="button2" value="Cancel" class="submit"> 
        <input type="submit" name="Submit" id="button" value="Submit Application" class="submit"></td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    </table>
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
<?php getWebFooter(); ?>
</form>
<?php 
}


function process_add_APPLYENTRY(){
	$lName=strtoupper($_POST['lName']);
	$fName=strtoupper($_POST['fName']);
	$mName=strtoupper($_POST['mName']);
	$bDate= $_POST['bDate'];
	$bPlace= $_POST['bPlace'];
	$sex = $_POST['sex'];
	$citizen= $_POST['citizen'];
	$cStatus= $_POST['cStatus'];
	$disability= $_POST['disability'];

	$contact= $_POST['contact'];
	$address=$_POST['address'];
	$email= $_POST['email'];
	$program1=$_POST['program1'];
	$program2=$_POST['program2'];
	$program3=$_POST['program3'];
	$schedule=$_POST['sched'];
	$sched=explode("-",$schedule);
	$schedID=$sched[0];
	$schedCtr=$sched[1]+1;
	$schedBal=$sched[2]-1;
	
	$moName=$_POST['moName'];
	$moCStatus=$_POST['moCStatus'];
	$moOccp=$_POST['moOccp'];
	$moEmployer=$_POST['moEmployer'];
	
	$faName=$_POST['faName'];
	$faCStatus=$_POST['faCStatus'];
	$faOccp=$_POST['faOccp'];
	$faEmployer=$_POST['faEmployer'];

	$guName=$_POST['guName'];
	$guCStatus=$_POST['guCStatus'];
	$guOccp=$_POST['guOccp'];
	$guEmployer=$_POST['guEmployer'];

	$sbName1=$_POST['sbName1'];
	$sbSex1=$_POST['sbSex1'];
	$sbCStatus1=$_POST['sbCStatus1'];
	$sbOccp1=$_POST['sbOccp1'];
	$sbEmployer1=$_POST['sbEmployer1'];

	$sbName2=$_POST['sbName2'];
	$sbSex2=$_POST['sbSex2'];
	$sbCStatus2=$_POST['sbCStatus2'];
	$sbOccp2=$_POST['sbOccp2'];
	$sbEmployer2=$_POST['sbEmployer2'];

	$sbName3=$_POST['sbName3'];
	$sbSex3=$_POST['sbSex3'];
	$sbCStatus3=$_POST['sbCStatus3'];
	$sbOccp3=$_POST['sbOccp3'];
	$sbEmployer3=$_POST['sbEmployer3'];

	$sbName4=$_POST['sbName4'];
	$sbSex4=$_POST['sbSex4'];
	$sbCStatus4=$_POST['sbCStatus4'];
	$sbOccp4=$_POST['sbOccp4'];
	$sbEmployer4=$_POST['sbEmployer4'];

	$sbName5=$_POST['sbName5'];
	$sbSex5=$_POST['sbSex5'];
	$sbCStatus5=$_POST['sbCStatus5'];
	$sbOccp5=$_POST['sbOccp5'];
	$sbEmployer5=$_POST['sbEmployer5'];

	$pword= $_POST['pword'];
	$agree= $_POST['agree'];
	//$schLast= $_POST['schLast'];
	//$track= $_POST['track'];

  	if ($agree==on){
  		$smAgree="Yes";
  	}else{
  		$smAgree="No";
  	}

	$con=getControl();
  	$cyr=$con[7];
	$per="$con[6]-$con[7]-$con[8]";
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

  	$query2="select * from appno where sy='$cyr' order by seqno DESC";
	$result2 = mysql_query($query2) or die ("Error in query : $query2. " . mysql_error());
  	if (mysql_num_rows($result2) > 0 ){
		$row = mysql_fetch_object($result2);
    	$lsStudNo=$row->seqno;
    	if ($lsStudNo==99999){
     		echo "Applicant Number exceed from the required length";
     		echo "<br>Email the System Administrator";
    	}else{ 
    		$lsStudNo=$lsStudNo + 1;
			$snolen = strlen($lsStudNo);
  	    	if ($snolen==1){
       			$rightSNo=$cyr . '-0000' . $lsStudNo;
    		}elseif ($snolen==2){
       			$rightSNo=$cyr . '-000' . $lsStudNo;
    		}elseif ($snolen==3){
       			$rightSNo=$cyr . '-00' . $lsStudNo;
    		}elseif ($snolen==4){
       			$rightSNo=$cyr . '-0' . $lsStudNo;
    		}else{
       			$rightSNo=$cyr . '-' . $lsStudNo;
    		} 
        	$query3="INSERT INTO appno (seqno,sy,appno) 
					VALUES ('$lsStudNo','$cyr','$rightSNo')";
			$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
    		//echo "query3 - $query3";
		}
  	}else{
  		$lsStudNo=1;
   		$rightSNo=$cyr . '-00001';
       	$query4="INSERT INTO appno (seqno,sy,appno) 
				VALUES ('$lsStudNo','$cyr','$rightSNo')";
    	//	echo "query4 - $query4";
		$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
  	}
  	if (!empty($_FILES["qzImage"]))  {
		$qzImage=$_FILES["qzImage"]["name"];
  		move_uploaded_file($_FILES["qzImage"]["tmp_name"],"./applicant/" . $_FILES["qzImage"]["name"]);
  	}
	/*$query="INSERT INTO applicant (
			smAppNo,		smLName,		smFName,		smMName,		smPic,
			smSex,			smBDate,		smBPlace,		smCStatus,		smCitizen,	
			smDisability,	smContactNo,	smPmAddress,	smEmail,
			smProgramCode1,	smProgramCode2,	smProgramCode3,	smSchedExamID,
			smPassword,		smAgree,		smAppSem,		smLUser,		smLDate)
			VALUES (
			'$rightSNo',	'$lName',		'$fName',		'$mName',		'$qzImage',
			'$sex',			'$bDate',		'$bPlace',		'$cStatus',		'$citizen',
			'$disability',	'$contact',		'$address',		'$email',
			'$program1',	'$program2',	'$program3',	'$schedID',
			'$pword',		'$smAgree',		'$per',			'$rightSNo',	now())";*/
	$query="INSERT INTO applicant (
			smAppNo,		smLName,		smFName,		smMName,		smPic,
			smSex,			smBDate,		smBPlace,		smCStatus,		smCitizen,	
			smDisability,	smContactNo,	smPmAddress,	smEmail,
			smProgramCode1,	smProgramCode2,	smProgramCode3,	smSchedExamID,
			smMother,		smMCStatus,		smMOccp,		smMEmployer,
			smFather,		smFCStatus,		smFOccp,		smFEmployer,
			smGuardian,		smGCStatus,		smGOccp,		smGEmployer,
			smsbName1,		smsbSex1,		smsbCStatus1,	smsbOccp1,		smsbEmployer1,
			smsbName2,		smsbSex2,		smsbCStatus2,	smsbOccp2,		smsbEmployer2,
			smsbName3,		smsbSex3,		smsbCStatus3,	smsbOccp3,		smsbEmployer3,
			smsbName4,		smsbSex4,		smsbCStatus4,	smsbOccp4,		smsbEmployer4,
			smsbName5,		smsbSex5,		smsbCStatus5,	smsbOccp5,		smsbEmployer5,
			smPassword,		smAgree,		smAppSem,		smLUser,		smLDate)
			VALUES (
			'$rightSNo',	'$lName',		'$fName',		'$mName',		'$qzImage',
			'$sex',			'$bDate',		'$bPlace',		'$cStatus',		'$citizen',
			'$disability',	'$contact',		'$address',		'$email',
			'$program1',	'$program2',	'$program3',	'$schedID',
			'$moName',		'$moCStatus',	'$moOccp',		'$moEmployer',
			'$faName',		'$faCStatus',	'$faOccp',		'$faEmployer',
			'$guName',		'$guCStatus',	'$guOccp',		'$guEmployer',
			'$sbName1',		'$sbSex1',		'$sbCStatus1',	'$sbOccp1',		'$sbEmployer1',
			'$sbName2',		'$sbSex2',		'$sbCStatus2',	'$sbOccp2',		'$sbEmployer2',
			'$sbName3',		'$sbSex3',		'$sbCStatus3',	'$sbOccp3',		'$sbEmployer3',
			'$sbName4',		'$sbSex4',		'$sbCStatus4',	'$sbOccp4',		'$sbEmployer4',
			'$sbName5',		'$sbSex5',		'$sbCStatus5',	'$sbOccp5',		'$sbEmployer5',
			'$pword',		'$smAgree',		'$per',			'$rightSNo',	now())";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());

	$query2="UPDATE sched SET 
 		scCtr='$schedCtr',scBal='$schedBal' 
	    WHERE scID='$schedID'";
	$result2 = mysql_query($query2) or die ("Error in query : $query2. " . mysql_error());

    return $rightSNo;
 }


//###########################  APPLICANT MODULE #############################

function viewList_APPSEARCH(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	
if ($search<>''){
	 $query="select *  
	 		FROM applicant where smlName LIKE '$search%' order by smLName";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
    <td width="88" class="label1" ><div align="center">Applicant No. </div></td>
    <td width="302" class="label1" >Name</td>
    <td width="88" class="label1" >Application Period</td>
    <td width="77" class="label1" >Sched Exam No</td>
    <td width="67" class="label1" >Exam Taken</td>
    <td width="128" class="label1" >Last Update</td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
		while ($row = mysql_fetch_object($result)){
			$name=$row->smLName . ", " . $row->smFName . " " . $row->smMName
		?>
  	<tr>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="center">
	<?php echo $row->smAppNo ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
	<?php echo $name ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
      <?php echo $row->smAppSem ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smSchedExamID ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smExamTaken ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smLDate ?></div></td>
    </tr>
  	<?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
 	    } 
		?>
  	<tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td colspan="3" bgcolor="#FFFFFF" class="left">
      <?php
}	?>
    </td>
  </tr>
</table>
<?php
}




function main_form_PROFILE($subM,$mMenu){
$subMenu=$subM;

$un=$_GET['un'];
$sData = getStudData($un);
$suID=$un;

	$suFullName=$sysU[2];

	$smAppNo=$sData[0];
	$smSex=$sData[2];
	$smBDate=$sData[3];
	$smCitizen=$sData[4];
	$smContactNo=$sData[5];
	$smPmAddress=$sData[6];
	$smSchLAttend=$sData[7];
	$smAppSem=$sData[8];
	$smEmail=$sData[9];
	$smTrack=$sData[10];		
  	$smProgramCode1=$sData[11];
	$smProgramCode2=$sData[12];
	$smProgramCode3=$sData[13];
	$smLName=$sData[14];
	$smFName=$sData[15];
	$smMName=$sData[16];

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
          <td class="content-home"><h3>APPLICANT profile</h3>
            &nbsp;
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0" >
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
                <td width="456" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                  <?php 
		if ($error==1) {   
            ?>
                  <tr>
                    <td colspan="3" align="center">&nbsp;</td>
                    </tr>
                  <?php
		}
		?>
                  <tr>
                    <td width="150" valign="top" class="textBigRight" >&nbsp;</td>
                    <td width="24" valign="top" class="textBigRight" >&nbsp;</td>
                    <td width="326">&nbsp;</td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight" >Applicant No.</td>
                    <td valign="top" class="textBigRight" >&nbsp;</td>
                    <td><?php echo $suID ?>&nbsp;</td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight" >First Name</td>
                    <td valign="top" class="textBigRight" >&nbsp;</td>
                    <td><?php echo $smFName ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Middle Name</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smMName ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Last Name</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smLName ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Date of Birth</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smBDate ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Gender</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smSex ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Citizenship</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smCitizen ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Contact Number</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smContactNo ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Address</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smPmAddress ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Email Address</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smEmail ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">School Last  Attended</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smSchLAttend ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">SHS Track</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smTrack ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Degree Program</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">First Choice</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smProgramCode1 ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Second Choice</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smProgramCode2 ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Third Choice</td>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td><?php echo $smProgramCode3 ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">Application Period </td>
                    <td>&nbsp;</td>
                    <td><?php echo $smAppSem ?></td>
                    </tr>
                  <tr>
                    <td valign="top" class="textBigRight">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
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
                    <td colspan="3">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td align="center">&nbsp;</td>
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




function viewList_PROFILELIST(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	
if ($search<>''){
	 $query="select *  
	 		FROM applicant where smlName LIKE '$search%' order by smLName";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
    <td width="88" class="label1" ><div align="center">Applicant No. </div></td>
    <td width="302" class="label1" >Name</td>
    <td width="88" class="label1" >Application Period</td>
    <td width="78" class="label1" >Exam Sched No</td>
    <td width="66" class="label1" >Exam Taken</td>
    <td width="128" class="label1" >Last Update</td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
		while ($row = mysql_fetch_object($result)){
			$name=$row->smLName . ", " . $row->smFName . " " . $row->smMName
		?>
  	<tr>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="center">
	<?php echo $row->smAppNo ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
	<?php echo $name ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
      <?php echo $row->smAppSem ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smSchedExamID ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smExamTaken ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smLDate ?></div></td>
    </tr>
  	<?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
 	    } 
		?>
  	<tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td colspan="3" bgcolor="#FFFFFF" class="left">
      <?php
}	?>
    </td>
  </tr>
</table>
<?php
}

//###########################  EXAM MODULE #############################


function main_form_QUESTION($subM,$mMenu){
global $page, $error,$errMsg;
global $topicE,$quesE,$optAE,$optBE,$optCE,$optDE,$optEE,$qzImageE,$qzImg1E,$qzImg2E,$qzImg3E,$qzImg4E,$qzImg5E;
$subMenu=$subM;

//$listTopic = getTopic();
list ($tpID,$listTopic) = getTopic();
//echo $tpID;

if (($error==1) && ($_POST['Submit'])){
	$topic=$_POST['topic'];
	$ques=$_POST['ques'];
	$optA=$_POST['optA'];
	$optB=$_POST['optB'];
	$optC=$_POST['optC'];
	$optD=$_POST['optD'];
	$optE=$_POST['optE'];
	$ans=$_POST['ans'];
}

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form enctype="multipart/form-data" method="post" action="<?php echo $page ?> " target="_parent">
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
          <td class="content-home"><h3>LOAD EXAM QUESTIONS</h3>
            </td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
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
                <td width="456" valign="top"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="3" align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" align="center"><?php 
		if ($error==1) {   
			echo "<span class='error'>Invalid Entry on : </span>";
			echo "<span class='text'><br>$errMsg</span>"; 
			echo "<span class='text'>          <br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span><br />";
			echo "<br>";
		}
		?>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top" class="textBig">Topic</td>
                    <td colspan="2" align="left" style="background-color:<?php echo $topicE ?>">
				<select name="topic" class="textfield">
             		<?php
					for($i=0;$i<sizeof($listTopic);$i++){
						if ($pr==$_POST['topic']){
							echo "<option value=$tpID[$i] selected>$tpID[$i] - $listTopic[$i]</option>";
						}else{
							echo "<option value=$tpID[$i]>$tpID[$i] - $listTopic[$i]</option>";
						}
					}
					?>
      				</select>                       

                    </td>
                  </tr>
                  <tr>
                    <td valign="top" class="textBig">Question</td>
                    <td colspan="2" style="background-color:<?php echo $quesE ?>"><textarea name="ques" cols="70" rows="5" id="ques" value="<?php echo htmlspecialchars($ques); ?>" style="background-color:<?php echo $quesE ?>" ><?php echo $ques ?></textarea></td>
                    </tr>
                  <tr>
                    <td class="textBig">&nbsp;</td>
                    <td colspan="2" class="content-home" style="background-color:<?php echo $qzImageE ?>"><input name="qzImage" type="file"  /></td>
                  </tr>
                  <tr>
                    <td class="textBig">Options</td>
                    <td class="text" align="left">&nbsp;</td>
                    <td class="text">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="82" height="35" class="textBig" style="text-align: center">A.</td>
                    <td width="395" style="background-color:<?php echo $optAE ?>">
                      <textarea name="optA" cols="55" rows="2" id="optA" style="background-color:<?php echo $optAE ?>"  value="<?php echo htmlspecialchars($optA); ?>" ><?php echo $optA ?></textarea>
                    </td>
                    <td width="223" style="background-color:<?php echo $qzImg1E ?>"><input name="qzImg1" type="file"  /></td>
                    </tr>
                  <tr>
                    <td height="37" class="textBig" style="text-align: center">B.</td>
                    <td style="background-color:<?php echo $optBE ?>">
                      <textarea name="optB" cols="55" rows="2" id="optB" value="<?php echo htmlspecialchars($optB); ?>" style="background-color:<?php echo $optBE ?>"><?php echo $optB ?></textarea>
                   </td>
                    <td style="background-color:<?php echo $qzImg2E ?>"><input name="qzImg2" type="file"  /></td>
                    </tr>
                  <tr>
                    <td height="35" class="textBig" style="text-align: center">C.</td>
                    <td style="background-color:<?php echo $optCE ?>">
                      <textarea name="optC" cols="55" rows="2" id="optC" value="<?php echo htmlspecialchars($optC); ?>" style="background-color:<?php echo $optCE ?>"><?php echo $optC ?></textarea>
                    </td>
                    <td style="background-color:<?php echo $qzImg3E ?>"><input name="qzImg3" type="file"  /></td>
                    </tr>
                  <tr>
                    <td height="35" class="textBig" style="text-align: center">D.</td>
                    <td style="background-color:<?php echo $optDE ?>">
                      <textarea name="optD" cols="55" rows="2" id="optD" value="<?php echo htmlspecialchars($optD); ?>" style="background-color:<?php echo $optDE ?>"><?php echo $optD ?></textarea>
                    </td>
                    <td style="background-color:<?php echo $qzImg4E ?>"><input name="qzImg4" type="file"  /></td>
                    </tr>
                  <tr>
                    <td height="35" class="textBig" style="text-align: center">D.</td>
                    <td style="background-color:<?php echo $optEE ?>"><textarea name="optE" cols="55" rows="2" id="optE" value="<?php echo htmlspecialchars($optE); ?>" style="background-color:<?php echo $optEE ?>"><?php echo $optE ?></textarea></td>
                    <td style="background-color:<?php echo $qzImg5E ?>"><input name="qzImg5" type="file"  /></td>
                  </tr>
                  <tr>
                    <td height="24" class="textBig">Answer</td>
                    <td colspan="2"><span class="text">
                      <select name="ans" id="ans" class="textfield">
                        <?php 
			$Flag = array("A","B","C","D","E");
  			foreach($Flag as $items){
    			if ($items == $ans){
       				echo "<option selected>$items</option>";
			    }else{     
       				echo "<option>$items</option>";
    			}
  			}
			?>
                        </select>
                    </span></td>
                    </tr>
                  <tr>
                    <td background="images/left.gif"><div align="center"></div></td>
                    <td colspan="2" background="images/left.gif"><input type="submit" name="Submit" id="button" value="Add" class="submit" /></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><iframe width="720" height="375" src="exmQuestion_frame.php?sjCode=<?php echo $_GET['sjCode'] ?>" marginheight="0" marginwidth="0"  frameborder="1" scrolling="Yes"> </iframe>&nbsp;</td>
                </tr>
              <tr>
                <td align="center">&nbsp;</td>
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


function validate_QUESTION(){
global $page, $error,$errMsg;
global $topicE,$quesE,$optAE,$optBE,$optCE,$optDE,$optEE,$qzImageE,$qzImg1E,$qzImg2E,$qzImg3E,$qzImg4E,$qzImg5E;

	$topicE="#FFFFFF";
	$quesE="#FFFFFF";
	$optAE="#FFFFFF";
	$optBE="#FFFFFF";
	$optCE="#FFFFFF";
	$optDE="#FFFFFF";
	$optEE="#FFFFFF";
	$qzImageE="#FFFFFF";
	$qzImg1E="#FFFFFF";$qzImg2E="#FFFFFF";$qzImg3E="#FFFFFF";$qzImg4E="#FFFFFF";$qzImg5E="#FFFFFF";

	$topic=$_POST['topic'];
	$ques=$_POST['ques'];
	$optA=$_POST['optA'];
	$optB=$_POST['optB'];
	$optC=$_POST['optC'];
	$optD=$_POST['optD'];
	$optE=$_POST['optE'];
	$ans=$_POST['ans'];
 
  include('conf.php');

  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');
  $query="SELECT * FROM questions WHERE qzTopic='$topic' and qzQuestion='$ques' and 
  		 qzOptA='$optA' and qzOptB='$optB' and qzOptC='$optC' and qzOptD='$optD' and qzAnswer='$ans'";
  $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  
  if (mysql_num_rows($result) >= 1) {
	$topicE="#FFCCCC";
	$quesE="#FFCCCC";
	$optAE="#FFCCCC";
	$optBE="#FFCCCC";
	$optCE="#FFCCCC";
	$optDE="#FFCCCC";
	$optEE="#FFCCCC";
	$error=1;
	$errMsg="Question already on file";
  }

	if ($_POST['topic']==NULL){
		$topicE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Topic";
		}else{
			$errMsg= "$errMsg, Topic";
		}
	}
	if ($_POST['ques']==NULL){
		$quesE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Question";
		}else{
			$errMsg= "$errMsg, Question";
		}
	}
	if ($_POST['optA']==NULL){
		$optAE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option A";
		}else{
			$errMsg= "$errMsg, Option A";
		}
	}
	if ($_POST['optB']==NULL){
		$optBE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option B";
		}else{
			$errMsg= "$errMsg, Option B";
		}
	}
	if ($_POST['optC']==NULL){
		$optCE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option C";
		}else{
			$errMsg= "$errMsg, Option C";
		}
	}
	if ($_POST['optD']==NULL){
		$optDE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option D";
		}else{
			$errMsg= "$errMsg, Option D";
		}
	}
	if ($_POST['optE']==NULL){
		$optEE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option E";
		}else{
			$errMsg= "$errMsg, Option E";
		}
	}

 if ($_FILES["qzImage"]["size"] <> 0) {
    $maxsize    = 2097152;
    $acceptable = array('image/jpeg','image/jpg','image/gif','image/png');

    if ($_FILES['qzImage']['size'] >= $maxsize){
		$qzImageE="#FFCCCC";   	$error = 1;
		if ($errMsg==""){  
			$errMsg= "Image1-Large File [2MB]";
		}else{
			$errMsg= "$errMsg, Image1-Large File [2MB]";
		}
    }
    if ((!in_array($_FILES['qzImage']['type'], $acceptable)) && (!empty($_FILES["qzImage"]["type"])) ) {
		$qzImageE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Image1-Invalid file type";
		}else{
			$errMsg= "$errMsg, Image1-Invalid file type";
		}
	}
  }// img

  if ((!empty($_FILES["qzImage"])) && ($_FILES['qzImage']['error'] == 0)) {
	$filename = basename($_FILES['qzImage']['name']);
	$newname = dirname(__FILE__).'/question/'.$filename;  
  	if (file_exists($newname)) {
		$qzImageE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Image filename already exists";
		}else{
			$errMsg= "$errMsg, Image filename already exists";
		}
	}
  }
  

 if ($_FILES["qzImg1"]["size"] <> 0) {
    $maxsize    = 2097152;
    $acceptable = array('image/jpeg','image/jpg','image/gif','image/png');

    if ($_FILES['qzImg1']['size'] >= $maxsize){
		$qzImg1E="#FFCCCC";   	$error = 1;
		if ($errMsg==""){  
			$errMsg= "Image1-Large File [2MB]";
		}else{
			$errMsg= "$errMsg, Image1-Large File [2MB]";
		}
    }
    if ((!in_array($_FILES['qzImg1']['type'], $acceptable)) && (!empty($_FILES["qzImg1"]["type"])) ) {
		$qzImg1E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Image1-Invalid file type";
		}else{
			$errMsg= "$errMsg, Image1-Invalid file type";
		}
	}
  }// img1
  if ((!empty($_FILES["qzImg1"])) && ($_FILES['qzImg1']['error'] == 0)) {
	$filename = basename($_FILES['qzImg1']['name']);
	$newname = dirname(__FILE__).'/question/'.$filename;  
  	if (file_exists($newname)) {
		$qzImg1E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option A Image filename already exists";
		}else{
			$errMsg= "$errMsg, Option Image A filename already exists";
		}
	}
  }


 if ($_FILES["qzImg2"]["size"] <> 0) {
    $maxsize    = 2097152;
    $acceptable = array('image/jpeg','image/jpg','image/gif','image/png');

    if ($_FILES['qzImg2']['size'] >= $maxsize){
		$qzImg2E="#FFCCCC";   	$error = 1;
		if ($errMsg==""){  
			$errMsg= "Image1-Large File [2MB]";
		}else{
			$errMsg= "$errMsg, Image1-Large File [2MB]";
		}
    }
    if ((!in_array($_FILES['qzImg2']['type'], $acceptable)) && (!empty($_FILES["qzImg2"]["type"])) ) {		if ($errMsg==""){
			$errMsg= "Image1-Invalid file type";
		}else{
			$errMsg= "$errMsg, Image1-Invalid file type";
		}
	}
  }// img1
  if ((!empty($_FILES["qzImg2"])) && ($_FILES['qzImg2']['error'] == 0)) {
	$filename = basename($_FILES['qzImg2']['name']);
	$newname = dirname(__FILE__).'/question/'.$filename;  
  	if (file_exists($newname)) {
		$qzImg2E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option B Image filename already exists";
		}else{
			$errMsg= "$errMsg, Option Image B filename already exists";
		}
	}
  }


 if ($_FILES["qzImg3"]["size"] <> 0) {
    $maxsize    = 2097152;
    $acceptable = array('image/jpeg','image/jpg','image/gif','image/png');

    if ($_FILES['qzImg3']['size'] >= $maxsize){
		$qzImg3E="#FFCCCC";   	$error = 1;
		if ($errMsg==""){  
			$errMsg= "Image1-Large File [2MB]";
		}else{
			$errMsg= "$errMsg, Image1-Large File [2MB]";
		}
    }
    if ((!in_array($_FILES['qzImg3']['type'], $acceptable)) && (!empty($_FILES["qzImg3"]["type"])) ) {
		$qzImg3E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Image1-Invalid file type";
		}else{
			$errMsg= "$errMsg, Image1-Invalid file type";
		}
	}
  }// img1
  if ((!empty($_FILES["qzImg3"])) && ($_FILES['qzImg3']['error'] == 0)) {
	$filename = basename($_FILES['qzImg3']['name']);
	$newname = dirname(__FILE__).'/question/'.$filename;  
  	if (file_exists($newname)) {
		$qzImg3E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option C Image filename already exists";
		}else{
			$errMsg= "$errMsg, Option Image C filename already exists";
		}
	}
  }


 if ($_FILES["qzImg4"]["size"] <> 0) {
    $maxsize    = 2097152;
    $acceptable = array('image/jpeg','image/jpg','image/gif','image/png');

    if ($_FILES['qzImg4']['size'] >= $maxsize){
		$qzImg4E="#FFCCCC";   	$error = 1;
		if ($errMsg==""){  
			$errMsg= "Image1-Large File [2MB]";
		}else{
			$errMsg= "$errMsg, Image1-Large File [2MB]";
		}
    }
    if ((!in_array($_FILES['qzImg4']['type'], $acceptable)) && (!empty($_FILES["qzImg4"]["type"])) ) {
		$qzImg4E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Image1-Invalid file type";
		}else{
			$errMsg= "$errMsg, Image1-Invalid file type";
		}
	}
  }// img1
  if ((!empty($_FILES["qzImg4"])) && ($_FILES['qzImg4']['error'] == 0)) {
	$filename = basename($_FILES['qzImg4']['name']);
	$newname = dirname(__FILE__).'/question/'.$filename;  
  	if (file_exists($newname)) {
		$qzImg4E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option D Image filename already exists";
		}else{
			$errMsg= "$errMsg, Option Image D filename already exists";
		}
	}
  }


 if ($_FILES["qzImg5"]["size"] <> 0) {
    $maxsize    = 2097152;
    $acceptable = array('image/jpeg','image/jpg','image/gif','image/png');

    if ($_FILES['qzImg5']['size'] >= $maxsize){
		$qzImg5E="#FFCCCC";   	$error = 1;
		if ($errMsg==""){  
			$errMsg= "Image1-Large File [2MB]";
		}else{
			$errMsg= "$errMsg, Image1-Large File [2MB]";
		}
    }
    if ((!in_array($_FILES['qzImg5']['type'], $acceptable)) && (!empty($_FILES["qzImg5"]["type"])) ) {
		$qzImg5E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Image1-Invalid file type";
		}else{
			$errMsg= "$errMsg, Image1-Invalid file type";
		}
	}
  }// img1
  if ((!empty($_FILES["qzImg5"])) && ($_FILES['qzImg5']['error'] == 0)) {
	$filename = basename($_FILES['qzImg5']['name']);
	$newname = dirname(__FILE__).'/question/'.$filename;  
  	if (file_exists($newname)) {
		$qzImg5E="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Option E Image filename already exists";
		}else{
			$errMsg= "$errMsg, Option Image E filename already exists";
		}
	}
  }

	
return $error;
}
  
    
function process_add_QUESTION(){
//examLoadItem.php
$topic=$_POST['topic'];
$ques=addslashes($_POST['ques']);
$optA=addslashes($_POST['optA']);
$optB=addslashes($_POST['optB']);
$optC=addslashes($_POST['optC']);
$optD=addslashes($_POST['optD']);
$optE=addslashes($_POST['optE']);
$ans=$_POST['ans'];

  if ($ques<>NULL and $optA<>NULL and $optB<>NULL and $optC<>NULL and $optD<>NULL){
  $user=$_SESSION['ID'];
  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');
  if (!empty($_FILES["qzImage"]))  {
	$qzImage=$_FILES["qzImage"]["name"];
  	move_uploaded_file($_FILES["qzImage"]["tmp_name"],"./question/" . $_FILES["qzImage"]["name"]);
  }
  if (!empty($_FILES["qzImg1"])){
	$qzImg1=$_FILES["qzImg1"]["name"];
  	move_uploaded_file($_FILES["qzImg1"]["tmp_name"],"./question/" . $_FILES["qzImg1"]["name"]);
  }
  if (!empty($_FILES["qzImg2"])){
	$qzImg2=$_FILES["qzImg2"]["name"];
  	move_uploaded_file($_FILES["qzImg2"]["tmp_name"],"./question/" . $_FILES["qzImg2"]["name"]);
  }
  if (!empty($_FILES["qzImg3"])){
	$qzImg3=$_FILES["qzImg3"]["name"];
  	move_uploaded_file($_FILES["qzImg3"]["tmp_name"],"./question/" . $_FILES["qzImg3"]["name"]);
  }
  if (!empty($_FILES["qzImg4"])){
	$qzImg4=$_FILES["qzImg4"]["name"];
  	move_uploaded_file($_FILES["qzImg4"]["tmp_name"],"./option/" . $_FILES["qzImg4"]["name"]);
  }
  if (!empty($_FILES["qzImg5"])){
	$qzImg5=$_FILES["qzImg5"]["name"];
  	move_uploaded_file($_FILES["qzImg5"]["tmp_name"],"./question/" . $_FILES["qzImg5"]["name"]);
  }
   
   $query="INSERT INTO questions (qzTopic,qzQuestion,qzImage,
   		qzOptA,qzOptB,qzOptC,qzOptD,qzOptE,qzImgA,qzImgB,qzImgC,qzImgD,qzImgE,
		qzAnswer,qzUserID,qzLDate) 
  		VALUES 
		('$topic','$ques','$qzImage',
		'$optA','$optB','$optC','$optD','$optE','$qzImg1','$qzImg2','$qzImg3','$qzImg4','$qzImg5',
		'$ans','$user',now())";
   $result = mysql_query($query) or die ("Error in query Insert : $query. " . mysql_error());

  mysql_close($conn);
  }
}

function viewList_QUESTIONS(){
session_start();

	$sjCode=$_GET['sjCode'];
	$user=$_SESSION['ID'];
	include('conf.php');

  	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from questions order by qzItemNo DESC";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());

      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" class="tdmain">
  <form action="<?php echo $page ?>" method="post" name="form2" id="form2">
    <tr>
      <td width="55" bgcolor="#727bc0" class="label1"><div align="center"><span class="style27s">NO</span></div></td>
      <td width="46" bgcolor="#727bc0" class="label1"><span class="style27">
        <input name="qzDelete" type="submit" id="qzDelete" value="Del" />
      </span></td>
      <td colspan="2" bgcolor="#727bc0" class="label1"><span class="style27">ITEMS</span></td>
      <td bgcolor="#727bc0" class="label1"><div align="center">ANSWER</div></td>
      <td bgcolor="#727bc0" class="label1"><div align="center">TOPIC</div></td>
    </tr>
    <?php  
 	  	  $bcool = "#FFFFFF";
		  $ctr=0;
	  	  while ($row = mysql_fetch_object($result)){ 
		    $itemNo=$row->qzItemNo;
		  ?>
    <tr bgcolor="<?php echo $bcool ?>">
      <td width="55" valign="top" class="text"><div align="center"> <?php echo $row->qzItemNo; ?></div></td>
      <td width="46" valign="top" class="text"><div align="center"> <?php echo "<input type=checkbox name=Delete[$ptr]>"; ?></div></td>
      <td colspan="2" align="left"><pre class="test"><?php echo htmlspecialchars($row->qzQuestion); //echo $row->qzQuestion; ?>
    </pre></td>
      <td width="47" valign="top" class="text"><div align="center"> <?php echo $row->qzAnswer; ?>
        <input type="hidden" name="itemNo[]" value="<?php echo $itemNo ?>" />
      </div></td>
      <td width="100" valign="top" class="text"><div align="center"> <?php echo $row->qzTopic; ?>
        <input type="hidden" name="itemNo[]" value="<?php echo $itemNo ?>" />
      </div></td>
    </tr>
    <tr bgcolor="<?php echo $bcool ?>">
      <td width="55" class="text">&nbsp;</td>
      <td width="46" class="text"><div align="center"></div></td>
      <td width="20" valign="top" class="text"><div align="left">a.</div></td>
      <td width="422" class="text"><div align="left">
        <pre class="test"><?php echo htmlspecialchars($row->qzOptA); //echo trim($row->qzOptA); ?></pre>
      </div></td>
      <td width="47" valign="top" class="text"><div align="center"></div></td>
      <td width="100" valign="top" class="text"><div align="center"></div></td>
    </tr>
    <tr bgcolor="<?php echo $bcool ?>">
      <td width="55" class="text">&nbsp;</td>
      <td width="46" class="text"><div align="center"></div></td>
      <td width="20" valign="top" class="text"><div align="left">b.</div></td>
      <td align="left" class="text"><pre class="test"><?php echo htmlspecialchars($row->qzOptB); //echo trim($row->qzOptB); ?></pre></td>
      <td width="47" class="text">&nbsp;</td>
      <td width="100" class="text"><div align="center"></div></td>
    </tr>
    <?php 
  $qC=$row->qzOptC;
  if ($qC<>''){ ?>
    <tr bgcolor="<?php echo $bcool ?>">
      <td width="55" class="text">&nbsp;</td>
      <td width="46" class="text"><div align="center"></div></td>
      <td width="20" valign="top" class="text"><div align="left">c.</div></td>
      <td align="left" class="text"><pre class="test"><?php echo htmlspecialchars($row->qzOptC); //echo "$row->qzOptC"; ?></pre></td>
      <td width="47" class="text">&nbsp;</td>
      <td width="100" class="text"><div align="center"></div></td>
    </tr>
    <?php } 
  
  $qD=$row->qzOptD;
  if ($qD<>''){ ?>
    <tr bgcolor="<?php echo $bcool ?>">
      <td width="55" class="text">&nbsp;</td>
      <td width="46" class="text"><div align="center"></div></td>
      <td width="20" valign="top" class="text"><div align="left">d.</div></td>
      <td align="left" class="text"><pre class="test"><?php echo htmlspecialchars($row->qzOptD); //echo "$row->qzOptD"; ?></pre></td>
      <td width="47" class="text">&nbsp;</td>
      <td width="100" class="text"><div align="center"></div></td>
    </tr>
    <?php }  
               
			if ($bcool=="#F2F2F2"){
			$bcool="#FFFFFF";
			}else{
			$bcool = "#F2F2F2";
			}	
			$ctr=$ctr+1;
			$ptr=$ptr+1;
		  }	
			?>
    <input type="hidden" name="tPtr" value="<?php echo $ptr ?>" />
  </form>
</table>
<?php
}

function msg2(){
global $error,$success;  
  //heading_REV();
?>
<link href="conf/jingdell.css" rel="stylesheet" type="text/css" />
	<div id="body">
<table width="960" height="569" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="960" height="19"  valign="top" background="images/bg-content.jpg" >&nbsp;</td>
  </tr>
  <tr>
    <td width="960" height="2"  valign="top" background="images/bg-content.jpg" ><table width="960" height="437" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="960" height="2"  valign="top"></td>
      </tr>
      <tr>
        <td height="435" valign="top"><table width="960" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td width="24" valign="top" class="center"  scope="row" background="images/bg-content.jpg">&nbsp;</td >
            <td width="168" height="272" valign="top" bgcolor="#94acb3" class="center"  scope="row"><table width="168"  border="0" align="center" cellpadding="0" cellspacing="0" >
              <tr>
                <td valign="top"  >&nbsp;</td>
              </tr>
              <tr>
                <td valign="top" id="module"><?php
			//echo $_SESSION['rights'];
			
            if ($_SESSION['rights']==90){
				echo "Admin Module";
			}
            if ($_SESSION['rights']==80){
				echo "Test Module";
			}
            if ($_SESSION['rights']==70){
				echo "Faculty Module";
			}
            if ($_SESSION['rights']==10){
				echo "Student Module";
			}
			?></td>
              </tr>
              <tr>
                <td valign="top"  >&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"  ><?php 
			  //studMenu();
		?></td>
              </tr>
            </table></td >
            <td width="795" align="center" valign="top" background="images/bg-content.jpg" class="adjust"  >&nbsp;&nbsp;&nbsp;<br />
              <table width="716" height="510" border="0" align="center" cellpadding="0" cellspacing="0" class="content">
                <tr>
                  <td width="716" valign="top"><table width="709" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                       <td width="709" id="pageTitle"><img src="images/next.gif" width="12" height="12" /> Load Exam Questions</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="84">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="19"><div align="center" class="error">
                            <?php 
		  if ($error<>O ){
		  echo $error;
		  } 
		  ?>
                            &nbsp;</div></td>
                        </tr>
                        <tr>
                          <td height="19"><div align="center" class="instruction">
                            <?php 
		  if ($success<>NULL ){
		  echo $success;
		  } 
		  ?>
                            &nbsp;</div></td>
                        </tr>
                        <tr>
                          <td height="19"><div align="center" class="text"><a href="employee.php">Back</a></div></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php 
pagefooter_index();
}

function process_delete_QUESTIONSDELETE(){
//examLoadItem_frame.php
$noChk=$_POST['Delete'];
$itemNo=$_POST['itemNo'];
$tPtr=$_POST['tPtr'];

$ptr=0;
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	while ($ptr<$tPtr){
  		if ($noChk[$ptr]==on){
 			$query="DELETE FROM questions WHERE qzItemNo='$itemNo[$ptr]'";
  			$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
  		}
  	$ptr=$ptr+1;
	}
 	mysql_close($conn);
}


function main_form_CREATEAEXAMADD($subM,$mMenu){
global $page, $error,$errMsg;
$subMenu=$subM;
list ($tpID,$listTopic) = getTopic();

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page2 ?>">
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
          <td class="content-home"><h3>create EXAM - add item</h3>
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
                <td colspan="2"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0"  >
                  <tr>
                    <td width="85" >Period</td>
                    <td width="270" ><span style="background-color:<?php echo $periodE ?>">
                      <select name="selPeriod" class="textfield" >
                        <?php
				  selPeriod();
          		?>
                        </select>
                    </span></td>
                    </tr>
                  <tr>
                    <td >Topic</td>
                    <td ><span style="background-color:<?php echo $topicE ?>">
				<select name="topic" class="textfield">
             		<?php
					for($i=0;$i<sizeof($listTopic);$i++){
						if ($tpID[$i]==$_POST['topic']){
							echo "<option value=$tpID[$i] selected>$listTopic[$i]</option>";
						}else{
							echo "<option value=$tpID[$i]>$listTopic[$i]</option>";
						}
					}
					?>
      				</select>                       
                    </span></td>
                    </tr>
                  <tr>
                    <td >&nbsp;</td>
                    <td ><input type="submit" name="Submit" id="button" value="Search" class="submit" /></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td width="26">&nbsp;</td>
                <td width="754">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="center"><iframe width="730" height="700" src="exmCreateAdd_frame.php?search=<?php echo $_POST['selPeriod'] ?>&&topic=<?php echo $_POST['topic'] ?>" marginheight="1" marginwidth="1"  frameborder="1" scrolling="Yes" > </iframe>&nbsp;</td>
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

function viewList_CREATEADD(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
	$topic=$_GET['topic'];
	//echo "$search * $topic";
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<form name="form2" method="post" action="<?php echo $page2 ?>">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	
if ($topic<>''){
	 $query="select questions.*,exam.* 
	 	FROM questions LEFT JOIN exam ON questions.qzItemNo = exam.examItemNo 
		WHERE  (((questions.qzTopic)='$topic') AND ((exam.examPeriod)<>'$search' Or (exam.examPeriod) Is Null)) ";
	 //$query="select *  FROM questions where qzTopic='$topic' ";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
  	  <td colspan="4" class="textGrand" >Select a QUESTIONS to add for an exam for <?php echo $search ?></td>
    </tr>
  	<tr class="total">
    <td colspan="2" class="label2" ><div align="center">ID </div></td>
    <td width="48" class="label2" >Question</td>
    <td width="838" class="label2" >&nbsp;</td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
		$ptr=0;
		while ($row = mysql_fetch_object($result)){
			$qzItemNo=$row->qzItemNo;
			$qzImage==$row->qzImage;
		?>
  	<tr>
    <td width="33" valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="center">
	<?php echo $row->qzItemNo ?></div></td>
    <td width="31" valign="top" bgcolor="<?php echo $bcool ?>" class="text">
    <?php
					echo "<input type=hidden name=qzItemNo[$ptr] value=$qzItemNo >";  
					if ($inc=="Yes"){
						echo "<input type=checkbox name=inc[] value=$qzItemNo checked=checked>";
					}else{
						echo "<input type=checkbox name=inc[] value=$qzItemNo >";
					}
			?></td>
    <td colspan="2" bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
	<?php echo $row->qzQuestion ?></div>
    <?php 
	if ($row->qzImage<>""){
		$pic='question/' . $row->qzImage;
		?><img src="<?php echo $pic ?>" /><br /><?php
	}
	?>
    </td>
    </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text" align="center">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">A.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptA ?>
    <?php 
	if ($row->qzImgA<>""){
		$picA='question/' . $row->qzImgA;
		?><br /><img src="<?php echo $picA ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">B.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptB ?>
    <?php 
	if ($row->qzImgB<>""){
		$picB='question/' . $row->qzImgB;
		?><br /><img src="<?php echo $picB ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">C.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptC ?>
    <?php 
	if ($row->qzImgC<>""){
		$picC='question/' . $row->qzImgC;
		?><br /><img src="<?php echo $picC ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td  align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">D.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptD ?>
    <?php 
	if ($row->qzImgD<>""){
		$picD='question/' . $row->qzImgD;
		?><br /><img src="<?php echo $picD ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<tr>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text">&nbsp;</td>
  	  <td align="center" valign="top" bgcolor="<?php echo $bcool ?>" class="textBold">E.</td>
  	  <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->qzOptE ?>
    <?php 
	if ($row->qzImgE<>""){
		$picE='question/' . $row->qzImgE;
		?><br /><img src="<?php echo $picE ?>" /><br /><?php
	}
	?>
      </td>
  </tr>
  	<?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
		  $ptr=$ptr+1;
 	    } 
		?><input type="hidden" name="tPtr" value="<?php echo $ptr ?>">
        <input type="hidden" name="period" value="<?php echo $search ?>">
  	<tr bgcolor="#FFFFFF">
    <td colspan="3" class="left"><input name="Assign" type="submit" id="submit2" value="Add Question" />&nbsp;</td>
    <td bgcolor="#FFFFFF" class="left"><?php
}	?></td>
  </tr>
</table>
</form>
<?php
}

function process_add(){
	$inc=$_POST['inc'];
	$tPtr=$_POST['tPtr'];
	$per=$_POST['period'];
	$qzItemNo=$_POST['qzItemNo'];
	$user=$_SESSION['user'];
	//$ps=$_POST['pNo'];//political status
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
    //echo "//$inc * $tPtr * $ldNo";
 
  $ptr=0;
  while ($ptr<$tPtr){
	//echo "<br>%% $tPtr * inc=$inc * ldNo=$ldNo" ;
	$ctr=0;
	if ($inc[$ptr]<>""){
    	$query="INSERT INTO exam (examPeriod,examItemNo,examLUser,examLDate) 
  		VALUES ('$per','$inc[$ptr]','$user',now())";
		//echo "<br>$query";
		$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	}
	$ptr=$ptr+1;
  }
}


function viewList_EXAMSCHED(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="1050" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	
if ($search<>''){
	 $query="select *  
	 		FROM sched where scPeriod='$search' order by scPeriod,scDate,scTime,scRoom";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
    <td width="75" class="label1" ><div align="center">Schedule ID </div></td>
    <td width="105" class="label1" >Period</td>
    <td width="106" class="label1" >Date</td>
    <td width="105" class="label1" >Time</td>
    <td width="57" class="label1" >Room</td>
    <td width="100" class="label1" >Status</td>
    <td width="100" class="label1" >Program1</td>
    <td width="100" class="label1" >Program2</td>
    <td width="100" class="label1" >Program3</td>
    <td width="100" class="label1" >Program4</td>
    <td width="102" class="label1" >Program5</td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
		while ($row = mysql_fetch_object($result)){
		?>
  	<tr>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="center">
	<?php echo $row->scID ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scPeriod ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scDate ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scTime ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scRoom ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->scStatus ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->scProgram1 ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram2 ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram3 ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram4 ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><?php echo $row->scProgram5 ?></td>
    </tr>
  	<?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
 	    } 
		?>
  	<tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td colspan="8" bgcolor="#FFFFFF" class="left">
      <?php
}	?>
    </td>
  </tr>
</table>
<?php
}


function main_form_EXAMSCHED($subM,$mMenu){
global $access;
global $page, $error,$errMsg;
global $periodE,$program1E,$program2E,$program3E,$program4E,$program5E,$timeE,$roomE,$exDateE;
$subMenu=$subM;

$rooms=getRooms();
list ($prCode,$prDesc) = getProgramAll();

if (($error==1) && ($_POST['Submit'])){
/*	$topic=$_POST['topic'];
	$ques=$_POST['ques'];
	$optA=$_POST['optA'];
	$optB=$_POST['optB'];
	$optC=$_POST['optC'];
	$optD=$_POST['optD'];
	$ans=$_POST['ans'];*/
}

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<form id="form1" name="form1" method="post" action="<?php echo $page2 ?>">
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
          <td class="content-home"><h3>CREATE EXAM SCHEDULE</h3>
            </td>
        </tr>
        <tr>
          <td height="850" class="content-home" valign="top">
            <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0" >
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
                <td width="456" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><?php 
		if ($error==1) {   
			echo "<span class='error'>Invalid Entry on : </span>";
			echo "<span class='text'><br>$errMsg</span>"; 
			echo "<span class='text'>          <br><br>Please select or enter a VALID data. ";
			echo "<strong><br>Possible Causes:</strong> BLANK or UNRECOGNIZED INPUT</span><br />";
			echo "<br>";
		}
		?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><table width="600" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="95" > Period </td>
                    <td width="305" style="background-color:<?php echo $periodE ?>"><select name="selPeriod" class="textfield" >
                      <?php
				  selPeriod();
          		?>
                    </select></td>
                    </tr>
                  <tr>
                    <td >Date of Exam</td>
                    <td style="background-color:<?php echo $exDateE ?>"><input name="exDate" type="Date" class="textfield" id="exDate" placeholder=""  value="<?php echo $_POST['exDate'] ?>"  /></td>
                    </tr>
                  <tr>
                    <td >Time</td>
                    <td style="background-color:<?php echo $timeE ?>">
                      <select name="clTimeIn" id="clTimeIn" >
                        <?php 
			$time1=selTime();
			foreach($time1 as $i){
    			if ($i == $_POST['clTimeIn']){
        			echo "<option selected>$i</option>";
    			}else{
       				 echo "<option>$i</option>";
    			}
		    }	 
			?>
                        </select>
                      -
  			<select name="clTimeOut" id="clTimeOut">
   			<?php 
			$time2=selTime();
			foreach($time2 as $i){
    			if ($i == $_POST['clTimeOut']){
        			echo "<option selected>$i</option>";
    			}else{
       				 echo "<option>$i</option>";
    			}
		    }	 
			?>
  			</select>
                    </td>
                    </tr>
                  <tr>
                    <td >Room</td>
                    <td style="background-color:<?php echo $roomE ?>">
                      <select name="room" class="textfield" id="room">
                        <?php
					for($i=0;$i<sizeof($rooms);$i++){
						if ($rooms[$i]==$_POST['room']){
							echo "<option value=$rooms[$i] selected>$rooms[$i]</option>";
						}else{
							echo "<option value=$rooms[$i] >$rooms[$i]</option>";
						}
					}
					?>
                        </select>
                    </td>
                    </tr>
                  <tr>
                    <td valign="top" >Program 1</td>
                    <td style="background-color:<?php echo $program1E ?>">
                      <select name="program1" class="textfield" id="program">
                        <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program1']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                        </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 2</td>
                    <td style="background-color:<?php echo $program2E ?>">
                    <select name="program2" class="textfield" id="program2">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program2']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                      </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 3</td>
                    <td style="background-color:<?php echo $program3E ?>">
                    <select name="program3" class="textfield" id="program3">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program3']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                      </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 4</td>
                    <td style="background-color:<?php echo $program4E ?>">
                    <select name="program4" class="textfield" id="program4">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program4']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                      </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Program 5</td>
                    <td style="background-color:<?php echo $program5E ?>">
                    <select name="program5" class="textfield" id="program5">
                      <?php
							echo "<option value='ALL'>All Programs</option>";
					for($i=0;$i<sizeof($prDesc);$i++){
						$pr=$prCode[$i];
						if ($pr==$_POST['program5']){
							echo "<option value=$prCode[$i] selected>$prCode[$i] - $prDesc[$i]</option>";
						}else{
							echo "<option value=$prCode[$i]>$prCode[$i] - $prDesc[$i]</option>";
						}
					}
					?>
                    </select></td>
                  </tr>
                  <tr>
                    <td valign="top" >Status</td>
                    <td style="background-color:<?php echo $program5E ?>">
                    <select name="suAccStatus" id="suAccStatus" class="textfield">
                      <?php
  $AdmStatus = array("Enabled","Disabled");
  foreach($AdmStatus as $items){
    if ($items == $suAccStatus){
       echo "<option selected>$items</option>";
    }else{     
       echo "<option>$items</option>";
    }
  }
?>
                    </select></td>
                  </tr>
                  <tr>
                    <td class="text" >&nbsp;</td>
                    <td ><input name="Submit" type="submit" id="Submit" value="Submit" class="submit" /></td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td align="center">&nbsp;</td>
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

function validate_EXAMSCHED(){
global $page, $error,$errMsg;
global $periodE,$program1E,$program2E,$program3E,$program4E,$program5E,$timeE,$roomE,$exDateE;

	$periodE="#FFFFFF";
	$program1E="#FFFFFF";
	$program2E="#FFFFFF";
	$program3E="#FFFFFF";
	$program4E="#FFFFFF";
	$program5E="#FFFFFF";
	$timeE="#CCCCCC";
	$roomE="#CCCCCC";
	
	$selPeriod = $_POST['selPeriod'];
	//$per=explode("-",$selPeriod);
	$exDate = $_POST['exDate'];
	$sched1a=convert_MTime($_POST['clTimeIn']);
	$sched1b=convert_MTime($_POST['clTimeOut']);
	$time=$sched1a . "-" . $sched1b;
	$room=$_POST['room'];
	$program1 = $_POST['program1'];
	$prog1=explode("-",$program1);
 
  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');
  $query="SELECT * FROM sched WHERE scPeriod='$selPeriod' and scDate='$exDate' and scTime='$time' and scRoom='$room'";
  //echo $query;
  $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  if (mysql_num_rows($result) >= 1) {
	$periodE="#FFCCCC";
	$exDateE="#FFCCCC";
	$timeE="#FFCCCC";
	$roomE="#FFCCCC";
	$error=1;
	$errMsg="Exam Schedule already on file";
  }

	if ($_POST['selPeriod']==NULL){
		$periodE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Period";
		}else{
			$errMsg= "$errMsg, Period";
		}
	}
    if ($_POST['clTimeIn']<>NULL) {
	  if ($_POST['clTimeOut']==NULL){
		$timeE="#FFCCCC";
    	$error = 1;
		if ($errMsg==""){
			$errMsg= "Time";
		}else{
			$errMsg= "$errMsg, Time";
		}
	  }
	}

return $error;
}
  
    
function process_add_EXAMSCHED(){
//studRClassEntry.php

	$selPeriod = $_POST['selPeriod'];
	//$per=explode("-",$selPeriod);
	$exDate = $_POST['exDate'];
	$sched1a=convert_MTime($_POST['clTimeIn']);
	$sched1b=convert_MTime($_POST['clTimeOut']);
	$time=$sched1a . "-" . $sched1b;
	$room=$_POST['room'];

	$program1 = $_POST['program1'];
	if ($program1<>""){ $prog1=explode("-",$program1); 	$pg1=$prog1[0];	}else{ 	$pg1=""; }
	$program2 = $_POST['program2'];
	if ($program2<>""){ $prog2=explode("-",$program2); 	$pg3=$prog2[0];	}else{ 	$pg2=""; }
	$program3 = $_POST['program3'];
	if ($program3<>""){ $prog3=explode("-",$program3); 	$pg3=$prog3[0];	}else{ 	$pg3=""; }
	$program4 = $_POST['program4'];
	if ($program4<>""){ $prog4=explode("-",$program4); 	$pg4=$prog4[0];	}else{ 	$pg4=""; }
	$program5 = $_POST['program5'];
	if ($program5<>""){ $prog5=explode("-",$program5); 	$pg5=$prog5[0];	}else{ 	$pg5=""; }

	$LUser=$_SESSION['user'];
	$scStatus=$_POST['suAccStatus'];
	
	$max=50;
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	$query="INSERT INTO sched(scPeriod,scDate,scTime,scRoom,
			scProgram1,scProgram2,scProgram3,scProgram4,scProgram5,scStatus,scMax,scBal,
			scLUser,scLDate)
			VALUES ('$selPeriod ','$exDate','$time','$room',
			'$pg1','$pg2','$pg3','$pg4','$pg5','$scStatus','$max','$max',
			'$LUser',now())";
	//echo $query;
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());

}


//###########################  REPORT MODULE #############################
function viewList_APPSEM(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	
if ($search<>''){
	 $query="select *  
	 		FROM applicant where smAppSem='$search' order by smLName,smFName,smMName";
     $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
    <td width="88" class="label1" ><div align="center">Applicant No. </div></td>
    <td width="302" class="label1" >Name</td>
    <td width="88" class="label1" >Application Period</td>
    <td width="78" class="label1" >Sched Exam ID</td>
    <td width="66" class="label1" >Exam Taken</td>
    <td width="128" class="label1" >Last Update</td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
		while ($row = mysql_fetch_object($result)){
			$name=$row->smLName . ", " . $row->smFName . " " . $row->smMName
		?>
  	<tr>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="center"><?php echo $row->smAppNo ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
	<?php echo $name ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
      <?php echo $row->smAppSem ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smSchedExamID ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smExamTaken ?></div></td>
    <td bgcolor="<?php echo $bcool ?>" class="text"><div align="left"> <?php echo $row->smLDate ?></div></td>
    </tr>
  	<?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
 	    } 
		?>
  	<tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td colspan="3" bgcolor="#FFFFFF" class="left">
      <?php
}	?>
    </td>
  </tr>
</table>
<?php
}


function viewList_RESULTSEM(){
//ldrSearch_frame.php

	session_start();
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_query("SET CHARACTER_SET 'utf8'", $conn);

	$search=$_GET['search'];
	$program=$_GET['prog'];
	$progCh=$_GET['progCh'];
	$sex=$_GET['sex'];
	
	//echo "$search * $program * $progCh";
      ?>  
<link href="css/emsdell.css" rel="stylesheet" type="text/css" />
<table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	
if ($search<>''){
	 $query="select *  FROM applicant where smAppSem='$search' and $progCh='$program' and smSex='$sex' and smExamTaken='Yes' order by smLName,smFName,smMName";
     //echo $query;
	 $result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
       ?>
  	<tr class="total">
    <td width="75" class="label1" ><div align="center">Applicant No. </div></td>
    <td width="244" class="label1" >Name</td>
    <td width="49" class="label1" >Sex</td>
    <td width="72" class="label1" >Date Taken</td>
    <td width="285" class="label1" ><table width="275" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="158" class="label1">Topic</td>
        <td width="39" align="center" class="label1">Raw  Score</td>
        <td width="37" align="center" class="label1">%File  Rank</td>
        <td width="41" align="center" class="label1">Stanine</td>
        </tr>
      <?php 
			$query3="SELECT * FROM topics order by tpID";
			$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
			while ($row3 = mysql_fetch_object($result3)){ 
				$tpID=$row3->tpID;
				$tpTopic=$row3->tpTopic;
				$query4="select count(*) FROM answer INNER JOIN questions ON answer.ansQzItemNo = questions.qzItemNo
						WHERE ansAppNo='$appNo' and ansPeriod='$search' and ansRem='C' and qzTopic='$tpID'";
  				$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
				$row4=mysql_fetch_row($result4);
				$score=$row4[0];
				$equiv=equivalent($tpID,$sex,$score);
			?>
      <?php } ?>
    </table></td>
    </tr>
  	<?php
	    $bcool = "#FFFFFF";
	  $tpStat=0;
		while ($row = mysql_fetch_object($result)){
			$name=$row->smLName . ", " . $row->smFName . " " . $row->smMName;
			$appNo=$row->smAppNo;
		?>
  	<tr>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="center"><?php echo $row->smAppNo ?></div></td>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="left">
	<?php echo $name ?></div></td>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text"><div align="left"><?php echo $row->smSex ?></div></td>
    <td valign="top" bgcolor="<?php echo $bcool ?>" class="text">
	  <?php $new_date = date("M d Y", strtotime($row->smExamDateFns));
			echo $new_date ?></td>
    <td bgcolor="<?php echo $bcool ?>" class="text">
              <table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
                <?php 
			$query3="SELECT * FROM topics order by tpID";
			$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
			while ($row3 = mysql_fetch_object($result3)){ 
				$tpID=$row3->tpID;
				$tpTopic=$row3->tpTopic;
				$query4="select count(*) FROM answer INNER JOIN questions ON answer.ansQzItemNo = questions.qzItemNo
						WHERE ansAppNo='$appNo' and ansPeriod='$search' and ansRem='C' and qzTopic='$tpID'";
  				$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
				$row4=mysql_fetch_row($result4);
				$score=$row4[0];
				$equiv=equivalent($tpID,$sex,$score);
			?>
                <tr>
                  <td width="156" class="text"><?php echo $tpTopic ?></td>
                  <td width="40" align="center" class="text"><?php echo $score ?></td>
                  <td width="41" align="center" class="text"><?php echo $equiv[0] ?></td>
                  <td width="38" align="center" class="text"><?php echo $equiv[1] ?></td>
                </tr>
              <?php } ?>    
              </table>
    </td>
    </tr>
  	<?php if ($bcool=="#CCCCCC"){
			$bcool="#FFFFFF";
		  }else{
			$bcool = "#CCCCCC";
		  }	
 	    } //WHILE APPLICANT
		?>
  	<tr bgcolor="#FFFFFF">
    <td class="left">&nbsp;</td>
    <td class="left">&nbsp;</td>
    <td class="field_value_entry">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="left">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="left"><?php
  }	//SEARCH ?></td>
  </tr>
</table>
<?php
}


//###########################  SYSTEM TOOLS  MODULE #############################

//###########################  take exam MODULE #############################

function get_Applicant_user(){ 
  global $access;
  session_start();
  $user=$_POST['user'];
  $password=$_POST['password'];
  //$password = substr(md5($password), 0, 20);
  include('conf.php');
  $conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
  mysql_select_db($db) or die ('Unable to connect to database');

  // check and set PAID/UNPAID SYS
  $today=date("Y-m-d", mktime());  	
  $exp=$today;						// FULLY PAID system ==> unCOMMENT or ACTIVATE this code  
  							// NOT FULLY PAID system ==> COMMENT this code and SET the date of expiration in the conf.php    
  if ($today <= $exp){
	  $ok_e = 1;	// NOT expired
  }

  // check and set mac address
  $dateToday=date("d", mktime()); 
  if ($dateToday==15){
  	 // this will update mac address every 15th day of the month
	 $acc=configs();
 	 $query3="UPDATE computer SET num='$acc',LastUpdate=now()";
	 $result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
  }
  $query4="select * from computer where num='$num'";
  $result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
  $ok_m=mysql_num_rows($result4);

  // echo "$ok_m * $ok_e";
  
  if ($ok_m == 1 && $ok_e == 1){
 
 //SELECT applicant.smID, applicant.smPassword, applicant.smAppSem, applicant.smSchedExamID, sched.scStatus
//FROM applicant INNER JOIN sched ON applicant.smSchedExamID = sched.scID;

 	$query="select applicant.*,sched.* from applicant INNER JOIN sched 
			ON applicant.smSchedExamID = sched.scID
			WHERE smAppNo='$user' and smPassword='$password' and smExamTaken='No' and scStatus='Enabled'";
  	//echo $query;
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  	if (mysql_num_rows($result) == 1 ){
		$row = mysql_fetch_array($result);
		$name = $row['smFName'] . " " . $row['smMName'] . " " . $row['smLName'];
    	$_SESSION['name']=$name;
		$_SESSION['user']=$row['smAppNo'];
		$_SESSION['period']=$row['smAppSem'];
		$_SESSION['sex']=$row['smSex'];
		//$_SESSION['dept']=$row['suDeptCode'];
		//$_SESSION['desig']=$row['suDesig'];
		//$userID=$row['suID'];
		//LoginSaveSession($user);
   		$query="INSERT INTO login (userID,active,login,logDate) VALUES ('$userID','Y',now(),now())";
  		$result = mysql_query($query) or die ("Error in query login-detail : $query. " . mysql_error());
		header("Location:takeExam.php");
  	}else{
		//heading_SITE();
		$access="Invalid User <br><span class=center>Unauthorized to access this system or <br> Exam already taken</span><br>";
    	input_data_TAKEEXAM();
  	}
  }else{
	if ($ok_m == 0 ){
		//heading_SITE();
		$access=index_main();
    	input_data_TAKEEXAM();
		getSysFooter();  
	}else{
		if ($ok_e == 0 ){
			//heading_SITE();
			$access=index_exp();
    		input_data_TAKEEXAM();
			getSysFooter();  
		}
	}
  } 
} 


function viewResult_EXAM(){
	$user=$_SESSION['user'];
	$period=$_SESSION['period'];
	$sex=$_SESSION['sex'];
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="home-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr><td width="122" align="center" valign="top">
  <?php getTakeExamMenu(); ?>
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
          <td class="content-home"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
            <tr>
              <td>Welcome!<span class="error">&nbsp;<?php echo $_SESSION['name'] ?></span></td>
              <td>&nbsp;</td>
            </tr>
            </table></td>
          </tr>
        <tr>
          <td class="content-home"><h3>THANK YOU FOR TAKING THE EXAM!</h3>
            </td>
          </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>
              <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="180" bgcolor="#CCCCCC">Topic</td>
                  <td width="77" align="center" bgcolor="#CCCCCC">Raw  Score</td>
                  <td width="83" align="center" bgcolor="#CCCCCC">%File  Rank</td>
                  <td width="65" align="center" bgcolor="#CCCCCC">Stanine</td>
                  <td width="95" align="center" bgcolor="#CCCCCC">Scaled  Score</td>
                </tr>
			<?php 
			$query3="SELECT * FROM topics order by tpID";
			$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
			while ($row3 = mysql_fetch_object($result3)){ 
				$tpID=$row3->tpID;
				$tpTopic=$row3->tpTopic;
				$query4="select count(*) FROM answer INNER JOIN questions ON answer.ansQzItemNo = questions.qzItemNo
						WHERE ansAppNo='$user' and ansPeriod='$period' and ansRem='C' and qzTopic='$tpID'";
  				$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
				$row4=mysql_fetch_row($result4);
				$score=$row4[0];
				$equiv=equivalent($tpID,$sex,$score);
			?>
                <tr>
                  <td><?php echo $tpTopic ?></td>
                  <td align="center"><?php echo $score ?></td>
                  <td align="center"><?php echo $equiv[0] ?></td>
                  <td align="center"><?php echo $equiv[1] ?></td>
                  <td align="center"><?php echo $equiv[2] ?></td>
                </tr>
              <?php } ?>    
                <tr>
                  <td colspan="5"><hr /></td>
                  </tr>
              </table></td>
              </tr>
            <tr>
              <td width="561">&nbsp;</td>
              </tr>
            <tr>
              <td><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr >
                  <td width="31" height="26" align="center" bgcolor="#CCCCCC"><span class="text">Item No.</span></td>
                  <td width="53" align="center" bgcolor="#CCCCCC" ><span class="text">Answer</span></td>
                  <td width="58" align="center" bgcolor="#CCCCCC" ><span class="text">Correct Answer</span></td>
                  <td colspan="2" align="left" bgcolor="#CCCCCC"><span class="text">Questions</span></td>
                  <td align="left" bgcolor="#CCCCCC">Area</td>
                  </tr>
                <?php
	$query="select * from applicant WHERE smAppNo='$user' and smAppSem='$period'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	$meron=mysql_num_rows($result);
  	if ($meron == 1 ){
		$row = mysql_fetch_array($result);
    	$score=$row['smExamScore'];
    	$totalItem=$row['smExamTItem'];
	}
	$query2="SELECT exam.*,questions.*,answer.*  
		    FROM (exam INNER JOIN questions ON exam.examItemNo = questions.qzItemNo) 
			INNER JOIN answer ON questions.qzItemNo = answer.ansQzItemNo
			WHERE (  ((exam.examPeriod)='$period') AND ((answer.ansAppNo)='$user')  ) order by qzTopic,qzQuestion";
  	$result = mysql_query($query2) or die ("Error in query : $query2. " . mysql_error());
	$ptr=1;
	while ($row = mysql_fetch_object($result)){ 
		$key=$row->qzAnswer;
		$ans=$row->ansAns;
		$tpID=$row->qzTopic;
		$topic=getTopicDTL($tpID);
		
		?>
                <tr >
                  <td align="center" valign="top" ><span class="text"><?php echo $ptr ?></span></td>
                  <td align="center" valign="top" ><span class="text"><?php 
				if ($key==$ans){
					?>
                    <?php echo $ans ?>&nbsp;<img src="images/check.png" width="12" height="12" />
                    <?php
                }else{
					?>
                    <?php echo $ans ?>&nbsp;<img src="images/wrong.png" width="12" height="12" />
                    <?php
				} ?></span></td>
                  <td align="center" valign="top" ><span class="text"><?php echo $key; ?></span></td>
                  <td colspan="2" valign="top" ><span class="text"><?php echo $row->qzQuestion; ?></span></td>
                  <td valign="top" ><?php echo $topic ?></td>
                  </tr>
                <tr>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td width="79" valign="top" >a.</td>
                  <td width="345" ><span class="text"><?php echo $row->qzOptA; ?></span></td>
                  <td width="134" >&nbsp;</td>
                  </tr>
                <tr>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td >&nbsp;</td>
                  <td valign="top" >b. </td>
                  <td ><span class="text"><?php echo $row->qzOptB; ?></span></td>
                  <td >&nbsp;</td>
                  </tr>
                <tr>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td >&nbsp;</td>
                  <td valign="top" >c.</td>
                  <td ><span class="text"><?php echo $row->qzOptC; ?></span></td>
                  <td >&nbsp;</td>
                  </tr>
                <tr >
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td >&nbsp;</td>
                  <td valign="top">d.</td>
                  <td ><span class="text"><?php echo $row->qzOptD; ?></span></td>
                  <td >&nbsp;</td>
                  </tr>
                <tr >
                  <td id="nav2" align="center" >&nbsp;</td>
                  <td id="nav2" align="center" >&nbsp;</td>
                  <td id="nav2" >&nbsp;</td>
                  <td valign="top" id="nav2" >e</td>
                  <td id="nav2" ><span class="text"><?php echo $row->qzOptE; ?></span></td>
                  <td id="nav2" >&nbsp;</td>
                  </tr>
                <?php
		$ptr=$ptr+1;
	}
	$ptr=$ptr-1;
	
	?>
                
              </table></td>
              </tr>
            <tr>
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

function loadquestion_EXAM(){
	$user=$_SESSION['user'];
	$period=$_SESSION['period'];

?>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td class="home-page">
  <table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr><td width="122" align="center" valign="top">
  <?php getTakeExamMenu(); ?>
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
          <td class="content-home"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="555">&nbsp;</td>
              <td width="195">&nbsp;</td>
              </tr>
            <tr>
              <td>Welcome!<span class="error">&nbsp;<?php echo $_SESSION['name'] ?></span></td>
              <td>&nbsp;</td>
            </tr>
            </table></td>
          </tr>
        <tr>
          <td class="content-home"><h3>&nbsp;Take Exam Now!</h3>
            </td>
          </tr>
        <tr>
          <td height="750" valign="top" class="content-home"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="23">&nbsp;</td>
              <td width="744" valign="top">&nbsp;</td>
              <td width="13">&nbsp;</td>
              </tr>
            <tr>
              <td height="19">&nbsp;</td>
              <td>Instruction: </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="19">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
  </tr>
            <tr>
              <td height="19">&nbsp;</td>
              <td>
              <form action="<?php echo $page2 ?>" method="post" name="form2" id="form2">
          <?php	

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	
  	mysql_select_db($db) or die ('Unable to connect to database');

	$query="SELECT count(*) FROM exam WHERE examPeriod='$period'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	$row=mysql_fetch_row($result);
	$total_records=$row[0];

		$query="SELECT exam.*,questions.*
				FROM exam INNER JOIN questions ON exam.examItemNo=questions.qzItemNo
				WHERE examPeriod='$period' order by qzTopic,qzQuestion ";
  		$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
		$ptr=0;
		$ctr=1;
		while ($row = mysql_fetch_object($result)){ 
			$qzItemNo=$row->qzItemNo;
			$qzQuestion=$row->qzQuestion;
			$qzOptA=$row->qzOptA;
			$qzOptB=$row->qzOptB;
			$qzOptC=$row->qzOptC;
			$qzOptD=$row->qzOptD;
			$qzOptE=$row->qzOptE;
			$examID=$row->examID;
		  ?>
              <table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top" ><?php echo $ctr; //echo $start + $records_per_page; ?>.</td>
                  <td colspan="3" ><pre><?php //echo $qzQuestion;
					echo htmlspecialchars($qzQuestion); //echo ltrim($qzQuestion) ?></pre></td>
                </tr>
    			<?php if ($row->qzImage<>""){ ?>
                <tr>
                  <td width="48" valign="top" >&nbsp;</td>
                  <td colspan="3" ><?php $pic='question/' . $row->qzImage; ?>
                  	<img src="<?php echo $pic ?>" /><br />
                  </td>
                </tr>
                <?php } ?>
                <tr>
                  <td >&nbsp;</td>
                  <td valign="top" width="19" >&nbsp;</td>
                  <td valign="top" width="24">&nbsp;</td>
                  <td width="655"  valign="baseline" >&nbsp;</td>
                </tr>
                <tr>
                  <td >&nbsp;</td>
                  <td valign="top" >
				  		<?php echo "<input name=answer[$ptr] type=radio value=A>"; ?>
                    </td>
                  <td valign="top" >A.</td>
                  <td colspan="-9" valign="baseline" ><pre><?php 
			 	 	echo htmlspecialchars($qzOptA); //echo $qzOptA; 
			  		?></pre></td>
                </tr>
                <?php if ($row->qzImgA<>""){ ?>
                <tr>
                  <td >&nbsp;</td>
                  <td valign="top" width="19" >&nbsp;</td>
                  <td valign="top" width="24" >&nbsp;</td>
                  <td width="655" valign="baseline" >
				  	<?php $picA='question/' . $row->qzImgA; ?>
                    <img src="<?php echo $picA ?>" /><br />
                    </td>
                </tr>
                <?php } ?>
                <tr>
                  <td >&nbsp;</td>
                  <td valign="top" width="19" >
				  		<?php echo "<input name=answer[$ptr] type=radio value=B>"; ?>
                    </td>
                  <td valign="top" width="24" >B.</td>
                  <td width="655"  valign="baseline" ><pre><?php 
			  		echo htmlspecialchars($qzOptB); // echo $qzOptB 
					?></pre></td>
               </tr>
               <?php if ($row->qzImgB<>""){ ?>
               <tr>
                  <td>&nbsp;</td>
                  <td width="19" valign="top">&nbsp;</td>
                  <td width="24" valign="top">&nbsp;</td>
                  <td width="655" valign="baseline" >   
                  <?php $picB='question/' . $row->qzImgB; ?>
                  	<img src="<?php echo $picB ?>" /><br />
				</td>
                </tr>
                <?php } ?>
                <tr>
                  <td>&nbsp;</td>
                  <td valign="top" width="19" >
				  		<?php echo "<input name=answer[$ptr] type=radio value=C>"; ?>
                    </td>
                  <td valign="top" width="24" >C.</td>
                  <td width="655"  valign="baseline" ><pre><?php 
			  		echo htmlspecialchars($qzOptC);
					?></pre></td>
                </tr>
               <?php if ($row->qzImgC<>""){ ?>
                <tr>
                  <td>&nbsp;</td>
                  <td width="19" valign="top">&nbsp;</td>
                  <td width="24" valign="top">&nbsp;</td>
                  <td width="655" valign="baseline" >   
                    <?php 
						$picC='question/' . $row->qzImgC;
						?><img src="<?php echo $picC ?>" /><br />
                  </td>
                </tr>
                 <?php } ?>
                 <tr>
                   <td>&nbsp;</td>
                   <td valign="top" width="19" >
				  		<?php echo "<input name=answer[$ptr] type=radio value=D>"; ?>
                    </td>
                   <td valign="top" width="24" >D.</td>
                   <td width="655"  valign="baseline" ><pre><?php 
			  		echo htmlspecialchars($qzOptD);
					?></pre></td>
                 </tr>
               <?php if ($row->qzImgD<>""){ ?>
                 <tr>
                  <td>&nbsp;</td>
                  <td width="19" valign="top">&nbsp;</td>
                  <td width="24" valign="top" >&nbsp;</td>
                  <td width="655" valign="baseline" >   
    				<?php $picD='question/' . $row->qzImgD;
					?><img src="<?php echo $picD ?>" /><br />
                   </td>
                 </tr>
                 <?php } ?>
                 <tr>
                   <td>&nbsp;</td>
                   <td valign="top" width="19" >
				  		<?php echo "<input name=answer[$ptr] type=radio value=E>"; ?>
                    </td>
                   <td valign="top" width="24" >E.</td>
                   <td width="655"  valign="baseline" ><?php 
			  		echo htmlspecialchars($qzOptE);
					?></td>
                 </tr>
               <?php if ($row->qzImgE<>""){ ?>
                 <tr>
                  <td>&nbsp;</td>
                  <td width="19" valign="top">&nbsp;</td>
                  <td width="24" valign="top">&nbsp;</td>
                  <td width="655" valign="baseline" >   
				   <?php $picE='question/' . $row->qzImgE;
					?><img src="<?php echo $picE ?>" /><br /></td>
                 </tr>
                 <?php } ?>
                 <tr>
                  <td>&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td colspan="-9" valign="baseline" >&nbsp;</td>
                </tr>
              </table>
              <br />
              <table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="37" ></td>
                  <td width="712">
                    <input type="hidden" name="totalItem" value="<?php echo $total_records ?>" />
                    <input type="hidden" name="qzItemNo[]" value="<?php echo $qzItemNo ?>" />
                    <input type="hidden" name="examID[]" value="<?php echo $examID; ?>" />
                    <input type="hidden" name="itemNo" value="<?php echo $ptr //$start + $records_per_page; ?>" />
					</td>
                </tr>
              </table>
          <?php
		  	$ptr++; $ctr++;
  		}//while
 	mysql_close($conn);
	?>
          <table width="730" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>&nbsp;</td>
              <td >&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td >&nbsp;</td>
              <td><input name="Submit" type="submit" id="Submit" value="Submit Exam" class="submit" /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="33">&nbsp;</td>
              <td width="307">&nbsp;</td>
              <td width="122">&nbsp;</td>
              <td width="268">&nbsp;</td>
            </tr>
          </table>
              </form>
               </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="19">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="19">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="26">&nbsp;</td>
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


function recAnswer_EXAM(){
//myExamTake.php
	$user=$_SESSION['user'];
	$period=$_SESSION['period'];
	$qzItemNo=$_POST['qzItemNo'];
	$examID=$_POST['examID'];
	$ans=$_POST['answer'];
	
	$totalItem=$_POST['totalItem'];
    $tPtr=$_POST['totalItem'];
	
	$ptr=0;
	//echo "appID=$user * per=$period * ItemNo=$qzItemNo * examID=$examID * ans=$ans * key=$key * total=$totalItem * findAns=$findAns";
   // echo "appID=$user * per=$period * total=$totalItem<br><br>";

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	while ($ptr<$tPtr){
		//echo "ItemNo=$qzItemNo[$ptr] * examID=$examID[$ptr] * ans=$ans[$ptr] * key=$key[$ptr]  * findAns=$findAn[$ptr]<br>";

		$query2="select qzAnswer from questions where qzItemNo='$qzItemNo[$ptr]'";
  		$result2 = mysql_query($query2) or die ("Error in query : $query2. " . mysql_error());
		$row2=mysql_fetch_row($result2);
		$key=$row2[0];
		$remarks="W";
		if ($key==$ans[$ptr]){
			$remarks="C";
		}

		$query3="INSERT INTO answer (ansAppNo,ansPeriod,ansExamID,ansQzItemNo,ansAns,ansRem) 
			VALUES ('$user','$period','$examID[$ptr]','$qzItemNo[$ptr]','$ans[$ptr]','$remarks')";
		//echo "query = $query3<br>";
		$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());

  		$ptr=$ptr+1;
	}

	$query4="select count(*) from answer where ansAppNo='$user' and ansPeriod='$period' and ansRem='C'";
  	$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
	$row4=mysql_fetch_row($result4);
	$score=$row4[0];
	//echo "<br><br>$score";
	
  	$query="UPDATE applicant SET smExamScore='$score',  		
			smExamTItem='$totalItem',smExamTaken='Yes',smExamDateFns=now()    
			WHERE smAppNo='$user' and smAppSem='$period'";
  	//echo "<br>$query";
	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());

  mysql_close($conn);
}

function chkRecorded(){

	$user=$_SESSION['user'];
	$period=$_SESSION['period'];

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');
	$query="select * from applicant WHERE smAppNo='$user' and smAppSem='$period' and smExamTaken='Yes'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	$meron=mysql_num_rows($result);
  	if ($meron == 1 ){
		return 1;
	}else{
		return 0;
	}

}

?>  