<x-layout title="Buler Thermal Energy - Pompy Ciepła"
    short-description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji"
    description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków."
    keywords="Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler"
    url="https://bulerenergy.pl">


    <x-sections.hero img="{{ asset('/images/soil-plant-hand.jpg') }}">
        <h1 class="--bald h1-title text-shadow-5">Gruntowe Pompy Ciepła</h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a role="button" href="#formularz-ofertowy"
            class="custom-btn custom-btn--contained custom-btn--l center-block">formularz
            ofertowy</a>
    </x-sections.hero>


    <section class="container py-5">
        <div class="row gy-5">
            <div class="col-12">
                <div class="custom-card__container">
                    <a class="custom-card" href="{{ route('heatpumps.ground.direct-evaporation') }}"
                        aria-roledescription="button" role="button">
                        <span class="custom-card__icon">
                            <x-icons.heatpump />
                        </span>
                        <p class="custom-card__caption">Bezpośrednie parowanie</p>
                    </a>
                    <a class="custom-card" href="{{ route('heatpumps.ground.glycol') }}" aria-roledescription="button"
                        role="button">
                        <span class="custom-card__icon">
                            <x-icons.heatpump-balance />
                        </span>
                        <p class="custom-card__caption">Glikol</p>
                    </a>
                    <a class="custom-card" href="{{ route('heatpumps.ground.water') }}" aria-roledescription="button"
                        role="button">
                        <span class="custom-card__icon">
                            <x-icons.heatpump-balance />
                        </span>
                        <p class="custom-card__caption">Woda - Woda</p>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <p class="--cool-font text-center">
                    Zachęcamy do składania zapytań za pomocą formularza
                </p>
                <a role="button" href="#formularz-ofertowy"
                    class="custom-btn custom-btn--contained center-block">formularz
                    ofertowy</a>
            </div>
        </div>
    </section>

    @env('local')
    <section class="container vh-5">
        <div class="row py-5">
            <img class="col-12 col-lg-6" src="{{ asset('images/soil-plant-hand.jpg') }}" />
            <div class="col-12 col-lg-6">
                <h2 class="h3 col-12 text-center">
                    Jak działają gruntowe pompy ciepła?
                </h2>
                <p class="offset-md-1 col-12 col-md-10 ">
                    Pompy TODO ciepła to urządzenia, które wykorzystują odnawialne źródła energii do ogrzewania i
                    chłodzenia
                    budynków. Działają na zasadzie przenoszenia ciepła z jednego miejsca do drugiego, co czyni je
                    wyjątkowo efektywnymi i ekologicznymi.
                </p>
            </div>
        </div>
    </section>
    @endenv

    <x-business-partners business="ground-heatpumps" />

    </section>

    @include('heatpumps.offer-form')
</x-layout>
