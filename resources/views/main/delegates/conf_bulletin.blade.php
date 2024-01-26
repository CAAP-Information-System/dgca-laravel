@extends('layouts.app')
<title>@yield('title', 'Conference Bulletin-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/bulletin.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">Conference Bulletin</header>
        </div>
        <div class="dgca-title">
            <!-- <header class="welcome-title">Welcome</header> -->
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>

<div class="container">
<section class="bulletin-content">
    <div class="bulletin-grp">
        <header class="bullet-hdr">
            <img src="{{ asset('img/icon/visa.png') }}" alt="passport-visa" class="bullet-img">
            Passport and Visa Requirements
        </header>
        <div class="bullet-details">
            <div class="bullet-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
        </div>
    </div>

    <div class="bulletin-grp">
        <header class="bullet-hdr">
            <img src="{{ asset('img/icon/luggage.png') }}" alt="baggage" class="bullet-img">
            Baggage Identification
        </header>
        <div class="bullet-details">
            <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>
    </div>
    <div class="bulletin-grp">
        <header class="bullet-hdr">
            <img src="{{ asset('img/icon/venue.png') }}" alt="venue" class="bullet-img">
            Conference Venue
        </header>
        <div class="bullet-details">
            <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>
    </div>
</section>
</div>


@endsection
