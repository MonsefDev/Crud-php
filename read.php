<?php

include "config.php";

include ("pdf/fpdf.php");


$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}

$pdf =new FPDF;

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'welcome MR .'.$name,1,1,'C');
$pdf->Cell(52,10,'Nom',1,0,'C');
$pdf->Cell(52,10,$name,1,1,'C');

$pdf->Cell(52,10,'Age',1,0,'C');
$pdf->Cell(52,10,$age,1,1,'C');

$pdf->Cell(52,10,'Email',1,0,'C');
$pdf->Cell(52,10,$email,1,1,'C');

$pdf->output();


 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>

            <form action="read.php" methode="post">
            <div class="row">
                <div>   
                        <label>Name</label>
                        <label><b><?php echo $name;?></b></lable>
                </div>
                <div>   
                        <label>Age</label>
                        <label><b><?php echo $age; ?></b></lable>
                </div>
                <div>   
                        <label>Email</label>
                        <label><b><?php echo $email;?></b></lable>
                </div>
                <div>
                      <input type="submit" value="GeneartPDF">
                </div>
                
            </div>
            </form>

            <?php
            
        ?>
    </div> <!-- /container -->
  </body>
</html>


