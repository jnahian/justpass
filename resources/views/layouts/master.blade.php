<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>@if(isset($title)) {{ $title }} - @endif {{ config('app.name', 'Just Pass') }}</title>

    {{-- Favicon --}}
    {{--<link rel="icon" href="{{ asset('images/favicon.png') }}" type="text/css">--}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("images/apple-icon-57x57.png") }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("images/apple-icon-60x60.png") }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("images/apple-icon-72x72.png") }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("images/apple-icon-76x76.png") }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("images/apple-icon-114x114.png") }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("images/apple-icon-120x120.png") }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("images/apple-icon-144x144.png") }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("images/apple-icon-152x152.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("images/apple-icon-180x180.png") }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset("images/android-icon-192x192.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("images/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset("images/favicon-96x96.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("images/favicon-16x16.png") }}">
    <link rel="manifest" href="{{ asset("images/manifest.json") }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="title" content="{{ config('app.name', 'Just Pass') }} :: {{ config('tagline') }}">
    <meta name="author" content="Julkar N. Nahian">
    <meta name="description" content="{{ config('tagline') }}">
    <meta name="keywords" content="Password Manager, Simple Password, Personal Password Manager">

    {{-- Facebook meta --}}
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ config('app.name', 'Just Pass') }}"/>
    <meta property="og:description" content="{{ config('tagline') }}"/>
    <meta property="og:image" content="{{ asset('images/logo-white.png') }}"/>


    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/materialize.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset("css/style.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="green" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{ url('/') }}" class="brand-logo">
            <img src="{{ asset('images/logo-white.png') }}" alt="{{ config('app.name', 'Just Pass') }}" width="30">
            {{ config('app.name', 'Just Pass') }}
        </a>
        <ul class="right hide-on-med-and-down">
            <!-- Authentication Links -->
            @guest
                <li>
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="material-icons">lock_open</i>
                        {{ __('Login') }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('register') }}"><i class="material-icons">perm_identity</i> {{ __('Register') }}</a>
                </li>
            @else
                <li>
                    <a class="nav-link" href="#">
                        <i class="material-icons">person_pin</i>
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">power_settings_new</i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            @endguest
        </ul>

        <ul id="nav-mobile" class="sidenav green white-text">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li>
                    <a class="nav-link" href="#">
                        <i class="material-icons">person_pin</i>
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">power_settings_new</i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            @endguest
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section" id="index-banner">
    <div class="container">
        @if(isset($title))
            <h3 class="green-text">{{ $title }}</h3>
            <hr>
        @endif
        @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('msg') }}
            </div>
        @endif

        @yield('content')

    </div>
</div>

<footer class="page-footer blue-grey">
    {{--<div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's
                    our full time job. Any amount would help support and continue development on this project and is
                    greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>--}}
    <div class="footer-copyright">
        <div class="container">
            &copy; {{ date('Y') }} || All rights reserved. <span class="right hide-on-small-and-down"> Developed with <i class="material-icons">favorite_border</i> by <a
                        class="orange-text text-lighten-3" href="http://jnahian.com">Julkar N. Nahian</a></span>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset("js/materialize.js") }}"></script>
<script src="{{ asset("js/init.js") }}"></script>

@stack('scripts')

{{-- FB Analytics --}}

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '347931402396058,
            cookie     : true,
            xfbml      : true,
            version    : 'v2.10'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>
