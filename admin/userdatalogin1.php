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
<body style="font-family: tahoma,geneva,sans-serif;color: red;background: url(https://images.pexels.com/photos/2555801/pexels-photo-2555801.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);background-size: cover;">
	<button><a href=adminlogin2.php>Back</a></button>
<table border="2" bgcolor=FFF8DC>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Mobile</th>
<th>Email ID</th>
<th>Vehicle Type</th>
<th>Date</th>
<th>Where To Start</th>
<th>Where To Stop</th>
<th>Image</th>
<th>delete</th>
</tr>
<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
		$query = "SELECT * FROM user";
		$count = mysqli_query($con,$query);
	if (mysqli_num_rows($count)>0) {

				while($row = mysqli_fetch_assoc($count)) { ?>
					<tr>
					<td><?php echo $row['firstname'] ?></td>
					<td><?php echo $row['lastname'] ?></td>
					<td><?php echo $row["mobile"] ?></td>
					<td><?php echo $row["email"] ?></td>
					<td><?php echo $row["vehicletype"] ?></td>
					<td><?php echo $row['date'] ?></td>
					<td><?php echo $row["wheretostart"] ?></td>
					<td><?php echo $row["wheretostop"] ?></td>
					<td><img src="<?php echo $row["image"] ?>" height=80 width=80></td>
					<td>
						<button class="button"><a href="userdatadelete.php?del=<?php echo $row['slno'] ?>">Delete</a></button>
					</td>
					</tr>

					<?php
				}
			}
		?>
	</table>
 </body>
</html>
<?php }
else
{
 echo "please <a href=userdatalogin.php>try again</a>";
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
