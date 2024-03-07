@extends('layouts.app')
<title>@yield('title', 'Gallery-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/gallery/view_gallery.css') }}">
@include('main.banner', ['bannerTitle' => 'Gallery'])

<div class="container">

<!-- Gallery -->
<div class="row">
    @foreach($galleryposts as $gallery)
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="{{ asset('storage/gallery/' . $gallery->img_file) }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>
  @endforeach
</div>
<!-- Gallery -->


</div>
<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
@endsection
