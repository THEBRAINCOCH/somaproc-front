@extends('master')
 
@section('content')

<!-- banner -->
@if (session()->get('locale')=="ar")
<div class="banner" dir="rtl">
@else
<div class="banner">
@endif
	 <div class="w3_agileits_banner_main_grid" style="margin-top:-20px;">
				<div class="w3_agile_logo">
					<a href="/"><img src="{{asset('images/logo.png')}}"  style="position: relative; width: 200px; height: 200px;"></a>
				</div>
	</div>
   <div class="container">
   		
	 <div id="header-wrapper">
	 <div class="agile_social_icons_banner">
	
                  <div class="w3_banner_info_grid">
					<ul >
						<li ><a href="{{route('language-choose','ar')}}" class="w3l_contact">{{trans('languages.ar')}}</a></li>
						<li><a href="{{route('language-choose','fr')}}" class="w3l_contact">{{trans('languages.fr')}}</a></li>
						<li><a href="{{route('language-choose','en')}}}" class="w3l_contact">{{trans('languages.en')}}</a></li>
					</ul>
				   </div>
				<br/>
				  
	</div>
<div class="container"><nav class = "navbar navbar-default" role = "navigation" >
    <div class = "navbar-header" >
      <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
   </div>
      @if (session()->get('locale')=="ar")

