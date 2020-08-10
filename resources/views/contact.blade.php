@extends('layouts.app')
@section('titles')Контакты @endsection
@section('content')
<div class="card horizontal">
  <div class="card-image">
    <img src="{{Storage::url('public/img/mems.jpg')}}">
  </div>
  <div class="card-stacked">
    <div class="card-content">
      <p>I am a very simple card. I am good at containing small bits of information.</p>
    </div>
    <div class="card-action">
      <a href="#">This is a link</a>
    </div>
  </div>
</div>
@endsection