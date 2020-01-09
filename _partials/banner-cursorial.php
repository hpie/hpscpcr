<?php
?>
	<!-- banner -->
	<div class="banner"> 
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-img1">
							<div class="banner-w3text">
								<h2>Temporibus autem Quisque <br> nunc ullamcorper eget volutpat </h2>
								<a href="#myModal" class="agilebtn" data-toggle="modal" data-target="#myModal-1"><span>Read More</span></a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img2">
							<div class="banner-w3text">
								<h3>Volutpat quis enim Donec <br>massa ipsum imperdiet euornare</h3>
								<a href="#myModal" class="agilebtn" data-toggle="modal" data-target="#myModal-2"><span>Read More</span></a>
							</div>
						</div>
					</li>
				</ul> 
			</div>
		</section> 
		<!-- FlexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
		<!-- //FlexSlider -->
	</div>
	<!-- //banner -->

	
		
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal-1" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/img2.jpg" class="img-responsive" alt=""/>
					<h4>modal-about Cras rutrum iaculis enim</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->
	
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal-2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/img2.jpg" class="img-responsive" alt=""/>
					<h4>modal-about Cras rutrum iaculis enim</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->