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

function selTime(){
  $time = array(
  				"07:00 AM","07:30 AM","08:00 AM","08:30 AM","09:00 AM","09:30 AM",
  				"10:00 AM","10:30 AM","11:00 AM","11:30 AM","12:00 PM","12:30 PM",
				"01:00 PM","01:30 PM","02:00 PM","02:30 PM","03:00 PM","03:30 PM",
				"04:00 PM","04:30 PM","05:00 PM","05:30 PM","06:00 PM","06:30 PM",
				"07:00 PM","07:30 PM","08:00 PM","08:30 PM","09:00 PM","09:30 PM",
				"10:00 PM");
   return $time;
}




//########################  MAIN ##########################
session_start();
$page = "exmSched.php";
$page2 = "exmSchedAdd.php";
$user=$_SESSION['user'];
$ar=$_SESSION['rights'];
$subMenu="exmMenu";
$mainMenu="exmMainMenu";
$pageName="Create Exam Schedule";

if (!isset($user)){
  header("Location:appSearch.php");
}else{
  include('msg.php');
  $acc=getAccess($page);
  if ($acc==1){
	if (!$_POST['Submit'])  {
		main_form_EXAMSCHED($subMenu,$mainMenu);
	}else{
		$err=validate_EXAMSCHED();
		if ($err==1){
			main_form_EXAMSCHED($subMenu,$mainMenu);
		}else{
			process_add_EXAMSCHED();
			$success="Confirm Addition of Exam Schedule";
			msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
		}
	}
  }else{
  		$error="Your not allowed to access this page!";
		msg_Exam($success,$error,$page,$subMenu,$mainMenu,$pageName);
  }
}


?>