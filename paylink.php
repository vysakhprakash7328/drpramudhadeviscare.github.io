 <?php
$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error());
   $link="select paylink from paymentlink";
$res=mysqli_query($con,$link) or die("query failed".mysqli_error($con)); 
$row=mysqli_fetch_array($res);
$pay=$row[0];
echo $pay;
header("location:$pay");

mysqli_close($con);

?>