<div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	<ul class = "nav navbar-nav pull-left" >
       @if(Auth::check())
       <li class = "dropdown">
               <a href="#" class = "dropdown-toggle" data-toggle = "dropdown">{{Auth::user()->name}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
               <li><a  href = "{{url('/logout')}}">{{trans('auth.logout')}}</a></li>
      
            </ul>
         </li>
          @else
          <li><a href="{{url('/login')}}">{{trans('auth.login')}}</a></li>
           <li><a href="{{url('/register')}}">{{trans('auth.register')}}</a></li>
          @endif

         </ul>

      <ul class = "nav navbar-nav pull-right">
           
           <li><a href="contact">{{trans('menus.contact')}}</a></li>
           <li><a href="{{url('/Usefulllink')}}">{{trans('menus.Usefulllink')}}</a></li>
           <li><a href="{{url('/News')}}">{{trans('menus.news')}}</a></li>
           <li><a href="gallery">{{trans('menus.gallery')}}</a></li>
           <li class = "dropdown">
               <a href="products" class = "dropdown-toggle" data-toggle = "dropdown">{{trans('menus.products')}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
             @foreach(config('categories') as $key=>$value)
               <li class = ""><a href = "{{url('products',$key)}}">{{trans("menus.products.$value")}}</a></li>

               @endforeach
                


             
            </ul>
         </li>
          <li><a href="services">{{trans('menus.services')}}</a></li>
          <li class = "dropdown">
               <a href="about" class = "dropdown-toggle" data-toggle = "dropdown">{{trans('menus.about')}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
               <li><a href = "about">{{trans('menus.about')}}</a></li>
               <li><a href="Company">{{trans('menus.Company')}}</a></li>
               <li><a href="Statistics">{{trans('menus.Statistics')}}</a></li>
            </ul>
         </li>
         <li ><a href="/">{{trans('menus.home')}}</a></li>
        <img src="{{asset('images/21.png')}}"  style="position: relative; width: 35px; height: 35px; top: 7px;" >
      </ul>
       
   </div>
   @else
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	
      <ul class = "nav navbar-nav">
         <li><span><img src="{{asset('images/21.png')}}"  style="position: relative; width: 35px; height: 35px; top: 7px;" ></span></li>
         <li ><a href="/">{{trans('menus.home')}}</a></li>
         <li class = "dropdown">
               <a href="about" class = "dropdown-toggle" data-toggle = "dropdown">{{trans('menus.about')}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
               <li><a href = "about">{{trans('menus.about')}}</a></li>
               <li><a href="Company">{{trans('menus.Company')}}</a></li>
               <li><a href="Statistics">{{trans('menus.Statistics')}}</a></li>
            </ul>
         </li>
         <li><a href="services">{{trans('menus.services')}}</a></li>
         <li class = "dropdown">
               <a href="products" class = "dropdown-toggle" data-toggle = "dropdown">{{trans('menus.products')}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
             @foreach(config('categories') as $key=>$value)
               <li class = ""><a href = "{{url('products',$key)}}">{{trans("menus.products.$value")}}</a></li>

               @endforeach
                


             
            </ul>
         </li>
         <li><a href="gallery">{{trans('menus.gallery')}}</a></li>
         <li><a href="{{url('/News')}}">{{trans('menus.news')}}</a></li>
         <li><a href="{{url('/Usefulllink')}}">{{trans('menus.Usefulllink')}}</a></li>
         <li><a href="contact">{{trans('menus.contact')}}</a></li>

      </ul>
       <ul class = "nav navbar-nav pull-right" >
       @if(Auth::check())

       <li class = "dropdown">
               <a href="#" class = "dropdown-toggle" data-toggle = "dropdown">{{Auth::user()->name}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
               <li><a  href = "{{url('/logout')}}">{{trans('auth.logout')}}</a></li>
      
            </ul>
         </li>
          @else
          <li><a href="{{url('/login')}}">{{trans('auth.login')}}</a></li>
           <li><a href="{{url('/register')}}">{{trans('auth.register')}}</a></li>
          @endif

         </ul>
   </div>
   @endif
</nav></div>
</div>	<br><br><br>	
	
<h3 align="center" style="font-size: 300%;
	                      color: #fff;
	                      margin: 0;" >{{trans('home.Société')}} {{trans('home.des Marchés')}} {{trans('home.de production')}}<br>{{trans('home.du centre')}}
</h3><br>        
<h3 align="center" style="font-size: 200%;
	                      color: #fff;
	                      margin: 0;" 
	                      >{{trans('home.votre')}} {{trans('home.meilleur')}} {{trans('home.choix')}}
</h3>
				

<div class="w3_banner_info">
 <div class="w3_banner_info_grid">
	<ul>
		<li><a href="contact" class="w3l_contact">{{trans('home.contactUs')}}</a></li>
		<li><a href="about" class="w3ls_more"  >{{trans('home.readMore')}}</a></li>
	</ul>
 </div>
</div>
<br><br>
			<div class="thim-click-to-bottom">
				<a href="#welcome_bottom" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>
		</div>
	</div>
<!-- banner -->
	
	<!-- welcome -->
		<div class="mis-stage w3_agileits_welcome_grids" > 
			<!-- The element to select and apply miSlider to - the class is optional -->
			<ol class="mis-slider">
			@foreach($products as $p)
			   
				<li class="mis-slide"> 
					<figure> 
						<img src="{{asset($p->photo)}}" alt=" " class="img-responsive" />
						<figcaption style="position:relative; z-index: 2;">{{$p->name}} <br/>
						<span>{{$p->min_price}} - {{$p->max_price}}</span>
						</figcaption>
						
					 
					</figure>
					
				</li>
				@endforeach
				
			
			</ol>
		</div>

<!-- //welcome -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal"></div>
<!-- banner-bottom -->
@if (session()->get('locale')=="ar")
	<div class="banner-bottom"  dir="rtl">
@else
	<div class="banner-bottom">
@endif
		<div class="col-md-4 agileits_banner_bottom_left">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-pagelines" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>{{trans('home.Free Consultation')}}</h4>
						<p>{{trans('home.Agricultural Product Consultation.')}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 agileits_banner_bottom_left1">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-certificate" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>{{trans('home.Certified Products')}}</h4>
						<p>{{trans('home.Classification of products approved in the Tunisian national market.')}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 agileits_banner_bottom_left2">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-yelp" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>{{trans('home.Free Helpline')}}</h4>
						<p>{{trans('home.Provide the necessary information to the farmer in order to develop the product.')}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom -->
<!-- news -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{trans('topics.lastTopics')}}</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive">
			</div>
		
			<div class="w3ls_news_grids">
			@foreach($topics as $t)
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="{{asset($t->photo1)}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>{{$t->title}}</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>{{$t->created_at->format('d-m-Y H:i')}}</li>
							
						</ul>
						<h4><a href="{{url('News',$t->id)}}">{{$t->title}}</a></h4>
						<p>{!!str_limit($t->description,100,'...')!!}</p>
					</div>
				</div>
				@endforeach
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->


<!-- welcome-bottom -->
@if (session()->get('locale')=="ar")
	<div id="welcome_bottom" class="welcome-bottom" dir="rtl">
@else
	<div id="welcome_bottom" class="welcome-bottom">
@endif
		<div class="col-md-6 wthree_welcome_bottom_left">
			<center><h3>{{trans('home.We Work Hard to Make our country the')}}<span> {{trans('home.first')}}</span></h3>
			<p>{{trans('home.We do our utmost to improve the product. We are happy to offer you the best.')}}</p></center>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/8.png" alt=" " class="img-responsive" />
				</div>
				    <br><br>
					<h2 class="counter" style="font:bold; color: #000;" >&nbsp;&nbsp;257,510</h2>
				
				
				
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/9.png" alt=" " class="img-responsive" />
				</div>
				    <br><br>
					<h2 class="counter" style="font:bold; color: #000;">&nbsp;&nbsp;145,000</h2>
				
				
				
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/10.png" alt=" " class="img-responsive" />
				</div>
				     <br><br>
					<h2 class="counter" style="font:bold; color: #000;">&nbsp;&nbsp;37,000</h2>
				
				
				
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/11.png" alt=" " class="img-responsive" />
				</div>
				     <br><br>
					<h2 class="counter" style="font:bold; color: #000;">&nbsp;&nbsp;743,729</h2>
				
				
				
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 wthree_welcome_bottom_right">
			<div class="agileinfo_grid">
				<figure class="agileits_effect_moses">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h4 style="text-align: left;">{{trans('home.Somaproc')}} <span>{{trans('home.For Future Growth')}}</span></h4>
						<p style="text-align: justify;text-justify: inter-word; ">{{trans('home.Agriculture')}} </p>
					</figcaption>			
				</figure>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //welcome-bottom -->



	

@stop