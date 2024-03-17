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
                                The Philippines is excited to welcome you to our scenic country and share our culture and renowned hospitality. We believe that hosting the DGCA is a great opportunity to showcase our commitment to aviation safety and security, as well as our pledge to a sustainable, resilient, and inclusive development of the air transport sector.
                            </p>
                            <p>
                                Our theme for this year's conference, <b class="text-primary"><i>Shaping the Future of Air Transportation: Sustainable, Resilient, and Inclusive</i></b>, is timely and relevant in both global and regional context. The industry is adaptive to change and supports development while mitigating the impacts of climate change. As we move forward to a more sustainable, resilient and inclusive air transport, let us strengthen our collaboration and synergies by promoting and improving our policies and practices through a strong stakeholder engagement. It is an opportune time to engage the industry in creating a more viable circular economy, thereby promoting equal opportunities.
                            </p>
                            <p>
                                With our team is pleased to assist you during your stay in the Philippines and we hope you enjoy, and find the conference meaningful.
                             </p>

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
