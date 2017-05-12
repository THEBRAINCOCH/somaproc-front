 @extends('master1')

@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>{{trans('menus.about')}}</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>{{trans('menus.about')}}</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -- >

<!-- about -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{trans('about.why')}} <span> {{trans('about.Choose')}}</span> {{trans('about.Us')}}</h3>
			<div class="w3_agile_image">
				<img src="{{asset('images/1.png')}}" alt=" " class="img-responsive" />
			</div>
			
			<div class="w3ls_news_grids"> 
@if (session()->get('locale')=="ar")
				<div class="col-md-12 w3_agile_about_grid_left" dir="rtl">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" > 
	                           <span >{{trans('about.Somaproc')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La SOMAPROC est une Société Anonyme qui opére dans le domaine de l’agroalimentaire et qui  à pour objectif la valorisation des produits agricoles et l’organisation de leurs circuits de distribution.')}}<br>
                               {{trans('about.Cette société publique à été creée en 2016 a Sidi Bouzid.')}}
	                </p>
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.SIEGE SOCIAL')}}</span>
	                </h3>
	                <p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                          {{trans('about.Le siège sociale de la société est fixé au Siège du Gouvernorat de Sidi-Bouzid - Avenu Habib Bourguiba - 9100 Sidi Bouzid.')}}
                               {{trans('about.Il pourra etre transféré à tout autre endroit par décision de l’Assmblée Générale Extraordinaire des actionnaires.')}}
	                </p>
				</div>
				
				<div class="col-md-12 w3_agile_about_grid_left" dir="rtl">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.OBJET')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La Société a pour objet l’implantation et la gestion des marchés de production de Sidi Bouzid destiné à la vente en gros des produits agricole destinés aux producteurs afin de faciliter la collecte, la standardisation, le conditionnement, la conservation et la formation des prix des produits agricoles ainsi que l’exercice de toute activité rentrant dans le cadre de l’objet social précité ou qui lui sont connexes et généralement toutes opérations industrielles commerciales ou financières, mobilières ou immobilières se rattachant directement ou indirectement à l’objet social ainsi que toutes opérations annexes pouvant présenter de l’utilité pour la société, favoriser ou développer ses intérêts.')}}
	                </p>
				</div>
				
				<div class="col-md-12 w3_agile_about_grid_left" dir="rtl">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.DUREE')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La durée de la société est fixée à 99 années à compter de sa constitution définitive,sauf les cas de prorogation ou de dissolution anticipée prévues aux présents statuts.')}}
	                </p>
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.FORMATION')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.Entre toutes les personnes qui seront propriétaires d’actions ci après créées, et celles qui pourront l’être ultérieurement, il est formé une Société Anonyme qui sera régie par les lois en vigueur et par les présents statuts.')}}
	                           
	                </p>
				</div>

				<div class="col-md-12 w3_agile_about_grid_left" dir="rtl">
					
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.DÉNOMINATION')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La société prend la dénomination de:« Société de Marché de production du Centre ». Outre cette dénomination,la société peut, indifférement, séparément et uniquement utiliser la dénomination en abrégé SOMAPROC. Tous les actes et documents émanat de la société doivent mentionner la dénomination sociale, précédée ou suivie immédiatement des mots « société anonym » ou des initiales « S.A. », de l’énonciation du montant du capital social et des numéros et lieu de son immatriculation au Registre de Commerce.')}}
	                </p>
				</div>
@else
<div class="col-md-4 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" > 
	                           <span >{{trans('about.Somaproc')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La SOMAPROC est une Société Anonyme qui opére dans le domaine de l’agroalimentaire et qui  à pour objectif la valorisation des produits agricoles et l’organisation de leurs circuits de distribution.')}}<br>
                               {{trans('about.Cette société publique à été creée en 2016 a Sidi Bouzid.')}}
	                </p>
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.SIEGE SOCIAL')}}</span>
	                </h3>
	                <p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                          {{trans('about.Le siège sociale de la société est fixé au Siège du Gouvernorat de Sidi-Bouzid - Avenu Habib Bourguiba - 9100 Sidi Bouzid.')}}
                               {{trans('about.Il pourra etre transféré à tout autre endroit par déscision de l’Assmblée Générale Extraordinaire des actionnaires.')}}
	                </p>
				</div>
				
				<div class="col-md-4 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.OBJET')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La Société a pour objet l’implantation et la gestion des marchés de production de Sidi Bouzid destiné à la vente en gros des produits agricole destinés aux producteurs afin de faciliter la collecte, la standardisation, le conditionnement, la conservation et la formation des prix des produits agricoles ainsi que l’exercice de toute activité rentrant dans le cadre de l’objet social précité ou qui lui sont connexes et généralement toutes opérations industrielles commerciales ou financières, mobilières ou immobilières se rattachant directement ou indirectement à l’objet social ainsi que toutes opérations annexes pouvant présenter de l’utilité pour la société, favoriser ou développer ses intérêts.')}}
	                </p>
				</div>
				
				<div class="col-md-4 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.DUREE')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La durée de la société est fixée à 99 années à compter de sa constitution définitive,sauf les cas de prorogation ou de dissolution anticipée prévues aux présents statuts.')}}
	                </p>
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.FORMATION')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.Entre toutes les personnes qui seront propriétaires d’actions ci après créées, et celles qui pourront l’être ultérieurement, il est formé une Société Anonyme qui sera régie par les lois en vigueur et par les présents statuts.')}}
	                           
	                </p>
				</div>

				<div class="col-md-12 w3_agile_about_grid_left">
					
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                           <span >{{trans('about.DÉNOMINATION')}}</span>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           {{trans('about.La société prend la dénomination de:« Société de Marché de production du Centre ». Outre cette dénomination,la société peut, indifférement, séparément et uniquement utiliser la dénomination en abrégé SOMAPROC. Tous les actes et documents émanat de la société doivent mentionner la dénomination sociale, précédée ou suivie immédiatement des mots « société anonym » ou des initiales « S.A. », de l’énonciation du montant du capital social et des numéros et lieu de son immatriculation au Registre de Commerce.')}}
	                </p>
				</div>
