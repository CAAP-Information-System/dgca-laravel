@extends('layouts.app')
<title>@yield('title', 'Error 403')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/403.css') }}">

<div class="container">
    <main class="error-main">
        <img src="{{ asset('img/error/restricted.svg') }}" alt="restricted access" class="error-img">
        <div class="error-content">
            <header class="error-header">Forbidden Access</header>
            <p class="error-message">Sorry, you're not allowed to get in.</p>
            <div class="btn-grp">
                <a href="{{ route('welcome') }}" class="go-home-btn">Go Home</a>
            </div>
        </div>
    </main>
</div>

@endsection
