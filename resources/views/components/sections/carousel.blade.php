<section class="container-fluid">
    <div class="row">
        <div id="heatpumpsCarousel" data-bs-ride="carousel" class="col-12 p-0 carousel carousel-dark carousel-fade slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heatpumpsCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heatpumpsCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heatpumpsCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                @foreach ($entries as $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ $item->img }}" class="d-block w-100 img--cover" alt="{{ $item->title }}">
                        <div class="carousel-caption d-md-block">
                            <h1 class="h1-title text-shadow-5">{{ $item->title }}</h1>
                            <p class="h4">{{ $item->subtitle }}</p>
                            @if (isset($item->link) && isset($item->link))
                                <a role="button" href="{{ $item->link }}" class="custom-btn custom-btn--contained">
                                    {{ $item->linkText }}
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heatpumpsCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heatpumpsCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>
