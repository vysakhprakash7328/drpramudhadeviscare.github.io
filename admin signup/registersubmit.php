<?php 
  
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 

$con=mysqli_connect("localhost","root","","veterinary");

  $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
$pass=md5($password);
if($_POST["email"])
{
session_start();
$_SESSION['user']=$email;
$_SESSION['username']=$name;
$q="SELECT * FROM signup 
	WHERE email = '$email'";
$res=mysqli_query($con,$q) or die("query failed".mysqli_error($con));

if(mysqli_fetch_array($res))
{
?>
<script>
alert('Email already exist');window.location='admin login/login.html';</script>
<?php

}	
else
{
$activation_code = rand(100000,999999);
		
$otp=md5($activation_code);
$msg="<html>
<head>
<style>

h3
{
text-align:center;
}
h2
{
text-align:center;
font-size:26px;
}
p
{
text-align:center;
font-size:16px;
}
h2
{
text-align:center;
font-size:26px;

}
</style>

</head>
<body>
<div class='all'>
<h2>Dr.Pramudha Devi's Care</p>




<h3>Verify Your Email Address</h3>
</div>
<hr>

<div class='content'>
<p>Verify your email address to finish signing up with Dr.Pramudha Devi's Care.Below is your verification code:</p>
<br>
<h2>$activation_code</h2>
<p>The verification code is valid for 10 minutes. </p>
</div>

</body>
</html>";


$mail = new PHPMailer(true); 
  
try {
    
			 
    $mail->SMTPDebug = 0;                                        
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com;';                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'drpramudhadeviscare@gmail.com';                  
    $mail->Password   = 'drpramudhadeviscare';                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $mail->setFrom('drpramudhadeviscare@gmail.com', 'Dr.PramudhaDevi');            
    $mail->addAddress('vysakhprakash3@gmail.com'); 
    $mail->addAddress('vysakhprakash3@gmail.com', 'vpk'); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Email verification'; 
   $mail->MsgHTML($msg);			
   		 $mail->send(); 		    
header('Location:verify.html');
$ins = "INSERT INTO admin login (name, email, password, activation_code) VALUES ('$name', '$email', '$pass', '$otp')";

$res=mysqli_query($con,$ins) or die("query failed".mysqli_error($con));
		
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}} 
}  
?> 