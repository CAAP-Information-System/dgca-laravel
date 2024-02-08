@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/create-news.css') }}">
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
            <div class="card">
                <div class="card-header">{{ __('Register News') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register-news') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="news_title" class="col-md-4 col-form-label text-md-right">{{ __('News Title') }}</label>

                            <div class="col-md-6">
                                <input id="news_title" type="text" class="form-control @error('news_title') is-invalid @enderror" name="news_title" value="{{ old('news_title') }}" required autofocus>

                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="news_description" class="col-md-4 col-form-label text-md-right">{{ __('News Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="news_description" class="form-control @error('news_description') is-invalid @enderror" name="news_description" required>{{ old('news_description') }}</textarea>

                                @error('news_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="news_image" class="col-md-4 col-form-label text-md-right">{{ __('News Image') }}</label>

                            <div class="col-md-6">
                                <input id="news_image" type="file" class="form-control-file @error('news_image') is-invalid @enderror" name="news_image" required>

                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
