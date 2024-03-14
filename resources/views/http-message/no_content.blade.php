
<link rel="stylesheet" type="text/css" href="{{ url('css/error/bug_fix.css') }}">

<div class="">
    <main class="error-main">
        <img src="{{ asset('img/error/feed.svg') }}" alt="news feed" class="error-img">
        <div class="error-content">
            <header class="error-header">Oh hey! You're up early</header>
            <p class="error-message">We'll post news and updates very soon so stay stuned!</p>

            <div class="go-home">
                <a href="{{ route('welcome') }}" class="go-home-btn">Go Back</a>
            </div>
        </div>
    </main>
</div>
