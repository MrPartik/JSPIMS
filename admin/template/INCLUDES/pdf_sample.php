<?php

require('fpdf/fpdf.php');
include 'connect.php';

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(5);
    // Title
    $this->Cell(0,10,'Purchase Order',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function Content()
{
    include 'connect.php';

    $bno = $_GET['bno'];
    $query = "SELECT * FROM `t_spare_requisition_summary` as a
    inner join t_spare_requisition_old_stock as b
    on b.REF_BATCH_NO = a.BATCH_NO
    inner join r_users as c 
    on a.REQUESTED_BY = c.USERID
    inner join r_supplier as d
    on b.STOCK_SUPPLIER = d.SUP_ID
    inner join r_request_remarks as e
    on a.REMARKS = e.REMARKS_ID
    inner join t_spare_stocks as f
    on b.REF_STOCK_ID = f.STOCK_ID
    inner join r_unit_type as g
    on f.STOCK_UNIT_TYPE = g.UNIT_ID
    INNER JOIN r_quantity_unit_type as h
    on f.STOCK_QUANTITY_UNIT_TYPE = h.R_QU_ID
    inner join r_stock_price as i
    on i.REF_STOCK_ID = f.STOCK_ID
    WHERE a.BATCH_NO = '$bno'";
    $execquery = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($execquery)) {
        $bno = $row['BATCH_NO'];
        $datereq = $row['DATE_REQUESTED'];
        $daterev= $row['DATE_REVISED'];
        $dateapp = $row['DATE_APPROVED'];
        $daterel = $row['DATE_RELEASED'];
        $remark = $row['REMARKS_VAL'];
        $fname = $row['F_NAME'];
        $lname = $row['L_NAME'];
        $reqby = $fname.' '. $lname;
        $supplier = $row['SUP_NAME'];
        $ponum = $row['REQ_ID'];
        $sid = $row['STOCK_ID'];
        $sname = $row['STOCK_NAME'];
        $smodel = $row['STOCK_MODEL'];
        $sbrand = $row['STOCK_BRAND'];
        $ssize = $row['STOCK_SIZE'];
        $sut = $row['UNIT_TYPE'];
        $sqname = $row['R_QU_NAME'];
        $sprice = $row['SP_PRICE'];


     }

     $this->SetFont('Times','',12);
     $this->Cell(0,10,'Batch Number: '.$bno,0,1);
     $this->Cell(0,10,'Date of Request: '.$datereq,0,1);
     $this->Cell(0,10,'Date Revised: '.$daterev,0,1);
     $this->Cell(0,10,'Date Approved: '.$dateapp,0,1);
     $this->Cell(0,10,'Releasing Date: '.$daterel,0,1);
     $this->Cell(0,10,'Remarks: '.$remark,0,1);
     $this->Cell(0,10,'Requested By: '.$reqby,0,1);
     $this->Cell(0,10,'Supplier: '.$supplier,0,1);
     $this->Cell(0,10,'Purchase Order Number: '.$ponum,0,1);
     $this->Cell(0,10,'Stock ID: '.$sid,0,1);
     $this->Cell(0,10,'Stock Name: '.$sname,0,1);
     $this->Cell(0,10,'Stock Model: '.$smodel,0,1);
     $this->Cell(0,10,'Stock Brand: '.$sbrand,0,1);
     $this->Cell(0,10,'Stock Size: '.$ssize,0,1);
     $this->Cell(0,10,'Stock Unit: '.$sut,0,1);
     $this->Cell(0,10,'Stock Quantity type: '.$sqname,0,1);
     $this->Cell(0,10,'Stock Quantity type:PHP '.$sprice,0,1);

     /* FOREACH PRINTING
    $lastline = exec('C:\\"Program Files"\\R\\R-3.5.3\\bin\\Rscript.exe C:\xampp\htdocs\myscript_test.R', $print);
    $json ="";
          //var_dump($print);
    foreach($print as $obj){
        $json .= $obj;
    }
    $this->SetFont('Times','',12);

    foreach(json_decode($json,TRUE) as $item){

        $this->Cell(0,10,'Printing line number '.$item['SUP_NAME'],0,1);
    }
    */
}

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>