<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Expo | Register Page</title>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{url('/')}}">
        <img
            src="{{ asset('img/Logo/Logo.png') }}"
            height="75"
            class="d-inline-block align-top"
            alt=""
            loading="lazy"
          />
      </a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register in Expo</p>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="form-group has-feedback">
        <input type="text" placeholder="Name"
          id="name" name="name"
          class="form-control @error('name') is-invalid @enderror"  
          value="{{ old('name') }}" 
          required autocomplete="name" autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror

      <div class="form-group has-feedback">
        <input placeholder="Email"
          id="email" type="email" name="email"
          class="form-control @error('email') is-invalid @enderror" 
          value="{{ old('email') }}" 
          required autocomplete="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group has-feedback">
        <input placeholder="Password"
          id="password" type="password" name="password"  
          class="form-control @error('password') is-invalid @enderror" 
          required autocomplete="new-password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group has-feedback">
        <input placeholder="Retype password"
          id="password-confirm" type="password" name="password_confirmation" 
          class="form-control"
          required autocomplete="new-password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          {{-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div> --}}
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br/>
    <a href="{{url('login')}}">Login</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