@endif				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->

<!-- skills -->
	<script src="js/skill.bars.jquery.js"></script>
	<script>
		$(document).ready(function(){
			
			$('.skillbar').skillBars({
				from: 0,
				speed: 4000, 
				interval: 100,
				decimals: 0,
			});
			
		});
	</script>
<!-- //skills -->
<!-- about-bottom -->
	<div class="about-bottom" dir="rtl">
		<div class="container"><br><br>
			<h3><span>{{trans('about.SOMAPROC ')}}</span>{{trans('about. Est La Solution La Plus Appropriée Pour La Valorisation Produits Agricoles en')}}<span>{{trans('about. Tunisie ')}}</span></h3>
		</div>
	</div>
<!-- //about-bottom -->

<!-- team -->
	<div class="testimonials">
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{trans('about. Rencontrez')}} <span>{{trans('about. notre')}}</span>{{trans('about. équipe')}}</h3>
			<div class="w3_agile_image">
				<img src="{{asset('images/1.png')}}" alt=" " class="img-responsive" />
			</div>
			<div class="w3ls_news_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="{{asset('images/team/PDG.jpg')}}" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
                                      <h5>{{trans('about.Hamdi Lotfi')}}<span>{{trans('about. président dirécteur générale ')}}</span>{{trans('about. De ')}}<i>{{trans('about.’SOMAPROC’')}}</i></h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p><h3>{{trans('about.Vétérinaire et  président dirécteur générale des marchés de la société de production Du centre')}}</h3></p><br>
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="{{asset('images/team/islem.jpg')}}" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>{{trans('about.Badri Isslam ')}}</h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p><h3>{{trans('about.Assistance De')}}{{trans('about.Direction')}}</h3></p><br>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="{{asset('images/team/PDG.jpg')}}" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>{{trans('about.Achouri Hamadi')}}</h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p><h3>{{trans('about.Résponsable Téchnique')}}</h3></p><br>
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
	<br><br><br>
<!-- //team -->
<!-- ACTIONNAIRES -->


	<div class="welcome" style="background: url(../images/21.jpg) no-repeat 0px 0px;
    background-size:;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
	text-align: center;">
		<div class="container">
			<h3 class="agileits_w3layouts_head">{{trans('about. Rencontrez')}} <span> {{trans('about. notre')}} </span>  {{trans('about. Actionnaires ')}}</h3>
			<div class="w3_agile_image">                                      
				<img src="{{asset('images/1.png')}}" alt=" " class="img-responsive" />
	        </div>
  <div class="project-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">	
			<div class="w3ls_news_grids w3_agileits_team_grids" style="background-color: rgb(0, 0, 0, 0.75);"> 
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/a10.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Conseil Régional<h5>Gouvernorat SBZ</h5></h4>
					
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/10.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>CPSCL<h5>Caisse des Prets et de Soutien des Collectivités Locales</h5></h4>
					
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/a11.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>CDC<h5>Caisse de Dépots et de Consignations</h5></h4>
					
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/a12.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Municipalité<h5>SBZ</h5></h4>
				</div>
				
				<div class="clearfix"> </div>
				<br>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/a13.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>SODESIB SICAR</h4>
					
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/a14.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Citech<h5>SBZ</h5></h4>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/a15.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Municipalité Regueb<h5>SBZ</h5></h4>
				</div>
				<div class="col-md-3 w3_agileits_team_grid"> 
					<div class="w3layouts_news_grid">
						<img src="{{asset('images/a16.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text agileinfo_about_text">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Municipalité Jelma<h5>SBZ</h5></h4>	
				</div>

				<div class="clearfix"> </div>
			</div><br>

		</div>
	</div>
</div>
<!-- //ACTIONNAIRES -->
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


@stop