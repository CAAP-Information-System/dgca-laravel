@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/reservation_list.css') }}">

<div class="container">
    <header class="page-header">Reserved Meetings</header>

    <div class="wrapper">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Day Reserved</th>
                    <th>Room</th>
                    <th>Time Designated</th>
                    <th>Reserved By</th>
                    <th>Country to Meet</th>
                </tr>
            </thead>
            <tbody>
                @foreach($meetings as $meeting)
                <tr>
                    <td>{{ $meeting->id }}</td>
                    <td>{{ $meeting->days_drop }}</td>
                    <td>{{ $meeting->meeting_room_drop }}</td>
                    <td>{{ $meeting->time_drop }}</td>
                    <td>{{ $meeting->reserved_by }}</td>
                    <td>{{ $meeting->country_drop }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection
