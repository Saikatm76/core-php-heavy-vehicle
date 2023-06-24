<?php
if(isset($_POST['login'])) {
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'saikat');
$_SESSION['uname']=$_POST['username'];
$_SESSION['pass']=$_POST['password'];
header('location:homepage1.php');
}
?>