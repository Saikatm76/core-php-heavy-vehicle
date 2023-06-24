<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');

$age=$_POST["agency"];
$own=$_POST["owner"];

$q = "SELECT * FROM vehicleuser WHERE license='$own'";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num >= 1)
{
echo "Your data already exist in database...<a href=registration.php>try with </a>another data...";
}
else
{


$_SESSION['oname']=$_POST['ownername'];

$oname=$_SESSION['oname'];
$mail=$_POST['email'];
$plc=$_POST['place'];
$gen=$_POST['gender'];
$mob=$_POST['mobile'];
$files=$_FILES['file'];
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];



$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored=array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){
	$destinationfile='admin/upload/'.$filename;
	$destinationfile1='upload/'.$filename;
	move_uploaded_file($filetmp, $destinationfile);
 
 if(!empty($oname)){
if(!empty($age)){
if(!empty($mail)){
if(!empty($plc)){
if(!empty($own)){
if(!empty($gen)){
if(!empty($mob)){
	$sql="insert into agencyt(ownername,agency,email,place,owner,gender,mobile,image) values('$oname','$age','$mail','$plc','$own','$gen','$mob','$destinationfile1')";
	mysqli_query($con,$sql);
	$_SESSION['image']=$destinationfile;
	header('location:pdf1.php');
    
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
else echo "Something Went Wrong...<a href=registration.php>Try Again...</a>";
}
?>