@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/account_list.css') }}">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <main class="py-4">
            <div class="content-wrapper">
                <section class="content">
                    <header class="count-header">
                        <div class="count-card">
                            <p class="total-accounts">Total Accounts Registered:</p>
                            <p class="count-value">{{ $usercount }}</p>
                        </div>
                    </header>

                    <div class="accounts-table">
                        <form action="{{ route('update-access-role') }}" method="POST">
                            @csrf
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th>Country</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach($users as $user)
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
                                            @if($user->status === 'Approved')
                                            <span class="badge badge-success rounded-pill d-inline">{{ $user->status }}</span>
                                            @else
                                            <span class="badge badge-warning rounded-pill d-inline">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->conference_role }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>{{ $user->access_role }}</td>
                                        <td>
                                            <a href="{{ route('user-profile', ['id' => $user->id]) }}" class="btn btn-warning">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {{ $users->links() }}
                        </form>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

@endsection
