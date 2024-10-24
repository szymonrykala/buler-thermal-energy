<x-layout title="Gruntowe Pompy Ciepła - Glikol"
    short-description="Gruntowe pompy ciepła z glikolem to ekologiczne i oszczędne rozwiązania do ogrzewania i chłodzenia domów. Wysoka efektywność energetyczna, niskie koszty eksploatacji oraz wielofunkcyjność sprawiają, że pompy te są idealnym wyborem dla domów energooszczędnych. Dowiedz się więcej i wybierz odpowiednie rozwiązanie dla siebie!"
    description="Gruntowe pompy ciepła z glikolem to ekologiczne i oszczędne rozwiązania do ogrzewania i chłodzenia domów. Wysoka efektywność energetyczna, niskie koszty eksploatacji oraz wielofunkcyjność sprawiają, że pompy te są idealnym wyborem dla domów energooszczędnych. Dowiedz się więcej i wybierz odpowiednie rozwiązanie dla siebie!"
    keywords="gruntowe pompy ciepła, pompy ciepła z glikolem, efektywność energetyczna, ekologiczne rozwiązania, oszczędność energii, ogrzewanie podłogowe, niskie koszty eksploatacji, wielofunkcyjne systemy grzewcze, domy energooszczędne, pompy ciepła do ogrzewania, systemy niskotemperaturowe, LG, M-tec, iDM"
    url="https://bulerenergy.pl">


    <x-sections.hero img="{{ asset('/images/mountains.jpg') }}">
        <h1 class="--bald">Gruntowe Pompy Ciepła</h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a href="#formularz-ofertowy" class="custom-btn custom-btn--contained">formularz
            ofertowy</a>
    </x-sections.hero>


    <section class="container">
        <div class="row py-5 gy-5 text-center">
            <h2 class="col-12">Zasada działania</h2>
            <div class="col-lg px-5">
                <span class="number-icon">1</span>
                <p>
                    W gruntowych pompach ciepła z glikolem, czynnik roboczy (glikol) krąży w dolnym źródle
                    i transportuje ciepło z gruntu do pompy. Następnie, w obiegu pompy ciepła, czynnik chłodniczy
                    przechodzi z fazy ciekłej do gazowej w parowniku, co umożliwia odzyskanie ciepła z gruntu.
                </p>
            </div>
            <div class="col-lg px-lg-5">
                <span class="number-icon">2</span>
                <p>
                    Po zwiększeniu ciśnienia i temperatury czynnika przez sprężarkę, trafia on do skraplacza, gdzie
                    oddaje ciepło do systemu grzewczego, takiego jak ogrzewanie podłogowe, ścienne czy grzejnikowe.
                    System działa najefektywniej w połączeniu z instalacjami niskotemperaturowymi, szczególnie
                    ogrzewaniem podłogowym.
                </p>
            </div>
            <div class="col-12 col-md-10 col-lg-8 m-auto">
                <span class="number-icon">👍</span>
                <p>
                    To rozwiązanie doskonale sprawdza się w domach energooszczędnych i jest idealnym wyborem dla
                    osób poszukujących ekologicznych i oszczędnych rozwiązań grzewczych.
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid position-relative py-5">
        <div class="row p-3">
            <img class="img-fluid img img--cover vh6" src="{{ asset('images/lady-with-a-pot.png') }}"
                alt="pompa ciepła powietrze-woda">

            <div class="w-100 py-5 my-5"></div>

            <div class="col offset-md-1 col-md-8 col-lg-7 col-xl-6 p-3 p-md-4 bg-secondary blur-2 round-3">
                <h2>Jakie ma zalety?</h2>
                <ul>
                    <li><b>Wysoka efektywność energetyczna </b>:<br> Gruntowe pompy ciepła działają niezależnie
                        od
                        zewnętrznych warunków pogodowych, co pozwala na stałą wydajność przez cały rok.</li>
                    <li><b>Niskie koszty eksploatacji</b>:<br> Dzięki wykorzystaniu energii z gruntu, pompy
                        ciepła
                        znacznie obniżają koszty ogrzewania i chłodzenia w porównaniu z tradycyjnymi systemami.
                    </li>
                    <li><b>Wielofunkcyjność </b>:<br> Oprócz ogrzewania, pompy mogą również chłodzić budynek
                        latem,
                        a także dostarczać ciepłą wodę użytkową.</li>
                    <li><b>Długa żywotność </b>:<br> Systemy gruntowych pomp ciepła są trwałe, a ich podziemne
                        instalacje mogą działać nawet kilkadziesiąt lat.</li>
                    <li><b>Wysoka efektywność w instalacjach niskotemperaturowych </b>:<br> Najlepiej
                        współpracują
                        z ogrzewaniem podłogowym i innymi systemami niskotemperaturowymi, co zwiększa
                        oszczędności.</li>
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
        <div class="row gy-3 p-2">

            @foreach ($products as $product)
                <x-heatpump-product :product="$product" />
            @endforeach

        </div>
    </section>

    @include('heatpumps.offer-form')
</x-layout>
