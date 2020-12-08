@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.about'))

{{-- @section('myheader')
  <link type="text/css" rel="stylesheet" href="{{ asset('css/timeline.css') }}" />
@endsection --}}

@section('content')

<div class="page-content">
    <div class="container info">
      <h3>About Us</h3>
      <p>The first and the best location for launch your Online Booth.</p>
      <p>
        for mor information contact to
        <a href="mailto:info@expo.com">Info@Expo.com</a>
      </p>
    </div>

    {{-- <section id="timeline">

      <div class="container-fluid">
        <div class="row">

            <div id="timeline">

              @foreach ($expoByYears as $exposByYear)
                <div class="row timeline-movement timeline-movement-top">
                  <div class="timeline-badge timeline-future-movement">
                    <p>{{$exposByYear->first()->start->format('Y')}}</p>
                  </div>
                </div>

                @foreach ($exposByYear as $expoByYear)
                  <div class="row timeline-movement">
                    <div class="timeline-badge @if ($loop->index%2==0) center-left @else center-right @endif">
                    </div>
                    <div class="@if ($loop->index%2==1) offset-sm-6 @endif col-sm-6 timeline-item">
                      <div class="row">
                        <div class="@if ($loop->index%2==1) offset-sm-1 @endif col-sm-11">
                          <div class="timeline-panel credits  anim animate @if ($loop->index%2==0) credits fadeInLeft @else debits fadeInRight @endif">
                            <ul class="timeline-panel-ul">
                              <div class="lefting-wrap">
                                <li class="img-wraping"><a href="{{url('/expo/'.$expoByYear->id)}}"><img src="{{asset($expoByYear->pic)}}" class="img-responsive" alt="user-image" /></a></li>
                              </div>
                              <div class="righting-wrap">
                                <li><a href="#" class="importo">{{$expoByYear->title}}</a></li>
                                <li><span class="causale" style="color:#000; font-weight: 600;">{{$expoByYear->category->title}}</span> </li>
                                <li><span class="causale"> {{$expoByYear->description}}</span> </li>
                                <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{$expoByYear->start.' - '.$expoByYear->end }}</small></p> </li>
                              </div>
                              <div class="clear"></div>
                            </ul>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach

              @endforeach

          </div>
        </div>
      </div>
    </section> --}}


    <div id="peoples">
      <div class="container">
        <div class="row">
          <div class="col center-text">
            <h3 class="container-title">Our Team</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="card">
              <img
                class="card-img-top"
                src="/img/profile/profile-4t.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Mohsen Shabanian</h5>
                <p class="card-text">Creator and designer</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="card">
              <img
                class="card-img-top"
                src="/img/profile/profile-5t.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Saeed Rostami</h5>
                <p class="card-text">Chief executive officer</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="card">
              <img
                class="card-img-top"
                src="/img/profile/profile-6t.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Siamak hadadi</h5>
                <p class="card-text">Producer and Mentor</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

{{--
@section('myfooter')

<script>
/**********************Scroll Animation "START"************************************/
$(document).ready(function(){
var $animation_elements = $('.anim');
var $window = $(window);

function check_if_in_view() {
var window_height = $window.height();
var window_top_position = $window.scrollTop();
var window_bottom_position = (window_top_position + window_height);

$.each($animation_elements, function() {
var $element = $(this);
var element_height = $element.outerHeight();
var element_top_position = $element.offset().top;
var element_bottom_position = (element_top_position + element_height);

//check to see if this current container is within viewport
if ((element_bottom_position >= window_top_position) &&
(element_top_position <= window_bottom_position)) {
$element.addClass('animated');
} else {
$element.removeClass('animated');
}
});
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
});
/**********************Scroll Animation "END"************************************/

/**********************Change color of center aligned animated content small Circle  "START"************************************/
$(document).ready(function(){
    $(" .debits").hover(function(){
        $(" .center-right").css("background-color", "#4997cd");
        }, function(){
        $(" .center-right").css("background-color", "#fff");
    });
});
$(document).ready(function(){
    $(".credits").hover(function(){
        $(".center-left").css("background-color", "#4997cd");
        }, function(){
        $(".center-left").css("background-color", "#fff");
    });
});
/**********************Change color of center aligned animated content small Circle  "END"************************************/
</script>

@endsection --}}
