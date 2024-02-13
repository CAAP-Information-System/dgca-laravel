@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/about-us/about-caap.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">About CAAP</header>
        </div>
        <div class="dgca-title">
            <!-- <header class="welcome-title">Welcome</header> -->
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <section class="caap-logo-grp">
        <img src="{{ asset('img/logo/caap_logo.png') }}" alt="caap-logo" class="caap-img">
        <div>
            <header class="caapname">Civil Aviation Authority of the Philippines</header>
        </div>
    </section>
    <section class="history-grp">
        <header class="about-section-header">
            <img src="{{ asset('img/icon/history.png') }}" alt="history" class="about-title-img">
            History
        </header>
        <div class="about-content">
            <p>
                The Civil Aviation Authority of the Philippines (CAAP) was created by virtue of <span>Republic Act No. 9497</span> which was approved on March 4, 2008. Under Chapter 1, Section 2 of said Republic Act, (Declaration of Policy), it is declared the policy of the State “to provide safe and efficient air transport and regulatory services in the Philippines by providing for the creation of a civil aviation authority with jurisdiction over the restructuring of the civil aviation system, the promotion, development and regulation of the technical, operational, safety, and aviation security functions under the civil aviation authority”.’
            </p>
            <p>
                The creation of CAAP in 2008 is the main component of an intensive civil aviation reform program launched by the government. According to <span>Chapter 1, Sec. 4 (Creation of the Authority)</span>, CAAP is “an independent regulatory body with quasi-judicial and quasi legislative powers and possessing corporate attributes attached to the Department of Transportation and Communication (DOTC) for the purpose of policy coordination”. The same provision also abolished the existing Air Transportation Office created under the provisions of Republic Act No. 776, as amended
            </p>
            <p>
                To ensure availability of technically qualified and currently qualified personnel, the Act empowers CAAP to update its standards, system and procedures prescribed for civil aviation inspectorate, licensing, and oversight functions to comply with ICAO and other international aviation standards. It is allowed flexibility to incorporate new practices and procedures as they become available without the procedures required for promulgation of legally binding regulations (part 1 General Policies, Procedures and Definitions, PCAR)
            </p>
            <p>
                Pursuant to Chapter II, Sec. 15, <span>CAAP shall enjoy fiscal autonomy.</span> All moneys earned by the Authority from the collection / levy of any and all such fees, charges, dues, assessments and fines it is empowered to collect / levy under this Act shall be used solely to fund the operations of the Authority.
            </p>
        </div>
    </section>
    <section class="goal-grp">
        <header class="about-section-header">
            <img src="{{ asset('img/icon/goal.png') }}" alt="goals" class="about-title-img">
            Goals and Objectives
        </header>
        <div class="about-content">
            <p>
                The Civil Aviation Authority of the Philippines (CAAP) is committed to provide <span>safe, efficient, secure, and environmentally-compliant, air transportation system</span> through the following endeavors:
            </p>
            <ol>
                <li>Fulfill its civil air regulatory oversight functions;</li>
                <li>Develop, operate, and maintain aerodromes and a globally-compliant air navigation system;</li>
                <li>Safeguard airports and facilities managed and operated by the Authority;</li>
                <li>Guarantee a dedicated professional and technically competent workforce;</li>
                <li>Pursue competency development of the Next Generation of Aviation Professionals (NGAP);</li>
                <li>Sustain operations through financial stability and viability;</li>
                <li>Collaborate with and harmonize best practices among all ICAO Member States in accordance with the Chicago Convention; and,</li>
                <li>Realize continual improvement efforts and customer satisfaction across all processes.</li>
            </ol>


        </div>
    </section>
</div>

@endsection
