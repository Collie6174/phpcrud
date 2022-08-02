<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$email = $_POST['email'];
$address = $_POST['address'];
$company = $_POST['company'];


$sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', username='$username', password='$password', position='$position', email='$email', address='$address', company='$company'
WHERE username='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>