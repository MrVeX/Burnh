    @if ($errors->any())
        <div class="card">
            <div class="card-content">
                <blockquote class="errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            <hr>
                        @endforeach
                    </ul>
                </blockquote>
            </div>
        </div>
    @endif
