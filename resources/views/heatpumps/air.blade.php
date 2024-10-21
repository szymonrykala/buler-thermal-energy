<x-layout title="Buler Thermal Energy - Pompy Ciepła Powietrze Woda"
    short-description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji"
    description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków."
    keywords="Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler"
    url="https://bulerenergy.pl">


    <x-sections.hero img="{{ asset('/images/monter-and-a-lady.jpg') }}">
        <h1 class="--bald">Pompy Ciepła Powietrze-Woda</h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a role="button" href="#formularz-ofertowy" class="custom-btn custom-btn--contained center-block">formularz
            ofertowy</a>
    </x-sections.hero>


    <section class="container">
        <div class="row py-5 gy-3 text-center">
            <h2 class="col-12">Zasada działania</h2>
            <div class="col-lg">
                <span class="number-icon">1</span>
                <p>
                    Pompy ciepła powietrze-woda to zaawansowane urządzenia, które efektywnie pozyskują energię do
                    ogrzewania budynków z powietrza atmosferycznego. Działanie tych pomp opiera się na cicho
                    pracującym wentylatorze, który zasysa powietrze z otoczenia i kieruje je przez wymiennik ciepła,
                    zwany parownikiem.
                </p>
            </div>
            <div class="col-lg pt-md-5">
                <span class="number-icon">2</span>
                <p>
                    W parowniku następuje kluczowy proces - czynnik chłodniczy w postaci ciekłej absorbuje ciepło z
                    powietrza, przechodząc w fazę gazową. Następnie trafia on do kompresora, gdzie jest sprężany, co
                    powoduje znaczny wzrost jego temperatury (do około 80-90°C). Gorący czynnik przepływa do
                    skraplacza, gdzie oddaje ciepło do systemu ogrzewania, takiego jak ogrzewanie podłogowe, ścienne
                    czy grzejnikowe.
                </p>
            </div>
            <div class="col-lg">
                <span class="number-icon">3</span>
                <p>
                    Pompy powietrze-woda są szczególnie efektywne przy wyższych temperaturach otoczenia i mogą być
                    wykorzystywane zarówno do ogrzewania, jak i chłodzenia pomieszczeń. To idealne rozwiązanie tam,
                    gdzie systemy geotermalne są trudne do zainstalowania lub nieopłacalne ekonomicznie.
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid position-relative w-100 py-5">
        <div class="row p-3">
            <img class="img-fluid img img--cover vh6 w-100" src="{{ asset('images/lady-with-a-dog.jpg') }}"
                alt="happy buyers of heatpump">

            <div class="w-100 py-4 my-5 py-md-5 my-md-5"></div>
            <div class="w-100 my-4 my-md-5"></div>

            <div class="col offset-md-1 col-md-8 col-lg-7 col-xl-6 p-3 p-md-4 bg-secondary blur-2 round-3 on-show-animation">
                <h2>Jakie ma zalety?</h2>
                <ul>
                    <li> <b>Oszczędność energii</b>:<br> Wykorzystują darmową energię z powietrza, znacznie
                        obniżając koszty ogrzewania.</li>
                    <li> <b>Uniwersalność</b>:<br> Ogrzewanie i chłodzenie w jednym systemie - komfort przez
                        cały rok.</li>
                    <li> <b>Łatwa instalacja</b>:<br> Szybszy i tańszy montaż w porównaniu do systemów
                        geotermalnych.</li>
                    <li> <b>Bezpieczeństwo</b>:<br> Brak ryzyka związanego ze spalaniem paliw, bezpieczne
                        użytkowanie.</li>
                    <li> <b>Dostępność</b>:<br> Idealne w miejscach, gdzie instalacja geotermalna jest
                        niemożliwa.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row text-center">
            <h2 class="col-12">Proponowane pompy ciepła</h2>
            <p class="col-12 col-lg-8 offset-lg-2">Oferujemy tylko sprawdzone i niezawodne urządzenia.
                Odpowiednio dobrany model to kluczowa decyzja. Skontaktuj się z nami a podejmiemy ją razem.</p>
        </div>
        <div class="row gy-2 p-2">

            @foreach ($products as $product)
                <x-heatpump-product :product="$product" />
            @endforeach

        </div>
    </section>

    @include('heatpumps.offer-form')
</x-layout>
