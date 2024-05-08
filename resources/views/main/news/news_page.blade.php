@extends('layouts.app')
<title>@yield('title', 'News Page-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/news/news.css') }}">

@include('main.banner', ['bannerTitle' => 'News & Updates'])

<div class="flex">
    @if($newspost->count() > 0)
    @foreach($newspost as $post)
    <div class="mx-auto px-4 py-8 max-w-xl my-20">
        <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide">
            <div class="md:flex-shrink-0">
                <img src="{{ asset('storage/news/articles/' . $post->news_image) }}" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none object-contain">

            </div>
            <div class="px-4 py-2 mt-2">
                <a href="{{ route('article', ['id' => $post->id]) }}" class="mb-4 font-bold text-2xl text-justify text-gray-800">{{ $post->news_title }}</a>
                <p class="text-sm text-gray-700 px-2 mr-1 mt-2">
                    {!!$post->news_description !!}
                </p>
                <div class="flex items-center justify-between mt-3">
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Show More</a>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    @else
    @include('http-message.no_content')
    @endif
</div>


@endsection
