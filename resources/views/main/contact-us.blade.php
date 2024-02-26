@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/contact-us.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">Contact Us</header>
        </div>
        <div class="dgca-title">
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <main class="contact-us">
        <header class="contact-header">Contact Information</header>
        <p class="contact-message">
            Require some assistance? Don't hesitate to drop us an email for help with any ongoing issues or if you have questions/inquiries about the DGCA Conference. Our administrators are dedicated to providing you with the utmost details possible!
        </p>
        <div class="contact-details">
            <p><a href="#">DGCA.PH@gmail.com</a></p>
            <p>09123456789</p>

        </div>
    </main>
</div>

@endsection
