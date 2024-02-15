@extends('layouts.app')
@section('title', '59th DGCA Conference')
@section('content')
<!-- <link rel="stylesheet" type="text/css" href="{{ url('css/main/welcome.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ url('css/main/welcomev2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/notice_board.css') }}">
<main class="content-main">
    @if (auth()->check() && auth()->user()->status === 'Pending')
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Welcome, <span style="font-weight: bold;">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</span></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="congratulations">We are pleased to inform you that your registration for the 59th DGCA Online Conference has been successfully received.</p>
                    <div style="margin-top: 35px;"></div>
                    <span class="note">Reminders:</span>

                    <p>Please note that your current account is under <span style="color: #FD6F6F; font-weight:bold;">PENDING</span> approval by the conference administrators.</p>
                    <p>For any inquiries or concerns regarding your registration status, we kindly ask you to contact the DGCA Secretariat:</p>
                    <a class="email-link" href="#">secretariat-email-here@example.com</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" id="closeButton">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <section class="welcome-banner">
        <video autoplay loop muted>
            <source src="{{ asset('mp4/edited-dgca52.mp4') }}" type="video/mp4">

        </video>
        <main class="banner">
            <!-- <header class="welcome-title">Welcome</header> -->
            <header class="title">59<span class="th">th</span> Conference of Director Generals</header>
            <!-- <p class="banner-theme">This is a theme message</p> -->
            <p class="title-sub">Philippines 2024</p>

            @if(!auth()->check())
            <div class="join-container">
                <a href="{{ route('login')}}" class="join-now">Join Now!</a>
            </div>
            @endif
        </main>
    </section>
    <section class="main-conf-nav">
        <div class="container">
            <nav class="conf-nav">
                <ul>
                    <li class="dropdown">
                        <a href="#">
                            <i class="fa-solid fa-users"></i>
                            Conference
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('welcome') }}">Welcome Message</a>
                            <a href="{{ route('agenda') }}">Agenda</a>
                            <a href="#">Programme</a>
                            <a href="{{ route('the-gallery') }}">The Gallery</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('meeting-room') }}">
                            <i class="fa-solid fa-handshake"></i>
                            Side Meeting
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <i class="fa-solid fa-user-tie"></i>
                            Delegate's Corner
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('bulletin') }}">Conference Bulletin</a>
                            <a href="https://dfa-oca.ph/visa/visa-general-info/" target="_blank">VISA Information</a>
                            <a href="#">Transport Schedule</a>
                            <a href="{{ route('venue') }}">Venue Information</a>
                            <a href="{{ route('medical-support') }}">Medical Support</a>
                            <a href="#">Hotel Recommendations</a>
                            <a href="#">Tips and Advices</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            <i class="fa-solid fa-folder-open"></i>
                            Documents
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('disc-paper') }}">Discussion Papers</a>
                            <a href="{{ route('info-paper') }}">Information Papers</a>
                            <a href="{{ route('view-submission') }}">Submission Guide</a>
                            <a href="{{ route('create.file') }}">Submit Document</a>
                        </div>
                    </li>
                    @if(auth()->check() && auth()->user()->access_role == "media")
                    <li class="dropdown">
                        <a href="#" class="text-danger">
                            <i class="fa-solid fa-hashtag"></i>
                            Media Committee
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('create-news') }}">Create News</a>
                            <a href="#">Upload Gallery</a>
                            <a href="{{ route('media-dashboard') }}">Check Dashboard</a>
                        </div>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>

    </section>

    <section class="container count-section fade-in-section">
        <main class="countdown-main">
            <div class="countdown-sect">
                <header class="countdown-header" id="headline"><span style="font-weight: 400;">Countdown before the</span> 59th DGCA Conference!</header>
                <div id="countdown" class="countdown">
                    <ul>
                        <li><span id="days"></span>days</li>
                        <li><span id="hours"></span>Hours</li>
                        <li><span id="minutes"></span>Minutes</li>
                        <li><span id="seconds"></span>Seconds</li>
                    </ul>
                </div>
            </div>
            </div>
    </section>

    <section class="section-divider">
        <header class="div-header">Welcome and Mabuhay Delegates!</header>
    </section>
    <section class="dg-message ">

        <div class="message-card hidden">
            <header class="message-title">Message from the Director General</header>
            <div class="message-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>
                Enim diam vulputate ut pharetra. Quam adipiscing vitae proin sagittis. Lectus urna duis convallis convallis tellus id. Luctus accumsan tortor posuere ac. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Ipsum consequat nisl vel pretium lectus quam id. Massa tempor nec feugiat nisl pretium. Faucibus in ornare quam viverra orci sagittis. Mollis nunc sed id semper risus in. Commodo viverra maecenas accumsan lacus vel facilisis volutpat. Imperdiet dui accumsan sit amet nulla. Sit amet cursus sit amet dictum. Posuere ac ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum.
            </div>
        </div>
        <!-- <div class="dg-content">
            <img src="{{ asset('img/welcome-msg/capt-tamayo-new.png') }}" alt="dg-tamayo" class="dg-img">
        </div> -->


    </section>

    @if(isset($newspost))
    <section class="notices-section hidden">
        <header class="notice-header">Notice Board</header>
        <div class="container">
            <main class="notice-container">

                @foreach($newspost as $post)
                <div class="notice-card">
                    <img src="{{ asset('storage/news_updates/' . $post->news_image) }}" alt="notice image" class="notice-img">
                    <div class="notice-content">
                        <a href="#" class="notice-title">{{ $post->news_title }}</a>
                        <div class="date">{{ $post->date_uploaded }}</div>
                        <!-- <p class="notice-description">
                            {!!$post->news_description!!}
                        </p> -->
                    </div>

                </div>
                @endforeach

            </main>

        </div>
    </section>
    @endif
</main>
<script src="{{ asset('js/welcome/pending-modal.js') }}"></script>
<script src="{{ asset('js/welcome/countdown.js') }}"></script>
<script src="{{ asset('js/welcome/carousel.js') }}"></script>
<script src="{{ asset('js/welcome/scroll.js') }}"></script>

<script>
    const menuToggle = document.querySelector('.toggle');
    const showcase = document.querySelector('.showcase');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
    })

    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>


@endsection
