@extends('layouts.app')
<title>@yield('title', 'Meeting Schedule-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/meeting/meeting.css') }}">
<div class="container">
    <header class="meeting-header">Side Meeting Schedule</header>

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
            <li><button  onclick="changeSchedule('day1')" id="day1">Day 1</button></li>
            <li><button  onclick="changeSchedule('day2')" id="day2">Day 2</button></li>
            <li><button  onclick="changeSchedule('day3')" id="day3">Day 3</button></li>
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
                            <tr>
                                <td class="day">08:00-08:30</td>
                                <td class="active">
                                    <h4>Philippines - Australia</h4>
                                    <div class="hover">
                                        <h4>Philippines - Australia</h4>
                                        <span>Reserved by: Philippines</span>
                                    </div>
                                </td>
                                <td class="active">
                                    <h4>Singapore - Indonesia</h4>
                                    <div class="hover">
                                        <h4>Singapore - Indonesia</h4>
                                        <span>Reserved by: Singapore</span>
                                    </div>
                                </td>
                                <td class="pending">
                                    <h4>Pending Decision</h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">08:30-09:00</td>
                                <td></td>
                                <td class="active">
                                    <h4>Bangladesh - India</h4>
                                    <div class="hover">
                                        <h4>Bangladesh - India</h4>
                                        <span>Reserved by: India</span>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">09:00-09:30</td>
                                <td class="active">
                                    <h4>Japan - Korea</h4>
                                    <div class="hover">
                                        <h4>Japan - Korea</h4>
                                        <span>Reserved by: Japan</span>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">09:30-10:00</td>
                                <td class="active">
                                    <h4>Thailand - United Kingdom</h4>
                                    <div class="hover">
                                        <h4>Thailand - United Kingdom</h4>
                                        <span>Reserved by: United Kingdom</span>
                                    </div>
                                </td>
                                <td></td>
                                <td class="active">
                                    <h4>United States of America - Saudi Arabia</h4>
                                    <div class="hover">
                                        <h4>United States of America - Saudi Arabia</h4>
                                        <span class="span">Reserved by: Saudi Arabia</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">10:00-10:30</td>
                                <td></td>
                                <td class="active">
                                    <h4>Philippines - Japan</h4>
                                    <div class="hover">
                                        <h4>Philippines - Japan</h4>
                                        <span>Reserved by: Philippines</span>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">10:30-11:00</td>
                                <td class="active">
                                    <h4>United States of America - United Kingdoms</h4>
                                    <div class="hover">
                                        <h4>United States of America - United Kingdom</h4>
                                        <span>Reserved by: United States of America</span>
                                    </div>
                                </td>
                                <td></td>
                                <td class="active">
                                    <h4>Singapore - Malaysia</h4>
                                    <div class="hover">
                                        <h4>Singapore - Malaysia</h4>
                                        <span>Reserved by: Malaysia</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">11:00-11:30</td>
                                <td></td>
                                <td></td>
                                <td class="">
                                </td>
                            </tr>
                            <tr>
                                <td class="day">11:30-12:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">12:00-12:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">12:30-13:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">13:00-13:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">13:30-14:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">14:00-14:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">14:30-15:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">15:00-15:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">15:30-16:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">16:00-16:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">16:30-17:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">17:00-17:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">17:30-18:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
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
                            <tr>
                                <td class="day">08:00-08:30</td>
                                <td class="">
                                </td>
                                <td class="pending">
                                    <h4>Pending Decision</h4>
                                </td>
                                <td class="">
                                </td>
                            </tr>
                            <tr>
                                <td class="day">08:30-09:00</td>
                                <td></td>
                                <td class="active">
                                    <h4>United Kingdom - Philippines</h4>
                                    <div class="hover">
                                        <h4>United Kingdom - Philippines</h4>
                                        <span>Reserved by: United Kingdom</span>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">09:00-09:30</td>
                                <td class="active">
                                    <h4>Papa New Guinea - Pakistan</h4>
                                    <div class="hover">
                                        <h4>Papa New Guinea - Pakistan</h4>
                                        <span>Reserved by: Papa New Guinea</span>
                                    </div>
                                </td>
                                <td class="active">
                                    <h4>Thailand - Sri Lanka</h4>
                                    <div class="hover">
                                        <h4>Thailand - Sri Lanka</h4>
                                        <span>Reserved by: Sri Lanka</span>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">09:30-10:00</td>
                                <td class="active">
                                    <h4>Korea - Singapore</h4>
                                    <div class="hover">
                                        <h4>Korea - Singapore</h4>
                                        <span>Reserved by: Korea</span>
                                    </div>
                                </td>
                                <td></td>
                                <td class="active">
                                    <h4>United States of America - Saudi Arabia</h4>
                                    <div class="hover">
                                        <h4>United States of America - Saudi Arabia</h4>
                                        <span class="span">Reserved by: Saudi Arabia</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">10:00-10:30</td>
                                <td></td>
                                <td class="active">
                                    <h4>Philippines - Japan</h4>
                                    <div class="hover">
                                        <h4>Philippines - Japan</h4>
                                        <span>Reserved by: Philippines</span>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">10:30-11:00</td>
                                <td class="active">
                                    <h4>United States of America - United Kingdoms</h4>
                                    <div class="hover">
                                        <h4>United States of America - United Kingdoms</h4>
                                        <span>Reserved by: United States of America</span>
                                    </div>
                                </td>
                                <td></td>
                                <td class="active">
                                    <h4>Singapore - Malaysia</h4>
                                    <div class="hover">
                                        <h4>Singapore - Malaysia</h4>
                                        <span>Reserved by: Malaysia</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">11:00-11:30</td>
                                <td></td>
                                <td></td>
                                <td class="">
                                </td>
                            </tr>
                            <tr>
                                <td class="day">11:30-12:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">12:00-12:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">12:30-13:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">13:00-13:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">13:30-14:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">14:00-14:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">14:30-15:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">15:00-15:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">15:30-16:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">16:00-16:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">16:30-17:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">17:00-17:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">17:30-18:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
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
                                <th>Meeting Room A</th>
                                <th>Meeting Room B</th>
                                <th class="last">Meeting Room C</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="day">08:00-08:30</td>
                                <td class="">
                                </td>
                                <td class="">
                                </td>
                                <td class="">
                                </td>
                            </tr>
                            <tr>
                                <td class="day">08:30-09:00</td>
                                <td></td>
                                <td class="">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">09:00-09:30</td>
                                <td class="">
                                </td>
                                <td class="">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">09:30-10:00</td>
                                <td class="">
                                </td>
                                <td></td>
                                <td class="">
                                </td>
                            </tr>
                            <tr>
                                <td class="day">10:00-10:30</td>
                                <td></td>
                                <td class="">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">10:30-11:00</td>
                                <td class="">
                                </td>
                                <td></td>
                                <td class="">
                                </td>
                            </tr>
                            <tr>
                                <td class="day">11:00-11:30</td>
                                <td></td>
                                <td></td>
                                <td class="">
                                </td>
                            </tr>
                            <tr>
                                <td class="day">11:30-12:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">12:00-12:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">12:30-13:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">13:00-13:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">13:30-14:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">14:00-14:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">14:30-15:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">15:00-15:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">15:30-16:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">16:00-16:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">16:30-17:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">17:00-17:30</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="day">17:30-18:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
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

        // Show the selected day's schedule
        document.getElementById('schedule-' + selectedDay).style.display = 'block';
    }
</script>

@endsection
