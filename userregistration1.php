<?php

session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');

$_SESSION['fname']=$_POST['firstname'];
$_SESSION['lname']=$_POST['lastname'];

$mob=$_POST['mobile'];
$mail=$_POST['email'];
$vehicletype=$_POST['vehicletype'];
$dat=$_POST['date'];
$wherestrt=$_POST['wheretostart'];
$wherestop=$_POST['wheretostop'];
$files=$_FILES['file'];
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];

$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored=array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){
	$destinationfile='admin/upload/'.$filename;
	$destinationfile1='upload/'.$filename;
	move_uploaded_file($filetmp, $destinationfile);


if(!empty($fname)){
if(!empty($lname)){
if(!empty($mob)){
if(!empty($mail)){
if(!empty($vehicletype)){
if(!empty($dat)){
if(!empty($wherestrt)){
if(!empty($wherestop)){
	$w="insert into user(firstname,lastname,mobile,email,vehicletype,date,wheretostart,wheretostop,image) values('$fname','$lname','$mob','$mail','$vehicletype','$dat','$wherestrt','$wherestop','$destinationfile1')";
	mysqli_query($con,$w);
	$_SESSION['image']=$destinationfile;
	header('location:pdf.php');
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "<a href=userregistration.php>try again</a>";
}
else echo "Extention is not matching.<a href=userregistration.php>try again</a>";

?>