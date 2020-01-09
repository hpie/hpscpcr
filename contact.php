<!--
Author: HPIE
Author URL: http://hipe.in
-->
<!DOCTYPE html>
<html lang="en">

<!-- Start Import Head -->
<?php
	include('_partials/includes.php'); // Includes Head Tags, Scripts and Libs
?>
<!-- End Import Head -->

<body> 

<!-- Start Import Header and Menu -->
<?php
	include('_partials/header.php'); // Includes Site Header and Menu
?>
<!-- End Import Header and Menu -->	


<!-- Start Import Banner -->
<?php
	include('_partials/banner.php'); // Includes Site  Banner
?>
<!-- End Import  Banner -->		


	<!-- contact -->
	<div class="contact w3-agileits">
		<div class="container">
			<h3 class="agileits-title1">Contact Us</h3>  
			<div class="contact-w3lsrow">
				<div class="col-md-6 contact-left wthree">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 contact-right">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- address -->
			<div class="address-agileinfo"> 
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></Sharma Bhawan, Phase - III, New Shimla. 171009, India</li>
					<li><i class="phon">Call Us :</i>  +91 177 267 3940</li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
				</ul>
			 </div>
			<!-- //address --> 
		</div>
	</div>
	<!-- //contact -->

	
<!-- Start Import Footer -->
<?php
	include('_partials/footer.php'); // Includes Site Footer
?>
<!-- End Import Footer -->	


<!-- Start Import Footer Scripts -->
<?php
	include('_partials/footer-scripts.php'); // Includes Footer Scripts
?>
<!-- End Import Footer Scripts -->	


</body>

</html>