@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/delegates.css') }}">
<div class="container">
    <header>List of Accompanying Spouse/Person</header>
    <div class="main">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Salutation</th>
                    <th>Full Name</th>
                    <th>Mobile Number</th>
                    <th>Country</th>
                    <th>Arrival Flight Number</th>
                    <th>Departure Flight Number</th>
                    <th>Name of Attending Delegate</th>
                    <th>Form Created</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accompanying as $accompany)
                <tr>
                    <td>{{ $accompany->salutation }}</td>
                    <td><b class="">{{ $accompany->first_name }} {{ $accompany->last_name }}</b></td>
                    <td>{{ $accompany->mobile }}</td>
                    <td>{{ $accompany->country }}</td>
                    <td>{{ $accompany->arrival_flight_num }}</td>
                    <td>{{ $accompany->departure_flight_num }}</td>
                    <td><b class="text-sky-600">{{ $accompany->name_of_delegate }}</b></td>
                    <td>{{ $accompany->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $accompanying->links() }}
    </div>
</div>

@endsection
