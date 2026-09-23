<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ route('products.index') }}">
            Product System
        </a>

        <div class="navbar-nav">

            <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}"
               href="{{ route('products.index') }}">
                Products
            </a>

        </div>

    </div>
</nav>