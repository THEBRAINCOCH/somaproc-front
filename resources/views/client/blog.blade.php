@extends('master1')

@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Accueil</a><span>/</span></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Blog</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Blog</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
		<div class="content">
	
</div>
		   <div class="categories-section">
		   <div class="container">
		   <div class="footer-grids">
			<div class="col-md-4 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	  <h3>upcome events</h3>
	  <div class="up1">
	 <div class="up-img">
	 <img src="images/im1.jpg">
	</div>
     <div class="up-text">
		 <a href="#">sagittis magna</a>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		 </div>
		 <div class="clearfix"></div>
         </div>
		  <div class="up1">
	 <div class="up-img">
	 <img src="images/im2.jpg">
	</div>
     <div class="up-text">
		 <a href="#">Integer molest</a>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		 </div>
		 <div class="clearfix"></div>
         </div>
		  <div class="up1">
	 <div class="up-img">
	 <img src="images/im3.jpg">
	</div>
     <div class="up-text">
		 <a href="#">Fusce suscipit</a>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		 </div>
		 <div class="clearfix"></div>
         </div>
		 </div>
		 <div class="col-md-4 cat wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		   <h3>Categories</h3>
		   <ul>
	<li>Praesent vestim molestie lacus.</li>
	<li>Cras consequat iaculis lorem</li>
	<li>Consectetur adipiscing iaculis</li>
	<li>Lorem ipsum dolor sit</li>
	<li>Cum sociis natoque penatibus et magnis </li>
	<li>Integer molestie lorem</li>
	<li>lorem,Cras consequat iaculis id vehicula</li>
	</ul>
	</div>
		 <div class="col-md-4 cont wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		 <h3>contact</h3>
		 <ul>
		<li><i class="phone"></i></li>
		<li><p>1-000-000-0000</p>
		<p>1-000-000-0000</p></li>
		</ul>
		<ul>
	   <li><i class="smartphone"></i></li>
		<li><p>Seventh Avenue</p>
		<p> Chelsea, Manhattan</p></li>
		</ul>
		<ul>
		<li><i class="message"></i></li>
		<li><a href="mailto:example@mail.com">bcdefg@hijs.dfh</a>
         <a href="mailto:example@mail.com">fjashfaf@jkfs.ckd</a></li>
		</ul>
		</div>
		 <div class="clearfix"></div>
		  </div>
		   </div>
		   </div>
		
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
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
		   </div>
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