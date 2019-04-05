<?php
include('connect.php');
session_start();
$username = $_SESSION['username'];

if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: login.php');
    exit();
}

if( isset($_POST["logout"]))
{

	session_destroy();
	/*$transtype = $_POST['transtype'];
	$insert = "INSERT INTO `audit_trail`( `userid`, `transtype`, `transdatetime`) VALUES ($uid, '$transtype', CURRENT_TIMESTAMP)";
        $audittrail = mysqli_query($connect, $insert) or die("Bad query");
        echo $insert;
      */
    header('Location: login.php');

}

?>