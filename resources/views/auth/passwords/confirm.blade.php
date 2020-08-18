@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="height: 95vh">
            <div class="col m3"></div>
            <div class="col-m6">
                <div class="card">
                    <h3 class="card-title center-align">Подтверждение пароля</h3>
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        <div class="card-content">
                            @csrf

                            <div class="row">
                                <div class="col s12">
                                    <div class="input-field">
                                        <input id="password" type="password"
                                            class="validate @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                        <label for="password">Пароль</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn waves-effect waves-light">Подтвердить пароль
                                <i class="material-icons right">send</i>
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn waves-effect waves-light" href="{{ route('password.request') }}">Забыли пароль?
                                    <i class="material-icons right">send</i>
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <div class="col m3"></div>
        </div>
    </div>
@endsection
