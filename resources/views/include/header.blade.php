@section('header')
<header>
  <div class="page-header">
  <nav>
    <div class="nav-wrapper container">
      <img class="logo-img" src="{{Storage::url('public/logo.png')}}" alt="logo">
      <a href="{{route('home')}}" class="brand-logo waves-effect waves-light">
        <span>Burning Hamsters</span>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light" href="{{ route('home') }}">Главная</a></li>
        {{-- <li><a class="waves-effect waves-light" href="{{ route('portfolio') }}">Портфолио</a></li>
        <li><a class="waves-effect waves-light" href="{{ route('contact') }}">Контакты</a></li> --}}
      </ul>
    </div>
  </nav>
</div>
</header>
