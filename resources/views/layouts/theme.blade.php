<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" />

    <title>Expo | @yield('title') </title>

    @yield('myheader')

  </head>
  <body>

    <header></header>

    @yield('content')

    <footer>
      @foreach ($images as $image)
        <figure class="booth-figure">
          <img src="{{ asset($image->path) }}" alt="{{ asset($image->title) }}">
          <figcaption><a href="{{ asset($image->path) }}" class="btn btn-primary">{{ __('words.ShowImage')}}</a></figcaption>
        </figure>
      @endforeach
    </footer>

    @yield('myfooter')

  </body>
</html>
