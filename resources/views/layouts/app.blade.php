<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BusTracking') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <script src="{{ asset('js/components/dropdown.min.js') }}"></script>
    <script src="{{ asset('js/components/popup.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet">
</head>
@guest
<body style="background-color: #4DB6AC;">
@else
<body>
@endguest

    <header class="ui fluid container">
        <div class="ui attached top menu">
            <div class="header item">
                <img src="{{ asset('images/logo.png') }}" alt="Incio">
                <a href="#">
                    {{ config('app.name') }}
                </a>
            </div>
        @auth
            <div class="right menu">
            <div class="item link" id="actPerfil">
                <img class="ui avatar mini image" src="{{ asset('images/user_image.png') }}">
                <span>{{ Auth::user()->nombres }}</span>
                <div class="ui popup bottom center hidden" id="popPerfil" data-variation="mini">
                    <div class="ui card">
                        <div class="centered aligned content">
                                <div class="ui centered image">
                                    <img src="{{ asset('images/user_image.png') }}" alt="">
                                </div>
                                <a href="#" class="ui blue bottom attached button">Ver Cuenta</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui dropdown item">
                <div class="text">Administrador</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesion') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            </div>
        @endauth
        </div>
    </header>

    @guest
    <div class="ui fluid container">
            @yield('content')
    </div>
    @else
    <div class="ui raised container segment">
            @yield('content')
    </div>
    <div class="ui fluid container">
            <div class="row"></div>
            <div class="ui attached bottom secondary inverted segment">
                    <div class="row">H</div>
                    <div class="row">H</div>
                    <div class="row">H</div>
            </div>
    </div>
    @endguest
</body>
</html>
<script>
    $('.ui.dropdown').dropdown();
    console.log($('.ui.dropdown'));
    $('#actPerfil').popup({
        popup : $('#popPerfil'),
        position : 'bottom center',
        on    : 'click'
    });
    @yield('scripts')
</script>
