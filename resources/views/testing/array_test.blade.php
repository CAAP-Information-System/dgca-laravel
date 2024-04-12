@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/.css') }}">

<div class="container">
    <section>
        <h1>Dietary Restrictions Display</h1>

        <ul>
            @foreach ($users as $user)
            <li>
                <strong>User:</strong> {{ $user->first_name }} {{ $user->last_name }}
                <br>
                <strong>Dietary Restrictions:</strong>
                <ul>
                    @foreach (json_decode($user->dietary_restrictions) as $restriction)
                    <li>{{ $restriction }}</li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </section>

    <section>
        <h1>Accompanying Person Display</h1>

        <ul>
            @foreach ($users as $user)
            <li>
                <strong>Delegate:</strong> {{ $user->first_name }} {{ $user->last_name }}
                <br>
                <strong>Accompanying Person Details:</strong>
                <ul>
                    @if (!is_null($user->accomp_fname) && !is_null($user->accomp_lname))
                    @php
                    $accomp_fnames = json_decode($user->accomp_fname);
                    $accomp_lnames = json_decode($user->accomp_lname);
                    @endphp
                    @for ($i = 0; $i < count($accomp_fnames); $i++) <li>{{ $accomp_fnames[$i] }} {{ $accomp_lnames[$i] }}
            </li>
            @endfor
            @else
            <li>No accompanying persons</li>
            @endif
        </ul>
        </li>
        @endforeach
        </ul>
    </section>


</div>

@endsection
