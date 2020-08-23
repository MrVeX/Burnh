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
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="collection z-depth-2">
                                <a href="" class="collection-item">Общая информация</a>
                                <a href="#!" class="collection-item">Портфолио</a>
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
                                <div class="card-content">
                                    <span class="card-title">{{ $user->first_name }} {{ $user->last_name }}</span>
                                    @empty($user->about)
                                        <div class="row">
                                            <div class="col s12">
                                                <p>Информация не предоставлена</p>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col s1">
                                                <p>О себе:</p>
                                            </div>
                                            <div class="col s11">
                                                <p>{{ $user->about }}</p>
                                            </div>
                                        </div>
                                    @endempty
                                    @empty($user->birth)
                                        <div class="row">
                                            <div class="col s12">
                                                <p>Дата рождения не указана</p>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col s2">
                                                <p>Дата рождения:</p>
                                            </div>
                                            <div class="col s10">
                                                <p>{{ $user->birth }}</p>
                                            </div>
                                        </div>
                                    @endempty

                                </div>
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
        $(".pin").pin();
        $(".pin").pin({
            containerSelector: ".bar",
        });

    </script>
    <script>
        var code1 = new Typed('.nick', {
            stringsElement: '#nickname',
            typeSpeed: 120
        });

    </script>
@endsection
