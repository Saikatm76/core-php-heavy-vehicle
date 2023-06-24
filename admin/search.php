<html>
<body>
	<button><a href='adminlogin2.php'>Admin Panal</a></button>
<table border="=1">
<tr>
<th>sl. no.</th>
<th>agency</th>
<th>owner</th>
<th>place</th>
<th>VEHICLE TYPE</th>
<th>DRIVER NAME</th>
<th>AVAILABLE FROM</th>
<th>AVAILABLE UPTO</th>
<th>AS OF NOW</th>
<th>license</th>
</tr>
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
$keyword=$_POST['keyword'];
$sql="SELECT * FROM vehicleuser WHERE place='$keyword' OR agency='$keyword' OR vehicletype='$keyword' OR asofnow='$keyword'";
$result=$con->query($sql);
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){
echo "<tr><td>". $row["slno"] ."</td>
<td>". $row["agency"] ."</td>
<td>". $row["owner"] ."</td>
<td>". $row["place"] ."</td>
<td>". $row["vehicletype"] ."</td>
<td>". $row["drivername"] ."</td>
<td>". $row["availablefrom"] ."</td>
<td>". $row["availableupto"] ."</td>
<td>". $row["asofnow"] ."</td>
<td>". $row["license"] ."</td></tr>";
}
}
else{
echo "0 result";
}
$con->close();
?>
</table>
</body>
</html>