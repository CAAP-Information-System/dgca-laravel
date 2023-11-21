@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/auth/register.css') }}">
<div class="container">
    <div class="header-container">
        <header class="auth-hdr">Welcome and Mabuhay!</header>
    </div>
    @if ($errors->has('rep_mobile'))
    <div class="error-message">{{ $errors->first('rep_mobile') }}</div>
    @endif
    <div class="form-main">
        <form class="register-user" action="{{ route('register') }}" method="POST">
            <header class="title">Registration</header>
            @csrf
            <div class="user__details">
                <div class="input__box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="E.g: Juan" name="first_name" required>
                </div>
                <div class="input__box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="E.g: Dela Cruz" name="last_name" required>
                </div>
                <div class="input__email">
                    <span class="details">Email Address</span>
                    <input type="text" placeholder="E.g: yourname@example.com" name="email" required>
                </div>
                <div class="input__email">
                    <span class="details">Organization</span>
                    <input type="text" placeholder="E.g: ABC Organization" name="organization" required>
                </div>

                <div class="input__box">
                    <span class="details">Password</span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" autocomplete="new-password" required>
                </div>
                <div class="input__box">
                    <span class="details">Confirm Password</span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" required autocomplete="new-password" required>
                </div>

                <div class="password-requirements">
                    <ul>
                        <li class="password-requirement">Must be at least 8 characters or longer</li>
                        <li class="password-requirement">Must contain at least one letter</li>
                        <li class="password-requirement">Must contain at least one number</li>
                        <li class="password-requirement">Must contain at least one special character</li>
                    </ul>
                </div>

            </div>

            <div class="file-drop">
                <div class="file-drop-area" id="fileDropArea">
                    <p>Drag and drop files here or click to select</p>
                    <input type="file" id="fileInput" multiple>
                </div>
                <ul id="fileList" class="file-list"></ul>
            </div>

            <div class="button">
                <button type="submit" class="register">Create an Account</button>
            </div>
            <section class="already-registered">
                <div class="alt-label">Already have an account?</div>
                <br>
                @if (Route::has('login'))
                <a class="alt-link" href="{{ route('login') }}">Back to Sign In</a>
                @endif
            </section>
        </form>
    </div>

</div>

</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const fileDropArea = document.getElementById("fileDropArea");
    const fileList = document.getElementById("fileList");

    fileDropArea.addEventListener("dragover", (e) => {
        e.preventDefault();
        fileDropArea.classList.add("active");
    });

    fileDropArea.addEventListener("dragleave", () => {
        fileDropArea.classList.remove("active");
    });

    fileDropArea.addEventListener("drop", (e) => {
        e.preventDefault();
        fileDropArea.classList.remove("active");
        handleFiles(e.dataTransfer.files);
    });

    document.getElementById("fileInput").addEventListener("change", (e) => {
        handleFiles(e.target.files);
    });

    function handleFiles(files) {
        for (const file of files) {
            const listItem = document.createElement("li");
            listItem.classList.add("file-item");
            listItem.innerHTML = `
                <span>${file.name}</span>
                <button class="delete-btn">Delete</button>
            `;
            fileList.appendChild(listItem);

            const deleteButton = listItem.querySelector(".delete-btn");
            deleteButton.addEventListener("click", () => {
                listItem.remove();
            });
        }
    }
});

</script>
@endsection
