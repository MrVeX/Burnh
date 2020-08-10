@section('footer')
<footer>
    <div class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s3">
                        <span>©{{date('Y')}} Developed by VeXter</span>
                    </div>
                    <div class="col s6"></div>
                    <div class="col s3">
                        <ul class="footer-links">
                            <li><a class="waves-effect waves-light btn-flat" href="mailto:kolomeicev.aleksei@yandex.ru"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a></li>
                            <li><a class="waves-effect waves-light btn-flat" href="https://wa.me/79291659429"><i class="fa fa-whatsapp" aria-hidden="true"></i></i></a></li>
                            <li><a class="waves-effect waves-light btn-flat" href="https://t.me/MrVeXter"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
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
