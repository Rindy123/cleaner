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
			<a href="adminLogin.php">LOGOUT</a>

		</div>
		
	<div>			
		
				<?php 

				$servername = "127.0.0.1";
				$username = "root";
				$password = "";
				$db = "cleaners_web";

				$con = mysqli_connect($servername, $username, $password, $db);
				
				$sql = "select * from appointmentsdateandtime";
				
				$result = mysqli_query($con, $sql);

				if ($result){
					
					$table = '<table>';
					$table .= "<tr><th>Date</th><th>cleaner's first Name</th><th>cleaner's last Name</th></tr>";
					
					
					while($record = mysqli_fetch_assoc($result)){
						
						$table .= '<tr>';
						$table .= '<td>' . $record['dateAndTime'] . '</td>';
						$table .= '<td>' . $record['fName'] . '</td>';
						$table .= '<td>' . $record['lName'] . '</td>';
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
