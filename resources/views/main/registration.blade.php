@extends('layouts.app')
@section('title','Registration')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/registration.css') }}">

<body>
    <section class="head-banner">
        <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
        <main class="banner-content">
            <div class="banner-text">
                <header class="banner-title">Registration</header>
            </div>
            <div class="dgca-title">
                <!-- <header class="welcome-title">Welcome</header> -->
                <header class="title">59th Conference of Director Generals</header>
                <header class="title-sub">Philippines 2024</header>
            </div>
        </main>
    </section>
    <div class="container">
        <section class="registration-content">
            <main class="registration-main">
                <img src="{{ asset('img/registration/phone.png') }}" alt="phone" class="phone">
                <div>
                    <header class="registration-header">Join and register now!</header>
                    <p class="sub-message">Come and be part of the upcoming at the 59th Conference of Director Generals of Civil Aviation 2024 to be held in Cebu, Philippines from October -- to --, 2024.</p>
                    <br />
                    <a href="{{ route('register') }}" class="register-link">Register Here</a>
                </div>
            </main>

        </section>
        <section class="reg-steps hidden">
            <div class="card">
                <header class="step-num">Step 1</header>
                <img src="{{ asset('img/registration/register.png') }}" alt="Card Image" class="step-img">
                <div class="card-content">
                    <p>Click on register link and follow the guidelines before creating your account.</p>
                    <p style="font-style: italic; font-weight:bold">For more registration guideline, see this link:</p>
                    <div class="btn-guide">
                        <a href="#" class="guide-link">Registration Guide</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <header class="step-num">Step 2</header>
                <img src="{{ asset('img/registration/approve.png') }}" alt="Card Image" class="approve">
                <div class="card-content">

                    <p>Administrators will verify your account. You can still access some features in the website.</p>
                </div>
            </div>

            <div class="card">
                <header class="step-num">Step 3</header>
                <img src="{{ asset('img/registration/notif.png') }}" alt="Card Image" class="step-img">
                <div class="card-content">

                    <p>You will be notified through email once the admin approved your registration.</p>
                    <p>You can have access to some features and pages while your account is still pending.</p>
                </div>
            </div>
        </section>
</body>
<script src="{{ asset('js/welcome/scroll.js') }}"></script>
@endsection
