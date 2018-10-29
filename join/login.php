<?php

require('db/constants.php');
require('db/db_connection.php');
session_start();

 if (isset($_POST['login'])) {

 	//DECLARING VARIABLES AND PROTECTING AGAINGST SQL INJECTION

 	$email = mysqli_escape_string($conn, $_POST['email']) ;

 	$password = mysqli_escape_string($conn, $_POST['password']);

 	$secured_password = md5($password);

$sql = " SELECT * FROM members WHERE email = '$email' AND password = '$secured_password' " or die(mysqli_error($conn)); 

 $result = mysqli_query($conn, $sql);

 if (!$result) {

 	die(' Not working ' . mysqli_error($conn));

 } else {

 $count = mysqli_num_rows($result);

  if($count == 1) {


 	$user_data = mysqli_fetch_assoc($result);

  	$_SESSION['member_id'] = $user_data['member_id'];

  	header("Location: ./Members_Dashboard/index");
  	}else {

      die( ' Invalid Login Details ' . mysqli_error($conn));
  	}
  }

 }

?>