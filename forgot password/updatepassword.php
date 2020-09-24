<?php
session_start();
//login.php

$con=mysqli_connect("localhost","root","","veterinary");


$pass=$_POST['password'];
$mail=$_SESSION['user'];
$password=md5($pass);
$update="update signup set password='$password' where email='$mail'";
$result=mysqli_query($con,$update) or die("query failed".mysqli_error($con));
header('Location:../signup/login.html');

mysqli_close($con);
?>