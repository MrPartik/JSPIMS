<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "eems");
$output = '';
//if(isset($_POST["topic2"]))
//{
 $topic2 = $_POST["topic2"];
//}
$query = "SELECT B.Q_QUESTION AS TANONG, B.Q_ID AS ID , A.ET_NAME as ETNAME FROM EXAM_TOPIC AS A INNER JOIN QUESTION AS B ON B.ET_FK = A.ET_ID WHERE A.ET_ID ='$topic2'";
$results = mysqli_query($connect, $query);
while($rows = mysqli_fetch_assoc($results))
{
	$topic = $rows["ETNAME"];
 }
$output = '
<br />
<h3 align="center">Questions for <span class="text-warning">'.$topic.'</span></h3>
<table  class="table table-striped table-bordered" id="data-table-responsive">
 <tr>
  <th width="5%">#</th>
  <th width="30%">Question</th>
  <th width="5%">Action</th>
 </tr>
';
$a=1;

$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_assoc($result))
{
 $output .= '
 <tr>
 <td>'.$a.'</td>
  <td>'.$row["TANONG"].'</td>
  <td><center>
                                               <button data-toggle="modal" class="btn btn-primary" href="#modal-dialog'.$row["ID"].'"><i class="fa fa-plus"></i></button>
                                               
                                           </center></td>
 </tr>
	 <div class="modal fade" id="modal-dialog'.$row["ID"].'">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Add Choices</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											</div>
											<div class="modal-body">
												<form class="form-inline" action="/" method="POST">
												<div class="form-group row m-b-15">
														<label class="col-md-3 col-form-label text-md-right">Question:</label>
														<div class="col-md-9">
															<input style="height:100px;" disabled type="textarea" class="form-control m-b-5" value="'.$row["TANONG"].'"/>
															<input style="height:100px;" disabled type="hidden" class="form-control m-b-5" id="tanong" name="tanong" value="'.$topic2.'"/>
														</div>
												</div>
												<div class="form-group row m-b-15">
														<label class="col-md-3 col-form-label text-md-right">Choice A:</label>
														<div class="col-md-9">
															<input type="textarea" class="form-control m-b-5" id="choicea" name="choicea"/>
														</div>
												</div>
												
												<div class="form-group row m-b-15">
														<label class="col-md-3 col-form-label text-md-right">Choice C:</label>
														<div class="col-md-9">
															<input type="textarea" class="form-control m-b-5" id="choiceb" name="choiceb"/>
														</div>
												</div>
												<div class="form-group row m-b-15">
														<label class="col-md-3 col-form-label text-md-right">Choice D:</label>
														<div class="col-md-9">
															<input type="textarea" class="form-control m-b-5" id="choicec" name="choicec"/>
														</div>
												</div>
												<div class="form-group row m-b-15">
														<label class="col-md-3 col-form-label text-md-right">Choice B:</label>
														<div class="col-md-9">
															<input type="textarea" class="form-control m-b-5" id="choiced" name="choiced"/>
														</div>
												</div>
												<div class="form-group row m-b-10 m-l-40">
				                                    <label class="col-md-3 col-form-label">Set correct answer</label>
				                                    <div class="col-md-9">
				                                    	<div class="col-md-6">
				                                    	<div class="radio radio-css radio-inline">
				                                            <input type="radio" name="radio_css_inline" id="option1" value="option1" checked />
															<label for="option1">Option A</label>
														</div>
														</div>
														<div class="col-md-6">
				                                    	<div class="radio radio-css radio-inline">
				                                            <input type="radio" name="radio_css_inline" id="option2" value="option2" />
				                                            <label for="option2">Option B</label>
				                                        </div>
				                                        </div>
				                                        <div class="col-md-6">
				                                        <div class="radio radio-css radio-inline">
				                                            <input type="radio" name="radio_css_inline" id="option3" value="option3" />
				                                            <label for="option3">Option C</label>
				                                        </div>
				                                        </div>
				                                        <div class="col-md-6">
				                                        <div class="radio radio-css radio-inline">
				                                            <input type="radio" name="radio_css_inline" id="option4" value="option4" />
				                                            <label for="option4">Option D</label>
				                                        </div>
				                                        </div>

				                                    </div>
				                                </div>

													</form>
											</div>
											<div class="modal-footer">
												<button href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
												<button id="submitchoice" href="javascript:;" class="btn btn-success">Submit</a>
											</div>
										</div>
									</div>
								</div>
								<script type="text/javascript">
						        $("#submitchoice").click(function(e){
						            e.preventDefault();
						          //alert("clicked");
						            var choicea = document.getElementById("choicea").value;
						            var choiceb = document.getElementById("choiceb").value;
						            var choicec = document.getElementById("choicec").value;
						            var choiced = document.getElementById("choiced").value; 
						            var tanong = document.getElementById("tanong").value; 
						            var al = $("#option1").is(":checked");
						            var bl = $("#option2").is(":checked");
						            var cl = $("#option3").is(":checked");
						            var dl = $("#option4").is(":checked");


						            if (al == true){
						            	al = 1;
						            	bl = 0;
						            	cl = 0;
						            	dl = 0;
						            }
						            else if (bl == true){
						            	al = 0;
						            	bl = 1;
						            	cl = 0;
						            	dl = 0;
						            }
						            else if (cl == true){
						            	al = 0;
						            	bl = 0;
						            	cl = 1;
						            	dl = 0;
						            }
						            else if (dl == true){
						            	al = 0;
						            	bl = 0;
						            	cl = 0;
						            	dl = 1;
						            }
						            /*
						            alert(al);
						            alert(bl);
						            alert(cl);
						            alert(dl);
						            alert(choicea);
						            alert(choiceb);
						            alert(choicec);
						            alert(choiced);

						            alert(tanong);
						            */
						            	
						                swal({
						                        title: "You agreed to the terms and conditions. Would you like to proceed?",
						                        text: "Application will be submitted.",
						                        type: "warning",
						                        showCancelButton: true,
						                        confirmButtonColor: "#b05544",
						                        confirmButtonText: "Yes",
						                        cancelButtonText: "No",
						                        closeOnConfirm: false,
						                        closeOnCancel: false

						                },
						                function(isConfirm){
						                    if (isConfirm) {
						                    	 

						                      
						                       $.ajax({
						                                    type: "POST",
						                                    url: "INCLUDES/addChoice.php",
						                                    async: false,
						                                    data: {
						                                        option1: al,
						                                        option2: bl,
						                                        option3: cl,
						                                        option4: dl,
						                                        choicea: choicea,
						                                        choiceb: choiceb,
						                                        choicec: choicec,
						                                        choiced: choiced,
						                                        tanong: tanong
						                                    },
						                                    success: function(data) {
						                                        

						                                        swal("Application is submitted! ", "You may now access your account.", "success");
						                                        
						                                        setTimeout(function() 
						                                        {
						                                            $("div[id=modal-dialog"+tanong+"]").modal("hide");

						                                        },3000);
						                                        

						                                    },
						                                    error: function(data) {
						                                       
						                                        swal("Error", "Something is wrong.", "error");
						                                    }

						                                }); 

						                        
						                            	
						   		 			
						                    

						                    } 
						                    else
						                    {
						                        swal("Cancelled", "Account is not created.", "error");
						                    }
						                });
						                
						             
						        });
						            </script>
						            										

';
 $a +=1;
}
$output .= '</table>';
//echo $topic2;
echo $output;
?>

<!-- 

												<div class="table-responsive">
												   <table class="table table-striped table-bordered" id="crud_table">
												     <tr>
													      <th width="5%">#</th>
													      <th width="30%">Question</th>
													      <th width="5%">Action</th>
												     </tr>
												     <tr>
													      <td contenteditable="true" class="num">1</td>
													      <td contenteditable="true" class="question"></td>
													      <td><button type="button" name="add" id="add" class="btn btn-success btn-xs"><i class="fas fa-plus"></i></button></td>
												     </tr>
												   </table>
												    <div align="right">
												     <button type="button" name="save" id="save" class="btn btn-info">Save questions</button>
												    </div>
												    <br />
												    
												</div>










	
														<div class="form-group m-r-10">
															<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" />
														</div>
														<div class="form-group m-r-10">
															<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" />
														</div>
														<div class="form-check m-r-10">
															<input class="form-check-input" id="inline_form_checkbox" type="checkbox" />
															<label class="form-check-label" for="inline_form_checkbox">Remember me</label>
														</div>
														<button type="submit" class="btn btn-sm btn-primary m-r-5">Sign in</button>
														<button type="submit" class="btn btn-sm btn-default">Register</button>

-->
														