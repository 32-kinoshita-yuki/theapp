<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{--  --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/nav.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css"><!-- form全般のstyle -->
        <link href="{{ asset('css/slider.css') }}" rel="stylesheet" type="text/css"><!-- スライドここから -->
        <link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('slick/slick.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('slick/slick.js') }}" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script><!-- スライドここまで --> 

<meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
<!-- NAV中身 --> 
  <header id="top-head">
  @include('layouts.header')
  </header>

<!-- NAV中身終了 --> 
        </div>
    </body>
</html>
