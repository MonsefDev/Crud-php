<?php

include ("pdf/fpdf.php");


 


$pdf =new FPDF;
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'welcome',1,1,'C');
$pdf->Cell(52,10,'Nom',1,0,'C');
//$pdf->Cell(52,10,$name,1,1,'C');

$pdf->Cell(52,10,'Age',1,0,'C');
//$pdf->Cell(52,10,$age,1,1,'C');

$pdf->Cell(52,10,'Email',1,0,'C');
//$pdf->Cell(52,10,$email,1,1,'C');

$pdf->output();


?>