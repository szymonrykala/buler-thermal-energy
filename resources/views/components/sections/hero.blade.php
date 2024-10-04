<!-- Sekcja tytułowa -->
<section class="hero-section vh10">
    <img src="{{ $img }}" alt="tytułowy obraz strony">
    <div class="hero-content text-center p-4 py-5">
        <div class="slide-up-animation">
            {{ $slot }}
        </div>
    </div>
</section>
