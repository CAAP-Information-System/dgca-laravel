@extends('layouts.app')
<title>@yield('title', 'Wrong Access Code')</title>
@section('content')
<div class="container mx-auto px-4 py-16" style="color: #3b3b3b;">
    <main class="flex gap-24 items-center justify-center flex-wrap">
        <img src="{{ asset('img/error/access_denied.svg') }}" alt="restricted access" class="w-80 h-auto">
        <div class="w-full sm:w-2/4">
            <header class="text-5xl font-bold mt-4">Wrong Access Code</header>
            <div class="mt-4 text-regular">
                <p>
                   It seems you've entered the wrong access code.
                </p>
                <p class="mt-8">
                    If you have any questions or need further assistance, feel free to contact our registration team at <a href="#" class="text-blue-500 underline">dgca59_registration@caap.gov.ph</a>
                </p>
                <a href="{{ url('/') }}" class="inline-block rounded-full p-3 bg-sky-500 text-white mt-8 transition duration-200 ease-in-out hover:bg-sky-500">Go Home</a>
            </div>
        </div>
    </main>
</div>
@endsection
