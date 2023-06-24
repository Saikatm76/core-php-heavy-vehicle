<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');

$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
if(!empty($uname)){
if(!empty($pass)){
$q = "select * from admin where username='$uname' and password='$pass'";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1)
{ ?>
	<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body style="font-family: tahoma,geneva,sans-serif;color: red;background: url(https://images.pexels.com/photos/56832/road-asphalt-space-sky-56832.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);background-size: cover;">
	<table>
		<tr>
			<td><button><a href=userdatalogin1.php>User Data</a></button></td>
			<td></td>
			<td><button><a href=agencydatalogin1.php>Agency Details</a></button></td>
			<td></td>
			<td><button><a href=adminlogout.php>Log Out</a></button></td>
		</tr>
	</table>
<table border="2" bgcolor=FFF8DC>
<tr>
<th>sl. no.</th>
<th>agency</th>
<th>Owner Name</th>
<th>Email</th>
<th>Mobile</th>
<th>place</th>
<th>VEHICLE TYPE</th>
<th>VEHICLE NUMBER</th>
<th>DRIVER NAME</th>
<th>AVAILABLE FROM</th>
<th>AVAILABLE UPTO</th>
<th>AS OF NOW</th>
<th>license</th>
<th>delete</th>
<th>update</th>
</tr>
<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
		$query = "SELECT * FROM vehicleuser";
		$count = mysqli_query($con,$query);
	if (mysqli_num_rows($count)>0) {

				while($row = mysqli_fetch_assoc($count)) { ?>
					<tr>
					<td><?php echo $row['slno'] ?></td>
					<td><?php echo $row['agency'] ?></td>
					<td><?php echo $row["owner"] ?></td>
					<td><?php echo $row["email"] ?></td>
					<td><?php echo $row["mobile"] ?></td>
					<td><?php echo $row['place'] ?></td>
					<td><?php echo $row["vehicletype"] ?></td>
					<td><?php echo $row["vlicense"] ?></td>
					<td><?php echo $row["drivername"] ?></td>
					<td><?php echo $row["availablefrom"] ?></td>
					<td><?php echo $row["availableupto"] ?></td>
					<td><?php echo $row["asofnow"] ?></td>
					<td><?php echo $row["license"] ?></td>
					<td>
						<button class="button"><a href="delete.php?del=<?php echo $row['slno'] ?>">Delete</a></button>
					</td>
					<td>
						<button class="button"><a href="updateadmin.php?upd=<?php echo $row['slno'] ?>">Update</a></button>
					</td>
					</tr>

					<?php
				}
			}
		?>
	</table>
	<form method="POST" action="search.php">
		<input type="text" name="keyword"><br>
		<input type="submit" name="search" value="filter"><br>
</form>
 </body>
</html>
<?php }
else
{
 echo "please <a href=adminlogin1.php>try again</a>";
}
}
else
{
	echo "password should not be empty";
	
}
}
else
{
	echo "username should not be empty";
}
?>
