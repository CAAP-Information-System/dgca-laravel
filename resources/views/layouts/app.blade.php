<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '59th DGCA Conference')</title>
    <link rel="icon" href="img/dgca-logo.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin/dashboard.css') }}">
    <!-- Google Font Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Your custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
    <!-- ADMIN LTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    .caap-video {
        width: 100%;
        height: auto;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    #logout {
        color: #E83E3E;
    }

    #login-register {
        color: #002868;
        font-size: 16px;
        padding: 10px;
    }

    .nav-link:hover {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        transition: .1s ease-in-out;
        border-radius: 15px;
    }
</style>
<div class="preloader-container" id="preloader">
    <img src="{{ asset('gif/loader-caap.gif') }}" alt="CAAP Logo" class="">
</div>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/dgca-logo.jpg') }}" alt="CAAP Logo" class="nav-caap-logo">
                </a>

                <a href="url_for_icao_logo" target="_blank">
                    <img src="{{ asset('img/icao.png') }}" alt="ICAO Logo" class="nav-bagong-pilipinas-logo">
                </a>

                <a href="https://caap.gov.ph" target="_blank">
                    <img src="{{ asset('img/caap_logo.png') }}" alt="CAAP Logo" class="nav-caap-logo">
                </a>

                <a href="url_for_bagong_pilipinas_logo" target="_blank">
                    <img src="{{ asset('img/bagong-pilipinas-logo.png') }}" alt="Bagong Pilipinas Logo" class="nav-bagong-pilipinas-logo">
                </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        @guest
                        @if (Route::has('login'))

                        <li class="nav-item">
                            <a id="login-register" class="nav-link" href="{{ route('login') }}">
                                <i class="fa-solid fa-right-to-bracket fa-lg"></i> &nbsp
                                Login/Register
                            </a>
                        </li>
                        @endif

                        <!-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif -->
                        @else
                        @if(auth()->check() && auth()->user()->access_role != "admin")
                        <li class="nav-item">
                            <a id="login-register" class="nav-link" href="{{ route('welcome') }}">
                                <i class="fa-solid fa-house"></i>&nbsp
                                Home
                            </a>
                        </li>
                        <div style="margin: 15px;"></div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown " class="nav-link dropdown-toggle" style="color:#002868; font-size: 16px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa-solid fa-circle-user"></i>&nbsp
                                {{ Auth::user()->first_name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if(auth()->check() && auth()->user()->access_role == "admin")
        <aside class="main-sidebar">
            <!-- Brand Logo -->
            <header class="navbar-header">DGCA Admin</header>

            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="sidebar-item">

                                <i class="fa-solid fa-chart-column fa-lg"></i>
                                <div class="item-name">Dashboard</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('files') }}" class="sidebar-item">
                                <i class="fa-regular fa-file-lines fa-lg"></i>
                                <div class="item-name">Files Uploaded</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('meeting-reservations') }}" class="sidebar-item">
                                <i class="fa-regular fa-calendar-check fa-lg"></i>
                                <div class="item-name">Reservation</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('account_list') }}" class="sidebar-item">
                                <i class="fa-solid fa-users"></i>
                                <div class="item-name">Account Lists</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="sidebar-item">
                                <i class="fa-solid fa-spinner fa-lg"></i>
                                <div class="item-name">Pending Accounts</div>
                            </a>
                        </li>
                        <div class="account-name-sidebar">
                            <li class="nav-item dropdown ">
                                @auth
                                <a id="navbarDropdown" class="sidebar-item dropdown-toggle" style="font-size: 16px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa-solid fa-user-large fa-lg user-large"></i> {{ Auth::user()->first_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                @endauth
                            </li>
                        </div>
                    </ul>
                </nav>

            </div>

        </aside>
        @endif

        <main class="py-4">

            @if(auth()->check() && auth()->user()->access_role != "admin")
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subnavbar" aria-controls="subnavbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="welcome-navbar" id="subnavbar">
                <ul class="navbar-links">
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Conference</a>
                        <div class="dropdown">
                            <a class="sub" href="{{ route('welcome') }}">Welcome Message</a>
                            <a class="sub" href="{{ route('agenda') }}">Agenda</a>
                            <a class="sub" href="#">Programme</a>
                            <a class="sub" href="{{ route('participants') }}">Participants</a>
                            <a class="sub" href="{{ route('the-gallery') }}">The Gallery</a>
                        </div>
                    </li>

                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="{{ route('meeting-room') }}">Side Meeting</a>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Documents</a>
                        <div class="dropdown">
                            <a class="sub" href="{{ route('disc-paper') }}">Discussion</a>
                            <a class="sub" href="{{ route('info-paper') }}">Information</a>
                            <a class="sub" href="#">Paper Submission Guide</a>

                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Events</a>
                        <div class="dropdown">
                            <a class="sub" href="#">Social/Cultural Function</a>

                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Exhbits and Sponsors</a>
                        <div class="dropdown">
                            <a class="sub" href="#">Floor Plan</a>
                            <a class="sub" href="#">Exhibit Services</a>
                            <a class="sub" href="#">Exhibition Registration</a>
                            <a class="sub" href="#">Our Sponsors</a>
                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Delegate's Corner</a>
                        <div class="dropdown">
                            <a class="sub" href="{{ route('bulletin') }}">Conference Bulletin</a>
                            <a class="sub" href="#">Transport Schedule</a>
                            <a class="sub" href="#">Venue</a>
                            <a class="sub" href="#">Registration</a>
                            <a class="sub" href="#">Other Notices</a>
                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="https://beta.tourism.gov.ph/about-the-philippines/" target="_blank">About Philippines</a>
                    </li>
                </ul>
            </nav>
            @endif
            @yield('content')
        </main>
    </div>
</body>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.getElementById("preloader").style.display = "none";
            document.querySelector(".content").style.display = "block";
        }, 1000);
    });
</script>

</html>
