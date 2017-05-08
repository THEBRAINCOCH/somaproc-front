@extends('master1')

@section('content')
<style type="text/css">
  .pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #fff;
  cursor: default;
  background-color: #a4dd25;
  border-color: #a4dd25;
}
</style>
<!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="w3layouts_breadcrumbs_left">
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i><a href="/">{{trans('menus.home')}}</a><span>/</span></li>
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{trans('menus.news')}}</li>
        </ul>
      </div>
      <div class="w3layouts_breadcrumbs_right">
        <h2>{{trans('menus.news')}}</h2>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div> 
<!-- //breadcrumbs -->

 <!-- A Propos --><br>
 <h3 class="agileits_w3layouts_head">{{trans('menus.news')}}</h3>
      <div class="w3_agile_image">
        <img src="{{asset('images/1.png')}}" alt=" " class="img-responsive" />
      </div><br><br>
    <div class="container propos">
      <div class="row">
      @foreach($topics as $t)
        <div class="col-lg-4">
            <img class="img-responsive" src="{{asset($t->photo1)}}" alt="#"><br>
        
             <h4>{{$t->title}}</h4>
             <h5 class="text-muted">{{$t->created_at->format('d-m-Y')}}</h5>
             <p>{!!str_limit($t->description,'100','')!!}...</p>
           <p><a href="{{url('News',$t->id)}}" class="btn btn-theme">{{trans('home.readMore')}}</a></p>
          </div>
          @endforeach
       
      </div>
           <div class="col-md-12" >
          <center>{{$topics->links()}}
          </center>
        </div>
    </div><br><br>

    <style type="text/css">
      #propos_hub {
  background: #FCAC45;
  margin-top: 60px;
  margin-bottom: 60px;
  padding-top: 25px;
  padding-bottom: 25px;
}

#propos_hub h3 {
  color:white;
  margin-left: 18px;
}

#propos {
  margin-top: 80px;
  margin-bottom: 80px;
}
    </style>
@stop
      
     