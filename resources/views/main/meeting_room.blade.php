@extends('layouts.app')
<title>@yield('title', 'Meeting Schedule-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/meeting/meeting.css') }}">
@include('main.banner', ['bannerTitle' => 'Side Meetings'])
@include('components.side_meeting_modal')
<div class="">
    <!-- <header class="meeting-header">Side Meeting</header> -->

    <section class=" container meeting-guidelines">
        <main class="guidelines">
            <header class="guide-header">Guidelines for Meeting Room Reservation</header>
            <ul>
                <li>Reservations can be made per hour. For bookings exceeding 1 hour or for any other inquiries, please reach out to the 59th DGCA 2024 Secretariat (<a href="mailto:dgca59_secretariat@caap.gov.ph" style="text-decoration: none;">dgca59_secretariat@caap.gov.ph</a>).</li>
                <li>Reservation confirmation will be subject to acceptance by the 59th DGCA Secretariat.</li>
                <li>Once accepted, requested side meetings will be incorporated into the meeting schedule.</li>
                <li>Side meeting rooms will be provided complimentary by the organizers.</li>
                <li>Please ensure that the side meetings do not disrupt the main conference proceedings.</li>
                <li>
                    No later than 5 days before the date of your side meeting reservation.
                </li>
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
                                <th onclick="showRoomDetails('Meeting Room 1 - Jasmin', 10, '10x15 sqm')">Meeting Room 1 - Jasmin</th>
                                <th>Meeting Room 2 Lotus</th>
                                <th>Meeting Room 3 Sampaguita</th>
                                <th>Meeting Room 4 Benjarong Bangkok</th>
                                <th>Meeting Room 5 Benjarong Phuket</th>
                                <th class="last">Meeting Room 6 Club Lounge Boardroom</th>
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
                            @php
                            $day1Meetings = $meeting_rooms->where('days_drop', 'Day 1')->where('time_drop', $time_slot);
                            @endphp

                            <tr>
                                <td class="day">{{ $time_slot }}</td>
                                @if($day1Meetings->count() > 0)
                                <!-- Meeting Room 1 - Jasmin -->
                                <td class="{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0 ? 'active' : '' }}">
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0)
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->approval_status === 'For Decision')
                                    <h4 class="decision-pending">Decision Pending</h4>
                                    <!-- <div class="hover">
                                            <h4>Decision Pending</h4>
                                        </div> -->
                                    @else
                                    <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 2 - Lotus -->
                                <td class="{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0 ? 'active' : '' }}">
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0)
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->approval_status === 'For Decision')
                                    <h4 class="decision-pending">Decision Pending</h4>
                                    @else
                                    <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 3 - Sampaguita -->
                                <td class="{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0 ? 'active' : '' }}">
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0)
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->approval_status === 'For Decision')
                                    <h4 class="decision-pending">Decision Pending</h4>
                                    @else
                                    <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 4 - Benjarong Bangkok -->
                                <td class="{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0 ? 'active' : '' }}">
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0)
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->approval_status === 'For Decision')
                                    <h4 class="decision-pending">Decision Pending</h4>
                                    @else
                                    <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 5 - Benjarong Phuket -->
                                <td class="{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0 ? 'active' : '' }}">
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0)
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->approval_status === 'For Decision')
                                    <h4 class="decision-pending">Decision Pending</h4>
                                    @else
                                    <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 6 - Club Lounge Boardroom -->
                                <td class="{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0 ? 'active' : '' }}">
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0)
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->approval_status === 'For Fecision')
                                    <h4 class="decision-pending">Fecision Pending</h4>
                                    @else
                                    <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day1Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                @endif

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
                                <th>Meeting Room 1 - Jasmin</th>
                                <th>Meeting Room 2 Lotus</th>
                                <th>Meeting Room 3 Sampaguita</th>
                                <th>Meeting Room 4 Benjarong Bangkok</th>
                                <th>Meeting Room 5 Benjarong Phuket</th>
                                <th class="last">Meeting Room 6 Club Lounge Boardroom</th>
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
                            @php
                            $day2Meetings = $meeting_rooms->where('days_drop', 'Day 2')->where('time_drop', $time_slot);
                            @endphp

                            <tr>
                                <td class="day">{{ $time_slot }}</td>
                                @if($day2Meetings->count() > 0)
                                <!-- Meeting Room 1 - Jasmin -->
                                <td class="{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0 ? 'active' : '' }}">
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0)
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 2 - Lotus -->
                                <td class="{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0 ? 'active' : '' }}">
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0)
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 3 - Sampaguita -->
                                <td class="{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0 ? 'active' : '' }}">
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0)
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 4 - Benjarong Bangkok -->
                                <td class="{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0 ? 'active' : '' }}">
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0)
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 5 - Benjarong Phuket -->
                                <td class="{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0 ? 'active' : '' }}">
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0)
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 6 - Club Lounge Boardroom -->
                                <td class="{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0 ? 'active' : '' }}">
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0)
                                    @if($day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day2Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                @endif
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="schedule-day3" class="schedule-container" style="display: none;">
        <header class="day-header">Day 3, October 2024</header>
        <div class="row">
            <div class="col-md">
                <div class="schedule-table">
                    <table class="table bg-white">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Meeting Room 1 - Jasmin</th>
                                <th>Meeting Room 2 Lotus</th>
                                <th>Meeting Room 3 Sampaguita</th>
                                <th>Meeting Room 4 Benjarong Bangkok</th>
                                <th>Meeting Room 5 Benjarong Phuket</th>
                                <th class="last">Meeting Room 6 Club Lounge Boardroom</th>
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
                            @php
                            $day3Meetings = $meeting_rooms->where('days_drop', 'Day 3')->where('time_drop', $time_slot);
                            @endphp

                            <tr>
                                <td class="day">{{ $time_slot }}</td>
                                @if($day3Meetings->count() > 0)
                                <!-- Meeting Room 1 - Jasmin -->
                                <td class="{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0 ? 'active' : '' }}">
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0)
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 2 - Lotus -->
                                <td class="{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0 ? 'active' : '' }}">
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0)
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 3 - Sampaguita -->
                                <td class="{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0 ? 'active' : '' }}">
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0)
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 4 - Benjarong Bangkok -->
                                <td class="{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0 ? 'active' : '' }}">
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0)
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 5 - Benjarong Phuket -->
                                <td class="{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0 ? 'active' : '' }}">
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0)
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 6 - Club Lounge Boardroom -->
                                <td class="{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0 ? 'active' : '' }}">
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0)
                                    @if($day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day3Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                @endif
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="schedule-day4" class="schedule-container" style="display: none;">
        <header class="day-header">Day 4, October 2024</header>
        <div class="row">
            <div class="col-md">
                <div class="schedule-table">
                    <table class="table bg-white">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Meeting Room 1 - Jasmin</th>
                                <th>Meeting Room 2 Lotus</th>
                                <th>Meeting Room 3 Sampaguita</th>
                                <th>Meeting Room 4 Benjarong Bangkok</th>
                                <th>Meeting Room 5 Benjarong Phuket</th>
                                <th class="last">Meeting Room 6 Club Lounge Boardroom</th>
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
                            @php
                            $day4Meetings = $meeting_rooms->where('days_drop', 'Day 4')->where('time_drop', $time_slot);
                            @endphp

                            <tr>
                                <td class="day">{{ $time_slot }}</td>
                                @if($day4Meetings->count() > 0)
                                <!-- Meeting Room 1 - Jasmin -->
                                <td class="{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0 ? 'active' : '' }}">
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0)
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 2 - Lotus -->
                                <td class="{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0 ? 'active' : '' }}">
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0)
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 3 - Sampaguita -->
                                <td class="{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0 ? 'active' : '' }}">
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0)
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 4 - Benjarong Bangkok -->
                                <td class="{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0 ? 'active' : '' }}">
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0)
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 5 - Benjarong Phuket -->
                                <td class="{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0 ? 'active' : '' }}">
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0)
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 6 - Club Lounge Boardroom -->
                                <td class="{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0 ? 'active' : '' }}">
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0)
                                    @if($day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day4Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                @endif
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div id="schedule-day5" class="schedule-container" style="display: none;">
        <header class="day-header">Day 5, October 2024</header>
        <div class="row">
            <div class="col-md">
                <div class="schedule-table">
                    <table class="table bg-white">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Meeting Room 1 - Jasmin</th>
                                <th>Meeting Room 2 Lotus</th>
                                <th>Meeting Room 3 Sampaguita</th>
                                <th>Meeting Room 4 Benjarong Bangkok</th>
                                <th>Meeting Room 5 Benjarong Phuket</th>
                                <th class="last">Meeting Room 6 Club Lounge Boardroom</th>
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
                            @php
                            $day5Meetings = $meeting_rooms->where('days_drop', 'Day 5')->where('time_drop', $time_slot);
                            @endphp

                            <tr>
                                <td class="day">{{ $time_slot }}</td>
                                @if($day5Meetings->count() > 0)
                                <!-- Meeting Room 1 - Jasmin -->
                                <td class="{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0 ? 'active' : '' }}">
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->count() > 0)
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 1 - Jasmin')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                <!-- Meeting Room 2 - Lotus -->
                                <td class="{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0 ? 'active' : '' }}">
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->count() > 0)
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->approval_status === 'For Decision')
                                    <h4 class="decision-pending">Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 2 - Lotus')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 3 - Sampaguita -->
                                <td class="{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0 ? 'active' : '' }}">
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->count() > 0)
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 3 - Sampaguita')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 4 - Benjarong Bangkok -->
                                <td class="{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0 ? 'active' : '' }}">
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->count() > 0)
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 4 - Benjarong Bangkok')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 5 - Benjarong Phuket -->
                                <td class="{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0 ? 'active' : '' }}">
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->count() > 0)
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 5 - Benjarong Phuket')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>

                                <!-- Meeting Room 6 - Club Lounge Boardroom -->
                                <td class="{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0 ? 'active' : '' }}">
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->count() > 0)
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5Meetings->where('meeting_room_drop', 'Meeting Room 6 - Club Lounge Boardroom')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
                                @endif
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

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
            'day1': 'Day 1, October 14, 2024',
            'day2': 'Day 2, October 15, 2024',
            'day3': 'Day 3, October 16, 2024',
            'day4': 'Day 4, October 17, 2024',
            'day5': 'Day 5, October 18, 2024',
        };
        var selectedDayHeader = dayHeaders[selectedDay];
        selectedSchedule.querySelector('.day-header').innerText = selectedDayHeader;

        // Access the correct day's reservations
        var selectedDayReservations = meeting_rooms.filter(function(reservation) {
            return reservation.days_drop === selectedDay;
        });
    }
</script>
<script>
    function showRoomDetails(roomName, pax, dimension) {
    // Update modal content
    document.getElementById('roomName').innerText = roomName;
    document.getElementById('roomPax').innerText = "Number of Pax: " + pax;
    document.getElementById('roomDimension').innerText = "Dimensions: " + dimension;

    // Show the modal
    document.getElementById('roomDetailsModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('roomDetailsModal').style.display = 'none';
}
</script>

@endsection
