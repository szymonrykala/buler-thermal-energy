<form class="form" id="contact-form" action="{{ route('forms.contact') }}" method="POST">
    @csrf
    <fieldset class="row gy-2">
        <div class="col-sm-12 col-md-6 form__input form__input--req">
            <label for="firstName">Imię</label>
            <input type="text" id="firstName" name="firstName" placeholder="Jan" aria-required="true" required="true">
        </div>

        <div class="col-sm-12 col-md-6 form__input form__input--req">
            <label for="lastName">Nazwisko</label>
            <input type="text" id="lastName" name="lastName" placeholder="Kowalski" aria-required="true"
                required="true">
        </div>

        <div class="col-sm-12 col-md-6 form__input form__input--req">
            <label for="email">Adres email</label>
            <input type="email" id="email" name="email" aria-required="true" required="true"
                placeholder="twój@email.com" aria-placeholder="twój@email.com">
        </div>

        <div class="col-sm-12 col-md-6 form__input form__input--req">
            <label for="city">Miejscowość</label>
            <input type="text" id="city" name="city" aria-required="true" required="true"
                aria-placeholder="miejscowość" placeholder="miejscowość">
        </div>

        <div class="col-sm-12 form__input form__input--req">
            <label for="subject">Temat</label>
            <input type="text" id="subject" name="subject" aria-required="true" required="true"
                aria-placeholder="Temat wiadomości" placeholder="Temat wiadomości">
        </div>

        <div class="col-sm-12 form__input form__input--req">
            <label for="message">Wiadomość</label>
            <textarea class="full" name="message" id="message" required="true"
                placeholder="Np zapytanie o ofertę lub dostępność"></textarea>
        </div>
    </fieldset>
    {{-- <div class="row">
                    <div class="g-recaptcha" data-sitekey="your_site_key" data-sitekey="6Le-dvcpAAAAAAlMbuZCsSPbpcDDbzJ15kAwzNIj"></div>
                </div> --}}
    <div class="row py-5 justify-content-center">
        <button type="submit" role="button" class="col-10 col-md-8 col-lg-6 custom-btn" data-callback="onSubmit"
            data-sitekey="6Le-dvcpAAAAAAlMbuZCsSPbpcDDbzJ15kAwzNIj">
            Wyślij
        </button>
    </div>
</form>
