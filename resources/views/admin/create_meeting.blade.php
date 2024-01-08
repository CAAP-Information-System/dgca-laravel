@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/create_meeting.css') }}">
<div class="container">
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <form class="create-meeting-form" method="post" action="{{ route('createMeetingRoom') }}">
        <header class="form-header">Create New Meeting</header>
        @csrf
        <!-- Other form fields -->
        <div class="field-grp">
            <div class="form-group">
                <label for="">Meeting Approval:</label>
                <select class="custom-select" id="approval_status" name="approval_status" required>
                    <option value="-- Select Option --" disabled selected>-- Select Option -- </option>
                    <option value="Approved">Approved</option>
                    <option value="For Decision">For Decision</option>
                </select>
            </div>
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
            <!-- <div class="form-group">
                <label for="reserved_by">Reserved By:</label>
                <input type="text" class="form-control" id="reserved_by" name="reserved_by" value="{{ auth()->user()->country }}" readonly>
            </div> -->
            <div class="form-group">
                <label for="reserved_by">Reserved By:</label>
                <select class="form-control" id="reserved_by" name="reserved_by">
                    @foreach($reserved_by as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="country">Select Country To Meet:</label>
                <select class="form-control" id="country" name="country_drop">
                    @foreach($country_drop as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="button-18">Update Meeting</button>
        </div>

    </form>
</div>

@endsection
