@extends('layouts.app')
<title>@yield('title', 'Oops, Sorry!')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/bug_fix.css') }}">

<div class="">
    <main class="error-main">
        <img src="{{ asset('img/error/fixing.svg') }}" alt="bug fixing" class="error-img">
        <div class="error-content">
            <header class="error-header">Sorry for the inconvenience</header>
            <p class="error-message">This page is under development maintenance. You can still visit other pages!</p>

            <div class="go-home">
                <a href="{{ route('welcome') }}" class="go-home-btn">Go Home</a>
            </div>
        </div>
    </main>
</div>

@endsection
