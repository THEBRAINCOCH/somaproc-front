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
<link href="{{asset('css/bootstrap.cs')}}s" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
<link href="{{ asset('css/NewsCarousel.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- gallery -->
<link href="{{asset('css/lsb.css')}}" rel="stylesheet" type="text/css">
<!-- //gallery -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

<!-- font-awesome-icons -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
<link rel="stylesheet" href="{{asset('css/swipebox.css')}}">
			<script src="{{asset('js/jquery.swipebox.min.js')}}"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
				<!--Animation-->
<script src="{{asset('js/wow.min.js')}}"></script>
<link href="{{asset('css/animate.css')}}" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<!---/End-Animation---->
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
			
	  <div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<a href="/"><img src="{{asset('images/logo.png')}}"  style="position: relative; width: 300px; height: 300px; left: 10; right: 0px;"></a>
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
					
				
				</div><br><br><br><br><br><br><br><br>
				

<!--menu-->
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
         <li ><a href="{{url('/')}}">{{trans('menus.home')}}</a></li>
         <li class = "dropdown">
               <a href="#" class = "dropdown-toggle" data-toggle = "dropdown">{{trans('menus.about')}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
               <li><a href = "{{url('about')}}">{{trans('menus.about')}}</a></li>
               <li><a href="{{url('Company')}}">{{trans('menus.Company')}}</a></li>
               <li><a href="{{url('Statistics')}}">{{trans('menus.Statistics')}}</a></li>
            </ul>
         </li>
         <li><a href="{{url('services')}}">{{trans('menus.services')}}</a></li>
         <li class = "dropdown">
               <a href="#" class = "dropdown-toggle" data-toggle = "dropdown">{{trans('menus.products')}}
               <b class = "caret"></b>
            </a>
             <ul class = "dropdown-menu">
               @foreach(config('categories') as $key=>$value)
               <li class = ""><a href = "{{url('products',$key)}}">{{trans("menus.products.$value")}}</a></li>

               @endforeach
            </ul>
         </li>
         <li><a href="{{url('/gallery')}}">{{trans('menus.gallery')}}</a></li>
         <li><a href="{{url('/contact')}}">{{trans('menus.contact')}}</a></li>
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
   
</nav>
</div>
<!--menu-->
<br><br><br>
</div></div></div>
<!-- banner -->
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
@yield('content')
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<a href="/"><img src="{{asset('images/logo.png')}}"  style="position: relative;  width: 200px; height: 200px; left: 10; right: 0px; float: left;"></a>
					</div>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Informations de contact</h3>
					<h4>Appelez-nous <h3>+(216)76 63 04 70</h3></h4>
					<p>Société des Marchés de Production Du Centre SOMAPROC Avenu Habib bourguiba -Immeuble de l'entreprise - 3 ème étage <span>Sidi Bouzid 9100</span></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
					<h3>La Navigation</h3>
					<ul class="w3layouts_footer_nav">
						<li><a href="/"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Accueil</a></li>
						
						<li><a href="icons"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Icônes Web</a></li>
						<li><a href="typography"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Typographie</a></li>
						<li><a href="contact"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contactez Nous</a></li>

					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<h3>Postes de blog</h3>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('images/6.jpg')}}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('images/2.jpg')}}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('images/5.jpg')}}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="{{asset('images/3.jpg')}}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p>© 2017 <a href="http://Riatica.com" >Riatica</a>. Tous droits réservés | Concu par <a href="http://Riatica.com">Riatica.</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

</body>
</html>