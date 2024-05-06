@extends('layouts.app')
<title>@yield('title', 'Flight Info-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/flight_info/flight_registration.css') }}">
<div class="container">

    <div class="form-main">
        <form class="register-user" action="{{ route('upload-flight-information') }}" method="POST" enctype="multipart/form-data">
        <header class="title">Accompanying Person / Spouse's Flight Information Form</header>
            <div class="flight_guide">
                <p><b>Greetings! </b>
                    Please complete this form if you have successfully booked your flight for the 59th DGCA APAC Conference in Cebu, Philippines. The information provided will be used by our logistics team.</p>
            </div>
            @csrf

            <div class="user__details">
                <!-- LOGIN DETAILS -->
                <div class="category__header">
                    <header class="category-name">Full Name</header>
                </div>
                <div class="input__box-long">
                    <span class="details">Salutations <span class="required-symbol">*</span></span>
                    <select class="form-control" id="salutation" name="salutation">
                        <option value="">-- Select Option --</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Atty.">Atty.</option>
                        <option value="Dr.">Dr.</option>
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
                    <span class="details">Passport Number <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: ABC1234" name="passport_num" value="{{ old('passport_num') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Address<span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: House No., Street Name, City/State, Country, ZIP Code " name="address" value="{{ old('address') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Country <span class="required-symbol">*</span></span>
                    <input type="text" placeholder="e.g: Philippines" name="country" value="{{ old('country') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">Gender <span class="required-symbol">*</span></span>
                    <select class="form-control" id="gender" name="gender">
                        <option value="-- Select Option --" disabled>-- Select Option -- </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <!-- FLIGHT DETAILS -->
                <div class="category__header">
                    <header class="category-name">Flight Details</header>
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

                <div class="input__box-long">
                    <span class="details">Activities <span class="required-symbol">*</span></span>
                    <select class="form-control" id="preferred_activity" name="preferred_activity" required>
                        <option value="">-- Select Option --</option>
                        <option value="Event 1">Event 1</option>
                        <option value="Event 2">Event 2</option>
                        <option value="Event 3">Event 3</option>
                    </select>
                </div>
            </div>

            <div class="form-actions">
                <div class="button">
                    <button type="submit" class="register">Submit Flight Information</button>
                </div>
            </div>
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
<script>
    document.getElementById('hotel_reco').addEventListener('change', function() {
        var otherHotelField = document.getElementById('otherHotelField');
        if (this.value === 'Others') {
            otherHotelField.style.display = 'block';
        } else {
            otherHotelField.style.display = 'none';
        }
    });

    document.getElementById('has_spouse').addEventListener('change', function() {
        var accompaniedFields = document.getElementById('accompaniedFields');
        if (this.value === 'Yes') {
            accompaniedFields.style.display = 'block';
        } else {
            accompaniedFields.style.display = 'none';
        }
    });
</script>
<script>
    function showAttireSize() {
        var conferenceRole = document.getElementById('conference_role').value;
        var attireSizeBlock = document.getElementById('attireSizeBlock');

        if (conferenceRole === 'Head Delegate') {
            attireSizeBlock.style.display = 'block';
        } else {
            attireSizeBlock.style.display = 'none';
        }
    }
</script>
@endsection
