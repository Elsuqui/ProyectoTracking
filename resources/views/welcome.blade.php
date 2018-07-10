<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bus Tracking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet" type="text/css">

        
        <!-- Styles -->
        <style>

            html,body {
                color: #FF4136;
                font-family: 'Old Standard TT', serif;
                font-weight: bold;
                height: 100vh;
                margin: 0px;
            }

            .background {
                background-image: url("images/backgroundElon.jpg");
                background-size: cover;
                background-position: center;
                position: fixed; 
                top: 0; 
                left: 0; 
                -webkit-filter: opacity(.4);
                filter: opacity(.4); 
                min-width: 100%;
                min-height: 100%;
            }

            .logo {
                width: 150px;
                height: 150px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                margin-top: 100px;
                font-size: 100px;
            }

            .links > a {
                color: #004D40;
                padding: 0 25px;
                border-bottom: 2px #004D40 double;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="background"></div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bus Tracking <img src="images/logo.png" alt="" class="logo">
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
