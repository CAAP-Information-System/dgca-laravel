@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/participants.css') }}">
<div class="container">
<header class="participants-header">Our Participants</header>
<p class="subheader">Select one of the flags to see your list of participants/delegates</p>
    <div class="flag-grid">
        <a href="{{ route('list-of-participants') }}">
            <img class="flag" src="{{ asset('img/flags/philippines.png') }}" alt="Flag 1">
        </a>
        <a href="">
            <img class="flag" src="{{ asset('img/flags/australia.png') }}" alt="Flag 2">
        </a>
        <a href="">
            <img class="flag" src="{{ asset('img/flags/japan.png') }}" alt="Flag 3">
        </a>
    </div>
</div>

@endsection
