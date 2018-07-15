@extends('layouts.app')

@section('content')
<div class="ui one column stackable center aligned page grid">
    <div class="row"></div>
    <div class="twelve wide column">
        <div class="ui piled segment">
            <img class="ui centered medium rounded image" src="{{ asset('images/registrarse.png') }}">
            <h4 class="ui horizontal divider header">
                <i class="desktop icon"></i>{{ __('Registrarse') }}
            </h4>
            <form action="{{ route('register') }}" method="POST" class="ui form error">
                @csrf
                <div class="three fields">
                        <div class="field {{ $errors->has('cedula') ? 'error' : '' }}">
                            <label for="cedula">{{ __('Cedula') }}</label>
                            <input id="cedula" type="text" name="cedula" value="{{ old('cedula') }}" required autofocus>
                            @if ($errors->has('cedula'))
                                <div class="ui error message">
                                    <div class="header">Error de Cedula</div>
                                    <p>{{ $errors->first('cedula') }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="field {{ $errors->has('nombres') ? 'error' : '' }}">
                            <label for="nombres">{{ __('Nombres') }}</label>
                            <input id="nombres" type="text" name="nombres" value="{{ old('nombres') }}" required>
                            @if ($errors->has('nombres'))
                                <div class="ui error message">
                                    <div class="header">Error de Nombre</div>
                                    <p>{{ $errors->first('nombres') }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="field {{ $errors->has('apellidos') ? 'error' : '' }}">
                            <label for="apellidos">{{ __('Apellidos') }}</label>
                            <input id="apellidos" type="text" name="apellidos" value="{{ old('apellidos') }}" required>
                            @if ($errors->has('apellidos'))
                                <div class="ui error message">
                                    <div class="header">Error de Apellido</div>
                                    <p>{{ $errors->first('apellidos') }}</p>
                                </div>
                            @endif
                        </div>
                </div>

                <div class="two fields">
                        <div class="field {{ $errors->has('telefono') ? 'error' : '' }}">
                            <label for="telefono">{{ __('Telefono') }}</label>
                            <input id="telefono" type="text" name="telefono" value="{{ old('telefono') }}" required>
                            @if ($errors->has('telefono'))
                                <div class="ui error message">
                                    <div class="header">Error de Fecha Nacimiento</div>
                                    <p>{{ $errors->first('telefono') }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="field {{ $errors->has('email') ? 'error' : '' }}">
                                <label for="email">{{ __('Correo electrónico') }}</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div class="ui error message">
                                        <div class="header">Error de Correo</div>
                                        <p>{{ $errors->first('email') }}</p>
                                    </div>
                                @endif
                        </div>
                </div>
                <div class="two fields">
                    <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" name="password" value="{{ old('password') }}" required>
                            @if ($errors->has('password'))
                                <div class="ui error message">
                                    <div class="header">Error de Contraseña</div>
                                    <p>{{ $errors->first('password') }}</p>
                                </div>
                            @endif
                    </div>
                    <div class="field">
                            <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                            <input id="password-confirm" type="password" name="password-confirm" required>
                    </div>
                </div>

                <div class="field {{ $errors->has('fecha_nacimiento') ? 'error' : '' }}">
                    <div class="ui calendar" id="datePicker">
                      <label for="fecha_nacimiento">{{ __('Fecha de Nacimiento') }}</label>
                      <input id="fecha_nacimiento" type="text" name="fecha_nacimiento" style="text-align:center;" autocomplete="off" placeholder="dd/mm/yyyy" value="{{ old('fecha_nacimiento') }}" required>
                      @if ($errors->has('fecha_nacimiento'))
                          <div class="ui error message">
                              <div class="header">Error de Fecha Nacimiento</div>
                              <p>{{ $errors->first('fecha_nacimiento') }}</p>
                          </div>
                      @endif
                    </div>
                </div>
                <div class="ui buttons">
                        <button type="submit" class="ui blue button">
                                {{ __('Registrarse') }}
                        </button>
                        <div class="or" data-text="O"></div>
                        <a class="ui positive button" href="{{ route('login') }}">Iniciar Sesion</a>
                </div>
            </form>
            <br/>
            <div class="row">
              <div class="ui animated fade button" tabindex="0" style="width: 30%;">
                <div class="visible content"><i class="home icon"></i></div>
              <div class="hidden content"><a href="{{ url('/') }}">Pagina Principal</a></div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("scripts")
<script>
  $(document).ready(function () {
    /*$('#datePicker').calendar({
      type: 'date',

    });*/
  });
</script>
@endsection
