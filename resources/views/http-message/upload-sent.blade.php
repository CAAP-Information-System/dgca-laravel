@extends('layouts.app')
<title>@yield('title', 'We Got It!')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/error/upload-sent.css') }}">

<div class="container">
    <main class="error-main">
        <img src="{{ asset('img/error/file-sent.svg') }}" alt="restricted access" class="error-img">
        <div class="error-content">
            <header class="error-header">Upload Sent to Administrators</header>
            <br>
            <div class="error-message">
                <p>
                    Thanks for your contribution, we've successfully received the file you uploaded on our website. You'll be notified via email once the submission is approved by the committee. Have a great day!
                </p>
                <p style="margin-top: 7vh;">If you have any questions or need further assistance, feel free to contact our registration team at <a href="#" class="email-link">dgca59_registration@caap.gov.ph</a></p>
            </div>

        </div>
    </main>
</div>

@endsection
