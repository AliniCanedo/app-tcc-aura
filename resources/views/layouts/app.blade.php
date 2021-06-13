<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', '') - {{ config('app.name', 'Laravel') }}</title>

        @yield('css-includes', '')
        <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}" />
        <script src="https://kit.fontawesome.com/9c75b420f6.js" crossorigin="anonymous"></script>


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                     <div class="sidebar-brand">
                        <a href="/"><i class="fas fa-home"></i> Home</a>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                            src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        {{-- <span class="user-name"> {{ Auth::user()->name }} <span class="caret"></span>
                        </span> --}}
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                class="text-muted">Sair</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </span>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Geral</span>
                        </li>
                        <li class="sidebar-menu">
                            <a href="{{ route('admin.questions') }}">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Perguntas</span>
                                {{-- <span class="badge badge-pill badge-warning">New</span> --}}
                            </a>
                        </li>
                        <li class="sidebar-menu">
                            <a href="{{ route('admin.classifications') }}">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Classficacações</span>
                                {{-- <span class="badge badge-pill badge-warning">New</span> --}}
                            </a>
                        </li>

                        <li class="sidebar-menu">
                            <a href="{{ route('admin.models') }}">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Modelo de Resposta</span>
                                {{-- <span class="badge badge-pill badge-warning">New</span> --}}
                            </a>
                        </li>

                        <li class="sidebar-menu">
                            <a href="{{ route('admin.users') }}">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Usuários</span>
                                {{-- <span class="badge badge-pill badge-warning">New</span> --}}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.documentations')}}">
                                <i class="fa fa-book"></i>
                                <span>Documentação</span>
                                <span class="badge badge-pill bg-primary">Beta</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>

            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="text-muted"> <i
                        class="fa fa-power-off"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
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
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    </script>
    @include('sweetalert::alert')
    @yield('javacript-includes', '')
    @yield('javascript', '')
    @yield('css-includes', '')
    @yield('css', '')
 
    <script>
        jQuery(function($) {
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if (
                    $(this)
                    .parent()
                    .hasClass("active")
                ) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .parent()
                        .removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .next(".sidebar-submenu")
                        .slideDown(200);
                    $(this)
                        .parent()
                        .addClass("active");
                }
            });
            $("#close-sidebar").click(function() {
                if(window.width() <= 750) {
                    $(".page-wrapper").removeClass("toggled");
                }
            });
            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });
            if ($(window).width() < 550) {
                $(".page-wrapper").removeClass("toggled");
            }});
    </script>
</body>

</html>
