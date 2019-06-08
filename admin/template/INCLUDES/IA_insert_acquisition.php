<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "jspims");
if(isset($_POST["item_name"]))
{
 $item_name = $_POST["item_name"];
 $item_quan = $_POST["item_quan"];
 $item_supplier = $_POST["item_supplier"];
 //$item_batch = $_POST["item_batch"];
 $item_date = $_POST["item_date"];
 $item_brand = $_POST["item_brand"];
 $item_condition = $_POST["item_condition"];
 $item_model = $_POST["item_model"];
 $item_size = $_POST["item_size"];
 $item_unit = $_POST["item_unit"];
 $query = '';
  
 for($count = 0; $count<count($item_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connect, $item_name[$count]);
  $item_quan_clean = mysqli_real_escape_string($connect, $item_quan[$count]);
  $item_supplier_clean = mysqli_real_escape_string($connect, $item_supplier[$count]);
  //$item_batch_clean = mysqli_real_escape_string($connect, $item_batch[$count]);
  $item_date_clean = mysqli_real_escape_string($connect, $item_date[$count]);
  $item_brand_clean = mysqli_real_escape_string($connect, $item_brand[$count]);
  $item_condition_clean = mysqli_real_escape_string($connect, $item_condition[$count]);
  $item_model_clean = mysqli_real_escape_string($connect, $item_model[$count]);
  $item_size_clean = mysqli_real_escape_string($connect, $item_size[$count]);
  $item_unit_clean = mysqli_real_escape_string($connect, $item_unit[$count]);
  if($item_name_clean != '' && $item_quan_clean != '' && $item_supplier_clean != '' && $item_brand_clean != ''&& $item_condition_clean != ''&& $item_model_clean != ''&& $item_size_clean != '')
  {
   $batch_req = '
    INSERT INTO `t_spare_acquisition`(`AQ_DATE`, `ITEM_NAME`, `ITEM_BRAND`, `ITEM_CONDITION`, `ITEM_UNIT`, `ITEM_QUANTITY`, `SUPPLIER`) VALUES("'.$item_date_clean.'","'.$item_name_clean.'", "'.$item_brand_clean.'","'.$item_condition_clean.'","'.$item_unit_clean.'","'.$item_quan_clean.'","'.$item_supplier_clean.'") 
    ';
    if($batch_req != '')
   {
    if(mysqli_multi_query($connect, $batch_req))
    {
     echo "Success";
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
 }
 
 echo 'INSERT INTO `t_spare_acquisition`(`AQ_DATE`, `ITEM_NAME`, `ITEM_BRAND`, `ITEM_CONDITION`, `ITEM_UNIT`, `ITEM_QUANTITY`, `SUPPLIER`) VALUES("'.$item_date_clean.'","'.$item_name_clean.'", "'.$item_brand_clean.'","'.$item_condition_clean.'","'.$item_unit_clean.'","'.$item_quan_clean.'","'.$item_supplier_clean.'") ';
}
?>
