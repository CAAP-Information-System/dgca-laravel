@extends('layouts.app')
<title>@yield('title', 'Sponsors-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/sponsors/our_sponsors.css') }}">
@include('main.banner', ['bannerTitle' => 'Our Sponsors'])
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
