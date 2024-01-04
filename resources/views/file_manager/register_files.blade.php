@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/file_upload.css') }}">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0">File Inventory</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data" id="uploadForm">

                            @csrf
                            <div class="input-group ">
                                <div class="custom-file">
                                    <input type="file" name="file" id="file" accept=".doc, .pdf" class="custom-file-input" onchange="updateFileName()">
                                    <label class="custom-file-label" for="file">Choose DOC or PDF File</label>
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
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
