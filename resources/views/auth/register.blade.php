@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/auth/register.css') }}">
<div class="container">
    <div class="header-container">
        <header class="auth-hdr">Welcome and Mabuhay!</header>
    </div>

    <div class="form-main">
        <form class="register-user" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            <header class="title">Registration</header>
            @csrf
            <div class="requirements-box">
                    <header class="requirements-header">Reminders:</header>
                    <ul>
                        <li>Upload a 2x2 ID picture in formal attire</li>
                        <li>The image should be in JPG, PNG, or JPEG format</li>
                        <li>Image file size must not exceed at least 10 megabytes (MB)</li>
                    </ul>
                </div>
            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" accept=".jpg, .png, .jpeg" >
                @error('profile_image')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="user__details">

                <div class="input__box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="e.g: Juan" name="first_name" value="{{ old('first_name') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="e.g: Dela Cruz" name="last_name" value="{{ old('last_name') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">Email Address</span>
                    <input type="text" placeholder="e.g: yourname@example.com" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">Country</span>
                    <input type="text" placeholder="e.g: Philippines" name="country" value="{{ old('country') }}" required>
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
                    <span class="details">Conference Role</span>
                    <select class="form-control" id="conference_role" name="conference_role">
                        <option value="">-- Select Option --</option>
                        <option value="Head Delegate">Head Delegate</option>
                        <option value="Delegate">Delegate</option>
                        <option value="Observer">Observer</option>
                        <option value="Panelist">Panelist</option>
                        <option value="Sponsor/Exhibitor">Sponsor/Exhibitor</option>
                    </select>
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
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" autocomplete="new-password" required>
                </div>

                <div class="requirements-box">
                    <ul>
                        <li class="password-requirement">Must be at least 8 characters or longer</li>
                        <li class="password-requirement">Must contain at least one letter</li>
                        <li class="password-requirement">Must contain at least one number</li>
                        <li class="password-requirement">Must contain at least one special character</li>
                    </ul>
                </div>

            </div>
            <div class="privacy-policy">
                <br>
                <h4>Privacy Policy</h4>
                <p>
                    All information provided herein shall be kept private and confidential by the PPP Center and shall be used solely for legal purposes as mandated by the <a class="text-primary text-bold dpa-link" href="https://privacy.gov.ph/data-privacy-act/#w10">Data Privacy Act of 2012</a> and other relevant laws. Videos and pictures taken during the event may also be used in PPP Center’s promotional and publicity materials.
                </p>
                <p>For data privacy concerns, kindly contact the PPP Center’s Data Protection Officer at
                    <a href="#" class="privacy-pol-link">
                        pppc.dpo@ppp.gov.ph.
                    </a>
                </p>
            </div>
            <div class="privacy-policy-check">
                <input id="privacy" type="checkbox" name="privacy" class="checkbox" required>
                <span class="details">By checking this box, I agree that I have read the privacy policy policy</span>

            </div>
            <!-- <div class="file-drop">
                <div class="file-drop-area" id="fileDropArea">
                    <p>Drag and drop files here or click to select</p>
                    <input type="file" id="fileInput" multiple>
                </div>
                <ul id="fileList" class="file-list"></ul>
            </div> -->

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
