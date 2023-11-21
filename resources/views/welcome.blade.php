@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/welcome.css') }}">
<div class="container">
    <nav class="home-navbar">
        <a href="#conference">Conference</a>
        <a href="#events">Events</a>
        <a href="#exhibits">Exhibits & Features</a>
        <a href="#exhibits">Delegate's Corner</a>
        <a href="#about">About Philippines</a>
    </nav>
    <section class="main-title">
        <div class="grp-1">
            <header class="welcome">Welcome</header>
            <span class="to-the">to the</span>
            <header class="conference">Conference of the <span style="color: #16366A;">Director Generals</span></header>
            <div class="asia-pacific">Asia and Pacific</div>
            <header class="philippines">Philippines</header>
        </div>
        <div class="grp-2">

        </div>
    </section>
</div>
@endsection
