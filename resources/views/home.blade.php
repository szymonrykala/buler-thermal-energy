<x-layout title="Buler Thermal Energy - Pompy Ciepła, Magazyny Energii, Fotowoltaika"
    short-description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji"
    description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków."
    keywords="Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler"
    url="https://bulerenergy.pl">


    <header class="container-fluid main-page-header" id="homepage">
        <div class="row vh9 align-items-center">
            <span class="main-page-header__overlay"></span>
            <div class="col-12 main-logo">
                <div class="row py-5 align-items-center justify-content-center text-center">
                    <img class="col-12 main-logo__image" alt="logo firmy" src="{{ asset('images/logo_1024.png') }}" />
                    <h1 class="col-12 main-logo__title --cool-font --bald --upper">
                        Buler Thermal Energy
                    </h1>
                    <p class="col-12 main-logo__catchphrase --cool-font text-center">Wieloletnie doświadczenie w nowej
                        odsłonie</p>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section class="container py-5" id="oferta">
            <div class="row vh7 align-items-center">
                <div class="col-12">
                    <div class="custom-card__container">
                        <a role="button" class="custom-card" href="{{ route('heatpumps.main') }}">
                            <span class="custom-card__icon">
                                <x-icons.heatpump-balance />
                            </span>
                            <h3 class="custom-card__caption">Pompy Ciepła</h3>
                        </a>
                        <a role="button" class="custom-card" href="{{ route('in-progress') }}">
                            <span class="custom-card__icon">
                                <x-icons.fan />
                            </span>
                            <h3 class="custom-card__caption">Rekuperacja</h3>
                        </a>
                        <a role="button" class="custom-card" href="{{ route('in-progress') }}">
                            <span class="custom-card__icon">
                                <x-icons.fw-panel />
                            </span>
                            <h3 class="custom-card__caption">Fotowoltaika</h3>
                        </a>
                        <a role="button" class="custom-card" href="{{ route('batteries') }}">
                            <span class="custom-card__icon">
                                <x-icons.battery />
                            </span>
                            <h3 class="custom-card__caption">Magazyny energii</h3>
                        </a>
                        <a role="button" class="custom-card" href="{{ route('trt-measurements') }}">
                            <span class="custom-card__icon">
                                <x-icons.stethoscope />
                            </span>
                            <h3 class="custom-card__caption">Badanie gruntu TRT</h3>
                        </a>
                        <a role="button" class="custom-card" href="{{ route('in-progress') }}">
                            <span class="custom-card__icon">
                                <x-icons.building />
                            </span>
                            <h3 class="custom-card__caption">Audyty budynków</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container py-5">
            <article class="row gy-5 vh9">
                <h2 class="h2 col-12 text-center py-4">Kompleksowe usługi <span class="--colored">BTE</span><br />
                    <small>Załatw wszystko w jednym miejscu</small>
                </h2>

                @php
                    $entries = [
                        'Weryfikacja projektu' =>
                            'Weryfikacja projektu oraz przygotowanie niezbędnych rysunków technicznych zgodnych z obowiązującymi normami.',
                        'Niezbędne obliczenia' =>
                            'Przeprowadzanie niezbędnych obliczeń technicznych, gwarantujących bezpieczeństwo oraz efektywność realizacji projektu.',
                        'Prawidłowy dobór urządzenia' =>
                            'Dobór najbardziej odpowiednich urządzeń na podstawie przeprowadzonych analiz i obliczeń, spełniających wszelkie wymagania.',
                        'Profesjonalna instalacja' =>
                            'Precyzyjna i bezpieczna instalacja wybranych urządzeń, zapewniająca pełną zgodność z projektem oraz normami branżowymi.',
                        'Serwis i utrzymanie' =>
                            'Kompleksowy serwis oraz bieżące utrzymanie urządzeń, gwarantujące ich długotrwałe i bezawaryjne funkcjonowanie.',
                    ];
                @endphp

                @foreach ($entries as $title => $entry)
                    <section
                        class="on-show-animation col-12 col-md-8 col-lg-6 {{ $loop->iteration % 2 == 0 ? 'offset-lg-6 offset-md-4' : '' }}">
                        <div class="row align-items-start align-items-sm-center g-2">
                            <div class="col-2 col-sm-3">
                                <span class="checked_icon"><x-icons.select-checked /></span>
                            </div>
                            <div class="col">
                                <h3 class="h5">{{ $title }}</h3>
                                <p class="text-left">{{ $entry }} </p>
                            </div>
                        </div>

                    </section>
                @endforeach
            </article>
        </section>

        <section class="container py-5">
            <div class="row vh8 align-items-center">
                <img class="handshake-image col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 px-5 on-show-animation"
                    src={{ asset('images/handshake.svg') }} alt="uścisk dłoni, zawarcie umowy">
                <div class="on-show-animation col-12 col-md-10 offset-md-1 text-center">
                    <p>
                        Zajmiemy się <span class="--colored">każdym krokiem procesu</span> - od wstępnej konsultacji, przez dobór urządzenia,
                        opracowanie
                        rysunków technicznych i obliczeń, aż po instalację i serwis. Możesz liczyć na nasze
                        doświadczenie i
                        profesjonalizm na każdym etapie. Dla Twojej wygody, zadbamy o wszystkie szczegóły, abyś mógł w
                        pełni
                        cieszyć się gotowym rozwiązaniem.
                    </p>
                    <p class="h3">
                        Jeśli jesteś zainteresowany <span class="--cool-font --colored">nowoczesnymi</span> i <span
                            class="--cool-font --colored">ekologicznymi</span> rozwiązaniami, skontaktuj się z
                        <span class="--cool-font --bald --colored">BTE</span>.
                    </p>
                    <a href="{{route("contact")}}" class="mt-4 custom-btn custom-btn--contained center-block"
                        role="button">Skontaktuj
                        się</a>
                </div>
            </div>
        </section>

        <section id="firma" class="container py-5">
            <div class="row gy-5 vh10 align-items-center">
                <h2 class="h2 col-12 text-center">O firmie</h2>

                <section class="col-sm-12 offset-lg-1 col-lg-10 text-center">
                    <p>
                        Swoje wieloletnie doświadczenie w dziedzinie pomp ciepła zdobyłem pracując od 2018 r. w
                        rodzinnej firmie Clima Komfort z siedzibą w Grudziądzu. W ostatnim roku zarządzałem
                        działem klienta indywidualnego i mikroprojektów, realizując wiele projektów związanych z
                        modernizacją istniejących budynków oraz montażem pomp ciepła w nowobudowanych obiektach.
                        W tym czasie uczestniczyłem w wielu specjalistycznych szkoleniach, poszerzając swoją
                        wiedzę w tematyce OZE.
                    </p>
                    <p>
                        Obecnie Clima Komfort stała się dużą firmą inżynierską, która nie zajmuje się już małymi
                        realizacjami i klientem indywidualnym. Postanowiłem więc kontynuować realizację małych
                        projektów - głównie sprzedaż i montaż pomp ciepła na własny rachunek, tworząc firmę
                        <span class="--cool-font --colored --bald">Buler Thermal Energy</span>.
                    </p>
                </section>

                <div class="col-sm-12 col-lg-4 order-lg-1">
                    <img class="img img-h30 center-block" src="{{ asset('images/piotr_buler.png') }}"
                        alt="Piotr Buler">
                </div>

                <section class="col-sm-12 offset-lg-1 order-lg-12 col-lg-7">
                    <h3 class="h3 pb-2">Moja Misja</h3>
                    <p>
                        Moim celem jest wykorzystywanie zdobytej wiedzy, aby dostarczać nowoczesne, ekologiczne i
                        efektywne rozwiązania energetyczne dla klientów indywidualnych i biznesowych. Stawiam na
                        profesjonalizm i indywidualne podejście, oferując najlepsze technologie w zakresie:
                    </p>
                    <ul>
                        <li>ogrzewania</li>
                        <li>wentylacji</li>
                        <li>podgrzewania wody</li>
                        <li>fotowoltaiki</li>
                        <li>magazynowania energii.</li>
                    </ul>
                    
                </section>

            </div>
        </section>

        <x-sections.contact />

    </main>
</x-layout>