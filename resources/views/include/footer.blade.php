@section('footer')
    <footer>
        <div class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col s3">
                            <div class="row">
                                <span>©{{ date('Y') }} Developed by VeXter</span>
                                <ul class="footer-links">
                                    @if (Route::has('login'))
                                        @auth
                                            <li><a class="waves-effect waves-light btn-flat" href="{{ route('user') }}">
                                                <i class="fal fa-alien"></i></a></li>
                                            <li><a class="waves-effect waves-light btn-flat" href="{{ route('logout') }}">
                                                <i class="fal fa-sign-out-alt"></i></a></li>
                                        @else
                                            <li><a class="waves-effect waves-light btn-flat" href="{{ route('login') }}">
                                                <i class="fal fa-user"></i></a></li>
                                        @endauth
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col s6"></div>
                        <div class="col s3">
                            <ul class="footer-links">
                                <li><a class="waves-effect waves-light btn-flat"
                                        href="mailto:kolomeicev.aleksei@yandex.ru"><i class="fal fa-envelope-open"></i></a>
                                </li>
                                <li><a class="waves-effect waves-light btn-flat" href="https://wa.me/79291659429"><i
                                            class="fab fa-whatsapp"></i></a></li>
                                <li><a class="waves-effect waves-light btn-flat" href="https://t.me/MrVeXter"><i
                                            class="fab fa-telegram-plane"></i></a></li>
                                <li><a class="waves-effect waves-light btn-flat" href="{{ route('welcome') }}">
                                        <i class="fal fa-home"></i></a></li>
                                {{-- <li><a class="waves-effect waves-light btn-flat"
                                        href="{{ route('portfolio') }}">Портфолио</a></li>
                                <li><a class="waves-effect waves-light btn-flat" href="{{ route('contact') }}">Контакты</a>
                                    --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
