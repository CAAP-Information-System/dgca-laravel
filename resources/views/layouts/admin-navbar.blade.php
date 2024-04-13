@if(auth()->check() && auth()->user()->access_role == "admin")
<div class="admin-navigation" id="adminNavigation">
    <aside class="main-sidebar " id="navbarSupportedContent">


        <div class="sidebar">
            <header class="navbar-header">DGCA Admin</header>
            <nav class="mt-3">

                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                        <a href="{{ route('dashboard') }}" class="sidebar-item">

                            <i class="fa-solid fa-chart-column fa-lg"></i>
                            <div class="item-name">Dashboard</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('files') }}" class="sidebar-item">
                            <i class="fa-regular fa-file-lines fa-lg"></i>
                            <div class="item-name">Files Uploaded</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('meeting-reservations') }}" class="sidebar-item">
                            <i class="fa-regular fa-calendar-check fa-lg"></i>
                            <div class="item-name">Reservation</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('account_list') }}" class="sidebar-item">
                            <i class="fa-solid fa-users"></i>
                            <div class="item-name">Account Lists</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pending-accounts') }}" class="sidebar-item">
                            <i class="fa-solid fa-spinner fa-lg"></i>
                            <div class="item-name">Pending Accounts</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://docs.google.com/spreadsheets/d/1rMUIsiW-9JWs-J1ptwk5qBMMVE0sOQtBEJ5JLg4meug/edit?usp=sharing" class="sidebar-item">
                            <i class="fa-solid fa-file-waveform fa-lg"></i>
                            <div class="item-name">Google Forms</div>
                        </a>
                    </li>
                    <li class="nav-item " id="account-name">
                        @auth
                        <div class="logout-content">
                            <a class="button-31" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"></i> &nbsp;&nbsp; Sign Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</div>
@endif
