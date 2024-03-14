@extends('layouts.app')
<title>@yield('title', 'Account List-59th DGCA')</title>
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
                    <div class="export-btn-container">
                        <a href="{{ route('generate-registration') }}" target="_blank" class="open-reg">Open Registration List</a>
                        <a href="{{ route('generate-pendings') }}" target="_blank" class="open-pending">Pending Accounts List</a>
                    </div>
                    <div class="accounts-table">
                        <!-- Sorting Form -->
                        <form action="{{ route('account_list') }}" method="GET">
                            @csrf
                            <div class="sorting-options">
                                <label for="country">Sort by Country:</label>
                                <select name="country" id="country">
                                    <option value="">-- Select Country --</option>
                                    <!-- Add options dynamically based on available countries -->
                                    @foreach($countries  as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Sort</button>
                            </div>
                        </form>
                        <!-- End Sorting Form -->

                        <!-- Account List Table -->
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <!-- Table Header -->
                            <thead class="bg-light">
                                <tr>
                                    <!-- Header Columns -->
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Designation</th>
                                    <th>Country</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <!-- Table Body -->
                            <tbody>
                                <!-- Iterate through users -->
                                @foreach($users as $user)
                                <tr>
                                    <!-- User Details -->
                                    <td>
                                        <!-- User Profile Image -->
                                        <div class="d-flex align-items-center">
                                            @if($user->profile_image)
                                            <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            @else
                                            <img src="{{ asset('img/blank-profile.png') }}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            @endif
                                            <!-- User Name and Email -->
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">{{ $user->name }}</p>
                                                <p class="text-muted mb-0">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <!-- User Designation and Organization -->
                                        <p class="fw-normal mb-1">{{ $user->designation }}</p>
                                        <p class="text-muted mb-0">{{ $user->organization }}</p>
                                    </td>
                                    <td class="mt-2">
                                        <!-- User Status Badge -->
                                        @if($user->status === 'Approved')
                                        <span class="badge badge-success rounded-pill d-inline">{{ $user->status }}</span>
                                        @else
                                        <span class="badge badge-warning rounded-pill d-inline">{{ $user->status }}</span>
                                        @endif
                                    </td>
                                    <!-- Additional User Details -->
                                    <td>{{ $user->conference_role }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>{{ $user->access_role }}</td>
                                    <!-- Action Buttons -->
                                    <td colspan="2">
                                        <!-- View User Profile Button -->
                                        <a href="{{ route('user-profile', ['id' => $user->id]) }}" class="btn btn-warning">View</a>
                                        <!-- Delete User Form -->
                                        <form action="{{ route('delete-account', ['id' => $user->id]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this account?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        {{ $users->links() }}
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

@endsection
