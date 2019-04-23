<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "jspims");
if(isset($_POST["item_name"]))
{
 $item_name = $_POST["item_name"];
 $item_quan = $_POST["item_quan"];
 $item_unit = $_POST["item_unit"];
 $item_supplier = $_POST["item_supplier"];
 $req = '';

 for($count = 0; $count<count($item_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connect, $item_name[$count]);
  $item_quan_clean = mysqli_real_escape_string($connect, $item_quan[$count]);
  $item_unit_clean = mysqli_real_escape_string($connect, $item_unit[$count]);
  $item_supplier_clean = mysqli_real_escape_string($connect, $item_supplier[$count]);
  if($item_name_clean != '' && $item_quan_clean != '' && $item_unit_clean != '' && $item_supplier_clean != '')
  {
        $req .= '
        INSERT INTO `t_spare_requisition` (`STOCK_NAME`, `STOCK_UNIT_TYPE`, `QUANTITY`, `BATCH_NO`) VALUES ("'.$item_name_clean.'", "'.$item_unit_clean.'", "'.$item_quan_clean.'","'.$item_quan_clean.'")
        ';
        mysqli_multi_query($connect, $query);
  }
 }
 
?>