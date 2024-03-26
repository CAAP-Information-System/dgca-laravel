@extends('layouts.app')
@section('title', '59th DGCA Conference')
@section('content')
<!-- <link rel="stylesheet" type="text/css" href="{{ url('css/main/welcome.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('css/main/welcomev3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/announcements.css') }}">

<main class="content-main">
    @if (auth()->check() && auth()->user()->status === 'Pending')
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Welcome, <span style="font-weight: bold;">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</span></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="congratulations">We are pleased to inform you that your registration for the 59th DGCA Online Conference has been successfully opened.</p>
                    <div style="margin-top: 35px;"></div>
                    <span class="note">Reminders:</span>

                    <p>Please note that your current account is under <span style="color: #FD6F6F; font-weight:bold;">PENDING</span> approval by the conference administrators.</p>
                    <p>For any inquiries or concerns regarding your registration status, we kindly ask you to contact the DGCA Secretariat:</p>
                    <a class="email-link" href="#">dgca59_secretariat@caap.gov.ph</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" id="closeButton">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <section class="welcome">
        <!-- <h2 class="text-danger"><b>DEMO VERSION (BETA)</b></h2> -->
        <div class="welcome-banner">
            <main class="banner-content">
                <header class="welcome-header">
                    Welcome to the
                    <span> <img src="{{ asset('img/home/plane-sketch.png') }}" alt="plane" class="plane-sketch"></span>
                    <br>
                    <span class="apac-2024"><span class="span">59th APAC DGCA PH</span> 2024</span>
                </header>
                <div class="theme-content">
                    <span class="input theme"></span>
                    <p class="theme-message">
                        Fostering sustainable practices, cultivating resilience, and championing inclusivity to create a future that thrives for all individuals and communities, ensuring equitable opportunities and shared prosperity.
                    </p>
                </div>
            </main>
            @include('layouts.conference-navbar')
        </div>
        <!-- <div class="carousel-container">
            <input type="radio" name="carousel-radio" id="radio1" class="carousel-radio" checked>
            <label for="radio1" class="carousel-radio-label"></label>

            <input type="radio" name="carousel-radio" id="radio2" class="carousel-radio">
            <label for="radio2" class="carousel-radio-label"></label>


            <div class="carousel-inner">
                <div class="carousel-item active">

                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/banner/message-banner.png') }}" alt="Welcome Banner" class="banner-img">
                </div>
            </div>
        </div> -->
        <!-- Conference Navigation Bar -->


        <section class="main-countdown">
            <main>
                <div class="abt-us-ctn">
                    <a href="#about-cebu" class="about-us-btn">Learn More</a>
                </div>
                <!-- <img src="{{ asset('img/home/dotted-arrow.png') }}" alt="pane" class="arrow-dotted"> -->
                <div class="count-section fade-in-section">
                    <main class="countdown-main">
                        <div class="countdown-sect">
                            <!-- <header class="countdown-header" id="headline"><span style="font-weight: 400;">Countdown before the</span> 59th DGCA Conference!</header> -->
                            <div id="countdown" class="countdown">
                                <ul>
                                    <li><span id="days"></span>Days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                            <!-- <hr width="100%" style="border: 1px solid #3b3b3b;"> -->
                            <p class="countdown-message">Countdown until the 59th DGCA Conference!</p>
                        </div>
                </div>
            </main>
        </section>
    </section>
    <section class="about-cebu" id="about-cebu">
        <img src="{{ asset('img/home/city-smoke.png') }}" alt="city in smoke" class="city-smoke-bg">
        <div class="cebu-info">
            <div class="cebu-details">
                <div class="detail-headers">
                    <header class="detail-main-header">Cebu</header>
                    <header class="detail-subheader">Venue for DGCA 59</header>
                </div>
                <div class="detail-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Etiam sit amet nisl purus in mollis. Amet porttitor eget dolor morbi non arcu. Arcu non sodales neque sodales ut etiam sit amet nisl. Congue quisque egestas diam in. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Magna ac placerat vestibulum lectus mauris ultrices eros in.
                    </p>
                    <p>
                        Etiam sit amet nisl purus in mollis. Amet porttitor eget dolor morbi non arcu. Arcu non sodales neque sodales ut etiam sit amet nisl. Congue quisque egestas diam in. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Magna ac placerat vestibulum lectus mauris ultrices eros in.
                    </p>
                </div>
            </div>
            <img src="{{ asset('img/home/cebu-pinned.png') }}" alt="pinned cebu" class="cebu-pinned-img">
        </div>
    </section>

    <section class="teaser-section">
        @include('home.teaser')
    </section>

    <section class="highlights-section">
        @include('home.highlights')
    </section>

    <section class="announcements ">
        <header class="announcement-header">
            Announcements
            <img src="{{ asset('img/home/dotted-arrow.png') }}" alt="dotted arrow" class="announcement-arrow">
        </header>
        <hr style="width: 30%; border: 1px solid #001E50;">
        @if(isset($newspost))
        <div class="notice-container">
            <main class="container">
                @foreach($newspost as $post)
                <div class="notice-card">
                    <img src="{{ asset('storage/news_updates/' . $post->news_image) }}" alt="notice image" class="notice-img">
                    <div class="notice-content">
                        <a href="{{ route('article', ['id' => $post->id]) }}" class="notice-title">{{ $post->news_title }}</a>
                        <div class="date">{{ $post->date_uploaded }}</div>
                    </div>

                </div>
                @endforeach

            </main>
        </div>
        @else
        <header class="coming-soon">Coming Soon!</header>
        @endif

    </section>



</main>

<script src="{{ asset('js/welcome/pending-modal.js') }}"></script>
<script src="{{ asset('js/welcome/countdown.js') }}"></script>
<script src="{{ asset('js/welcome/carousel.js') }}"></script>
<script src="{{ asset('js/welcome/scroll.js') }}"></script>
<script src="{{ asset('js/welcome/typing.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const aboutUsBtn = document.querySelector('.about-us-btn');
        aboutUsBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior

            const targetSection = document.getElementById('about-cebu');
            targetSection.scrollIntoView({
                behavior: 'smooth'
            }); // Smooth scroll to the target section
        });
    });
</script>
<script>
    const menuToggle = document.querySelector('.toggle');
    const showcase = document.querySelector('.showcase');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
    })

    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>

@endsection
