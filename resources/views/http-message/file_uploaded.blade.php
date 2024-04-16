@extends('layouts.app')
<title>@yield('title', 'Document Uploaded')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/file_uploaded.css') }}">

<div class="container">
    <main class="document_sent_main">
        <img src="{{ asset('img/error/file_uploaded.svg') }}" alt="restricted access" class="file_uploaded_img">
        <div class="document_sent_content">
            <header class="document_sent_header">Document has been Uploaded</header>
            <p class="document_sent_message">You're good to go! You can now see your file in the Conference Papers tab.</p>
            <div class="btn-grp">
                <a href="{{ route('welcome') }}" class="go-home-btn">Return Home</a>
            </div>
        </div>
    </main>
</div>

@endsection
