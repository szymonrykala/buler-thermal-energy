<x-layout title="Buler Thermal Energy - Gruntowe Pompy Ciepła Woda-Woda"
    short-description="Gruntowe pompy ciepła woda-woda - nowoczesne, ekologiczne i energooszczędne systemy grzewcze. Dowiedz się, jak działają i dlaczego są idealnym rozwiązaniem do ogrzewania oraz chłodzenia Twojego domu. Wysoka efektywność, niskie koszty eksploatacji i niezawodność."
    description="Gruntowe pompy ciepła woda-woda - nowoczesne, ekologiczne i energooszczędne systemy grzewcze. Dowiedz się, jak działają i dlaczego są idealnym rozwiązaniem do ogrzewania oraz chłodzenia Twojego domu. Wysoka efektywność, niskie koszty eksploatacji i niezawodność."
    keywords="gruntowe pompy ciepła, pompy ciepła woda-woda, energia odnawialna, systemy grzewcze, czerpanie energii z wód gruntowych, efektywność energetyczna, niskie koszty eksploatacji, chłodzenie pomieszczeń, systemy niskotemperaturowe, ekologiczne ogrzewanie, LG, iDM, M-tec"
    url="https://bulerenergy.pl">


    <x-sections.hero img="{{ asset('/images/woda-woda-hero-image.jpg') }}">
        <h1 class="--bald h1-title text-shadow-5">Gruntowe Pompy Ciepła<br><span class="--colored">woda-woda</span></h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a href="{{ route('contact') }}" class="custom-btn custom-btn--contained center-block">Skontaktuj się</a>
    </x-sections.hero>


    <section class="container py-5">
        <div class="row py-5 gy-5 text-center">
            <h2 class="col-12">Zasada działania</h2>
            <div class="col-lg">
                <span class="number-icon">1</span>
                <h3>Czerpanie energii z wód gruntowych</h3>
                <p>
                    Pompa ciepła pobiera wodę z czerpnej studni, gdzie ma stałą
                    temperaturę (7-12 °C). Ta woda stanowi dolne źródło energii, które jest kluczowe dla efektywności
                    systemu.
                </p>
            </div>
            <div class="col-lg pt-md-5">
                <span class="number-icon">2</span>
                <h3>Przemiana energii</h3>
                <p>
                    Woda trafia do wymiennika ciepła, gdzie przekazuje swoją energię cieplną
                    czynnikowi roboczemu (np. freon). Czynnik roboczy paruje, a jego temperatura wzrasta, co umożliwia
                    dalszą obróbkę ciepła.
                </p>
            </div>
            <div class="col-lg">
                <span class="number-icon">3</span>
                <h3>Przekazywanie ciepła do budynku</h3>
                <p>
                    Gazowy czynnik roboczy, pod wysokim ciśnieniem, przemieszcza się do
                    skraplacza, gdzie oddaje ciepło do systemu grzewczego budynku. Po oddaniu ciepła, czynnik roboczy
                    wraca do stanu ciekłego i cykl się powtarza.
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid position-relative py-5">
        <div class="row p-3">
            <img class="img-fluid img img--cover vh6" src="{{ asset('images/lady-with-a-pot.png') }}"
                alt="gruntowa pompa ciepła woda-woda">

            <div class="w-100 py-5 my-5"></div>

            <div class="col offset-md-1 col-md-8 col-lg-7 col-xl-6 p-3 p-md-4 bg-secondary blur-2 round-3">
                <h2 class="h2">Zalety pomp ciepła woda-woda</h2>
                <ul>
                    <li><strong>Wysoka efektywność energetyczna:</strong><br> Dzięki stabilnej temperaturze wód
                        gruntowych, pompy woda-woda osiągają wysoką wydajność nawet w trudnych warunkach
                        atmosferycznych.</li>

                    <li><strong>Niskie koszty eksploatacji:</strong><br> Używanie odnawialnych źródeł energii sprawia,
                        że koszty użytkowania pomp woda-woda są znacznie niższe niż w przypadku tradycyjnych systemów
                        grzewczych.</li>

                    <li><strong>Wszechstronność:</strong><br> Systemy te mogą być używane zarówno do ogrzewania, jak i
                        chłodzenia pomieszczeń, co czyni je praktycznym rozwiązaniem przez cały rok.</li>

                    <li><strong>Minimalne wymagania przestrzenne:</strong><br> Dwie studnie (czerpna i zrzutowa)
                        wymagają niewiele miejsca, co sprawia, że system jest idealny dla mniejszych działek.</li>

                    <li><strong>Niezawodność:</strong><br> Pompy ciepła woda-woda charakteryzują się długą żywotnością,
                        co sprawia, że są inwestycją na lata.</li>

                    <li><strong>Cisza pracy:</strong><br> Systemy te pracują cicho, co zwiększa komfort użytkowania w
                        domach mieszkalnych.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container py-5 my-5">
        <a class="custom-btn custom-btn--xl custom-btn--contained center-block" href="{{route("contact")}}">
            SKONTAKTUJ SIĘ
        </a>
    </section>
    {{-- @include('heatpumps.offer-form') --}}
</x-layout>
