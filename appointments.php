<?php 

session_start();
header("location:ownerPage.php");

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "cleaners_web";

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con) {
	
	die("Conncetion has been failed:" . mysqli_connect_errno());
	
}  

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

	include('ownerPage.php');
	
} else {
	
	$reg = " insert into appointments(appointmentNo, fullname, cleaner, time, date, nic, contact) values ('$appoinmentno' , '$ownername', '$cleanername' , '$time' , '$date' , '$nic' , '$contact')";
	mysqli_query($con, $reg);

	echo "<script> alert('Appointment successful') </script>";
	
	include('ownerPage.php');
	
}

?>