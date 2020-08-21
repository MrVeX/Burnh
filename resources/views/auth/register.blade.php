@extends('layouts.app')
@section('titles') Регистрация @endsection
@section('content')
<div class="container">
    <div class="row section">
        <div class="col m3"></div>
        <div class="card col m6">
            <h3 class="card-title center-align">Регистрация</h3>

            <form method="POST" action="{{ route('register') }}">
                <div class="card-content">
                    @csrf

                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <input id="name" type="text" class="validate"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label for="name">Никнейм</label>
                                <span class="helper-text" data-error="Обязательное поле" data-success="">
                                    Введите ваш Никнейм на латинице
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <input id="email" type="email" class="validate"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">
                                <label for="email">E-Mail</label>
                                <span class="helper-text" data-error="Неверный формат" data-success="">Введите свой
                                    e-mail адресс</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <input id="password" type="password"
                                    class="validate" name="password" required
                                    autocomplete="new-password">
                                <label for="password">Пароль</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm">Подтвердите пароль</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn waves-effect waves-light">Зарегестрироваться <i class="material-icons right">send</i></button>
                    <a href="{{ route('login') }}" class="btn waves-effect waves-light right">Вход</a>
                </div>
            </form>

        </div>
        <div class="col m3">
            @include('include.errors')
        </div>
    </div>
</div>
@endsection
