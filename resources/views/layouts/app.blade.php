<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <div class="d-flex align-items-stretch">
        <div class="bg-dark" style="width: 200px;">
            <ul class="navbar-nav ml-auto mt-5">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <p id="navbarDropdown" class="dropdown-item text-capitalize text-white" >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </p>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item text-white" href="{{ route('admin.questions') }}">
                            Perguntas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item text-white" href="{{ route('admin.classifications') }}">
                            Classificações
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
        <div style="display: flex;
        overflow-x: hidden;
        width: 100%;
        min-height: calc(100vh - 72px);
        flex-wrap: wrap;">
            <div class="container-fluid px-lg-4 px-xl-5">
                <!-- page-content  -->
                <main>
                    <div class="row pt-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h2>@yield('title', '')</h2>
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- page-content" -->
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    @yield('javacript-includes', '')
    @yield('javascript', '')
</body>

</html>
