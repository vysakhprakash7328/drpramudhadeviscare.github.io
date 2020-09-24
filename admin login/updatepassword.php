<?php
session_start();
//login.php

$con=mysqli_connect("localhost","root","","veterinary");


$pass=$_POST['password'];
$password=md5($pass);
$update="update adminlogin set password='$password' where name='vysakh'";
$result=mysqli_query($con,$update) or die("query failed".mysqli_error($con));
header('Location:login.html');

mysqli_close($con);
?>