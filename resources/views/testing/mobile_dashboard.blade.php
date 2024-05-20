<section class="mobile-dashboard">`
    <div class="card-container">
        <a href="{{ route('dashboard') }}" class="card">
            <div class="card-content">
                <div class="header-content">
                    <img src="{{ asset('img/icon/dashboard.png') }}" alt="dashboard icon" class="mobile-icons">
                    <header class="link-title">Dashboard</header>
                </div>
            </div>
        </a>
        <a href="{{ route('meeting-reservations') }}" class="card">
            <div class="card-content">
                <div class="header-content">
                    <img src="{{ asset('img/icon/schedule.png') }}" alt="dashboard icon" class="mobile-icons">
                    <header class="link-title">Meeting Reservations</header>
                </div>
            </div>
        </a>
        <a href="{{ route('files') }}" class="card">
            <div class="card-content">
                <div class="header-content">
                    <img src="{{ asset('img/icon/file.png') }}" alt="dashboard icon" class="mobile-icons">
                    <header class="link-title">File Uploads</header>
                </div>
            </div>
        </a>
        <a href="{{ route('account_list') }}" class="card">
            <div class="card-content">
                <div class="header-content">
                    <img src="{{ asset('img/icon/profile.png') }}" alt="dashboard icon" class="mobile-icons">
                    <header class="link-title">Account List</header>
                </div>
            </div>
        </a>

        <div class="">
            @auth
            <div class="logout-content">
                <a class="button-5" id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i> &nbsp;&nbsp; Sign Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

            @endauth
        </div>
    </div>
</section>
