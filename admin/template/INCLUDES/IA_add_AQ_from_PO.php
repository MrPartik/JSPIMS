<?php
$connect = mysqli_connect("localhost", "root", "", "jspims");

	$item_id = $_POST['item_id'];
	$purchase_no = $_POST['purchase_no'];
	$item_quan = $_POST["item_quan"];
	$update_req = '';

	$update_purchase = mysqli_query($connect,"UPDATE `t_spare_requisition_purchased` SET `PURCHASE_ACCEPT_STATUS` = '2', `DELIVERY_DATE` = CURRENT_DATE, `PURCHASE_STATUS` = '1' WHERE `t_spare_requisition_purchased`.`PURCHASE_ID` = '$purchase_no' ");

	$add_acquired = mysqli_query($connect,"INSERT INTO `t_spare_acquisition_from_purchased` (`REF_PO_ID`, `AQ_PO_DATE`) VALUES ('$purchase_no', CURRENT_DATE)");

	for($count = 0; $count<count($item_id); $count++)
	{
		$item_id_clean = mysqli_real_escape_string($connect, $item_id[$count]);
		$item_quan_clean = mysqli_real_escape_string($connect, $item_quan[$count]);

		if($item_id_clean != '' && $item_quan_clean != '')
		{
			$update_req .= '
			UPDATE `t_spare_stocks` SET `STOCK_QUANTITY` = `STOCK_QUANTITY` + "'.$item_quan_clean.'" WHERE `STOCK_ID` = "'.$item_id_clean.'" 
			';
		}
	}
if($update_req != '')
 {
  if(mysqli_multi_query($connect, $update_req))
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
?>