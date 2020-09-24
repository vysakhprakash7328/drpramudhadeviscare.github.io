<html>
<head>
<!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

<style>
table{
	border-collapse: collapse;
	width:100%;
     }
th, td{
	padding: 8px;
	text-align: left;
	border-bottom: 1px solid #ddd;
      }
th{font-size:30px}
button{
	font-family: OpenSans-Bold;
	font-size: 15px;
	color: #fff;
 	line-height: 1.2;
	href="video embed.php";
      }
#heros {
  width: 100%;
  height: 100vh;
  background: url(../img/pug.png) top center;
  background-size: cover;
  position: relative;
}
#heros .heros-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}
</style>


</head>
<body>
   <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <h3 align="center">MY ADMIN <h3>
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Heros Section
  ============================-->
  <section id="heros">
    <div class="heros-container">
      




<?php
$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error());
   $date=date("d/m/Y");
   
   $sql = "SELECT name, district,phone,file,message FROM clientdetails where date='$date'";
   $retval = mysqli_query( $con,$sql );
   ?>
<table>
<tr>
 <th>Name</th>
                                                <th>Phone number</th>
                                                <th>Address</th>
                                                <th>Breed</th>
                                                <th>Age</th>
                                                <th>Colour</th>
						<th>Weight</th>
						<th>Sex</th>
						<th>Date</th>
						<th>Time</th>
						<th>File</th>
						</tr>
<?php 
   while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
     echo "  <tr><td> {$row['name']}  </td> ".
         "<td> <?php {$row['phone']} ?> </td>". 
	 "<td> <?php {$row['address']} ?> </td>".
	 "<td> <?php {$row['breed']} ?> </td>".
	 "<td> <?php {$row['age']} ?> </td> ".
	 "<td> <?php {$row['colour']} ?> </td>". 
	 "<td> <?php {$row['weight']} ?> </td> ".
	 "<td> <?php {$row['sex']} ?> </td> ".
	 "<td> <?php {$row['date']} ?> </td> ".
	 "<td> <?php {$row['time']} ?> </td> ".
	" <td> <?php {$row['file']} ?> </td> "; ?> 
<td><a href="adminlogin/videocalladmin.php">call now</td></tr> 
<?php
   }
?>
   

</table>
<?php

   
   mysqli_close($con);
?>

    </div>
  </section><!-- #hero -->

</body>
</html>