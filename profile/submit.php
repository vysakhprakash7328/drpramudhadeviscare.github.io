<?php session_start();

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 


$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error()); 
$user=$_SESSION['sess_user'];
 

$date=$_POST['date'];
$time=$_POST['time'];
if($_POST)
{
$q="select * from leavedate where leavedate='$date'";
   $check = mysqli_query($con,$q) or die("query failed".mysqli_error($con)); 
if(mysqli_fetch_array($check))
{?>
<script>
alert('Dr pramudha Devi is busy on this date.Please take another day for appointment');
</script>
<?php
}
else
{
$ins = "update clientdetails set date='$date' where email='$user' ";
   $res = mysqli_query($con,$ins) or die("query failed".mysqli_error($con)); 
$insrt = "update clientdetails set time='$time' where email='$user'";
   $reslt = mysqli_query($con,$insrt) or die("query failed".mysqli_error($con)); 
 $link="select paylink from paymentlink";
$res=mysqli_query($con,$link) or die("query failed".mysqli_error($con)); 
$row=mysqli_fetch_array($res);
$pay=$row[0];
if($_POST)
{

$mail = new PHPMailer(true); 
  
try {
    
			 
    $mail->SMTPDebug = 0;                                        
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com;';                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'drpramudhadeviscare@gmail.com';                  
    $mail->Password   = 'drpramudhadevi';                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $mail->setFrom('drpramudhadeviscare@gmail.com', 'Dr.PramudhaDevi');            
    $mail->addAddress('vysakhprakash3@gmail.com'); 
    $mail->addAddress('vysakhprakash3@gmail.com'); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Dr.Pramudha Devis Care'; 
   $mail->MsgHTML("Your client ".$user." take appointment at ".$date.",".$time );			
   		 $mail->send(); 		    
header("location:$pay");
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}
 







  
}}}
mysqli_close($con);

?>
