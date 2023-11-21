<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "cleaners_web";

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con) {
	
	die("Conncetion has been failed:" . mysqli_connect_errno());
	
}  
$output="";

if(isset($_POST['search'])) {
	
	$searching = $_POST['search'];
	$searching = preg_replace("#[^0-9a-z]#i","",$searching);
	
	$doc = " select * from appointmentsdateandtime where dateAndTime = '$searching'";
	
	$query = mysqli_query($con, $doc) or die("Could not search");
	
	$count = mysqli_num_rows($query);
	
	if($count == 0){
		
		$output = 'There was no search results';
		
	}else{
		
		while($row = mysqli_fetch_array($query)) {
			 
			$fname = $row['fName'];
			$lname = $row['lName'];
			
			$output = '<div>'.$fname.' '.$lname.'</div>';
			
		}
		
	}
}

?>