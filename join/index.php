<?php 
	require('header.php');

?>	
		<div class="form-w3ls">
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">Login</a></li>
		<li class="tab"><a href="#signup-agile">Join</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form action="./login.php" method="post">
				
				<p class="header">Email</p>
				<input type="text" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				<input type="submit" name="login"  class="sign-in" value="Login">
			</form>
			<p><a href="#">Forgot Password?</a></p>
		</div>
		<div id="signup-agile">   
			<form action="./signup.php" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="user" placeholder="UserName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'UserName';}" required="required">
				<p class="header">FirstName</p>
				<input type="text" name="firstname" placeholder="FirstName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'FirstName';}" required="required">
				<p class="header">LastName</p>
				<input type="text" name="lastname" placeholder="LastName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'LastName';}" required="required">
				<p class="header">Contact Address</p>
				<input type="text" name="address" placeholder="Contact Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact Address';}" required="required">
				<p class="header">PhoneNumber</p>
				<input type="text" name="phone" placeholder="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" required="required" maxlength="11">
				
				<p class="header">Email Address</p>
				<input type="email" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
				<p class="header">Confirm Password</p>
				<input type="password" name="password1" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="required">
				
				<input type="submit" name="submit" class="register" value="Become a Member">
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  <br><br>



		
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
							<p>Copyright &copy;2018 JCIN UI. All Rights Reserved. <br>Designed  with<i class="icon-heart3"></i> by Cisse </p>
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


	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/sticky.js"></script>

	<!-- Stellar -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="../js/hoverIntent.js"></script>
	<script src="../js/superfish.js"></script>

	<!-- Main JS -->
	<script src="../js/main.js"></script>

	<!-- js files -->
   <script src='../js/jquery_form.min.js'></script>
   <script src="../js/form.js"></script>
<!-- /js files -->


	</body>
</html>

