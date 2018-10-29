<?php

require('db/constants.php');
require('db/db_connection.php');
session_start();

if(empty($_SESSION['member_id'])) {

    header('location: ../index');
}else {
    $session = $_SESSION['member_id'];
}

$sql = "SELECT * FROM members WHERE member_id = '$session'";

$result = mysqli_query($conn, $sql);

if(!$result) {
    die(mysqli_error($conn));
}

$count = mysqli_num_rows($result);

if($count < 1) {

    $result = null;
} else {
    $row = mysqli_fetch_assoc($result);

    $username = $row['username'];
    $address = $row['address'];
    $phone = $row['phone'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../images/favicon.png">
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

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="../../index">
                    <strong class="blue-text">JCI</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="update_profile" target="">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="logout.php" target="">Logout</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link waves-effect" >
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link waves-effect" >
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link border border-light rounded waves-effect"
                                target="">Welcome, <?php echo ' JC ' . $username;?>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect">
                <img src="" class="img-fluid" alt="">
            </a>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
                <a href="update_profile.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Update Profile</a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="#">Home Page</a>
                        <span>/</span>
                        <span>Dashboard</span>
                    </h4>

                    <form class="d-flex justify-content-center">
                        <!-- Default input -->
                        <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                        <button class="btn btn-primary btn-sm my-0 p"  type="submit" >
                            <i class="fa fa-search">Search</i>
                        </button>

                    </form>

                </div>

            </div>
            <!-- Heading -->


            <!-- Main -->
            <div class="wrapper" style="text-align: justify;">

            <center><img src="avatarr.jpg" style=" max-width: 100%; height: auto; border-radius: 200px; width: 100px; margin-bottom: 15px; "></center>

            <center><table class="table table-hover">

                <tr>
                    <td><label for="username"> Username : </label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?php echo $username ?></td>
                </tr>


                <tr>
                    <td><label for="firstname"> Firstname : </label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?php echo $firstname ?></td>
                </tr>

                <tr>
                    <td><label for="lastname"> Lastname : </label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?php echo $lastname ?></td>
                </tr>

                <tr>
                    <td><label for="email"> Email : </label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?php echo $email ?></td>
                </tr>

                <tr>
                    <td><label for="address"> Address : </label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?php echo $address ?></td>
                </tr>

                <tr>
                    <td><label for="phone"> Phone number: </label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?php echo $phone ?></td>
                </tr>




            </table></center>

            

            </div>

    <!--Footer-->
      <footer>
                <center>
                     <p>&COPY; 2018 All rights Reserved:<a href="" target="_blank">JCIUI </a></p>
                </center>
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization

</body>

</html>