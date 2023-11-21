<?php 

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "contact";

$con = mysqli_connect($servername, $username, $password, $db);
if(!$con) {
	
	die("Conncetion has been failed:" . mysqli_connect_errno());
	
}  

$fname = $_POST['name'];
$lname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];



$q="select * from contact_us where first_name = '$fname'";

 $result = mysqli_query($con, $q);

 $num = mysqli_num_rows($result);

 if($num == 1){
	
	echo "<script> alert('Error!! Username already taken') </script>";
 	include('query.php');	
	
 } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
	
	$fnameErr = "Only letters and white space allowed";
	
 } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
	
 	$lnameErr = "Only letters and white space allowed";
	
 } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	
 	 $emailErr = "Invalid email format";
	
 } else {
	
	$reg = " insert into contact_us(first_name,  last_name , email, phone, message) values ('$fname' , '$lname' , '$email' , '$phone' , '$message')";
	mysqli_query($con, $reg);
	
	echo "<script> alert('Successfuly submited we contact you soon!') </script>";
	
	include('query.php');	
	
 }

?>