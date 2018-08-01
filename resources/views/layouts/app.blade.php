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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <script src="{{ asset('js/components/dropdown.min.js') }}"></script>
    <script src="{{ asset('js/components/popup.min.js') }}"></script>
    <script src="{{ asset('js/calendar.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/calendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ownstyle.css') }}">
</head>
<body>
    <!-- Pregunto si el usuario esta autenticado entonces -->
    @auth
    <!-- Defino el menu desplegable de la pagina web -->
    <div class="ui left vertical sidebar menu">
        <!-- Cabecera -->
        <div class="item">
            <img src="{{ asset('images/logo.png') }}" alt="Incio" class="ui circular image">
            <div class="content">
                <div class="ui sub header">{{ config('app.name') }}</div>
                Sistema de Control Vehicular Urbano
            </div>
        </div>
        <!-- Incluyo los items del menu deplegable -->
        <!-- Opciones -->
        <div class="item">
            <div class="header">Seguimiento</div>
            <div class="menu">
                <a href="#" class="item">Monitoreo Vehicular</a>
            </div>
        </div>
    </div>
    <div class="pusher">
            <header class="ui fluid container">
                    <div class="ui attached top menu">
                        <div class="header item">
                            <img src="{{ asset('images/logo.png') }}" alt="Incio">
                            <a href="#" id="menu_toogle">
                                {{ config('app.name') }}
                            </a>
                        </div>
                        <div class="right menu">
                        <div class="item link" id="actPerfil">
                            <img class="ui avatar mini image" src="{{ asset('images/user_image.png') }}">
                            <!-- Recupero el nombre del usuario con la informacion de usuario logeado -->
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
            
                    </div>
                </header>
    @endauth

    @guest
    <div class="login_register"></div>
    <div class="ui fluid container">
            @yield('content')
    </div>
    @else
    <div class="ui fluid container">
            @yield('content')
    </div>
    <!--<footer class="ui footer main inverted segment content">
            <div class="row">Desarrollado por Equipo de desarrollo Techlabs</div>
    </footer> -->
    @endguest
    </div>
</body>
</html>
<script>
    //Configuracion de listas
    $('.ui.dropdown').dropdown();

    $('#actPerfil').popup({
        popup : $('#popPerfil'),
        position : 'bottom center',
        on    : 'click'
    });

    //Configuracion evento para
    $('.ui.sidebar').sidebar('attach events', '#menu_toogle');

    //Configuracion de calendario
    var fecha = new Date();
    $('.ui.calendar').calendar({
      type: 'date',
      firstDayOfWeek: 1,
      initialDate: fecha,
      today: false,
      formatter: {
        date: function(date, settings){
          if(!date) return '';
          var dia = date.getDate() + '';
          var mes = (date.getMonth() + 1) + '';
          var anio = date.getFullYear();
          if (dia.length < 2) dia = '0' + dia;
          if (mes.length < 2) mes = '0' + mes;
          return dia + '/' + mes + '/' + anio;
        },
        today: function (settings) {
        return settings.type === 'date' ? settings.text.today : settings.text.now;
        }
      },
      popupOptions: {
        position: 'bottom center',
        lastResort: 'bottom center',
        prefer: 'opposite',
        hideOnScroll: false
      },
      text: {
        days: ['D', 'L', 'Ma', 'Mi', 'J', 'V', 'S'],
        months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sept', 'Oct', 'Nov', 'Dic'],
        today: 'Hoy',
        now: 'Ahora',
        am: 'AM',
        pm: 'PM'
      }
    });
</script>
@yield('scripts')
