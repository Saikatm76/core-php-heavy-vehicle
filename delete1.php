<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
	if (isset($_GET['del'])) {
		$slno = $_GET['del'];
		$query = "DELETE FROM vehicleuser WHERE slno = $slno";
		$fire = mysqli_query($con,$query);
		if($fire){ 
			echo "Data is deleted.";
			header('location:homepage1.php');
		}
	}
 ?>