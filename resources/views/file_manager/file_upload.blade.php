@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0">File Inventory</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data" id="uploadForm">

                            @csrf
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" name="file" id="file" accept=".doc, .pdf" class="custom-file-input" onchange="updateFileName()">
                                    <label class="custom-file-label" for="file">Choose DOC or PDF File</label>
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </form>


                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th>File Name</th>
                                    <th>Owner</th>
                                    <th>Upload Date</th>
                                    <th>Size</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                    <tr>
                                        <td>
                                            <a href="{{ route('file.view', $file->id) }}" target="_blank">{{ $file->name }}</a>
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
                                            <a href="{{ route('file.view', $file->id) }}" class="btn btn-info" target="_blank">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
