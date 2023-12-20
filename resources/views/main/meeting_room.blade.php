@extends('layouts.app')
<title>@yield('title', 'Meeting Schedule-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/meeting/meeting.css') }}">
<div class="container">

</div>
<div class="container">
    <header class="meeting-header">Side Meeting</header>

    <section class="meeting-guidelines">
        <main class="guidelines">
            <header class="guide-header">Guidelines for Meeting Room Reservation</header>
            <ul>
                <li>You can make a reservation per hour. If you want a meeting room for more than 2 hours or for any other inquiries, please contact the 59th DGCA 2024 Secretariat (TBF).</li>
                <li>The reservation will be confirmed after the acceptance of the request by the 59th DGCA Secretariat.</li>
                <li>The requested side meeting will be added to the meeting schedule once the request has been accepted.</li>
                <li>The side meeting rooms will be provided complimentary by the organizers.</li>
                <li>The side meetings should not interrupt the main conference.</li>
            </ul>
        </main>
    </section>
    <nav class="day-selector">
        <ul>
            <li><button onclick="changeSchedule('day1')" id="day1">Day 1</button></li>
            <li><button onclick="changeSchedule('day2')" id="day2">Day 2</button></li>
            <li><button onclick="changeSchedule('day3')" id="day3">Day 3</button></li>
            <li><button onclick="changeSchedule('day4')" id="day4">Day 4</button></li>
            <li><button onclick="changeSchedule('day5')" id="day5">Day 5</button></li>
        </ul>
    </nav>
    <div id="schedule-day1" class="schedule-container">
        <header class="day-header">Day 1, October 2024</header>
        <div class="row">
            <div class="col-md">
                <div class="schedule-table">
                    <table class="table bg-white">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Meeting Room A</th>
                                <th>Meeting Room B</th>
                                <th class="last">Meeting Room C</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $time_slots = [
                            "08:00-08:30", "08:30-09:00", "09:00-09:30", "09:30-10:00", "10:00-10:30",
                            "10:30-11:00", "11:00-11:30", "11:30-12:00", "12:00-12:30", "12:30-13:00",
                            "13:00-13:30", "13:30-14:00", "14:00-14:30", "14:30-15:00", "15:00-15:30",
                            "15:30-16:00", "16:00-16:30", "16:30-17:00", "17:00-17:30", "17:30-18:00",
                            ];

                            $reservedTimeSlots = $meeting_rooms->pluck('time_drop')->unique();
                            @endphp
                            @foreach($time_slots as $time_slot)
                            <tr>
                                <td class="day">{{ $time_slot }}</td>

                                <!-- Meeting Room A -->
                                <td class="{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->count() > 0 ? 'active' : '' }}">
                                    @if($meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->count() > 0)
                                    <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>

                                <!-- Meeting Room B -->
                                <td class="{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->count() > 0 ? 'active' : '' }}">
                                    @if($meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->count() > 0)
                                    <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>

                                <!-- Meeting Room C -->
                                <td class="{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room C')->count() > 0 ? 'active' : '' }}">
                                    @if($meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room C')->count() > 0)
                                    <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room C')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room C')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="schedule-day2" class="schedule-container" style="display: none;">
        <header class="day-header">Day 2, October 2024</header>
        <div class="row">
            <div class="col-md">
                <div class="schedule-table">
                    <table class="table bg-white">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Meeting Room A</th>
                                <th>Meeting Room B</th>
                                <th class="last">Meeting Room C</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $time_slots = [
                            "08:00-08:30", "08:30-09:00", "09:00-09:30", "09:30-10:00", "10:00-10:30",
                            "10:30-11:00", "11:00-11:30", "11:30-12:00", "12:00-12:30", "12:30-13:00",
                            "13:00-13:30", "13:30-14:00", "14:00-14:30", "14:30-15:00", "15:00-15:30",
                            "15:30-16:00", "16:00-16:30", "16:30-17:00", "17:00-17:30", "17:30-18:00",
                            ];
                            @endphp
                            @foreach($time_slots as $time_slot)
                            @unless($days_drop == 'Day 2')
                            <tr>
                                <td class="day">{{ $time_slot }}</td>

                                <!-- Meeting Room A -->
                                <td class="{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->count() > 0 ? 'active' : '' }}">
                                    @if($meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->count() > 0)
                                    <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>

                                <!-- Meeting Room B -->
                                <td class="{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->count() > 0 ? 'active' : '' }}">
                                    @if($meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->count() > 0)
                                    <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}-{{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $meeting_rooms->where('time_drop', $time_slot)->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>
                                <!-- Meeting Room C -->
                                <!-- ... (similar logic for Meeting Room C) ... -->
                            </tr>
                            @endunless
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ... (remaining code) ... -->


    <div id="schedule-day3" class="schedule-container" style="display: none;">
        <!-- Day 3 schedule content -->
        <!-- ... -->
    </div>

    <div id="schedule-day4" class="schedule-container" style="display: none;">
        <!-- Day 4 schedule content -->
        <!-- ... -->
    </div>

    <div id="schedule-day5" class="schedule-container" style="display: none;">
        <!-- Day 5 schedule content -->
        <!-- ... -->
    </div>


</div>

<script>
    function changeSchedule(selectedDay) {
        // Reset active class for all links
        document.querySelectorAll('.day-selector button').forEach(function(link) {
            link.classList.remove('active');
        });

        // Set active class for the clicked link
        document.getElementById(selectedDay).classList.add('active');

        // Hide all schedules
        document.getElementById('schedule-day1').style.display = 'none';
        document.getElementById('schedule-day2').style.display = 'none';
        document.getElementById('schedule-day3').style.display = 'none';
        document.getElementById('schedule-day4').style.display = 'none';
        document.getElementById('schedule-day5').style.display = 'none';

        // Show the selected day's schedule
        var selectedSchedule = document.getElementById('schedule-' + selectedDay);
        selectedSchedule.style.display = 'block';

        // Set the day header dynamically
        var dayHeaders = {
            'day1': 'Day 1, October 2024',
            'day2': 'Day 2, October 2024',
            'day3': 'Day 3, October 2024',
            'day4': 'Day 4, October 2024',
            'day5': 'Day 5, October 2024',
        };
        var selectedDayHeader = dayHeaders[selectedDay];
        selectedSchedule.querySelector('.day-header').innerText = selectedDayHeader;

        // Access the correct day's reservations
        var selectedDayReservations = meeting_rooms.filter(function(reservation) {
            return reservation.days_drop === selectedDay;
        });
    }
</script>


@endsection
