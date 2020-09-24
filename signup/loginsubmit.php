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
$check="select * from signup where email_status='not verified' and email='$email'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
session_start();
$_SESSION['user']=$email;
?>
<script type='text/javascript'>
alert('Please Varify First');window.location='loginverify.html';</script>
<?php
}

else
{
$q="select * from signup where email='$email' and password='$password'";
$res=mysqli_query($con,$q) or die("query failed".mysqli_error($con));

if(mysqli_fetch_array($res))
{
$q1="select * from clientdetails where email='$email'";
$res1=mysqli_query($con,$q1) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($res1))
{
session_start();
$_SESSION['sess_user']=$email;
header('Location:../main2.html');
}
else
{
session_start();
$_SESSION['sess_user']=$email;
header('Location:../main.html');
}
}
else
{
echo "<script>alert('Check Your username and password');window.location='login.html';</script>";

}
}
mysqli_close($con);
?>