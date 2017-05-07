
@extends('master1')

@section('content')
<!-- //custom-theme -->
<!-- js -->
<!-- gallery -->
<!-- //gallery -->

<!-- font-awesome-icons -->
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
						<img src="{{asset('images/4.jpg')}}" alt=" " class="img-responsive" />
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
					<li><i class="fa fa-cogs" aria-hidden="true"></i>{{trans('menus.products')}}</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Produits</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div><br><br>
<!-- //breadcrumbs -->
<!-- //testimonials -->
<h3 class="agileits_w3layouts_head">Observer<span> Notre </span>Produits</h3>
<div class="w3_agile_image">
				<img src="{{asset('images/1.png')}}" alt=" " class="img-responsive" />
			</div>
<div class="testimonials">
		<div class="container">
		<div class="content">
		    <div class="project-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<div class="container">
			<div class="w3ls_news_grids">
					<ul class="slides">
							<li>
	
			
				<div class="port-grids">
				<div class="port1">
				@foreach($products as $product)
				<div class="col-md-4 port-grid">
				<div class="well">
<a href="{{asset($product->photo)}}" class="swipebox"><img src="{{asset($product->photo)}}" class="img-responsive" alt="" /></a>
                    <div class="grid_2 grid_5 agile">
                    <center>
<span>{{$product->name}}</span>  <br>
<span>{{$product->min_price}} - {{$product->max_price}}</span>  
</center>                </div>
                </div>
				</div>
				@endforeach
				
				
				<div class="clearfix"></div>
				</div>
				</div>
				
							</li>
							
							
						</ul>
			
			</div>
			</div>
			</div>
			</div>
		</div>
	</div>





	<br><br><br>
<!-- //testimonials -->
<!-- flexSlider -->
	<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
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