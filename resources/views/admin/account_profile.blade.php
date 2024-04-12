@extends('layouts.app')
<title>@yield('title', 'Account Profile-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/account_profile_v2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/header.css') }}">
<div class="container">
    <header class="page-header">Delegate Information</header>
    <section class="pending-reminder">
        <div class="pending-container">
            @if($user->status == 'Pending')
            <form class="status-form" action="{{ route('user.approve', ['id' => $user->id]) }}" method="POST">
                @csrf
                <header class="status-reminder">Reminders:</header>
                <p class="status-message">Current account is still under <span style="font-weight:bold;" class="badge badge-danger">PENDING</span> status. Continue for approval?</p>
                <button class="approve-btn">Approve User</button>
            </form>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </section>

    <main class="profile-main">
        <section class="main-details-section">
            <div class="profile-img-container">
                @if($user->profile_image)
                <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}" alt="profile image" class="profile-img" />
                @else
                <img src="{{ asset('img/blank-profile.png') }}" alt="profile image" class="profile-img" />
                @endif
            </div>
            <div class="profile-left">
                <div class="multi-grp">
                    <div class="profile-detail-grp">
                        <div class="profile-detail">
                            <header class="header-label">Access Role</header>
                            @if($user->access_role != 'admin')
                            <p class="header-subtitle">Please request approval from the head administrator before updating the access role.</p>
                            @endif
                        </div>

                        @if($user->access_role != 'admin')
                        <form action="{{ route('update-access-role', ['id' => $user->id]) }}" method="POST" class="access-role-form">
                            @csrf
                            <select name="access_role" class="form-control">
                                <option value="user" {{ $user->access_role == 'user' ? 'selected' : '' }}>Guest</option>
                                <option value="admin" {{ $user->access_role == 'admin' ? 'selected' : '' }}>Administrator</option>
                                <option value="media" {{ $user->access_role == 'media' ? 'selected' : '' }}>Media Staff</option>
                                <option value="icao" {{ $user->access_role == 'icao' ? 'selected' : '' }}>ICAO Staff</option>
                            </select>
                            <button type="submit" class="btn btn-primary mt-2">Update Role</button>
                        </form>
                        @else
                        <div class="profile-detail">
                            <p class="header-subtitle"><b class="text-primary">Administrator</b></p>
                        </div>
                        @endif
                    </div>
                    <div class="profile-detail-grp">
                        <header class="header-label">Full Name</header>
                        <p class="profile-detail">{{ $user->first_name }} {{ $user->last_name }}</p>
                    </div>
                    <div class="profile-detail-grp">
                        <header class="header-label">Company/Agency</header>
                        <p class="profile-detail">{{ $user->organization }}</p>
                    </div>

                </div>
            </div>
            <div class="profile-right">
                <div class="profile-detail-grp">
                    <header class="header-label">Account Status</header>
                    @if($user->status === 'Approved')
                    <p class="profile-detail badge badge-success">{{ $user->status }}</p>
                    @else
                    <p class="profile-detail badge badge-danger">{{ $user->status }}</p>
                    @endif
                </div>
                <div class="profile-detail-grp">
                    <header class="header-label">Email Address</header>
                    <p class="profile-detail">{{ $user->email }}</p>
                </div>
                <div class="profile-detail-grp">
                    <header class="header-label">Country Representing</header>
                    <p class="profile-detail">{{ $user->country }}</p>
                </div>
            </div>

        </section>
        <header class="profile-header">Files Submitted</header>
        <hr>
        <section class="file-details-section">
            <a href="{{ asset('storage/approval_docs/' . $user->approval_doc) }}" target="_blank" class="card-link">
                <div class="file-card">
                    <img src="{{ asset('img/icon/pdf-icon.png') }}" alt="pdf-icon" class="file-icon-img">
                    <p class="card-name">Letter of Credentials</p>
                </div>
            </a>
            <a href="{{ asset('storage/passport_photos/' . $user->passport_photo) }}" target="_blank" class="card-link">
                <div class="file-card">
                    <img src="{{ asset('img/icon/jpg-icon.png') }}" alt="jpg-icon" class="file-icon-img">
                    <p class="card-name">Passport Image</p>
                </div>
            </a>

        </section>

        <header class="profile-header">Other Details</header>
        <hr>
        <section class="other-details-section">
            <div class="profile-left">
                <div class="profile-detail-grp">
                    <header class="header-label">Designation/Position</header>
                    <p class="profile-detail">{{ $user->designation }}</p>
                </div>
                <div class="profile-detail-grp">
                    <header class="header-label">Conference Role</header>
                    <p class="profile-detail">{{ $user->conference_role }}</p>
                </div>
                <div class="profile-detail-grp">
                    <header class="header-label">Passport Number</header>
                    <p class="profile-detail">{{ $user->passport_num }}</p>
                </div>
                <div class="profile-detail-grp">
                    <header class="header-label">Address</header>
                    <p class="profile-detail">{{ $user->address }}</p>
                </div>
            </div>
            <div class="profile-right">
                <div class="profile-detail-grp">
                    <header class="header-label">Gender</header>
                    <p class="profile-detail">{{ $user->gender }}</p>
                </div>
                <div class="row" style="width: 120%;">
                    <div class="col">
                        <header class="header-label">Telephone Number</header>
                        <p class="profile-detail">{{ $user->telephone }}</p>
                    </div>
                    <div class="col">
                        <header class="header-label">Mobile Number</header>
                        <p class="profile-detail">{{ $user->mobile }}</p>
                    </div>
                </div>
            </div>
        </section>
        <header class="profile-header">Preferences</header>
        <hr>
        <section class="preferences-details-section">
            <div class="profile-left">
                <div class="profile-detail-grp">
                    <header class="header-label">Hotel Accommodations</header>
                    <p class="profile-detail">{{ $user->hotel_reco }}</p>
                </div>
                <!-- <div class="profile-detail-grp">
                    <header class="header-label">Activity/s</header>
                    <p class="profile-detail">{{ $user->preferred_activity }}</p>
                </div> -->
                <div class="profile-detail-grp">
                    <header class="header-label">Dietary Restrictions</header>
                    <ul>
                        @foreach (json_decode($user->dietary_restrictions) as $restriction)
                        <li class="profile-detail">{{ $restriction }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="profile-detail-grp">
                    <header class="header-label">Dietary Special Request</header>
                    <p class="profile-detail">{{ $user->dietary_special_req }}</p>
                </div>
            </div>
            <!-- <div class="profile-right">
                <header class="barong">Size Reference</header>
                <div class="row">
                    <div class="col">
                        <header class="header-label">Neck Size</header>
                        <p class="profile-detail">{{ $user->neck }}</p>
                    </div>
                    <div class="col">
                        <header class="header-label">Shoulder Size</header>
                        <p class="profile-detail">{{ $user->shoulder }}</p>
                    </div>
                </div>
                <div class="profile-detail-grp">
                    <header class="header-label">Barong-Tagalog Special Requirements</header>
                    <p class="profile-detail">{{ $user->attire_special_req }}</p>
                </div>
                <div class="profile-detail-grp">
                    <header class="header-label">Address</header>
                    <p class="profile-detail">{{ $user->address }}</p>
                </div>
            </div> -->
        </section>
        <header class="profile-header">Spouse/Accompanying Person Details</header>
        <hr>
        @if($user->has_spouse != 'Yes')
        <h4 class="no_accomp_message"><i>Delegate has no Spouse or Accompanying Person</i></h4>
        @else
        <section class="spouse-details-section">
            <div class="profile-detail-grp">
                <header class="header-label">Spouse/Accompanying Person Name</header>
                <p class="profile-detail">{{ $user->accomp_name }}</p>
            </div>
            <div class="profile-detail-grp">
                <header class="header-label">Country Representing</header>
                <p class="profile-detail">{{ $user->accomp_country }}</p>
            </div>
            <div class="profile-detail-grp">
                <header class="header-label">Preferred Activity/s</header>
                <p class="profile-detail">{{ $user->accomp_preferred_activity }}</p>
            </div>
        </section>
        @endif
    </main>

</div>

@endsection
