<?php

require('db/constants.php');
require('db/db_connection.php');

session_start();

if (isset($_POST['login'])) {

	$email =  mysqli_escape_string($conn, $_POST['email']);
	$password = mysqli_escape_string($conn, $_POST['password']);
	$secured_password = md5($password);

$sql = "SELECT * FROM admin WHERE Email = '$email' AND Password = '$secured_password'" or die('error inserting Data' . mysqli_error($conn));

$result = mysqli_query($conn, $sql);

 if (!$result) {

 die(' Not working ' . mysqli_error($conn));

 } else {

 $count = mysqli_num_rows($result);

  if($count == 1) {


 	$user_data = mysqli_fetch_assoc($result);

  	$_SESSION['Admin_id'] = $user_data['Admin_id'];

  header("Location: ./Admin_Dashboard/dashboard.php");
  
  	}else {

      die( ' Invalid Login Details ' . mysqli_error($conn));
  	}
  }

}
?>

