@extends('master1')
 
@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
					<li><i class="fa fa-picture-o" aria-hidden="true"></i>{{trans('menus.Usefulllink')}}</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>{{trans('menus.Usefulllink')}}</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div><br><br>
<!-- //breadcrumbs -->
<div class="container">
		               <h3 class="agileits_w3layouts_head">{{trans('menus.Usefulllink')}}</h3>
			           <div class="w3_agile_image">
				          <img src="{{asset('images/1.png')}}" alt=" " class="img-responsive">
			           </div><br><br>
</div>
@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Prime minister')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im1.jpg')}}" alt=" " class="img-responsive">
	                     </div>
		                  <div class="clearfix"></div>
                    </div>
             </div>
		 <div class="col-md-6 cont wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s; left: 50px;" >
		         <center><h3>{{trans('uselink.Means of communication and addresses')}}</h3></center><br><br><br><br>
		         <div class="w3_agileits_mail_right_grid_main">
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.E-Mail')}}</h3>
								<a href="mailto:boc@pm.gov.tn">boc@pm.gov.tn</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Government Square Kasbah 1020 Tunisia')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.565.400</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.pm.gov.tn"><center>http://www.pm.gov.tn</center></a></p>
							</div>
				       
				        </div>
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>

<!--***-->

@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Interior')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im2.png')}}" alt=" " class="img-responsive">
	                     </div>
		                  <div class="clearfix"></div>
                    </div>
             </div>
		 <div class="col-md-6 cont wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s; left: 50px;" >
		         <center><h3>{{trans('uselink.Means of communication and addresses')}}</h3></center><br><br><br><br>
		         <div class="w3_agileits_mail_right_grid_main">
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.E-Mail')}}</h3>
								<a href="#">--!</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Street Habib Bourguiba 1000 Tunisia')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.333.000</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http:// www.interieur.gov.tn"><center>http:// www.interieur.gov.tn</center></a></p>
							</div>
				       
				        </div>
						
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>

@stop