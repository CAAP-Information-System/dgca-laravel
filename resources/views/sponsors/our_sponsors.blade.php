@extends('layouts.app')
<title>@yield('title', 'Sponsors-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/sponsors/our_sponsors.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">Our Sponsors</header>
        </div>
        <div class="dgca-title">
            <!-- <header class="welcome-title">Welcome</header> -->
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <section class="sponsors">
        <div class="card">
            <div class="img-container">
                <img src="{{ asset('img/sponsors/caap_logo.png') }}" alt="sponsor-logo" class="sponsor-img">
            </div>
            <header class="sponsor-name">Civil Aviation Authority of the Philippines</header>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="{{ asset('img/sponsors/dgca-logo.png') }}" alt="sponsor-logo" class="sponsor-img">
            </div>
            <header class="sponsor-name">Sponsor Brand Name</header>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="{{ asset('img/sponsors/sponsor-sample.png') }}" alt="sponsor-logo" class="sponsor-img">
            </div>
            <header class="sponsor-name">Sponsor Brand Name</header>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="{{ asset('img/sponsors/caap_logo.png') }}" alt="sponsor-logo" class="sponsor-img">
            </div>
            <header class="sponsor-name">Sponsor Brand Name</header>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="{{ asset('img/sponsors/caap_logo.png') }}" alt="sponsor-logo" class="sponsor-img">
            </div>
            <header class="sponsor-name">Sponsor Brand Name</header>
        </div>

    </section>
</div>

@endsection
