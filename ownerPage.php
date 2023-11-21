<?php include('search.php') ?>

<!DOCTYPE html>
<html>

<head>
	
	<style>
		
		body {
  			font-family: Arial, Helvetica, sans-serif;
  			background-image: url("officer.jpg");
  			background-repeat: no-repeat;
  			background-attachment: fixed; 
  			background-size: 100%;
			}

		.navbar {
  			overflow: hidden;
  			background-color: #01a421;
  			letter-spacing: 1px;
			}

		.navbar a {
  			float: left;
  			font-size: 14px;
  			color: white;
  			text-align: center;
  			padding: 14px 55px;
  			text-decoration: none;
			}

		.dropdown {
  			float: left;
  			overflow: hidden;
			}

		.dropdown .dropbtn {
 			font-size: 14px; 
			letter-spacing: 1px;
  			border: none;
  			outline: none;
  			color: white;
 			padding: 14px 16px;
 			background-color: inherit;
 			font-family: inherit;
  			margin: 0;
			}

		.navbar a:hover, .dropdown:hover .dropbtn {
 			 background-color: #010048;
			}

		.dropdown-content {
 			display: none;
  			position: absolute;
  			background-color: #f9f9f9;
  			min-width: 193px;
  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  			z-index: 1;
			}

		.dropdown-content a {
  			float: none;
  			color: black;
  			text-decoration: none;
  			display: block;
  			text-align: center;
			}

		.dropdown-content a:hover {
  			background-color: #ddd;
			}

		.dropdown:hover .dropdown-content {
 			 display: block;
			}

		.active{
  			background-color: #010048;
			}
		.nahosl{
 			 color: #FFFFFF;
			}
		.dep{
  			text-transform: uppercase;
  			font-size: 24px;
  			color: #FFFFFF;
			padding-bottom:30px;
			}
  
		img{
  			float: right;
			}
		
		
/*		css styles for searching bar*/
		
		.searchsection{
			box-sizing: border-box;
			margin-top: 50px;
			margin-left: 50px;
			margin-bottom: 40px;
		}
		
		form.searchbar input[type=text] {
		  padding: 10px;
		  font-size: 17px;
		  border: 1px solid grey;
		  float: left;
		  width: 30%;
		  background: #f1f1f1;
		}

		form.searchbar button {
		  float: left;
		  width: 5%;
		  padding: 10px;
		  background: #2196F3;
		  color: white;
		  font-size: 17px;
		  border: 1px solid grey;
		  border-left: none;
		  cursor: pointer;
		}

		form.searchbar button:hover {
		  background: #0b7dda;
		}

		form.searchbar::after {
		  content: "";
		  clear: both;
		  display: table;
		}

		.output{
			color: white;
			font-size: 20px;
			margin-top: 20px;
		}
/*		css styles for appoiment form*/
		
			.register-box{
				max-width: 800px;
				float: none;
				margin: 80px auto;
			}

			.registertext{
					text-align: center;
				}

			.register-form{
				background: rgba(211, 211, 211, 0.5);
				font-size: 20px;
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				box-sizing: border-box;

			}	

			.btn-primary {
			  background-color: red;
			  color: white;
			  padding: 14px 20px;
			  margin: 10px 260px;
			  border: none;
			  cursor: pointer;
			  width: 30%;
			}

			button:hover {
			  opacity: 0.8;
			}

			.form-control{
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}

	</style>

</head>
	
<body>
	
	<div>
		
	<img src="logo1.png" alt="Organic Batch" width="120" height="120" style="width:145px">
	
		<div class="header">
  			<h1 class="nahosl">Handy Cleaning Clinic Service SriLanka</h1>
    		<h2 class="dep">"WE CAN PROVIDE BEST CLEANING SERVICE FOR YOU"</h2>
		</div>

		<div class="navbar">
   			<a href="index.php">HOME</a>
			<a href="companyDetails.php">COMPANY DETAILS</a>
			<a href="service.php">BOOK SERVICE</a>
			<a href="gallery.php">GALLERY</a>
  			<a href="aboutUs.php">ABOUT US</a>
  			<a href="contactUs.php">CONTACT US</a>
			<a href="ownerLogin.php">LOGOUT</a>

		</div>
		
	</div>
	
	<div class="searchsection">
		
		<div>
			<form class="searchbar" action="ownerPage.php" method="post">
			  <input type="text" placeholder="Enter date [Monday - Saturday]" name="search">
			  <button type="submit">>></button>
            </form>
			
			<div class="output"><?php print $output ?></div>
			
		</div>
		
	</div>	
	
	<div class="appoinments">
		
	<div class="container">
		<div class="register-box">
		<div class="row">
		<div class="col-md-6 register-form">
			<h2 class="registertext">  Make an Appointment</h2>
			<form action="appointments.php" method="post"> 
				 
				
				<div class="form-group">
					<lable>Owner's full name</lable>
					<input type="text" placeholder="Enter owner's full name" name="fullname" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Field Cleaner's name</lable>
					<input type="text" placeholder="Enter cleaner's name" name="cleaner" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Appoinment Time</lable>
					<input type="text" placeholder="Enter appoinment time" name="time" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Appoinment Date [Mon - Sat]</lable>
					<input type="text" placeholder="Enter appoinment date" name="date" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>NIC Number</lable>
					<input type="text" placeholder="Enter Your National Identity Card Number" name="nic" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Contact Number</lable>
					<input type="text" placeholder="Enter Contact Number" name="contact" class="form-control" required>
					</div>
				
				<button type="submit"  class="btn btn-primary"> Submit </button>
			
			</form>
			
			</div>
        </div>
      </div>
    </div>
		
	</div>
	
	<?php include('footer.php') ?>
	
</body>
</html>
