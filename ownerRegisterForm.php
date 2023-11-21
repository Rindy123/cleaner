<!DOCTYPE html>
<html>
	
	<!--	head of the top section-->
	<?php include('head.php') ?> 	
	
<head>
<style>	
/*	Styles for the login and registration form*/

	.register-box{
	max-width: 600px;
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
  margin: 10px 200px;
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
		<div class="register-box">
		<div class="row">
		<div class="col-md-6 register-form">
			<h2 class="registertext"> Owner Registration Form </h2>
			<form action="ownerRegistration.php" method="post"> 
				
				<div class="form-group">
					<lable>Username*</lable>
					<input type="text" placeholder="Enter Your Username" name="username" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Password*</lable>
					<input type="password" placeholder="Enter Your Password" name="password" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Re-Enter Password*</lable>
					<input type="password" placeholder="Re-Enter Your Password" name="rePassword" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>First Name*</lable>
					<input type="text" placeholder="Enter Your First Name" name="fName" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Middle Initial</lable>
					<input type="text" placeholder="Enter Your Middle Initial" name="midInitial" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Last Name*</lable>
					<input type="text" placeholder="Enter Your Last Name" name="lName" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Age*</lable>
					<input type="text" placeholder="Enter Your Age" name="age" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Gender*</lable>
					<input type="text" placeholder="Enter Your Gender" name="gender" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Address*</lable>
					<input type="text" placeholder="Enter Your Address" name="address" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>NIC Number*</lable>
					<input type="text" placeholder="Enter Your National Identity Card Number" name="nic" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>Contact Number*</lable>
					<input type="text" placeholder="Enter Contact Number" name="contact" class="form-control" required>
					</div>
				
				<div class="form-group">
					<lable>E-mail*</lable>
					<input type="text" placeholder="Enter E-mail Address" name="email" class="form-control" required>
					</div>
				
				<button type="submit"  class="btn btn-primary"> Register </button>
			
			</form>
			
			</div>
        </div>
      </div>
    </div>

		<?php include('footer.php') ?>
</body>
</html>
