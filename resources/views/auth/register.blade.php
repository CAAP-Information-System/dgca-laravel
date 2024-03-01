@extends('layouts.app')
<title>@yield('title', 'Register-59th DGCA')</title>
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
                <label for="profile_image">Profile Image <span class="required-symbol">*</span></label>
                <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" accept=".jpg, .png, .jpeg">
                @error('profile_image')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="user__details">

                <!-- LOGIN DETAILS -->
                <div class="category__header">
                    <header class="category-name">Login Details</header>
                </div>
                <div class="input__box-long">
                    <span class="details">Email Address <span class="required-symbol">*</span></span>
                    <input type="email" placeholder="e.g: yourname@example.com" name="email" value="{{ old('email') }}" autocomplete="email" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Salutations <span class="required-symbol">*</span></span>
                    <select class="form-control" id="salutation" name="salutation">
                        <option value="">-- Select Option --</option>
                        <option value="Mr">Mr</option>
                        <option value="Ms">Ms</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                </div>
                <div class="input__box">
                    <span class="details">First Name <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: Juan" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                </div>

                <div class="input__box">
                    <span class="details">Last Name <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: Dela Cruz" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" required>
                </div>

                <div class="input__box-long">
                    <span class="details">Country <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: Philippines" name="country" value="{{ old('country') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Passport Number <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: ABC1234" name="passport_num" value="{{ old('passport_num') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Designation/Position <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: Director General" name="designation" value="{{ old('designation') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Gender <span class="required-symbol">*</span></span>
                    <select class="form-control" id="gender" name="gender">
                        <option value="-- Select Option --" disabled>-- Select Option -- </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="input__box-long">
                    <span class="details">Organization / Agency<span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: ABC Organization" name="organization" value="{{ old('organization') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Address<span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: House No., Street Name, City/State, Country, ZIP Code " name="address" value="{{ old('address') }}" required>
                </div>
                <div class="input__box">
                    <span class="details">Telephone Number <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: 1234-5467" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">
                </div>

                <div class="input__box">
                    <span class="details">Mobile Number <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: 0123456789" name="mobile" value="{{ old('mobile') }}" autocomplete="mobile" required>
                </div>
                <div class="form-group">
                    <label for="passport_photo">Passport Photo <span class="required-symbol">*</span></label>
                    <input id="passport_photo" type="file" class="form-control @error('passport_photo') is-invalid @enderror" name="passport_photo" accept=".jpg, .png, .jpeg">
                    @error('passport_photo')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- CONFERENCE DETAILS -->
                <div class="category__header">
                    <header class="category-name">Conference Details</header>
                </div>
                <div class="input__box-long">
                    <span class="details">Badge Name <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: Juan Dela Cruz" name="badge_name" value="{{ old('badge_name') }}" autocomplete="badge_name" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Conference Role <span class="required-symbol">*</span></span>
                    <select class="form-control" id="conference_role" name="conference_role">
                        <option value="">-- Select Option --</option>
                        <option value="Head Delegate">Head Delegate</option>
                        <option value="Delegate">Delegate</option>
                        <option value="Observer">Observer</option>
                        <option value="Panelist">Panelist</option>
                        <option value="Sponsor/Exhibitor">Sponsor/Exhibitor</option>
                    </select>
                </div>
                <div class="input__box-long">
                    <span class="details">Aiport Destination <span class="required-symbol">*</span></span>
                    <p><i class="text-muted">This will be used by the logistics committee</i></p>
                    <select class="form-control" id="airport_destination" name="airport_destination">
                        <option value="">-- Select Option --</option>
                        <option value="MIA Terminal 1">MIA Terminal 1</option>
                        <option value="MIA Terminal 2">MIA Terminal 2</option>
                        <option value="MIA Terminal 3">MIA Terminal 3</option>
                        <option value="Mactan-Cebu International Airport">Mactan-Cebu International Airport</option>
                    </select>
                </div>

                <!-- FLIGHT DETAILS -->
                <div class="category__header">
                    <header class="category-name">Flight Details</header>
                </div>
                <!-- DEPARTURE INFORMATION -->
                <div class="input__box-long">
                    <header class="subheader">Departure Information</header>
                    <p>
                        <i class="card-subtitle mb-2 text-muted">
                            Please indicate your flight details which will be used by our assigned committees.
                        </i>
                    </p>
                </div>
                <div class="input__box">
                    <span class="details">Departure Flight No. <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="Enter Flight Number" name="departure_flight_num" value="{{ old('departure_flight_num') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">Departure Time <span class="required-symbol">*</span></span>
                    <input type="time" name="departure_time" value="{{ old('departure_time') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Departure Date<span class="required-symbol">*</span></span>
                    <input type="date" name="departure_date" value="{{ old('departure_date') }}" required>
                </div>

                <!-- ARRIVAL INFORMATION -->
                <div class="input__box-long">
                    <header class="subheader">Arrival Information</header>
                    <p>
                        <i class="card-subtitle mb-2 text-muted">
                            Please indicate your flight details which will be used by our assigned committees.
                        </i>
                    </p>
                </div>

                <div class="input__box">
                    <span class="details">Arrival Flight No. <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="Enter Flight Number" name="arrival_flight_num" value="{{ old('arrival_flight_num') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">Arrival Time <span class="required-symbol">*</span></span>
                    <input type="time" name="arrival_time" value="{{ old('arrival_time') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Arrival Date<span class="required-symbol">*</span></span>
                    <input type="date" name="arrival_date" value="{{ old('arrival_date') }}" required>
                </div>

                <!-- ACCOMODATIONS AND PREFERENCES -->
                <div class="category__header">
                    <header class="category-name">Accomodations & Preferences</header>
                </div>
                <div class="input__box-long">
                    <span class="details">Hotel Accomodations <span><i>(Optional)</i></span></span>
                    <p><i class="text-muted">The options shown are recommended hotels nearest to the venue.</i></p>
                    <select class="form-control" id="hotel_reco" name="hotel_reco">
                        <option value="">-- Select Option --</option>
                        <option value="Chateau By The Sea">Chateau By The Sea</option>
                        <option value="Be Resort Mactan">Be Resort Mactan</option>
                        <option value="Shangri-La Mactan">Shangri-La Mactan</option>
                        <option value="Mövenpick Cebu">Mövenpick Cebu</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="input__box-long">
                    <header class="subheader">Barong-Tagalog Size (Attire)</header>
                    <p><i class="card-subtitle mb-2 text-muted">Sizes are in centimeters (cm)</i></p>
                </div>

                <div class="input__box">
                    <span class="details">Neck Size <span class="required-symbol">*</span></span>
                    <input type="number" placeholder="Enter Measurement" name="neck" value="{{ old('neck') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">Shoulder Size <span class="required-symbol">*</span></span>
                    <input type="number" placeholder="Enter Measurement" name="shoulder" value="{{ old('shoulder') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Add Special Requirements/Request:<span><i>(Optional)</i></span></span>
                    <p><i class="text-muted">Include additional sizing if needed.</i></p>
                    <input type="text" placeholder="Enter None if not needed" name="attire_special_req" value="{{ old('attire_special_req') }}">
                </div>
                <div class="input__box-long">
                    <span class="details">Activities <span class="required-symbol">*</span></span>
                    <select class="form-control" id="preferred_activity" name="preferred_activity" required>
                        <option value="">-- Select Option --</option>
                        <option value="Event 1">Event 1</option>
                        <option value="Event 2">Event 2</option>
                        <option value="Event 3">Event 3</option>
                    </select>
                </div>
                <div class="input__box-long">
                    <span class="details">Dietary Restrictions <span><i>(Optional)</i></span></span>
                    <select class="form-control" id="dietary_restrictions" name="dietary_restrictions">
                        <option value="">-- Select Option --</option>
                        <option value="Halal">Halal</option>
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="No Pork">No Pork</option>
                        <option value="No Beef">No Beef</option>
                        <option value="None">None</option>
                    </select>
                </div>
                <div class="input__box-long">
                    <span class="details">Add Special Requirements/Request: <span><i>(Optional)</i></span></span>
                    <p><i class="text-muted">Special handling support, if any (health, etc.)</i></p>
                    <input type="text" placeholder="Enter None if none" name="dietary_special_req" value="{{ old('dietary_special_req') }}">
                </div>
                <div class="input__box-long">
                    <span class="details">Are you accompanied with a Person/Spouse? <span class="required-symbol">*</span></span>
                    <select class="form-control" id="has_spouse" name="has_spouse" required>
                        <option value="">-- Select Option --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <br>
                <!-- PASSWORD CONFIRMATION-->
                <div class="category__header">
                    <header class="category-name">Password Confirmation</header>
                </div>
                <div class="input__box">
                    <span class="details">Password <span class="required-symbol">*</span></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" autocomplete="new-password" required>
                </div>
                <div class="input__box">
                    <span class="details">Confirm Password <span class="required-symbol">*</span></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" autocomplete="new-password" required>
                </div>
                <div id="password-strength-container">
                    <div id="password-strength"></div>
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

            <!-- COPYRIGHT & PRIVACY POLICY-->
            <div class="category__header">
                <header class="category-name">Password Confirmation</header>
            </div>
            <div class="privacy-policy">
                <br>
                <h4>Privacy Policy <span class="required-symbol">*</span></h4>
                <p>
                    All information provided herein shall be kept private and confidential by the PPP Center and shall be used solely for legal purposes as mandated by the <a class="text-primary text-bold dpa-link" href="https://privacy.gov.ph/data-privacy-act/#w10">Data Privacy Act of 2012</a> and other relevant laws. Videos and pictures taken during the event may also be used in PPP Center’s promotional and publicity materials.
                </p>
                <b>Collection and Use of Personal Information and Presentation Materials</b>
                <ol>

                    <li>Items of personal information collected: <i> Title, County, Full Name, Affiliation, Department, Poistion/Designation, Telehone, Mobile, E-mail, Address, etc.</i></li>
                    <li>Items of presentation materials collected: <i> Presentation, Agenda Files, etc.</i></li>
                </ol>
                <p>For data privacy concerns, kindly contact the PPP Center’s Data Protection Officer at
                    <a href="#" class="privacy-pol-link">
                        pppc.dpo@ppp.gov.ph.
                    </a>
                </p>
            </div>
            <div class="privacy-policy-check">
                <input id="privacy" type="checkbox" name="privacy" class="checkbox" required>
                <span class="details">By checking this box, I agree that I have read the privacy policy</span>

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
<script src="{{ asset('js/auth/file-size.js') }}"></script>
<script src="{{ asset('js/auth/pass-confirmation.js') }}"></script>
<script src="{{ asset('js/auth/pass-validation.js') }}"></script>

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
