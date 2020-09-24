 <?php
$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error());
$pay=$_POST['link'];

$upd="update paymentlink set paylink='$pay'";
mysqli_query($con,$upd) or die("query failed".mysqli_error($con)); 
if($_POST)
{
header('location:update.php');
}
mysqli_close($con);

?>