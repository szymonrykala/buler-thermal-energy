<x-layout title="Pompy ciepła - Kontakt" short-description="" description="" keywords="Pompy ciepła, kontakt"
    url="https://bulerenergy.pl">


    <section class="container mt-5 py-7">
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
                <iframe class="address__map" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Grudziądz Poland&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
            </div>
        </div>
    </section>
{{-- 
    <section class="container" id="mapa_dojazdu">
        <div class="row">
            <div class="col-12">
                <iframe class="address__map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Grudziądz Poland&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
            </div>
        </div>
    </section>

    <section class="container my-5" id="formularz">
        <div class="row">
            <div class="col-12">
                <h3 class="h2 text-center">Napisz do mnie!</h3>
            </div>
            <div class="col-sm-12 col-lg-6 m-auto align-items-center">
                <x-forms.contact />
            </div>
        </div>
    </section> --}}

</x-layout>
