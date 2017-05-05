@extends('master1')
@if (Session::has('success'))
<div class="clearfix"></div>
<div class="alert alert-success" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {!! Session::get('success') !!}
</div>
@endif
@section('content')
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcPr8-cPFViW2XMU82Yi5MalOoi__IrMc"></script>
<!-- breadcrumbs -->

	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{trans('menus.contact')}}</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>{{trans('menus.contact')}}</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->

	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{trans('contact.contactUs')}}</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			
			<div class="w3ls_news_grids">
				<div class="col-md-8 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="{{route('client.contact')}}" method="post">

					
							<span >
								<i>{{trans('contact.name')}}</i>
								<input type="text" name="Name" placeholder=""  required=""  value="{{ Request::old('Name') ?: '' }}">
								@if ($errors->has('Name'))
                                <span class="alert alert-danger">{{ $errors->first('Name') }}</span>
                                @endif

							</span>
							<span >
								<i>{{trans('contact.last_name')}}</i>
								<input type="text" name="Lname" placeholder=""  required=""  value="{{ Request::old('Lname') ?: '' }}">
								@if ($errors->has('Lname'))
                                <span class="alert alert-danger">{{ $errors->first('Lname') }}</span>
                                @endif
							</span>
							<span>
								<i>{{trans('contact.email')}}</i>
								<input type="email" name="Email" placeholder=" " required="" value="{{ Request::old('Email') ?: '' }}">
								@if ($errors->has('Email'))
                                <span class="alert alert-danger">{{ $errors->first('Email') }}</span>
                                @endif
							</span>
							<span>
								<i>{{trans('contact.subject')}}</i>
								<input type="text" name="Subject" placeholder=" " required="" value="{{ Request::old('Subject') ?: '' }}">
								@if ($errors->has('Subject'))
                                <span class="alert alert-danger">{{ $errors->first('Subject') }}</span>
                                @endif
							</span>
							<span>
								<i>{{trans('contact.message')}}</i>
								<textarea name="Message" placeholder=" " required="">{{ Request::old('Message') ?: '' }}</textarea>
								@if ($errors->has('Message'))
                                <span class="alert alert-danger">{{ $errors->first('Message') }}</span>
                                @endif
							</span>
							<div class="w3_submit">
							 <input type="hidden" name="_token" value="{{ Session::token() }}">
								<input type="submit" value="{{trans('contact.submit')}}">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4 w3_agile_mail_right">
					<div class="w3_agileits_mail_right_grid">
						<h4>À propos de SOMAPROC </h4>
						<p>Donec libero lectus, feugiat vel elit nec, mattis tempor mi ante.</p>
						<h5>Follow Us On</h5>
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
						<div class="w3_agileits_mail_right_grid_pos">
							<img src="images/12.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="w3_agileits_mail_right_grid_main">
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>E-Mail</h3>
								<a href="mailto:info@example.com">info@somaproc.com.tn</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>Address</h3>
								<p>Société des Marchés de Production Du Centre SOMAPROC Avenu Habib bourguiba -Immeuble de l'entreprise - 3 ème étage Sidi Bouzid 9100.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>Téléphone</h3>
								<p>+(216) 76 63 04 70</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<br/>
		<div class="container">
	<div id="map"></div>
	</div>
	</div>

<!-- //contact -->
	 
        
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
	  
      <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(35.034002379071545, 9.473803639411926), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [	{		"featureType":"landscape",		"stylers":[			{				"hue":"#FFA800"			},			{				"saturation":0			},			{				"lightness":0			},			{				"gamma":1			}		]	},	{		"featureType":"road.highway",		"stylers":[			{				"hue":"#53FF00"			},			{				"saturation":-73			},			{				"lightness":40			},			{				"gamma":1			}		]	},	{		"featureType":"road.arterial",		"stylers":[			{				"hue":"#FBFF00"			},			{				"saturation":0			},			{				"lightness":0			},			{				"gamma":1			}		]	},	{		"featureType":"road.local",		"stylers":[			{				"hue":"#00FFFD"			},			{				"saturation":0			},			{				"lightness":30			},			{				"gamma":1			}		]	},	{		"featureType":"water",		"stylers":[			{				"hue":"#00BFFF"			},			{				"saturation":6			},			{				"lightness":8			},			{				"gamma":1			}		]	},	{		"featureType":"poi",		"stylers":[			{				"hue":"#679714"			},			{				"saturation":33.4			},			{				"lightness":-25.4			},			{				"gamma":1			}		]	}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(35.034002379071545, 9.473803639411926),
                    map: map,
                    
                    title: 'SOMAPROC Avenu Habib Bourguiba - immeuble de lentreprise - 3ème étage sidi bouzid',
                });
            }
        </script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="asset('js/move-top.js')"></script>
<script type="text/javascript" src="asset('js/easing.js')"></script>
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
	<script src="asset('js/bootstrap.js')"></script>
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