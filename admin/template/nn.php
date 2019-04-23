<?php
$connect = mysqli_connect("localhost", "root", "", "jspims");

if(isset($_POST["item_id"]))
{
	$item_id = $_POST['item_id'];
	$item_quan = $_POST['item_quan'];

	for($count = 0; $count<count($item_id); $count++)
	{
		$item_id_clean = mysqli_real_escape_string($connect, $item_id[$count]);
		$item_quan_clean = mysqli_real_escape_string($connect, $item_quan[$count]);

		if($item_id_clean != '' && $item_quan_clean != '')
		{
			$update_req = '
			UPDATE `t_spare_stocks` SET `STOCK_QUANTITY` = `STOCK_QUANTITY` + "'.$item_quan_clean.'" WHERE `STOCK_ID` = "'.$item_id_clean.'" 
			';
		}
	}
	if($update_req != '')
	{
		if(mysqli_multi_query($connect, $update_req))
		{
			echo 'Success';
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
 }
?>