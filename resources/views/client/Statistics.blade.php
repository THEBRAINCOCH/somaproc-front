 @extends('master1')


@section('content')
<div class="container">
<div class="w3ls_news_grids"> 
<div class="col-md-6 w3_agile_about_grid_left">
 <div class="bs-docs-example"  style="max-width: 850px;">
              <div class="table-responsive">
				<table class="table table-bordered" >
					<thead>
						<tr style="background-color: #a4dd25">
							<th  style="color: #000;"><center>Espace</center></th>
							<th  style="color: #000;"><center>Nombre</center></th>
							<th  style="color: #000;"><center>Surface (m<sup>2</sup>)</center></th>
							<th  style="color: #000;"><center>Surface en total (m<sup>2</sup>) </center></th>
						</tr>
					</thead>
					<tbody>
						 
                            <tr>
                               <td style="color: #000;" align="center">halles légumes et fruits fermées</td>
                               <td align="center">3</td>
                               <td align="center">6750</td>
                               <td align="center">20 250</td>
                            </tr>
                            <tr>
                               <td style="color: #000;" align="center">Aire pastèques / melons couverts</td>
                               <td align="center">1</td>
                               <td align="center">4300</td>
                                 <td align="center">4300</td>
                            </tr>
                            <tr>
                               <td style="color: #000;" align="center">Parking  et voirie </td>
                               <td align="center">-</td>
                               <td align="center">-</td>
                                 <td align="center">44 000</td>
                            </tr>
                              <tr>
                                 <td style="color: #000;" align="center">Entrepôts conditionnement et stockage </td>
                                 <td align="center">2</td>
                                 <td align="center">1400</td>
                                 <td align="center">2800</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center"> Administration et bureaux/postes de services</td>
                                 <td align="center">1</td>
                                 <td align="center">2000</td>
                                 <td align="center">2000</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center"> Centre de vie et locaux techniques</td>
                                 <td align="center">1</td>
                                 <td align="center">1000</td>
                                 <td align="center">1000</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center"> Espaces verts</td>
                                 <td align="center">1</td>
                                 <td align="center">5650</td>
                                 <td align="center">5650</td>
                              </tr>
                              <tr>
                                 <th style="color: #000;" style="color: #000;"><center>TOTAL</center></th>
                                 <th style="color: #000;"><center>-</center></th>
                                 <th style="color: #000;"><center>-</center></th>
                                 <th style="color: #000;"><center>80 000</center></th>
                              </tr>
					</tbody>
				</table>
			</div>
</div>
</div>
</div>
<div class="w3ls_news_grids"> 
<div class="col-md-6 w3_agile_about_grid_left">
 <div class="bs-docs-example"  style="max-width: 850px;">
              <div class="table-responsive">
				<table class="table table-bordered" >
				<thead>
						<tr style="background-color: #a4dd25">
							<th  style="color: #000;"><center>Année</center></th>
							<th  style="color: #000;"><center>Volume vendu (T/j)</center></th>
							<th  style="color: #000;"><center>Volume vendu (T/an)</center></th>
							<th  style="color: #000;"><center>Nombre de halle en exploitation</center></th>
						</tr>
					</thead>
					<tbody>
                            <tr>
                               <td align="center">1ère année</td>
                               <td align="center">200</td>
                               <td align="center">60 000</td>
                               <td align="center">01</td>
                            </tr>
                            <tr>
                               <td align="center">2<sup>ème</sup> année</td>
                               <td align="center">200</td>
                               <td align="center">60 000</td>
                               <td align="center">01</td>
                            </tr>
                            <tr>
                               <td align="center">3<sup>ème</sup> année</td>
                               <td align="center">300</td>
                               <td align="center">90 000</td>
                                 <td align="center">02</td>
                            </tr>
                              <tr>
                                 <td align="center">4<sup>ème</sup> année </td>
                                 <td align="center">400</td>
                                 <td align="center">120 000</td>
                                 <td align="center">02</td>
                              </tr>
                              <tr>
                                 <td align="center">5<sup>ème</sup> année</td>
                                 <td align="center">600</td>
                                 <td align="center">180 000</td>
                                 <td align="center">03</td>
                              </tr>
					</tbody>
					</table>
					</div>
					</div>
					</div>
					</div>
					</div>

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