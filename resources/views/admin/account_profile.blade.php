@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/account_profile.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/header.css') }}">
<div class="container">
    <header class="page-header">User Profile</header>
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

    <div class="main-content">
        <section class="left-col">
            <div class="upper">
                <div>
                    <label class="profile-label">ID</label>
                    <p>{{ $user->id }}</p>
                </div>
                <div>
                    <label class="profile-label">First Name</label>
                    <p>{{$user->first_name}}</p>
                </div>
                <div>
                    <label class="profile-label">Last Name</label>
                    <p>{{$user->last_name}}</p>
                </div>
            </div>
            <label class="profile-label">Organization Name</label>
            <p>{{$user->organization}}</p>
            <label class="profile-label">Email Address</label>
            <p>{{$user->email}}</p>

        </section>
        <section class="right-col">
            <label class="profile-label">Country</label>
            <p>{{$user->country}}</p>
            <label class="profile-label">Designation/Position</label>
            <p>{{$user->designation}}</p>
            <label class="profile-label">Conference Role</label>
            <p>{{$user->conference_role}}</p>
            <label class="profile-label">Account Status</label>
            <p>{{$user->status}}</p>
            <label class="profile-label">Account Role</label>
            <p>{{$user->access_role}}</p>
        </section>
    </div>

</div>

@endsection
