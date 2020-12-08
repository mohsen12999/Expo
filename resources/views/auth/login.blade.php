<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Expo | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link
      rel="stylesheet"
      href="{{ asset('css/adminlte/bootstrap.min.css') }}"
    />
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
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte/AdminLTE.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/adminlte/skin-blue.min.css') }}" />
    
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{url('/')}}">
          <img
              src="{{ asset('/img/Logo.png') }}"
              height="75"
              class="d-inline-block align-top"
              alt=""
              loading="lazy"
            />
        </a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login in Expo</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

          <div class="form-group has-feedback">
            <input 
                id="email" 
                name="email" 
                type="email" 
                class="form-control @error('email') is-invalid @enderror"
                placeholder="Email" autofocus required 
                value="{{ old('email') }}"/>
            <span
              class="glyphicon glyphicon-envelope form-control-feedback"
            ></span>
          </div>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

          <div class="form-group has-feedback">
            <input
              id="password" name="password"
              type="password"
              class="form-control @error('password') is-invalid @enderror"
              placeholder="Password"
              required autocomplete="current-password"
            />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror

          <div class="row">
            <div class="col-xs-8">
              <div class="">
                <label> <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/> Remember Me </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">
                Sign In
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <br/>
        <a href="{{ url('register') }}" >Register in Expo</a>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->


    <!-- jQuery 3 -->
    <script src="{{ asset('js/adminlte/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('js/adminlte/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte/adminlte.min.js') }}"></script>
    
  </body>
</html>
