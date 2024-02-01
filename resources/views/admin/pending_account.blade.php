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
                            <table class="table table-hover">
                                <thead class="">
                                    <tr>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Designation / Position</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users->where('status', 'Pending') as $user)
                                    <tr>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->designation}}</td>
                                        <td>{{$user->country}}</td>
                                        <td>{{$user->status}}</td>
                                        <td>
                                            <a href="{{ route('user-profile', ['id' => $user->id]) }}" class="btn btn-warning">View</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
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
