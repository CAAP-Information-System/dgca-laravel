@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/gallery.css') }}">
<section class="head-banner">
    <img src="{{ asset('img/conference-room.png') }}" alt="conference-room" class="banner-bg">
    <main class="banner-content">
        <div class="banner-text">
            <header class="banner-title">Gallery</header>
        </div>
        <div class="dgca-title">
            <!-- <header class="welcome-title">Welcome</header> -->
            <header class="title">59th Conference of Director Generals</header>
            <header class="title-sub">Philippines 2024</header>
        </div>
    </main>
</section>
<div class="container">
    <div style="margin-top: 5vh;"></div>
    <section class="ag-photo-gallery-block">
        <div class="ag-format-container">
            <div class="ag-photo-gallery_list">
                <div class="ag-photo-gallery_item ag-photo-gallery_item__wide">
                    <figure class="ag-photo-gallery_figure">
                        <a href="#" data-fancybox="gallery">
                            <img src="{{ asset('img/dgca/dgca1.jpg') }}" class="ag-photo-gallery_img" alt="" />
                        </a>
                    </figure>
                </div>

                <div class="ag-photo-gallery_item">
                    <figure class="ag-photo-gallery_figure">
                        <a href="#" data-fancybox="gallery">
                            <img src="{{ asset('img/dgca/dgca2.jpg') }}" class="ag-photo-gallery_img" alt="" />
                        </a>
                    </figure>
                </div>

                <div class="ag-photo-gallery_item">
                    <figure class="ag-photo-gallery_figure">
                        <a href="#" data-fancybox="gallery">
                            <img src="{{ asset('img/dgca/dgca3.jpg') }}" class="ag-photo-gallery_img" alt="" />
                        </a>
                    </figure>
                </div>

                <div class="ag-photo-gallery_item">
                    <figure class="ag-photo-gallery_figure">
                        <a href="#" data-fancybox="gallery">
                            <img src="{{ asset('img/dgca/dgca4.jpg') }}" class="ag-photo-gallery_img" alt="" />
                        </a>
                    </figure>
                </div>



            </div>
        </div>
    </section>
</div>
<script>
    (function($) {
        $(function() {



        });
    })(jQuery);
</script>
@endsection
