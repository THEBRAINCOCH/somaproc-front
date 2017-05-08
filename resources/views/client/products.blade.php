
@extends('master1')

@section('content')
<!-- //custom-theme -->
<!-- js -->
<!-- gallery -->
<!-- //gallery -->

<!-- font-awesome-icons -->
<!-- bootstrap-pop-up -->
	
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
				<h2>{{trans('menus.products')}}</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div><br><br>
<!-- //breadcrumbs -->
<!-- //testimonials -->
<h3 class="agileits_w3layouts_head">{{trans('menus.products')}}</h3>
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