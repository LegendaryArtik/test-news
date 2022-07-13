<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ @route('home') }}">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Illuminate\Support\Facades\Route::is('home') ? 'active' : '' }}"
                       href="{{ @route('home') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Illuminate\Support\Facades\Route::is('news') ? 'active' : '' }}"
                       href="{{ @route('news') }}">Новости</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
