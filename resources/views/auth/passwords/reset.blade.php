@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="height: 95vh">
            <div class="col m3"></div>
            <div class="card col m6">
                <div class="card">
                    <h3 class="card-title center-align">Сброс пароля</h3>

                    <form method="POST" action="{{ route('password.update') }}">
                        <div class="card-content">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row">
                                <div class="col s12">
                                    <div class="input-field">
                                        <input id="email" type="email" class="validate @error('email') is-invalid @enderror"
                                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                            autofocus>
                                        <label for="email">E-Mail</label>
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
                                            class="validate @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        <label for="password">Пароль</label>
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
                                    <div class="input-field">
                                        <input id="password-confirm" type="password" class="validate"
                                            name="password_confirmation" required autocomplete="new-password">
                                        <label for="password-confirm">Подтвердите пароль</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn waves-effect waves-light">Сбросить пароль
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col m3"></div>
        </div>
    </div>
@endsection
