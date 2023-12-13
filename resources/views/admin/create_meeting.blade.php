@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/create_meeting.css') }}">
<div class="container">
<form method="post" action="{{ route('createMeetingRoom') }}">
        @csrf
        <!-- Other form fields -->

        <div class="form-group">
            <label for="day">Select Day:</label>
            <select class="form-control" id="day" name="days_drop">
                @foreach($days_drop as $day)
                    <option value="{{ $day }}">{{ $day }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="meeting_room">Select Meeting Room:</label>
            <select class="form-control" id="meeting_room" name="meeting_room_drop">
                @foreach($meeting_room_drop as $meetingRoom)
                    <option value="{{ $meetingRoom }}">{{ $meetingRoom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="time">Select Time:</label>
            <select class="form-control" id="time" name="time_drop">
                @foreach($time_drop as $time)
                    <option value="{{ $time }}">{{ $time }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="reserved_by">Reserved By:</label>
            <input type="text" class="form-control" id="reserved_by" name="reserved_by" placeholder="Enter reserved by">
        </div>

        <div class="form-group">
            <label for="reservee">Reservee:</label>
            <input type="text" class="form-control" id="reservee" name="reservee" placeholder="Enter reservee">
        </div>
        <button type="submit" class="btn btn-primary">Update Meeting</button>
    </form>
</div>

@endsection
