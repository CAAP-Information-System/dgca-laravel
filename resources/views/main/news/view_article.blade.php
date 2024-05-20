@extends('layouts.app')
<title>@yield('title', 'News Page-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/news/article.css') }}">
@include('main.banner', ['bannerTitle' => 'Article No: ' . $article->id])


<div class="container">
    <main class="main-content">
        <img src="{{ asset('storage/news/articles/' . $article->news_image) }}" alt="News Image" class="news-img">
        <div class="img-caption">
            {{ $article->caption }}
        </div>
        <header class="article-header">{{ $article->news_title }}</header>
        <div class="article-published">
            <strong>Date Published:</strong>&nbsp;&nbsp;{{ $article->date_uploaded }}
        </div>
        <p class="article-content">{!!$article->news_description !!}</p>
        <div class="pt-5">
            <a href="{{ route('news') }}" class="p-3 text-lg w-full rounded-full border border-sky-600 bg-transparent md:w-auto hover:bg-sky-600 transition ease-in">Return</a>
        </div>

    </main>
</div>


@endsection
