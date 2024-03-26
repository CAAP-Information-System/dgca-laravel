<link rel="stylesheet" type="text/css" href="{{ url('css/main-nav.css') }}">
<div class="main-nav-content">
        <div class="head-navbar">
            <div class="logos-main">
                <a class="caap-nav">
                    <img src="{{ asset('img/home/dgca-logo-outlined.png') }}" alt="DGCA Logo" class="nav-caap-logo">
                    <img src="{{ asset('img/logo/caap_logo.png') }}" alt="CAAP Logo" class="nav-caap-logo">

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
                                        <!-- <li>
                                            <a href="#">About Us</a>
                                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                            <ul class="js-sub-menu sub-menu">
                                                <li><a href="{{ route('about-caap') }}">CAAP</a></li>
                                                <li><a href="https://beta.tourism.gov.ph/about-the-philippines/" target="_blank">The Philippines</a></li>
                                            </ul>
                                        </li> -->
                                        <li>
                                            <a href="#">Event</a>
                                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                            <ul class="js-sub-menu sub-menu">
                                                <li><a href="{{ route('news') }}">News & Updates</a></li>
                                                <li><a href="{{ route('program-overview') }}">Programme</a></li>
                                                <li><a href="#">Accompanying Person's Programme</a></li>
                                                <li><a href="#">Social/Cultural Function</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Exhibit & Sponsors</a>
                                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                            <ul class="js-sub-menu sub-menu">
                                                <li><a href="#">Floor Plan</a></li>
                                                <li><a href="#">Exhibit Registration Form</a></li>
                                                <li><a href="#">Exhibit Services</a></li>
                                                <li><a href="#">Sponsorship Agreement Form</a></li>
                                                <li><a href="{{ route('our-sponsors') }}">Acknowledged Sponsors</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="{{ route('registration-page') }}">Registration</a></li>
                                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </a>

            </div>
            <div class="navbar navbar-expand-lg ">
                <div class="top-nav">
                    @if(auth()->check() && auth()->user()->access_role == "admin")
                    <button id="toggleNavbar" class="toggle-nav">Show/Hide Navbar</button>
                    @endif
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

    </div>
