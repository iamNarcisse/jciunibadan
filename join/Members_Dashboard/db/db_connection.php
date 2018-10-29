<?php

require_once('constants.php');

//Connecting the database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); 

if (!$conn) {

	die (' Connection to database failed ' . mysqli_connect_error());
}

?>