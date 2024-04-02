<link rel="stylesheet" type="text/css" href="{{ url('css/main-nav.css') }}">

<main class="navbar-container">
    <nav class="main-navbar" id="navbar">
        <main class="main-navbar-content">
            <div class="main-logo">
                <img src="{{ asset('img/home/dgca-logo-outlined.png') }}" alt="DGCA Logo" class="nav-caap-logo">
                <img src="{{ asset('img/logo/caap_logo.png') }}" alt="CAAP Logo" class="nav-caap-logo">
            </div>
            <div class="nav-labels">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>
                        <a href="#" onclick="toggleDropdown()" class="dropbtn">Event <i class='bx bxs-chevron-down js-arrow arrow '></i></a>

                        <ul class="js-sub-menu sub-menu" id="subDropdown">
                            <li><a href="{{ route('news') }}">News & Updates</a></li>
                            <li><a href="{{ route('program-overview') }}">Programme</a></li>
                            <li><a href="#">Accompanying Person's Programme</a></li>
                            <li><a href="#">Social/Cultural Function</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-menu-drop">Exhibit & Sponsors</a>
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
                    <li>
                        <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
            <div class="navbar navbar-expand-lg navbar-right">
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
        </main>

    </nav>
</main>

<script>
    function toggleDropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("sub-menu");
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
<!-- <script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        var navbar = document.getElementById("navbar");
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            navbar.style.position = "fixed";
            navbar.style.top = "0";
        } else {
            navbar.style.position = "relative";
        }
    }
</script> -->
