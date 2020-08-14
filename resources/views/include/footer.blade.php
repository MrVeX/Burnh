@section('footer')
<footer>
    <div class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s3">
                        <span>©{{date('Y')}} Developed by VeXter</span>
                        @if (Route::has('login'))
                        @auth
                            <a class="waves-effect waves-light btn-flat" href="{{ route('home') }}"><i class="fal fa-user"></i></a>
                        @else
                            <a class="waves-effect waves-light btn-flat" href="{{ route('login') }}"><i class="fal fa-user"></i></a>
                            {{-- @if (Route::has('register'))
                                <li><a class="waves-effect waves-light" href="{{ route('register') }}">Register</a></li>
                            @endif --}}
                        @endauth
                    @endif
                    </div>
                    <div class="col s6"></div>
                    <div class="col s3">
                        <ul class="footer-links">
                            <li><a class="waves-effect waves-light btn-flat" href="mailto:kolomeicev.aleksei@yandex.ru"><i class="fal fa-envelope-open"></i></a></li>
                            <li><a class="waves-effect waves-light btn-flat" href="https://wa.me/79291659429"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a class="waves-effect waves-light btn-flat" href="https://t.me/MrVeXter"><i class="fab fa-telegram-plane"></i></a></li>
                            <li><a class="waves-effect waves-light btn-flat" href="{{ route('home') }}">Главная</a></li>
                            {{-- <li><a class="waves-effect waves-light btn-flat"
                                    href="{{ route('portfolio') }}">Портфолио</a></li>
                            <li><a class="waves-effect waves-light btn-flat" href="{{ route('contact') }}">Контакты</a> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
