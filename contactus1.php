<?php 
  
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 


  $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

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
    $mail->addAddress('vysakhprakash3@gmail.com', 'vysakhprakash'); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = "$subject from $email,$name"; 
   $mail->MsgHTML($message );			
   		 $mail->send(); 		    
header('Location:main.html');
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}  
?> 