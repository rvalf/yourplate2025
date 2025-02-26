<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Irish+Grover&family=Itim&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg px-4 bg-cream">
            <div class="container-fluid">
                <a class="navbar-brand font-logo" href="#">
                    <h4 class="mb-0">YourPlate</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle"
                    aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <p class="mb-0">Hi! Are you confused about what to eat?</p>
                <div class="collapse navbar-collapse" id="navbarToggle">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i
                                    class="bi bi-house-door-fill me-2"></i></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-cart-fill me-2"></i>Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-chat-fill me-2"></i>Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-person-fill me-2"></i>Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="full-screen-bg">
            @yield('content')
        </main>
    </div>
</body>

</html>