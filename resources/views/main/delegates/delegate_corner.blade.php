@extends('layouts.app')
<title>@yield('title', 'Conference Bulletin-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/bulletin.css') }}">
<div class="container">
    <header class="bulletin-header">Conference Bulletin</header>
    <main class="bulletin-content">
        <div class="bulletin-grp">
            <header class="bullet-hdr">1. Passport and Visa Requirements</header>
            <div class="bullet-details">
                <img src="{{ asset('img/conf-bulletin/passport-visa.png') }}" alt="passport-visa" class="bullet-img">
                <div class="bullet-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
            </div>
        </div>

        <div class="bulletin-grp">
            <header class="bullet-hdr">2. Baggage Identification</header>
            <div class="bullet-details">
                <img src="{{ asset('img/conf-bulletin/baggage.png') }}" alt="baggage" class="bullet-img">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">3. Conference Venue</header>
            <div class="bullet-details">
                <img src="{{ asset('img/conf-bulletin/venue.png') }}" alt="venue" class="bullet-img">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
    </main>
</div>

@endsection
