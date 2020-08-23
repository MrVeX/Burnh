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
                                    <img src="{{ asset("$user->avatar") }}" alt=""
                                        class="avatar z-depth-5 {{ $user->avatar_form }}">
                                    <div class="update-avatar">
                                        <!-- Modal Trigger -->
                                        <a class="waves-effect waves-light btn-small modal-trigger"
                                            href="#updaeAvatar">Обновить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="collection z-depth-2">
                                <a href="{{ route('userPage') }}" class="collection-item">Мои данные
                                    <i class="fal fa-alien right"></i></a>
                                <a href="{{ route('userPortfolio') }}" class="collection-item">Портфолио</a>
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
                                            Ваши данные
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
                                                    href="{{ route('password.request') }}">Изменить пароль</a>
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
    <!-- Modals -->
    <div id="updaeAvatar" class="modal">
        <form action="{{ route('updateAvatar') }}" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <h4 class="center-align">Обновление аватарки профиля</h4>
                <div class="divider"></div>

                <div class="row">
                    <div class="col m4">
                        <img id="avatar_form_var" src="{{ asset("$user->avatar") }}" alt="" class="avatar z-depth-5 {{ $user->avatar_form }}">
                    </div>
                    <div class="col m8">
                        @csrf
                        <p>Выберете новый файл</p>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Файл</span>
                                <input type="file" name="avatar">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <p>Вы так-же можете выбрать какой формы будет аватарка</p>
                        <div>
                            <p>
                                <label>
                                    <input name="avatar_form" id="avatar_circle" type="radio" value="circle" />
                                    <span>Круг</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="avatar_form" id="avatar_square" type="radio" value="square" />
                                    <span>Квадрат</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-close btn waves-effect waves-light">Обновить <i
                        class="material-icons right">edit</i></button>
            </div>
        </form>
    </div>
@endsection
@section('thisPageScripts')
    <script>
        $(".pin").pin();
        $(".pin").pin({
            containerSelector: ".bar",
        });

    </script>
    <script>
        $("input:radio[name='avatar_form']").change(function() {
            if($(this).val() == 'circle'){
                $('#avatar_form_var').addClass('circle').removeClass('square');
            }else{
                $('#avatar_form_var').addClass('square').removeClass('circle');
            }
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
            $('.modal').modal();
            $('input#first_name, input#last_name, textarea#about').characterCounter();
        });

    </script>
@endsection
