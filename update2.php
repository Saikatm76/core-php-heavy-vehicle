
<?php 
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'saikat');
	if(isset($_GET['upd'])) {
		$id = $_GET['upd'];
		$query = "SELECT * FROM vehicleuser WHERE slno = $id";
		$fire = mysqli_query($con,$query) or die("can not fetch data".mysqli_error($con));
		$user = mysqli_fetch_assoc($fire);
	}

 ?>

 <?php 
 	if (isset($_POST['update'])) {
 		$mob = $_POST['mobile'];
		$eml = $_POST['email'];
 		$dname=$_POST['drivername'];
		$afrom=$_POST['availablefrom'];
		$aupto=$_POST['availableupto'];
		$aon=$_POST['asofnow'];

 		$query = "UPDATE vehicleuser SET mobile = '$mob',email = '$eml', drivername = '$dname', availablefrom='$afrom' ,availableupto='$aupto',asofnow='$aon'  WHERE slno = $id";
 		$fire = mysqli_query($con,$query) or die("can not update the data".mysqli_error($con));
 		if($fire) header("location:homepage1.php");

 	}

  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body style="text-align: center;">
	<h1 style="text-align: center;">Update the Values</h1>
	<form method="POST">
	<h1>UPDATE</h1>
	<label>DRIVER NAME</label>
	<input type='text' name="drivername" value="<?php echo $user['drivername'] ?>"><br>
	<label>Mobile</label>
	<input type='text' name="mobile" value="<?php echo $user['mobile'] ?>"><br>
	<label>Email</label>
	<input type='text' name="email" value="<?php echo $user['email'] ?>"><br>
	<label>AVAILABLE FROM</label>
	<input type='time' name='availablefrom' value='<?php echo $user['availablefrom'] ?>'><br>
	<label>AVAILABLE UPTO</label>
	<input type='time' name='availableupto' value='<?php echo $user['availableupto'] ?>'><br>
	<label>AS OF NOW</label>
	<input type='radio' name='asofnow' value='active'>ACTIVE<input type='radio'  name='asofnow' value='not active'>NOT ACTIVE<br><br><br>
		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>