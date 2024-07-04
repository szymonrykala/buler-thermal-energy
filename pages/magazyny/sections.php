<?php
require_once("components/specview.php");
?>

<section class="page">
    <div class="container">

        <div class="row">
            <h1 class="col h1 h1--bald">Magazyny energii</h1>
        </div>

        <div class="row py-5">
            <h2 class="col-12 h2 h2--upper h2-p-0 h2--bald">
                Magazyn energii <span class="--cool-font --colored --bald">all-in-one</span> z systemem <span class="--cool-font --colored --bald">e-smart</span>
            </h2>
            <p class="col-12 page__p --cool-font">
                Możliwość składowania i rozbudowy za pomocą zintegrowanego inwertera <span class="--colored --bald"> od 7,7 kWh do 30,7
                    kWh</span>.
            </p>
        </div>

        <div class="row py-0">
            <img src="static/room-and-m-tec-logo.png" alt="m-tec energy bulter">
        </div>
        <div class="row py-5"></div>
        <div class="row py-3 align-items-center">

            <div class="d-none d-md-block col-md-4 col-lg-3 col-xl-2">
                <img class="flex__img--full" src="/static/m-tec-acu-parts.png" />
            </div>

            <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                <h2 class="h2">
                    Instalacja systemu magazynowania energii nigdy nie była łatwiejsza!
                </h2>
                <p class="page__p">
                    Modułowa koncepcja Energy-Butler jest odpowiednia nie tylko dla domów
                    jednorodzinnych, ale może być również rozszerzona dla firm lub wielopiętrowych
                    budynków mieszkalnych do 307 kWh. Zintegrowany falownik oszczędza czas podczas
                    instalacji i miejsce w pomieszczeniu na sprzęt.
                </p>
                <br />
                <br />
                <div class="th-list">
                    <h3 class="h3 h3--upper">Korzyści płynące z zastosowania<span class="--colored --bald"> Energy Butler</span>:
                    </h3>
                    <ul class="th-list__list">
                        <li>Modułowy system z możliwością rozbudowy od 7,7 kWh do 30,7 kWh</li>
                        <li>Dzięki wydajnym falownikom o mocy do 20 kW można obsługiwać nawet większe
                            odbiorniki</li>
                        <li>Gwarantowane 10 000 cykli ładowania w ciągu 10 lat</li>
                        <li>Plug & Play: Inwerter jest już zintegrowany</li>
                        <li>Maksymalne zużycie energii słonecznej</li>
                        <li>Wysoka moc ładowania i rozładowywania</li>
                        <li>można wdrożyć niezależne od sieci awaryjne podtrzymanie zasilania</li>
                        <li>Możliwość 10-krotnego kaskadowania do 307 kWh*</li>
                        <li>Bezpieczna technologia ogniw (fosforanowo-litowo-żelazowe LFP)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row py-5"></div>
        <div class="row">
            <h3 class="col-12 h3 h3--left py-4">
                M-TEC Energy-Butler
            </h3>
            <div class="col-12">
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/DLQNexQhon0?si=JOw34XxkglYZCZjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


<section class="page">
    <div class="container">
        <div class="row">

            <h2 class="col-12 h2 h2--upper  h2--color h2--bald py-5">
                Magazynowanie energii - rozwiązanie dla każdego
            </h2>
        </div>

        <div class="row g-5">

            <div class="col-12 order-lg-1 col-lg-6">
                <img class="img img-h50 center-block" src="/static/m-tec-img2.png" alt="modułowa konstrukcja Energy-block i energy-butler firmy M-TEC">
            </div>

            <div class="col-12 order-lg-12 col-lg-6">
                <p class="page__p">
                    Dzięki dwóm systemom magazynowania <b>Energy-Butler</b> i <b>Energy-Block</b>, M-TEC oferuje
                    rozszerzalne
                    rozwiązania dla domów jednorodzinnych, a także do użytku komercyjnego. Nowoczesne systemy,
                    takie jak Energy-Butler lub Energy-Block, mogą być również rozbudowywane modułowo w
                    późniejszym czasie.
                    <br />
                    <br />
                </p>
                <div class="cascade-img">
                    <img class="flex__img--full" src="/static/bateria-kaskada.png" alt="system kaskadowy m-tec systems">
                    <p>10-krotne<br />kaskadowanie</p>
                    <p><br /><span class="--colored">*</span>&nbsp;W zaleności od zasotosowania z dodatkową "szafą kaskadową".</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="page">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <h2 class="h2 h2--upper h2--bald p-0">
                    Dane techniczne jednofazowego systemu AIO ESS
                </h2>
                <h3 class="h3">Model jednofazowy z 2 do 5 modułami baterii</h3>
            </div>

            <div class="col-12">
                <?php generate_spec_view(file_get_contents("pages/magazyny/hybrid-inverter-1.json"), "0"); ?>
            </div>
        </div>

        <div class="w-100 py-5"></div>
        <div class="w-100 py-5"></div>

        <div class="row gy-4">
            <div class="col-12">
                <h2 class="h2 h2--upper h2--bald p-0">
                    Dane techniczne podłączenia inverterowego
                </h2>
                <h3 class="h3">Dostępnych jest od 2 do 8 trójfazowych modułów baterii</h3>
            </div>
            <div class="col-12">
                <?php generate_spec_view(file_get_contents("pages/magazyny/hybrid-inverter-2.json"), "1"); ?>
            </div>
        </div>

        <div class="w-100 py-5"></div>
        <div class="w-100 py-5"></div>

        <div class="row gy-4">
            <div class="col-12">
                <h2 class="h2 h2--upper h2--bald p-0">
                    Dane techniczne połączeń modułów baterii
                </h2>
            </div>
            <div class="col-12">
                <?php generate_spec_view(file_get_contents("pages/magazyny/battery-modules.json"), "2"); ?>
            </div>
        </div>

    </div>
</section>