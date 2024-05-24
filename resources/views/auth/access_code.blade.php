@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/auth/access_code.css') }}">
<main class="min-h-screen flex items-start justify-center  px-4 sm:px-6 lg:px-8">
    <form class="mt-8 space-y-6" action="{{ route('verify-access') }}" method="POST">
        @csrf
        <div class="rounded-md shadow-sm -space-y-px">
            <label class="text-xl text-center block mb-2" for="access_code">Access Code:</label>
            <p class="mb-4 text-center">Kindly use the access code provided by the Civil Aviation Authority of the Philippines</p>
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" type="text" id="access_code" name="access_code" required>
        </div>
        <div>
            <button class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">Submit</button>
        </div>
    </form>
</main>
@endsection
