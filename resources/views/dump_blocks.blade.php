                <!-- DEPARTURE INFORMATION -->
                <div class="input__box-long">
                    <header class="subheader">departure Information</header>
                    <p>
                        <i class="card-subtitle mb-2 text-muted">
                            Please indicate your flight details which will be used by our assigned committees.
                        </i>
                    </p>
                </div>
                <div class="input__box">
                    <span class="details">departure Flight No. <span class="required-symbol">*</span></span>
                    <input type="number" placeholder="Enter Flight Number" name="departure_flight_num" value="{{ old('departure_flight_num') }}" required>
                </div>

                <div class="input__box">
                    <span class="details">departure Time <span class="required-symbol">*</span></span>
                    <input type="time" name="departure_time" value="{{ old('departure_time') }}" required>
                </div>
                <div class="input__box-long">
                    <span class="details">departure Date<span class="required-symbol">*</span></span>
                    <input type="date" name="departure_date" value="{{ old('departure_date') }}" required>
                </div>
