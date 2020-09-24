 <?php session_start();
$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error());
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$breed=$_POST['breed'];
$age=$_POST['age'];
$clr=$_POST['colour'];
$wght=$_POST['weight'];
$sex=$_POST['sex'];
$mail=$_SESSION['sess_user'];
$ins="insert into clientdetails(email,name,phone,address,breed,age,colour,weight,sex) values('$mail','$name','$phone','$address','$breed','$age','$clr','$wght','$sex')";
mysqli_query($con,$ins) or die("query failed".mysqli_error($con)); 
if($_POST)
{
header('Location:profile/index.php');

}
mysqli_close($con);

?>