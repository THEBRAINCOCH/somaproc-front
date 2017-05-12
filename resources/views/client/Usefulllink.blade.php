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

<!--1-->
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

<!--*2*-->

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



<!--*3*-->

@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Finance')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im3.jpg')}}" alt=" " class="img-responsive">
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
								<a href="#">pcontenu@finances.gov.tn</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Government Square Kasbah 1030 Tunisia')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.571.888<br>00216.71.563.959</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.finances.gov.tn"><center>http://www.finances.gov.tn</center></a></p>
							</div>
				       
				        </div>
						
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>


<!--*4*-->

@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Development, Investment and International Cooperation')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im4.png')}}" alt=" " class="img-responsive">
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
								<a href="#">---</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Place Ali Zouaoui Tunisia 1069')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.240.133<br>00216.71.350.753</p>
								<h3>{{trans('uselink.FAX')}}</h3>
								<p>00216.71.351.666</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.mdci.gov.tn"><center>http://www.mdci.gov.tn</center></a></p>
							</div>
				       
				        </div>
						
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>



<!--*5*-->

@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Industry and Trade')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im5.jpg')}}" alt=" " class="img-responsive">
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
								<a href="#">mcmr@ministeres.tn</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Khairuddin Pacha Tunis Street 37 1002')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.890.070<br>00216.71.890.337</p>
								<h3>{{trans('uselink.FAX')}}</h3>
								<p>00216.71.781.324</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.commerce.gov.tn"><center>http://www.commerce.gov.tn</center></a></p>
							</div>
				       
				        </div>
						
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>

<!--6-->


@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Agriculture, Water Resources and Fisheries')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im6.jpg')}}" alt=" " class="img-responsive">
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
								<a href="#">onagri@email.ati.tn</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Alain Savary Street Number 30-1002 Tunisia')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.786.833</p>
								<h3>{{trans('uselink.FAX')}}</h3>
								<p>00216.71.780.391<br>00216.71.799.833</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.agriculture.tn"><center>http://www.agriculture.tn</center></a></p>
							</div>
				       
				        </div>
						
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>


<!--7-->


@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Equipment, Housing and Urban Planning')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im7.jpg')}}" alt=" " class="img-responsive">
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
								<a href="#">brc@mehat.gov.tn</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Al Omrani North Center, 1080 Land Street Tunis')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.842.244</p>
								<h3>{{trans('uselink.FAX')}}</h3>
								<p>00216.71.840.495</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.mehat.gov.tn"><center>http://www.mehat.gov.tn</center></a></p>
							</div>
				       
				        </div>
						
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>


<!--8-->


@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Health')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im8.jpg')}}" alt=" " class="img-responsive">
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
								<a href="#">msp@ministeres.tn</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Bab Saadoun 1006 Tunisia')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.71.560.545</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.santetunisie.rns.tn"><center>http://www.santetunisie.rns.tn</center></a></p>
							</div>
				       
				        </div>
						
					</div>
		            
		  </div>
		        <div class="clearfix"></div><br><br>
		</div>
     </div>
   </div>  
</div>





<!--9-->


@if (session()->get('locale')=="ar")
<div class="categories-section" dir="rtl">
@else
	<div class="categories-section" >
@endif

<div class="well"> 
  <div class="container">
		<div class="footer-grids">
			<div class="col-md-6 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" align="center">
	              <h3>{{trans('uselink.Ministry of Local Affairs and Environment')}}</h3>
	              <br><br>
	                <div class="up1">
	                     <div class="up-img">
	                         <img src="{{asset('images/uselink/im9.jpg')}}" alt=" " class="img-responsive">
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
								<a href="#">---</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Address')}}</h3>
								<p>{{trans('uselink.Al Omrani North Center, 1080 Land Street Tunis')}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							</div>
							<div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Téléphone')}}</h3>
								<p>00216.70.728.644<br>00216.70.728.455<br>00216.70.728.674</p>
								<h3>{{trans('uselink.FAX')}}</h3>
								<p>00216.70.728.655</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>
						<div class="w3layouts_mail_grid_left">
							<div class="w3layouts_mail_grid_left1 hvr-radial-out"> 
				            <span class="glyphicon glyphicon-signal" aria-hidden="true" ></span>
				        </div>
				        <div class="w3layouts_mail_grid_left2">
								<h3>{{trans('uselink.Officel Web Site')}}</h3>
								<p><a href="http://www.environnement.gov.tn"><center>http://www.environnement.gov.tn</center></a></p>
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