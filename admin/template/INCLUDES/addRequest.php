<?php
			    


      $connect = mysqli_connect('localhost','root','','jspims');
  				
	   $batch_id = $_POST['batch_id'];
	   $Date = $_POST['currentdate'];

		$reqins = "INSERT INTO t_spare_requisition_summary
             	    	(BATCH_NO, DATE_REQUESTED)     
                   VALUES ('$batch_id','$Date')";
              
        mysqli_query($connect,$reqins);

?>


<?php  

    $user = 'root';
    $pass = '';
    $database = 'jspims';

    try 
    {
        $con = new PDO('mysql:host=localhost;dbname='.$database, $user, $pass);
    } 
    catch (PDOException $e) 
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    } 

    $stmt = $con->prepare("INSERT INTO t_spare_requisition(STOCK_NAME, STOCK_MODEL, STOCK_SIZE, STOCK_BRAND, STOCK_UNIT_TYPE, QUANTITY, STATUS, BATCH_NO) VALUES (?, ?, ?, ?, ?, ?, 'PENDING', ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $model);
    $stmt->bindParam(3, $size);
    $stmt->bindParam(4, $brand);
    $stmt->bindParam(5, $unit);
    $stmt->bindParam(6, $quan);
    $stmt->bindParam(7, $batch);


    $arr = $_POST; 
    for($i = 0; $i <= count($arr['r_name'])-1;$i++)
    {
        $name = $arr['r_name'][$i];
        $model = $arr['r_model'][$i];
        $size = $arr['r_size'][$i];
        $brand = $arr['r_brand'][$i];
        $unit = $arr['r_unit'][$i]; 
        $quan = $arr['r_quantity'][$i]; 
        $batch = $arr['batch_id'];  
        $stmt->execute();

    }

     header('Location: ../pendingRequests.php');

?>