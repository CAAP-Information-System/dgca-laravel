@extends('layouts.app')
<title>@yield('title', 'Dashboard-59th DGCA')</title>
@section('content')

<style>
    .hover-float:hover {
        transition: .4s ease;
        transform: translate(-5px, -10px);
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <section>
        <main class="">
            <div class="content-wrapper">
                <div class="p-3">
                    <header class="text-xl">Welcome to the DGCA Admin Panel</header>
                    <header class="pt-4 text-lg bold text-gray-800">Disclaimer:</header>
                    <p class="italic">This page will be in exclusive use for the Registration Sub-Committee as reference for the conference logistics and data gathering purposes.</p>
                </div>

                <section class="pt-2">
                    <header class="py-3 text-gray-600 text-3xl font-bold">Dashboard</header>
                    <div class="flex gap-4 justify-center items-center">
                        <div class="max-w-sm p-6 rounded-2xl  border border-gray-200 shadow transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-sky-600 duration-300 hover:text-white">
                            <i class="fa-solid fa-file-pdf text-4xl py-2"></i>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight ">Files Uploaded</h5>
                            <p class="mb-3 font-normal text-lg">{{ $filesCount }}</p>
                        </div>
                        <div class="max-w-sm p-6 rounded-2xl  border border-gray-200 shadow transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-sky-600 duration-300 hover:text-white">
                            <i class="fa-solid fa-users text-4xl py-2"></i>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight ">Meeting Reservations</h5>
                            <p class="mb-3 font-normal text-lg">{{ $reservationCount }}</p>
                        </div>
                        <div class="max-w-sm p-6 rounded-2xl  border border-gray-200 shadow transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-sky-600 duration-300 hover:text-white">
                            <i class="fa-solid fa-user-tie text-4xl py-2"></i>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight ">Delegates Registered</h5>
                            <p class="mb-3 font-normal text-lg">{{ $userCount }}</p>
                        </div>
                        <div class="max-w-sm p-6 rounded-2xl  border border-gray-200 shadow transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-sky-600 duration-300 hover:text-white">
                            <i class="fa-regular fa-clock text-4xl py-2"></i>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight ">Pending Accounts</h5>
                            <p class="mb-3 font-normal text-lg">{{ $pendingAccount }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </section>
    <!-- <section>
        <main class="py-4">
            <div class="content-wrapper">
                <section class="content">
                    @if($users->where('status', 'Pending')->count() > 0)
                    <div class="accounts-table">
                        <form action="" method="POST">
                            @csrf
                            <header class="page-header">Pending Accounts</header>
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th>Country</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach($users->where('status', 'Pending') as $user)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($user->profile_image)
                                                <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                @else
                                                <img src="{{ asset('img/blank-profile.png') }}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                @endif
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">{{ $user->name }}</p>
                                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $user->designation }}</p>
                                            <p class="text-muted mb-0">{{ $user->organization }}</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning rounded-pill d-inline">{{ $user->status }}</span>
                                        </td>
                                        <td>{{ $user->conference_role }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>
                                            <a href="{{ route('user-profile', ['id' => $user->id]) }}" class="btn btn-warning">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </form>
                    </div>
                    @else
                    <div class="message-content">
                        <img src="{{ asset('img/error/missing.svg') }}" alt="CAAP Logo" class="missing-svg">
                        <header class="message-content-header">
                            You're good to go!
                        </header>
                        <p class="message-header-subtitle">
                            Currently, there are no registered accounts pending approval or awaiting processing.
                        </p>
                    </div>
                    @endif
                </section>
            </div>
        </main>
    </section> -->
</body>

@endsection
