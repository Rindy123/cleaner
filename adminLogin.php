<!DOCTYPE html>
<html>

	<!--	head of the top section-->
	<?php include('head.php') ?> 

<head>
<style>	
/*	Styles for the login and registration form*/


	.login-box{
	max-width: 400px;
	float: none;
	margin: 80px auto;
}
	
.logintext{
		text-align: center;
	}

.login-left{
	background: rgba(211, 211, 211, 0.5);
	font-size: 24px;
	width: 100%;
  	padding: 12px 20px;
  	margin: 8px 0;
  	display: inline-block;
  	border: 1px solid #ccc;
  	box-sizing: border-box;
	
}	
	
button {
  background-color: rgba(211, 211, 211, 0.5);
  color: black;
  font-size: 18px;
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
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

.btn{
  margin-top: 50px;
  border-radius: 30px;
  cursor: pointer;
  background-color: #3287fc;
  font-weight: bold;
  font-size: 16px;
  color: white;
  border:none;
  transition: all .5s ease-in-out;

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
	
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left">
			<h2 class="logintext"> Login For Admin </h2>
			<form action="adminValidation.php" method="post"> 
				
				<div class="form-group">
					<lable>Username</lable>
					<input type="text" placeholder="Enter Username" name="username" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Password</lable>
					<input type="password" placeholder="Enter Password" name="password" class="form-control" required>
					</div>
				
				<button type="submit"  class="btn btn-primary" > Login </button>
				
			</form>
			
			</div>
        </div>
      </div>
    </div>

		<?php include('footer.php') ?>
</body>
</html>
