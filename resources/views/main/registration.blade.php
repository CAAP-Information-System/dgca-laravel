@extends('layouts.app')
@section('title','Registration')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/registration.css') }}">
@include('main.banner', ['bannerTitle' => 'Registration'])
<body>
    <div class="container">

        <section class="registration-content">
            <main class="registration-main">
                <img src="{{ asset('img/registration/phone.png') }}" alt="phone" class="phone">
                <div>
                    <header class="registration-header">Join and register now!</header>
                    <p class="sub-message">Come and be part of the upcoming 59th Conference of Directors General of Civil Aviation 2024 to be held in Cebu, Philippines from October 14 to 18, 2024.</p>
                    <br />
                    <a href="{{ url('register') }}" class="register-link">Register Here Now!</a>
                </div>
            </main>

        </section>
        <section class="registration-steps-sect">
            <header class="process-header">Registration Guide</header>
            <div class="reg-steps-container">
                <div class="card">
                    <header class="step-num">Step 1</header>
                    <img src="{{ asset('img/registration/register.png') }}" alt="Card Image" class="step-img">
                    <div class="card-content">
                        <p>Click on register link and follow the guidelines before creating your account.</p>
                        <!-- <p style="font-style: italic; font-weight:bold">For more registration guideline, see this link:</p>
                    <div class="btn-guide">
                        <a href="#" class="guide-link">Registration Guide</a>
                    </div> -->
                    </div>
                </div>


                <div class="card">
                    <header class="step-num">Step 2</header>
                    <img src="{{ asset('img/registration/verify.png') }}" alt="Card Image" class="step-img">
                    <div class="card-content">
                        <p>Administrators will verify your account as soon as you begin to open your account. You can still access some features in the website.</p>
                    </div>
                </div>

                <div class="card">
                    <header class="step-num">Step 3</header>
                    <img src="{{ asset('img/registration/notification.png') }}" alt="Card Image" class="step-img">
                    <div class="card-content">

                        <p>You will be notified through email once the admin approved your registration.</p>
                        <p>You can have access to some features and pages while your account is still pending.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="form-guides-sect">
            <header class="form-reqs-header">Form Requirements</header>
            <h1>Coming Soon</h1>
        </section>
</body>
@endsection
