<!DOCTYPE html>

<html>

<head>
	
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
		
/*		styles for table*/
			table {
			  border-collapse: collapse;
			  width: 100%;
			  margin-top: 40px;
			}

			th{
			  text-align: center;
			  padding: 10px;
			  background-color: #000000;
			  font-size: 20px;
			  letter-spacing: 1px;
			  color: white;
			}
			
			td{
			  text-align: center;
			  padding: 10px;
			  font-size: 16px;
			}
		
			tr{
				background-color: whitesmoke;
			}

			tr:nth-child(even) {
			  background-color: whitesmoke;
			}		
		
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
.table1{
	color:white;
}
		
	</style>

</head>
	
<body>
		
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
			<a href="adminLogin.php">LOGOUT</a>

		</div>
		
	<div class="container">
		<div class="register-box">
		<div class="row">
		<div class="col-md-6 register-form">
			<h2 class="registertext">  OWNER's Details </h2>
			<form action="" method="post"> 
				
				<div class="form-group">
					<lable>Username*</lable>
					<input type="text" placeholder="Enter Your Username" name="username" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Password*</lable>
					<input type="password" placeholder="Enter Your Password" name="password" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Re-Enter Password*</lable>
					<input type="password" placeholder="Re-Enter Your Password" name="rePassword" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>First Name*</lable>
					<input type="text" placeholder="Enter Your First Name" name="fName" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Middle Initial</lable>
					<input type="text" placeholder="Enter Your Middle Initial" name="midInitial" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Last Name*</lable>
					<input type="text" placeholder="Enter Your Last Name" name="lName" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Age*</lable>
					<input type="text" placeholder="Enter Your Age" name="age" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Gender*</lable>
					<input type="text" placeholder="Enter Your Gender" name="gender" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Address*</lable>
					<input type="text" placeholder="Enter Your Address" name="address" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>NIC Number*</lable>
					<input type="text" placeholder="Enter Your National Identity Card Number" name="nic" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Contact Number*</lable>
					<input type="text" placeholder="Enter Contact Number" name="contact" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>E-mail*</lable>
					<input type="text" placeholder="Enter E-mail Address" name="email" class="form-control">
					</div>
				
				<button type="submit" name="insert"  class="btn btn-primary"> Insert </button>
				<button type="submit" name="delete"  class="btn btn-primary"> Delete </button>
			
			</form>
			
			</div>
        </div>
      </div>
    </div>
	
	<h2 class="table1" style="text-align: center"  >OWNER's Table</h2>
	
	<div class="insertupdatedelete">
		<?php
		
				$servername = "127.0.0.1";
				$username = "root";
				$password = "";
				$db = "cleaners_web";

				$con = mysqli_connect($servername, $username, $password, $db);		
		
		if(isset($_POST["insert"])){
			
			$name = $_POST['username'];
			$pass = $_POST['password'];
			$repass = $_POST['rePassword'];
			$fname = $_POST['fName'];
			$mid = $_POST['midInitial'];
			$lname = $_POST['lName'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$address = $_POST['address'];
			$nic = $_POST['nic'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];

			$s = " select * from owners where username = '$name'";

			$result = mysqli_query($con, $s);

			$num = mysqli_num_rows($result);

			if($num == 1){

			} else {

				$reg = " insert into owners(username, password, rePassword, fName, midInitial, lName, age, gender, address, nic, contact, email) values ('$name' , '$pass' , '$repass' , '$fname' , '$mid' , '$lname' , '$age' , '$gender' , '$address' , '$nic' , '$contact' , '$email')";
				mysqli_query($con, $reg);

			}
			
		}elseif(isset($_POST["delete"])){
			
			
			if(isset($_POST['username'])){
			$name = $_POST['username'];
			}
			$sql= "DELETE FROM owners WHERE username = '$name'";

			if(mysqli_query($con,$sql)){
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}

			mysqli_close($con);
			
		}
		?>
		
	</div>
		
	<div class="table">			
		
				<?php 

				$servername = "127.0.0.1";
				$username = "root";
				$password = "";
				$db = "cleaners_web";

				$con = mysqli_connect($servername, $username, $password, $db);
				
				$sql = "select * from owners";
				
				$result = mysqli_query($con, $sql);

				if ($result){
					
					$table = '<table>';
					$table .= "<tr><th>username</th><th>password</th><th>rePassword</th><th>fName</th><th>midInitial</th><th>lName</th><th>age</th><th>gender</th><th>address</th><th>nic</th><th>contact</th><th>email</th></tr>";
					
					
					while($record = mysqli_fetch_assoc($result)){
						
						$table .= '<tr>';
						$table .= '<td>' . $record['username'] . '</td>';
						$table .= '<td>' . $record['password'] . '</td>';
						$table .= '<td>' . $record['rePassword'] . '</td>';
						$table .= '<td>' . $record['fName'] . '</td>';
						$table .= '<td>' . $record['midInitial'] . '</td>';
						$table .= '<td>' . $record['lName'] . '</td>';
						$table .= '<td>' . $record['age'] . '</td>';
						$table .= '<td>' . $record['gender'] . '</td>';
						$table .= '<td>' . $record['address'] . '</td>';
						$table .= '<td>' . $record['nic'] . '</td>';
						$table .= '<td>' . $record['contact'] . '</td>';
						$table .= '<td>' . $record['email'] . '</td>';
						$table .= '</tr>';
						
					}
					
					$table .= '</table>';
				
				}
				?>
	</div>	
	
	 <?php echo $table; ?>			
	
	<?php include('footer.php') ?>

</body>
</html>
