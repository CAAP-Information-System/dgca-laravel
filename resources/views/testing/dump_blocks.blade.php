@extends('layouts.app')
<title>@yield('title', 'Dashboard-59th DGCA')</title>
@section('content')

<!--
TO DO:
1. Create graphs for meeting reservations
2. Create graph for pending and verified user requests
-->

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/dashboard.css') }}">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <section class="screen-dashboard">
            <main class="dashboard-main">
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <div id="" class="">
                        <div class="container-fluid">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <div class="content-header">
                                        <i class="fa-solid fa-chart-column"></i>&nbsp;&nbsp;Dashboard
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="content">
                        <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-lg-3 col-6">

                                    <div id="files" class="stat-card">
                                        <div class="inner">
                                            <div class="stat-values">
                                                <p class="stat-header">Total Files Uploaded</p>
                                                <p class="stat-value">{{ $filesCount }}</p>
                                            </div>
                                            <div class="icon-img">
                                                <i class='bx bxs-file'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div id="meetings" class="stat-card">
                                        <div class="inner">
                                            <div class="stat-values">
                                                <p class="stat-header">Meetings Reservered</p>
                                                <p class="stat-value">{{$reservationCount}}</p>
                                            </div>
                                        </div>
                                        <div class="icon-img">
                                            <i class='bx bxs-calendar-event'></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">

                                    <div id="delegates" class="stat-card">
                                        <div class="inner">
                                            <div class="stat-values">
                                                <p class="stat-header">Delegates Registered</p>
                                                <p class="stat-value">{{$userCount}}</p>
                                            </div>
                                        </div>
                                        <div class="icon-img">
                                            <i class='bx bxs-user-account'></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div id="pending" class="stat-card">
                                        <div class="inner">
                                            <div class="stat-values">
                                                <p class="stat-header">Pending Accounts</p>
                                                <p class="stat-value">{{$pendingAccount}}</p>
                                            </div>
                                        </div>
                                        <div class="icon-img">
                                            <i class='bx bxs-time-five'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </main>
        </section>
        <section class="mobile-dashboard">
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

    </div>


    </div>

</body>

@endsection
