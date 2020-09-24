<?php
session_start();
//login.php

$con=mysqli_connect("localhost","root","","veterinary");


$otp=$_POST['otp'];
$mail=$_SESSION['user'];
$act=md5($otp);
$check="select * from adminlogin where activation_key='$acti' and name='vysakh'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
header('Location:updatepass.html');
}
else
{
?>
<script>
alert('otp incorrect');</script>
<?php
}

mysqli_close($con);
?>