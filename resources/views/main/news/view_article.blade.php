@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/news/article.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">Article No. {{ $article->id }}</header>
        </div>
        <div class="dgca-title">
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <img src="{{ asset('storage/news_updates/' . $article->news_image) }}" alt="News Image" class="news-img">
    <div class="img-caption">{{ $article->caption }}</div>
    <header class="article-header">{{ $article->news_title }}</header>
    <div class="article-published"><strong>Date Published:</strong>&nbsp;&nbsp;{{ $article->date_uploaded }}</div>
    <p class="article-content">{{ $article->news_description }}</p>
</div>

@endsection
