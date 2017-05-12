 
@extends('master1')

@section('content')

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
					<li><i class="fa fa-cogs" aria-hidden="true"></i>{{trans('menus.services')}}</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>{{trans('menus.services')}}</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- services -->
@if (session()->get('locale')=="ar")
	<div class="welcome" dir="rtl">
@else
	<div class="welcome">
@endif
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{trans('services.services')}}</h3>
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
						<h4><center>{{trans('services.Vente en Gros')}}</center></h4>
						<p>{{trans('services.Vente en gros des produits agricoles destinés aux producteurs')}}</p>
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
						<h4><center>{{trans('services.Facilitation la Collecte')}}<center></h4>
						<p>{{trans('services.Faciliter la collecte des matières agricoles')}}</p>
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
						<h4><center>{{trans('services.Valorisation des produits agricoles')}}</center></h4>
						<p>{{trans('services.Valorisation des produits agricoles de la région du centre Tunisien.')}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3_agile_services_grid"> 
					<div class="col-xs-4 w3_agile_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="images/18.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 w3_agile_services_grid_right"> 
						<h4><center>{{trans('services.La transformation')}}<br>{{trans('services.des produits agricoles')}}</center></h4>
						<p>{{trans('services.La transformation des produits agricoles. ces services est inclus dans notre future services.')}}</p>
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
						<h4><center>{{trans('services.La formation des prix')}}<center></h4>
						<p>{{trans('services.La formation des prix et l’export des produits agricoles des cette régions.')}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3_agile_services_grid"> 
					<div class="col-xs-4 w3_agile_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="images/20.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 w3_agile_services_grid_right"> 
						<h4><center>{{trans('services.La standardisation & la conservation')}}<center></h4>
						<p>{{trans('services.La standardisation, la conservation et le conditionnement des produits agricoles.')}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


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
<!-- //menu -->
<!-- start-smoth-scrolling -->

<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<!-- //here ends scrolling icon -->

@stop