<!DOCTYPE html>
<html>

<head>
	
	<style>
		
		body {
  			font-family: Arial, Helvetica, sans-serif;
  			background-image: url("cleaner12.jpg");;
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
		
		.section1{
			text-align: center;
		}
		
/*		styles for table*/
			table {
			  border-collapse: collapse;
			  width: 100%;
			}

			th{
			  text-align: center;
			  padding: 10px;
			  background-color: #000000;
			  font-size: 24px;
			  letter-spacing: 2px;
			  color: white;
			}
			
			td{
			  text-align: center;
			  padding: 10px;
			  font-size: 20px;
			}
		
			tr{
				background-color: whitesmoke;
			}

			tr:nth-child(even) {
			  background-color: whitesmoke;
			}		
		
	</style>

</head>
	
<body>
	
	<div>
		
	<img src="logo1.png" alt="Organic Batch" width="100" height="120" style="width:145px">
	
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
			<a href="cleanerLogin.php">LOGOUT</a>

		</div>
		
	</div>
	
	<div class="section1">
		<h1>- All Appointments -</h1>
	</div>
	
	<div class="appoinments">			
		
				<?php 

				$servername = "127.0.0.1";
				$username = "root";
				$password = "";
				$db = "cleaners_web";

				$con = mysqli_connect($servername, $username, $password, $db);
				
				$sql = "select appointmentNo, fullname, cleaner, time, date from appointments";
				
				$result = mysqli_query($con, $sql);

				if ($result){
					
					$table = '<table>';
					$table .= "<tr><th>Appointment No</th><th>Owner's Name</th><th>cleaner's Name</th><th>Time</th><th>Date</th></tr>";
					
					
					while($record = mysqli_fetch_assoc($result)){
						
						$table .= '<tr>';
						$table .= '<td>' . $record['appointmentNo'] . '</td>';
						$table .= '<td>' . $record['fullname'] . '</td>';
						$table .= '<td>' . $record['cleaner'] . '</td>';
						$table .= '<td>' . $record['time'] . '</td>';
						$table .= '<td>' . $record['date'] . '</td>';
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
<?php mysqli_close($con) ?>
 