<?php

function viewResult_EXAM(){
	$user=$_SESSION['user'];
	$period=$_SESSION['period'];
	
	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

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
              <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>Result: <strong><?php echo $score ?></strong> of <strong><?php echo $totalItem; ?></strong> 
                    Percentage <strong><?php $percent=($score/$totalItem)*100; echo round($percent); ?>%</strong></td>
                  </tr>
              </table></td>
              </tr>
            <tr>
              <td width="561">&nbsp;</td>
              </tr>
            <tr>
              <td><table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr >
                  <td width="35" height="26" align="center" bgcolor="#CCCCCC"><span class="text">Item No.</span></td>
                  <td width="60" align="center" bgcolor="#CCCCCC" ><span class="text">Answer</span></td>
                  <td width="56" align="center" bgcolor="#CCCCCC" ><span class="text">Correct Answer</span></td>
                  <td colspan="2" align="left" bgcolor="#CCCCCC"><span class="text">Questions</span></td>
                  </tr>
                <?php
	$ptr=1;
	while ($row = mysql_fetch_object($result)){ 
		$key=$row->qzAnswer;
		$ans=$row->ansAns;
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
                  </tr>
                <tr>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td width="21" valign="top" >a.</td>
                  <td width="378" ><span class="text"><?php echo $row->qzOptA; ?></span></td>
                  </tr>
                <tr>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td >&nbsp;</td>
                  <td valign="top" >b. </td>
                  <td ><span class="text"><?php echo $row->qzOptB; ?></span></td>
                  </tr>
                <tr>
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td >&nbsp;</td>
                  <td valign="top" >c.</td>
                  <td ><span class="text"><?php echo $row->qzOptC; ?></span></td>
                  </tr>
                <tr >
                  <td align="center" >&nbsp;</td>
                  <td align="center" >&nbsp;</td>
                  <td >&nbsp;</td>
                  <td valign="top">d.</td>
                  <td ><span class="text"><?php echo $row->qzOptD; ?></span></td>
                  </tr>
                <tr >
                  <td id="nav2" align="center" >&nbsp;</td>
                  <td id="nav2" align="center" >&nbsp;</td>
                  <td id="nav2" >&nbsp;</td>
                  <td valign="top" id="nav2" >e</td>
                  <td id="nav2" ><span class="text"><?php echo $row->qzOptE; ?></span></td>
                  </tr>
                <?php
		$ptr=$ptr+1;
	}
	$ptr=$ptr-1;
	
	$query4="select count(*) from answer where ansAppNo='$user' and ansPeriod='$period' and ansRem='C'";
  	$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
	$row4=mysql_fetch_row($result4);
	$score=$row4[0];

	$query="UPDATE applicant SET smExamScore='$score',  		
		smExamTaken='Yes',smExamDateFns=now()  
		WHERE smAppNo='$user' and smAppSem='$period'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
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
          <td class="content-home"><h3>Take Exam Now!</h3>
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
          <?php	
	$records_per_page=1;

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	
	(!$_GET['start']) ? $start =0 : $start = $_GET['start'];
  	mysql_select_db($db) or die ('Unable to connect to database');

	$query="SELECT count(*) FROM exam WHERE examPeriod='$period'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	$row=mysql_fetch_row($result);
	$total_records=$row[0];

	if (($total_records > 0) && ($start < $total_records)){

		$query="SELECT exam.*,questions.*
				FROM exam INNER JOIN questions ON exam.examItemNo=questions.qzItemNo
				WHERE examPeriod='$period' order by qzTopic,qzQuestion LIMIT $start, $records_per_page ";
  		$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());

		while ($row = mysql_fetch_object($result)){ 
			//$key=$row->qzAnswer;
			$qzItemNo=$row->qzItemNo;
			$qzQuestion=$row->qzQuestion;
			$qzOptA=$row->qzOptA;
			$qzOptB=$row->qzOptB;
			$qzOptC=$row->qzOptC;
			$qzOptD=$row->qzOptD;
			$qzOptE=$row->qzOptE;
			$examID=$row->examID;

			$findAns=0;
			$query2="select * from answer where ansAppNo='$user' and ansPeriod='$period' and 
					ansQzItemNo='$qzItemNo' and ansExamID='$examID'";
  			$result2 = mysql_query($query2) or die ("Error in query : $query2. " . mysql_error());
			$findAns=mysql_num_rows($result2);
  			if ($findAns == 1 ){
				$row2 = mysql_fetch_array($result2);
    			$ans=$row2['ansAns'];
			}
		  ?>
              <form action="<?php echo $page2 ?>" method="post" name="form2" id="form2">
              <table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top" ><?php echo $start + $records_per_page; ?>.</td>
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
                  <td valign="top" ><?php 
					  if ($findAns == 1){
						if ($ans=='A'){
							echo "<input name=answer type=radio value=A checked=checked disabled=disabled>"; 
						}else{
							echo "<input name=answer type=radio disabled=disabled>"; 
						}
					  }else{
						echo "<input name=answer type=radio value=A>"; 
					  }?></td>
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
                  <td valign="top" width="19" ><?php 
					if ($findAns == 1){
						if ($ans=='B'){
							echo "<input name=answer type=radio value=B checked=checked disabled=disabled>"; 
						}else{
							echo "<input name=answer type=radio disabled=disabled>"; 
						}
					}else{
						echo "<input name=answer type=radio value=B>"; 
					}
					?></td>
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
                  <td valign="top" width="19" ><?php 
					if ($findAns == 1){
						if ($ans=='C'){
							echo "<input name=answer type=radio value=C checked=checked disabled=disabled>"; 
						}else{
							echo "<input name=answer type=radio disabled=disabled>"; 
						}
					}else{
						echo "<input name=answer type=radio value=C>"; 
					}
					?></td>
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
                   <td valign="top" width="19" ><?php 
					if ($findAns == 1){
						if ($ans=='D'){
							echo "<input name=answer type=radio value=D checked=checked disabled=disabled>"; 
						}else{
							echo "<input name=answer type=radio disabled=disabled>"; 
						}
					}else{
						echo "<input name=answer type=radio value=D>"; 
					}
					?></td>
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
                   <td valign="top" width="19" ><?php 
					if ($findAns == 1){
						if ($ans=='E'){
							echo "<input name=answer type=radio value=E checked=checked disabled=disabled>"; 
						}else{
							echo "<input name=answer type=radio disabled=disabled>"; 
						}
					}else{
						echo "<input name=answer type=radio value=E>"; 
					}
					?></td>
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
                  <td width="712"><input type="hidden" name="keyAnswer" value="<?php //echo $key ?>" />
                    <input type="hidden" name="totalItem" value="<?php echo $total_records ?>" />
                    <input type="hidden" name="qzItemNo" value="<?php echo $qzItemNo ?>" />
                    <input type="hidden" name="examID" value="<?php echo $examID; ?>" />
                    <input type="hidden" name="itemNo" value="<?php echo $start + $records_per_page; ?>" />
                    <?php 
					if ($findAns == 1){ ?>
                    <input name="Submit" type="submit" id="Submit" value="Submit Answer" disabled="disabled" class="submit" />
                    <?php
					}else{		?>
                    <input name="Submit" type="submit" id="Submit" value="Submit Answer" class="submit" />
                    <?php
					}
					?></td>
                </tr>
              </table>
              </form>
          <?php
  		}//while
	}//if-else
 	mysql_close($conn);
	?>
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
              <td>
              
              <table width="730" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                  <td >Do NOT use <strong>BACK</strong> and <strong>FORWARD</strong> button in the browser. </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td ><?php 
			  if ($start >= $records_per_page){
			 	echo "<a href=" . $page . "?start=" . ($start - $records_per_page) . "&&sjCode=" . $_GET['sjCode'] . 
					"&&examNo=" . $_GET['examNo'] . "&&ccn=" . $_GET['ccn'] . ">Previous</a>";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			  }
				if ($start + $records_per_page < $total_records && $start >=0){
				echo "<a href=" . $page . "?start=" . ($start + $records_per_page) . "&&sjCode=" . $_GET['sjCode'] . 
					"&&examNo=" . $_GET['examNo'] . "&&ccn=" . $_GET['ccn'] . ">Next</a>";
			  } ?></td>
                  <td><form action="<?php echo $page2 ?>" method="post" name="form1" id="form1">
                    <input name="Final" type="submit" id="submit" value="Finished" class="submit" />
                  </form></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="37">&nbsp;</td>
                  <td width="491">&nbsp;</td>
                  <td width="101">&nbsp;</td>
                  <td width="152">&nbsp;</td>
                </tr>
              </table></td>
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

	include('conf.php');
	$conn=mysql_connect($host,$cuser,$cpass) or die ('Unable to connect');
	mysql_select_db($db) or die ('Unable to connect to database');

	$query="select * from answer where ansAppNo='$user' and ansPeriod='$period' and 
		ansQzItemNo='$qzItemNo' and ansExamID='$examID'";
  	$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
  	$findAns=mysql_num_rows($result);

	$query2="select qzAnswer from questions where qzItemNo='$qzItemNo'";
  	$result2 = mysql_query($query2) or die ("Error in query : $query2. " . mysql_error());
	$row2=mysql_fetch_row($result2);
	$key=$row2[0];

	//echo "appID=$user * per=$period * ItemNo=$qzItemNo * examID=$examID * ans=$ans * key=$key * total=$totalItem * findAns=$findAns";
  	if ($findAns == 0 ){
		$remarks="W";
		if ($key==$ans){
			$remarks="C";
		}

		$query3="INSERT INTO answer (ansAppNo,ansPeriod,ansExamID,ansQzItemNo,ansAns,ansRem) 
			VALUES ('$user','$period','$examID','$qzItemNo','$ans','$remarks')";
		$result3 = mysql_query($query3) or die ("Error in query : $query3. " . mysql_error());
	
		$query4="select count(*) from answer where ansAppNo='$user' and ansPeriod='$period' and ansRem='C'";
  		$result4 = mysql_query($query4) or die ("Error in query : $query4. " . mysql_error());
		$row4=mysql_fetch_row($result4);
		$score=$row4[0];

  		/*FINISH
		$query="UPDATE applicant SET smExamScore='$score',  		
			smExamTItem='$totalItem',smExamTaken='Yes',smExamDateFns=now()  
			WHERE smAppNo='$user' and smAppSem='$period'";*/

  		$query="UPDATE applicant SET smExamScore='$score',  		
			smExamTItem='$totalItem'  
			WHERE smAppNo='$user' and smAppSem='$period'";
  		$result = mysql_query($query) or die ("Error in query : $query. " . mysql_error());
	}
  mysql_close($conn);
}

//########################  MAIN ##########################
session_start();
$page = "applyEntry.php";
include('ems_ann.php');
include('msg_web.php');
    if ($_POST['Final']) {
		viewResult_EXAM();
	}
	else{
		if ($_POST['Submit']){
		   recAnswer_EXAM();
 	       loadquestion_EXAM();
		}else{
	 	   loadquestion_EXAM();
		}
	}
?>