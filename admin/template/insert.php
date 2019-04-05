<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "eems");
if(isset($_POST["question"]))
{
 $question = $_POST["question"];
 $topic = $_POST["topic"];
 $query = '';
 for($count = 0; $count<count($question); $count++)
 {
  $question_clean = mysqli_real_escape_string($connect, $question[$count]);
  if($question_clean != '')
  {
   $query .= '
   INSERT INTO QUESTION(Q_QUESTION, ET_FK) 
   VALUES("'.$question_clean.'", "'.$topic.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
