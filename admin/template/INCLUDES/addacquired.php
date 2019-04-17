<?php
      $connect = mysqli_connect('localhost','root','','jspims');

	   $AQ_DATE = $_POST['date'];
	   $SKU = $_POST['sku'];
	   $NAME = $_POST['sname'];
	   $BRAND = $_POST['sbrand'];
	   $CON = $_POST['scon'];
	   $UNIT = $_POST['sunit'];
	   $QUA = $_POST['quan'];
	   $SUP = $_POST['sup'];
	   $SKID = $_POST['stockid'];

	   	$update = mysqli_query($connect,"UPDATE t_spare_stocks SET STOCK_QUANTITY = (STOCK_QUANTITY + $QUA) WHERE STOCK_ID = '$SKID' "); 

		$addstock = "INSERT INTO t_spare_acquisition (`AQ_DATE`,`ITEM_SKU`, `ITEM_NAME`, `ITEM_BRAND`, `ITEM_CONDITION`, `ITEM_UNIT`, `ITEM_QUANTITY`, `SUPPLIER`) VALUES ('$AQ_DATE', '$SKU', '$NAME', '$BRAND', '$CON', $UNIT, $QUA, '$SUP')";
		//"INSERT INTO `t_spare_acquisition` (`AQ_DATE`, `AQ_MODE`, `ITEM_SKU`, `ITEM_NAME`, `ITEM_BRAND`, `ITEM_CONDITION`, `ITEM_UNIT`, `ITEM_QUANTITY`, `SUPPLIER`) VALUES ('$AQ_DATE', NULL, '$SKU', NULL, NULL, NULL, NULL, NULL, NULL)";
		mysqli_query($connect, $addstock);
?>