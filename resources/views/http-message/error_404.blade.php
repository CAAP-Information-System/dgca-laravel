@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/404.css') }}">
<div class="container">
    <main class="message_404_cont">
        <div class="error__message__content">
            <img src="{{ asset('img/error/404_error.svg') }}" alt="dotted arrow" class="error_404_img">
            <div style="display: block;">
            <header class="error_404_title">404</header>
            <div class="error_404_subheader">Oooops, Page Not Found</div>
            <a href="{{ route('welcome') }}" class="go_home_404"><i class="fa-solid fa-house"></i>Go Home</a>
            </div>
        </div>
    </main>
</div>
@endsection
