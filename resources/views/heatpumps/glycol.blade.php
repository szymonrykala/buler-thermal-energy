<x-layout title="Buler Thermal Energy - Gruntowe Pompy Ciepła"
    short-description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji"
    description="Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków."
    keywords="Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler"
    url="https://bulerenergy.pl">


    <x-sections.hero img="{{ asset('/images/hydrosplit-hydro-box.png') }}">
        <h1 class="--bald">Gruntowe Pompy Ciepła</h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a href="#formularz-ofertowy" class="custom-btn custom-btn--contained center-block">formularz
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
