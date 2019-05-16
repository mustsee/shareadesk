<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
        }

        .app-bar {
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            background-color: #f5f5f5;
        }

        .left {
            text-transform: uppercase;
            margin-left: 10px;
            padding: 0 25px;
            line-height: 0;
            font-size: 16px;
        }

        .left a {
            text-decoration: none;
            color: #636b6f;
        }

        .right {
            margin-right: 10px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="app-bar position-ref bg">
        <div class="left">
            <a href="{{ url('/') }}">
                a desk of one's own
            </a>
        </div>
        <div class="right links">
            @guest
            <a href="{{ route('register') }}">Inscription</a>
            <a href="{{ route('login') }}">Connexion</a>
            @else
            <a>
                {{ Auth::user()->name }}
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endguest
        </div>
    </div>
    @yield('content')
</body>

</html>