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
$html='<tr><td width="150" height="30" bgcolor="#D0D0FF">NAME</td><td width="80" height="30" bgcolor="#D0D0FF">MODEL</td><td width="80" height="30" bgcolor="#D0D0FF">  BRAND</td><td width="80" height="30" bgcolor="#D0D0FF">SIZE</td><td width="120" height="30" bgcolor="#D0D0FF">UNIT</td><td width="80" height="30" bgcolor="#D0D0FF">QTY</td><td width="50" height="30" bgcolor="#D0D0FF">PRICE</td><td width="120" height="30" bgcolor="#D0D0FF">  SUPPLIER</td>
        </tr>';

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
                    inner join t_spare_requisition_purchased as j
                    on j.REF_BATCH_NO = a.BATCH_NO
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
                              
                $html.= '<tr><td width="150" height="30">'.$sname .'</td><td width="80" height="30">'.$smodel .'</td><td width="80" height="30">'.$sbrand .'</td><td width="80" height="30">'.$ssize .'</td><td width="120" height="30">'.$sut .'</td><td width="80" height="30">'.$sqname .'</td><td width="40" height="30">'.$sprice .'</td><td width="120" height="30">'.$supplier .'</td>
                    </tr>';
                       }
                 $html.='</tbody></table></body></html>';

$html2='<br><br><strong>                                                            PURCHASE ORDER DETAILS</strong><br>';
$logo='<img src="fpdf/logo.jpg" height="110" width="100">';
$pdf->WriteHTML($logo);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10,'Date of Request: '.$datereq,0,1,'R');
$pdf->Cell(0,10,'PO- '.$ponum.'-BN-'.$bno,0,1,'R');
$pdf->SetFont('Arial','B',12);
$pdf->WriteHTML($html2);
$pdf->SetFont('Arial','I',11);
$pdf->WriteHTML($html);
//$pdf->Cell(0,10,'Batch Number: '.$bno,0,1);
//$pdf->Cell(0,10,'Date of Request: '.$datereq,0,1);
//$pdf->Cell(0,10,'Date Revised: '.$daterev,0,1);
$pdf->SetFont('Arial');
$pdf->Cell(0,10,'Date Approved: '.$dateapp,0,1);
$pdf->Cell(0,10,'Releasing Date: '.$daterel,0,1);
$pdf->Cell(0,10,'Remarks: '.$remark,0,1);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,10,'Requested By: '.$reqby,0,1,'R');
//$pdf->Cell(0,10,'Supplier: '.$supplier,0,1);
$pdf->Footer();
$pdf->Output();
?>