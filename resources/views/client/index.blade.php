@extends('master')

@section('content')

<!-- banner -->

<div class="banner">
    <div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<a href="/"><img src="images/logo.png"  style=" padding-bottom: 50px; width: 300px; height: 300px; left: 20;  float: left;"></a>
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
				
				   <br><br>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="100_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
					
				
				</div><br><br><br><br><br><br><br><br><br><br>
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
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	
      <ul class = "nav navbar-nav">
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

         <li><a href="contact">{{trans('menus.contact')}}</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">Submit</button>
						</span>
					</div>
				</div>
			</form>
   </div>
   
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
		<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">{{trans('home.readMore')}}</a></li>
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
		<div class="mis-stage w3_agileits_welcome_grids"> 
			<!-- The element to select and apply miSlider to - the class is optional -->
			<ol class="mis-slider">
			@foreach($products as $p)
			   
				<li class="mis-slide"> 
					<figure> 
						<img src="{{asset($p->photo)}}" alt=" " class="img-responsive" />
						<figcaption>{{$p->name}} {{$p->min_price}} - {{$p->max_price}} </figcaption>
					</figure>
				</li>
				@endforeach
				
			
			</ol>
		</div>

<!-- //welcome -->
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
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="col-md-4 agileits_banner_bottom_left">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-pagelines" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>Free Consultation</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
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
						<h4>Certified Products</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
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
						<h4>Free Helpline</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
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
			<h3 class="agileits_w3layouts_head">Dernières <span>nouvelles</span> de la Somaproc</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive">
			</div>
		
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>Somaproc</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>25 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Design & Planting</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>28 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quality & Reliability</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>30 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Satisfied Customers</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->


<!-- welcome-bottom -->
	<div id="welcome_bottom" class="welcome-bottom">
		<div class="col-md-6 wthree_welcome_bottom_left">
			<h3>we work hard and make our country <span>greenery</span></h3>
			<p>Nullam pretium euismod orci ac porta. Interdum et malesuada fames ac ante
				ipsum primis in faucibus. Donec at scelerisque dolor, vel placerat mi.</p>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/8.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">23,536</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/9.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">53,234</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/10.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">43,568</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/11.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">12,432</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 wthree_welcome_bottom_right">
			<div class="agileinfo_grid">
				<figure class="agileits_effect_moses">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h4>Plantation <span>For Future Growth</span></h4>
						<p>Nullam in luctus lectus. Mauris lobortis dui mauris, non vestibulum 
							magna blandit at scelerisque tellus ipsum nec ipsum.</p>
					</figcaption>			
				</figure>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //welcome-bottom -->



	

@stop