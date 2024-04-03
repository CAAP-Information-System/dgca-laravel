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
        <div class="welcome-banner">
            <main class="banner-content">
                <header class="welcome-header">
                    Welcome to the
                    <span class="plane-animation">
                        <img src="{{ asset('img/home/plane-sketch.png') }}" alt="plane" class="plane-sketch">
                    </span>

                    <br>
                    <span class="apac-2024"><span class="span">59th APAC DGCA PH</span> 2024</span>
                </header>

            </main>
            <div class="theme-container">
                <div class="typing-container">
                    <span class="text">We are</span>
                    <span id="theme__input" class="theme__input" style="height: 50px;"></span>
                </div>

                <p class="theme-message">
                    Fostering sustainable practices, cultivating resilience, and championing inclusivity to create a future that thrives for all individuals and communities, ensuring equitable opportunities and shared prosperity.
                </p>
            </div>

        </div>
        <!-- Conference Navigation Bar -->
        @include('layouts.conference-navbar')
    </section>
    <div class="abt-us-ctn">
        <a href="#about-cebu" class="about-us-btn">Learn More <i class="fa-solid fa-caret-right"></i></a>
    </div>
    <section class="main-countdown">
        <main>
            <div class="countdown-container">
                <div class="count-section">
                    <main class="countdown-main">
                        <div class="countdown-sect">
                            <!-- <header class="countdown-header" id="headline"><span style="font-weight: 400;">Countdown before the</span> 59th DGCA Conference!</header> -->
                            <p class="countdown-message">Countdown until the 59th DGCA Conference!</p>
                            <div id="countdown" class="countdown">
                                <ul>
                                    <li><span id="days"></span>Days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                            <!-- <hr width="100%" style="border: 1px solid #3b3b3b;"> -->

                        </div>
                </div>
            </div>

        </main>
    </section>


    <section class="about-cebu" id="about-cebu">
        <img src="{{ asset('img/home/city-smoke.png') }}" alt="city in smoke" class="city-smoke-bg">
        <header class="header__separator">What's Featured?</header>
        <header class="section_info_header">Warm greetings from the Philippine representatives</header>
        <div class="welcome-message-section">
            <div class="welcome-message-container">
                <div class="image-container">
                    <img src="{{ asset('img/welcome-msg/capt-tamayo-bg.png') }}" alt="Captain Tamayo" class="capt-tamayo-img">
                    <div class="caption">
                        <p class="name">Captain Manuel Antonio L. Tamayo</p>
                        <p class="position">Director General of Civil Aviation Authority of the Philippines</p>
                    </div>
                </div>
                <div class="dg-message">
                    <header class="message-header">
                        Message from <span>the Director General</span>
                    </header>
                    <p>
                        <i class="fa-solid fa-quote-left"></i>The Philippines is excited to welcome you to our scenic country and share our culture and renowned hospitality. We believe that hosting the DGCA is a great opportunity to showcase our commitment to aviation safety and security, as well as our pledge to a sustainable, resilient, and inclusive development of the air transport sector.
                    </p>
                    <p>
                        Our theme for this year's conference, Shaping the Future of Air Transportation: Sustainable, Resilient, and Inclusive, is timely and relevant in both global and regional context. The industry is adaptive to change and supports development while mitigating the impacts of climate change. As we move forward to a more sustainable, resilient and inclusive air transport, let us strengthen our collaboration and synergies by promoting and improving our policies and practices through a strong stakeholder engagement. It is an opportune time to engage the industry in creating a more viable circular economy, thereby promoting equal opportunities.
                    </p>
                    <div class="messenger">
                        <span class="name">Captain Manuel Antonio L. Tamayo</span>
                        <span class="position">Director General of Civil Aviation Authority of the Philippines</span>
                        <span>DGCA-APAC 59 Chairman</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg_container">
            <img src="{{ asset('img/svg/dotted_line.png') }}" alt="dotted line" class="dotted-line-img">
        </div>
        <section class="cebu_info_section">
            <header class="section_info_header">DISCOVER MORE ABOUT OUR UPCOMING CONFERENCE VENUE</header>
            <div class="cebu_info_container">

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

                <img src="{{ asset('img/home/cebu-pinned.png') }}" alt="pinned cebu" class="cebu_map">
            </div>
        </section>
    </section>

    <div class="svg_container">
        <img src="{{ asset('img/svg/dotted_line.png') }}" alt="dotted line" class="dotted-line-img">
    </div>

    <section class="teaser-section">
        <header class="section_info_header">Experience the excitement that awaits you in Cebu, Philippines</header>
        @include('home.teaser')
    </section>
    <div class="svg_container">
        <img src="{{ asset('img/svg/dotted_line.png') }}" alt="dotted line" class="dotted-line-img">
    </div>
    <section class="highlights-section">
        <header class="section_info_header">Indulge in the conference highlights and explore the exciting activities and features awaiting you</header>
        @include('home.highlights')
    </section>

    <div class="svg_container">
        <img src="{{ asset('img/svg/dotted_line.png') }}" alt="dotted line" class="dotted-line-img">
    </div>

    <section class="announcements_section">

        <header class="announcement-header">
            Announcements
            <img src="{{ asset('img/home/dotted-arrow.png') }}" alt="dotted arrow" class="announcement-arrow">
        </header>
        <div class="announcements_main">
            <header class="section_info_header" style="width: 70%;">Stay informed and up-to-date with the latest developments at our 59th DGCA Conference</header>
            @if(isset($newspost))
            <div class="notice-container">
                <main class="container">
                    @foreach($newspost as $post)
                    <a href="{{ route('article', ['id' => $post->id]) }}" class="notice-card">
                        <img src="{{ asset('storage/news_updates/' . $post->news_image) }}" alt="notice image" class="notice-img">
                        <div class="notice-content">
                            <div class="notice-title">{{ $post->news_title }}</div>
                            <div class="date">{{ $post->date_uploaded }}</div>
                            <p class="announcements_read_more">Read More</p>
                        </div>
                    </a>

                    @endforeach
                </main>
            </div>
        </div>
        @else
        <header class="coming-soon">Coming Soon!</header>
        @endif

    </section>



</main>
<footer class="sponsor__footer">
    @if(!empty($sponsorsJSON))
    @php
    $sponsors = json_decode($sponsorsJSON, true);
    @endphp

    @if(isset($sponsors['sponsors']) && !empty($sponsors['sponsors']))
    <div class="sponsors-container">
        <header class="sponsors__header">Our <span style="color: #50a9fb;">Sponsors</span></header>
        <div class="sponsors-list">
            @foreach($sponsors['sponsors'] as $sponsor)
            <div class="sponsor-item">
                <img src="{{ asset($sponsor['image']) }}" alt="{{ $sponsor['name'] }}" class="sponsor-image">
                <p class="sponsor-name">{{ $sponsor['name'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    @endif


</footer>

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
