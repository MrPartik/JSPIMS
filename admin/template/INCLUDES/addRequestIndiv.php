<?php
      $connect = mysqli_connect('localhost','root','','jspims');

       $REQ_DATE = $_POST['currentdate'];
       $BATCH_ID = $_POST['batch_id'];
       $SKU = $_POST['sku'];
       $NAME = $_POST['sname'];
       $SMODEL = $_POST['smodel'];
       $BRAND = $_POST['sbrand'];
       $CON = $_POST['size'];
       $UNIT = $_POST['sunit'];
       $QUA = $_POST['quan'];
       $SUP = $_POST['sup'];

       $batch_req = "INSERT INTO `t_spare_requisition_summary` (`BATCH_NO`, `DATE_REQUESTED`, `DATE_REVISED`, `DATE_APPROVED`, `DATE_RELEASED`, `DATE_DELIVERED`, `STATUS_REQ`, `ACCEPT_STATUS`, `REMARKS`) VALUES ('$BATCH_ID', '$REQ_DATE', NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL)";
        mysqli_query($connect,$batch_req);

        $req = "INSERT INTO `t_spare_requisition` (`STOCK_NAME`, `STOCK_MODEL`, `STOCK_SIZE`, `STOCK_BRAND`, `STOCK_UNIT_TYPE`, `QUANTITY`, `STATUS`, `BATCH_NO`) VALUES ('$NAME', '$SMODEL', '$CON', '$BRAND', '$UNIT', '$QUA', 'PENDING', '$BATCH_ID')";
        mysqli_query($connect,$req);

     header('Location: ../reviewRequest.php');
?>