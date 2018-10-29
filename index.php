<?php 

require('./db/constants.php');
require('./db/db_connection.php');
require_once'./functions/functions.php';
?>

<?php
 $chiefDetails = getAllChiefs();
?>

<?php
 $event_details = getAllEvents();
?>

<?php 
$projects = getAllProjects();
?>





<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>JCIN UI | GLOBAL YOUTHS FOR POSITIVE CHANGE </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="JCI, Organisation, Charity, Youth " />
	<meta name="author" content="Narcisse" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/favicon.png">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/bootstap.min.css">

	<link rel="stylesheet" href="css/bootstap-theme.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
						<a href="#">Forum</a>
						<a href="#">Contact</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="./index" ><img height="auto" width="50px" src="images/JCI-Logo-Transparent.png"></a></h1>

					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="./index">Home</a>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Features</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Donate</a></li>
									<li><a href="#">Fundraise</a></li>
									<li><a href="#">Campaign</a></li>
									<li><a href="#">Philantrophy</a></li>
									<li><a href="join.html">Join Us</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Projects</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="#">Save a Soul</a></li>
								 	<li><a href="#">Fopa</a></li>
								 	<li><a href="#">TOPF</a></li>
								</ul>
							</li>
							<li><a href="./about.html">About</a></li>
							<li><a href="./blog.html">Blog</a></li>
							<li><a href="./contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>





		<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="bg.jpg" alt="Chania" width="100%" >
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="bg.jpg" alt="Chania" width="100%" height>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="bg.jpg" alt="Flower" width="100%" height="auto">
        <div class="carousel-caption">
         <!-- <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>-->
        </div>
      </div>

      <div class="item">
        <img src="bg.jpg" alt="Flower" width="100%" >
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
  
    </div>

     <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
		
		<!-- end:header-top -->
		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-profile-male"></i>
							</span>
							<div class="feature-copy">
								<h3>Become a Member</h3>
								<p>Become a global leader and be the change that you would to see in the world</p>
								<p><a href="./join/index" class="btnn">Join</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-happy"></i>
							</span>
							<div class="feature-copy">
								<h3>Sponsor</h3>
								<p>Sponsor to provide visible change to society</p>
								<p><a href="#" class="btnn">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Donation</h3>
								<p>There is no little to making impact.</p>
								<p><a href="#" class="btnn">Donate</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Giving is Virtue.</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="images/clean_up.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/clean.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/Recruit.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Our Mission</h3>
							<p>To provide development opportunities that empower young people to create positive change</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Our Vision</h3>
							<p>To be the leading global network of young active citizens</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Goal</h3>
							<p>To groom youths that radiates positive change</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>

  


    <div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Upcoming Events</h3>
						<p></p>
					</div>
				</div>
			</div>

			 <div class='container'>
			 <div class='row row-bottom-padded-md '>
	   <?php

	   foreach($event_details as $event_details) {
				echo  "<div class='col-lg-4 col-md-4 col-sm-6'>";
					echo "<div class='fh5co-blog animate-box'>"	;
						echo "<a href='#'><img class='img-responsive' src=".$event_details['image']."></a>";
						echo "<div class='blog-text'>";
							echo "<div class='prod-title'>";
								echo "<h3><a href=''>".$event_details['title']."</a></h3>";	
								echo "<span class='posted_by'>".$event_details['date']."</span>"	;
								echo "<span class='comment'><a href=''>21<i class='icon-bubble2'></i></a></span>";
								echo "<p>".$event_details['details']."</p>";
								echo "<p><a href='#' class='btnn'>Learn More</a></p>";
							echo "</div>";
						echo "</div> ";
					 echo "</div>";
				echo "</div>";
				echo "<div class='clearfix visible-sm-block'></div>";
	   }
		 ?>

		 
			  <div>
		 <div>
		<div>
			 <!--<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
				

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">All Events</a>
					</div>
				</div>

			</div>
		</div>-->
		<!-- fh5co-blog-section -->

		
		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Team Leads</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
					  
			
			<?php 
		 
		 foreach($chiefDetails as $chiefDetail) {

			echo "<div class='container'>";
				echo "<div class='row'>";
				echo "<div class='col-md-3'>";
						echo "<div class='fh5co-testimonial text-center animate-box'>";
							echo "<figure>";
							echo "	<img src=".$chiefDetail['image']. " alt='user'>";
							echo "</figure>";
						echo "<blockquote>";
								echo "<p>&ldquo;".$chiefDetail['about_me']."&rdquo;</p>";
							echo "</blockquote>";
						echo "	<span>" .$chiefDetail['name'].", " .$chiefDetail['position']."</span>";
              
						echo "<p class='fh5co-social-icons'>";
								echo "<a href='#'><i class='icon-twitter2'></i></a>";
							echo	"<a href='#'><i class='icon-linkedin2'></i></a>";
							echo "	<a href='#'><i class='icon-facebook3'></i></a>";
							echo "</p>";
						echo "</div>";
				echo "</div>";	
		 }

          ?>
			
				</div>
			</div><br>

			<div class="col-md-3 col-md-offset-4 text-center animate-box">
						<a href="team.html" class="btn btn-primary btn-lg">Entire Team</a>
					</div>
		</div>
		<!-- fh5co-content-section -->

		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Projects Support Us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>


			<div class='container'>
			<div class='row'>
		<?php 
           foreach ($projects as $projects) { 
            echo "	<div class='col-md-3 col-sm-3'>";
           echo "<div class='services animate-box text-center'>";
     	  echo	"<span><i class='icon-heart'></i></span>";
	       echo "<h3>".$projects['title']."</h3>";
	         echo"	<p>".$projects['details']. ".</p>";
			 echo	"</div>";
			echo "</div>" ;
		}
  ?>         
        </div>
        </div>
		<!-- END What we do -->


		<div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>

				
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">

							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_1.jpg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
						
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_3.jpg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_1.jpg); "> 
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_3.jpg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<span>Give Love</span>
										<h2>Donation is caring</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">See Gallery</a>
					</div>
				</div>

				
			</div>
		</div>
		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>&copy; <script>document.write(new Date().getFullYear())</script>  <a href="#">JCIN UI</a>. All Rights Reserved. <br>Designed by Cisse </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>
