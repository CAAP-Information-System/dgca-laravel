<main class="notice-container">

    @foreach($newspost as $post)
    <div class="notice-card">
        <img src="{{ asset('storage/news_updates/' . $post->news_image) }}" alt="notice image" class="notice-img">
        <div class="notice-content">
            <a href="#" class="notice-title">{{ $post->news_title }}</a>
            <div class="date">{{ $post->date_uploaded }}</div>
            <p class="notice-description">
                {{ $post->news_description }}
            </p>
        </div>

    </div>
    @endforeach

</main>
