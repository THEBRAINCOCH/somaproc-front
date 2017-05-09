 @extends('master1')


@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
<script>


    var data ={
    labels: [
        "{{trans('statistics.Autre')}}",
        "{{trans('statistics.Pommes de terres')}}",
        "{{trans('statistics.Tomates')}}",
        "{{trans('statistics.Artichauts')}}",
        "{{trans('statistics.Piments')}}",
        "{{trans('statistics.Melons-Pastèques')}}",
        "{{trans('statistics.Oignons')}}",
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
@if (session()->get('locale')=="ar")
 <div class="col-md-5 w3_agile_about_grid_left" dir="rtl">
           <div class="bs-docs-example"  style="max-width: 850px;">
              <h2 style="font-family: "Times New Roman", Times, serif;" align="center">{{trans('statistics.Distribution of market gardening production in Tunisia by product')}}</h2>
                 <canvas id="canvas" ></canvas>
          </div>
 </div>
@else
<div class="col-md-5 w3_agile_about_grid_left" >
           <div class="bs-docs-example"  style="max-width: 850px;">
              <h2 style="font-family: "Times New Roman", Times, serif;" align="center">{{trans('statistics.Distribution of market gardening production in Tunisia by product')}}</h2>
                 <canvas id="canvas" ></canvas>
          </div>
 </div>
@endif
<div class="col-md-7 w3_agile_about_grid_left">

 <div class="bs-docs-example"  style="max-width: 850px;">

  <div class="table-responsive">

@if (session()->get('locale')=="ar")
<h2 style="font-family: "Times New Roman", Times, serif;" align="center">{{trans('statistics.DEVELOPMENT PROGRAM')}}</h3><br><br>
        <table class="table table-bordered" dir="rtl">
          <thead>
            <tr style="background-color: #a4dd25">
              <th  style="color: #000;"><center>{{trans('statistics.Space')}}</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Number')}}</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Area')}}(m<sup>2</sup>)</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Total area')}}(m<sup>2</sup>) </center></th>
            </tr>
          </thead>
          <tbody>
             
                            <tr>
                               <td style="color: #000;" align="center">{{trans('statistics.Closed vegetable and fruit hall')}}</td>
                               <td align="center">3</td>
                               <td align="center">6750</td>
                               <td align="center">20 250</td>
                            </tr>
                            <tr>
                               <td style="color: #000;" align="center">{{trans('statistics.Area watermelon / melons covered')}}</td>
                               <td align="center">1</td>
                               <td align="center">4300</td>
                                 <td align="center">4300</td>
                            </tr>
                            <tr>
                               <td style="color: #000;" align="center">{{trans('statistics.Parking and roads')}} </td>
                               <td align="center">-</td>
                               <td align="center">-</td>
                                 <td align="center">44000</td>
                            </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Warehouses storage and storage')}}</td>
                                 <td align="center">2</td>
                                 <td align="center">1400</td>
                                 <td align="center">2800</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Administration and offices / service stations')}}</td>
                                 <td align="center">1</td>
                                 <td align="center">2000</td>
                                 <td align="center">2000</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Living and technical premises')}}</td>
                                 <td align="center">1</td>
                                 <td align="center">1000</td>
                                 <td align="center">1000</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Green spaces')}}</td>
                                 <td align="center">1</td>
                                 <td align="center">5650</td>
                                 <td align="center">5650</td>
                              </tr>
                              <tr>
                                 <th style="color: #000;" style="color: #000;"><center>{{trans('statistics.TOTAL')}}</center></th>
                                 <th style="color: #000;"><center>-</center></th>
                                 <th style="color: #000;"><center>-</center></th>
                                 <th style="color: #000;"><center>80000</center></th>
                              </tr>
          </tbody>
        </table>
@else
<h2 style="font-family: "Times New Roman", Times, serif;" align="center">{{trans('statistics.DEVELOPMENT PROGRAM')}}</h3><br>
<table class="table table-bordered" >
          <thead>
            <tr style="background-color: #a4dd25">
              <th  style="color: #000;"><center>{{trans('statistics.Space')}}</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Number')}}</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Area')}}(m<sup>2</sup>)</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Total area')}}(m<sup>2</sup>) </center></th>
            </tr>
          </thead>
          <tbody>
             
                            <tr>
                               <td style="color: #000;" align="center">{{trans('statistics.Closed vegetable and fruit hall')}}</td>
                               <td align="center">3</td>
                               <td align="center">6750</td>
                               <td align="center">20 250</td>
                            </tr>
                            <tr>
                               <td style="color: #000;" align="center">{{trans('statistics.Area watermelon / melons covered')}}</td>
                               <td align="center">1</td>
                               <td align="center">4300</td>
                                 <td align="center">4300</td>
                            </tr>
                            <tr>
                               <td style="color: #000;" align="center">{{trans('statistics.Parking and roads')}} </td>
                               <td align="center">-</td>
                               <td align="center">-</td>
                                 <td align="center">44000</td>
                            </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Warehouses storage and storage')}}</td>
                                 <td align="center">2</td>
                                 <td align="center">1400</td>
                                 <td align="center">2800</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Administration and offices / service stations')}}</td>
                                 <td align="center">1</td>
                                 <td align="center">2000</td>
                                 <td align="center">2000</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Living and technical premises')}}</td>
                                 <td align="center">1</td>
                                 <td align="center">1000</td>
                                 <td align="center">1000</td>
                              </tr>
                              <tr>
                                 <td style="color: #000;" align="center">{{trans('statistics.Green spaces')}}</td>
                                 <td align="center">1</td>
                                 <td align="center">5650</td>
                                 <td align="center">5650</td>
                              </tr>
                              <tr>
                                 <th style="color: #000;" style="color: #000;"><center>{{trans('statistics.TOTAL')}}</center></th>
                                 <th style="color: #000;"><center>-</center></th>
                                 <th style="color: #000;"><center>-</center></th>
                                 <th style="color: #000;"><center>80000</center></th>
                              </tr>
          </tbody>
        </table>
