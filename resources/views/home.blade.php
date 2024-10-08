<x-layout title="Buler Thermal Energy - Pompy Ciepła, Magazyny Energii, Fotowoltaika"
    short-description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji"
    description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków."
    keywords="Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler"
    url="https://bulerenergy.pl">


    <x-sections.hero dim="3" img="{{ asset('images/background_960x540.jpeg') }}">
        <div class="row align-items-center">
            <img class="col-9 col-lg-4 m-auto spin-enter" alt="logo firmy" src="{{ asset('images/logo_512.png') }}" />
            <div class="col-12">
                <h1 class="--cool-font --bald ">
                    Buler Thermal Energy
                </h1>
                <p class="h2 text-center">Wieloletnie doświadczenie w nowej
                    odsłonie</p>
            </div>
        </div>
    </x-sections.hero>


    <section class="container py-5" id="oferta">
        <div class="row vh7 align-items-center">

            @php
                $links_config = [
                    [
                        'title' => 'Pompy Ciepła',
                        'icon' => 'icons.heatpump-balance',
                        'link' => route('heatpumps.main'),
                    ],
                    [
                        'title' => 'Rekuperacja',
                        'icon' => 'icons.fan',
                        'link' => route('in-progress'),
                    ],
                    [
                        'title' => 'Fotowoltaika',
                        'icon' => 'icons.fw-panel',
                        'link' => route('fotovoltaic'),
                    ],
                    [
                        'title' => 'Magazyny energii',
                        'icon' => 'icons.battery',
                        'link' => route('batteries'),
                    ],
                    [
                        'title' => 'Badanie gruntu TRT',
                        'icon' => 'icons.stethoscope',
                        'link' => route('trt-measurements'),
                    ],
                    [
                        'title' => 'Świadectwo energetyczna',
                        'icon' => 'icons.building',
                        'link' => route('energetic-passport'),
                    ],
                ];
            @endphp

            <div class="col-12">
                <div class="custom-card__container">

                    @foreach ($links_config as $item)
                        <a role="button" class="custom-card" href="{{ $item['link'] }}">
                            <span class="custom-card__icon">
                                @php $p=$item["icon"]; @endphp
                                <x-dynamic-component :component="$p" />
                            </span>
                            <h3 class="custom-card__caption">{{ $item['title'] }}</h3>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row gy-5 vh9">
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
        </div>
    </section>

    <section class="container py-5">
        <div class="row vh8 align-items-center">
            <img class="handshake-image col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 px-5 on-show-animation"
                src={{ asset('images/handshake.svg') }} alt="uścisk dłoni, zawarcie umowy">
            <div class="on-show-animation col-12 col-md-10 offset-md-1 text-center">
                <p>
                    Zajmiemy się <span class="--colored">każdym krokiem procesu</span> - od wstępnej konsultacji,
                    przez dobór urządzenia,
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
                <a href="{{ route('contact') }}" class="mt-4 custom-btn custom-btn--contained center-block"
                    role="button">Skontaktuj
                    się</a>
            </div>
        </div>
    </section>

    <section id="firma" class="container py-5">
        <div class="row gy-5 vh10 align-items-center">
            <h2 class="h2 col-12 text-center">O firmie</h2>

            <div class="col-sm-12 offset-lg-1 col-lg-10 text-center">
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
            </div>

            <div class="col-sm-12 col-lg-4 order-lg-1">
                <img class="img img-h30 center-block" src="{{ asset('images/piotr_buler.png') }}" alt="Piotr Buler">
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

</x-layout>
