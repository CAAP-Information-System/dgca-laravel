@extends('layouts.app')
<title>@yield('title', 'Login-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/auth/login.css') }}">
<div class="container">
    @include('auth.auth_header')

    <section class="main">
        <div class="login-main">

            <form class="login-form" method="POST" action="{{ route('login') }}">
                <header class="login-hdr">Sign In Now</header>
                @csrf
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <br>
                <div class="form-fields">
                    <div class="user__details">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Email Address:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class='bx bx-envelope'></i></span>
                                </div>
                                <input id="email" type="email" placeholder="Enter Email Address" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" required>
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class='bx bx-key'></i></span>
                                </div>
                                <input id="password" type="password" placeholder="Enter Password" class="input-field" name="password" autocomplete="current-password" required>
                            </div>

                            <br>
                            <div class="form-check">
                                <input type="checkbox" id="show-password" class="form-check-input">
                                <label for="show-password" class="form-check-label">Show Password</label>
                            </div>
                            <div id="caps-lock-warning" class="caps-warning" style="display: none;">
                                Your CAPS LOCK is on
                            </div>
                            <div style="margin-top: 30px;"></div>
                            @if (Route::has('password.request'))
                            <a class="forgot-pass-btn" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="sign_in_container">
                        <button type="submit" class="sign_in_btn" id="login-button">
                            Sign In
                        </button>
                    </div>
                    <div class="row ">
                        <div style="margin-top: 35px;"></div>
                        <div>
                            <p style="font-style: italic; padding-left: 10px; ">Don't have an account yet?</p>
                            @if (Route::has('register'))
                            <a class="alt-link" href="{{ route('register') }}">Register and Join</a>
                            @endif
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check for Caps Lock
        function checkCapsLock(e) {
            var capsLockOn = (e.getModifierState && e.getModifierState('CapsLock')) || (e.key && e.key === 'CapsLock');
            if (capsLockOn) {
                document.getElementById('caps-lock-warning').style.display = 'block';
            } else {
                document.getElementById('caps-lock-warning').style.display = 'none';
            }
        }

        // Attach the checkCapsLock function to the keydown event on the password input
        document.getElementById('password').addEventListener('keydown', checkCapsLock);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the password input and show/hide checkbox
        var passwordInput = document.getElementById('password');
        var showPasswordCheckbox = document.getElementById('show-password');

        // Add an event listener to the checkbox
        showPasswordCheckbox.addEventListener('change', function() {
            // If the checkbox is checked, show the password; otherwise, hide it
            passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
        });
    });
</script>
@endsection
