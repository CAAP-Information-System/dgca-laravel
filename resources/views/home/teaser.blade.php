<link rel="stylesheet" type="text/css" href="{{ url('css/main/teaser.css') }}">
<div class="teaser-container">
    <main class="teaser-content">
        <div class="teaser-details">
            <header class="teaser-details-header">DGCA 59 <br><span>2024 Trailer</span> </header>
            <p class="teaser-message">
                As the upcoming DGCA Conference approaches, the Philippines invites you to join us in shaping a sustainable future for aviation! Get ready to witness the pinnacle of the DGCA's event, offering a glimpse into what's in store this coming October 2024. Watch our teaser trailer and join us in our excitement!
                <br><br>
                Ensure you register with us before the conference begins. For further information, please refer to our conference bulletin available at the link below:
            </p>
            <div class="teaser-btns-ctn">
                <a href="{{ route('bulletin') }}" class="teaser-btn">See Our Bulletin <i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>

        <!-- REMOVE COMMENT IF VIDEO IS NOT AVAILABLE -->
        <!-- <div class="flex justify-center items-center flex-col">
            <lord-icon src="https://cdn.lordicon.com/mpzsxzrz.json" trigger="loop" style="width:250px;height:250px">
            </lord-icon>
            <header class="text-3xl font-semibold text-center">Teaser video will be available soon!</header>
        </div> -->
        <!-- <iframe  class="teaser-link" src="https://onedrive.live.com/embed?resid=C872D43F2ABC4BE8%2138592&authkey=!AF58Tsv-YiRVKvc" width="320" height="320" frameborder="0" scrolling="no" allowfullscreen></iframe> -->
            <iframe class="teaser-link" src="https://www.youtube.com/embed/rys_LvlFw4A?autoplay=1&mute=1" title="DGCA 59 2024 Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </main>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var teaserVideo = document.getElementById('teaserVideo');

        teaserVideo.addEventListener('click', function() {
            teaserVideo.play();
        });
    });
</script>
