<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

    <!-- Your custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    <div id="">

        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <span class="logos-main">
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
                </span>
                <nav class="navbar navbar-expand-lg ">
                    <button id="main-toggle" style="margin-top: 2vh;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars fa-lg" style="color: #002868;"></i>
                        Main Navigation
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <div style="margin-left: 60%;"></div>
                        @guest
                        @if (Route::has('login'))

                        <li class="nav-item">
                            <a id="login-register" class="nav-link" href="{{ route('login') }}">
                                <i class="fa-solid fa-right-to-bracket fa-lg"></i> &nbsp
                                Login/Register
                            </a>
                        </li>
                        @endif
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
                            <a id="login-register" class="nav-link dropdown-toggle" style="color:#002868; font-size: 16px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        </li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </div>
    </div>
    </nav>
    @if(auth()->check() && auth()->user()->access_role == "admin")
    <div class="admin-navigation">
        <aside class="main-sidebar elevation-4" id="navbarSupportedContent">
            <!-- Brand Logo -->
            <header class="navbar-header">DGCA Admin</header>

            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Dashboard -->
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
                            <a href="#" class="sidebar-item">
                                <i class="fa-solid fa-spinner fa-lg"></i>
                                <div class="item-name">Pending Accounts</div>
                            </a>
                        </li>
                        <li class="nav-item " id="account-name">
                            @auth
                            <div class="logout-content">
                                <a class="button-24" id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

    <main class="py-4">

        @if(auth()->check() && auth()->user()->access_role != "admin")
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown1" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars fa-lg" style="color: #002868;"></i>
                        Conference Navigation
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown1">
                        <div class="sub-nav">
                            <ul class="navbar-nav" style="color: #002868;">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Conference
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('welcome') }}">Welcome Message</a>
                                        <a class="dropdown-item" href="{{ route('agenda') }}">Agenda</a>
                                        <a class="dropdown-item" href="#">Programme</a>
                                        <a class="dropdown-item" href="{{ route('participants') }}">Participants</a>
                                        <a class="dropdown-item" href="{{ route('the-gallery') }}">The Gallery</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('meeting-room') }}">
                                        Side Meeting
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Documents
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('disc-paper') }}">Discussion</a>
                                        <a class="dropdown-item" href="{{ route('info-paper') }}">Information</a>
                                        <a class="dropdown-item" href="#">Paper Submission Guide</a>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Events
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                            Social/Cultural Function
                                        </a>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Exhibits and Sponsors
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Floor Plan</a>
                                        <a class="dropdown-item" href="#">Exhibit Services</a>
                                        <a class="dropdown-item" href="#">Exhibition Registration</a>
                                        <a class="dropdown-item" href="#">Our Sponsors</a>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Delegate's Corner
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('bulletin') }}">Conference Bulletin</a>
                                        <a class="dropdown-item" href="#">Transport Schedule</a>
                                        <a class="dropdown-item" href="#">Venue</a>
                                        <a class="dropdown-item" href="#">Registration</a>
                                        <a class="dropdown-item" href="#">Other Notices</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://beta.tourism.gov.ph/about-the-philippines/" target="_blank">About Philippines</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        @endif
        @yield('content')
    </main>
    </div>
</body>

<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <img src="{{ asset('img/caap_logo.png') }}" alt="CAAP Logo" class="footer-caap-logo">

            <span class="footer-span-header">
                Civil Aviation Authority of the Philippines
            </span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="right-logos">
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>

        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
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
                        <img src="{{ asset('img/dgca-logo.jpg') }}" alt="CAAP Logo" class="footer-dgca-logo">
                    </p>
                    <p>
                        Place supporting details of the DGCA here
                    </p>
                </div>

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"><i class="fa-solid fa-file-pdf mr-3" style="color:#931f1f;"></i>Event Booklet PDF</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset"><i class="fa-solid fa-file-pdf mr-3" style="color:#931f1f;"></i>Brochure PDF</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Facebook Live Link</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Youtube Live Link</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Address</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        Copyright © <span class="text-bold">59th Conference of DGCA</span> All rights reserved.
    </div>
    <!-- Copyright -->
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.getElementById("preloader").style.display = "none";
            document.querySelector(".content").style.display = "block";
        }, 1000);
    });
</script>


</html>
