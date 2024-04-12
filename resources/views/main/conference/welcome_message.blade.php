@extends('layouts.app')
<title>@yield('title', 'Welcome Message-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/welcome_message.css') }}">
<main>
    <section class="main-title">
        <div class="message-container">
            <div>
                <header class="message-header">Message from the Director General</header>
                <section class="welcome-message">
                    <main class="message-main">
                        <div class="message-content">

                            <p>
                                <i class="fa-solid fa-quote-left" style="font-size: 3rem;">&nbsp;</i>
                                The Civil Aviation Authority of the Philippines is excited to welcome you to our scenic country as we proudly host the 59th Conference of the Directors General of Civil Aviation of the Asia and Pacific Regions at the vibrant island of Cebu on October 14-18, 2024.
                            </p>
                            <p>
                                We believe that hosting the DGCA is a great opportunity to showcase our commitment to aviation safety and security, as well as our pledge to a sustainable future in aviation.
                            </p>
                            <p>
                                Our theme for this year’s conference, <b class="text-primary">Shaping the Future of Air Transportation: Sustainable, Resilient, and Inclusive</b>, is timely and relevant on both global and regional scales. The industry is adaptive to change and supports development while mitigating the impacts of climate change.
                            </p>
                            <p>
                                Let us strengthen our collaboration and synergies by promoting and improving our policies and practices through strong stakeholder engagement.
                            </p>
                            <p>Our team is pleased to assist you during your stay in the Philippines and we hope you enjoy, and find the conference meaningful.</p>
                            <p class="dg-name">
                                Captain Manuel Antonio L. Tamayo
                            <div class="dg-position">Director General of Civil Aviation Authority of the Philippines</div>
                            </p>
                        </div>
                    </main>
            </div>
        </div>
        <div class="dgca-image-container">
            <img src="{{ asset('img/welcome-msg/capt-tamayo-bg.png') }}" alt="Captain Tamayo" class="dgca-merged">
        </div>
    </section>

    </section>
</main>

@endsection
