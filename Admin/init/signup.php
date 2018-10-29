<?php

require('db/constants.php');
require('db/db_connection.php');

session_start();


$username = $_POST['user'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['password1'];


if(isset($_POST['submit'])) {

	//Preventing Mysql Injections

	$username = mysqli_real_escape_string($conn, $_POST['user']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = md5($_POST['password']);


	$checkiFavalaible = "SELECT * FROM members WHERE email ='$email'";

	$result = mysqli_query($conn, $checkiFavalaible);

	$count = mysqli_num_rows($result);

	if($count == 1) {

		die ('Email has already been used');

		//header("Location: join.php");
	}else {

	$sql = "INSERT INTO members(username, firstname, lastname, address, phone, email, password) VALUES ('$username', '$firstname', '$lastname', '$address', '$phone', '$email', '$password')";

	$result = mysqli_query($conn, $sql);

	if(!$result) {
		die ('Unable to insert data');

	}else{

		echo "You have signup successfully kindly <a href='/jci_uii/join.html'>login</a> to proceed";

	//header("Location:Members_Dashboard/dashboard.php");

	}

   }


}






?>