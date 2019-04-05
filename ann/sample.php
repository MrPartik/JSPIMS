<?php

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

$sex="Male";
$user='2017-00007';
$period='1-2019-2020';

include('conf.php');
$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
mysql_select_db($db) or die ('Unable to connect to database');

$query2="SELECT * FROM topics order by tpID";
$result2 = mysql_query($query2) or die ("Error in query : $query2. " . mysql_error());
while ($row2 = mysql_fetch_object($result2)){ 
	$tpID=$row2->tpID;
	$query4="select count(*) FROM answer INNER JOIN questions ON answer.ansQzItemNo = questions.qzItemNo
			WHERE ansAppNo='$user' and ansPeriod='$period' and ansRem='C' and qzTopic='$tpID'";
  	$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
	$row4=mysql_fetch_row($result4);
	$score=$row4[0];

	$equiv=equivalent($tpID,$sex,$score);
	
	echo "<br>$tpID - $score - $equiv[0] - $equiv[1] - $equiv[2]";
	
}

?>


