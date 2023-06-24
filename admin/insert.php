<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
		if(isset($_GET['inst'])) {
		$id = $_GET['inst'];
		$query = "SELECT * FROM agencyt WHERE slno = $id";
		$fire = mysqli_query($con,$query) or die("can not fetch data".mysqli_error($con));
		$user = mysqli_fetch_assoc($fire);
		
		}
		
		
		
		$q = "SELECT * FROM agencyt WHERE slno=$id";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num >= 1)
{
while($row = $result->fetch_assoc()){ 
					 $own= $row["ownername"] ;
					 $agen=$row["agency"];
					 $mail= $row["email"] ;
					 $mob= $row["mobile"] ;
					 $place= $row["place"] ;
					 $lis=$row["owner"];

	}
}

$q = "SELECT * FROM agencyt1 WHERE slno=$id";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num >= 1)
{
	echo "This data is already varified...<a href=agencydatalogin1.php>try again</a>";
}
else
{
$sqlt="insert into agencyt1(slno,ownername,agency,email,place,owner,mobile) values('$id','$own','$agen','$mail','$place','$lis','$mob')";
	mysqli_query($con,$sqlt);
	header('location:agencydatalogin1.php');
}
 ?>