<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
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

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            /* Mencegah scroll pada seluruh halaman */
        }

        main {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        nav.bg-dark {
            position: fixed;
            left: 0;
            top: 3rem;
            /* Sesuai dengan tinggi navbar atas */
            bottom: 0;
            width: 200px;
            overflow-y: auto;
            /* Tambahkan jika sidebar lebih panjang */
        }

        .content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
            margin-left: 200px;
            /* Sesuai dengan lebar sidebar */
            height: calc(100vh - 3rem);
            /* Kurangi tinggi navbar */
        }

        .nav-link:hover {
            background-color: #555;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .active-menu {
            background-color: rgb(147, 50, 47) !important;
            /* Warna biru */
            color: #ffffff !important;
            font-weight: bold;
            border-radius: 5px;
            padding-left: 10px;
            transition: background-color 0.3s ease-in-out;
        }
    </style>
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
            </div>
        </nav>

        <main class="d-flex full-screen-bg vh-100" style="padding-top: 3rem;">
            <!-- Sidebar -->
            <nav class="bg-dark text-white p-3 d-flex flex-column" style="width: 200px;">
                <ul class="nav flex-column flex-grow-1">
                    <li class="nav-item" style="font-size: 24px">
                        <a class="nav-link text-white {{ Request::is('Dashboard*') ? 'active-menu' : '' }}" href="/Dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item" style="font-size: 24px">
                        <a class="nav-link text-white {{ Request::is('Meal*') ? 'active-menu' : '' }}" href="/Meal">Meal</a>
                    </li>
                    <li class="nav-item" style="font-size: 24px">
                        <a class="nav-link text-white {{ Request::is('Profile*') ? 'active-menu' : '' }}" href="/Profile">Profile</a>
                    </li>
                    <li class="nav-item" style="font-size: 24px">
                        <a class="nav-link text-white {{ Request::is('Settings*') ? 'active-menu' : '' }}" href="/Settings">Settings</a>
                    </li>
                </ul>
            </nav>

            <!-- Content -->
            <div class="content flex-grow-1 p-4 d-flex flex-column">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>