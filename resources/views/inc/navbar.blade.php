<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'BLOGz') }}</title>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-md bg-dark mb-3" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                BL<span>O</span>Gz
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ms-5">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">About</a>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/services">Services</a>
                        </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/posts">Blog</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown"
                                class="nav-link dropdown-toggle d-flex justify-content-end align-items-center gap-2"
                                href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                <img src="/storage/avatars/{{ Auth::user()->avatar }}" alt="Avatar" @style(['width: 5%;', 'border-radius: 50%'])>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a @class(['dropdown-item']) href="/home">Dashboard</a>
                                <a @class([
                                    'dropdown-item',
                                    'd-flex',
                                    'justify-content-between',
                                    'align-items-center',
                                ]) href="/user">
                                    Profile
                                    <i class="fa-solid fa-user"></i>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <i class="ms-2 fa-solid fa-arrow-right-from-bracket fa-fade"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>

<style>
    .navbar-brand {
        font-family: 'Pacifico', cursive;
        color: aqua;
    }

    span {
        color: red
    }

    .navbar-brand:hover>span {
        color: aqua;
    }

    .navbar-brand:hover {
        color: red;
    }
</style>
