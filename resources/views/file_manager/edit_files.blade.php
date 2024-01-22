@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/edit_file.css') }}">
<div class="container">
    <header class="page-header">Edit File Name</header>
    <div class="edit-file-main">
        <form method="POST" action="{{ route('updateFileName', ['id' => $files->id]) }}" class="edit-form">
            @csrf
            <div class="mb-3">
                <label for="" class="edit-label">File Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $files->name }}">
            </div>
            <div class="mb-3">
                <label for="" class="edit-label">Owner</label>
                <input type="text" class="form-control" id="owner" name="owner" value="{{ $files->owner }}" readonly>
            </div>
            <div class="mb-3">
                <label for="" class="edit-label">Country Representing</label>
                <input type="text" class="form-control" id="owner" name="owner" value="{{ $user->country }}" readonly>
            </div>
            <div class="mb-3">
                <label for="" class="edit-label">Document Status</label>
                <select class="form-select" id="status" name="doc_status">
                    <option value="Approved" {{ $files->doc_status == 'Approved' ? 'selected' : '' }}>Approved</option>
                    <option value="Pending" {{ $files->doc_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                </select>
            </div>

            <button type="submit" class="button-5">Update Document</button>
        </form>
        <div class="guide-col">
            <header class="edit-guide">Guide:</header>
            <ul class="guide-content">
                <li>Ensure the file name adheres to the designated conference title format.</li>
                <li>File Name should be in full uppercase text form.</li>
                <li>Avoid using the given special characters i.e. (!@#$%^&*:"|<>?_+")</li>
                <li>Verify the accountability of the individual uploading the document.</li>
            </ul>
        </div>
    </div>
</div>

@endsection
