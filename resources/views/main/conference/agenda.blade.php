@extends('layouts.app')
<title>@yield('title', 'Agenda-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/agenda.css') }}">
@if(auth()->user()->status == 'Approved')
@include('main.banner', ['bannerTitle' => 'Agenda'])
<div class="container">
    <!-- <header class="agenda-header">Agenda</header> -->
    <div class="card-container">
        @if($agendaFiles->count() > 0)
        @foreach($agendaFiles as $file)
        <div class="card">
            <div class="card-hdr">File No. {{ $file->id }}</div>
            <p class="date">{{ $file->upload_date }}</p>
            <div class="card-body">
                <div class="file-info">
                    <p class="file-name">{{ $file->name }}</p>
                </div>
            </div>
            <a href="{{ asset('storage/conference/' . $file->name) }}" target="_blank" class="view-file">View</a>
        </div>
        @endforeach
        @else
        <div class="mb-32 md:flex flex-row-reverse items-center gap-10">
            <img src="{{ asset('img/error/missing.svg') }}" alt="CAAP Logo" class="w-96 object-contain">
            <div class="text-center p-4 mt-16">
                <header class=" text-4xl font-extrabold md:text-6xl">No files yet</header>
                <p class="text-gray-600 italic mt-2">Kindly coordinate with our conference secretariat for your concerns and inquiries. Thank you!</p>
            </div>
        </div>
        @endif

    </div>

</div>
@else
<section class="verification-error-message">
    <img src="{{ asset('img/error/verify.svg') }}" alt="verify-account" class="verify-svg">
    <header class="verification-header">Unauthorized Access</header>
    <p class="verification-message">We apologize, but your account is currently in <span style="color: #002868; font-weight:bold;">Pending</span> status. Please reach out to our DGCA Secretariat through email address: <a href="#" class="">secretariat-email-here@example.com</a> to coordinate with our website administrators for further assistance.</p>

</section>
@endif
@endsection
