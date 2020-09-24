
<?php session_start();
  
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 

$con=mysqli_connect("localhost","root","","veterinary")  or die("couldn't connect to server".mysqli_connect_error());
 $user=$_SESSION['e-mail'];

$sln1=$_POST['sln1'];
$med1=$_POST['med1'];
$freq1=$_POST['freq1'];
$d1=$_POST['d1'];
$type1=$_POST['type1'];
$dur1=$_POST['dur1'];
$sln2=$_POST['sln2'];
$med2=$_POST['med2'];
$freq2=$_POST['freq2'];
$d2=$_POST['d2'];
$type2=$_POST['type2'];
$dur2=$_POST['dur2'];
$sln3=$_POST['sln3'];
$med3=$_POST['med3'];
$freq3=$_POST['freq3'];
$d3=$_POST['d3'];
$type3=$_POST['type3'];
$dur3=$_POST['dur3'];
$sln4=$_POST['sln4'];
$med4=$_POST['med4'];
$freq4=$_POST['freq4'];
$d4=$_POST['d4'];
$type4=$_POST['type4'];
$dur4=$_POST['dur4'];

$genrl=$_POST['genrl'];
$adv=$_POST['advice'];
$xtra=$_POST['xtra'];

$q="update clientdetails set callbtn='0' where email='$user'";
$res=mysqli_query($con,$q) or die("query failed".mysqli_error($con));

$q3="select * from clientdetails where email='$user'";
 $ret= mysqli_query( $con,$q3 );
while($row = mysqli_fetch_array($ret, MYSQL_ASSOC)) {

$msg="<html>
<head>
<style>
.main
{
font-family:Engravers MT;
text-align:center;

}
#head
{
font-family:Engravers MT;
font-size:15px;
text-align:center;
border-bottom:1px solid #ddd;
padding:10px;
background-color:grey;
}
#data
{
font-family:Engravers MT;
font-size:12px;
text-align:left;
border-bottom:1px solid #ddd;
padding:10px;
background-color:ebebeb;


}

#tble
{
padding:35px;
cells
cellspacing:26px;
}

.genral
{
background-color:ebebeb;

}
.advice
{
background-color:ebebeb;

}
.details
{
background-color:ebebeb;


}
.header
{
height:12px;
border:0;
box-shadow:inset 0 12px 12px -12px rgba(0,0,0,0.5);
}
.heading
{
font-size:25px;
color:8666ba;
}
.footer
{
font-size:25px;
text-align:center;
background-color:red;
}
.table
{
width:100%;
}
.det
{
text-align:left;
}
</style>
</head>
<body>
<div class='main'>
<h1>Dr.Pramudha Devi's Care</h1>
<p>Registered Veterinary Practitioner<br>
Under the Indian Veterinary Council Act 1984,Central Act 52 of 1984<br>
M.I.G 78,Gandhi Nagar,Kadavanthra P O,Ernakulam


</p>
<hr class='header'>
</div>

<div class='date'>Date:</div>
<br>

<div class='details'>
<table class='table'>

	<tr>
	   <td class='det'>Name:</td>
	   <td class='det'>{$row['name']}</td>
	   <td class='det'>Phone:</td>
	   <td class='det'>{$row['phone']}</td>
	 </tr>  		
	<tr>
	   <td class='det'>Address:</td>
	   <td class='det'>{$row['address']}</td>
	   <td class='det'>Breed:</td>
	   <td class='det'>{$row['breed']}</td>
	   	 </tr>  		
	<tr>
	   <td class='det'>Age:</td>
	   <td class='det'>{$row['age']}</td>
	   <td class='det'>Colour:</td>
	   <td class='det'>{$row['colour']}</td>
	   	 </tr>  		
	<tr>
	   <td class='det'>Weight:</td>
	   <td class='det'>{$row['weight']}</td>
	   <td class='det'>sex:</td>
	   <td class='det'>{$row['sex']}</td>
	   	 </tr>  		

</table>
</div>

<br>
<div class='genral'>
<p  class='heading'>General Examination:</p>
<br>
$genrl
</div>
<div class='container'>


<p  class='heading'>Rx:-</p>
<table id='tble'>
	<tr>
	   <th id='head'>Sl.No.</th>
	   <th id='head'>Medicine</th>
	   <th id='head'>Frequency</th>
	   <th id='head'>Dose</th>
	   <th id='head'>Type</th>
	   <th id='head'>Duration</th>

	 </tr>  		
	<tr>
	   <td id='data'>$sln1</td>
	   <td id='data'>$med1</td>
	   <td id='data'>$freq1</td>
	   <td id='data'>$d1</td>
	   <td id='data'>$type1</td>
	   <td id='data'>$dur1</td>
	 </tr>  		
	<tr>
	   <td id='data'>$sln2</td>
	   <td id='data'>$med2</td>
	   <td id='data'>$freq2</td>
	   <td id='data'>$d2</td>
	   <td id='data'>$type2</td>
	   <td id='data'>$dur2</td>
	 </tr>  		
	<tr>
	   <td id='data'>$sln3</td>
	   <td id='data'>$med3</td>
	   <td id='data'>$freq3</td>
	   <td id='data'>$d3</td>
	   <td id='data'>$type3</td>
	   <td id='data'>$dur3</td>
	 </tr>  		
	<tr>
	   <td id='data'>$sln4</td>
	   <td id='data'>$med4</td>
	   <td id='data'>$freq4</td>
	   <td id='data'>$d4</td>
	   <td id='data'>$type4</td>
	   <td id='data'>$dur4</td>
	 </tr>  		


</table>
$xtra
</div>
<div class='advice'>
<p  class='heading'>Advice:</p>
<br>

$adv

<br><br><br><br><br>
</div>
<div class='footer'>www.drpramudhadeviscare.com</div>
<br><br><br><br>

</body>
</html>";



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
  
    $mail->setFrom('drpramudhadeviscare@gmail.com', 'Dr.Pramudha Devi');            
    $mail->addAddress($user); 
    $mail->addAddress($user); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Prescription From Dr.Pramudha Devis Care'; 
   $mail->MsgHTML($msg);






   		 $mail->send(); 		    
header('Location:index.php');
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

 }
mysqli_close($con);

?>

 