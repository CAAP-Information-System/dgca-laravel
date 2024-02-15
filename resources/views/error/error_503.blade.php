@extends('layouts.app')
<title>@yield('title', 'Error 503')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/bug_fix.css') }}">

<div class="container">
    <main class="error-main">
        <img src="{{ asset('img/error/fixing.svg') }}" alt="bug fixing" class="error-img">
        <div class="error-content">
            <header class="error-header">Sorry for the inconvenience</header>
            <p class="error-message">This page is under development maintence. Grab a coffee while you're at it!</p>
        </div>
    </main>
</div>

@endsection
