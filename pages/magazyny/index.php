<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once("./components/header_links.html") ?>

    <?php
    add_meta_description(
        url: "https://bulerenergy.pl/magazyny-energii",
        title: "Magazyny Energii - Buler Thermal Energy",
        description: "Buler Thermal Energy oferuje modułowe systemy magazynowania energii, w tym Energy-Butler i Energy-Block od M-TEC, idealne dla domów jednorodzinnych i użytku komercyjnego. Zintegrowane inwertery i wysoka wydajność zapewniają niezależność energetyczną i maksymalne zużycie energii słonecznej.",
        short_description: "Instalacja systemu magazynowania energii Energy-Butler od M-TEC jest łatwa i efektywna. Oferujemy rozwiązania zarówno dla domów jednorodzinnych, jak i dla użytku komercyjnego."
    );
    ?>
    <meta name="keywords" content="Magazyny energii, Energy-Butler, Energy-Block, M-TEC, modułowy system magazynowania energii, fotowoltaika, system all in one, Buler Thermal Energy">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Magazyny Energii",
            "image": "https://www.bulerenergy.pl/static/energy-butler.png",
            "description": "Buler Thermal Energy oferuje modułowe systemy magazynowania energii, w tym Energy-Butler i Energy-Block od M-TEC, idealne dla domów jednorodzinnych i użytku komercyjnego.",
            "brand": {
                "@type": "Brand",
                "name": "M-TEC"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://www.bulerenergy.pl/magazyny-energii",
                "priceCurrency": "PLN",
                "availability": "https://schema.org/InStock"
            }
        }
    </script>
    <?php require_once("./components/google_tags.php") ?>
</head>


<body>
    <?php require_once("./components/navigation.php") ?>

    <main>
        <?php require_once("./pages/magazyny/sections.php") ?>

        <?php require_once("./components/contact.php") ?>
    </main>

    <?php require_once("./components/footer.php") ?>
</body>