@extends('master1')

@section('content')
<!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="w3layouts_breadcrumbs_left">
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Accueil</a><span>/</span></li>
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i>Actualité</li>
        </ul>
      </div>
      <div class="w3layouts_breadcrumbs_right">
        <h2>Actualité</h2>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //breadcrumbs -->
   <!--newsCarousel.css-->
 <link href="//cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link href="css/NewsCarousel" rel="stylesheet" type="text/css" media="all" />
   <!-- //newsCarousel.css-->
  <div class="welcome" style="background: url(../images/21.jpg) no-repeat 0px 0px;
    background-size:;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
  text-align: center;">
    <div class="container">
      <h3 class="agileits_w3layouts_head">Notre <span>Actualité</span></h3>
      <div class="w3_agile_image">
        <img src="images/1.png" alt=" " class="img-responsive" />
      </div>
   
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>

<section class="banner-sec">
 <div class="container">
     <div class="row">
     <div class="col-md-6 top-slider" >
     <h4>Actualité Ce jour<h4>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color: rgba(0, 0, 0, 0.4); padding-top: 15px"> <br><br><br>
                <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/media-5.jpg" alt=""></div>
                <div class="news-title">
                        <h2 class=" title-large"><a href="#">Ray madison may struggle to get best from Paul in a 4-2-3-1 </a></h2>
                      </div>
                <div class="news-des"><h6 style="color: #fff;">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</h6></div>
                <div class="time-text"><strong>2h ago</strong></div>
                <div></div>
              </div>
                  </div>
            <div class="carousel-item">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/media-6.jpg" alt=""></div>
                <div class="news-title">
                        <h2 class=" title-large"><a href="#">An Alternative Form of Mental Health Care Gains a Foothold</a></h2>
                      </div>
                <div class="news-des"><h6 style="color: #fff;">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</h6></div>
                <div class="time-text"><strong>2h ago</strong></div>
                <div></div>
              </div>
                  </div>
            <div class="carousel-item">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/media-7.jpg" alt=""></div>
                <div class="news-title">
                        <h2 class=" title-large"><a href="#">Key Republican Senator Says She Will Not Vote for former president!</a></h2>
                      </div>
                <div class="news-des" ><h6 style="color: #fff;">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</h6></div>
                <div class="time-text"><strong>2h ago</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-md-6 style="background-color: rgba(0, 0, 0, 0.4); padding-top: 15px;">
    <div class="grid_3 grid_5 agile">
       <div class="well">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
        </div>
        <div class="well">
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
        </div>
        <div class="well">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here
        </div>
        <div class="well">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
        </div>
        <div class="well">
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
        </div>
      </div>
      </div>
    </div>
</section>
</div>
</div>

<br><br><br>
<section class="section-01" >
    <div class="container">
        <div class=" col-md-12">
        <h3 class="heading-large" align="center">Conseil d'administration</h3>
            <div class="col-lg-4 card">
             <div class="card"> <img class="img-fluid" src="images/Direction/d2.jpg" alt="">
              <div class="card-block">
              <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
             </div>
            </div>
            <div class="col-lg-4 card">
             <div class="card"> <img class="img-fluid" src="images/Direction/d2.jpg" alt="">
              <div class="card-block">
              <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
             </div>
            </div>
            <div class="col-lg-4 card">
             <div class="card"> <img class="img-fluid" src="images/Direction/d2.jpg" alt="">
              <div class="card-block">
              <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
             </div>
            </div>
       </div>
    </div>
   </section>
   <br><br><br>
      
  <script type="text/javascript">
  $(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
    $('#myCarousel .list-group-item').outerHeight(triggerheight);
});

var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];
var dayNames= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]

var newDate = new Date();
newDate.setDate(newDate.getDate() + 1);    
$('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
  </script>
<!--//gallery-->


<!-- flexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
      
      start: function(slider){
        $('body').removeClass('loading');
      }
      });
    });
  </script>
<!-- //flexSlider -->     

      
    </div>
  </div>
<!-- //gallery -->
  <script src="js/lsb.min.js"></script>
  <script>
  $(window).load(function() {
      $.fn.lightspeedBox();
    });
  </script>

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
      
     