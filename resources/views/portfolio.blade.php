@extends('layouts.app')
@section('titles')Ваше портфолио @endsection
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
                                <a href="{{ route('userPage') }}" class="collection-item">Общая информация</a>
                                <a href="{{ route('userPortfolio') }}" class="collection-item">Портфолио</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m9 bar">
                    <div class="section">

                    </div>
                    @include('include.errors')
                    @include('include.success')
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
