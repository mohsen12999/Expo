<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ __('words.AppAdmin') }} | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="{{ asset('css/adminlte/font-awesome.min.css') }}"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="{{ asset('css/adminlte/ionicons.min.css') }}"
    />

    @if (App::isLocale('fa'))
      <link rel="stylesheet" href="{{ asset('css/adminlte-rtl/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/adminlte-rtl/AdminLTE.min.css') }}" />
    @else
      <link rel="stylesheet" href="{{ asset('css/adminlte/bootstrap.min.css') }}" />
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('css/adminlte/AdminLTE.min.css') }}" />
    @endif


    <!-- My custome css -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ asset('css/adminlte/skin-blue.min.css') }}" />


    @yield('myheader')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    {{-- <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
    /> --}}
  </head>
  <!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/home')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Expo</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Expo</b> Admin</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a
            href="#"
            class="sidebar-toggle"
            data-toggle="push-menu"
            role="button"
          >
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <nav class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa  fa-language"></i>
                  <span class="label label-success">{{app()->getLocale()}}</span>
                </a>
                <ul class="dropdown-menu">
                  {{-- <li class="header">You have 2 language</li> --}}
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="{{ url('setlocale/en') }}">
                            <img src="{{asset('/img/en.png')}}" alt="">
                            {{ __('words.English') }}
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('setlocale/fa') }}">
                            <img src="{{asset('/img/fa.png')}}" alt="">
                            {{ __('words.Persian') }}
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('setlocale/ru') }}">
                            <img src="{{asset('/img/ru.png')}}" alt="">
                            {{ __('words.Russian') }}
                          </a>
                        </li>
                        <li>
                          <a href="{{ url('setlocale/ar') }}">
                            <img src="{{asset('/img/ar.png')}}" alt="">
                            {{ __('words.Armenian') }}
                          </a>
                        </li>
                      </ul>
                    </li>
                  </li>
                  {{-- <li class="footer"><a href="#">See All Messages</a></li> --}}
                </ul>
              </li>
            </ul>
          </nav>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar direction">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">

            <div class="@if (App::isLocale('fa')) pull-right @else pull-left @endif image">
              <img
                src="{{ asset(Auth::user()->avatar_or_default())}}"
                class="img-circle"
                alt="profile pic"
              />
            </div>
            <div class="@if (App::isLocale('fa')) pull-right @else pull-left @endif info">
              <p>{{ Auth::user()->name }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> {{ __('words.Online')}}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ __('words.Menu')}}</li>
            <!-- Optionally, you can add icons to the links -->

            @if (Auth::user()->is_admin()==1)

            <!-- Admin only -->
              <li class="@if($menu=='admin') active @endif">
                <a href="{{url('admin\admin')}}">
                  <i class="fa fa-dashboard"></i> <span>{{ __('words.Dashboard') }}</span>
                </a>
              </li>
              <li class="@if($menu=='expo') active @endif">
                <a href="{{url('admin\expo')}}"><i class="fa fa-image"></i> <span>{{ __('words.Expos') }}</span></a>
              </li>
              <li class="@if($menu=='categories') active @endif">
                <a href="{{url('admin\category')}}" ><i class="fa fa-list"></i> <span>{{ __('words.CategoriesItem') }}</span></a>
              </li>
              <li class="@if($menu=='expo_categories') active @endif">
                <a href="{{url('admin\expo-category')}}" ><i class="fa fa-list"></i> <span>{{ __('words.ExposItem') }}</span></a>
              </li>
              <li class="@if($menu=='packages') active @endif">
                <a href="{{url('admin\package')}}" ><i class="fa fa-shopping-cart"></i> <span>{{ __('words.CatgoryPackages') }}</span></a>
              </li>
              <li class="@if($menu=='expo_packages') active @endif">
                <a href="{{url('admin\expo-package')}}" ><i class="fa fa-shopping-cart"></i> <span>{{ __('words.ExpoPackages') }}</span></a>
              </li>
              <li class="@if($menu=='users') active @endif">
                <a href="{{url('admin\users')}}"><i class="fa fa-user"></i> <span>{{ __('words.Users') }}</span></a>
              </li>
              <li class="@if($menu=='invoices') active @endif">
                <a href="{{url('admin\invoices')}}"><i class="fa fa-money"></i> <span>{{ __('words.Invoices') }}</span></a>
              </li>

              <li class="@if($menu=='sliders') active @endif">
                <a href="{{url('admin\slider')}}"><i class="fa fa-object-group"></i> <span>{{ __('words.sliders') }}</span></a>
              </li>
              <li class="@if($menu=='posts') active @endif">
                <a href="{{url('admin\post')}}"><i class="fa fa-newspaper-o"></i> <span>{{ __('words.posts') }}</span></a>
              </li>
              <li class="@if($menu=='pages') active @endif">
                <a href="{{url('admin\page')}}"><i class="fa fa-window-restore"></i> <span>{{ __('words.pages') }}</span></a>
              </li>
              <li class="@if($menu=='comments') active @endif">
                <a href="{{url('admin\comment')}}"><i class="fa fa-users"></i> <span>{{ __('words.comments') }}</span></a>
              </li>
              <li class="@if($menu=='brands') active @endif">
                <a href="{{url('admin\brand')}}"><i class="fa fa-tags"></i> <span>{{ __('words.brands') }}</span></a>
              </li>
              <li class="@if($menu=='counter') active @endif">
                <a href="{{url('admin\counter')}}"><i class="fa fa-clock-o"></i> <span>{{ __('words.counter') }}</span></a>
              </li>
              <li class="@if($menu=='setting') active @endif">
                <a href="{{url('admin\setting')}}"><i class="fa fa-cogs"></i> <span>{{ __('words.setting') }}</span></a>
              </li>
              <li class="@if($menu=='tickets') active @endif">
                <a href="{{url('admin\tickets')}}">
                  <i class="fa fa-comments"></i> <span>{{ __('words.Support') }}</span>
                </a>
              </li>

            @else

              <li class="@if($menu=='dashboard') active @endif">
                <a href="{{url('admin\dashboard')}}">
                  <i class="fa fa-dashboard"></i> <span>{{ __('words.Dashboard') }}</span>
                </a>
              </li>

              <li class="@if($menu=='my_package') active @endif">
                <a href="{{url('admin\user-package')}}">
                  <i class="fa fa-shopping-cart"></i> <span>{{ __('words.MyPackage') }}</span>
                </a>
              </li>

              <li class="@if($menu=='my_category') active @endif">
                <a href="{{url('admin\user-category')}}">
                  <i class="fa fa-object-ungroup"></i> <span>{{ __('words.MyCategory') }}</span>
                </a>
              </li>

              <li class="@if($menu=='booth') active @endif">
                <a href="{{url('admin\booth')}}">
                  <i class="fa fa-object-ungroup"></i> <span>{{ __('words.MyBooth') }}</span>
                </a>
              </li>
              <li class="@if($menu=='invoice') active @endif">
                <a href="{{url('admin\your-invoice')}}">
                  <i class="fa fa-money"></i> <span>{{ __('words.MyInvoice') }}</span>
                </a>
              </li>
              <li class="@if($menu=='tickets') active @endif">
                <a href="{{url('admin\ticket')}}">
                  <i class="fa fa-comments"></i> <span>{{ __('words.Support') }}</span>
                </a>
              </li>
            @endif

            {{-- <li class="treeview">
              <a href="#"
                ><i class="fa fa-link"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li> --}}
            <li class="@if($menu=='profile') active @endif">
              <a href="{{url('admin\profile')}}">
                <i class="fa fa-user"></i> <span>{{ __('words.Profile') }}</span>
              </a>
            </li>

            <li>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out"></i> <span>{{ __('words.Exit') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        @yield('content')

        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-dashboard"></i> Level</a>
            </li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
          <!--------------------------
        | Your Page Content Here |
        -------------------------->
        </section> --}}
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="#">Expo</a>.</strong> All rights
        reserved.
      </footer>

      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="{{ asset('js/adminlte/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('js/adminlte/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte/adminlte.min.js') }}"></script>

    @yield('myfooter')

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
  </body>
</html>
