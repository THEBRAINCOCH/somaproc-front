@extends('master1')
 
@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
					<li><i class="fa fa-picture-o" aria-hidden="true"></i>{{trans('menus.gallery')}}</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>{{trans('menus.gallery')}}</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- gallery -->
	<div class="welcome" style="background: url(../images/21.jpg) no-repeat 0px 0px;
    background-size:;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
	text-align: center;">
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{trans('gallerie.notreGallerie')}}</h3>
			<div class="w3_agile_image">
				<img src="{{asset('images/1.png')}}" alt=" " class="img-responsive" />
			</div>
			<div class="w3ls_news_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">

						
							@php $i=0; @endphp
							@foreach($galleries as $g)
							@if($i % 6 ==0)
							<li>
							@endif
							@php $i++ @endphp

				                  <div class="col-md-4 w3layouts_gallery_grid">
					                <a href="{{asset($g->photo)}}" class="lsb-preview" data-lsb-group="header">
						             <div class="w3layouts_news_grid">
							          <img src="{{$g->photo}}" alt=" " class="img-responsive">
							           <div class="w3layouts_news_grid_pos">
								        
							           </div>
						              </div>
					                </a>
				                  </div>
				                  	@if($i % 6 ==0)
							</li>
							@endif
				                  @endforeach
				                
				                

							
							
						</ul>
						<br><br>
					</div>
				</section>
			</div>
		</div>
	</div>
<!--//-->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->			

			
		</div>
	</div>
<!-- //gallery -->
	<script src="{{asset('js/lsb.min.js')}}"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>


<!-- //here ends scrolling icon -->

@stop