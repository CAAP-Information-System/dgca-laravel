@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/file_upload.css') }}">
<div class="container">
    <header class="page-header">Files Upload</header>
    <div class="main">
        <a class="btn btn-warning" href="{{ route('registerDocument') }}"> Register Document </a>
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th>File Name</th>
                    <th>Uploaded by</th>
                    <th>Upload Date</th>
                    <th>Size</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($files as $file)
                <tr>
                    <td style="font-weight: bold;">{{ $file->name }}</td>
                    <td>{{ $file->owner }}</td>
                    <td>{{ $file->upload_date }}</td>
                    <td>
                        @php
                        echo $file->size ? \App\Http\Controllers\FileController::formatFileSize($file->size) : 'N/A';
                        @endphp
                    </td>
                    <td>
                        <a href="{{ route('download.file', ['file' => $file]) }}" class="btn btn-primary">Download</a>
                        <!-- Add other actions/buttons as needed -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
