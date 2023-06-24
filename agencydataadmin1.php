<?php
if(isset($_POST['add']))
{
	session_start();
$connn = mysqli_connect('localhost','root','');

mysqli_select_db($connn,'saikat');


$agen=$_SESSION['uname'];
$lin=$_SESSION['pass'];


$q = "SELECT * FROM agencyt1 WHERE agency='$agen' AND owner='$lin'";
$result = mysqli_query($connn,$q);
$num= mysqli_num_rows($result);
if($num >= 1)
{
while($row = $result->fetch_assoc()){ 
					 $own= $row["ownername"] ;
					 $mail= $row["email"] ;
					 $mob= $row["mobile"] ;
					 $place= $row["place"] ;

}
$vtype=$_POST['vehicletype'];
$dname=$_POST['drivername'];
$vlicense=$_POST['vlicense'];
$afrom=$_POST['availablefrom'];
$aupto=$_POST['availableupto'];
$aon=$_POST['asofnow'];

$qt = "SELECT * FROM vehicleuser WHERE vlicense='$vlicense'";
$resultt = mysqli_query($connn,$qt);
$numt= mysqli_num_rows($resultt);
if($numt>=1)
{
	echo "This Vehicle Number is already registered....Please <a href=agencydataadmin.php>try with other data</a>";
}
else{
	$w="insert into vehicleuser(agency,license,owner,email,mobile,place,vehicletype,drivername,vlicense,availablefrom,availableupto,asofnow) values('$agen','$lin','$own','$mail','$mob','$place','$vtype','$dname','$vlicense','$afrom','$aupto','$aon')";
	mysqli_query($connn,$w);
	header('location:homepage1.php');
}
}
else{
echo "please <a href=homepage.php>try again</a>";
}
}
?>