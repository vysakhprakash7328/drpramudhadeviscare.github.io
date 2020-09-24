<?php //login.php 

if(isset($_SESSION['email']))
{
	header("location:../index.html");
}


$con=mysqli_connect("localhost","root","","veterinary");


$email=$_POST['user'];
session_start();
$_SESSION['e-mail']=$email;
if($_POST)
{
$set="update clientdetails set callbtn='1' where email='$email'";
$result=mysqli_query($con,$set) or die("query failed".mysqli_error($con));
header('Location:admincalling.php');
}
mysqli_close($con);
?>