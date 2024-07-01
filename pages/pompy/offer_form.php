<section class="page page--paper" id="formularz-ofertowy">
    <div class="container">

        <div class="row justify-content-center py-5">
            <h2 class="col-12 h1">Oferta dla <span class="--cool-font --colored">Ciebie</span>!</h2>
            <p class="col-12 col-md-8 col-lg-8 page__p text-center">
                Wypełnij dane, i wyslij formularz, a my przygotujemy i wyślemy Ci ofertę dostosowaną do Twoich
                wymagań.<br /> <span class="--colored">Nie czekaj!</span>
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <form class="form container">

                    <fieldset class="row py-4 gy-3">
                        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                            <label for="first_name">Imię</label>
                            <input type="text" id="first_name" name="first_name" aria-required="true" required="true">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                            <label for="second_name">Nazwisko</label>
                            <input type="text" id="second_name" name="second_name" aria-required="true" required="true">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                            <label for="email_address">Adres email</label>
                            <input type="email" id="email_address" name="email_address" aria-required="true" required="true">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                            <label for="phone_number">Numer telefonu</label>
                            <input type="tel" id="phone_number" name="phone_number" aria-required="true" required="true">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                            <label for="city">Miejscowość</label>
                            <input type="text" id="city" name="city" aria-required="true" required="true">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                            <label for="planned_realization_date">Planowany termin realizacji</label>
                            <input type="date" id="planned_realization_date" name="planned_realization_date" aria-required="true" required="true">
                        </div>
                    </fieldset>

                    <fieldset class="row py-4 gy-3" id="new-or-existing-building-fieldset">
                        <h5 class="col-12 form__group_title form__group_title--req">Rodzaj budynku/obiektu</h5>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="Obiekt nowobudowany" id="new_buildling" name="building_state" aria-required="true" required="true">
                            <label for="new_buildling">obiekt nowobudowany</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="Obiekt istniejący" id="building_exists" name="building_state" aria-required="true" required="true">
                            <label for="building_exists">obiekt istniejący</label>
                        </div>
                    </fieldset>


                    <!-- OBIEKT NOWOBUDOWANY -->
                    <div class="d-none form__section--inner" id="new-buildling-dynamic-section">

                        <fieldset class="row py-4 gy-3" id="building-project-type-fieldset">
                            <h5 class="col-12 form__group_title form__group_title--req">
                                Rodzaj projektu budynku/obiektu
                            </h5>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Projekt gotowy" id="predefined-project" name="building_project_type" aria-required="true" required="true">
                                <label for="predefined-project">Projekt gotowy (np: Dom w Malinówkach
                                    G2)</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Projekt indywidualny" id="individual-project" name="building_project_type">
                                <label for="individual-project">Projekt indywidualny</label>
                            </div>
                            <div class="w-100"></div>
                            <div class="d-none col-12 col-md-8 col-lg-4 form__input" id="predefined-project-name-dynamic-group">
                                <input type="text" name="predefined_project_name" placeholder="np: Dom w Malinówkach G2" aria-placeholder="np: Dom w Malinówkach G2">
                            </div>

                            <div class="d-none col-12 form__input" id="individual-project-file-dynamic-group">
                                <input type="file" name="individual_project_file" id="individual_project_file">
                                <label class="btn" for="individual_project_file">
                                    Wybierz plik z projektem
                                </label>
                            </div>
                        </fieldset>


                        <fieldset class="row py-4 gy-3">
                            <div class="col-12 col-md-8 col-lg-4 form__input">
                                <label for="building_energy_consumption_w">Projektowane obciążenie cieplne
                                    budynku
                                    [W]</label>
                                <input type="number" min="0" max="1000000" value="5000" step="50" id="building_energy_consumption_w" name="building_project_type">
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3" id="building-materials-fieldset">
                            <h5 class="col-12 form__group_title form__group_title--req">Materiały użyte do
                                budowy</h5>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Zgodnie z projektem" id="align_with_project" name="building_materials">
                                <label for="align_with_project">zgodnie z projektem</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Zmiany materiałów" id="material_changes" name="building_materials" aria-required="true" required="true">
                                <label for="material_changes">zmiany materiałów</label>
                            </div>

                            <div class="d-none col-12 col-md-8 form__input" id="material-changes-elaborate-textfield">
                                <textarea cols="20" rows="5" name="material_changes_elaborate" placeholder="przykład: w projekcie bloczek gazobeton - wybudowano z cegły porotherm; w projekcie ocieplenie dachu wełną - wykonano izolację pianą PIR, PUR lub celulozą; zmiana grubości warstw" aria-placeholder="przykład: w projekcie bloczek gazobeton - wybudowano z cegły porotherm; w projekcie ocieplenie dachu wełną - wykonano izolację pianą PIR, PUR lub celulozą; zmiana grubości warstw"></textarea>
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3">
                            <h5 class="col-12 form__group_title form__group_title--req">Obecny stan/etap budowy
                            </h5>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="etap projektowy" id="project_step" name="build_progress">
                                <label for="project_step">etap projektowy</label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="początek budowy" id="building_start" name="build_progress">
                                <label for="building_start">początek budowy</label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="stan surowy otwarty" id="building_raw_open_state" name="build_progress">
                                <label for="building_raw_open_state">stan surowy otwarty</label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="stan surowy zamknięty" id="building_raw_closed_state" name="build_progress">
                                <label for="building_raw_closed_state">stan surowy zamknięty</label>
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3">
                            <h5 class="col-12 form__group_title">Podział budynku na strefy grzewcze
                            </h5>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="brak (budynek jako jedna strefa)" id="no_heating_areas" name="building_heating_areas">
                                <label for="no_heating_areas">brak (budynek jako jedna strefa)</label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="jedna strefa z regulacją temperatury w wybranych pomieszczeniach" id="signle_heating_area" name="building_heating_areas">
                                <label for="signle_heating_area">jedna strefa z regulacją temperatury w
                                    wybranych
                                    pomieszczeniach</label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="dwie strefy grzewcze" id="two_heating_areas" name="building_heating_areas">
                                <label for="two_heating_areas">dwie strefy grzewcze</label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 form__input">
                                <input type="radio" value="na tą chwilę nie wiem" id="not_decided_heating_areas" name="building_heating_areas">
                                <label for="not_decided_heating_areas">na tą chwilę nie wiem</label>
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3">
                            <h5 class="col-12 form__group_title">Oczekiwana temperatura pomieszczeń w domu:</h5>
                            <div class="col-12 col-md-8 col-lg-6 form__input">
                                <label for="room_expected_temperature"></label>
                                <input type="range" min="20" max="28" step="1" value="22" id="room_expected_temperature" name="room_expected_temperature">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12 col-md-8 col-lg-6 form__input">
                                <label for="garage_expected_temperature"></label>
                                <input type="range" min="5" max="20" step="1" value="18" id="garage_expected_temperature" name="garage_expected_temperature">
                            </div>
                        </fieldset>
                    </div>


                    <!-- OBIEKT ISTNIEJĄCY -->
                    <div class="d-none form__section--inner" id="existing-buildling-dynamic-section">
                        <fieldset class="row py-4 gy-3" id="building-type-fieldset">
                            <h5 class="col-12 form__group_title">Typ budynku</h5>

                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="podpiwniczony" id="podpiwniczony" name="building_type" aria-required="false" required="false">
                                <label for="podpiwniczony">podpiwniczony</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="parterowy" id="parterowy" name="building_type" aria-required="false" required="false">
                                <label for="parterowy">parterowy</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="parterowy z poddaszem użytkowym" id="parterowy_z_poddaszem" name="building_type" aria-required="false" required="false">
                                <label for="parterowy_z_poddaszem">parterowy z poddaszem użytkowym</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="piętrowy" id="piętrowy" name="building_type" aria-required="false" required="false">
                                <label for="piętrowy">piętrowy</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="inny" id="another-type" name="building_type" aria-required="false" required="false">
                                <label for="another-type">inny</label>
                            </div>
                            <div class="w-100"></div>
                            <!-- HIDING -->
                            <div class="col-12 col-md-4 form__input" , id="another-building-type-detail-section">
                                <label for="another-building-type-detail">Inny typ:</label>
                                <input type="text" id="another-building-type-detail" placeholder="podaj inny typ budynku" aria-placeholder="podaj inny typ budynku" name="another_building_type_detail" aria-required="false" required="false">
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3">
                            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                                <label for="construction_year">Rok budowy budynku</label>
                                <input type="number" min="1900" max=<?php echo date("Y"); ?> value="2015" id="construction_year" name="construction_year">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                                <label for="building_heating_surface">Powierzchnia grzewcza budynku</label>
                                <input type="number" min="10" max="999" value="100" step="10" id="building_heating_surface" name="building_heating_surface">
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3">
                            <h5 class="col-12 form__group_title form__group_title--req">Czy w bryle budynku jest garaż?</h5>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Tak" id="garage_in_building_yes" name="garage_in_building">
                                <label for="garage_in_building_yes">Tak</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Nie" id="garage_in_building_no" name="garage_in_building">
                                <label for="garage_in_building_no">Nie</label>
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3">
                            <h5 class="col-12 form__group_title form__group_title--req">Konstrukcja ściany zewnętrznej</h5>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Tak" id="single_layer" name="wall-construction">
                                <label for="single_layer">jednowarstwowa</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="Nie" id="multi_layer" name="wall-construction">
                                <label for="multi_layer">dwuwarstwowa z pustką powietrzną</label>
                            </div>
                        </fieldset>

                        <fieldset class="row py-4">
                            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                                <label for="external-wall-width">Grubość ściany zewnętrznej</label>
                                <input type="number" min="1" max="999" step="1" id="external-wall-width" name="external-wall-width">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                                <label for="isolation-width">Grubość ocieplenia</label>
                                <input type="number" min="1" max="999" step="1" id="isolation-width" name="isolation-width">
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-0">
                            <div class="col-12 col-md-6 col-lg-4 form__input">
                                <label for="building-material">Materiał użyty do budowy:</label>
                                <select name="building-material" id="building-material" data-name="dropdown" data-calc_value="0" aria-invalid="false" aria-required="false">
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
                                <input type="text" class="d-none" id="another-building-material-detail" placeholder="nazwa materiału" aria-placeholder="nazwa materiału" name="another-building-material-detail" aria-required="false" required="false">
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 form__input form__input--req">
                                <label for="isolation-material">Materiał ociepleniowy budynku</label>
                                <select name="isolation-material" id="isolation-material" data-name="dropdown" data-calc_value="0" aria-invalid="false" aria-required="false">
                                    <option value="">- Wybierz z listy -</option>
                                    <option value="styropian">styropian</option>
                                    <option value="wełna skalna">wełna skalna</option>
                                    <option value="stryodur">stryodur</option>
                                    <option value="inne">inne</option>
                                </select>
                                <!-- HIDING -->
                                <label for="another-isolation-material-detail" class="d-none">Inny typ materiału:</label>
                                <input type="text" id="another-isolation-material-detail" class="d-none" placeholder="nazwa materiału" aria-placeholder="nazwa materiału" name="another-isolation-material-detail" aria-required="false" required="false">
                            </div>

                        </fieldset>

                        <fieldset class="row py-4 gy-3" id="building-project-drawings-input-group">
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
                                <label role="button" class="btn" for="building-drawings-file">Wybierz plik</label>
                            </div>
                        </fieldset>

                        <fieldset class="row py-4 gy-3" id="current-heat-source-fieldset">
                            <h5 class="col-12 form__group_title form__group_title--req">Obecne źródło ciepła</h5>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="piec 'śmieciuch'" id="tradicional-heater" name="current-heating-source">
                                <label for="tradicional-heater">piec "śmieciuch"</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="piec na eko-groszek" id="eko-groszek" name="current-heating-source">
                                <label for="eko-groszek">piec na eko-groszek</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="piec na pellet" id="piec-pellet" name="current-heating-source">
                                <label for="piec-pellet">piec na pellet</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="piec na olej opałowy" id="olej-opalowy" name="current-heating-source">
                                <label for="olej-opalowy">piec na olej opałowy</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="gaz sieciowy" id="gaz-sieciowy" name="current-heating-source">
                                <label for="gaz-sieciowy">gaz sieciowy</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="gaz z butli" id="gaz-butla" name="current-heating-source">
                                <label for="gaz-butla">gaz z butli</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="kocioł elektryczny" id="kociol-elektryczny" name="current-heating-source">
                                <label for="kociol-elektryczny">kocioł elektryczny</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="kominek powietrzny" id="kominek-powietrzny" name="current-heating-source">
                                <label for="kominek-powietrzny">kominek powietrzny</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="kominek z płaszczem wodnym" id="kominek-plaszcz-wodny" name="current-heating-source">
                                <label for="kominek-plaszcz-wodny">kominek z płaszczem wodnym</label>
                            </div>
                            <div class="col-12 col-md-4 form__input">
                                <input type="radio" value="inne" id="current-heating-source-inne" name="current-heating-source">
                                <label for="current-heating-source-inne">inne</label>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-12 col-md-4 form__input" id="another_current-heating-source_detail-input-wrapper">
                                <!-- HIDING -->
                                <label for="another_current-heating-source_detail">Typ ogrzewania:</label>
                                <input type="text" id="another_current-heating-source_detail" placeholder="typ ogrzewania" aria-placeholder="typ ogrzewania" name="another_current-heating-source_detail" aria-required="false" required="false">
                            </div>
                        </fieldset>
                    </div>


                    <fieldset class="row py-4 gy-3">
                        <h5 class="col-12 form__group_title">Rodzaj instalacji C.O.</h5>

                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="ogrzewanie podłogowe" id="ogrzewanie-podlogowe" name="heating_installation_type" aria-required="false" required="false">
                            <label for="ogrzewanie-podlogowe">ogrzewanie podłogowe</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="układ mieszany (podłogówka + grzejniki)" id="ogrzewanie-mixed" name="heating_installation_type" aria-required="false" required="false">
                            <label for="ogrzewanie-mixed">układ mieszany (podłogówka + grzejniki)</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="c.o. grzejniki" id="c.o.grzejniki" name="heating_installation_type" aria-required="false" required="false">
                            <label for="c.o.grzejniki">grzejniki</label>
                        </div>
                    </fieldset>

                    <fieldset class="row py-4 gy-3">
                        <h5 class="col-12 form__group_title">Rodzaj wentylacji</h5>

                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="grawitacyjna" id="went-gravit" name="went_type" aria-required="false" required="false">
                            <label for="went-gravit">grawitacyjna</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="mechaniczna/rekuperacja" id="went-mechanic" name="went_type" aria-required="false" required="false">
                            <label for="went-mechanic">mechaniczna / rekuperacja</label>
                        </div>
                    </fieldset>

                    <fieldset class="row py-4 gy-3">
                        <h5 class="col-12 form__group_title">Rodzaj pompy ciepła jaka Panią/Pana interesuje</h5>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="popma gruntowa" id="heatpump-ground" name="heatpump_type" aria-required="false" required="false">
                            <label for="heatpump-ground">pompa gruntowa</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="pompa powietrzna" id="heatpump-air" name="heatpump_type" aria-required="false" required="false">
                            <label for="heatpump-air">pompa powietrzna</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="pompa gruntowa i powietrzna" id="heatpump-both" name="heatpump_type" aria-required="false" required="false">
                            <label for="heatpump-both">pompa gruntowa i powietrzna</label>
                        </div>
                    </fieldset>

                    <fieldset class="row py-4 gy-3">
                        <h5 class="col-12 form__group_title">Do jakich celów ma służyć pompa ciepła</h5>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="centralne ogrzewanie" id="heatpump_goal_co" name="heatpump_goal" aria-required="false" required="false">
                            <label for="heatpump_goal_co">centralne ogrzewanie</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="centralne ogrzewanie i c.w.u" id="heatpump_goal_co_cwu" name="heatpump_goal" aria-required="false" required="false">
                            <label for="heatpump_goal_co_cwu">centralne ogrzewanie i c.w.u</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="grzanie wody basenowej" id="heatpump_goal_swimming_pool" name="heatpump_goal" aria-required="false" required="false">
                            <label for="heatpump_goal_swimming_pool">grzanie wody basenowej</label>
                        </div>
                    </fieldset>

                    <fieldset class="row py-4 gy-3">
                        <div class="col-12 col-md-8 col-lg-4 form__input">
                            <label for="people_in_household">Ilość osób w gospodarstwie domowym (do zaplanowania
                                dziennego rozbioru wody)
                            </label>
                            <input min="1" max="100" type="number" id="people_in_household" name="people_in_household" aria-required="false" required="false">
                        </div>
                    </fieldset>

                    <fieldset class="row py-4 gy-3">
                        <h5 class="col-12 form__group_title">Czy oferta ma zawierać koszt wykonania instalacji
                            podłogowej/grzejnikowej?</h5>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="Tak" id="installation_price_yes" name="installation_price" aria-required="false" required="false">
                            <label for="installation_price_yes">Tak</label>
                        </div>
                        <div class="col-12 col-md-4 form__input">
                            <input type="radio" value="Nie" id="installation_price_no" name="installation_price" aria-required="false" required="false">
                            <label for="installation_price_no">Nie</label>
                        </div>
                    </fieldset>

                    <fieldset class="row py-5 gy-3">
                        <div class="col-12 form__input">
                            <input type="checkbox" name="accept_regulations" id="accept_regulations">
                            <label for="accept_regulations">
                                Zgadzam się na przetwarzanie podanych danych do celów marketingowych zgodnie z <a href="#">polityką prywatności</a>
                            </label>
                        </div>
                        <!-- <div class="col g-recaptcha" data-sitekey="6Le-dvcpAAAAAAlMbuZCsSPbpcDDbzJ15kAwzNIj"></div> -->
                    </fieldset>

                    <div class="row">
                        <button class="col align-self-center btn btn--contained btn--l" type="submit">Wyślij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>