@extends('layouts.app')
<title>@yield('title', 'Welcome Message-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/welcome_message.css') }}">
<div class="container">

    <body>
        <section class="main-title fade-in-section">
            <header class="message-header">Message from the <span class="caa-phil">CAA Philippines</span></header>
            <section class="welcome-message">
                <main class="message-main">

                    <div class="message-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br><br>
                        Enim diam vulputate ut pharetra. Quam adipiscing vitae proin sagittis. Lectus urna duis convallis convallis tellus id. Luctus accumsan tortor posuere ac. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Ipsum consequat nisl vel pretium lectus quam id. Massa tempor nec feugiat nisl pretium. Faucibus in ornare quam viverra orci sagittis. Mollis nunc sed id semper risus in. Commodo viverra maecenas accumsan lacus vel facilisis volutpat. Imperdiet dui accumsan sit amet nulla. Sit amet cursus sit amet dictum. Posuere ac ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum.
                    </div>
                </main>
            </section>
            <div class="tamayo">
                <img src="{{ asset('img/capt-tamayo.png') }}" alt="CAAP Logo" class="tamayo-img">
                <img src="{{ asset('img/caap_logo.png') }}" alt="CAAP Logo" class="caap-img">
                <div class="dg-details">
                    <header class="name">Captain Manuel Antonio Tamayo</header>
                    <div class="position">Director General of CAA Philippines</div>
                </div>
            </div>
        </section>
    </body>
</div>

@endsection
