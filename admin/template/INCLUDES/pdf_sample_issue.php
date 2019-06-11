<?php

require('fpdf/fpdf.php');
//require('fpdf/WriteHTML.php');
require('fpdf/html_table.php');
include 'connect.php';

function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page asdjlkasjdlfkjasdjlfkjkls'.$this->PageNo(),0,0,'C');
}

/* Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
*/
$pdf=new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial','',10.5);
$html='                   <tr><td width="150" height="30" bgcolor="#D0D0FF">NAME</td><td width="80" height="30" bgcolor="#D0D0FF">MODEL</td><td width="80" height="30" bgcolor="#D0D0FF">  BRAND</td><td width="80" height="30" bgcolor="#D0D0FF">SIZE</td><td width="120" height="30" bgcolor="#D0D0FF">UNIT</td><td width="80" height="30" bgcolor="#D0D0FF">QTY</td>
        </tr>';

                    $bno = $_GET['bno'];
                    $query = "SELECT SI.QUANTITY, SI.IS_ID ,RS.BATCH_NO, SS.STOCK_NAME, SS.STOCK_MODEL, SS.STOCK_BRAND, SS.STOCK_SIZE, RU.UNIT_TYPE, SS.STOCK_CONDITION, CONCAT(RUS.F_NAME, ' ', RUS.L_NAME) AS REQUESTOR, RS.DATE_REQUESTED, RS.DATE_APPROVED FROM t_spare_requisition_summary AS RS 
                    INNER JOIN r_request_remarks as rr ON rr.REMARKS_ID = rs.REMARKS 
                    INNER JOIN r_request_status as r ON r.STATUS_ID = rs.STATUS_REQ 
                    INNER JOIN t_spare_requisition_issuance as SI on SI.REF_BATCH_NO = RS.BATCH_NO
                    INNER JOIN t_spare_requisition_issued as RI on RI.REF_BATCH_NO = RS.BATCH_NO 
                    INNER JOIN t_spare_stocks as SS on SI.REF_STOCK_ID = SS.STOCK_ID
                    INNER JOIN r_unit_type AS RU ON SS.STOCK_UNIT_TYPE = RU.UNIT_ID
                    INNER JOIN r_users AS RUS ON RS.REQUESTED_BY = RUS.USERID
                    where BATCH_NO = '$bno'";
                $execquery = mysqli_query($connect, $query);

                 while ($row = mysqli_fetch_assoc($execquery)) {
                    $bno = $row['BATCH_NO'];
                    $datereq = $row['DATE_REQUESTED'];
                    //$daterev= $row['DATE_REVISED'];
                    $dateapp = $row['DATE_APPROVED'];
                    //$daterel = $row['DATE_RELEASED'];
                    //$remark = $row['REMARKS_VAL'];
                    //$fname = $row['F_NAME'];
                    //$lname = $row['L_NAME'];
                    $reqby = $row['REQUESTOR'];
                    //$supplier = $row['SUP_NAME'];
                    $ponum = $row['IS_ID'];
                    //$sid = $row['STOCK_ID'];
                    $sname = $row['STOCK_NAME'];
                    $smodel = $row['STOCK_MODEL'];
                    $sbrand = $row['STOCK_BRAND'];
                    $ssize = $row['STOCK_SIZE'];
                    $sut = $row['UNIT_TYPE'];
                    $sqname = $row['QUANTITY'];
                    //$sprice = $row['SP_PRICE'];
                              
                $html.= '                   <tr><td width="150" height="30">'.$sname .'</td><td width="80" height="30">'.$smodel .'</td><td width="80" height="30">'.$sbrand .'</td><td width="80" height="30">'.$ssize .'</td><td width="120" height="30">'.$sut .'</td><td width="80" height="30">'.$sqname .'</td>
                    </tr>';
                       }
                 $html.='</tbody></table></body></html><br><br>';

$html2='<br><br><br><br><strong>                                                            ISSUANCE ORDER DETAILS</strong><br>';
$logo='<img src="fpdf/logo.jpg" height="110" width="100">';
$pdf->WriteHTML($logo);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'Date of Request: '.$datereq,0,1,'R');
$pdf->Cell(0,10,'IO- '.$ponum.'-BN-'.$bno,0,1,'R');
$pdf->SetFont('Arial','B',12);
$pdf->WriteHTML($html2);
$pdf->SetFont('Arial','I',11);
$pdf->WriteHTML($html);
//$pdf->Cell(0,10,'Batch Number: '.$bno,0,1);
//$pdf->Cell(0,10,'Date of Request: '.$datereq,0,1);
//$pdf->Cell(0,10,'Date Revised: '.$daterev,0,1);
$pdf->SetFont('Arial','I', 11);
$pdf->Cell(0,10,'Other description:',0,1);
$pdf->SetFont('Arial','B', 11);
$pdf->Cell(0,10,'          Date Approved: '.$dateapp,0,1);
//$pdf->Cell(0,10,'Releasing Date: '.$daterel,0,1);
//$pdf->Cell(0,10,'Remarks: '.$remark,0,1);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,10,'Requested By: '.$reqby,0,1,'R');
//$pdf->Cell(0,10,'Supplier: '.$supplier,0,1);
$pdf->Footer();
$pdf->Output();
?>