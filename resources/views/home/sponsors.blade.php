@if(!empty($sponsorsJSON))
@php
$sponsors = json_decode($sponsorsJSON, true);
@endphp
@if(isset($sponsors['sponsors']) && !empty($sponsors['sponsors']))
<section class="">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center md:text-4xl">You’ll be in good company</h2>
        @foreach($sponsors['sponsors'] as $sponsor)
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset($sponsor['image']) }}" alt="{{ $sponsor['name'] }}" class="sponsor-image">
                <p class="sponsor-name">{{ $sponsor['name'] }}</p>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endif
@endif
