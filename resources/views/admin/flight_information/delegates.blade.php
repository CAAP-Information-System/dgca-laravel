@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/delegates.css') }}">
<div class="container">
    <div class="main">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Country</th>
                    <th>Arrival Flight Number</th>
                    <th>Departure Flight Number</th>
                    <th>Form Created</th>
                </tr>
            </thead>
            <tbody>
                @foreach($delegates as $delegate)
                <tr>
                    <td><b>{{ $delegate->first_name }} {{ $delegate->last_name }}</b></td>
                    <td>{{ $delegate->country }}</td>
                    <td>{{ $delegate->arrival_flight_num }}</td>
                    <td>{{ $delegate->departure_flight_num }}</td>
                    <td>{{ $delegate->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $delegates->links() }}
    </div>
</div>

@endsection
