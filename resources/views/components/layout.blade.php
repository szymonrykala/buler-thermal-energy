<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- BASE -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Author" content="Szymon Rykała">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

    {{-- @vite(['resources/js/app.js', 'resources/css/app.scss', 'resources/css/bootstrap-grid.css']) --}}
    @vite(['resources/js/app.js'])

    <!-- FAVICON -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="/static/logo_64.png">
    <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="/static/logo_112.png">
    <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="/static/logo_112.png">


    <!-- SOCIAL MEDIA SUPPORT -->
    <meta property="og:locale" content="pl_PL" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Buler Thermal Energy" />
    <meta property="og:image" content="{{ asset('images/logo_512.png') }}" />

    <meta name="twitter:custom-card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('images/logo_512.png') }}">
    <meta property="twitter:domain" content="bulerenergy.pl">


    <link rel="canonical" href="https://bulerenergy.pl/">

    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Open+Sans&display=swap' />
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap' />


    <!-- Captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <meta name="keywords" content="{{ $keywords }}">

    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $shortDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="twitter:title" content="{{ $title }}">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:description" content="{{ $shortDescription }}">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Buler Thermal Energy",
            "url": "https://www.bulerenergy.pl",
            "logo": "https://www.bulerenergy.pl/static/logo_512.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+48 664 435 690",
                "contactType": "Customer Service",
                "areaServed": "PL",
                "availableLanguage": "Polish"
            }
        }
    </script>

    @env(['production'])
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5XTNC675B0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-5XTNC675B0");
    </script>
    @endenv


    <!-- Cookie Consent by TermsFeed https://www.TermsFeed.com -->
    <script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.2.0/cookie-consent.js"
        charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function() {
            cookieconsent.run({
                "notice_banner_type": "simple",
                "consent_type": "implied",
                "palette": "dark",
                "language": "pl",
                "page_load_consent_levels": ["strictly-necessary", "functionality", "tracking",
                    "targeting"],
                "notice_banner_reject_button_hide": false,
                "preferences_center_close_button_hide": false,
                "page_refresh_confirmation_buttons": false,
                "website_name": "Buler Thermal Energy"
            });
        });
    </script>

    <noscript>Free cookie consent management tool by <a rel="nofollow" href="https://www.termsfeed.com/">TermsFeed</a></noscript>
    <!-- End Cookie Consent by TermsFeed https://www.TermsFeed.com -->

</head>

<body>
    <x-navigation />

    {{ $slot }}

    <x-footer />

    <div class="background-logo slow-constant-rotate slow-constant-rotate--long slow-constant-rotate--offset-1">
        <img src="{{ asset('images/logo_1024.png') }}" alt="Logo fimry Buler Thermal Energy">
        <div class="blur"></div>
    </div>
</body>
