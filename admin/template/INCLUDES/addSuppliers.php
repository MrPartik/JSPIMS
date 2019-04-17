<?php
      $connect = mysqli_connect('localhost','root','','jspims');

	  /* $SUP_N = $_POST['supname'];
	   $SUP_ADD = $_POST['supadd'];
	   $SUP_C = $_POST['supcont'];
	   $SUP_EM = $_POST['supmail'];

		$addsup = 
              "INSERT INTO r_supplier (`SUP_NAME`, `SUP_ADDRESS`, `SUP_CONTACT_NO`, `SUP_EMAIL`) VALUES ('$SUP_N', '$SUP_ADD', '$SUP_C', '$SUP_EM')";
        mysqli_query($connect,$addsup);

        $trye = $_POST['sku'];
        $date = $_POST['date'];
        $sname = $_POST['sname'];
	   $BRAND = $_POST['sbrand'];
	   $CON = $_POST['scon'];
	   $SUP = $_POST['sup'];
	   $SKID = $_POST['stockid'];
	   $QUA = $_POST['quan'];

         $AQ_DATE = $_POST['date'];
	   $SKU = $_POST['sku'];
	   $NAME = $_POST['sname'];
	   $BRAND = $_POST['sbrand'];
	   $CON = $_POST['scon'];
	   $UNIT = $_POST['sunit'];
	   $QUA = $_POST['quan'];
	   $SUP = $_POST['sup'];
	   $SKID = $_POST['stockid']; */

	   $SKU = $_POST['sku'];
	   $BATCH = $_POST['batch_id'];
	   $DATE = $_POST['currentdate'];
	   $MOD = $_POST['smodel'];
	   $QUA = $_POST['quan'];

	   //	$update = mysqli_query($connect,"UPDATE t_spare_stocks SET STOCK_QUANTITY = (STOCK_QUANTITY + $QUA) WHERE STOCK_ID = '$SKID' "); 

        $addsup = 
              "INSERT INTO try (`TRY`, `TRY1`, `TRY2`,`TRY3`, `TRY4`,`TRY5`) VALUES ('$SKU', '2019-04-11','NULL','NULL', 'NULL','NULL')";
        mysqli_query($connect,$addsup);

	   //	$update = mysqli_query($connect,"UPDATE t_spare_stocks SET STOCK_QUANTITY = (STOCK_QUANTITY + $QUA) WHERE STOCK_ID = '$SKID' "); 

		//$addstock = "INSERT INTO `t_spare_acquisition` (`AQ_DATE`,`ITEM_SKU`, `ITEM_NAME`, `ITEM_BRAND`, `ITEM_CONDITION`, `ITEM_UNIT`, `ITEM_QUANTITY`, `SUPPLIER`) VALUES ('$AQ_DATE', '$SKU', '$NAME', '$BRAND', '$CON', $UNIT, $QUA, '$SUP')";
		//"INSERT INTO `t_spare_acquisition` (`AQ_DATE`, `AQ_MODE`, `ITEM_SKU`, `ITEM_NAME`, `ITEM_BRAND`, `ITEM_CONDITION`, `ITEM_UNIT`, `ITEM_QUANTITY`, `SUPPLIER`) VALUES ('$AQ_DATE', NULL, '$SKU', NULL, NULL, NULL, NULL, NULL, NULL)";
		//mysql_query($connect, $addstock);

     header('Location: ../addAcquiredStock.php');
?>