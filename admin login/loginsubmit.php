<?php
//login.php 

if(isset($_SESSION['email']))
{
	header("location:../index.html");
}


$con=mysqli_connect("localhost","root","","veterinary");


$email=$_POST['email'];
$pass=$_POST['password'];
$password=md5($pass);

$check="select * from adminlogin where email='$email' and password='$password'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
session_start();
$_SESSION['user']=$email;
header('Location:../admin main/index.php');
}
else
{
echo "<script>alert('Please Check Your Username and password');window.location='login.html';</script>";
}
mysqli_close($con);
?>