<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">


<?php
$con=mysqli_connect("localhost","root","","veterinary") or die("couldn't connect to server".mysqli_connect_error());
   $date=date("Y-m-d");
   $sql = "SELECT name,email,phone,address,breed,age,colour,weight,sex,date,time FROM clientdetails where date='$date'";
   $retval = mysqli_query( $con,$sql );

   ?>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">My Admin</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="index.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="#"></a>
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                                                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable (<?php echo $date; ?>  )
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">



                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
                                            <tr>
						<th>Email</th>
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
						
                                            </tr>
					</thead>
					<tfoot>
                                            <tr>
                                                <th>Email</th> 
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
						
						
                                            </tr>
                                        </tfoot>
 
<?php 


   while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {

    echo " <tbody><form method='POST' action='calling.php'> <tr><td><input type='text' value='{$row['email']}' name='user'></td> ".
        "<td> {$row['name']}   </td>".  
	"<td> {$row['phone']}   </td>". 
	 "<td>  {$row['address']}  </td>".
	 "<td>  {$row['breed']}  </td>".
	 "<td>  {$row['age']}  </td> ".
	 "<td>  {$row['colour']}  </td>". 
	 "<td>  {$row['weight']}  </td> ".
	 "<td>  {$row['sex']}  </td> ".
	 "<td>  {$row['date']}  </td> ".
	 "<td>{$row['time']}    </td>  "; ?> 
<td><button type='submit'>call now</button></td></tr></form></tbody> 
<?php
   }
?>
                
                                    </table>
<?php

   
   mysqli_close($con);
?>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
