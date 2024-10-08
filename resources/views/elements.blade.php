<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Open+Sans&display=swap' />
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap' />

    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/js/offer-form.js', 'resources/css/bootstrap-grid.css'])
    <title>elements testing</title>

</head>

<body>
    <section class="container">
        <div class="row g-5">
            <h3 class="col-12 h2">
                buttons .custom-btn
            </h3>
            <div class="col-4">
                <a href="#" class="custom-btn custom-btn--s">
                    small button
                </a>
            </div>
            <div class="col-4">
                <a href="#" class="custom-btn">
                    normal button
                </a>
            </div>
            <div class="col-4">
                <a href="#" class="custom-btn custom-btn--l">
                    large button
                </a>
            </div>
        </div>

        <div class="row">
            <h1 class="h1 col-12">h1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <h2 class="h2 col-12">h2 Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                <h3 class="h3 col-12">h3 Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <h4 class="h4 col-12">h4 Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <h5 class="h5 col-12">h5 Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                            <h6 class="h6 col-12">h6 Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
        </div>

        <div class="w-100 py-5"></div>
        <div class="row">
            <div class="col-12">
                <div class="container ">


                    <!-- ELEMENT START -->
                    <div class="row spec-0">
                        <div class="col-12 col-lg-4 col-xl-3">
                            <div class="row g-3">

                                <div class="col-12">
                                    <div class="spec__item">
                                        <input type="radio" name="spec1" id="item1">
                                        <label for="item1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                                <path
                                                    d="M450-290h60v-160h160v-60H510v-160h-60v160H290v60h160v160Zm30.07 190q-78.84 0-148.21-29.92t-120.68-81.21q-51.31-51.29-81.25-120.63Q100-401.1 100-479.93q0-78.84 29.92-148.21t81.21-120.68q51.29-51.31 120.63-81.25Q401.1-860 479.93-860q78.84 0 148.21 29.92t120.68 81.21q51.31 51.29 81.25 120.63Q860-558.9 860-480.07q0 78.84-29.92 148.21t-81.21 120.68q-51.29 51.31-120.63 81.25Q558.9-100 480.07-100Zm-.07-60q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                            </svg>
                                            <span>
                                                3KW - 1p - 3G3O
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="d-none d-lg-none col-12 spec__view spec__view-item1">
                                    <div class="row">
                                        <h3 class="col-12 h2 py-4">
                                            Hybrid inverter 3kW - 1P - 3G3O
                                        </h3>
                                    </div>
                                    <div class="row g-4 ps-5">
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Wymiary (W x D x H) mm</h3>
                                                <p>698 x 356 x 613</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Waga kg</h3>
                                                <p>53</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. użyteczna moc wejściowa DC</h3>
                                                <p>3 kWp</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. Moc wyjściowa AC</h3>
                                                <p>3,3 kW</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Zakres napięcia MPPT</h3>
                                                <p>50 - 550 V</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Tracker MPP / połączenia łańcuchowe na MPPT</h3>
                                                <p>1/1</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Prąd znamionowy na MPPT</h3>
                                                <p>15 A</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. Prąd ładowania i rozładowywania prądu stałego</h3>
                                                <p>20 A</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>MAKS. Ładowanie i rozładowywanie prądu stałego</h3>
                                                <p>3,0 kW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="spec__item">
                                        <input type="radio" name="spec1" id="item2">
                                        <label for="item2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                                <path
                                                    d="M450-290h60v-160h160v-60H510v-160h-60v160H290v60h160v160Zm30.07 190q-78.84 0-148.21-29.92t-120.68-81.21q-51.31-51.29-81.25-120.63Q100-401.1 100-479.93q0-78.84 29.92-148.21t81.21-120.68q51.29-51.31 120.63-81.25Q401.1-860 479.93-860q78.84 0 148.21 29.92t120.68 81.21q51.31 51.29 81.25 120.63Q860-558.9 860-480.07q0 78.84-29.92 148.21t-81.21 120.68q-51.29 51.31-120.63 81.25Q558.9-100 480.07-100Zm-.07-60q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                            </svg>
                                            <span>
                                                4.2KW - 1p - 3G3O
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="d-none d-lg-none col-12 spec__view spec__view-item2">
                                    <div class="row">
                                        <h3 class="col-12 h2 py-4">
                                            Hybrid inverter 4.2KW - 1p - 3G3O
                                        </h3>
                                    </div>
                                    <div class="row g-4 ps-5">
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Wymiary (W x D x H) mm</h3>
                                                <p>777 x 333 x 666</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Waga kg</h3>
                                                <p>53</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. użyteczna moc wejściowa DC</h3>
                                                <p>3 kWp</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. Moc wyjściowa AC</h3>
                                                <p>3,3 kW</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Zakres napięcia MPPT</h3>
                                                <p>50 - 550 V</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Tracker MPP / połączenia łańcuchowe na MPPT</h3>
                                                <p>1/1</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Prąd znamionowy na MPPT</h3>
                                                <p>15 A</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. Prąd ładowania i rozładowywania prądu stałego</h3>
                                                <p>20 A</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>MAKS. Ładowanie i rozładowywanie prądu stałego</h3>
                                                <p>3,0 kW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="spec__item">
                                        <input type="radio" name="spec1" id="item3">
                                        <label for="item3">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                                <path
                                                    d="M450-290h60v-160h160v-60H510v-160h-60v160H290v60h160v160Zm30.07 190q-78.84 0-148.21-29.92t-120.68-81.21q-51.31-51.29-81.25-120.63Q100-401.1 100-479.93q0-78.84 29.92-148.21t81.21-120.68q51.29-51.31 120.63-81.25Q401.1-860 479.93-860q78.84 0 148.21 29.92t120.68 81.21q51.31 51.29 81.25 120.63Q860-558.9 860-480.07q0 78.84-29.92 148.21t-81.21 120.68q-51.29 51.31-120.63 81.25Q558.9-100 480.07-100Zm-.07-60q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                            </svg>
                                            <span>
                                                7.2KW - 1p - 3G3O
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="d-none d-lg-none col-12 spec__view spec__view-item3">

                                    <div class="row">
                                        <h3 class="col-12 h2 py-4">
                                            Hybrid inverter 7.2KW - 1p - 3G3O
                                        </h3>
                                    </div>
                                    <div class="row g-4 ps-5">
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Wymiary (W x D x H) mm</h3>
                                                <p>698 x 356 x 613</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Waga kg</h3>
                                                <p>53</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. użyteczna moc wejściowa DC</h3>
                                                <p>3 kWp</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. Moc wyjściowa AC</h3>
                                                <p>3,3 kW</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Zakres napięcia MPPT</h3>
                                                <p>50 - 550 V</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Tracker MPP / połączenia łańcuchowe na MPPT</h3>
                                                <p>1/1</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Prąd znamionowy na MPPT</h3>
                                                <p>15 A</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>Max. Prąd ładowania i rozładowywania prądu stałego</h3>
                                                <p>20 A</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="spec__param">
                                                <h3>MAKS. Ładowanie i rozładowywanie prądu stałego</h3>
                                                <p>3,0 kW</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-8 col-xl-9 spec__display ps-5">
                            data of the selected item
                        </div>
                    </div>
                    <!-- ELEMENT END -->


                </div>
            </div>
        </div>

    </section>

</body>

</html>
