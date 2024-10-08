<header class="navbar container-fluid blur-3">
    <div class="container">
        <div class="row align-items-center py-3 justify-content-between">

            <a class="col navbar__logo --cool-font --bald" href="{{ route("home") }}">
                <img class="slow-constant-rotate" alt="Logo" src="{{ asset('images/logo_112.png') }}" />
                Buler Thermal Energy
            </a>

            <nav class="col d-none d-lg-block">
                <ul class="navbar__links">
                    <li>
                        <a class="--cool-font" href="{{ route('home') . '#oferta' }}">Oferta</a>
                        <ul class="navbar__submenu round-3 blur-3 bg-secondary">
                            <li>
                                <a class="--cool-font" href="/pompy-ciepla">Pompy ciepła</a>
                                <ul>
                                    <li><a href="{{ route('heatpumps.air') }}">Powietrzne</a></li>
                                    <li><a href="{{ route('heatpumps.ground.glycol') }}">Gruntowe glikol</a></li>
                                    <li><a href="{{ route('heatpumps.ground.water') }}">Gruntowe woda-woda</a></li>
                                    <li><a href="{{ route('heatpumps.ground.direct-evaporation') }}">Bezpośrednie parowanie</a></li>
                                </ul>
                            </li>

                            <li><a class="--cool-font" href="{{ route('batteries') }}">Magazyny energii</a></li>
                            <li>
                                <a class="--cool-font" href="{{ route('in-progress') }}">Rekuperacja</a>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a class="--cool-font" href="{{ route('free-pricing') }}">Wycena</a></li>
                    <li class=""><a class="--cool-font" href="{{ route('home') . '#firma' }}">O firmie</a></li>
                    <li class=""><a class="--cool-font" href="{{ route('contact') }}">Kontakt</a></li>
                </ul>
            </nav>

            <button class="d-lg-none col-2 navbar__menu-button">
                <span id="close-icon">
                    <x-icons.close />
                </span>
                <span id="open-icon">
                    <x-icons.menu />
                </span>

            </button>
        </div>
    </div>
</header>


<nav class="side-nav">
    <ul class="side-nav__links">
        <li><a href="{{ route('home') . '#firma' }}">O firmie</a></li>
        <li>
            <a href="{{ route('home') . '#oferta' }}">Oferta</a>
            <ul class="side-nav__submenu">
                <li>
                    <a href="{{ route('heatpumps.main') }}">Pompy ciepła</a>
                </li>

                <li>
                    <a href="{{ route('batteries') }}">Magazyny energii</a>
                </li>
                <li>
                    <a href="{{ route('in-progress') }}">Rekuperacja</a>
                </li>
                <li>
                    <a href="{{ route('trt-measurements') }}">Pomiary TRT</a>
                </li>
                <li>
                    <a href="{{ route('in-progress') }}">Fotowoltaika</a>
                </li>
                <li>
                    <a href="{{ route('in-progress') }}">Audyty budynków</a>
                </li>
            </ul>
        </li>
        <li><a href="{{ route('contact') }}">Kontakt</a></li>
    </ul>
</nav>

<a href="#" class="top-scroll">
    <x-icons.arrow-up />
</a>
