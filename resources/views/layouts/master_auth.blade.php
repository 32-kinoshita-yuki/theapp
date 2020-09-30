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
	<div class="inner">
		<div id="mobile-head">
			<h1 class="logo">myapp</h1>
			<div id="nav-toggle">
				<div>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<nav id="global-nav">
			<ul>
				<li><a href="#">TOP</a></li>
				<li><a href="#">インフルエンサーを探す</a></li>
				<li><a href="#">ご利用方法</a></li>
				<li><a href="#">MYAPPコラム</a></li>
				<li><a href="#">運営情報</a></li>
			</ul>
		</nav>
	</div>
</header>

<!-- NAV中身終了 --> 
            
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto"> 
                    <!-- Authentication Links -->
                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
           
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>
