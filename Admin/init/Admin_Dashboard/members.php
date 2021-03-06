<?php

require('db/constants.php');
require('db/db_connection.php');
session_start();

if(empty($_SESSION['Admin_id'])) {

    header('location: /jci_uii/Admin/index');
}else {
    $session = $_SESSION['Admin_id'];
}

$sql = " SELECT  member_id, firstname, lastname, email, phone FROM members ";

$result = mysqli_query($conn, $sql);

if(!$result) {
    die(mysqli_error($conn));
}

$count = mysqli_num_rows($result);

if($count < 1) {

    $result = null;

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

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="/jci_uii/index.html">
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
                            <a class="nav-link waves-effect" href="logout" target="">Logout</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#" target="">Profile</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link border border-light rounded waves-effect"
                                target="">
                                <i class="fa fa-github mr-2"></i>Welcome, <?php echo $_SESSION['admin']; //echo ' JC ' . $Firstname;?>
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
                <a href="update_profile" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Manage Profile</a>
                <a href="members" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Members</a>
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

                    <form class="d-flex justify-content-center" method="POST" action="search.php">
                        <!-- Default input -->
                        <input type="search" placeholder="Search here" aria-label="Search" class="form-control" name="search">
                        <button class="btn btn-primary btn-sm my-0 p"  type="submit" name="search">
                            <i class="fa fa-search">Search</i>
                        </button>

                    </form>

                </div>

            </div>
            <!-- Heading -->


            <!-- Main -->
            <div class="wrapper" style="text-align: justify;">
                
                <div class="responsive">

                <table class="table table-hover">

                   <tr>
                       <th>ID</th>
                       <th>Firstname</th>
                       <th>Lastname</th>
                       <th>Email</th>
                       <th>Phone Number</th>
                   </tr>


                    <?php

                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<tr><td>".$row['member_id']. "</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>" .$row['phone']. "</td></tr>";

                     }
                ?>
                </table>

               </div>

            </div>


<?php include './footer.php' ?>

</body>

</html>