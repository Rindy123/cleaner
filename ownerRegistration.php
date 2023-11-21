<?php 

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "cleaners_web";

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con) {
	
	die("Conncetion has been failed:" . mysqli_connect_errno());
	
}  

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
	
	echo "<script> alert('Error!! Username already taken') </script>";
	include('ownerRegisterForm.php');	
	
} elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
	
	$nameErr = "Only letters and white space allowed";
	
} elseif(!preg_match("/^[a-zA-Z-' ]*$/",$mid)){
	
	$nameErr = "Only letters and white space allowed";
	
} elseif(!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
	
	$nameErr = "Only letters and white space allowed";
	
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	
	 $emailErr = "Invalid email format";
	
} else {
	
	$reg = " insert into owners(username, password, rePassword, fName, midInitial, lName, age, gender, address, nic, contact, email) values ('$name' , '$pass' , '$repass' , '$fname' , '$mid' , '$lname' , '$age' , '$gender' , '$address' , '$nic' , '$contact' , '$email')";
	mysqli_query($con, $reg);
	
	echo "<script> alert('Registration successful') </script>";
	
	include('ownerRegisterForm.php');	
	
}

?>