<?php
$home_link = "/";

$offer = $home_link . "#oferta";
$about_company = $home_link . "#firma";

if ($_SERVER["REQUEST_URI"] === "/") {
    $home_link = "#";
}
?>

<a href="#" class="top-scroll material-symbols-outlined">arrow_upward_alt</a>

<nav class="top-nav">
    <a class="top-nav__logo --cool-font --bald" href=<?php echo $home_link; ?>>
        <img class="slow-constant-rotate" alt="Logo" src="static/logo_112.png" />
        Buler Thermal Energy
    </a>

    <ul class="top-nav__links">
        <li>
            <a class="--cool-font" href=<?php echo $offer; ?>>Oferta</a>
            <ul class="top-nav__submenu">
                <li>
                    <a href="/pompy-ciepla">Pompy ciepła</a>
                </li>

                <li>
                    <a href="/magazyny-energii">Magazyny energii</a>
                </li>
                <li>
                    <a href="/w-realizacji">Rekuperacja</a>
                </li>
            </ul>
        </li>
        <li><a class="--cool-font" href=<?php echo $about_company; ?>>O firmie</a></li>
        <li><a class="--cool-font" href="#kontakt">Kontakt</a></li>
    </ul>

    <button class="top-nav__menu-button" ></button>
</nav>

<nav class="side-nav">
    <ul class="side-nav__links">
        <li><a href=<?php echo $about_company; ?>>O firmie</a></li>
        <li>
            <a href=<?php echo $offer; ?>>Oferta</a>
            <ul class="side-nav__submenu">
                <li>
                    <a href="/pompy-ciepla">Pompy ciepła</a>
                </li>

                <li>
                    <a href="/magazyny-energii">Magazyny energii</a>
                </li>
                <li>
                    <a href="/w-realizacji">Rekuperacja</a>
                </li>
                <li>
                    <a href="/pomiary-trt">Pomiary TRT</a>
                </li>
                <li>
                    <a href="/fotowoltaika">Fotowoltaika</a>
                </li>
                <li>
                    <a href="/w-realizacji">Audyty budynków</a>
                </li>
            </ul>
        </li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>

    <div class="side-nav__icons">
        <a href="tel:+">tel</a>
        <a href="mailto:biuro@bulerenergy.pl">mail</a>
    </div>
</nav>


<!-- <nav id="side-nav" class="side-nav">
        <header>
            <a href="#homepage">Buler Thermal Energy</a>
            <div id="side-nav-close-btn" class="menu-button --x">
                <div id="top"></div>
                <div id="middle"></div>
                <div id="bottom"></div>
            </div>
        </header>
        <ul>
            <li><a href="#oferta">Oferta</a></li>
            <li><a href="#firma">O firmie</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
        </ul>
    </nav> -->