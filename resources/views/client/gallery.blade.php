@extends('master1')

@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>/</span></li>
					<li><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Gallery</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- gallery -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Our <span>Gallery</span></h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3layouts_gallery_grids">	
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/3.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/3.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/2.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/5.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/5.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/6.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/6.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/1.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/17.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/17.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/18.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/18.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/19.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/19.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="images/20.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="images/20.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //gallery -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>

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