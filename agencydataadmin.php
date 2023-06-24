<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');

session_start();

$age=$_SESSION['uname'];
$lis=$_SESSION['pass'];
?>
<html>
<body style="font-family: tahoma,geneva,sans-serif;color: red;background: url(https://static1.squarespace.com/static/5899e78b1b10e35238fba886/t/5c34437188251ba3e30d995a/1546929016385/vans+medium+duty+heavy+vehicle+trucks+-+credit+Mitsubishi-Fuso.jpg?format=750w);background-size: cover;">
	<table border="2" bgcolor="FFF8DC">
		<tr>
			<td>
	<form method=post action=agencydataadmin1.php>
	<h1>ADD</h1>
	<label>VEHICLE TYPE</label>
	<input type='text' name='vehicletype' required><br>
	<label>DRIVER NAME</label>
	<input type='text' name='drivername' required><br>
	<label>Vehicle Number</label>
	<input type='text' name='vlicense' required><br>
	<label>AVAILABLE FROM</label>
	<input type='time' name='availablefrom' required><br>
	<label>AVAILABLE UPTO</label>
	<input type='time' name='availableupto' required><br>
	<label>AS OF NOW</label>
	<input type='radio' name='asofnow' value='active' required>ACTIVE<input type='radio' name='asofnow' value='not active' required>NOT ACTIVE<br>
	<input type=submit name=add value=add>
    </form>
</td>
</tr>
</table>
</body>
</html>
