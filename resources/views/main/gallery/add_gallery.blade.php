@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/gallery/add_gallery.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-container">
                <header class="register-card-header">Create Gallery Post</header>
                <div class="register-news-reminder">
                    <header class="register-reminder-header">Notes:</header>
                    <p class="register-reminder-message">
                        The posting feature can only be accessed by the Marketing and Advertisement Committee.
                    </p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register-image') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="img_title" class="form-label">Image Title</label>
                            <input id="img_title" type="text" class="form-control form-input @error('img_title') is-invalid @enderror" name="img_title" value="{{ old('img_title') }}" required autofocus>
                            @error('img_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="img_file" class="form-label">Upload Image</label>
                            <div>
                                <img id="imagePreview" src="#" alt="Image Uploaded" style="display: none; width: 100px; height: auto;">
                            </div>
                            <input id="img_file" type="file" accept="image/jpeg,image/jpg,image/png" class="form-control-file form-input @error('img_file') is-invalid @enderror" name="img_file" required onchange="previewImage(event)">
                            @error('img_file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary form-submit-btn">
                                <i class="fa-solid fa-paper-plane mr-2"></i>
                                Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/media/edit.js') }}"></script>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
