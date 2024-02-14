@extends('layouts.app')
<title>@yield('title', 'Schedule-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/meeting/meeting.css') }}">
<div class="container">
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
                            <td class="active">
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


@endsection
