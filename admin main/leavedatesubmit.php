 <?php
$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error());
$day=$_POST['day'];

$ins="insert into leavedate values('$day')";
mysqli_query($con,$ins) or die("query failed".mysqli_error($con)); 
if($_POST)
{
header('location:update.php');
}
mysqli_close($con);

?>