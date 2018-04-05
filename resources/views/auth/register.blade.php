@extends('layouts.app')

@section('content')

<div class="ui one column stackable center aligned page grid">
    <div class="row"></div>
    <div class="column twelve wide">
        <div class="ui raised segment">
            <img class="ui centered medium rounded image" src="{{ asset('images/registrarse.png') }}">
            <h4 class="ui horizontal divider header">
                <i class="desktop icon"></i>{{ __('Registrarse') }}
            </h4>
            <form action="{{ route('register') }}" method="POST" class="ui form error">
                @csrf
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
                    <input id="nombres" type="text" name="nombres" value="{{ old('nombres') }}" required autofocus>
                    @if ($errors->has('nombres'))
                        <div class="ui error message">
                            <div class="header">Error de Nombre</div>
                            <p>{{ $errors->first('nombres') }}</p>
                        </div>
                    @endif
                </div>
                <div class="field {{ $errors->has('apellidos') ? 'error' : '' }}">
                    <label for="apellidos">{{ __('Apellidos') }}</label>
                    <input id="apellidos" type="text" name="apellidos" value="{{ old('apellidos') }}" required autofocus>
                    @if ($errors->has('apellidos'))
                        <div class="ui error message">
                            <div class="header">Error de Apellido</div>
                            <p>{{ $errors->first('apellidos') }}</p>
                        </div>
                    @endif
                </div>
                <div class="field {{ $errors->has('email') ? 'error' : '' }}">
                        <label for="email">{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <div class="ui error message">
                                <div class="header">Error de Correo</div>
                                <p>{{ $errors->first('email') }}</p>
                            </div>
                        @endif
                </div>
                <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                        <label for="password">{{ __('Contraseña') }}</label>
                        <input id="password" type="password" name="password" value="{{ old('password') }}" required autofocus>
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

                <div class="field {{ $errors->has('fecha_nacimiento') ? 'error' : '' }}">
                    <label for="fecha_nacimiento">{{ __('Fecha de Nacimiento') }}</label>
                    <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
                    @if ($errors->has('fecha_nacimiento'))
                        <div class="ui error message">
                            <div class="header">Error de Fecha Nacimiento</div>
                            <p>{{ $errors->first('fecha_nacimiento') }}</p>
                        </div>
                    @endif
                </div>

                <div class="field {{ $errors->has('telefono') ? 'error' : '' }}">
                    <label for="telefono">{{ __('Telefono') }}</label>
                    <input id="telefono" type="text" name="telefono" value="{{ old('telefono') }}" required autofocus>
                    @if ($errors->has('telefono'))
                        <div class="ui error message">
                            <div class="header">Error de Fecha Nacimiento</div>
                            <p>{{ $errors->first('telefono') }}</p>
                        </div>
                    @endif
                </div>

                            <button type="submit" class="ui blue button">
                                {{ __('Registrarse') }}
                            </button>

            </form>
        </div>
    </div>
</div>

@endsection
