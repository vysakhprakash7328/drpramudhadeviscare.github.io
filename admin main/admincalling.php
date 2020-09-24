<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
   
  <style>
.leftbox
{
float:left;
width:65%;
}
.rightbox
{
float:right;
width:35%;
}
.main
{
font-family:Engravers MT;
text-align:center;

}
#head
{
font-family:Engravers MT;
font-size:10px;
text-align:center;
border-bottom:1px solid #ddd;
padding:10px;
background-color:grey;
}
#data
{
font-family:Engravers MT;
font-size:15px;
text-align:left;
border-bottom:1px solid #ddd;
padding:10px;
background-color:ebebeb;


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
#input
{
width="10px";

}
#btn
{
background-color:red;
border:none;
color:white;
padding:16px 32px;
text-decoration:none;
margin:4px 2px;
cursor:pointer;
positon:absolute;

}


</style>

 </head>
    <body class="sb-nav-fixed">
<?php session_start();
$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error());
  $mail=$_SESSION['e-mail'];
   
   ?>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">My Admin</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
               <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="update.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Update
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Created by</div>
                        VPK
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin Calling...</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                               Calling... 
                            </div>
                            <div class="boxes">
                    <div class="leftbox">
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>

                        <iframe
        src="https://tokbox.com/embed/embed/ot-embed.js?embedId=ddae90d2-3ae3-4317-b39b-bdf771f5818c&room=DEFAULT_ROOM&iframe=true"
        width="800px"
        height="900px"
        scrolling="auto"
        allow="microphone; camera"
      ></iframe>
    


</div>                      
     <div class="rightbox">
<div class="main">
<h1>Dr.Pramudha Devi's Care</h1>
<p>Registered Veterinary Practitioner<br>
Under the Indian Veterinary Council Act 1984,Central Act 52 of 1984<br>
M.I.G 78,Gandhi Nagar,Kadavanthra P O,Ernakulam
</p>
<hr class="header">
</div>
<div class="date">Date:</div>
<br>

<div class="details">
<table class="table">

<?php

$q3="select * from clientdetails where email='$mail'";
 $ret= mysqli_query( $con,$q3 );
 while($row = mysqli_fetch_array($ret, MYSQL_ASSOC)) {

echo "<tr> <td class='det'>Name:</td>".
	   "<td class='det'>{$row['name']}</td>".
	   "<td class='det'>Phone:</td>".
	   "<td class='det'>{$row['phone']}</td>".
	 "</tr>".	
	"<tr> <td class='det'>Address:</td>".
	   "<td class='det'>{$row['address']}</td>".
	   "<td class='det'>Breed:</td>".
	   "<td class='det'>{$row['breed']}</td>".
	 "</tr>".		
	"<tr> <td class='det'>Age:</td>".
	   "<td class='det'>{$row['age']}</td>".
	   "<td class='det'>Colour:</td>".
	   "<td class='det'>{$row['colour']}</td>".
	 "</tr>".		
	"<tr> <td class='det'>Weight:</td>".
	   "<td class='det'>{$row['weight']}</td>".
	   "<td class='det'>Sex:</td>".
	   "<td class='det'>{$row['sex']}</td>".
	 "</tr>";?>		
<?php

}
mysqli_close($con);
?>
	

</table>
</div>
<br>
<div class="genral">
<form method="post" action="prescription.php">
<p  class="heading">General Examination:</p>
<textarea cols="56" rows="2" name="genrl"></textarea>
</div>


<div class="container">


<p  class="heading">Rx:-</p>
<table id="tble">
	<tr>
	   <th id="head">Sl.No.</th>
	   <th id="head">Medicine</th>
	   <th id="head">Frequency</th>
	   <th id="head">Dose</th>
	   <th id="head">Type</th>
	   <th id="head">Duration</th>

	 </tr>  		
	<tr>
	   <td id="data"><input type="text" name="sln1" value="1" size="2"></td>
	   <td id="data"><input type="text" name="med1"  size="10"></td>
	   <td id="data"><input type="text" name="freq1"  size="4"></td>
	   <td id="data"><input type="text" name="d1"  size="2"></td>
	   <td id="data"><input type="text" name="type1"  size="4"></td>
	   <td id="data"><input type="text" name="dur1"  size="4"></td>

	 </tr>  		
<tr>
	   <td id="data"><input type="text" name="sln2" value="2" size="2"></td>
	   <td id="data"><input type="text" name="med2"  size="10"></td>
	   <td id="data"><input type="text" name="freq2"  size="4"></td>
	   <td id="data"><input type="text" name="d2"  size="2"></td>
	   <td id="data"><input type="text" name="type2"  size="4"></td>
	   <td id="data"><input type="text" name="dur2"  size="4"></td>

	 </tr>  		
<tr>
	   <td id="data"><input type="text" name="sln3" value="3" size="2"></td>
	   <td id="data"><input type="text" name="med3"  size="10"></td>
	   <td id="data"><input type="text" name="freq3"  size="4"></td>
	   <td id="data"><input type="text" name="d3"  size="2"></td>
	   <td id="data"><input type="text" name="type3"  size="4"></td>
	   <td id="data"><input type="text" name="dur3"  size="4"></td>

	 </tr>  		
<tr>
	   <td id="data"><input type="text" name="sln4" value="4" size="2"></td>
	   <td id="data"><input type="text" name="med4"  size="10"></td>
	   <td id="data"><input type="text" name="freq4"  size="4"></td>
	   <td id="data"><input type="text" name="d4"  size="2"></td>
	   <td id="data"><input type="text" name="type4"  size="4"></td>
	   <td id="data"><input type="text" name="dur4"  size="4"></td>

	 </tr>  		

</table>
<textarea cols="56" rows="1" name="xtra" ></textarea>
</div>
<div class="advice">
<p  class="heading">Advice:</p>
<textarea cols="56" rows="2" name="advice"></textarea>

</div>
								 

		              <?php 
// Include the database configuration file  
require_once 'file upload/dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image,uploaded FROM images where email='$mail' ORDER BY uploaded DESC"); 
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


<input type="submit" value="send" id="btn">
</form>





</div>



               
             </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"></div>
                            <div>
                                </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
