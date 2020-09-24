<?php
session_start();
//login.php

$con=mysqli_connect("localhost","root","","veterinary");


$otp=$_POST['otp'];
$mail=$_SESSION['user'];

$otpencry=md5($otp);
$check="select * from signup where activation_code='$otpencry' and email='$mail'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
$q="update signup set email_status='verified' where email='$mail'";
$res=mysqli_query($con,$q) or die("query failed".mysqli_error($con));

header('Location:login.html');
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