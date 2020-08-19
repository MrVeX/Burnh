@section('header')
  @if (Request::route()->getName() == 'welcome')
  <header class="invisible">
  @else
  <header>
  @endif
  <div class="page-header">
  <nav>
    <div class="nav-wrapper container">

      <a href="{{route('welcome')}}" class="brand-logo waves-effect waves-light">
        <img class="logo-img" src="{{Storage::url('public/logo.png')}}" alt="logo">
        <span>Burning Hamsters</span>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light" href="{{ route('welcome') }}">Главная</a></li>
        {{-- <li><a class="waves-effect waves-light" href="{{ route('portfolio') }}">Портфолио</a></li>
        <li><a class="waves-effect waves-light" href="{{ route('contact') }}">Контакты</a></li> --}}
      </ul>
    </div>
  </nav>
</div>
</header>
