@extends('layouts.app')
<title>@yield('title', 'News Page-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/news/news.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">News & Updates</header>
        </div>
        <div class="dgca-title">
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <main class="my-5">
        <div class="container">
            <section class="text-center">
                <header class="news-main-header">Latest Posts</header>

                <div class="row">
                    @foreach($newspost as $post)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay">
                                <img src="{{ asset('storage/news_updates/' . $post->news_image) }}" class="img-fluid" />

                            </div>
                            <div class="card-body">
                                <a href="{{ route('article', ['id' => $post->id]) }}" class="news-title" style="    text-align: justify;">{{ $post->news_title }}</a>
                                <!-- <p class="news-card-text">{!!$post->news_description!!}</p> -->

                            </div>
                            <div class="read-more-container">
                                    <a href="{{ route('article', ['id' => $post->id]) }}" class="read-button">Read More</a>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>


    </main>
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</div>

@endsection
