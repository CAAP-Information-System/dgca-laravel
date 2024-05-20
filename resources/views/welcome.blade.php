@extends('layouts.app')
@section('title', '59th DGCA Conference')
@section('content')
<!-- <link rel="stylesheet" type="text/css" href="{{ url('css/main/welcome.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('css/main/welcomev3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/announcements.css') }}">
<style>
    .front {
        z-index: 999999;
    }
</style>
<div class="fixed top-0 left-0 w-full h-2 bg-gray-300 front">
    <div class="h-full bg-blue-500" id="readingProgress" style="width: 0;"></div>
</div>

<main class="content-main">
    @if (auth()->check() && auth()->user()->status === 'Pending')
    <div class="modal " tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog animate-fade-up animate-once" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <div class="modal-title">Welcome, <span style="font-weight: bold;">{{auth()->user()->salutation}} {{auth()->user()->first_name}} {{auth()->user()->last_name}}</span></div>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <div class="modal-body">
                    <p class="congratulations">We are pleased to inform you that your registration for the 59th DGCA Online Conference has been successfully opened.</p>
                    <div style="margin-top: 35px;"></div>
                    <span class="note">Additional Reminders:</span>

                    <p>Please note that your current account is under <span class="bg-red-100 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">PENDING</span> approval by the conference administrators.</p>
                    <p>For any inquiries or concerns regarding your registration status, we kindly ask you to contact our DGCA Secretariat:</p>
                    <br>
                    <div class="block">
                        <p>Email Address:</p>
                        <a class="email-link" href="#">dgca59_secretariat@caap.gov.ph</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-dismiss="modal" id="closeButton">Close <i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <section class="welcome">
        <div class="welcome-banner animate-fade-up animate-once animate-ease-in">
            <main class="banner-content">
                <header class="text-center text-6xl md:text-8xl">

                    Welcome to the
                    <!-- <span class="plane-animation">
                        <img src="{{ asset('img/home/plane-sketch.png') }}" alt="plane" class="plane-sketch">
                    </span> -->

                    <br>
                    <span class="apac-2024"><span class="span">59th APAC DGCA</span> Conference</span>
                </header>
            </main>
            <div class="theme-container">
                <div class="typing-container">
                    <header class="text-center text-4xl">Shaping the future of air transport:</header>
                    <span class="symbol">//</span>
                    <span id="theme__input" class="theme__input" style="height: 50px;"></span>
                    <span class="symbol">//</span>
                </div>

                <p class="theme-message">
                    Fostering sustainable practices, cultivating resilience, and championing inclusivity to create a future that thrives for all individuals and communities, ensuring equitable opportunities and shared prosperity.
                </p>
            </div>

        </div>
        <!-- Conference Navigation Bar -->

        @include('layouts.conference-navbar')
    </section>
    <div class="mt-10 flex justify-center mb-24">
        <a href="#about-cebu" class="about-us-btn scroll-smooth">Learn More <i class="fa-solid fa-caret-right"></i></a>
    </div>
    <section class="main-countdown animate-fade-up">
        <main>
            <div class="w-full md:w-auto -mt-72 md:mt-96" style="margin-right: 30vw;">
                <div class="">
                    <main class="bg-white rounded-lg p-6 md:p-10 shadow-md">
                        <div class="w-min mx-auto flex flex-col items-center">
                            <!-- <header class="countdown-header" id="headline"><span style="font-weight: 400;">Countdown before the</span> 59th DGCA Conference!</header> -->
                            <p class="md:text-4xl text-center p-2">Countdown until the 59th DGCA Conference!</p>
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
                    </main>
                    <!-- <img class="hidden md:block" src="{{ asset('img/home/countdown-cover.jpg') }}" alt="countdown banner"> -->
                </div>
            </div>

        </main>
    </section>


    <section class="" id="about-cebu">
        <img src="{{ asset('img/home/city-smoke.png') }}" alt="city in smoke" class="-mt-72 md:mt-0">
        <div id="featured" class="-mt-32 md:-mt-96">
            <header class="header__separator">What's Featured?</header>
            <header class="section_info_header">Warm greetings from the Philippine representatives</header>
            <div class="welcome-message-section">
                <div class="welcome-message-container">
                    <div class="image-container">
                        <img src="{{ asset('img/welcome-msg/capt-tamayo-bg.png') }}" alt="Captain Tamayo" class="capt-tamayo-img">
                        <div class="caption">
                            <p class="name">Capt. Manuel Antonio L. Tamayo</p>
                            <br>
                            <p class="position">Director General of Civil Aviation Authority of the Philippines</p>
                        </div>
                    </div>
                    <div class="dg-message">
                        <header class="message-header">
                            Message from <span>the Director General</span>
                        </header>
                        <p>
                            <i class="fa-solid fa-quote-left"></i>The Civil Aviation Authority of the Philippines is excited to welcome you to our scenic country as we proudly host the 59th Conference of the Directors General of Civil Aviation of the Asia and Pacific Regions at the vibrant island of Cebu on October 14-18, 2024.
                        </p>
                        <br>
                        <p>
                            We believe that hosting the DGCA is a great opportunity to showcase our commitment to aviation safety and security, as well as our pledge to a sustainable future in aviation.
                        </p>
                        <br>
                        <p>
                            Our theme for this year’s conference, <b class="text-primary">Shaping the Future of Air Transportation: Sustainable, Resilient, and Inclusive</b>, is timely and relevant on both global and regional scales. The industry is adaptive to change and supports development while mitigating the impacts of climate change.
                        </p>
                        <br>
                        <p>
                            Let us strengthen our collaboration and synergies by promoting and improving our policies and practices through strong stakeholder engagement.
                        </p>
                        <br>
                        <p>
                            Our team is pleased to assist you during your stay in the Philippines and we hope you enjoy, and find the conference meaningful.
                        </p>
                        <div class="messenger">
                            <span class="name">Captain Manuel Antonio L. Tamayo</span>
                            <span class="position">Director General of Civil Aviation Authority of the Philippines</span>
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
                                Cebu is the largest island in the Visayas region, and is particularly rich in Spanish colonial history. The original capital of the Philippines until the 17th century, ‘the Queen of the South’ contains 6 major cities – Cebu, Danao, Lapu-Lapu, Mandaue, Toledo and Talisay.
                            </p>
                            <br>
                            <p>
                                Cebu is a long and narrow island that stretches 196 km from north to south, and 32 km from east to west at its widest point. Located on the eastern central area of the island, Cebu City is its main urban centre. The 2nd largest city in the Philippines is a lively commercial and industrial hub, with modern features like giant shopping complexes as well as a myriad of leisure and entertainment options to keep you busy both day and night.
                            </p>
                            <br>
                            <p>
                                To this day, Cebu Island still remains a prominent and popular part of the archipelago, boasting the most ethnically diverse population. Its inhabitants are an interesting bunch, made up of Malay, Chinese, Filipino and an ever-growing number of westerners. It’s now considered to be the most dynamic island in the Philippines, attracting native and international tourists in droves.
                            </p>
                            <br>
                            <p>
                                The rest of Cebu Island is not as developed. It has rolling hills and rugged mountain ranges traversing the northern and southern lengths of the island, with the highest mountain standing over 1,000 metres tall. The coastal areas have beaches, fishing villages, mangrove forests and rich fishing grounds. The 2 destinations on Cebu Island that’ll capture the interest of adventurous travellers are Moalboal on the east coast and Oslob on the west coast. Located a few hours’ drive south of Metro Cebu, they offer a rustic type of vacation in pristine natural surroundings.
                            </p>

                        </div>
                    </div>

                    <img src="{{ asset('img/cebu_mapped.svg') }}" alt="pinned cebu" class="cebu_map hidden md:block">
                </div>
            </section>
        </div>
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

        <header class="flex justify-center text-3xl md:text-5xl font-bold items-center gap-4">
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
                        <img src="{{ asset('storage/news/articles/' . $post->news_image) }}" alt="notice image" class="notice-img">
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
<header class="section_info_header">Our Sponsors</header>
<footer>
    @include('home.sponsors')
