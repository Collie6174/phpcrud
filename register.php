<?php
include("config.php");
include("session.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$email = $_POST['email'];
$address = $_POST['address'];
$company = $_POST['company'];

$sql = "INSERT INTO users(firstname, lastname, username, password, position, email, address, company) 
VALUES('$firstname', '$lastname', '$username', '$password', '$position', '$email', '$address', '$company')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("New user was added!");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate user!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>