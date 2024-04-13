@extends('layouts.app')
<title>@yield('title', 'News Page-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/news/news.css') }}">

@include('main.banner', ['bannerTitle' => 'News & Updates'])


<div class="container">
    <main class="my-5">
        <div class="container">
            @if($newspost->count() > 0)
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
                                <a href="{{ route('article', ['id' => $post->id]) }}" class="news-card-title">{{ $post->news_title }}</a>

                            </div>
                            <div class="read-more-container">
                                <a href="{{ route('article', ['id' => $post->id]) }}" class="read-button">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            @else
            @include('http-message.no_content')
            @endif

    </main>
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</div>

@endsection
