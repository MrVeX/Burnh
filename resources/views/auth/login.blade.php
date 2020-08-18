@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row valign-wrapper" style="height: 95vh">
        <div class="col m3">
            @if (session('success'))
            <div class="teal accent-3" role="alert">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <div class="card col m6">
            <h3 class="card-title center-align">Авторизация</h3>
            <form method="POST" action="{{ route('login') }}">
                <div class="card-content">
                    @csrf
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <input id="email" type="email" class="validate @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email" class="">E-Mail</label>
                                <span class="helper-text" data-error="Неверный формат" data-success="">Введите свой
                                    e-mail адресс</span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <input id="password" type="password"
                                    class="validate @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <label for="password" class="">Пароль</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <label>
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span>Запомнить меня?</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn waves-effect waves-light">Вход
                        <i class="material-icons right">send</i></button>
                    @if (Route::has('password.request'))
                    <a class="btn waves-effect waves-light right" href="{{ route('password.request') }}">Забыли
                        пароль?</a>
                    @endif
                </div>
            </form>
        </div>
        <div class="col m3"></div>
    </div>
</div>
@endsection
