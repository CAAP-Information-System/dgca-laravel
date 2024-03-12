@extends('layouts.app')
<title>@yield('title', 'Sponsors-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/sponsors/our_sponsors.css') }}">
@include('main.banner', ['bannerTitle' => 'Our Sponsors'])
<div class="container">
    <div class="sponsor-list-container">
        <header class="sponsor-list-header">Compiled List of Sponsors</header>
        <div><a href="#" class="list-of-sponsors-btn">Sponsors List</a></div>
    </div>

    <section class="sponsors">
        @foreach(json_decode($sponsorJson)->sponsors as $sponsor)
        <div class="card">
            <div class="img-container">
                <img src="{{ asset($sponsor->image) }}" alt="{{ $sponsor->name }}" class="sponsor-img">
                <! </div>
                    <header class="sponsor-name">{{ $sponsor->name }}</header>
            </div>
        </div>
        @endforeach
    </section>

</div>

@endsection
