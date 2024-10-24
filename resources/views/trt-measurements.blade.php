<x-layout title="Badania Gruntu TRT - Buler Thermal Energy"
    short-description="Profesjonalne badania gruntu TRT (Thermal Response Test) dla systemów geotermalnych. Zwiększ efektywność energetyczną swojego budynku. Skontaktuj się z nami!"
    description="Profesjonalne badania gruntu TRT (Thermal Response Test) dla systemów geotermalnych. Zwiększ efektywność energetyczną swojego budynku. Skontaktuj się z nami!"
    keywords="badania gruntu, TRT, Thermal Response Test, geotermalne, pompy ciepła, efektywność energetyczna, analiza termiczna, energia odnawialna, projektowanie systemów grzewczych"
    url="https://bulerenergy.pl/magazyny-energii">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Badania Gruntu TRT",
        "provider": {
            "@type": "Organization",
            "name": "Buler Thermal Energy",
            "url": "https://bulerenergy.pl",
            "logo": "https://bulerenergy.pl/images/logo_112.png",
            "sameAs": "https://www.linkedin.com/company/buler-thermal-energy/"
        },
        "description": "Oferujemy profesjonalne badania gruntu TRT, które pozwalają na ocenę zdolności gruntów do przewodzenia ciepła, co jest kluczowe przy projektowaniu systemów geotermalnych.",
        "additionalType": "http://www.productontology.org/id/Service",
        "url": "https://bulerenergy.pl/badania-trt",
        "areaServed": {
            "@type": "Place",
            "name": "Polska"
        },
        "offers": {
            "@type": "Offer",
            "priceCurrency": "PLN",
            "price": "Do ustalenia",
            "itemCondition": "http://schema.org/NewCondition",
            "availability": "http://schema.org/InStock",
            "url": "https://bulerenergy.pl/badania-trt"
        }
    }
    </script>

    <x-sections.hero img="{{ asset('/images/sand-tires.jpg') }}">
        <h1 class="--bald h1-title text-shadow-5">Badanie gruntu TRT</h1>
        <p class="h4">Testy przewodnictwa cieplnego gruntu</p>
        <a role="button" href="{{ route('contact') }}" class="custom-btn custom-btn--l custom-btn--contained center-block">Skontaktuj się</a>
    </x-sections.hero>


    <section class="container py-4">
        <div class="row py-5 gy-3 text-center">
            <h2 class="col-12">Warunki wykonania usługi pomiaru metodą testu reakcji termicznej</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="space-l">
                    <li>
                        Sonda wykorzystana do pomiaru efektywnej przewodności cieplnej ( pojedyncze U,
                        podwójne U lub sonda koaksjalna) musi być po próbach ciśnieniowych i próbach
                        drożności.<br />
                    </li>
                    <li>
                        Zalecamy wykonanie pomiaru po okresie co najmniej 72 godzin od osadzenia sondy a
                        w
                        przypadku zastosowania masy uszczelniającej po upływie czasu wg zaleceń
                        producenta
                        (dla masy uszczelniającej na osnowie cementowej pomiar winien być przeprowadzony
                        28
                        dni po dokonanej iniekcji masy uszczelniającej).<br />
                    </li>
                    <li>
                        Lokalizacja przyrządu ( jak najbliżej odwiertu nie więcej niż 1,5 m; połączenie
                        sondy z przyrządem izolujemy).<br />
                    </li>
                    <li>
                        Niezbędne jest stabilne zasilanie elektryczne trójfazowe . W czasie trwania
                        pomiaru nie są dopuszczalne zaniki napięcia. Odchylenia mocy w trakcie pomiaru
                        nie mogą być większe niż +- 10% od wartości średniej.<br />
                        Jeśli na miejscu pomiaru nie jest dostępne zasilanie trójfazowe z sieci można
                        zastosować agregat prądotwórczy. Warunki finansowe zastosowania agregatu
                        prądotwórczego podlegają dodatkowym indywidualnym ustaleniom.<br />
                    </li>
                    <li>
                        Czas trwania pomiaru od 48 do 72 godzin.<br />
                    </li>
                    <li>
                        Jeśli teren jest strzeżony, że można przyrząd zostawić bez nadzoru to dojeżdżamy
                        dwa razy na uruchomienie i zakończenie pomiaru w przeciwnym wypadku przewidujemy ciągły
                        nadzór&nbsp;<b>(dodatkowo płatny)</b>.<br />
                    </li>
                    <li>
                        Czas dostarczenia sprawozdania z przeprowadzonych pomiarów do 3 dni roboczych od
                        zakończenia pomiaru w wersji elektronicznej, trzy egzemplarze sprawozdania w
                        wersji papierowej wysyłamy kurierem na adres wskazany przez Zamawiającego .
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <x-sections.contact />
</x-layout>
