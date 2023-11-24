@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/gallery.css') }}">
<div class="container">
    <header class="gallery-header">The Gallery</header>
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
