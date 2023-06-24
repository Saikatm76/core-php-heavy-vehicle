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
<body>
	<button><a href=adminlogin2.php>Back</a></button>
<table border="2" bgcolor=FFF8DC>
<tr>
<th>Owner Name</th>
<th>Agency</th>
<th>Email</th>
<th>Place</th>
<th>Owner License</th>
<th>Gender</th>
<th>mobile</th>
<th>Image</th>
<th>delete</th>
<th>varify</th>
</tr>
<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
		$query = "SELECT * FROM agencyt";
		$count = mysqli_query($con,$query);
	if (mysqli_num_rows($count)>0) {

				while($row = mysqli_fetch_assoc($count)) { ?>
					<tr>
					<td><?php echo $row['ownername'] ?></td>
					<td><?php echo $row['agency'] ?></td>
					<td><?php echo $row["email"] ?></td>
					<td><?php echo $row["place"] ?></td>
					<td><?php echo $row['owner'] ?></td>
					<td><?php echo $row["gender"] ?></td>
					<td><?php echo $row["mobile"] ?></td>
					<td><img src="<?php echo $row["image"] ?>" height=80 width=80></td>
					<td>
						<button class="button"><a href="agencydatadelete.php?del=<?php echo $row['slno'] ?>">Delete</a></button>
					</td>
					<td>
						<button class="button" onclick="alert('Your Data is varified');"><a href="insert.php?inst=<?php echo $row['slno'] ?>">Varify</a></button>
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
 echo "please <a href=agencydatalogin.php>try again</a>";
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
