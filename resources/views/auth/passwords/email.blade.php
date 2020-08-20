@extends('layouts.app')
@section('titles') Сброс пароля @endsection
@section('content')
<div class="container">
    <div class="row section">
        <div class="col m3"></div>
        <div class="card col m6">
            <h3 class="card-title center-align">Сбросить пароль</h3>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                <div class="card-content">
                    @csrf

                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <input id="email" type="email" class="validate @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email">Ваш E-Mail</label>
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
                </div>
                <div class="card-action">
                    <button type="submit" class="btn waves-effect waves-light">Отправить ссылку для сброса пароля
                        <i class="material-icons right">send</i></button>
                </div>
            </form>
        </div>
        <div class="col m3"></div>
    </div>
</div>
@endsection
