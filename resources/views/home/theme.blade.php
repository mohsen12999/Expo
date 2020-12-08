{{-- @extends('layouts.theme',['images'=>$booth->images]) --}}
@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', $booth->title)

@section('myheader')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/lightslider/lightslider.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('/lib/lightGallery/css/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themes.css') }}" />

    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/4.12/video.js"></script>
@endsection

@section('content')

    <div
        id="{{$theme->theme_id}}"
        class="theme-div"
    >
        <img class="theme-img" src="{{asset($theme->pic)}}" alt="">

        <div class="theme-container">

            <div class="company-name-row">
                <h1 class="company-name company-name-1"><a href="{{ url('/company/'.$booth->id) }}" title="{{$booth->title}}">{{$booth->title}}</a></h1>
                <h1 class="company-name company-name-2"><a href="{{ url('/company/'.$booth->id) }}" title="{{$booth->title}}">{{$booth->title}}</a></h1>
            </div>

            <div class="logo-div">
                <a href="{{ url('/company/'.$booth->id) }}" title="{{$booth->title}}"><img src="{{$booth->user->avatar}}" class="logo left" alt="{{$booth->user->name}} pic"  /></a>
                <a href="{{ url('/company/'.$booth->id) }}" title="{{$booth->title}}"><img src="{{$booth->user->avatar}}" class="logo right" alt="{{$booth->user->name}} pic"  /></a>
            </div>

            @if ($booth->video && $booth->video!='')
              <!-- Hidden video div -->
                <div style="display:none;" id="video1">
                    <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                        <source src="{{$booth->video}}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div id="video-gallery" class="video-div">
                    <img src="{{asset('/img/video.png')}}" alt="video gif" data-html="#video1">
                </div>
            @endif


            @if ($booth->catalog && $booth->catalog!='')
                <div class="pdf-div">
                    <a href="{{ asset($booth->catalog) }}" target="_blank">
                        <img class="pdf-img-1" src="{{asset('/img/catalogue.png')}}" alt="pdf gif">
                    </a>
                    <a href="{{ asset($booth->catalog) }}" target="_blank">
                        <img class="pdf-img-2" src="{{asset('/img/catalogue.png')}}" alt="pdf gif">
                    </a>
                </div>
            @endif


            @if (count($booth->images)>0)
                <div class="gallery-div">
                    <img class="gallery-img-1" src="{{asset('/img/gallery.png')}}" alt="gallery img" onclick="showGallery()"/>
                    <img class="gallery-img-2" src="{{asset('/img/gallery.png')}}" alt="gallery img" onclick="showGallery()"/>
                </div>
            @endif

        </div>

    </div>

    <div >
        <div class="conrainer">
            <div class="section-title">
                <h2>Other Booths</h2>
            </div>
        </div>

        <div class="slider-div">
            <div id="booth-slider" >
              @foreach ($booths as $booth)
                <div class="col booth-img">
                    <a href="/booth/{{ $booth->id }}">
                        <img src="{{ asset( $booth->pic) }}" alt="logo" /></div>
                    </a>
              @endforeach
            </div>
          </div>

    </div>

@endsection

@section('myfooter')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="{{ asset('/lib/lightGallery/js/lightgallery-all.min.js') }}"></script>

    <script src="{{ asset('js/lightslider/lightslider.js') }}"></script>

    <script>
        $('#video-gallery').lightGallery({
            videojs: true
        });

        function showGallery(){

            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    @foreach ($booth->images as $image)
                        {
                            "src": "{{ asset($image->path) }}",
                            'thumb': "{{ asset($image->path) }}",
                        },
                    @endforeach
                ]
            });
        }


        $(document).ready(function() {
            $('#booth-slider').lightSlider({
                item:4,
                loop:false,
                auto:false,
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
