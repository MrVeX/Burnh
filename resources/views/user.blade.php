@extends('layouts.app')

@section('titles') Страница {{ $data->name }} @endsection
@section('content')
    {{ $data }}
    <div class="container">
        <div class="section">
        <div class="row">
            <div class="col m3">
                <div class="col s12">
                    <div class="center-align">
                        <img src="{{ Storage::url('public/img/first-screen.jpg') }}" alt="" class="circle avatar align-center">
                        <div>{{ $data->name }}</div>
                    </div>

                </div>
            </div>
            <div class="col m9">

            </div>
        </div>
    </div>
    </div>
@endsection
