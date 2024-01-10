@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/agenda.css') }}">
<div class="container">
    <header class="agenda-header">Agenda</header>
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
        <div class="message-content">
        <img src="{{ asset('img/missing.svg') }}" alt="CAAP Logo" class="missing-svg">
        <header class="message-content-header">
            Sorry, No files have been uploaded yet.
        </header>
        <p class="message-header-subtitle">
            Kindly coordinate our conference secretariat for your concerns and inquiries. Thank you!
        </p>
        </div>
        @endif

    </div>
</div>

@endsection
