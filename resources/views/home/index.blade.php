@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.HomePage'))

@section('myheader')
  <link type="text/css" rel="stylesheet" href="{{ asset('css/lightslider/lightslider.css') }}" />
@endsection

@section('content')

<!--------------------------
 | Your Page Content Here |
 -------------------------->
 <main>
  <section id="main-carousel">
    <div
      id="carouselWithCaptions"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">

        @foreach ($sliders as $slider)
          <li
          data-target="#carouselWithCaptions"
          data-slide-to="{{$loop->index}}"
          @if ($loop->index==0) class="active" @endif
          ></li>
        @endforeach

      </ol>
      <div class="carousel-inner">

        @foreach ($sliders as $slider)
          <div class="carousel-item @if ($loop->index==0) active @endif">
            <img
              src="{{ asset($slider->pic) }}"
              class="d-block w-100"
              alt="{{$slider->title}}"
            />
            <div class="carousel-caption d-none d-md-block">
              @if ($slider->title!=null && $slider->title!='') <h1>{!!$slider->title!!}</h1> @endif
              @if ($slider->description!=null && $slider->description!='') <p>{{$slider->description}}</p> @endif
              @if ($slider->btn_title!=null && $slider->btn_title!='') <a href="{{$slider->btn_link}}" class="btn btn-warning">{{$slider->btn_title}}</a> @endif
            </div>
          </div>

        @endforeach

      </div>
      <a
        class="carousel-control-prev"
        href="#carouselWithCaptions"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselWithCaptions"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section id="latestExpo">
    <div class="conrainer">
      <div class="section-title">
        <h2>{{ __('words.LatestExpo')}}</h2>
      </div>
    </div>

    <div class="container">
      <div class="row">

        @foreach ($latestExpos as $latestExpo)

            <div class="col-md-6 col-sm-6 col-xs-12 mb-2">

              <div class="card">
                <img class="card-img-top" src="{{ asset($latestExpo->pic) }}" alt="{{$latestExpo->title}}">
                <div class="card-body">
                    <div>
                      <a href="{{ url('/expo/'.$latestExpo->id) }}"><h5 class="card-title">{{$latestExpo->title}}</h5></a>
                      <p class="card-text">{{$latestExpo->description}}</p>
                    </div>
                </div>
              </div>

            </div>
        @endforeach

      </div>
    </div>
  </section>

  <section id="main-category">
    <div class="conrainer">
      <div class="section-title">
        <h2>Categories</h2>
      </div>
    </div>

    {{-- <div class="text-center section-title">
      <h4 class="little-title">
        <i class="fas fa-qrcode"></i> Main Categories
      </h4>
      <h2>The Most Popular Categories for Expos</h2>
    </div> --}}
    <div class="container">
      <div class="row">

        @foreach ($categories as $cat)
          @if ($cat->status==1)
            <div class="col-md-4 col-sm-6 col-xs-12">
              <a href="{{ '/companies/'.$cat->id }}" class="cat-con">
              <img src="{{asset($cat->pic)}}" alt="{{$cat->title}} pic" />
                <h4 class="title">{{$cat->title}}</h4>
              </a>
            </div>
          @endif
        @endforeach

      </div>
    </div>
  </section>



  <section id="benefit">

    <div class="conrainer">
      <div class="section-title white-txt">
        <h2>Main Benefit</h2>
      </div>
    </div>

    {{-- <div class="text-center section-title">
      <h4 class="little-title">
        <i class="fas fa-qrcode"></i> Main Benefit
      </h4>
      <h2>Our Main Benefit for Exhibitors and Visitors</h2>
    </div> --}}

    <div class="container">
      <div class="row mb-4">
        <div class="col-sm-6 col-xs-12">
          <img class="left-pic" src="{{asset('img/1-1.jpg')}}" />
          <img class="right-pic" src="{{asset('img/1-2.jpg')}}" />
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="center-item">
            <div>
              <h2>Our Benefit for Exhibitors</h2>
              <p>
                {{ $exhibitor_benefit }}
              </p>
              <a href="{{ route('register') }}" class="btn btn-info">
                {{ __('words.Register')}}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-sm-6 col-xs-12">
          <div class="center-item">
            <div>
              <h2>Our Benefit for Visitors</h2>
              <p>
                {{ $visitor_benefit }}
              </p>
              <a href="/expos/" class="btn btn-info">
                {{ __('words.SeeExpos')}}
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <img class="left-pic" src="{{asset('img/2-1.jpg')}}" />
          <img class="right-pic" src="{{asset('img/2-2.jpg')}}" />
        </div>
      </div>
    </div>
  </section>

  @if ($counter && $counter->status>0)

  <section id="count-down">
    <div class="conrainer">
      <div class="section-title">
        <h2>{{$counter->title}}</h2>
      </div>
    </div>
    <div class="count-container text-center">
      <div class="counter">
        <div class="row">
          <div class="col-3">
            <div class="number" id="day-count">{{$counter->diff->d}}</div>
            <div>{{ __('words.Days')}}</div>
          </div>
          <div class="col-3">
            <div class="number" id="hour-count">{{$counter->diff->h}}</div>
            <div>{{ __('words.Hours')}}</div>
          </div>
          <div class="col-3">
            <div class="number" id="min-count">{{$counter->diff->i}}</div>
            <div>{{ __('words.Minutes')}}</div>
          </div>
          <div class="col-3">
            <div class="number" id="sec-count">{{$counter->diff->s}}</div>
            <div>{{ __('words.Seconds')}}</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-center more-info">
          <a href="/expo/{{$counter->expo_id}}" class="btn btn-lg btn-warning my-btn">More Info</a>
        </div>
      </div>
    </div>
  </section>

  @endif



  <section id="brands">
    <div class="conrainer">
      <div class="section-title">
        <h2>Partner Brands</h2>
      </div>
    </div>

    {{-- <div class="text-center section-title">
      <h4 class="little-title">
        <i class="fas fa-tags"></i> Partner Brands
      </h4>
      <h2>Our Partner Brands work with us</h2>
    </div> --}}

    <div class="slider-div">
      <div id="brand-slider" >
        @foreach ($brands as $brand)
          <div class="col brand-img"><img src="{{ asset( $brand->pic) }}" alt="logo" /></div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- <section id="packages">

    <div class="conrainer">
      <div class="section-title white-txt">
        <h2>Our Package</h2>
      </div>
    </div>

    <div class="container">

      <div class="row">

        @foreach ($packages as $package)
          <div class="col-md-4 col-xs-12">
            <div class="card package-card" style="background-color: {{$package->color}}">
              <div class="card-header">
                <div class="img">
                  <img src="{{asset($package->pic)}}" />
                </div>
                <div class="header-info">
                  <h3 class="package-name">{{$package->title}}</h3>
                  <h1 class="package-price"><span class="price">${{number_format($package->price,0)}}</span><span class="duration">/Monthly</span></h1>

                </div>
              </div>

              <div class="card-body">
                <h3 class="card-title">{{__('words.Benefits')}}</h3>
                {!! $package->description !!}
              </div>

              <div class="card-footer">
                <a href="{{ route('register')}}" class="btn">{{__('words.BuyPackage')}}</a>
              </div>

            </div>
          </div>
        @endforeach

      </div>

    </div>
  </section> --}}

  {{-- <section id="comments">
    <div class="conrainer">
      <div class="section-title">
        <h2>Comments</h2>
      </div>
    </div>


    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">

        @foreach ($comments as $comment)
          <li
          data-target="#carouselExampleIndicators"
          data-slide-to="{{$loop->index}}"
          @if ($loop->index==0) class="active" @endif
          ></li>
        @endforeach

      </ol>
      <div class="carousel-inner">

        @foreach ($comments as $comment)

        <div class="carousel-item @if ($loop->index==0) active @endif">
          <div class="comment-div">
            <div class="card text-center">
              <img
                src="{{asset($comment->pic)}}"
                class="card-img-top"
                alt="{{$comment->name}}"
              />
              <div class="card-body">
                <h5 class="card-title">{{$comment->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$comment->title}}</h6>
                <p class="card-text">
                  {{$comment->quote}}
                </p>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section> --}}

</main>

@endsection



@section('myfooter')

<script src="{{ asset('js/lightslider/lightslider.js') }}"></script>

<script>
  $(".carousel").carousel();

  @if($counter && $counter->status>0)


      var day = {{$counter->diff->d}};
      var hour = {{$counter->diff->h}};
      var min = {{$counter->diff->i}};
      var sec = {{$counter->diff->s}};

      var myInterval = setInterval(() => {
        countDown();
      }, 1000);

      function countDown() {
        sec--;
        if (sec < 0) {
          sec = 59;
          min--;
          if(min<0){
            min=59;
            hour--;
            if(hour<0){
              day--;
              if(day<0){
                clearInterval(myInterval);
                day=0;
                hour=0;
                min=0;
                sec=0;
              }
            }
          }
        }
        $("#day-count").text(day);
        $("#hour-count").text(hour > 10 ? hour : "0" + hour);
        $("#min-count").text(min > 10 ? min : "0" + min);
        $("#sec-count").text(sec > 10 ? sec : "0" + sec);
      }


    @endif

    $(document).ready(function() {
        $('#brand-slider').lightSlider({
            item:4,
            loop:true,
            auto:true,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ]
        });
      });

</script>

@endsection
