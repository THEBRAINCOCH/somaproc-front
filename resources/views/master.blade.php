<!--
author: Riatica
author URL: http://Riatica.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SOMAPROC : Sté des marchésde Production du Centre </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/NewsCarousel.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" media="all" />

<!--//menu -->
<!--// menu-->

<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<link href="{{ asset( 'css/mislider.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset( 'css/mislider-custom.css') }}" rel="stylesheet" type="text/css" />
<!-- font-awesome-icons -->
<link href="{{ asset( 'css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">
	nav li:hover,#searchbtn:hover {
		background-color:  #a4dd25;
	}
</style>

<body>




<!-- //bootstrap-pop-up -->
@yield('content')
<!-- footer -->
<div class="footer" >
<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<a href="/"><img src="{{asset('images/logo.png')}}"  style="position: relative;  width: 200px; height: 200px; left: 10; right: 0px; float: left;"></a>
					</div>
				</div>
				<div class="col-md-4 agileinfo_footer_grid ">
				
					<h3>{{trans('contact.contactInformation')}}</h3>
					<h4>{{trans('contact.callUs')}}<h3>+(216)76 63 04 70</h3></h4>
					<p>{{trans('contact.Address')}}</p>
					<ul class="agileits_social_list" >
						<center><li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</center>
					</ul>
				</div>
				
	<div class="col-md-4 agileinfo_footer_grid agileinfo_footer_grid1">
					<h3>{{trans('menus.navigation')}}</h3>
					<ul class="w3layouts_footer_nav">
						<li><a href="/"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{trans('menus.home')}}</a></li>
						       <li><a href="{{url('/gallery')}}">
						       <i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{trans('menus.gallery')}}</a></li>
        					 <li><a href="{{url('/News')}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{trans('menus.news')}}</a></li>
        					  <li><a href="{{url('/services')}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{trans('menus.services')}}</a></li>
        					   <li><a href="{{url('/about')}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{trans('menus.about')}}</a></li>
        					    <li><a href="{{url('/company')}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{trans('menus.Company')}}</a></li>

						
				
						<li><a href="contact"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{trans('menus.contact')}}</a></li>

					</ul>
				</div>				
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p>© 2017 <a href="http://Riatica.com" >Riatica</a>. {{trans('contact.copyright')}} <a href="http://Riatica.com">Riatica.</a></p>
			</div>
		</div>
	</div>
<!-- stats -->
	<script src=" {{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src=" {{ asset('js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- mislider -->
	<script src=" {{ asset( 'js/mislider.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
        jQuery(function ($) {
            var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                stageHeight: 380,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1,
            });
        });
    </script>
<!-- //mislider -->
<!-- text-effect -->
		<script type="text/javascript" src=" {{ asset('js/jquery.transit.js') }}"></script> 
		<script type="text/javascript" src="{{ asset('js/jquery.textFx.js') }}"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
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
<script type="text/javascript" src=" {{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
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
	<script src="{{ asset('js/bootstrap.js')}}"></script>
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
<!--//menu-->
<script type="text/javascript">
		$(document).ready(function() {
    $('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function(event) {
		event.preventDefault();
		$('body').toggleClass('navbar-more-show');
		if ($('body').hasClass('navbar-more-show'))	{
			$('a[href="#navbar-more-show"]').closest('li').addClass('active');
		}else{
			$('a[href="#navbar-more-show"]').closest('li').removeClass('active');
		}
		return false;
	});
});
</script>
<!--//-->
</body>
</html>