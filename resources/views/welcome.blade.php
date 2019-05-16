<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A desk of one's own</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">

        <!-- Styles -->
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
            }

            .right {
                margin-right: 10px;
            }

            .links > a {
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
                A desk of one's own
            </div>
            <div class="right links">
                @auth
                    <a href="{{ url('/home') }}">Accueil</a>
                @else
                    <a href="{{ route('register') }}">Inscription</a>
                    <a href="{{ route('login') }}">Connexion</a>
                @endauth
            </div>
        </div>
        <div id="app">
            <main-component></main-component>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
