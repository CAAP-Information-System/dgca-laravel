@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/file_manager/create_file.css') }}">
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <header class="page-header">Submission of Conference Papers</header>
            <p class="subtitle">Kindly submit your conference paper(s)/document and indicate the appropriate category for placement. Subsequently, the administrator will conduct an initial verification of your document before officially featuring it on the designated page.</p>

            <div class="reminders">
                <header class="subheader">Important Reminders:</header>
                <ol>
                    <li>Ensure a comprehensive review of your document prior to submission.</li>
                    <li>Documents for revision will be accepted for resubmission.</li>
                </ol>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data" id="uploadForm">
                @csrf
                <div class="form-group">
                    <label for="file">Select Document:</label>
                    <div class="custom-file">
                        <input type="file" name="file" id="file" accept=".doc, .pdf, .xls, .xlsx, .ppt, .pptx" class="custom-file-input" onchange="updateFileName()" required>
                        <label class="custom-file-label" for="file">Choose DOC or PDF File</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file_category">Select Category Placement:</label>
                    <div class="input-group">
                        <select class="custom-select" id="file_category" name="file_category" required>
                            <option value="-- Select Option --" disabled selected>-- Select Option -- </option>
                            <option value="Agenda">Agenda</option>
                            <option value="Programme">Order of Business</option>
                            <option value="Programme">Programme</option>
                            <option value="Programme">Discussion</option>
                            <option value="Programme">Information</option>
                        </select>
                    </div>
                </div>

                <div class="form-group input-group-btn">
                    <button type="submit" class="button-18">Upload Document</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function updateFileName() {
        var fileName = document.getElementById('file').value.split('\\').pop();
        var label = document.querySelector('.custom-file-label');
        label.innerHTML = fileName ? fileName : 'Choose DOC or PDF File';
    }
</script>
@endsection
