@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/welcome.css') }}">
<div class="container">

</div>
<main class="content-main">
    <div class="container">

        <section>
            <marquee class="announcements" behavior="" direction="">
                This is a scrolling marquee displaying important announcements for testing purposes. Kindly coordinate with the developers for the posting of official announcements here. Thank you very much!
            </marquee>
        </section>

        <section class="main-title fade-in-section">
            <section class="welcome-message">
                <main class="message-main">
                    <header class="message-header"><span class="" style="color: #2658AB;">Mabuhay!</span> <span class="dgca-conf" style="font-style: italic;">59th DGCA Conference</span></header>
                    <div class="responsive-content">
                        <img src="{{ asset('img/capt-tamayo-2x2.png') }}" alt="CAAP Logo" class="responsive-tamayo-img">
                        <div class="responsive-name-position">
                            <span class="responsive-name">Captain Manuel Antonio L. Tamayo</span>
                            <span class="responsive-position">Director General of CAA Philippines</span>
                        </div>

                    </div>
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
                    <header class="name">Captain Manuel Antonio L.Tamayo</header>
                    <div class="position">Director General of CAA Philippines</div>
                </div>
            </div>
        </section>
    </div>
    <section class="grp-1 fade-in-section">
        <header class="welcome">Welcome</header>
        <span class="to-the">to the</span>
        <div class="dg-span">
            <header class="conference">Conference of <span style="color: #16366A;">Director Generals</span></header>
            <header class="conference">of Civil Aviation</header>
        </div>
        <div class="asia-pacific">Asia and Pacific Region</div>
        <header class="philippines">Philippines 2024</header>

        <a href="{{ route('login')}}" class="button-19">Let's Join Now!</a>
        <!-- <div class="plane">
        <img src="{{ asset('img/new-plane.png') }}" alt="CAAP Logo" class="plane-img">
    </div> -->
    </section>
    <section class="airports fade-in-section">
        <div class="slider-frame">
            <div class="slide-images">
                <div class="img-container">
                    <img src="{{ asset('img/airport/bohol.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/davao.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/iloilo.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/bicol.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/gensan.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/kalibo.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/silay.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/zamboanga.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/laguindingan.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/laoag.jpg') }}" alt="CAAP Logo">
                </div>
                <div class="img-container">
                    <img src="{{ asset('img/airport/puerto.jpg') }}" alt="CAAP Logo">
                </div>
            </div>
        </div>
        <header class="airport-hdr">Philippine <span class="airport-span">Airports</span> Nationwide</header>
    </section>
    <section class="count-section fade-in-section">
        <div class="container">
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


</main>
<div class="container">
    <footer class="dgca-footer">
        <main class="hosted-main">
            <header class="hosted-header">We open our runways to all!</header>
            <div class="hosts-grp">
                <div class="caap-logo-left">
                    <img src="{{ asset('img/caap_logo.png') }}" alt="CAAP Logo" class="caap-host-img">
                </div>

                <div class="host-content">
                    <header class="host-content-header">Hosted by :</header>
                    <div class="host-content-caap-name">
                        Civil Aviation Authority of the Philippines
                    </div>
                </div>
            </div>
        </main>
        <!-- <div class="city">
    <img src="{{ asset('img/city.png') }}" alt="CAAP Logo" class="city-img">
</div> -->
    </footer>
</div>
<script>
    $(document).ready(function() {
        // Function to check fade on scroll
        function checkFade() {
            $('.fade-in-section').each(function() {
                var sectionTop = $(this).offset().top;
                var windowHeight = $(window).height();

                if (sectionTop < windowHeight - 100) {
                    $(this).addClass('fade-in');
                }
            });
        }

        // Initial check when the page loads
        checkFade();

        // Check fade on scroll
        $(window).scroll(checkFade);
    });

    document.addEventListener('DOMContentLoaded', function() {
        const slideImages = document.querySelector('.slide-images');
        const imgContainerWidth = document.querySelector('.img-container').offsetWidth;

        function nextSlide() {
            const currentTranslate = getTranslateValue();
            const newTranslate = currentTranslate - imgContainerWidth;

            // Check if it's the last image
            if (newTranslate < -(imgContainerWidth * (slideImages.children.length - 1))) {
                slideImages.style.transition = 'none';
                slideImages.style.transform = 'translateX(0)';
                // Trigger reflow to reset the transition
                void slideImages.offsetWidth;
                slideImages.style.transition = 'transform 1s ease-in-out';
            } else {
                slideImages.style.transform = `translateX(${newTranslate}px)`;
            }
        }

        function getTranslateValue() {
            const transformValue = window.getComputedStyle(slideImages).getPropertyValue('transform');
            const matrix = new DOMMatrix(transformValue);
            return matrix.m41;
        }

        setInterval(nextSlide, 3000); // Change slide every 3 seconds
    });

    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        // Set the countdown end date to October 15, 2024
        const countDownDate = new Date('October 15, 2024 00:00:00').getTime();

        const x = setInterval(function() {
            const now = new Date().getTime();
            const distance = countDownDate - now;

            document.getElementById("days").innerText = Math.floor(distance / day);
            document.getElementById("hours").innerText = Math.floor((distance % day) / hour);
            document.getElementById("minutes").innerText = Math.floor((distance % hour) / minute);
            document.getElementById("seconds").innerText = Math.floor((distance % minute) / second);

            // do something later when date is reached
            if (distance < 0) {
                document.getElementById("headline").innerText = "Let the Event Commence!!";
                document.getElementById("countdown").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
            }
        }, 0);
    }());
</script>

@endsection
