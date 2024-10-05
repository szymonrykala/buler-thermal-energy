@php
    if (!isset($dim)) {
        $dim = 1;
    }
@endphp

<section class="hero-section vh10">
    <img src="{{ $img }}" alt="tytułowy obraz strony">
    <div class="hero-content text-center p-4 py-5 hero-content--dim{{ $dim }}">
        <div class="slide-up-animation">
            {{ $slot }}
        </div>
    </div>
</section>
