<?php
//################################################################################################
//  Project Name				: Licensure Examination for teacher Automated Network-System (LEARN)
//	Program/Filr Name			: logout.php	
//	Description of the Program	: LEARN uses PHP and MySQL.
//  Date Created				: May 2016
//	Programmed by 				: Ma. Emmie T. Delluza,BSCoE,DPA,MIS
// 	Copyright Notice 			: Copyright (C) 2016 by the Emsdell Ltd.
//	License						: This program is intended for the Catanduanes State University for the
//								  dissertation of Gemma G. Acedo. 
//								  Unauthorized copy  of the source code or any section is PROHIBITED
//##################################################################################################

header('Cache-Control: no-cache');
header('Pragma: no-cache');

session_start();
$userID=$_SESSION['user'];
include('conf.php');

$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
mysql_select_db($db) or die ('Unable to connect to database');

$query="UPDATE login SET logout=now(),Active='N' WHERE userID='$userID' && Active='Y' && logout='0000-00-00 00:00:00'";
$result = mysql_query($query);
session_unset();
session_destroy();
header("Location:home.html");
?>

