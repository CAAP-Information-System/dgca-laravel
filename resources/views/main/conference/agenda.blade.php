@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/agenda.css') }}">
<div class="container">
    <header class="agenda-header">Agenda</header>
    <div class="card-container">
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
    </div>
</div>

@endsection
