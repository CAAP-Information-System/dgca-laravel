@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/news/create-news.css') }}">
<!-- <section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">News and Updates</header>
        </div>
        <div class="dgca-title">
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-container">
                <header class="register-card-header">Register News Article</header>
                <div class="register-news-reminder">
                    <header class="register-reminder-header">Reminders:</header>
                    <p class="register-reminder-message">The posting feature can only be accessed by the Marketing and Advertisement Committee.</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register-news') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="news_title" class="form-label">{{ __('News Title') }}</label>
                            <input id="news_title" type="text" class="form-control form-input @error('news_title') is-invalid @enderror" name="news_title" value="{{ old('news_title') }}" required autofocus>
                            @error('news_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="news_description" class="form-label">{{ __('News Description') }}</label>
                            <textarea id="news_description" class="form-control form-input @error('news_description') is-invalid @enderror" name="news_description" required>{{ old('news_description') }}</textarea>
                            @error('news_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="caption" class="form-label">{{ __('Image Caption') }}</label>
                            <input id="caption" class="form-control form-input @error('caption') is-invalid @enderror" name="caption" required>{{ old('caption') }}</input>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="news_image" class="form-label">{{ __('News Image') }}</label>
                            <div>
                                <img id="imagePreview" src="#" alt="News Image Preview" style="display: none; width: 100px; height: auto;">
                            </div>
                            <input id="news_image" type="file" class="form-control-file form-input @error('news_image') is-invalid @enderror" name="news_image" required onchange="previewImage(event)">
                            @error('news_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary form-submit-btn">
                                <i class="fa-solid fa-paper-plane mr-2"></i>
                                Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
