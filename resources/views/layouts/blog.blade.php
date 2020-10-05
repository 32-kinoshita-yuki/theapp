<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <header id="top-head">
     @include('layouts.header')
    </header>
  
    <br>
    <div class="container">
    @yield('content')
    </div>
   
</body>
</html>