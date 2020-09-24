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
      

          



<div class="row">
                    <div class="col-sm-12 col-lg-5 offset-lg-1">
                        <iframe
        src="https://tokbox.com/embed/embed/ot-embed.js?embedId=ddae90d2-3ae3-4317-b39b-bdf771f5818c&room=DEFAULT_ROOM&iframe=true"
        width="800px"
        height="640px"
        scrolling="auto"
        allow="microphone; camera"
      ></iframe>
    
                            </div>

                      
                    <div class="col-lg-5 col-md-8">
			
            <div class="form">
              <h2 class="mb-4">Make your Appointment</h2>
    				<form action="clientdetails.php" class="appointment" method="post">
    					<div class="row">
    						
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Your Name" name="name" required>
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="phonenumber" name="phone" required>
			            </div>
								</div>
							</div>
								
				<div class="col-md-12">
									<div class="form-group">
			              <textarea name="address" id="txtarea" cols="30" rows="5" class="form-control" placeholder="Your Address" required></textarea>
			            </div>
								</div>
				
								<div class="row">
    						
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Breed" name="breed" required>
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="age" name="age" required>
			            </div>
								</div>
					
					</div>
									<div class="row">
    						
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="colour" name="colour" required>
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Weight" name="weight" required>
			            </div>
								</div>
							</div>
					
					<div class="row">
    						
								<div class="col-md-12">
									<div class="form-group">
					<select name="sex" class="form-control" required>
					<option value="male">Sex</option>
					<option value="male">Male</option>
					<option value="male">Female</option>			              
			            	</select>
					</div>
								</div>
									
					
					</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-"></span></div>
			            		<input type="file" class="form-control " name="file" required>
		            		</div>
			    				</div>
								</div>
											<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Make appointment" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
 </div>
          </div>
</div>
</div>

  </section><!-- #hero -->


</body>
</html>