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
                        <select class="custom-select" id="file_category" name="file_category" required onchange="toggleAgendaSections()">
                            <option value="-- Select Option --" disabled selected>-- Select Option -- </option>
                            <option value="Agenda">Agenda</option>
                            <option value="Order of Business">Order of Business</option>
                            <option value="Programme">Programme</option>
                            <option value="Discussion">Discussion</option>
                            <option value="Information">Information</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" id="discussion_agenda_section" style="display: none;">
                    <label for="discussion_files">Select Discussion Agenda:</label>
                    <p class="reminder">If the file is for the Discussion Category, kindly select the appropriate agenda type:</p>
                    <div class="input-group">
                        <select class="custom-select" id="discussion_files" name="discussion_agenda" required>
                            <option value="-- Select Option --" disabled selected>-- Select Option -- </option>
                            <option value="Agenda 1">Agenda 1: Theme Topic</option>
                            <option value="Agenda 2">Agenda 2: Review of Action Items arising from the previous Conference</option>
                            <option value="Agenda 3">Agenda 3: Aviation Safety</option>
                            <option value="Agenda 4">Agenda 4: Air Navigation</option>
                            <option value="Agenda 5">Agenda 5: Aviation Security and Facilitation</option>
                            <option value="Agenda 6">Agenda 6: Economic Development of Air Transport</option>
                            <option value="Agenda 7">Agenda 7: Aviation and Environment</option>
                            <option value="Agenda 8">Agenda 8: Capacity Development and Implementation</option>
                            <option value="Agenda 9a">Agenda Item 9a: Ratification of International Air Law Treaties</option>
                            <option value="Agenda 9b">Agenda Item 9b: Updates</option>
                            <option value="Agenda 10a">Agenda Item 10 a: Any Other Matters</option>
                            <option value="Agenda 10b">Agenda Item 10 b: Hosting Offer and Theme Topic for the forthcoming Conference(s) of APAC DGCA</option>
                            <option value="Agenda 10c">Agenda Item 10 c: Endorsement of Action Items arising from the present Conference</option>
                            <option value="Presentation/Video">Presentation/Video</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" id="information_agenda_section" style="display: none;">
                    <label for="information_files">Select Information Agenda:</label>
                    <p class="reminder">If the file is for the Information Category, kindly select the appropriate agenda type:</p>
                    <div class="input-group">
                        <select class="custom-select" id="information_files" name="information_agenda" required>
                            <option value="-- Select Option --" disabled selected>-- Select Option -- </option>
                            <option value="Agenda 1">Agenda 1: Theme Topic</option>
                            <option value="Agenda 2">Agenda 2: Review of Action Items arising from the previous Conference</option>
                            <option value="Agenda 3">Agenda 3: Aviation Safety</option>
                            <option value="Agenda 4">Agenda 4: Air Navigation</option>
                            <option value="Agenda 5">Agenda 5: Aviation Security and Facilitation</option>
                            <option value="Agenda 6">Agenda 6: Economic Development of Air Transport</option>
                            <option value="Agenda 7">Agenda 7: Aviation and Environment</option>
                            <option value="Agenda 8">Agenda 8: Capacity Development and Implementation</option>
                            <option value="Agenda 9a">Agenda Item 9a: Ratification of International Air Law Treaties</option>
                            <option value="Agenda 9b">Agenda Item 9b: Updates</option>
                            <option value="Agenda 10a">Agenda Item 10 a: Any Other Matters</option>
                            <option value="Agenda 10b">Agenda Item 10 b: Hosting Offer and Theme Topic for the forthcoming Conference(s) of APAC DGCA</option>
                            <option value="Agenda 10c">Agenda Item 10 c: Endorsement of Action Items arising from the present Conference</option>
                            <option value="Presentation/Video">Presentation/Video</option>
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

    function toggleAgendaSections() {
        var fileCategory = document.getElementById('file_category').value;
        var discussionAgendaSection = document.getElementById('discussion_agenda_section');
        var informationAgendaSection = document.getElementById('information_agenda_section');

        if (fileCategory === 'Discussion') {
            discussionAgendaSection.style.display = 'block';
            informationAgendaSection.style.display = 'none';
        } else if (fileCategory === 'Information') {
            discussionAgendaSection.style.display = 'none';
            informationAgendaSection.style.display = 'block';
        } else {
            discussionAgendaSection.style.display = 'none';
            informationAgendaSection.style.display = 'none';
        }
    }
</script>
@endsection
