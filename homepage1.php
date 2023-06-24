<html>
<body style="font-family: tahoma,geneva,sans-serif;color: red;background: url(https://images.pexels.com/photos/56832/road-asphalt-space-sky-56832.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);background-size: cover;">

<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');


$t=$_SESSION["uname"];
$r=$_SESSION["pass"];
$tr = "SELECT * FROM agencyt1 WHERE agency='$t' AND owner='$r'";
$result1 = mysqli_query($con,$tr);
$num1= mysqli_num_rows($result1);
if($num1 >= 1)
{

$q = "SELECT * FROM vehicleuser WHERE agency='$t' AND license='$r'";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num >= 1)
{ ?>
<table border=2 bordercolor=black bgcolor=stateblue align=center height=75 width=1500>
<tr>
<td align=center>                         <font size=6><b><i>Welcome <?php echo $t ?></i></b></font> </td>                           
</tr>
</table>
	<table>
		<tr>
                        <td><button><a href=agencydataadmin.php>Add</a></button></td>
			<td></td>
			            <td><button><a href="logout.php">Log Out</a></button></td>
		</tr>
	</table>
<table border=2 bgcolor=FFF8DC>
<tr>
<th>sl. no.</th>
<th>agency</th>
<th>owner</th>
<th>place</th>
<th>Email</th>
<th>Mobile</th>
<th>VEHICLE TYPE</th>
<th>DRIVER NAME</th>
<th>Vehicle Number</th>
<th>AVAILABLE FROM</th>
<th>AVAILABLE UPTO</th>
<th>AS OF NOW</th>
<th>license</th>
<th>delete</th>
<th>update</th>
</tr>
<?php
while($row = $result->fetch_assoc()){ ?>
<tr>
					<td><?php echo $row['slno'] ?></td>
					<td><?php echo $row['agency'] ?></td>
					<td><?php echo $row["owner"] ?></td>
					<td><?php echo $row['place'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['mobile'] ?></td>
					<td><?php echo $row["vehicletype"] ?></td>
					<td><?php echo $row["drivername"] ?></td>
					<td><?php echo $row["vlicense"] ?></td>
					<td><?php echo $row["availablefrom"] ?></td>
					<td><?php echo $row["availableupto"] ?></td>
					<td><?php echo $row["asofnow"] ?></td>
					<td><?php echo $row["license"] ?></td>
					<td>
						<button class="button"><a href="delete1.php?del=<?php echo $row['slno'] ?>">Delete</a></button>
					</td>
					<td>
						<button class="button"><a href="update2.php?upd=<?php echo $row['slno'] ?>">Update</a></button>
					</td>
					</tr>

<?php
}
}
else 
{
	?>
	<table>
		<tr>
                        <td><button><a href=agencydataadmin.php>Add</a></button></td>
			<td></td>
			            <td><button><a href="logout.php">Log Out</a></button></td>
		</tr>
	</table>
	<?php
}
}
else{
echo "please <a href=homepage.php>try again</a>";
}
?>
</table>
</body>
</html>