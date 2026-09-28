<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('movies.index') }}">🎬 Movies</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('movies.index') ? 'active text-white' : '' }}" href="{{ route('movies.index') }}">Movie List</a>
                </li>
            </ul>
        </div>
    </div>
</nav>