<!DOCTYPE html>
<html>
	
<!--	head of the top section-->
	<?php include('head.php') ?> 
	
	<head>
		<style>
			.contact{
				color: white;
				font-size: 20px;
				margin-left: 80px;
			}
			
			.locationpic{
				text-align: center;
				color: white;
				margin-top: 70px;
			}
			
			.map{
			  display: flex;
			  margin-left: 17%;
			  margin-right: 12%;				
			}
		</style>
	</head>
	
<body>
	
	<div class="mainsection">
		
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
      			<a class="active" href="contactUs.php">CONTACT US</a>
		
      				<div class="dropdown">
		  
        				<button class="dropbtn">LOGIN OR REGISTER </button>
        
        					<div class="dropdown-content">
          						<a href="ownerLogin.php">OWNER</a>
          						<a href="cleanerLogin.php">CLEANER</a>
          						<a href="adminLogin.php">ADMIN</a>
        					</div>
     				</div> 
    		</div>
	</div>
	
	<div class="contact">
		<h3>Contact us</h3>
		<h3>Address : Handy cleaning clinic colombo 7</h3>
		<h3>Telephone Numbers : +94 11 25 67163 / +94 512 388333</h3>
		<h3>Fax : +94 812 388335</h3>
		<h3>Email : handy200@gmail.com</h3>
		
	</div>
	
	<div class="locationpic">
		<h1>Our Company locations</h1>
	</div>

	<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.979929042696!2d79.86327817701545!3d6.921059669988175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2599c2f221b39%3A0x6c9adc49390e32a9!2sCleaning%20Services%20in%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1681553033933!5m2!1sen!2slk" width="1000" height="490" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php include('footer.php') ?>
	
</body>
</html>
