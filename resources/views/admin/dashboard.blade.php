@extends('layouts.app')

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

        <!-- Main Sidebar Container -->


        <main class="py-4">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div id="" class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
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



    </div>


    </div>

    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

</body>

@endsection
