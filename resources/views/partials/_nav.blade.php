<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">

        <a class="navbar-brand"
           href="{{ route('movies.index') }}">
            Movie App
        </a>

        <div class="navbar-nav">

            <a class="nav-link"
               href="{{ route('movies.index') }}">
                Movies
            </a>

            <a class="nav-link"
               href="{{ route('movies.featured') }}">
                Featured
            </a>

        </div>

    </div>
</nav>