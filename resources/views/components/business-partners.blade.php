<section class="container py-5">
    <div class="row text-center">
        <h2 class="col-12">Dobra współpraca to podstawa!</h2>
        <p class="col-12 col-md-10 m-auto">Nasza firma współpracuje wyłącznie ze sprawdzonymi i innowacyjnymi
            liderami w branży. Dzięki temu możemy oferować naszym klientom
            rozwiązania o
            najwyższej jakości, zapewniające niezawodność, efektywność energetyczną i nowoczesne technologie.
        </p>
    </div>

    <div class="row mt-5 justify-content-center gy-3">

        @foreach ($partners as $partner)
            <div class="col-12 col-md">
                <section class="hovercard {{ $loop->count === 1 ? 'hovercard--side-open' : '' }}">
                    <img class="hovercard__img hovercard__img--contain p-5" src="{{ asset('images/' . $partner->logo) }}"
                        alt="logo {{ $partner->name }}">
                    {{-- <div class="hovercard__title p-3">
                        <h3 class="--colored">{{ $partner->name }}</h3>

                    </div> --}}
                    <div class="hovercard__content p-3">
                        <h3 class="--colored">{{ $partner->name }}</h3>
                        <p>{{ $partner->description }}</p>
                        <a rel="nofollow" target="_blank" href="{{ $partner->link }}">
                            Więcej o {{ $partner->name }}
                        </a>
                    </div>
                </section>
            </div>
        @endforeach

    </div>
</section>
