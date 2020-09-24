<!DOCTYPE html>
<html lang="en">
<?php session_start();

$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error()); 
$user=$_SESSION['sess_user'];
   


   ?>

<head>
	<meta charset="utf-8">
	<title>Easy Profile Blue - templatemo</title>
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

</head>
<body data-spy="scroll" data-target=".navbar-collapse">



    


<!-- preloader section -->
<div class="preloader">
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
          <li><a href="../logout.php">Logout</a></li>
           </ul>
      </nav><!-- #nav-menu-container -->


		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="images/admin.jpg" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
				<hr>
	</div><h1 class="tm-title bold shadow">Hi, I am </h1>
				<h1 class="white bold shadow"><?=$_SESSION['sess_user'];?></h1>
			</div>
		</div>
 
	</div>
</header>





<!-- about and skills section -->
<section class="container">

  <iframe
        src="https://tokbox.com/embed/embed/ot-embed.js?embedId=ddae90d2-3ae3-4317-b39b-bdf771f5818c&room=DEFAULT_ROOM&iframe=true"
        width="1200px"
        height="840px"
        scrolling="auto"
        allow="microphone; camera"
align="center"      
></iframe>





</section>


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
