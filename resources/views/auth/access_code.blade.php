@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/auth/access_code.css') }}">
<main class="access_code_main">
    <form class="access_code_form" action="{{ route('verify-access') }}" method="POST">
        @csrf
        <div class="form_inputs">
            <label class="text-xl text-center" for="access_code">Access Code:</label>
            <p>Kindly use the access code provided by the Civil Aviation Authority of the Philippines</p>
            <input class="access_input" type="text" id="access_code" name="access_code" required>
            <button class="submit_code" type="submit">Submit</button>
        </div>
    </form>
    </div>

    @endsection
