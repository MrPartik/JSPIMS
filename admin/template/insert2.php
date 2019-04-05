<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "eems");
if(isset($_POST["myCheckboxes"]))
{
 $myCheckboxes = $_POST["myCheckboxes"];
 $query = '';
 for($count = 0; $count<count($myCheckboxes); $count++)
 {
  $myCheckboxes_clean = mysqli_real_escape_string($connect, $myCheckboxes[$count]);
  if($myCheckboxes_clean != '')
  {
   $query .= '
   INSERT INTO EXAM_AND_TOPIC(EXAM_FK,ET_FK) 
   VALUES(1, "'.$myCheckboxes_clean.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo '"INSERT INTO EXAM_AND_TOPIC(EXAM_FK,ET_FK) 
   VALUES(1, "'.$myCheckboxes_clean.'")"';
  }
  else
  {
   echo '"INSERT INTO EXAM_AND_TOPIC(EXAM_FK,ET_FK) 
   VALUES(1, "'.$myCheckboxes_clean.'")"';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
