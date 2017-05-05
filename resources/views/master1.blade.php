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
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
<!-- js -->
<!-- gallery -->
<link href="{{asset('css/lsb.css')}}" rel="stylesheet" type="text/css">
<!-- //gallery -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

<!-- font-awesome-icons -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="{{asset('//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext')}}" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!-- start-smoth-scrolling-->
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
<!---End-smoth-scrolling-->
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
<!---/End-Animation-->
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
			
	  <div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<a href="/"><img src="{{asset('images/logo.png')}}"  style="  padding-bottom: 80px; width: 300px; height: 300px;   float: left;"></a>
				</div>
	</div>	
		<div class="container">
			<div id="header-wrapper">
	 <div class="agile_social_icons_banner">
                  <div class="w3_banner_info_grid pull-right" >
					<ul>
						<li ><a style="padding:5px 20px;" href="{{route('language-choose','ar')}}" class="w3l_contact">{{trans('languages.ar')}}</a></li>
						<li><a style="padding:5px 20px;" href="{{route('language-choose','fr')}}" class="w3l_contact">{{trans('languages.fr')}}</a></li>
						<li><a style="padding:5px 20px;" href="{{route('language-choose','en')}}}" class="w3l_contact">{{trans('languages.en')}}</a></li>
					</ul>
				   </div>
				   <br><br>
					<ul class="agileits_social_list pull-right" >
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div><br><br><br><br><br><br><br><br>
				<div class="menu_h" style="{
    width: 1500px;
    height: 60px;
    overflow: hidden;
    display: block;
"> 
									<a  class="bt_menu_h" href="contact">{{trans('menus.contact')}}</a>
									<a  class="bt_menu_h" href="gallery">{{trans('menus.gallery')}}</a>
									<a class="bt_menu_h" href="products">{{trans('menus.products')}}</a>
									<a class="bt_menu_h" href="services">{{trans('menus.services')}}</a>
									<a  class="bt_menu_h"href="Statistics">{{trans('menus.Statistics')}}</a>
									<a  class="bt_menu_h"href="Company">{{trans('menus.Company')}}</a>
									<a  class="bt_menu_h"href="about">{{trans('menus.about')}}</a>
									<a class="bt_menu_h" href="/">{{trans('menus.home')}}</a>
							   
							  <div class="clearfix"> </div>
					</div>

<style type="text/css">
	a.bt_menu_h{
	height: 60px;
    display: block;
    float: right;
    /* border-top: 2px #dd5b0d solid; */
    /* border-right: 1px #c8c8c8 solid; */
    background: url() no-repeat 100% 0%;
    text-align: center;
    padding: 9px 23px 5px 23px;
    font: 15px HelveticaNeueBold,Tahoma, Geneva, sans-serif;
    line-height: 20px;
    color: #ffffff;
    text-decoration: none;
}
</style>
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