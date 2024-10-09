<x-layout title="Buler Thermal Energy - Pompy Ciepła"
    short-description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji"
    description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków."
    keywords="Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler"
    url="https://bulerenergy.pl">

    <x-sections.carousel />

    <x-sections.hero img="{{ asset('/images/hydrosplit-hydro-box.png') }}">
        <h1 class="--bald">Pompy Ciepła</h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a role="button" href="#formularz-ofertowy" class="custom-btn custom-btn--contained center-block">formularz
            ofertowy</a>
    </x-sections.hero>


    <section class="container py-5">
        <div class="row py-5">
            <h2 class="col-12 text-center">
                Czym są Pompy Ciepła?
            </h2>
            <p class="offset-md-1 col-12 col-md-10 ">
                Pompy ciepła to urządzenia, które wykorzystują odnawialne źródła energii do ogrzewania i chłodzenia
                budynków. Działają na zasadzie przenoszenia ciepła z jednego miejsca do drugiego, co czyni je
                wyjątkowo efektywnymi i ekologicznymi.
            </p>
        </div>

        <div class="row gy-5">
            <div class="col-12">
                <div class="custom-card__container">
                    <a class="custom-card" href="{{ route('heatpumps.air') }}" aria-roledescription="button"
                        role="button">
                        <span class="custom-card__icon">
                            <x-icons.heatpump />
                        </span>
                        <p class="custom-card__caption">Powietrze - woda</p>
                    </a>
                    <a class="custom-card" href="{{ route('heatpumps.ground.main') }}" aria-roledescription="button"
                        role="button">
                        <span class="custom-card__icon">
                            <x-icons.heatpump-balance />
                        </span>
                        <p class="custom-card__caption">Gruntowe</p>
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

    <x-business-partners business="heatpumps" />

    @include('heatpumps.offer-form')
</x-layout>
