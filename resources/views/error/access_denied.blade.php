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
                Your account is still pending approval. Please wait for confirmation before accessing this page. Thank you!
            </div>

        </div>
    </main>
</div>

@endsection
