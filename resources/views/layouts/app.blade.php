<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', '59th DGCA Conference')</title>
    <link rel="icon" href="{{ asset('dgca-icon.png') }}" type="image/x-icon">
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
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.tailwindcss-animated.com/configurator.html?animation=fade-up">
    <!-- ADMIN LTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap');

    * {
        font-family: "Montserrat", sans-serif;
    }
</style>
<div class="preloader-container" id="preloader">
    <img src="{{ asset('gif/loader-caap.gif') }}" alt="CAAP Logo" class="">
</div>

<body class="">
    @include('layouts.main-navbar')
    @include('layouts.admin-navbar')


    <main class="main-content scroll-smooth">
        @yield('content')
    </main>
    </div>
</body>

<footer class="text-center text-muted">
    <!-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
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
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>59th DGCA Conference - APAC
                    </h6>
                    <p>
                        <img src="{{ asset('img/logo/dgca-logo.png') }}" alt="CAAP Logo" class="footer-dgca-logo">
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
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
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Shangri-La Mactan Cebu, Philippines</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                </div>

            </div>
        </div>
    </section> -->
    <div class="footer text-center">
        <b>www.dgca59.ph &nbsp;&nbsp;| &nbsp;&nbsp; dgca59_secretariat@caap.gov.ph &nbsp;&nbsp; |</b>
    </div>

</footer>
<script>
    // Get references to the navbar and the toggle button
    const navbar = document.getElementById('adminNavigation');
    const toggleButton = document.getElementById('toggleNavbar');

    // Add event listener to the toggle button
    toggleButton.addEventListener('click', function() {
        // Toggle the visibility of the navbar
        navbar.classList.toggle('hidden');
    });
</script>
<script src="{{ asset('js/app/nav.js') }}"></script>
<script src="{{ asset('js/app/dropdown.js') }}"></script>
<script src="{{ asset('js/app/preloader.js') }}"></script>


</html>
