<?php
include('ems_ann.php');
disable_cache();



//########################  MAIN ##########################
session_start();
$page = "applyAdm.php";
//$user=$_GET['apply'];
$user=$_GET['apply'];
if (!isset($user)){
  header("Location:applyEntry.php");
}else{
  main_form_ADMISSION();
}

?>
