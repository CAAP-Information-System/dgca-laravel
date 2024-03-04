@extends('layouts.app')
<title>@yield('title', 'Access Denied')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/access_denied.css') }}">

<div class="container">
    <main class="error-main">
        <img src="{{ asset('img/error/access_denied.svg') }}" alt="restricted access" class="error-img">
        <div class="error-content">
            <header class="error-header">Access Denied</header>
            <br>
            <div class="error-message">
                <p>
                    It seems that your account is still pending approval. Please wait for confirmation before attempting to access the page again. Once your account is approved, you should be able to access the page without any issues.
                </p>
                <p style="margin-top: 7vh;">If you have any questions or need further assistance, feel free to contact our registration team at <a href="#" class="email-link">dgca59_registration@caap.gov.ph</a></p>
            </div>

        </div>
    </main>
</div>

@endsection
