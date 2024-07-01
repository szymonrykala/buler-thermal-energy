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

    <button class="top-nav__menu-button">
        <span id="close-icon">
            <?php require_once("components/icons/close.svg") ?>
        </span>
        <span id="open-icon">
            <?php require_once("components/icons/menu.svg") ?>
        </span>

    </button>
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
        <a href="tel:+48664435690" class="material-symbols-outlined">
            <?php require_once("components/icons/phone.svg") ?>
        </a>
        <a href="mailto:biuro@bulerenergy.pl" class="material-symbols-outlined">
            <?php require_once("components/icons/email.svg") ?>
        </a>
    </div>
</nav>