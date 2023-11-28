@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/agenda.css') }}">
<div class="container">
    <header class="agenda-header">Agenda</header>
    <div class="card-container">
        <div class="card">
            <div class="card-header">File No. 1</div>
            <div class="card-body">
                <div class="file-info">
                    <p class="file-name">Agenda File 1</p>
                </div>
                <div class="date">Date: 2023-11-23</div>
            </div>
            <a href="#" class="view-file">View</a>
        </div>
        <div class="card">
            <div class="card-header">File No. 2</div>
            <div class="card-body">
                <div class="file-info">
                    <p class="file-name">Agenda File 2</p>
                </div>
                <div class="date">Date: 2023-11-23</div>
            </div>
            <a href="#" class="view-file">View</a>
        </div>
        <div class="card">
            <div class="card-header">File No. 3</div>
            <div class="card-body">
                <div class="file-info">
                    <p class="file-name">Agenda File 3</p>
                </div>
                <div class="date">Date: 2023-11-23</div>
            </div>
            <a href="#" class="view-file">View</a>
        </div>
    </div>
</div>

@endsection
