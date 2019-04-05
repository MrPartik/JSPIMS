<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "eems");
$output = '';
$query = "SELECT * FROM EXAM_TOPIC ORDER BY ET_ID DESC";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h4 align="center"><span class="text-warning">Available Topics</span></h4>
<table class="table table-bordered table-striped">
 <tr align="center">
  <th width="30%">Topic</th>
  <th width="10%">Check to add</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["ET_NAME"].'</td>
  <td><center><input class="chk" type="checkbox" id="'.$row["ET_ID"].'" value="'.$row["ET_ID"].'"/></center></td>
 </tr>
 ';
}
$output .= '</table> <button type="button" name="save" id="save" class="btn btn-info">Create exam</button>
								    </div>

<script>
$(document).ready(function(){

 
 $("#save").click(function(){ 

  var myCheckboxes = [];
$(".chk:checked").each(function() {
   myCheckboxes.push($(this).val());
});
swal({
                        title: "Save new question/s?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#b05544",
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                        closeOnConfirm: false,
                        closeOnCancel: false

                },function(isConfirm){
                    if (isConfirm) {

				  $.ajax({
				   url:"insert2.php",
				   method:"POST",
				   data:{myCheckboxes:myCheckboxes},
				   success:function(data){
				    //alert(data);
				    swal("Question/s added tp exam! ", "Page will be reloaded.", "success");
				    
				    window.location = "adminExam.php";
				    //alert(myCheckboxes);
				   },
				   error: function(data) {
				                                       
				    swal("Error", "Something is wrong.", "error");
				}
				  });//end ajax
				 }
				else
				{
				    swal("Cancelled", "Questions are not added.", "error");
				}

				});
  					 
});

});

</script>';
echo $output;
?>