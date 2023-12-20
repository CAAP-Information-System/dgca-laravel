@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/auth/register.css') }}">
<div class="container">
    <div class="header-container">
        <header class="auth-hdr">Welcome and Mabuhay!</header>
    </div>

    <div class="form-main">
        <form class="register-user" action="{{ route('register') }}" method="POST">
            <header class="title">Registration</header>
            @csrf
            <div class="user__details">
                <div class="input__box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="e.g: Juan" name="first_name" value="{{ old('first_name') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="e.g: Dela Cruz" name="last_name" value="{{ old('last_name') }}" required>
                </div>

                <div class="input__email">
                    <span class="details">Email Address</span>
                    <input type="text" placeholder="e.g: yourname@example.com" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="input__email">
                    <span class="details">Designation/Position</span>
                    <input type="text" placeholder="e.g: Director General" name="designation" value="{{ old('designation') }}" required>
                </div>
                <div class="input__email">
                    <span class="details">Organization</span>
                    <input type="text" placeholder="e.g: ABC Organization" name="organization" value="{{ old('organization') }}" required>
                </div>
                <div class="input__email">
                    <span class="details">Gender</span>
                    <select class="form-control" id="gender" name="gender">
                        <option value="-- Select Option --" disabled>-- Select Option -- </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
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
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const passwordInput = document.getElementById("password");
        const passwordStrength = document.getElementById("password-strength");

        passwordInput.addEventListener("input", () => {
            validatePassword(passwordInput.value);
        });

        function validatePassword(password) {
            // Define your password strength criteria
            const lengthRegex = /.{8,}/;
            const letterRegex = /[A-Za-z]/;
            const numberRegex = /\d/;
            const specialCharRegex = /[!@#$%^&*(),.?":{}|<>]/;

            // Check each criterion
            const isLengthValid = lengthRegex.test(password);
            const isLetterValid = letterRegex.test(password);
            const isNumberValid = numberRegex.test(password);
            const isSpecialCharValid = specialCharRegex.test(password);

            // Update the UI based on the criteria
            document.getElementById("length").classList.toggle("valid", isLengthValid);
            document.getElementById("letter").classList.toggle("valid", isLetterValid);
            document.getElementById("number").classList.toggle("valid", isNumberValid);
            document.getElementById("specialChar").classList.toggle("valid", isSpecialCharValid);
        }
    });
</script>
@endsection
