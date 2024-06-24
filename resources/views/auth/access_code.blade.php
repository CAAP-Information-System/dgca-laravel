@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/auth/access_code.css') }}">
<main class="main-content">
    <form class="form-content" action="{{ route('verify-access') }}" method="POST">
        @csrf
        <div class="input-group">
            <header class="access-guide">
                <label class="label" for="access_code">Access Code:</label>
                <p class="instruction">Kindly use the access code provided by the Civil Aviation Authority of the Philippines</p>
            </header>
            @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
            @endif
            <input class="input-field" type="text" id="access_code" name="access_code" required>
        </div>
        <div>
            <button class="submit-button" type="submit">Submit</button>
        </div>
    </form>
</main>
@endsection
