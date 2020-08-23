
    <footer>
        <div class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col s3">
                            <p>Copyright © {{ date('Y') }} MrVeX</p>
                        </div>
                        <div class="col s6"></div>
                        <div class="col s3">
                            <ul class="footer-links">
                                <li><a class="waves-effect waves-light btn-flat" href="{{ route('welcome') }}">
                                        <i class="fal fa-home"></i></a></li>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        <li><a class="waves-effect waves-light btn-flat" href="{{ route('userPage') }}">
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
                </div>
            </div>
        </div>
    </footer>

