
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
 		$own = $_POST['owner'];
 		$dname=$_POST['drivername'];
		$afrom=$_POST['availablefrom'];
		$aupto=$_POST['availableupto'];
		$aon=$_POST['asofnow'];
  		$mail=$_POST['email'];
        $mob=$_POST['mobile'];

 		$query = "UPDATE vehicleuser SET owner = '$own',drivername = '$dname', availablefrom='$afrom' ,availableupto='$aupto',asofnow='$aon',email='$mail',mobile='$mob'  WHERE slno = $id";
 		$fire = mysqli_query($con,$query) or die("can not update the data".mysqli_error($con));
 		if($fire) header("location:adminlogin2.php");

 	}

  ?>
  
<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body style="font-family: tahoma,geneva,sans-serif;color: red;background: url(https://static1.squarespace.com/static/5899e78b1b10e35238fba886/t/5c34437188251ba3e30d995a/1546929016385/vans+medium+duty+heavy+vehicle+trucks+-+credit+Mitsubishi-Fuso.jpg?format=750w);background-size: cover;">
	<table border="2" bgcolor="FFF8DC" align=center valign=down>
		<tr>
			<td>
	<h1 style="text-align: center;"><font color=black>Update the Values</font></h1>
	<form method="POST">
	<label>DRIVER NAME</label>
	<input type='text' name="drivername" value="<?php echo $user['drivername'] ?>" required><br>
	<label>OWNER NAME</label>
	<input type='text' name="owner" value='<?php echo $user['owner'] ?>' required><br>
	<label>Email</label>
	<input type='text' name="email" value='<?php echo $user['email'] ?>' required><br>
	<label>Mobile</label>
	<input type='text' name="mobile" value='<?php echo $user['mobile'] ?>' required><br>
	<label>AVAILABLE FROM</label>
	<input type='time' name='availablefrom' value='<?php echo $user['availablefrom'] ?>' required><br>
	<label>AVAILABLE UPTO</label>
	<input type='time' name='availableupto' value='<?php echo $user['availableupto'] ?>' required><br>
	<label>AS OF NOW</label>
	<input type='radio' name='asofnow' value='active' required>ACTIVE<input type='radio'  name='asofnow' value='not active' required>NOT ACTIVE<br><br><br>
		<input type="submit" name="update" value="Update">
	</form>
</td>
</tr>
</table>
</body>
</html>