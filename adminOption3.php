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
			  margin: 10px 250px;
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
			.table3{
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
			<h2 class="registertext">  Make an appointment</h2>
			<form action="" method="post"> 
				
				<div class="form-group">
					<lable>Appointment Number</lable>
					<input type="text" placeholder="Enter appointment Nubmer" name="appointmentNo" class="form-control">
					</div>				
				
				<div class="form-group">
					<lable>Owner's full name</lable>
					<input type="text" placeholder="Enter owner's full name" name="fullname" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Cleaner name</lable>
					<input type="text" placeholder="Enter clener's name" name="cleaner" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Appoinment Time</lable>
					<input type="text" placeholder="Enter appoinment time" name="time" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Appoinment Date [Mon - Sat]</lable>
					<input type="text" placeholder="Enter appoinment date" name="date" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>NIC Number</lable>
					<input type="text" placeholder="Enter Your National Identity Card Number" name="nic" class="form-control">
					</div>
				
				<div class="form-group">
					<lable>Contact Number</lable>
					<input type="text" placeholder="Enter Contact Number" name="contact" class="form-control">
					</div>
				
				<button type="submit" name="insert"  class="btn btn-primary"> Insert </button>

			
			</form>
			
			</div>
        </div>
      </div>
    </div>	
	<h2 class="table3" style="text-align: center"  >APPOINTMENT HISTORY</h2>
	<div class="insertupdatedelete">
		<?php
		
				$servername = "127.0.0.1";
				$username = "root";
				$password = "";
				$db = "cleaners_web";

				$con = mysqli_connect($servername, $username, $password, $db);		
		
		if(isset($_POST["insert"])){
			
		$appoinmentno = $_POST['appointmentNo'];
		$ownername = $_POST['fullname'];
		$cleanername = $_POST['cleaner'];
		$time= $_POST['time'];
		$date= $_POST['date'];
		$nic = $_POST['nic'];
		$contact = $_POST['contact'];


		$s = " select * from appointments where appointmentNo = '$appoinmentno'";

		$result = mysqli_query($con, $s);

		$num = mysqli_num_rows($result);

		if($num == 1){

		} else {

			$reg = " insert into appointments(appointmentNo, fullname, cleaner, time, date, nic, contact) values ('$appoinmentno' , '$ownername', '$cleanername' , '$time' , '$date' , '$nic' , '$contact')";
			mysqli_query($con, $reg);
		}

	}
		
		?>
	</div>	
		
	<div class="appoinments">			
		
				<?php 

				$servername = "127.0.0.1";
				$username = "root";
				$password = "";
				$db = "cleaners_web";

				$con = mysqli_connect($servername, $username, $password, $db);
				
				$sql = "select * from appointments";
				
				$result = mysqli_query($con, $sql);

				if ($result){
					
					$table = '<table>';
					$table .= "<tr><th>appointmentNo</th><th>Owner's_fullname</th><th>cleaner</th><th>time</th><th>date</th><th>nic</th><th>contact</th></tr>";
					
					while($record = mysqli_fetch_assoc($result)){
						
						$table .= '<tr>';
						$table .= '<td>' . $record['appointmentNo'] . '</td>';
						$table .= '<td>' . $record['fullname'] . '</td>';
						$table .= '<td>' . $record['cleaner'] . '</td>';
						$table .= '<td>' . $record['time'] . '</td>';
						$table .= '<td>' . $record['date'] . '</td>';
						$table .= '<td>' . $record['nic'] . '</td>';
						$table .= '<td>' . $record['contact'] . '</td>';
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
