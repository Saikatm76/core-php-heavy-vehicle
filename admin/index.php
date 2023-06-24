<html>
<head>
	<title>BookyoUrVehicle</title>
	<style>
	a:link{color:pink;}
a:hover{color:red;}
::placeholder{color:aliceblue;opacity: 0.7;}
</style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="font-family: tahoma,geneva,sans-serif;color: red;background: url(https://images.pexels.com/photos/38537/woodland-road-falling-leaf-natural-38537.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260);background-size: cover;">
	<div class="signin" style="background: rgba(40,60,80,0.7);padding:40px;width:250px;margin: auto;margin-top: 80px;height: 450px;margin-left: 180px">
		<button><a href="http://localhost:82/phpp/HeavyVehicle/"><font color=red>Home</font></a></button>
		<form method=post action=adminloginn.php style="width: 240px;text-align: center;">
			<h2 style="color: white">Log In</h2>
			<input type="text" name="username" placeholder="Username" style="width: 240px;text-align: center;background: transparent;border: none;border-bottom: 1.5px solid #fff;font-family: 'play',sans-serif;font-size: 16px;font-weight: 200px;padding: 10px 0;transition: border 0.5s;outline: none;color: #fff;" required><br><br>
			<input type="password" name="password" placeholder="Password" style="width: 240px;text-align: center;background: transparent;border: none;border-bottom: 2px solid #fff;font-family: 'play',sans-serif;font-size: 16px;font-weight: 200px;padding: 10px 0;transition: border 0.5s;outline: none;color: #fff;" required><br><br><br>
			<input type=submit value="Log In" name=submit style="border: none;width: 90px;background: white;color:black;font-size: 16px;line-height: 25px;padding: 10px 0;border-radius: 16px;cursor: pointer;"><br><br><br>
			<div id=container>
		</div><br><br><br><br><br><br>
		</form>
	</div>
</body>
</html>