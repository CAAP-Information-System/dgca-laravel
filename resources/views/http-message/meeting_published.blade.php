@extends('layouts.app')
<title>@yield('title', 'Meeting Published')</title>
@section('content')

<div class="container">

    <section class="bg-white">
        <div class="md:flex md:gap-10 md:justify-center md:items-center" style="color: #3b3b3b;">
            <div>
                <header class="text-left lg:text-left text-3xl md:text-5xl font-bold">Meeting Published</header>
                <p class="mt-3 text-lg text-center md:text-left lg:text-left">Reservation has been published, click here to see <a class="bg-blue-100 text-blue-800 text-regular font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-white" href="{{ route('meeting-room') }}">Side Meetings Page</a></p>
            </div>
            <div>
                <img src="{{ asset('img/error/file_uploaded.svg') }}" alt="restricted access" class="w-96 object-contain">
            </div>
        </div>
    </section>
</div>

@endsection
