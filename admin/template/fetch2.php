<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "eems");
$output = '';
$query = "SELECT * FROM EXAM";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h4><span class="text-warning">INSTRUCTIONS:</span><small>  Click the button of the desired answer.</small></h4>

';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 	<input type="text" value="'.$row["EXAM_ID"].'"/>
 ';
}
$output .= '
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