</footer>
<!-- <footer class="sponsor__footer">
    @if(!empty($sponsorsJSON))
    @php
    $sponsors = json_decode($sponsorsJSON, true);
    @endphp

    @if(isset($sponsors['sponsors']) && !empty($sponsors['sponsors']))
    <div class="sponsors-container">
        <header class="sponsors__header">Our <span style="color: #50a9fb;">Sponsors</span></header>
        <div class="marquee">
            <div class="sponsors-list">
                @foreach($sponsors['sponsors'] as $sponsor)
                <div class="sponsor-item">
                    <img src="{{ asset($sponsor['image']) }}" alt="{{ $sponsor['name'] }}" class="sponsor-image">
                    <p class="sponsor-name">{{ $sponsor['name'] }}</p>
                </div>
                @endforeach
                @foreach($sponsors['sponsors'] as $sponsor)
                <div class="sponsor-item">
                    <img src="{{ asset($sponsor['image']) }}" alt="{{ $sponsor['name'] }}" class="sponsor-image">
                    <p class="sponsor-name">{{ $sponsor['name'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif


    @endif


</footer> -->

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

            const targetSection = document.getElementById('featured');
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
<script>
    window.addEventListener("scroll", function() {
        var scrollY = window.pageYOffset || document.documentElement.scrollTop;
        var winHeight = window.innerHeight || document.documentElement.clientHeight;
        var docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
        var scrollPercent = (scrollY / (docHeight - winHeight)) * 100;
        document.querySelector("#readingProgress").style.width = scrollPercent + "%";
    });
</script>

@endsection
