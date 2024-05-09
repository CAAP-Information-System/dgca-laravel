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
        <video id="teaserVideo" class="teaser-link" controls>
            <source src="https://drive.google.com/uc?export=download&id=1Jc_ecFHH4qBllmkz1dP7M1_nBu1i1WCo" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </main>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var teaserVideo = document.getElementById('teaserVideo');

        teaserVideo.addEventListener('click', function () {
            teaserVideo.play();
        });
    });
</script>
