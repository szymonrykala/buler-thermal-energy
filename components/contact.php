<section class="page" id="kontakt">
    <div class="container">
        <div class="row">
            <h1 class="col-12 h1">Zachęcam do kontaktu</h1>
        </div>

        <div class="row gy-5">
            <div class="col-sm-12 col-lg-6">
                <div class="container">
                    <form class="form" id="contact-form" action="?" method="POST">
                        <fieldset class="row gy-3">
                            <div class="col-sm-12 col-md-6 form__input form__input--req">
                                <label for="firstName">Imię</label>
                                <input type="text" id="firstName" name="firstName" aria-required="true" required="true">
                            </div>

                            <div class="col-sm-12 col-md-6 form__input form__input--req">
                                <label for="lastName">Nazwisko</label>
                                <input type="text" id="lastName" name="lastName" aria-required="true" required="true">
                            </div>

                            <div class="col-sm-12 col-md-6 form__input form__input--req">
                                <label for="email">Adres email</label>
                                <input type="email" id="email" name="email" aria-required="true" required="true" placeholder="twój@email.com" aria-placeholder="twój@email.com">
                            </div>

                            <div class="col-sm-12 col-md-6 form__input form__input--req">
                                <label for="city">Miejscowość</label>
                                <input type="text" id="city" name="city" aria-required="true" required="true" aria-placeholder="miejscowość" placeholder="miejscowość">
                            </div>

                            <div class="col-sm-12 form__input form__input--req">
                                <label for="subject">Temat</label>
                                <input type="text" id="subject" name="subject" aria-required="true" required="true" aria-placeholder="Temat wiadomości" placeholder="Temat wiadomości">
                            </div>

                            <div class="col-sm-12 form__input form__input--req">
                                <label for="message">Wiadomość</label>
                                <textarea class="full" name="message" id="message" required="true" placeholder="Np zapytanie o ofertę lub dostępność"></textarea>
                            </div>
                        </fieldset>
                        <div class="row">
                            <!-- <div class="g-recaptcha" data-sitekey="your_site_key" data-sitekey="6Le-dvcpAAAAAAlMbuZCsSPbpcDDbzJ15kAwzNIj"></div> -->
                        </div>
                        <div class="row py-5 justify-content-center">
                            <button type="submit" role="button" class="col-10 col-md-8 col-lg-6 btn" data-callback="onSubmit" data-sitekey="6Le-dvcpAAAAAAlMbuZCsSPbpcDDbzJ15kAwzNIj">
                                Wyślij
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <address class="col-12 col-lg-6 address">
                <div class="container">

                    <div class="row gy-2">

                        <p class="col-12">
                            <span class="address__icon">
                                <?php require_once("components/icons/person_add.svg"); ?>
                            </span>&nbsp;
                            <a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/piotr-buler-099b26314/">
                                Piotr Buler
                            </a>
                        </p>

                        <p class="col-12">
                            <span class="address__icon">
                                <?php require("components/icons/email.svg"); ?>
                            </span>&nbsp;
                            Napisz:&nbsp;
                            <a href="mailto:biuro@bulerenergy.pl">biuro@bulerenergy.pl</a>
                        </p>

                        <p class="col-12">
                            <a href="tel:+48664435690" class="address__icon">
                                <?php require("components/icons/phone.svg"); ?>
                            </a>&nbsp;
                            Zadzwoń:&nbsp;
                            <a href="tel:+48664435690">+48 664 435 690</a>
                        </p>

                        <p class="col-12">
                            <span class="--colored">NIP:&nbsp;</span>876-166-72-65
                        </p>

                        <p class="col-12">
                            <span class="address__icon">
                                <?php require_once("components/icons/pin_drop.svg"); ?>
                            </span>&nbsp;
                            86-300 Grudziądz
                        </p>

                        <div class="row py-4">
                            <iframe class="col-12 address__map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Grudziądz Poland&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                    </div>
                </div>
            </address>
        </div>
    </div>

</section>