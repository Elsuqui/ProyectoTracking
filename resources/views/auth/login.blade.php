@extends('layouts.app')

@section('content')
        <div class="ui one column stackable center aligned page grid">
        <div class="row"></div>
        <div class="column twelve wide">
            <div class="ui raised very padded centered container segment">
            <img class="ui centered small circular image" src="{{ asset('images/user_image.png') }}">

                <h4 class="ui horizontal divider header">
                <i class="user icon"></i>{{ __('Iniciar Sesión') }}
                </h4>
            <form method="POST" action="{{ route('login') }}" class="ui form">
                @csrf
            <div class="field {{ $errors->has('email') ? 'error' : '' }}">
                    <label for="email">{{ __('Correo Electrónico') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            @if ($errors->has('email'))
            <div class="ui error message">
                <div class="header">Error de Mail</div>
                <p>{{$errors->first('email')}}</p>
            </div>
            @endif
            <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                <label for="password" class="">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="" name="password" required>
                @if ($errors->has('password'))
                <div class="ui error message">
                    <div class="header">Error de Password</div>
                    <p>{{$errors->first('password')}}</p>
                </div>
                @endif
            </div>
            <div class="field">
                    <div class="ui checkbox">
                      <input type="checkbox" tabindex="0" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label>{{ __('Recuerdame') }}</label>
                    </div>
            </div>
            <div class="field">
                <div class="ui error message">
                    <i class="close icon"></i>
                    <div class="header">Error al Iniciar Sesion</div>
                    <ul class="list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
                    <button class="ui green button" type="submit">{{ __('Iniciar') }}</button>
                    <a class="ui brown button" href="{{ route('password.request') }}">
                            {{ __('Olvidaste la contraseña?') }}
                    </a>
                    <a class="ui blue button" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
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
