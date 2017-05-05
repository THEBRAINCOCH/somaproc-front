 @extends('master1')

@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>{{trans('menus.Company')}}</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>{{trans('menus.Company')}}</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -- >

<!-- about -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head"><span> {{trans('Company.the project')}}</span></h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" > 
	                           <center><span >OBJECTIF DU PROJET</span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                           Pour permettre à la région de SIDI BOUZID de maitriser l’écoulement de sa production agricole et aussi celle des régions limitrophe, il a été décidé lors d’un conseil ministériel tenu le 30 aout 2012, de créer un marché de production à sidi Bouzid. Une étude de faisabilité technique et financière du projet a été réalisée en 2013 et a permis de dimensionner le projet et de définir le site d’implantation et le programme d’aménagement.
	                </p>
	                </div>
	                <div class="col-md-6 w3_agile_about_grid_left">
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >DESCRIPTION DES COMPSANTES DU PROJET</span></center>
	                </h3>
	                <p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                          L’implantation d’un marché de production à Sidi Bouzid sur un terrain de 20 ha se trouvant à 11 km Sidi Bouzid et facilement accessible, doit répondre aux exigences spécifiques de la production, en respectant le cadre réglementaire et en s’intégrant au mieux dans son environnement.
	                </p>
				</div>
				
				<div class="col-md-12 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <hr><span><h3>Le projet se compose des éléments suivants:</h3></span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                  
							 - Les halles fermées de vente des légumes et fruits;<br>
							 - Les aires ouvertes de vente de pastèque, melon et autres légumes (oignon, ails, courge, ..);<br>
							 - Un bâtiment administratif et de services comporte outre les bureaux de directeur de marché et de ses collaborateurs des locaux pour différents service (bureau de   poste, agences bancaires, bureau de poste de douane, recette des finances, etc.).<br>
							 - Entrepôt de conditionnement et de stockage des fruits et légumes,<br>
							 - Un centre de vie et des locaux techniques. 
						
	                </p>
				</div>
				<div class="clearfix"> </div>
				
				<div class="col-md-4 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >1</span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                    Le bâtiment est implanté sur le terrain de manière à laisser un retrait suffisant par apport aux voiries pour protéger le voisinage des nuisances, le bâtiment s’implante d’une manière idéale.
	                </p>
				</div>
				<div class="col-md-4 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >2</span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                   Une entrée et sortie avec poste de contrôle sera destinée à tous les véhicules et piétons, celle-ci sera prévue à l’entrée du marché.
	                </p>
				</div>
				<div class="col-md-4 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >3</span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                    Plusieurs parkings sont prévus, à l’intérieur du site. Ils seront destinés au personnel administratif, aux différents opérateurs et clients du marché.
	                </p>
				</div>
				<div class="clearfix"> </div>
				<div class="col-md-8 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >4</span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                    La zone prévue pour l’extension sera aménagée en zone verte. Une voie de 10 mètres ceinture le bâtiment et les halles pour assurer la fluidité de la circulation véhiculaire, facilitera l’approvisionnement et le chargement des fruits et légumes et sera nécessaires pour répondre aux exigences de la sécurité incendie.
	                </p>
				</div>
				<div class="col-md-4 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >5</span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                   L’implantation des voieries et des bâtiments permet d’envisager la construction de futures extensions dans la zone laissée verte.
	                </p>
				</div>
            <br><br>
            <h1 style=" 
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >Plan</span></center>
	         </h1>
		    <div class="w3_agile_image">
				<img src="images/plan.png" alt=" " class="img-responsive" />
			</div>
				
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
<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

@stop