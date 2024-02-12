@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/media/edit-article.css') }}">
<div class="container">
    <header class="edit-article-hdr">Edit News Article</header>

    <form action="{{ route('update-news', $newspost->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="news_title" id="title" class="form-control" value="{{ $newspost->news_title }}">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="news_description" id="description" class="form-control summernote">{{ $newspost->news_description }}</textarea>
        </div>

        <button type="submit" class="update-btn">Update</button>
        <a href="{{ route('media-dashboard') }}" class="back-btn">Go Back</a>
    </form>
</div>
<script src="{{ asset('js/media/edit.js') }}"></script>
@endsection
