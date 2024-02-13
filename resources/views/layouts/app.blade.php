<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '59th DGCA Conference')</title>
    <link rel="icon" href="img/logo/dgca-logo-white.jpg" type="image/x-icon">
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/scrollreveal@4"></script>

    <!-- SUMMERNOTE CDN -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- Your custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    #login-register {
        color: #002868;
        font-size: 16px;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-left: 10px;
    }

    .logout {
        text-decoration: none;
        color: #002868;
        padding: 7px;
        font-size: 15px;
        display: inline-block;
        width: 100%;
        font-weight: bold;
    }

    .logout:hover {
        color: #ffff;
        text-decoration: none;
        background-color: #931f1f;
    }

    .nav-item {
        list-style: none;
    }

    .nav-link {
        text-decoration: none;
        border-radius: 15px;
        border: solid 1px transparent;
    }

    .nav-link:hover {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border: solid 1px #2658AB;
        transition: .1s ease-in;
        border-radius: 15px;

    }
</style>
<div class="preloader-container" id="preloader">
    <img src="{{ asset('gif/loader-caap.gif') }}" alt="CAAP Logo" class="">
</div>

<body class="">
    <div class="main-nav-content">
        <div class="head-navbar">
            <div class="logos-main">
                <a class="caap-nav" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo/dgca-logo.png') }}" alt="CAAP Logo" class="nav-caap-logo">
                    <header class="header-name">
                        Civil Aviation Authority of the Philippines
                        <div class="dgca-name">59th Conference of Director Generals</div>
                    </header>

                </a>
            </div>
            <div class="navbar navbar-expand-lg ">

                <div class="top-nav">
                    @guest
                    @if (Route::has('login'))

                    <li class="nav-item">
                        <a id="login-register" class="nav-link" href="{{ route('login') }}">
                            Login/Register
                        </a>
                    </li>
                    @endif
                    @else
                    @if(auth()->check() && auth()->user()->access_role != "admin")
                    <li class="nav-item">
                        <a id="login-register" class="nav-link" href="{{ route('welcome') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="login-register" class="nav-link dropdown-toggle" style="color:#002868; font-size: 16px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                    </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="main-nav">
            <nav class="main-navigation">
                <div class="navbar">
                    <i class='bx bx-menu'></i>
                    <div class="nav-links">
                        <div class="sidebar-logo">
                            <i class='bx bx-x'></i>
                        </div>
                        <ul class="links">
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li>
                                <a href="#">About Us</a>
                                <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                <ul class="js-sub-menu sub-menu">
                                    <li><a href="{{ route('about-caap') }}">CAAP</a></li>
                                    <li><a href="https://beta.tourism.gov.ph/about-the-philippines/" target="_blank">The Philippines</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Event</a>
                                <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                <ul class="js-sub-menu sub-menu">
                                    <li><a href="{{ route('news') }}">News & Updates</a></li>
                                    <li><a href="{{ route('program-overview') }}">Program Overview</a></li>
                                    <li><a href="#">Social/Cultural Function</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Exhibit & Sponsors</a>
                                <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                <ul class="js-sub-menu sub-menu">
                                    <li><a href="#">Floor Plan</a></li>
                                    <li><a href="{{ route('our-sponsors') }}">Our Sponsors</a></li>
                                    <li><a href="#">Exhibit Services</a></li>
                                    <li><a href="#">Exhibition Registration</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('registration-page') }}">Registration</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
    @if(auth()->check() && auth()->user()->access_role == "admin")
    <div class="admin-navigation">
        <aside class="main-sidebar elevation-4" id="navbarSupportedContent">


            <div class="sidebar">
                <header class="navbar-header">DGCA Admin</header>
                <nav class="mt-3">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
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
                            <a href="{{ route('pending-accounts') }}" class="sidebar-item">
                                <i class="fa-solid fa-spinner fa-lg"></i>
                                <div class="item-name">Pending Accounts</div>
                            </a>
                        </li>
                        <li class="nav-item " id="account-name">
                            @auth
                            <div class="logout-content">
                                <a class="button-31" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i> &nbsp;&nbsp; Sign Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            @endauth
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
    @endif

    <main class="">
        @yield('content')
    </main>
    </div>
</body>

<footer class="text-center bg-body-tertiary text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="me-5 d-none d-lg-block">
            <a href="https://caap.gov.ph" target="_blank">
                <img src="{{ asset('img/logo/caap_logo.png') }}" alt="CAAP Logo" class="footer-caap-logo">
            </a>
            <a href="https://www.icao.int/Pages/default.aspx" target="_blank">
                <img src="{{ asset('img/logo/icao-logo.png') }}" alt="ICAO Logo" class="icao-logo">
            </a>
            <a href="#"><img src="{{ asset('img/logo/bagong-pilipinas-logo.png') }}" alt="Bagong Pilipinas Logo" class="nav-bagong-pilipinas-logo"></a>
        </div>

    </section>
    <section class="sponsors-logo">
        <img src="{{ asset('img/sponsors/sponsor-sample.png') }}" alt="sponsor logo" class="sponsor-logo">
        <img src="{{ asset('img/sponsors/sponsor-sample.png') }}" alt="sponsor logo" class="sponsor-logo">
        <img src="{{ asset('img/sponsors/sponsor-sample.png') }}" alt="sponsor logo" class="sponsor-logo">
    </section>

    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>59th DGCA Conference - APAC
                    </h6>
                    <p>
                        <img src="{{ asset('img/logo/dgca-logo.png') }}" alt="CAAP Logo" class="footer-dgca-logo">
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Event Booklet</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Brochure</a>
                    </p>

                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Shangri-La Mactan Cebu, Philippines</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        Copyright © <span class="text-bold">59th Conference of DGCA</span> All rights reserved.
    </div>

</footer>

<script src="{{ asset('js/app/nav.js') }}"></script>
<script src="{{ asset('js/app/dropdown.js') }}"></script>
<script src="{{ asset('js/app/preloader.js') }}"></script>


</html>
