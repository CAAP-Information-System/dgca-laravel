@extends('layouts.app')
@section('title', '59th DGCA Conference')
@section('content')
<!-- <link rel="stylesheet" type="text/css" href="{{ url('css/main/welcome.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('css/main/welcomev2.css') }}">
<main class="content-main">
    @if (auth()->check() && auth()->user()->status === 'Pending')
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Welcome, <span style="font-weight: bold;">{{$user->first_name}} {{$user->last_name}}</span></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="congratulations">We are pleased to inform you that your registration for the 59th DGCA Online Conference has been successfully received.</p>
                    <div style="margin-top: 35px;"></div>
                    <span class="note">Reminders:</span>

                    <p>Please note that your current account is under <span style="color: #FD6F6F; font-weight:bold;">PENDING</span> approval by the conference administrators.</p>
                    <p>For any inquiries or concerns regarding your registration status, we kindly ask you to contact the DGCA Secretariat:</p>
                    <a class="email-link" href="#">secretariat-email-here@example.com</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" id="closeButton">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="">
        <section class="welcome-banner">
            <video autoplay loop muted>
                <source src="{{ asset('mp4/edited-dgca52.mp4') }}" type="video/mp4">

            </video>
            <main class="banner">
                <!-- <header class="welcome-title">Welcome</header> -->
                <header class="title">59th Conference of Director Generals</header>
                <p class="title-sub">Philippines 2024</p>
                <a href="{{ route('login')}}" class="button-19">Let's Join Now!</a>
            </main>
        </section>
    </div>
    <section class="container">
        <nav class="conf-nav">
            <ul>
                <li class="dropdown">
                    <a href="#">
                        <i class="fa-solid fa-users"></i>
                        Conference
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <!-- Dropdown content goes here -->
                        <a href="{{ route('welcome') }}">Welcome Message</a>
                        <a href="{{ route('agenda') }}">Agenda</a>
                        <a href="#">Programme</a>
                        <!-- <a href="{{ route('participants') }}">Participants</a> -->
                        <a href="{{ route('the-gallery') }}">The Gallery</a>
                    </div>
                </li>

                <li>
                    <a href="{{ route('meeting-room') }}">
                        <i class="fa-solid fa-handshake"></i>
                        Side Meeting
                        <i class="fa-solid fa-chevron-down side" style="color: #ffff;"></i>

                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <i class="fa-solid fa-folder-open"></i>
                        Documents
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('disc-paper') }}">Discussion</a>
                        <a href="{{ route('info-paper') }}">Information</a>
                        <a href="{{ route('create.file') }}">Document Submission</a>
                    </div>
                </li>
            </ul>
        </nav>

    </section>


    <section class="section-divider">
        <header class="div-header">Welcome and Mabuhay Delegates!</header>
    </section>
    <section class="dg-message">

        <div class="message-card">
            <header class="message-title">Message from the Director General</header>
            <div class="message-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>
                Enim diam vulputate ut pharetra. Quam adipiscing vitae proin sagittis. Lectus urna duis convallis convallis tellus id. Luctus accumsan tortor posuere ac. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Ipsum consequat nisl vel pretium lectus quam id. Massa tempor nec feugiat nisl pretium. Faucibus in ornare quam viverra orci sagittis. Mollis nunc sed id semper risus in. Commodo viverra maecenas accumsan lacus vel facilisis volutpat. Imperdiet dui accumsan sit amet nulla. Sit amet cursus sit amet dictum. Posuere ac ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum.
            </div>
        </div>
        <div class="dg-content">
            <img src="{{ asset('img/welcome-msg/capt-tamayo-new.png') }}" alt="dg-tamayo" class="dg-img">
        </div>


    </section>
    <section class="container count-section fade-in-section">
        <main class="countdown-main">
            <div class="countdown-sect">
                <header class="countdown-header" id="headline"><span style="font-weight: 400;">Countdown before the</span> 59th DGCA Conference!</header>
                <div id="countdown" class="countdown">
                    <ul>
                        <li><span id="days"></span>days</li>
                        <li><span id="hours"></span>Hours</li>
                        <li><span id="minutes"></span>Minutes</li>
                        <li><span id="seconds"></span>Seconds</li>
                    </ul>
                </div>
            </div>
            </div>
    </section>

    <section class="notices-section">
        <header class="notice-header">Notice Board</header>
        <p class="notice-content">Stay tuned!</p>
    </section>

    <section>
        <div class="slider">
            <div class="slide_viewer">
                <div class="slide_group">
                    <div class="slide">
                    <img src="{{ asset('img/welcome-msg/capt-tamayo-new.png') }}" alt="dg-tamayo" class="dg-img">
                    </div>
                    <div class="slide">
                    </div>
                    <div class="slide">
                    </div>
                    <div class="slide">
                    </div>
                </div>
            </div>
        </div><!-- End // .slider -->

        <div class="slide_buttons">
        </div>

        <div class="directional_nav">
            <div class="previous_btn" title="Previous">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                    <g>
                        <g>
                            <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z" />
                            <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="next_btn" title="Next">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                    <g>
                        <g>
                            <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z" />
                            <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z" />
                        </g>
                    </g>
                </svg>
            </div>
        </div><!-- End // .directional_nav -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </section>
    <!-- DIRECTOR GENERAL WELCOME MESSAGE -->
    <!-- <div class="container">
        <section>
            <marquee class="announcements" behavior="" direction="">
                This is a scrolling marquee displaying important announcements for testing purposes. Kindly coordinate with the developers for the posting of official announcements here. Thank you very much!
            </marquee>
        </section>

        <section class="main-title fade-in-section">
            <section class="welcome-message">
                <main class="message-main">
                    <header class="message-header"><span class="" style="color: #2658AB;">Mabuhay!</span> <span class="dgca-conf" style="font-style: italic;">59th DGCA Conference</span></header>
                    <div class="responsive-content">
                        <img src="{{ asset('img/capt-tamayo-2x2.png') }}" alt="CAAP Logo" class="responsive-tamayo-img">
                        <div class="responsive-name-position">
                            <span class="responsive-name">Captain Manuel Antonio L. Tamayo</span>
                            <span class="responsive-position">Director General of CAA Philippines</span>
                        </div>
                    </div>
                    <div class="message-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br><br>
                        Enim diam vulputate ut pharetra. Quam adipiscing vitae proin sagittis. Lectus urna duis convallis convallis tellus id. Luctus accumsan tortor posuere ac. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Ipsum consequat nisl vel pretium lectus quam id. Massa tempor nec feugiat nisl pretium. Faucibus in ornare quam viverra orci sagittis. Mollis nunc sed id semper risus in. Commodo viverra maecenas accumsan lacus vel facilisis volutpat. Imperdiet dui accumsan sit amet nulla. Sit amet cursus sit amet dictum. Posuere ac ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum.
                    </div>
                </main>
            </section>
            <div class="tamayo">
                <img src="{{ asset('img/capt-tamayo.png') }}" alt="CAAP Logo" class="tamayo-img">
                <img src="{{ asset('img/caap_logo.png') }}" alt="CAAP Logo" class="caap-img">
                <div class="dg-details">
                    <header class="name">Captain Manuel Antonio L.Tamayo</header>
                    <div class="position">Director General of CAA Philippines</div>
                </div>
            </div>
        </section>
    </div> -->

    <!-- <section class="welcome-banner fade-in-section">
        <header class="welcome">Welcome</header>
        <span class="to-the">to the</span>
        <div class="dg-span">
            <header class="conference">Conference of <span style="color: #16366A;">Director Generals</span></header>
            <header class="conference">of Civil Aviation</header>
        </div>
        <div class="asia-pacific">Asia and Pacific Region</div>
        <header class="philippines">Philippines 2024</header>
        @if(auth()->check())
        <a href="{{ route('login')}}" class="button-19">Let's Join Now!</a>
        @endif
    </section>
    <section class="airports fade-in-section">
        <div class="slider-frame">
            <div class="slide-images">
                <div class="img-container">
                    <img src="{{ asset('img/airport/bohol.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/davao.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/iloilo.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/bicol.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/gensan.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/kalibo.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/silay.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/zamboanga.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/laguindingan.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/laoag.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/puerto.jpg') }}" alt="CAAP Logo">
                </div>
            </div>
        </div>
        <header class="airport-hdr">Philippine <span class="airport-span">Airports</span> Nationwide</header>
    </section>
-->
</main>
<script src="{{ asset('js/welcome/pending-modal.js') }}"></script>
<script src="{{ asset('js/welcome/countdown.js') }}"></script>
<script src="{{ asset('js/welcome/carousel.js') }}"></script>
<script>
    const menuToggle = document.querySelector('.toggle');
    const showcase = document.querySelector('.showcase');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
    })
</script>


@endsection
