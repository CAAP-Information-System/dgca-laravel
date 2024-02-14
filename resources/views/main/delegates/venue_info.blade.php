@extends('layouts.app')
<title>@yield('title', 'Venue-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/venue_info.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">Venue Information</header>
        </div>
        <div class="dgca-title">
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <section class="shangrila-img-grp">
        <img src="{{ asset('img/shangri-la/shangrila-full.jpg') }}" alt="shangrila bird eye" class="shangrila-img">
        <img src="{{ asset('img/shangri-la/shangrila-conf.jpg') }}" alt="shangrila bird eye" class="shangrila-img">
    </section>
    <section class="venue-header hidden">
        <header class="shangrila-header">
            Shangri-La Mactan, Cebu
        </header>
        <p class="shangrila-subheader">
            <i class="fa-solid fa-location-dot"></i>
            &nbsp;
            Punta Engano Road, Lapu-Lapu, Cebu 6015 Philippines
        </p>
    </section>
    <section class="shangrila-content">
        <div class="hidden">
            <p>
                Nestled amidst 13 hectares of lush greenery, landscaped gardens and with a 350-meter white-sand beach, Shangri-La Mactan, Cebu is a multi-faceted leisure destination providing a mix of luxury relaxation and wellness, entertainment, and exciting recreational activities including captivating child-friendly facilities. Guests can savour beach-side luxe within its spacious 530 guest rooms and suites, along with enticing wining and dining options.
            </p>
            <p>
                Shangri-La Mactan, Cebu, is located in Lapu-Lapu City, which is connected to the main island of Cebu by several bridges. Both Mactan and Cebu are home to many beautiful beaches and historic sites.The province of Cebu is famous for its natural beaches, sweet mangoes,
            </p>
            <ul class="shangrila-list">
                <li>530 guest rooms, 7 restaurants and landscaped gardens</li>
                <li>20-minute drive from Mactan Cebu International Airport</li>
                <li>5-minute walk to the Shangri-La beachfront sanctuary</li>
            </ul>
        </div>
        <div class="shangrila-btn-grp">
            <a href="https://www.shangri-la.com/en/cebu/mactanresort/" target="_blank" class="website-btn">Visit Shangri-La Mactan Official Website</a>
        </div>
        <div class="venue-contacts hidden">
            <header class="venue-hdr">
                <img src="{{ asset('img/icon/venue.png') }}" alt="venue" class="venue-img">
                Venue Contact and Address
            </header>
            <div class="shangrila-link">
                <div>
                    <a href="#" class="link-item">
                        <i class="fa-solid fa-phone"></i>
                        &nbsp;&nbsp;
                        (63 32) 231 0288
                    </a>
                </div>
                <div>
                    <a href="#" class="link-item">
                        <i class="fa-solid fa-envelope"></i>
                        &nbsp;&nbsp;
                        Mactan@shangri-la.com
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/welcome/scroll.js') }}"></script>
    @endsection
