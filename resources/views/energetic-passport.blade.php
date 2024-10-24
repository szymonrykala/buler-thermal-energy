<x-layout title="BTE - Świadectwa Charakterystyki Energetycznej"
    short-description="Buler Thermal Energy - Świadectwa charakterystyki energetycznej, pompy ciepła, magazyny energii, rekuperacja oraz audyty energetyczne."
    description="Buler Thermal Energy - Świadectwa charakterystyki energetycznej, pompy ciepła, magazyny energii, rekuperacja oraz audyty energetyczne."
    keywords="Buler Thermal Energy, świadectwa charakterystyki energetycznej, pompy ciepła, magazyny energii, rekuperacja, audyt energetyczny, efektywność energetyczna, zrównoważona energia, ekologiczne budownictwo"
    url="https://bulerenergy.pl">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Świadectwo charakterystyki energetycznej",
        "provider": {
            "@type": "Organization",
            "name": "Buler Thermal Energy",
            "url": "https://bulerenergy.pl",
            "sameAs": "https://www.linkedin.com/company/buler-thermal-energy/",
            "logo": "http://bulerenergy.pl/images/logo_112.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+48 664435690",
                "contactType": "Obsługa klienta",
                "areaServed": "PL",
                "availableLanguage": "Polski"
            }
        },
        "description": "Buler Thermal Energy oferuje kompleksowe świadectwa charakterystyki energetycznej (Świadectwa charakterystyki energetycznej) dla budynków, zapewniając zgodność z przepisami i optymalizując efektywność energetyczną. Nasze świadectwa oceniają zużycie energii, potrzeby grzewcze i chłodnicze, co czyni je niezbędnymi przy transakcjach nieruchomości.",
        "offers": {
            "@type": "Offer",
            "url": "https://bulerenergy.pl/wycena",
            "priceCurrency": "PLN",
            "price": "0",
            "itemOffered": {
                "@type": "Service",
                "name": "Darmowa ocena świadectwa charakterystyki energetycznej",
                "description": "Uzyskaj darmową ocenę świadectwa charakterystyki energetycznej dla swojego budynku."
            }
        }
    }
    </script>

    <x-sections.hero img="{{ asset('/images/architect-guy.jpg') }}">
        <h1 class="--bald h1-title text-shadow-5">Świadectwo charakterystyki energetycznej</h1>
        <a href="{{ route('contact') }}" class="custom-btn custom-btn--contained center-block">Skontaktuj się!</a>
    </x-sections.hero>

    <section class="container my-5">
        <div class="row py-4 gy-4">
            <h2 class="col-12 text-center my-5">Oferujemy Świadectwa Charakterystyki Energetycznej</h2>
            <div class="col-12 py-5 my-5">
                <div class="row">
                    <img class="col-12 col-lg-6 img img--contain" src="{{ asset('images/energetic-passport.jpg') }}" />
                    <div class="col-12 col-lg-6 ">
                        <p class="h4">Dokumenty te określają zapotrzebowanie budynku na energię, w tym:</p>
                        <ul>
                            <li>Ogrzewanie i wentylację</li>
                            <li>Ciepłą wodę użytkową</li>
                            <li>Chłodzenie i oświetlenie (w budynkach niemieszkalnych)</li>
                        </ul>
                        <br>
                        <h3 class="h4">Dlaczego warto je mieć?</h3>
                        <ul>
                            <li>Pomagają ocenić koszty zużycia energii.</li>
                            <li>Są wymagane przy sprzedaży, najmie oraz zakończeniu budowy.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <p class="h5 text-center">Skontaktuj się z nami, by zadbać o zgodność z przepisami i zoptymalizować
                energetykę
                swojego budynku!</p>

            <div class="col-12 col-md-10 col-lg-8 col-xl-6 m-auto my-5">
                <x-forms.contact />
            </div>
        </div>
    </section>

</x-layout>
