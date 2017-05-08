@extends('master1')

@section('content')

	
			<!-- news -->
			  <div class="breadcrumbs" style="margin-bottom:-75px;">
    <div class="container">
      <div class="w3layouts_breadcrumbs_left">
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{trans('menus.news')}}</li>
        </ul>
      </div>
      <div class="w3layouts_breadcrumbs_right">
        <h2>{{trans('menus.news')}}</h2>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div> 
<!-- //breadcrumbs -->

 <!-- A Propos -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{$topic->title}}</h3>
			<div class="w3_agile_image">
				<img src="{{asset('images/1.png')}}" alt=" " class="img-responsive">
			</div>
		
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="{{asset($topic->photo1)}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
						</div>
					</div>
					
				</div>
				<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="{{asset($topic->photo2)}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
						</div>
					</div>
					
				</div>
				<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="{{asset($topic->photo3)}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
						</div>
					</div>
					
				</div>
			
				
				
				<div class="clearfix"> </div>
			</div>
			<div class="grid_3 grid_5 agile">
				<h5>{{$topic->created_at->format('d-m-Y')}}</h5>
				
				<div class="well" style="background-color: transparent; font-size: 16px;">
						{!!$topic->description!!}
				</div>
			</div>
		</div>
	</div>
<!-- //news -->
	    </div>
    </div>

@stop