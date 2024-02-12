@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/media/dashboard.css') }}">
<div class="container">
    <header class="md-header">News Dashboard</header>

    <section class="md-table-section">
        <table class="table table-responsive">
            <thead class="bg-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Date Uploaded</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach($newspost as $post)
            <tbody>
                <tr>
                    <th style="width: 40%;" scope="row">{{ $post->news_title }}</th>
                    <td style="width: 10%;">{{ $post->date_uploaded }}</td>
                    <td style="width: 10%;" colspan="3">
                        <a href="{{ route('edit-news', ['id' => $post ->id]) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('article', ['id' => $post->id]) }}" class="btn btn-warning">View</a>
                        <form action="{{ route('delete-news', ['id' => $post->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this news post?')">Delete</button>
                        </form>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </section>
</div>

@endsection
