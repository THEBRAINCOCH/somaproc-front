
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
	<div class="welcome">
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