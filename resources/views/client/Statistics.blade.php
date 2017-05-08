 @extends('master1')


@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
<script>


    var data ={
    labels: [
        "Autre",
        "Pommes de terres",
        "Tomates",
        "Artichauts",
        "Piments",
        "Melons-Pastèques",
        "Oignons",
    ],
    datasets: [
        {
            data: [13.1, 15.1, 21.2,1.3,21.8,18.5,9],
            backgroundColor: [
                "#92a9ce",
                "#4572a6",
                "#aa4643",
                "#84a54a",
                "#71588e",
                "#4098ae",
                "#da843d"
            ],
            hoverBackgroundColor: [
                "#92a9ce",
                "#4572a6",
                "#aa4643",
                "#84a54a",
                "#71588e",
                "#4098ae",
                "#da843d"
            ]
        }]
};


    window.onload = function() {

        var ctx = document.getElementById("canvas").getContext("2d");

        window.myBar = new Chart(ctx, {

            type: 'pie',

            data: data,

            options: {

                animation:{
                  animateScale:true,
                  animateRotate: true
                },
                responsive: true,
                
                title: {

                    display: true,

                    text: 'Répartition de la production maraichère en Tunisie selon les produits'

                },tooltips: {
      callbacks: {
        label: function(tooltipItem, data) {
          var dataset = data.datasets[tooltipItem.datasetIndex];
          var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
            return previousValue + currentValue;
          });
          var currentValue = dataset.data[tooltipItem.index];
          var precentage = Math.floor(((currentValue/total) * 100)+0.5);         
          return precentage + "%";
        }
      }
    }

            }

        });



};
</script>

  <div class="breadcrumbs">
    <div class="container">
      <div class="w3layouts_breadcrumbs_left">
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
          <li><i class="fa fa-info-circle" aria-hidden="true"></i>{{trans('menus.Statistics')}}</li>
        </ul>
      </div>
      <div class="w3layouts_breadcrumbs_right">
        <h2>{{trans('menus.Statistics')}}</h2>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<div class="container">
<div class="w3ls_news_grids"> 
<div class="col-md-7 w3_agile_about_grid_left">
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
<div class="col-md-5 w3_agile_about_grid_left">
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
          <div class="w3ls_news_grids"> 
<div class="col-md-6 col-md-offset-3 w3_agile_about_grid_right">
 <div class="bs-docs-example"  style="max-width: 850px;">
             <canvas id="canvas" ></canvas>
          </div>
          </div>
          </div>
          </div>

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


@stop