@endif
      </div>
</div>
</div>


</div>

<div class="w3ls_news_grids"> 
@if (session()->get('locale')=="ar")
   <div class="col-md-6 content-row-column" dir="rtl">
@else
<div class="col-md-6 content-row-column" >
@endif
   <h2 style="font-family: "Times New Roman", Times, serif;"><center><br><br>{{trans('statistics.In terms of impacts, we distinguish the following impacts')}}: <br><br></center></h2>
                        <div class="thumbnail" style="background-color: #a4dd25;">
                            <div class="plus">
                             <h4><br>
                              -{{trans('statistics.The impact on producers incomes and the organization of')}} {{trans('statistics.Distribution network')}}<br><br>
                               -{{trans('statistics.Impact on employment')}}.</h4><br>
                           </div>
                            <center>
                                   <button class="btn btn-default" type="button" >{{trans('statistics.Downloade')}}!</button>
                               </center>
                        </div>
  </div>
<div class="col-md-6 w3_agile_about_grid_left">
 <div class="bs-docs-example"  style="max-width: 850px;">
              <div class="table-responsive">
@if (session()->get('locale')=="ar")              
        <table class="table table-bordered" dir="rtl">

        <thead>
            <tr style="background-color: #a4dd25">
              <th  style="color: #000;"><center>{{trans('statistics.Year')}}</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Volume sold')}} ({{trans('statistics.tonne')}}/{{trans('statistics.Day')}})</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Volume sold')}} ({{trans('statistics.tonne')}}/{{trans('statistics.Year')}})</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Number of halls in operation')}}</center></th>
            </tr>
          </thead>
          <tbody>
                             <tr>
                               <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  First')}}</sup></td>
                               <td align="center">200</td>
                               <td align="center">60000</td>
                               <td align="center">01</td>
                            </tr>
                            <tr>
                               <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  second')}}</sup></td>
                               <td align="center">200</td>
                               <td align="center">60000</td>
                               <td align="center">01</td>
                            </tr>
                            <tr>
                               <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  Third')}}</sup></td>
                               <td align="center">300</td>
                               <td align="center">90000</td>
                                 <td align="center">02</td>
                            </tr>
                              <tr>
                                 <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  Fourth')}}</sup></td>
                                 <td align="center">400</td>
                                 <td align="center">120000</td>
                                 <td align="center">02</td>
                              </tr>
                              <tr>
                                 <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  Fifth')}}</sup></td>
                                 <td align="center">600</td>
                                 <td align="center">180000</td>
                                 <td align="center">03</td>
                              </tr>
                              
          </tbody>
          </table>
@else
 <table class="table table-bordered" >

        <thead>
            <tr style="background-color: #a4dd25">
              <th  style="color: #000;"><center>{{trans('statistics.Year')}}</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Volume sold')}} ({{trans('statistics.tonne')}}/{{trans('statistics.Day')}})</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Volume sold')}} ({{trans('statistics.tonne')}}/{{trans('statistics.Year')}})</center></th>
              <th  style="color: #000;"><center>{{trans('statistics.Number of halls in operation')}}</center></th>
            </tr>
          </thead>
          <tbody>
                <tr>
                               <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  First')}}</sup></td>
                               <td align="center">200</td>
                               <td align="center">60000</td>
                               <td align="center">01</td>
                            </tr>
                            <tr>
                               <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  second')}}</sup></td>
                               <td align="center">200</td>
                               <td align="center">60000</td>
                               <td align="center">01</td>
                            </tr>
                            <tr>
                               <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  Third')}}</sup></td>
                               <td align="center">300</td>
                               <td align="center">90000</td>
                                 <td align="center">02</td>
                            </tr>
                              <tr>
                                 <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  Fourth')}}</sup></td>
                                 <td align="center">400</td>
                                 <td align="center">120000</td>
                                 <td align="center">02</td>
                              </tr>
                              <tr>
                                 <td align="center">{{trans('statistics.Year')}}<sup>{{trans('statistics.  Fifth')}}</sup></td>
                                 <td align="center">600</td>
                                 <td align="center">180000</td>
                                 <td align="center">03</td>
                              </tr>
                              
</tbody>
          </table>
@endif
          </div>

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