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
@if (session()->get('locale')=="ar")
	<div class="welcome"  dir="rtl">
@else
	<div class="welcome" >
@endif
		<div class="container">
			<h3 class="agileits_w3layouts_head"><span> {{trans('Company.Le projet')}}</span></h3>
			<div class="w3_agile_image">
				<img src="{{asset('images/1.png')}}" alt=" " class="img-responsive" />
			</div>
			
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" > 
	                           <center><span >{{trans('Company.L’objectif du projet')}}</span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                       {{trans('Company.Pour permettre à la région de SIDI BOUZID de maitriser l’écoulement de sa production agricole et aussi celle des régions limitrophe')}}, 
	                       {{trans('Company.il a été décidé lors d’un conseil ministériel tenu le 30 aout 2012, de créer un marché de production à sidi Bouzid')}}. 
	                       {{trans('Company.Une étude de faisabilité technique et financière du projet a été réalisée en 2013 et a permis de dimensionner le projet et de définir le site d implantation et le programme d’aménagement')}}.
	                </div>
	                <div class="col-md-6 w3_agile_about_grid_left">
	                <h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >{{trans('Company.DESCRIPTION DES ELEMENTS DU PROJET')}}</span></center>
	                </h3>
	                <p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                          {{trans('Company.L’implantation d’un marché de production à Sidi Bouzid sur un terrain de 20 ha se trouvant à 11 km Sidi Bouzid et facilement accessible, doit répondre aux exigences spécifiques de la production, en respectant le cadre réglementaire et en s’intégrant au mieux dans son environnement.')}}
	                </p>
				</div>
				
				<div class="col-md-12 w3_agile_about_grid_left">
					<h3 style=" font-size:20px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <hr><span><h3>{{trans('Company.Le projet se compose des éléments suivants:')}}</h3></span></center>
	                </h3>
					<p style=" font-size:14px;
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;">
	                  
							 {{trans('Company.- les halles fermées de vente des légumes et fruits;')}} <br> 
                            {{trans('Company.- les aires ouvertes de vente de pastèque, melon et autres légumes (oignon, ails, courge, ..);')}}
                            <br>
							 {{trans('Company.- Un bâtiment administratif et de services comporte outre les bureaux de directeur de marché et de ses collaborateurs des locaux pour différents service (bureau de poste, agences bancaires, bureau de poste de douane, recette des finances, etc.).')}}<br>
							 {{trans('Company.- Entrepôt de conditionnement et de stockage des fruits et légumes,')}}<br>
							 {{trans('Company.- Un centre de vie et des locaux techniques.')}}. 
						
	                </p>
				</div>
				<div class="clearfix"> </div>
				@if (session()->get('locale')=="ar")
				<div class="col-md-4 w3_agile_about_grid_left" dir="rtl">
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
	                    {{trans('Company.Plusieurs parkings sont prévus, à l’intérieur du site. Ils seront destinés au personnel administratif, aux différents opérateurs et clients du marché.')}}
	                </p>
				</div>
				
				<div class="col-md-4 w3_agile_about_grid_left" dir="rtl">
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
	                   {{trans('Company.Une entrée et sortie avec poste de contrôle sera destinée à tous les véhicules et piétons, celle-ci sera prévue à l’entrée du marché.')}}
	                </p>
				</div>
				
				<div class="col-md-4 w3_agile_about_grid_left" dir="rtl">
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
	                    {{trans('Company.Le bâtiment est implanté sur le terrain de manière à laisser un retrait suffisant par apport aux voiries pour protéger le voisinage des nuisances, le bâtiment s’implante d’une manière idéale.')}}
	                </p>
				</div>
				
				<div class="col-md-8 w3_agile_about_grid_left" dir="rtl">
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
	                    {{trans('Company.La zone prévue pour l’extension sera aménagée en zone verte. Une voie de 10 mètres ceinture le bâtiment et les halles pour assurer la fluidité de la circulation véhiculaire, facilitera l’approvisionnement et le chargement des fruits et légumes et sera nécessaires pour répondre aux exigences de la sécurité incendie.')}}.
	                </p>
				</div>
<div class="col-md-4 w3_agile_about_grid_left" dir="rtl">
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
	                   {{trans('Company.L’implantation des voieries et des bâtiments permet d’envisager la construction de futures extensions dans la zone laissée verte.')}}
	                </p>
				</div>
				<div class="clearfix"> </div>
				
			@else
			<div class="col-md-4 w3_agile_about_grid_left" >
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
	                    {{trans('Company.Le bâtiment est implanté sur le terrain de manière à laisser un retrait suffisant par apport aux voiries pour protéger le voisinage des nuisances, le bâtiment s’implante d’une manière idéale.')}}
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
	                   {{trans('Company.Une entrée et sortie avec poste de contrôle sera destinée à tous les véhicules et piétons, celle-ci sera prévue à l’entrée du marché.')}}
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
	                    {{trans('Company.Plusieurs parkings sont prévus, à l’intérieur du site. Ils seront destinés au personnel administratif, aux différents opérateurs et clients du marché.')}}
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
	                    {{trans('Company.La zone prévue pour l’extension sera aménagée en zone verte. Une voie de 10 mètres ceinture le bâtiment et les halles pour assurer la fluidité de la circulation véhiculaire, facilitera l’approvisionnement et le chargement des fruits et légumes et sera nécessaires pour répondre aux exigences de la sécurité incendie.')}}
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
	                   {{trans('Company.L’implantation des voieries et des bâtiments permet d’envisager la construction de futures extensions dans la zone laissée verte.')}}
	                </p>
				</div>
				@endif
            <br><br>
            <h1 style=" 
	                           color:#312F2F;
	                           font-weight:400;
	                           line-height: 1.8em;
	                           margin-bottom: 1em;
	                           text-align: justify;" >
	                          <center> <span >{{trans('Company.Plan')}}</span></center>
	         </h1>
		    <div class="w3_agile_image">
				<img src="{{asset('images/plan.png')}}" alt=" " class="img-responsive" />
			</div>
				
			</div>
		</div>
	</div>
<!-- //about -->

<!-- skills -->
	<script src="{{asset('js/skill.bars.jquery.js')}}"></script>
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
<!-- //menu -->


@stop