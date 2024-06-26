@extends('layouts.app')
<title>@yield('title', 'Reservation-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/reservation_list.css') }}">

<div class="container">
    <header class="page-header">Reserved Meetings</header>
    <a class="button-24" href="{{ route('reserveMeetingRoom') }}">Create New Reservation</a>
    <div class="wrapper">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Day Reserved</th>
                    <th>Room</th>
                    <th>Time Designated</th>
                    <th>Reserved By</th>
                    <th>Country to Meet</th>
                    <th>Action</th>
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
                    <td>
                        <form action="{{ route('meeting-room.delete', ['id' => $meeting->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Remove Meeting</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $meetings->links() }}
    </div>


</div>

@endsection
