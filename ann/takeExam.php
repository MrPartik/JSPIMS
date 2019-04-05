<?php


//########################  MAIN ##########################
session_start();
$page = "applyEntry.php";
include('ems_ann.php');
include('msg_web.php');
if ($_POST['Submit']){
   $rec=chkRecorded();
   //echo $rec;
   if ($rec==0){
  		recAnswer_EXAM();
   		viewResult_EXAM();
   }else{
   		viewResult_EXAM();
   }
}else{
   loadquestion_EXAM();
}

?>