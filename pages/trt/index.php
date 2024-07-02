<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once("./components/header_links.html") ?>

    <?php
    add_meta_description(
        url: "https://bulerenergy.pl/pomiary-trt",
        title: "Pomiary TRT - Buler Thermal Energy",
        description: "Buler Thermal Energy oferuje szczegółowe usługi pomiaru efektywnej przewodności cieplnej gruntu metodą Thermal Response Test. Gwarantujemy precyzyjne wyniki, stabilne zasilanie elektryczne i szybki czas dostarczenia sprawozdania."
    );
    ?>

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Thermal Response Test",
            "provider": {
                "@type": "Organization",
                "name": "Buler Thermal Energy",
                "logo": "https://www.bulerenergy.pl/static/logo_512.png",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+48 664 435 690",
                    "contactType": "Customer Service",
                    "areaServed": "PL",
                    "availableLanguage": "Polish"
                }
            },
            "description": "Pomiar efektywnej przewodności cieplnej gruntu metodą Thermal Response Test. Gwarancja precyzyjnych wyników, stabilne zasilanie elektryczne i szybki czas dostarczenia sprawozdania.",
            "offers": {
                "@type": "Offer",
                "url": "https://www.bulerenergy.pl/pomiary-trt",
                "priceCurrency": "PLN",
                "price": "Na zapytanie",
                "availability": "https://schema.org/InStock"
            }
        }
    </script>
    <?php require_once("./components/google_tags.php") ?>
</head>

<body>
    <?php require_once("./components/navigation.php") ?>

    <main>
        <?php require_once("./pages/trt/sections.html") ?>

        <?php require_once("./components/contact.php") ?>
    </main>

    <?php require_once("./components/footer.php") ?>
</body>