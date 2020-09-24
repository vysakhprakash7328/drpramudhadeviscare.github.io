<?php
session_start();
//login.php

$con=mysqli_connect("localhost","root","","veterinary");


$otp=$_POST['otp'];
$mail=$_SESSION['user'];
$check="select * from adminlogin where activation_code='$otp' and email='$mail'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
header('Location:admin login/login.html');
}
else
{
?>
<script>
alert('otp incorrect');window.location='verify.html';</script>
<?php
}

mysqli_close($con);
?>