@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/file_upload.css') }}">
<header class="page-header">Files Upload</header>
<div class="main">
    <a class="button-24" href="{{ route('create.file') }}"> Register New Document </a>
    <table class="table ">
        <thead>
            <tr>
                <th>Document Name</th>
                <th>Uploaded by</th>
                <th>Organization</th>
                <th>Category</th>
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
                <td>{{ $owner->organization }}</td>
                <td>{{ $file->file_category }}</td>
                <td style="width: 10%;">{{ $file->upload_date }}</td>
                <td style="width: 10%;">
                    @php
                    echo $file->size ? \App\Http\Controllers\FileController::formatFileSize($file->size) : 'N/A';
                    @endphp
                </td>
                <td class="mt-2" colspan="3">
                    <a href="{{ route('editFileName', $file->id) }}" class="btn btn-warning">Edit File</a>
                    <a href="{{ route('download.file', ['file' => $file]) }}" class="btn btn-primary">Download</a>
                    <form action="{{ route('file.delete', ['id' => $file->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Remove</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $files->links() }}
</div>
@endsection
