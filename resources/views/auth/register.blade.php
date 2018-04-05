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
            <form action="{{ route('register') }}" method="POST" class="ui form">
                @csrf
                <div class="field {{ $errors->has('name') ? 'error' : '' }}">
                    <label for="name">{{ __('Nombre') }}</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <div class="ui error message">
                            <div class="header">Error de Nombre</div>
                            <p>{{ $errors->first('name') }}</p>
                        </div>
                    @endif
                </div>
                <div class="field {{ $errors->has('email') ? 'error' : '' }}">
                        <label for="email">{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" name="name" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <div class="ui error message">
                                <div class="header">Error de Correo</div>
                                <p>{{ $errors->first('email') }}</p>
                            </div>
                        @endif
                </div>
                <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                        <label for="password">{{ __('Contraseña') }}</label>
                        <input id="password" type="password" name="name" value="{{ old('password') }}" required autofocus>
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

                            <button type="submit" class="ui blue button">
                                {{ __('Registrarse') }}
                            </button>

            </form>
        </div>
    </div>
</div>

@endsection
