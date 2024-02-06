@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/pending_list.css') }}">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
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
                        <img src="{{ asset('img/missing.svg') }}" alt="CAAP Logo" class="missing-svg">
                        <header class="message-content-header">
                            No Pending Accounts Found.
                        </header>
                        <!-- <p class="message-header-subtitle">
                            Kindly coordinate with our conference secretariat for your concerns and inquiries. Thank you!
                        </p> -->
                    </div>
                    @endif
                </section>
            </div>
        </main>
    </div>
</body>

@endsection
