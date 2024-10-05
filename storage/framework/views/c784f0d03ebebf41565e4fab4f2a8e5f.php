<form class="form container" id="heatpump-offer-form" action="<?php echo e(route('forms.heatpump-offer')); ?>" method="POST"
    enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <fieldset class="row py-4 gy-3">
        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
            <label for="first-name">Imię</label>
            <input type="text" id="first-name" name="first-name" aria-required="true" required="true">
        </div>
        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
            <label for="last-name">Nazwisko</label>
            <input type="text" id="last-name" name="last-name" aria-required="true" required="true">
        </div>
        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
            <label for="email">Adres email</label>
            <input type="email" id="email" name="email" aria-required="true" required="true">
        </div>
        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
            <label for="phone-number">Numer telefonu</label>
            <input type="tel" id="phone-number" name="phone-number" aria-required="true" required="true">
        </div>
        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
            <label for="city">Miejscowość</label>
            <input type="text" id="city" name="city" aria-required="true" required="true">
        </div>
        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
            <label for="planned-realization-date">Planowany termin realizacji</label>
            <input type="date" id="planned-realization-date" name="planned-realization-date" aria-required="true"
                required="true">
        </div>
    </fieldset>

    <fieldset class="row py-4 gy-1" id="new-or-existing-building-fieldset">
        <h5 class="col-12 form__group_title form__group_title--req">Rodzaj budynku/obiektu</h5>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="Obiekt nowobudowany" id="new-buildling" name="building-state">
            <label for="new-buildling">obiekt nowobudowany</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="Obiekt istniejący" id="building-exists" name="building-state">
            <label for="building-exists">obiekt istniejący</label>
        </div>
    </fieldset>


    <!-- OBIEKT NOWOBUDOWANY -->
    <div class="d-none form__section--inner row" id="new-buildling-dynamic-section">
        <div class="col-12">
            <fieldset class="row py-2" id="building-project-type-fieldset">
                <h5 class="col-12 form__group_title form__group_title--req">
                    Rodzaj projektu budynku/obiektu
                </h5>
                <div class="col-12 col-md-4 form__input">
                    <input type="radio" value="Projekt gotowy" id="predefined-project" name="building-project-type">
                    <label for="predefined-project">Projekt gotowy (np: Dom w Malinówkach
                        G2)</label>
                </div>
                <div class="col-12 col-md-4 form__input">
                    <input type="radio" value="Projekt indywidualny" id="individual-project"
                        name="building-project-type">
                    <label for="individual-project">Projekt indywidualny</label>
                </div>
                <div class="w-100"></div>
                <div class="d-none col-12 col-md-8 col-lg-4 form__input" id="predefined-project-name-dynamic-group">
                    <input type="text" name="predefined-project_name" placeholder="np: Dom w Malinówkach G2"
                        aria-placeholder="np: Dom w Malinówkach G2">
                </div>

                <div class="d-none col-12 form__input" id="individual-project-file-dynamic-group">
                    <input type="file" name="individual-project-file" id="individual-project-file">
                    <label class="custom-btn" for="individual-project-file">
                        Wybierz plik z projektem
                    </label>
                </div>
            </fieldset>


            <fieldset class="row py-3 gy-1">
                <div class="col-12 col-md-8 col-lg-4 form__input">
                    <label for="building-energy-consumption-w">Projektowane obciążenie cieplne
                        budynku
                        [W]</label>
                    <input type="number" min="0" max="1000000" value="5000" step="50"
                        id="building-energy-consumption-w" name="building-energy-consumption-w">
                </div>
            </fieldset>

            <fieldset class="row py-3 gy-1" id="building-materials-fieldset">
                <h5 class="col-12 form__group_title form__group_title--req">Materiały użyte do
                    budowy</h5>
                <div class="col-12 col-md-4 form__input">
                    <input type="radio" value="Zgodnie z projektem" id="align-with-project"
                        name="building-materials">
                    <label for="align-with-project">zgodnie z projektem</label>
                </div>
                <div class="col-12 col-md-4 form__input">
                    <input type="radio" value="Zmiany materiałów" id="material-changes" name="building-materials">
                    <label for="material-changes">zmiany materiałów</label>
                </div>

                <div class="d-none col-12 col-md-8 form__input" id="material-changes-elaborate-textfield">
                    <textarea cols="20" rows="5" name="material-changes-elaborate"
                        placeholder="przykład: w projekcie bloczek gazobeton - wybudowano z cegły porotherm; w projekcie ocieplenie dachu wełną - wykonano izolację pianą PIR, PUR lub celulozą; zmiana grubości warstw"
                        aria-placeholder="przykład: w projekcie bloczek gazobeton - wybudowano z cegły porotherm; w projekcie ocieplenie dachu wełną - wykonano izolację pianą PIR, PUR lub celulozą; zmiana grubości warstw"></textarea>
                </div>
            </fieldset>

            <fieldset class="row py-3 gy-1">
                <h5 class="col-12 form__group_title form__group_title--req">Obecny stan/etap budowy
                </h5>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="etap projektowy" id="project-step" name="build-progress">
                    <label for="project-step">etap projektowy</label>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="początek budowy" id="building-start" name="build-progress">
                    <label for="building-start">początek budowy</label>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="stan surowy otwarty" id="building-raw-open-state"
                        name="build-progress">
                    <label for="building-raw-open-state">stan surowy otwarty</label>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="stan surowy zamknięty" id="building-raw-closed-state"
                        name="build-progress">
                    <label for="building-raw-closed-state">stan surowy zamknięty</label>
                </div>
            </fieldset>

            <fieldset class="row py-3 gy-1">
                <h5 class="col-12 form__group_title">Podział budynku na strefy grzewcze
                </h5>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="brak (budynek jako jedna strefa)" id="no-heating-areas"
                        name="building-heating-areas">
                    <label for="no-heating-areas">brak (budynek jako jedna strefa)</label>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="jedna strefa z regulacją temperatury w wybranych pomieszczeniach"
                        id="signle_heating_area" name="building-heating-areas">
                    <label for="signle_heating_area">jedna strefa z regulacją temperatury w
                        wybranych
                        pomieszczeniach</label>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="dwie strefy grzewcze" id="two-heating-areas"
                        name="building-heating-areas">
                    <label for="two-heating-areas">dwie strefy grzewcze</label>
                </div>
                <div class="col-12 col-md-6 col-lg-3 form__input">
                    <input type="radio" value="na tą chwilę nie wiem" id="not-decided-heating-areas"
                        name="building-heating-areas">
                    <label for="not-decided-heating-areas">na tą chwilę nie wiem</label>
                </div>
            </fieldset>

            <fieldset class="row py-3 gy-1">
                <h5 class="col-12 form__group_title">Oczekiwana temperatura pomieszczeń w domu:</h5>
                <div class="col-12 col-md-8 col-lg-6 form__input">
                    <label for="room-expected-temperature"></label>
                    <input type="range" min="20" max="28" step="1" value="22"
                        id="room-expected-temperature" name="room-expected-temperature">
                </div>
                <div class="w-100"></div>
                <div class="col-12 col-md-8 col-lg-6 form__input">
                    <label for="garage-expected-temperature"></label>
                    <input type="range" min="5" max="20" step="1" value="18"
                        id="garage-expected-temperature" name="garage-expected-temperature">
                </div>
            </fieldset>
        </div>
    </div>


    <!-- OBIEKT ISTNIEJĄCY -->
    <div class="d-none form__section--inner" id="existing-buildling-dynamic-section">
        <fieldset class="row py-3 gy-1" id="building-type-fieldset">
            <h5 class="col-12 form__group_title">Typ budynku</h5>

            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="podpiwniczony" id="podpiwniczony" name="building-type">
                <label for="podpiwniczony">podpiwniczony</label>
            </div>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="parterowy" id="parterowy" name="building-type">
                <label for="parterowy">parterowy</label>
            </div>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="parterowy z poddaszem użytkowym" id="parterowy-z-poddaszem"
                    name="building-type">
                <label for="parterowy-z-poddaszem">parterowy z poddaszem użytkowym</label>
            </div>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="piętrowy" id="piętrowy" name="building-type">
                <label for="piętrowy">piętrowy</label>
            </div>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="inny" id="another-type" name="building-type">
                <label for="another-type">inny</label>
            </div>
            <div class="w-100"></div>
            <!-- HIDING -->
            <div class="col-12 col-md-4 form__input" , id="another-building-type-detail-section">
                <label for="another-building-type-detail">Inny typ:</label>
                <input type="text" id="another-building-type-detail" disabled placeholder="podaj inny typ budynku"
                    aria-placeholder="podaj inny typ budynku" name="another-building-type-detail">
            </div>
        </fieldset>

        <fieldset class="row py-3 gy-3">
            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                <label for="construction-year">Rok budowy budynku</label>
                <input type="number" min="1900" max=<?php echo date('Y'); ?> id="construction-year"
                    name="construction-year">
            </div>
            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                <label for="building-heating-surface">Powierzchnia grzewcza budynku</label>
                <input type="number" min="10" max="999" step="10" id="building-heating-surface"
                    name="building-heating-surface">
            </div>
        </fieldset>

        <fieldset class="row py-3 gy-1">
            <h5 class="col-12 form__group_title form__group_title--req">Czy w bryle budynku jest garaż?
            </h5>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="Tak" id="garage-in-building-yes" name="garage-in-building">
                <label for="garage-in-building-yes">Tak</label>
            </div>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="Nie" id="garage-in-building-no" name="garage-in-building">
                <label for="garage-in-building-no">Nie</label>
            </div>
        </fieldset>

        <fieldset class="row py-3 gy-1">
            <h5 class="col-12 form__group_title form__group_title--req">Konstrukcja ściany zewnętrznej</h5>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="Tak" id="single-layer" name="wall-construction">
                <label for="single-layer">jednowarstwowa</label>
            </div>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="Nie" id="multi-layer" name="wall-construction">
                <label for="multi-layer">dwuwarstwowa z pustką powietrzną</label>
            </div>
        </fieldset>

        <fieldset class="row py-3 gy-4">
            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                <label for="external-wall-width">Grubość ściany zewnętrznej</label>
                <input type="number" min="1" max="999" step="1" id="external-wall-width"
                    name="external-wall-width">
            </div>
            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                <label for="isolation-width">Grubość ocieplenia</label>
                <input type="number" min="1" max="999" step="1" id="isolation-width"
                    name="isolation-width">
            </div>
        </fieldset>

        <fieldset class="row py-3 gy-4">
            <div class="col-12 col-md-6 col-lg-4 form__input">
                <label for="building-material">Materiał użyty do budowy:</label>
                <select name="building-material" id="building-material" data-name="dropdown">
                    <option value="">- Wybierz z listy -</option>
                    <option value="cegła czerwona">cegła czerwona</option>
                    <option value="cegła biała">cegła biała</option>
                    <option value="keramzyt">keramzyt</option>
                    <option value="szlaka">szlaka</option>
                    <option value="beton komórkowy">beton komórkowy</option>
                    <option value="porotherm">porotherm</option>
                    <option value="inne">inne</option>
                </select>
                <!-- HIDING -->
                <label for="another-building-material-detail" class="d-none">Inny typ materiału:</label>
                <input type="text" class="d-none" disabled id="another-building-material-detail"
                    placeholder="nazwa materiału" aria-placeholder="nazwa materiału"
                    name="another-building-material-detail">
            </div>

            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                <label for="isolation-material">Materiał ociepleniowy budynku</label>
                <select name="isolation-material" id="isolation-material" data-name="dropdown" data-calc_value="0"
                    aria-invalid="false">
                    <option value="">- Wybierz z listy -</option>
                    <option value="styropian">styropian</option>
                    <option value="wełna skalna">wełna skalna</option>
                    <option value="stryodur">stryodur</option>
                    <option value="inne">inne</option>
                </select>
                <!-- HIDING -->
                <label for="another-isolation-material-detail" class="d-none">Inny typ materiału:</label>
                <input type="text" id="another-isolation-material-detail" disabled class="d-none"
                    placeholder="nazwa materiału" aria-placeholder="nazwa materiału"
                    name="another-isolation-material-detail">
            </div>

            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                <label for="current-heat-source">Obecne źródło ciepła</label>
                <select name="current-heat-source" id="current-heat-source" data-name="dropdown" data-calc_value="0"
                    aria-invalid="false">
                    <option value="nie wybrano">- Wybierz z listy -</option>
                    <option value="piec 'śmieciuch'">piec 'śmieciuch'</option>
                    <option value="piec na eko-groszek">piec na eko-groszek</option>
                    <option value="piec na pellet">piec na pellet</option>
                    <option value="piec na olej opałowy">piec na olej opałowy</option>
                    <option value="gaz sieciowy">gaz sieciowy</option>
                    <option value="gaz z butli">gaz z butli</option>
                    <option value="kocioł elektryczny">kocioł elektryczny</option>
                    <option value="kominek powietrzny">kominek powietrzny</option>
                    <option value="kominek z płaszczem wodnym">kominek z płaszczem wodnym</option>
                    <option value="inne">inne</option>
                </select>
                <!-- HIDING -->
                <label for="another-current-heat-source-detail" class="d-none">Inny typ
                    ogrzewania:</label>
                <input type="text" id="another-current-heat-source-detail" disabled class="d-none"
                    placeholder="typ ogrzewania" aria-placeholder="typ ogrzewania"
                    name="another-current-heat-source-detail" aria-required="false" required="false">
            </div>
        </fieldset>

        <fieldset class="row py-3 gy-1" id="building-project-drawings-input-group">
            <h5 class="col-12 form__group_title form__group_title--req">Rzuty budynku z opisem/projekt</h5>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="brak" id="building-drawings-yes" name="building-drawings">
                <label for="building-drawings-yes">brak</label>
            </div>
            <div class="col-12 col-md-4 form__input">
                <input type="radio" value="załącznik" id="building-drawings-no" name="building-drawings">
                <label for="building-drawings-no">załącznik</label>
            </div>

            <div class="col-12 form__input d-none" id="building-drawings-file-upload-input">
                <!-- HIDIING -->
                <input type="file" name="building-drawings-file" id="building-drawings-file">
                <label role="button" class="custom-btn" for="building-drawings-file">Wybierz
                    plik</label>
            </div>
        </fieldset>
    </div>


    <fieldset class="row py-3 gy-1">
        <h5 class="col-12 form__group_title">Rodzaj instalacji C.O.</h5>

        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="ogrzewanie podłogowe" id="ogrzewanie-podlogowe"
                name="heating-installation-type" aria-required="false" required="false">
            <label for="ogrzewanie-podlogowe">ogrzewanie podłogowe</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="układ mieszany (podłogówka + grzejniki)" id="ogrzewanie_mixed"
                name="heating-installation-type" aria-required="false" required="false">
            <label for="ogrzewanie_mixed">układ mieszany (podłogówka + grzejniki)</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="c.o. grzejniki" id="c.o.grzejniki" name="heating-installation-type"
                aria-required="false" required="false">
            <label for="c.o.grzejniki">grzejniki</label>
        </div>
    </fieldset>

    <fieldset class="row py-3 gy-1">
        <h5 class="col-12 form__group_title">Rodzaj wentylacji</h5>

        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="grawitacyjna" id="vent-gravit" name="went-type" aria-required="false"
                required="false">
            <label for="vent-gravit">grawitacyjna</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="mechaniczna/rekuperacja" id="vent-mechanic" name="went-type"
                aria-required="false" required="false">
            <label for="vent-mechanic">mechaniczna / rekuperacja</label>
        </div>
    </fieldset>

    <fieldset class="row py-3 gy-1">
        <h5 class="col-12 form__group_title">Rodzaj pompy ciepła jaka Panią/Pana interesuje</h5>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="popma gruntowa" id="heatpump-ground" name="heatpump-type"
                aria-required="false" required="false">
            <label for="heatpump-ground">pompa gruntowa</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="pompa powietrzna" id="heatpump-air" name="heatpump-type"
                aria-required="false" required="false">
            <label for="heatpump-air">pompa powietrzna</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="pompa gruntowa i powietrzna" id="heatpump-both" name="heatpump-type"
                aria-required="false" required="false">
            <label for="heatpump-both">pompa gruntowa i powietrzna</label>
        </div>
    </fieldset>

    <fieldset class="row py-3 gy-1">
        <h5 class="col-12 form__group_title">Do jakich celów ma służyć pompa ciepła</h5>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="centralne ogrzewanie" id="heatpump-goal-co" name="heatpump-goal"
                aria-required="false" required="false">
            <label for="heatpump-goal-co">centralne ogrzewanie</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="centralne ogrzewanie i c.w.u" id="heatpump-goal-co-cwu"
                name="heatpump-goal" aria-required="false" required="false">
            <label for="heatpump-goal-co-cwu">centralne ogrzewanie i c.w.u</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="grzanie wody basenowej" id="heatpump-goal-swimming-pool"
                name="heatpump-goal" aria-required="false" required="false">
            <label for="heatpump-goal-swimming-pool">grzanie wody basenowej</label>
        </div>
    </fieldset>

    <fieldset class="row py-3 gy-1">
        <div class="col-12 col-md-8 col-lg-6 form__input">
            <label for="people-in-household">Ilość osób w gospodarstwie domowym (do zaplanowania
                dziennego rozbioru wody)
            </label>
            <input min="1" max="100" type="number" id="people-in-household" name="people-in-household"
                aria-required="false" required="false">
        </div>
    </fieldset>

    <fieldset class="row py-3 gy-1">
        <h5 class="col-12 form__group_title">Czy oferta ma zawierać koszt wykonania instalacji
            podłogowej/grzejnikowej?</h5>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="Tak" id="installation-price-yes" name="installation-price"
                aria-required="false" required="false">
            <label for="installation-price-yes">Tak</label>
        </div>
        <div class="col-12 col-md-4 form__input">
            <input type="radio" value="Nie" id="installation-price-no" name="installation-price"
                aria-required="false" required="false">
            <label for="installation-price-no">Nie</label>
        </div>
    </fieldset>

    <fieldset class="row py-5 gy-1">
        <div class="col-12 form__input">
            <input type="checkbox" name="accept-regulations" id="accept-regulations">
            <label for="accept-regulations">
                Zgadzam się na przetwarzanie podanych danych do celów przygotowania oferty zgodnie z <a
                    href="#">polityką prywatności</a>
            </label>
        </div>
        <!-- <div class="col g-recaptcha" data-sitekey="6Le-dvcpAAAAAAlMbuZCsSPbpcDDbzJ15kAwzNIj"></div> -->
    </fieldset>

    <div class="row">
        <button class="col align-self-center custom-btn custom-btn--contained custom-btn--l"
            type="submit">Wyślij</button>
    </div>
</form>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/components/forms/heatpumps-offer.blade.php ENDPATH**/ ?>