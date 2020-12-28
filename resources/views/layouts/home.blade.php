<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Expo | @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index-style.css') }}" />

    @yield('myheader')

</head>

<body>
    <header>

        {{-- <div class="container-fluid head-of-page">
        <div class="row">
          <div class="col-sm-4 address">
            <a href="#">
              <i class="fas fa-map-marker-alt"></i> Ramsar, Narenjbon, Number
              1456
            </a>
          </div>
          <div class="col-sm-2 tel">
            <a href="#"><i class="fas fa-phone-alt"></i> +98 5522 96 06 </a>
          </div>
          <div class="col-sm-4 text-right social-network-span">

            @if ($facebook!='')
              <a href="{{$facebook}}">
        <i class="fab fa-facebook-f"></i>
        </a>
        @endif

        @if ($twitter!='')
        <a href="{{$twitter}}">
            <i class="fab fa-twitter"></i>
        </a>
        @endif

        @if ($instagram!='')
        <a href="{{$instagram}}">
            <i class="fab fa-instagram"></i>
        </a>
        @endif

        @if ($telegram!='')
        <a href="{{$telegram}}">
            <i class="fab fa-telegram-plane"></i>
        </a>
        @endif

        </div>
        <div class="col-sm-2 lang">

            <a href="{{ url('setlocale/en') }}">
                <img src="{{asset('/img/en.png')}}" alt="">
            </a>

            <a href="{{ url('setlocale/fa') }}">
                <img src="{{asset('/img/fa.png')}}" alt="">
            </a>

        </div>
        </div>
        </div> --}}

        <nav class="navbar navbar-expand-lg navbar-light bg-light my-menu">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{ asset('img/Logo.png') }}" height="75" class="d-inline-block align-top" alt=""
                    loading="lazy" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-navbar">
                <div class="navbar-nav">
                    <!-- <a class="nav-link active" href="#"
              >Home <span class="sr-only">(current)</span></a
            > -->

                    @if ($categories)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('words.Expos')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/expos/">{{ __('words.AllExpos') }}</a>
                            @foreach ($expo_categories as $category)
                            <a class="dropdown-item" href="{{ '/expos/'.$category->id }}">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </li>

                    @endif

                    @if ($categories)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('words.companies')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/companies/">{{ __('words.AllCompanies') }}</a>
                            @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{ '/companies/'.$category->id }}">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </li>

                    @endif

                    <a class="nav-link" href="/news">{{ __('words.News') }}</a>
                    <a class="nav-link" href="/calender">{{ __('words.calender') }}</a>
                    <a class="nav-link" href="/history">{{ __('words.history') }}</a>
                    <a class="nav-link" href="/about">{{ __('words.about') }}</a>
                    <a class="nav-link" href="/contact">{{ __('words.contact') }}</a>

                    @if ($pages)
                    @foreach ($pages as $page)
                    <a class="nav-link" href="{{ '/page/'.$page->id }}">{{$page->title}}</a>
                    @endforeach
                    @endif


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLang" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ app()->getLocale() }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownLang">
                            <a class="dropdown-item" href="{{ url('setlocale/en') }}">
                                <img src="{{asset('/img/en.png')}}" alt="">
                                {{ __('words.English') }}
                            </a>
                            <a class="dropdown-item" href="{{ url('setlocale/fa') }}">
                                <img src="{{asset('/img/fa.png')}}" alt="">
                                {{ __('words.Persian') }}
                            </a>
                            <a class="dropdown-item" href="{{ url('setlocale/ru') }}">
                                <img src="{{asset('/img/ru.png')}}" alt="">
                                {{ __('words.Russian') }}
                            </a>
                            <a class="dropdown-item" href="{{ url('setlocale/ar') }}">
                                <img src="{{asset('/img/ar.png')}}" alt="">
                                {{ __('words.Armenian') }}
                            </a>
                        </div>
                    </li>


                    @guest
                    <a class="btn btn-warning" href="{{ route('login') }}">login / Register</a>
                    @else
                    <a class="btn btn-outline-dark" href="{{ '/home' }}">Admin</a>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    {{-- <footer>
      {!! $footer !!}
    </footer> --}}

    <footer>
        <section id="footer" class="text-center">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url($logo)}}" height="50" class="d-inline-block align-top" alt="" loading="lazy" />
                </a>
                <p>Enjoy a full day with Gravitas Beauty Expo designed for beauty brandfounders to connect, vend and be
                    supported by beauty lovers, buyers,influencers and press. </p>
                <p> <i class="fas fa-phone-alt"></i> {{$tel}}</p>
                <p><i class="fas fa-at"></i> <a style="color:white" href="mailto:info@Expo.com">info@Expo.com</a> </p>
                <div class="social-network">

                    @if ($facebook!='')
                    <a href="{{$facebook}}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    @endif

                    @if ($twitter!='')
                    <a href="{{$twitter}}">
                        <i class="fab fa-twitter"></i>
                    </a>
                    @endif

                    @if ($instagram!='')
                    <a href="{{$instagram}}">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif

                    @if ($telegram!='')
                    <a href="{{$telegram}}">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                    @endif
                </div>
            </div>
        </section>
        <section id="copyright" class="text-center">
            <p>©Copyright | <a href="{{url("/")}}">Expo</a> 2020. All Right Reserved. v0.1</p>
        </section>
    </footer>

    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

    @yield('myfooter')


</body>

</html>
