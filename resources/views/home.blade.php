@extends('layouts.app')
@section('titles')Главная Burning Hamsters @endsection
@section('content')
<div class="preview" id="particles-js">
    <div class="preview-text container">
            <div id="code-1"><h1><span class="class">Burnh</span>::<span class="funct">Coffe</span>;</h1></div>
            <div id="code-2"><h1><span class="class">Burnh</span>::<span class="funct">Code</span>;</h1></div>
            <div id="code-3"><h1><span class="class">Burnh</span>::<span class="funct">Meme</span>;</h1></div>
            <div id="code-4"><h1><span class="class">Burnh</span>::<span class="funct">Code</span>-><span class="var">MoreCode</span>;</h1></div>
        <h1 class="element1"></h1>
        <h1 class="element2"></h1>
        <h1 class="element3"></h1>
        <h1 class="element4"></h1>
    </div>
    <div class="preview-btn">
        <a href="#content" class="btn-floating btn-large pulse cyan"><i class="material-icons">arrow_downward</i></a>
    </div>
    <svg class="editorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="gentle-wave" d="  M-160 44c30 0
                                        58-18 88-18s
                                        58 18 88 18
                                        58-18 88-18
                                        58 18 88 18
                                        v44h-352z" />
        </defs>
        <g class="parallax1">
            <use xlink:href="#gentle-wave" x="50" y="3" />
        </g>
        <g class="parallax2">
            <use xlink:href="#gentle-wave" x="50" y="0" />
        </g>
        <g class="parallax3">
            <use xlink:href="#gentle-wave" x="50" y="9" />
        </g>
        <g class="parallax4">
            <use xlink:href="#gentle-wave" x="50" y="6" />
        </g>
    </svg>
</div>
<div id="content" class="container">
    <h1 class="heading">Burning Hamsters — Фриланс и не только</h1>
    <div class="row">

    </div>
</div>

@endsection
