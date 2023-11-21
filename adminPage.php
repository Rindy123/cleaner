<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style>
		
		body {
  			font-family: Arial, Helvetica, sans-serif;
  			background-image: url("back11.jpg");
  			background-repeat: no-repeat;
  			background-attachment: fixed; 
  			background-size: 100%;
			}

		.navbar {
  			overflow: hidden;
  			background-color: #01a421;
			margin-top:10px;
			}

		.navbar a {
  			float: left;
  			font-size: 14px;
  			color: white;
  			text-align: center;
  			padding: 14px 55px;
  			text-decoration: none;
			}

		.navbar a:hover {
 			 background-color: #010048;
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
		
		
		.dropbtn {
		  background-color: black;
		  color: white;
		  margin-top: 100px;
		  padding: 30px;
	      width: 1505px;
		  font-size: 24px;
		  border: none;
		  cursor: pointer;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 1505px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-align: center;
		  font-size: 20px;
		  text-decoration: none;
		  
		  display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
		  display: block;
		}

		.dropdown:hover .dropbtn {
		  background-color: red;
		}
		.card{
			display: inline-block;
			margin-top:50px;
			margin-left: 70px;
		}
		
	</style>

</head>
	
<body>
	
	<div>
		
	<img src="logo1.png" alt="Organic Batch" width="120" height="120" >
	
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
			<a href="adminLogin.php">LOGOUT</a>

		</div>
		
	</div>
	<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="e1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Owner info View</h5>
    <p class="card-text">In hear you can Add,Delete and view any "Owner" information. click the below button</p>
    <a href="adminOption1.php" class="btn btn-primary">Owners Details</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="e2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Cleaner info View</h5>
    <p class="card-text">In hear you can Add,Delete and view any "Cleaner" information. click the below button</p>
    <a href="adminOption2.php" class="btn btn-primary">Cleaner Details</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="e3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Appointments info View</h5>
    <p class="card-text">In hear you can Add and view any "Appointments" information. click the below button</p>
    <a href="adminOption3.php" class="btn btn-primary">Appointments Details</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="e4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Appointments Details</h5>
    <p class="card-text">In hear you view all the cleaners "Appointments" information. click the below button</p>
    <a href="adminOption4.php" class="btn btn-primary">Appointments Schedule</a>
  </div>
</div>
	
<div style="margin-top: 300px;"><?php include('footer.php') ?></div>

</body>
</html>
