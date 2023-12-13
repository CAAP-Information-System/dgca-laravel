@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/agenda.css') }}">
<div class="container">
    <header class="agenda-header">Agenda</header>
    <div class="card-container">
        <div class="card">
            <div class="card-hdr">File No. 1</div>
            <p class="date">16-07-2023</p>
            <div class="card-body">
                <div class="file-info">
                    <p class="file-name">Provisional Agenda for 58th DGCA Conference - APAC</p>
                </div>

            </div>
            <a href="#" class="view-file">View</a>
        </div>
        <div class="card">
            <div class="card-hdr">File No. 2</div>
            <p class="date">24-08-2023</p>
            <div class="card-body">
                <div class="file-info">
                    <p class="file-name">Provisional Agenda for 58th DGCA Conference - APAC, Revision No. 1</p>
                </div>
            </div>
            <a href="#" class="view-file">View</a>
        </div>
        <div class="card">
            <div class="card-hdr">File No. 3</div>
            <p class="date">12-10-2023</p>
            <div class="card-body">
                <div class="file-info">
                    <p class="file-name">Provisional Agenda for 58th DGCA Conference - APAC, Revision No. 2</p>
                </div>
            </div>
            <a href="#" class="view-file">View</a>
        </div>
    </div>
</div>

@endsection
