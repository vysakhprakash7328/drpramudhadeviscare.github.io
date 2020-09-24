<!DOCTYPE html>
<html lang="en">
<?php session_start();

$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error()); 
$user=$_SESSION['sess_user'];

   ?>

<head>
	<meta charset="utf-8">
	<title>Your Profile</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!-- 
Easy Profile Template
http://www.templatemo.com/tm-467-easy-profile
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-blue.css">
<link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
<link rel="stylesheet" href="css/style.css">




<style>
#left
{
float:left;
width:50%;
}
#right
{
float:right;
width:50%;
}
p {
  text-align: center;
  font-size: 30px;
  margin-top: 0px;
}
h2
{
color:blue;
font-size: 25px;

}

</style>







</head>
<body data-spy="scroll" data-target=".navbar-collapse">



    


<!-- preloader section -->
<div class="preloader">
<h2>Dr.PramudhaDevi's Care</h2>
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- header section -->
<header>
	<div class="container">
	

<nav id="nav-menu-container">


        <ul class="nav-menu">
	  <li class="menu-active"><a href="../main2.html">Home</a></li>
          <li ><a href="#date">Take your date</a></li>
          <li><a href="../logout.php">Logout</a></li>
           </ul>
      </nav><!-- #nav-menu-container -->


		<div class="row">
			<div class="col-md-12 col-sm-12">
				
<?php 
// Include the database configuration file  
require_once 'file upload/dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT profile FROM clientdetails where email='$user'"); 
?>

<img src="images/admin.jpg"  class="img-responsive img-circle tm-border"  alt=""images/admin.jpg"" /> 
	
<hr>
	</div><h1 class="tm-title bold shadow">Hi, I am </h1>
				<h1 class="white bold shadow"><?php echo $user;  ?></h1>
<form method="POST" action="usercalling.php">

<?php

$sel="select callbtn from clientdetails where email='$user'";
$selres=mysqli_query( $con,$sel );

if ($row=mysqli_fetch_array($selres, MYSQL_ASSOC))
{
$display="{$row['callbtn']}"; 
if( $display=='1')
{
echo'<input name="" type="submit"  value="callnow" />';
 }
else
{
echo "<p id='demo'></p>";
}

}
?>
</form>

			</div>
		</div>
 
	</div>
</header>





<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">My info</h3>
				<h2></h2>
				<p> 
<table>

<?php
 $sql = "SELECT name,phone,address FROM clientdetails where email='$user' ";
   $retval = mysqli_query( $con,$sql );

while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {

    echo "<tr><td> Name</td><td> :{$row['name']}  </td></tr>".
         "<tr><td>Phone</td><td>:{$row['phone']}</td></tr>". 
	 "<tr><td>Address</td><td>:{$row['address']} </td></tr> ";}?>
	
</table>




</p>
					
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">My Breed Info</h2>
<table>
<?php
 $query = "SELECT breed,age,colour,weight,sex FROM clientdetails where email='$user' ";
   $ret = mysqli_query( $con,$query );

while($row = mysqli_fetch_array($ret, MYSQL_ASSOC)) {

    echo "<tr><td>Breed</td><td>:{$row['breed']}</td></tr> ".
	 "<tr><td>Age</td><td> :{$row['age']}</td></tr> ".
	 "<tr><td>Colour</td><td>:{$row['colour']}</td></tr> ". 
	 "<tr><td>Weight</td><td>:{$row['weight']}</td></tr>   ".
	 "<tr><td>Sex</td><td>  :{$row['sex']}</td></tr>  "; }?> 


</table>



			</div>
		</div>
	</div>
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="education">
				<h2 class="white">Any file to upload???</h2>
					<div class="education-content">
			<div id="left">			
<form action="file upload/upload.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
</form>
</div>
<div id="right">
your currently uploaded files

<?php 
// Include the database configuration file  
require_once 'file upload/dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image,uploaded FROM images where email='$user' ORDER BY uploaded DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
           <a href="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">img</a> 
		<?php echo "{$row['uploaded']}"; ?>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>



</div>


		</div>
</div>
		</div>
		<div class="col-md-4 col-sm-12" id="date">
			<div class="languages">
				<h2>Make New Appointment</h2>
(you need to pay a small amout to take an appointment)
			(10:00 to 17:00)			
<form method="post" action="submit.php">
		<div class="row">
    					
									<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="date" style="format:'d/m/Y'" class="form-control appointment_date" placeholder="y/m/d" name="date" id="date">
		            		</div>
			    				</div>
								</div>
					<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
			            		<input type="time" style="formatTime:'g:ia'" class="form-control appointment_time" placeholder="Time" name="time">
		            		</div>
			    				</div>
								</div>
						
									</div>	
								<div class="form-group">
			              <input type="submit" value="Add" class="btn btn-primary py-3 px-4" align="center">
			            </div>
</div>
					
			</form>		

					</div>
		</div>
	</div>


</section>
<?php
 $q2 = "SELECT date,time FROM clientdetails where email='$user' ";
   $ret2 = mysqli_query( $con,$q2 );
while($row = mysqli_fetch_array($ret2, MYSQL_ASSOC)) {


echo "<script>
// Set the date we're counting down to
var countDownDate = new Date('{$row['date']},{$row['time']}').getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id='demo'
  document.getElementById('demo').innerHTML = days + 'd ' + hours + 'h '
  + minutes + 'm ' + seconds + 's ';
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById('demo').innerHTML = 'Waiting for you turn....';
  }
}, 1000);
</script>";
}
?>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/profquery.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script>
  $(function()
	{
		$("#date").datepicker();
		$("#date").datepicker
		({
			dateFormat: "dd-mm-yyyy"
		});
	</script>




<?php
  mysqli_close($con);
?>



</body>
</html>
