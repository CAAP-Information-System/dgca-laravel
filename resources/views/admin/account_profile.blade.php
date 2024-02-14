@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/account_profile.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/header.css') }}">
<div class="container">
    <header class="page-header">User Information</header>


    <main class="main-content">
        <div class="image-grp">
            @if($user->profile_image)
            <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}" alt="profile image" class="profile-img" />
            @else
            <img src="{{ asset('img/blank-profile.png') }}" alt="profile image" class="profile-img" />
            @endif
            <header class="organization">{{ $user->organization }}</header>
        </div>
        <div class="pending-reminder">
            @if($user->status == 'Pending')
            <form class="status-form" action="{{ route('user.approve', ['id' => $user->id]) }}" method="POST">
                @csrf
                <header class="status-reminder">Reminder :</header>
                <p class="status-message">Current account is still under <span style="font-weight:bold;" class="text-danger">PENDING</span> status. Continue for approval?</p>
                <button class="button-44">Approve User</button>
            </form>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <section class="access-section">
            <div class="multi-grp">
                <div class="sub">
                    <header class="header-label">Access Role</header>
                    <p class="text-muted mb-0 text-italic">Please request approval from the head administrator before updating the access role.</p>
                    <form style="padding: 15px;" action="{{ route('update-access-role', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        <select name="access_role" class="form-control">
                            <option value="user" {{ $user->access_role == 'user' ? 'selected' : '' }}>Guest</option>
                            <option value="admin" {{ $user->access_role == 'admin' ? 'selected' : '' }}>Website Admin</option>
                            <option value="media" {{ $user->access_role == 'media' ? 'selected' : '' }}>Media Admin</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-2">Update Role</button>
                    </form>
                </div>
                <div class="sub">
                    <header class="header-label">Account Status</header>
                    @if($user->status === 'Approved')
                    <span class="profile-details badge badge-success">{{ $user->status }}</span>
                    @else
                    <span class="profile-details badge badge-danger">{{ $user->status }}</span>
                    @endif
                </div>
            </div>

        </section>
        <section class="name-section">

            <div class="multi-grp">
                <div class="sub">
                    <header class="header-label">First Name</header>
                    <p class="profile-details">{{ $user->first_name }}</p>
                </div>
                <div class="sub">
                    <header class="header-label">Last Name</header>
                    <p class="profile-details">{{ $user->last_name }}</p>
                </div>
            </div>

        </section>
        <section class="email-section">
            <div class="grp">
                <header class="header-label">Email Address</header>
                <p class="profile-details">{{ $user->email }}</p>
            </div>
        </section>
        <section class="user-details-section">
            <div class="multi-grp">
                <div class="sub">
                    <header class="header-label">Position</header>
                    <p class="profile-details">{{ $user->designation }}</p>
                </div>
                <div class="sub">
                    <header class="header-label">Conference Role</header>
                    <p class="profile-details">{{ $user->conference_role }}</p>
                </div>
            </div>
            <div class="grp">
                <header class="header-label">Country</header>
                <p class="profile-details">{{ $user->country }}</p>
            </div>

        </section>

    </main>

</div>

@endsection
