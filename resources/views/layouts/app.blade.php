<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Product System')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

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

<main class="container mt-4">

    @yield('content')

</main>

</body>
</html>