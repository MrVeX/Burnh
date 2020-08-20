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
                                <img src="{{ Storage::url('public/img/first-screen.jpg') }}" alt=""
                                    class="circle avatar align-center z-depth-5">
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
                    <div class="row nickname">
                        <div id="nickname">
                            <span>{{ $user->name }}</span>
                        </div>
                        <span class="nick"></span>
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
        })

    </script>
    <script>
        var code1 = new Typed('.nick', {
            stringsElement: '#nickname',
            typeSpeed: 120
        });

    </script>
@endsection
