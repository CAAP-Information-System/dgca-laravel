@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/file_manager/view_files.css') }}">
<div class="container">
<header class="page-header">My Documents</header>
    <div class="wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>Owner</th>
                    <th>Upload Date</th>
                    <th>Size</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($files as $file)
                <tr>
                    <td style="width: 50%;">
                        <a class="file-name" href="{{ route('file.view', $file->id) }}" download>{{ $file->name }}</a>
                    </td>
                    <td>{{ $file->owner ?? 'Unknown' }}</td>
                    <td>{{ $file->upload_date }}</td>
                    <td>
                        @php
                        echo $file->size ? \App\Http\Controllers\FileController::formatFileSize($file->size) : 'N/A';
                        @endphp
                    </td>
                    <td>
                        <form action="{{ route('file.delete', $file->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('file.view', $file->id) }}" class="btn btn-primary" target="_blank">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
