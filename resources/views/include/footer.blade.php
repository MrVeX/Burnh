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
