@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/participants.css') }}">
<div class="container">
    <header class="participants-header">Our Participants</header>
    <p class="subheader">Select one of the flags to see your list of participants/delegates</p>
    <div class="flag-grid">
        @php
            // Define an array of flags with their captions
            $flags = [
                'Philippines' => 'philippines.png',
                'Australia' => 'australia.png',
                'Japan' => 'japan.png',
                'Indonesia' => 'indonesia.png',
                // Add more flags as needed
            ];

            // Sort the flags array based on the captions
            uksort($flags, function ($a, $b) {
                return strcasecmp($a, $b);
            });
        @endphp

        @foreach($flags as $caption => $image)
            <a href="{{ route('list-of-participants') }}">
                <img class="flag" src="{{ asset('img/flags/' . $image) }}" alt="{{ $caption }}">
                <p class="flag-caption">{{ $caption }}</p>
            </a>
        @endforeach
    </div>
</div>
@endsection
