<section class="container py-5" id="kontakt">

    <div class="row py-5">
        @if (Route::is('in-progress'))
            <h1 class='h2 col-12 text-center'>Strona w realizacji <br /> Zachęcam do kontaktu</h1>
        @else
            <h2 class="col-12 h2 text-center">Zachęcam do kontaktu</h2>
        @endif
    </div>

    <article class="row gy-5">
        <section class="col-sm-12 col-lg-6 align-items-center">
            <x-forms.contact/>
        </section>

        <address class="col-12 col-lg-6 address">
            <div class="row">
                <ul class="col-12">
                    <li>
                        <span class="address__icon">
                            <x-icons.person-add />
                        </span>&nbsp;
                        <a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/piotr-buler-099b26314/">
                            Piotr Buler
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
                <div class="col-12">
                    <iframe class="col-12 address__map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Grudziądz Poland&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>
        </address>
    </article>
</section>
