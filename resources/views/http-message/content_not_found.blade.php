@extends('layouts.app')
<title>@yield('title', 'Error 403')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/403.css') }}">

<div class="container">
    <main class="error-main">
        <img src="{{ asset('img/error/not_found.svg') }}" alt="news not found" class="error-img">
        <div class="error-content">
            <header class="error-header">Content Not Found</header>
            <p class="error-message">Sorry, looks like this content does not exist.</p>
            <div class="btn-grp">
                <a href="{{ route('welcome') }}" class="go-home-btn">Go Home</a>
            </div>
        </div>
    </main>
</div>

@endsection
