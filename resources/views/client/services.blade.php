
@extends('master1')

@section('content')

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Germinate
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index">Accueil</a><span>/</span></li>
					<li><i class="fa fa-cogs" aria-hidden="true"></i>Services</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Services</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- services -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Notre <span>Future</span> Services</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			
			<div class="w3_agile_services_grids"> 
				<div class="col-md-6 w3_agile_services_grid"> 
					<div class="col-xs-4 w3_agile_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="images/13.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 w3_agile_services_grid_right"> 
						<h4>Ut et turpis interdum</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3_agile_services_grid"> 
					<div class="col-xs-4 w3_agile_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="images/14.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 w3_agile_services_grid_right"> 
						<h4>Vivamus vitae euismod</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3_agile_services_grid"> 
					<div class="col-xs-4 w3_agile_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="images/15.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 w3_agile_services_grid_right"> 
						<h4>blandit rutrum et erat</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3_agile_services_grid"> 
					<div class="col-xs-4 w3_agile_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="images/16.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 w3_agile_services_grid_right"> 
						<h4>felis leo sodales lacus</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<h3 class="agileits_w3layouts_head agileinfo_head w3_head"><span>What</span> we do</h3>
			<div class="w3_agile_image">
				<img src="images/17.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para agileits_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3_agileits_services_bottom_grid">
					<div class="wthree_services_bottom_grid1">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="wthree_services_bottom_grid1_pos">
							<h4>Fertilizing</h4>
						</div>
					</div>
					<div class="agileinfo_services_bottom_grid2">
						<p>Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.</p>
						<div class="agileits_w3layouts_learn_more hvr-radial-out">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services_bottom_grid">
					<div class="wthree_services_bottom_grid1">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="wthree_services_bottom_grid1_pos">
							<h4>Soil Testing</h4>
						</div>
					</div>
					<div class="agileinfo_services_bottom_grid2">
						<p>Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.</p>
						<div class="agileits_w3layouts_learn_more hvr-radial-out">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services_bottom_grid">
					<div class="wthree_services_bottom_grid1">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="wthree_services_bottom_grid1_pos">
							<h4>Planting</h4>
						</div>
					</div>
					<div class="agileinfo_services_bottom_grid2">
						<p>Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.</p>
						<div class="agileits_w3layouts_learn_more hvr-radial-out">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services-bottom -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Notre <span>Future</span> Services</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive">
			</div>
			
			<div class="w3ls_news_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="images/15.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>Vivamus malesuada <span>pellentesque</span> nunc id <i>'condim'</i></h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
											placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
											tristique enim.</p>
										<br>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="images/14.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>Quisque eu aliquam <span>dignissim</span> ex a <i>'fringilla'</i></h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
											placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
											tristique enim.</p>
										<br>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="images/16.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>Vivamus malesuada <span>pellentesque</span> nunc id <i>'condim'</i></h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
											placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
											tristique enim.</p>
										<br>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div><br><br><br>
<!-- //testimonials -->
<!-- flexSlider -->
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
<!-- //flexSlider -->

<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

@stop