<x-layout title="Pompy ciepła - Kontakt"
    short-description="Buler Thermal Energy - specjalizujemy się w pompach ciepła, rekuperacji, fotowoltaice i magazynach energii. Skontaktuj się z nami po darmową wycenę."
    description="Skontaktuj się z Buler Thermal Energy - specjalistami od pomp ciepła, rekuperacji i fotowoltaiki. Zadzwoń lub napisz, aby otrzymać darmową wycenę na usługi grzewcze i energetyczne."
    keywords="Buler Thermal Energy, kontakt, pompy ciepła, rekuperacja, fotowoltaika, darmowa wycena, Grudziądz, odnawialne źródła energii"
    url="https://bulerenergy.pl">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Buler Thermal Energy",
            "url": "https://bulerenergy.pl",
            "logo": "https://bulerenergy.pl/images/logo_112.png",
            "description": "Buler Thermal Energy to firma specjalizująca się w pompach ciepła, systemach rekuperacji, fotowoltaice i magazynach energii. Skontaktuj się z nami, aby otrzymać darmową wycenę.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "86-300 Grudziądz",
                "addressLocality": "Grudziądz",
                "addressCountry": "PL"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+48 664 435 690",
                "contactType": "Customer Service",
                "email": "biuro@bulerenergy.pl"
            },
            "sameAs": [
                "https://www.linkedin.com/in/piotr-buler-099b26314/",
                "https://www.linkedin.com/company/buler-thermal-energy/"
            ]
        }
    </script>

    <section class="container mt-5 py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6">
                <img class="center-block img img-h40 p-3" src="{{ asset('images/piotr_buler.png') }}" />
            </div>
            <div class="col-12 col-lg-6 p-3">
                <h2 class="h2">
                    Piotr Buler
                </h2>
                <address class="address" id="address">
                    <ul>
                        <li>
                            <span class="address__icon">
                                <x-icons.person-add />
                            </span>&nbsp;
                            <a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/piotr-buler-099b26314/">
                                LinkedIn
                            </a>
                        </li>

                        <li>
                            <span class="address__icon">
                                <x-icons.email />
                            </span>&nbsp;
                            Napisz:&nbsp;
                            <a href="mailto:biuro@bulerenergy.pl">biuro@bulerenergy.pl</a>
                        </li>

                        <li>
                            <a href="tel:+48664435690" class="address__icon">
                                <x-icons.phone />
                            </a>&nbsp;
                            Zadzwoń:&nbsp;
                            <a href="tel:+48664435690">+48 664 435 690</a>
                        </li>

                        <li>
                            <span class="--colored">NIP:&nbsp;</span>876-166-72-65
                        </li>

                        <li>
                            <span class="address__icon">
                                <x-icons.pin-drop />
                            </span>&nbsp;
                            86-300 Grudziądz
                        </li>
                    </ul>
                </address>
            </div>
        </div>
    </section>

    <section class="container py-4">
        <div class="row">
            <div class="col-12">
                <h3 class="h2 py-3" id="formularz">Napisz do mnie!</h3>
            </div>
            <div class="col-sm-12 col-lg-6 m-auto p-3">
                <x-forms.contact />
            </div>
            <div class="col-12 col-lg-6 p-3">
                <iframe class="address__map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Grudziądz Poland&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
            </div>
        </div>
    </section>
</x-layout>
