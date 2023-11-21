<!DOCTYPE html>
<html>
	
<!--head of the top section-->

	<?php include('head.php') ?> 
	
	<head>

<style>
			
.hovereffects{
   width: 100%;
   height: 100%;
   overflow: hidden;
   position: relative;
   text-align: center;
   cursor: default;
   margin-bottom: 15px;
}

.hovereffects .overlay{
	width: 100%;
	height: 100%;
	position: absolute;
	overflow: hidden;
	top: 0;
	left: 0;
	opacity: 0;
	background-color: rgba(0,0,0,0.5);
	-webkit-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out
}

.hovereffects img{
	display: block;
	position: relative;
	-webkit-transition: all .4s linear;
	transition: all .4s linear;
}

.hovereffects h2{
	text-transform: uppercase;
	color: #fff;
	text-align: center;
	position: relative;
	font-size: 17px;
	background: rgba(0,0,0,0.6);
	-webkit-transform: translateY(-100px);
	-ms-transform: translateY(-100px);
	transform: translateY(-100px);
	-webkit-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	padding: 15px;
}

.hovereffects a.info{
	text-decoration: none;
	display: inline-block;
	text-transform: uppercase;
	color: #fff;
	border:1px solid #fff;
	background-color: transparent;
	opacity: 0;
	filter: alpha(opacity=0);
	-webkit-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	margin: 50px 0 0;
	padding: 7px 14px;
}

.hovereffects a.info:hover{
	box-shadow: 0 0 5px #fff;

}

.hovereffects:hover img{
	-ms-transform: scale(1.2);
	-webkit-transform: scale(1.2);
	transform: scale(1.2);
}

.hovereffects:hover .overlay{
	opacity: 1;
	filter: alpha(opacity=100);
}

.hovereffects:hover h2, .hovereffects:hover a.info{
	opacity: 1;
	filter: alpha(opacity=100);
	-ms-transform: translateY(0);
	-webkit-transform: translateY(0);
	transform: translateY(0);
}

.hovereffects:hover a.info{
	-webkit-transition-delay: .2s;
	transition-delay: .2s;
}

.text-center{
	color: #fff;
}
		
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
	
<body>
	
	<div class="mainsection">
		
	<img src="logo1.png" alt="Organic Batch" width="110" height="110" style="width:145px">
      
    		<div class="header">
      			<h1 class="nahosl">Handy Cleaning Clinic Service SriLanka</h1>
      			<h2 class="dep">"WE CAN PROVIDE BEST CLEANING SERVICE FOR YOU"</h2>
    		</div>

    		<div class="navbar">
      			<a href="index.php">HOME</a>
      			<a href="companyDetails.php">COMPANY DETAILS</a>
      			<a class="active" href="service.php">BOOK SERVICE</a>
      			<a href="gallery.php">GALLERY</a>
     			<a href="aboutUs.php">ABOUT US</a>
      			<a href="contactUs.php">CONTACT US</a>
		
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
	
	<h2 class="text-center" style="font-family: monospace;">BOOK SERVICE</h2>
<br><br>
<div class="container">
<div class="row">

<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="hovereffects">
		<img src="1.jpg" height="330px" width="100%" alt="images">
		<div class="overlay">
			<h2>Garden cleaning service</h2>
			<a class="info" href="query.php">more info</a>
		</div>
	</div>

</div>


<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="hovereffects">
		<img src="2.jpg" height="330px" width="100%" alt="images">
		<div class="overlay">
			<h2>Garage cleaning service</h2>
			<a class="info" href="query.php">more info</a>
		</div>
	</div>

</div>




<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="hovereffects">
		<img src="3.jpg" height="330px" width="100%" alt="images">
		<div class="overlay">
			<h2>Indoor cleaning service</h2>
			<a class="info" href="query.php">more info</a>
		</div>
	</div>

</div>



<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="hovereffects">
		<img src="4.jpg" height="330px" width="100%" alt="images">
		<div class="overlay">
			<h2>Apartment cleaning service</h2>
			<a class="info" href="query.php">more info</a>
		</div>
	</div>

</div>



<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="hovereffects">
		<img src="5.jpg" height="330px" width="100%" alt="images">
		<div class="overlay">
			<h2>Deep cleaning service</h2>
			<a class="info" href="query.php">more info</a>
		</div>
	</div>

</div>



<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="hovereffects">
		<img src="6.jpg" height="330px" width="100%" alt="images">
		<div class="overlay">
			<h2>Move in/out service</h2>
			<a class="info" href="query.php">more info</a>
		</div>
	</div>

</div>

</div>
</div>

	<?php include('footer.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	

</body>
</html>
