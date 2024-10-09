<section class="container-fluid">
    <div class="row">
        <div id="heatpumpsCarousel" data-bs-ride="carousel" class="col-12 carousel carousel-dark carousel-fade slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heatpumpsCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heatpumpsCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heatpumpsCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block hero-content--dim3">
                        <img src="{{ asset('images/architect-guy.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h1 class="h1-title">First slide label</h1>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/fotovoltaic-panel.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1 class="h1-title">Second slide label</h1>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/couple-in-grass.png') }}" class="w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1 class="h1-title">Third slide label</h1>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
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
