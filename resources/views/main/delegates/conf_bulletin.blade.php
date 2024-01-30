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
                <div class="bullet-desc">Cebu, Philippines.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/agenda.png') }}" alt="baggage" class="bullet-img">
                Agenda and Programme
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    The preliminary agenda and tentative program, along with any updates, will be posted on the <span class="highlight">DGCA59 Conference Website</span> as soon as they are finalized and ready for distribution.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/participants.png') }}" alt="baggage" class="bullet-img">
                Participant Registration
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/papers.png') }}" alt="baggage" class="bullet-img">
                Conference Paper
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    As Discussion Papers (DPs) and Information Papers (IPs) become accessible, they will be uploaded to the conference website. In line with our commitment to sustainability, physical copies of DPs/IPs will not be distributed unless requested. We encourage participants to retrieve conference materials directly from the website for environmental considerations.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/email.png') }}" alt="baggage" class="bullet-img">
                Website and Emails
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <li>Conference Website: <a href="#" class="bullet-email">place-dgca-website-here.com</a></li>
                    <li>Conference Secretariat: <a href="#" class="bullet-email">dgca-secretariat-email@email.com</a></li>
                    <li>Conference Registration Team: <a href="#" class="bullet-email">reg-team@email.com</a></li>
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/dress-code.png') }}" alt="baggage" class="bullet-img">
                Event Dress Coding
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/wifi.png') }}" alt="baggage" class="bullet-img">
                Wifi and Network
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Free Wi-Fi accessibility will be available throughout the conference venue. Access details will be distributed during the event. Additionally, internet facilities will be accessible for delegates on-site. Participants are advised to <span class="highlight">bring their own laptops to access conference materials</span>.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/secretariat.png') }}" alt="baggage" class="bullet-img">
                Conference Secretariat
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/side-meetings.png') }}" alt="baggage" class="bullet-img">
                Side Meeting Rooms
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/meals.png') }}" alt="baggage" class="bullet-img">
                Meals and Refreshments
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Refreshments during mid-morning and mid-afternoon breaks and a working lunch will be provided for all delegates during each day of the conference.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/social-event.png') }}" alt="baggage" class="bullet-img">
                Social Events
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/hotel.png') }}" alt="baggage" class="bullet-img">
                Hotel Reservation
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/transportation.png') }}" alt="baggage" class="bullet-img">
                Transportation
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/telephone-service.png') }}" alt="baggage" class="bullet-img">
                Telephone Service
            </header>
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/travel-service.png') }}" alt="baggage" class="bullet-img">
                Travel Service
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">If you need any assistance with arranging private pre- or post-conference tours and excursions tailored to your preferences, please feel free to inquire at the Concierge Desk of your hotel.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/other-info.png') }}" alt="baggage" class="bullet-img">
                Other Information
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">The conference administrators will gladly assist you with useful and relevant informations. We will provide you real-time updates.</div>
            </div>
        </div>
        <div class="backtotop-container">
            <a href="#" class="backtotop">Back to Top</a>
        </div>
    </section>

</div>


@endsection
