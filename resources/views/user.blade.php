@extends('layouts.app')

@section('titles') Страница {{ $user->name }} @endsection
@section('content')
    <div class="container">
        <div class="user section">
            <div class="row">
                <div class="col m3">
                    <div class="col s12">
                        <div class="pin section">
                            <div class="center-align">
                                <div class="avatar-section">
                                    <img src="{{ asset("$user->avatar") }}" alt="" class="avatar z-depth-5">
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="collection z-depth-2">
                                <a href="{{ route('user') }}" class="collection-item">Мои данные
                                    <i class="fal fa-alien right"></i></a>
                                <a href="#!" class="collection-item">Портфолио</a>
                                <a href="{{ route('logout') }}" class="collection-item">Выйти
                                    <i class="fal fa-sign-out-alt right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m9 bar">
                    <div class="section">
                        <div class="nickname">
                            <div id="nickname">
                                <span>{{ $user->name }}</span>
                            </div>
                            <span class="nick"></span>
                        </div>
                        <div class="section ">
                            <div class="card ">
                                <form action="{{ route('updateUserInfo') }}" method="post">
                                    <div class="card-content">
                                        <span class="card-title">
                                            <span>Ваш данные</span>
                                        </span>
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col m4">
                                                <input placeholder="Имя" id="first_name" type="text" name="first_name"
                                                    value="{{ $user->first_name }}" data-length="20">
                                                <label for="first_name">Ваше имя</label>
                                            </div>
                                            <div class="input-field col m4">
                                                <input placeholder="Фамилия" id="last_name" type="text" name="last_name"
                                                    value="{{ $user->last_name }}" data-length="30">
                                                <label for="last_name">Ваша фамилия</label>
                                            </div>
                                            <div class="input-field col m4">
                                                <input placeholder="" id="birth" type="date" name="birth"
                                                    value="{{ $user->birth }}">
                                                <label for="birth">Дата рождения</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea placeholder="О себе" name="about" id="about"
                                                    class="materialize-textarea"
                                                    data-length="500">{{ $user->about }}</textarea>
                                                <label for="about">О себе</label>
                                            </div>
                                        </div>
                                        <div class="card-action">
                                            <button type="submit" class="btn waves-effect waves-light">Обновить <i
                                                    class="material-icons right">edit</i></button>
                                            @if (Route::has('password.request'))
                                                <a class="btn waves-effect waves-light right"
                                                    href="{{ route('password.request') }}">Обновить пароль</a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @include('include.errors')
                            @include('include.success')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('thisPageScripts')
    <script>
        $(".pin").pin()
        $(".pin").pin({
            containerSelector: ".bar"
        });

    </script>
    <script>
        var code1 = new Typed('.nick', {
            stringsElement: '#nickname',
            typeSpeed: 120
        });

    </script>

    <script>
        $(document).ready(function() {
            $('input#first_name, input#last_name, textarea#about').characterCounter();
        });

    </script>
@endsection
