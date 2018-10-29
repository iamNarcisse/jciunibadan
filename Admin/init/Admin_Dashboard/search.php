<?php 
 require('db/constants.php');
 require('db/db_connection.php');
 session_start();

 if(empty($_SESSION['Admin_id'])) {

    header('location: /jci_uii/Admin/index.html');
}else {
    $session = $_SESSION['Admin_id'];
}?>

<?php

$output = '';
// Query for Search
if(isset($_POST['search'])) {

	$search = mysqli_escape_string($conn, $_POST['search']);
	$search = preg_replace("#[^0-9a-z]#i", "", $search);

	$search_query = "SELECT * FROM members WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'" or die(mysqli_error($conn));

	$result = mysqli_query($conn, $search_query);

	$count = mysqli_num_rows($result);

if ($count<1) {

	$output = 'No result is Display';
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JCI UNIBADAN</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<table class='table table-striped'>
          <tr>
          <th>firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Phone Number</th>
          </tr>

            <?php

            while ($row= mysqli_fetch_assoc($result)) {

		 $firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$email = $row['email'];
		$phone = $row['phone'];

         echo "<tr><td>".$firstname. "</td><td>".$lastname."</td><td>".$email."</td><td>".$phone. "</td></tr>";
	}

                    

               ?>

</table>

