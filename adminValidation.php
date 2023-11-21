<?php 

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "cleaners_web";

$con = mysqli_connect($servername, $username, $password, $db);

$name = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from admin where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $name;
	header('location:adminPage.php');
	
}else {
	
	echo "<script> alert('Error!! Username or Password Incorrect') </script>";

	include('adminLogin.php');
}

?>