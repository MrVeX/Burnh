@if (session('success'))
    <div class="card">
        <div class="card-content">
            <blockquote class="success">
                {{ session('success') }}
            </blockquote>
        </div>
    </div>
@endif
