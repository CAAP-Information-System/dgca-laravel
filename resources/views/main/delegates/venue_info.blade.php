@extends('layouts.app')
<title>@yield('title', 'Venue-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/venue_info.css') }}">

<div class="container">
    <section class="venue-header animate-fade-up animate-once">
        <header class="hotel-header">
            Dusit Thani Mactan Cebu Resort
        </header>
        <p class="hotel-subheader">
            <i class="fa-solid fa-location-dot"></i>
            &nbsp;
            Punta Engaño Road, Mactan Island, Lapu-Lapu City 6015, Cebu, Philippines
        </p>
    </section>
    <section class="hotel-img-grp">
        <img src="{{ asset('img/hotel/dusit-entrance.jpg') }}" alt="dusit entrance" class="hotel-img">
        <img src="{{ asset('img/hotel/dusit-lobby.jpg') }}" alt="dusit lobby" class="hotel-img">
    </section>

    <section class="hotel-content">
        <header class="about-hotel">Overview</header>
        <div class="">
            <div class="hotel-desc">
                <p>
                    A vibrant and inviting retreat blends Filipino warmth and Thai hospitality for a heavenly haven by the ocean at our hotel Mactan Cebu, Philippines resort.
                </p>
                <p>
                    On northern tip of the Punta Engaño Peninsula, Dusit Thani Mactan Cebu is easily accessible from the Mactan-Cebu International Airport by land and sea transport. Surrounded by tropical islands, natural, cultural and historic treasures are all within reach.
                </p>
                <p>
                    Guests relax in stylish rooms and suites, with gracious service, innovative cuisine, luxurious amenities and stunning views all on hand.
                </p>
            </div>
            <ul class="hotel-list">
                <li>28-minute drive from Mactan Cebu International Airport</li>
                <li>Concierge services available to assist with transportation, tours, and local attractions. Transportation options include taxis and local shuttles</li>
                <li>Complimentary shuttle service from the resort to malls in Cebu City are available daily. First come, first serve basis.</li>
                <li>Complimentary high-speed Wi-Fi available throughout the hotel for guests.</li>
            </ul>
        </div>
        <div class="marquee-container">
            <div class="marquee flex">
                <!-- Insert your images here -->
                <img src="{{ asset('img/dusit-thani/dusit1.jpg') }}" alt="Image 1" class="marquee-img">
                <img src="{{ asset('img/dusit-thani/dusit2.jpg') }}" alt="Image 1" class="marquee-img">
                <img src="{{ asset('img/dusit-thani/dusit3.jpg') }}" alt="Image 1" class="marquee-img">
                <img src="{{ asset('img/dusit-thani/dusit4.jpg') }}" alt="Image 1" class="marquee-img">
                <img src="{{ asset('img/dusit-thani/dusit5.jpg') }}" alt="Image 1" class="marquee-img">
                <img src="{{ asset('img/dusit-thani/dusit6.jpg') }}" alt="Image 1" class="marquee-img">
                <img src="{{ asset('img/dusit-thani/dusit7.jpg') }}" alt="Image 1" class="marquee-img">
                <!-- Add more images as needed -->
            </div>

        </div>
        <div class="hotel-btn-grp">
            <a href="https://www.dusit.com/dusitthani-mactancebu/" target="_blank" class="website-btn">Visit Dusit Thani Official Website</a>
        </div>

        <div class="venue-contacts">
            <header class="venue-hdr">
                <img src="{{ asset('img/icon/venue.png') }}" alt="venue" class="venue-img">
                Venue Contact and Address
            </header>
            <div class="hotel-link">
                <div>
                    <a href="#" class="link-item">
                        <i class="fa-solid fa-phone"></i>
                        &nbsp;&nbsp;
                        +63 32 888 1388
                    </a>
                </div>
                <div>
                    <a href="#" class="link-item">
                        <i class="fa-solid fa-envelope"></i>
                        &nbsp;&nbsp;
                        dtmc@dusit.com
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/welcome/scroll.js') }}"></script>
    @endsection
