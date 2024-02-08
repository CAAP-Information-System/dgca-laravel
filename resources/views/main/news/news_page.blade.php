@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/news.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">News and Updates</header>
        </div>
        <div class="dgca-title">
            <!-- <header class="welcome-title">Welcome</header> -->
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
                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="{{ asset('storage/news_updates/' . $post->news_image) }}" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="news-card-title">{{ $post->news_title }}</h5>
                                <p class="news-card-text">{{ $post->news_description }}</p>
                                <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Read</a>
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
