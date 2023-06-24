<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');


$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$image=$_SESSION['image'];

require("fpdf/fpdf.php");
$pdf=new FPDF('p','mm','A4');
$pdf->Addpage();

$pdf->setFont('Arial','BI',16);
$pdf->setTextColor(255,255,50);
$pdf->cell(17,8,"HOME",0,0,'C',true,"http://localhost:82/phpp/HeavyVehicle/");
$pdf->cell(35,10,"",0,0,'C');
$pdf->Image($image,160,10,30,35);
$pdf->setTextColor(155,55,50);
$pdf->cell(70,10,"Thank You $fname $lname ",0,1,'C');
$pdf->cell(70,4,"",0,1,'C');
$pdf->setTextColor(30,3,2);
$pdf->setFont('Arial','BI',12);
$pdf->cell(130,5,"You have successfully registered in @Finds_Heavy_Vehicles...Please",0,1,'L');
$pdf->cell(130,5,"keep this form as a proof...Soon you will receive a call for",0,1,'L');
$pdf->cell(130,5,"confermation...",0,1,'L');
$pdf->output();
?>