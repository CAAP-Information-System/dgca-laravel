@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/hotels.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">Hotel Recommendations</header>
        </div>
        <div class="dgca-title">
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <div class="reco-header">
        <header class="reco-title">Hotels/Resorts near Dusit Thani</header>
        <p class="reco-details">Here are the selected hotels with the highest number of reviews and ratings, chosen for their convenience, relaxation, and breathtaking views, specifically tailored for the delegates of the 59th DGCA Conference. Contact details and other information for each selected hotel have been provided. Enjoy your stay!</p>
    </div>
    <main class="hotel-reco">
        <div class="reco-list">
            @foreach(json_decode($hotelsJson)->hotels as $hotel)
            <div class="hotel">
                <img src="{{ asset($hotel->image) }}" alt="{{ $hotel->name }}" class="hotel-image"> <!-- Use asset() helper to generate full URL -->
                <div class="hotel-details">
                    <header class="hotel-name">{{ $hotel->name }}</header>
                    <p class="hotel-address">{{ $hotel->address }}</p>
                    <header class="div-header">Contact Information</header>
                    <div class="div-details">
                        <p class="hotel-item">Email: {{ $hotel->email }}</p>
                        <p class="hotel-item">Mobile: {{ $hotel->mobile }}</p>
                        <p class="hotel-item">Website: <a href="{{ $hotel->link }}">{{ $hotel->link }}</a></p>
                    </div>
                    <header class="div-header">Distance Computation</header>
                    <div class="div-details">
                        <p class="hotel-item">Distance from Airport: {{ $hotel->{'distance-airport'} }}</p>
                        <p class="hotel-item">Distance from Venue: {{ $hotel->{'distance-venue'} }}</p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </main>
</div>

@endsection
