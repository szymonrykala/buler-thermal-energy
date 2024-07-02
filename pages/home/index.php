<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once("./components/header_links.html") ?>

    <meta name="keywords" content="Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler">

    <?php
    add_meta_description(
        url: "https://bulerenergy.pl",
        title: "Buler Thermal Energy - Pompy Ciepła, Magazyny Energii, Fotowoltaika",
        description: "Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków."
    );
    ?>

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
    <?php require_once("./components/google_tags.php") ?>
</head>


<body>
    <?php require_once("./components/navigation.php") ?>
    <?php require_once("./pages/home/header.html") ?>

    <main>
        <?php require_once("./pages/home/sections.php") ?>
        <?php require_once("./components/contact.php") ?>
    </main>

    <?php require_once("./components/footer.php") ?>
</body>