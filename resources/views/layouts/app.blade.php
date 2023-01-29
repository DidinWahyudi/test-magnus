<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : 'Magnus Travel' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/custom.css'])

    <style type="text/css">
        @font-face {
            font-family: Mermaid;
            src: url('{{ public_path('fonts/Mermaid.tff') }}');
        }



        .section-hero {
            background-image: url('{{ asset('images/bg-new-lite.jpg') }}');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .section-hero::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 300px;
            height: 150px;
            background-image: url('{{ asset('images/air.png') }}');
            background-size: contain;
            background-position: center left;
            background-repeat: no-repeat;
        }

        .section-hero::before {
            content: '';
            position: absolute;
            right: 0;
            bottom: 30%;
            width: 900px;
            height: 400px;
            background-image: url('{{ asset('images/line.png') }}');
            background-size: contain;
            background-position: bottom right;
            background-repeat: no-repeat;
        }

        @media (max-width: 576px) {
            .section-hero::after {
                content: '';
                position: absolute;
                left: 0;
                top: 950px;
                width: 250px;
                height: 100px;
                background-image: url('{{ asset('images/air.png') }}');
                background-size: contain;
                background-position: center left;
                background-repeat: no-repeat;
            }

            .section-hero::before {
                content: '';
                position: absolute;
                right: 0;
                top: 500px;
                width: 700px;
                height: 500px;
                background-image: url('{{ asset('images/line.png') }}');
                background-size: contain;
                background-position: top left;
                background-repeat: no-repeat;
            }

        }

        @media (min-width: 992px) {
            .section-hero::before {
                content: '';
                position: absolute;
                right: 0;
                bottom: 25%;
                width: 700px;
                height: 300px;
                background-image: url('{{ asset('images/line.png') }}');
                background-size: contain;
                background-position: bottom right;
                background-repeat: no-repeat;
            }
        }

        @media (min-width: 1200px) {
            .section-hero::before {
                content: '';
                position: absolute;
                right: 0;
                bottom: 25%;
                width: 800px;
                height: 300px;
                background-image: url('{{ asset('images/line.png') }}');
                background-size: contain;
                background-position: bottom right;
                background-repeat: no-repeat;
            }
        }

        @media (min-width: 1400px) {
            .section-hero::before {
                content: '';
                position: absolute;
                right: 0;
                bottom: 45%;
                width: 1000px;
                height: 400px;
                background-image: url('{{ asset('images/line.png') }}');
                background-size: contain;
                background-position: bottom right;
                background-repeat: no-repeat;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <nav id="navbar" class="navbar fixed-top navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('images/Logo.png') }}" alt="Logo" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    @guest
                        <ul class="navbar-nav menu-nav ms-auto me-2">
                            <li class="nav-item @if (Request::is('/') || Request::is('home')) active @endif">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Our Tours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Contact Us</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav menu-nav ms-auto me-2">
                            <li class="nav-item @if (Request::is('/') || Request::is('home')) active @endif">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item @if (Request::is('dashboard')) active @endif">
                                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item @if (Request::is('destination')) active @endif">
                                <a class="nav-link" href="{{ route('destination') }}">Destinations</a>
                            </li>
                            <li class="nav-item @if (Request::is('feature')) active @endif">
                                <a class="nav-link" href="{{ route('feature') }}">Features</a>
                            </li>
                        </ul>
                    @endguest
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-dark px-4"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-dark px-4"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}

                            <li class="nav-item">
                                <a class="btn btn-outline-dark px-4" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>


<script>
    const navbar = document.getElementById('navbar')
    const onScroll = () => {
        // Get scroll value
        const scroll = document.documentElement.scrollTop
        // If scroll value is more than 0 - add class
        if (scroll > 100) {
            navbar.classList.add("bg-light");
        } else {
            navbar.classList.remove("bg-light");
        }
    }
    // Use the function
    window.addEventListener('scroll', onScroll)
</script>

</html>
