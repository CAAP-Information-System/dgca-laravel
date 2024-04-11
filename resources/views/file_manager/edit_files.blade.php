@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/edit_file.css') }}">
<div class="container">
    <header class="page-header">Document Overview</header>
    <div class="edit-file-main">
        <!-- <a href="{{ asset('storage/approval_docs/' . $user->approval_doc) }}" target="_blank" class="card-link">
            <div class="file-card">
                <img src="{{ asset('img/icon/pdf-icon.png') }}" alt="pdf-icon" class="file-icon-img">
                <p class="card-name">Letter of Credentials</p>
            </div>
        </a> -->
        <form method="POST" action="{{ route('updateFileName', ['id' => $files->id]) }}" class="edit-form">
            @csrf
            <div class="file_detail_cont">
                <div class="file_submitter_info">
                    <div class="mb-3">
                        <label for="" class="edit-label">Document Title</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $files->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="edit-label">Owner</label>
                        <p class="readable_input">{{ $files->owner }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="edit-label">Organization</label>
                        <p class="readable_input">{{ $user->organization }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="edit-label">Country Representing</label>
                        <p class="readable_input">{{ $user->country }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="edit-label">Date Uploaded</label>
                        <p class="readable_input">{{ $files->upload_date }}</p>
                    </div>
                </div>

                <div class="file_main_info">
                    <div class="mb-3">
                        @if ($files->file_category == 'Discussion')
                        <label for="" class="edit-label">Paper Number</label>
                        <input type="text" class="form-control" id="name" name="discussion_agenda" value="{{ $files->paper_no }}">
                        @endif
                        @if ($files->file_category == 'Information')
                        <label for="" class="edit-label">Paper Number</label>
                        <input type="text" class="form-control" id="name" name="discussion_agenda" value="{{ $files->paper_no }}">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="" class="edit-label">Document Category</label>
                        <input type="text" class="form-control" id="name" name="file_category" value="{{ $files->file_category }}" readonly>
                    </div>
                    <div class="mb-3">
                        @if ($files->file_category == 'Discussion')
                        <label for="" class="edit-label">Agenda Type</label>
                        <input type="text" class="form-control" id="name" name="discussion_agenda" value="{{ $files->discussion_agenda }}" readonly>
                        @elseif ($files->file_category == 'Information')
                        <label for="" class="edit-label">Agenda Type</label>
                        <input type="text" class="form-control" id="name" name="information_agenda" value="{{ $files->information_agenda }}" readonly>
                        @endif
                    </div>
                </div>
            </div>
            <div style="margin-top: 6vh;"></div>
            <button type="submit" class="update-file-btn">Update Document</button>
        </form>

    </div>
</div>

@endsection
