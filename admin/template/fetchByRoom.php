<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "eems");
$output = '';
$prog = $_POST["prog"];
if(!isset($_POST['prog'])){
	$query = "SELECT *, IF (A.exam_taken = 0,'No', 'Yes') AS userstatus FROM APPLICANT AS A INNER JOIN ACADYR AS B ON A.ACADYR_FK = B.ACADYR INNER JOIN ACC AS C ON A.ACC_FK = C.ACCID INNER JOIN SCHED AS D ON A.SCHED_FK = D.SCHED_ID INNER JOIN ROOM AS E ON D.ROOM_FK = E.ROOM_ID ORDER BY A.APP_ID DESC";
		}
else{
	$query ="SELECT *, IF (A.exam_taken = 0,'No', 'Yes') AS userstatus FROM APPLICANT AS A INNER JOIN ACADYR AS B ON A.ACADYR_FK = B.ACADYR INNER JOIN ACC AS C ON A.ACC_FK = C.ACCID INNER JOIN SCHED AS D ON A.SCHED_FK = D.SCHED_ID INNER JOIN ROOM AS E ON D.ROOM_FK = E.ROOM_ID where E.ROOM_ID = '$prog' ORDER BY A.APP_ID DESC";
}
$query2="SELECT ROOM_NAME AS NAME FROM ROOM WHERE ROOM_ID = '$prog'";
$result = mysqli_query($connect, $query);
$results = mysqli_query($connect, $query2);
$numrow =mysqli_num_rows($result);
while($rows = mysqli_fetch_array($results))
{
			$program = $rows['NAME'];
}
 
//echo $numrow;
$output = '
<br />
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
<h3 align="center">List of Applicants by <span class="text-warning">'.$program.'</span></h3>
<table id="data-table-buttons" class="table table-striped table-bordered">                     	
    <thead>
        <tr>
            <th class="text-nowrap">Applicant Number</th>
            <th class="text-nowrap">Name</th>
            <th class="text-nowrap">Application Period</th>
            <th class="text-nowrap">Sched Exam number</th>
            <th class="text-nowrap">Exam Taken</th>
            <th class="text-nowrap">Last Update</th>
            <th class="text-nowrap">Action</th>
        </tr>
    </thead>
    <tbody>
';
while($row = mysqli_fetch_array($result))
{
			$ID = $row['APP_ID'];
		    $fname = $row['APP_FNAME'];
		    $lname = $row['APP_LNAME'];
		    $mname = $row['APP_MNAME'];
		    $acad = $row['ACADYR_NAME'];
		    $exam = $row['exam_taken'];
		    $appno = $row['ACCUSERNAME'];
		    $status = $row['userstatus'];
		    $lastup = $row['submitted_at'];

		    if($numrow > 0){
							 $output .= '
							 	<tr class="odd gradeX">
							       <td>'.$appno.'</td>
							       <td>'.$lname. ','. $mname.' ' .$fname.'</td>
							       <td>'.$acad.'</td>
							       <td>'.$ID.'</td>
							       <td>'.$status.'</td>
							       <td>'.$lastup.'</td>
							       <td>
								       <center>
								            <a class="btn btn-warning" href="INCLUDES/appprofile.php?this='.$ID.'" ><i class="fa fa-eye"></i></a>
								        </center>
							    	</td>
							    </tr>
							 ';
			}
			
}
if ($numrow <= 0){ 
							$output .= '
						 	<tr class="odd gradeX">
						       <td colspan="7" align="center">No data available.</td>
						    </tr>
						 ';}
$output .= '</tbody></table>';
echo $output;

echo'
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/js/demo/table-manage-buttons.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
			TableManageButtons.init();
		});
	</script>';
?>