<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once("./components/header_links.html") ?>
    <title>BTE - strona w realizacji</title>

    <style>
        .top-nav__links,
        .footer>.container>.row.g-5.p-4 {
            display: none;
        }
    </style>
</head>
<?php require_once("./components/google_tags.html") ?>

<body>
    <?php require_once("./components/navigation.php") ?>

    <main>
        <?php
        $content = file_get_contents("./components/contact.html");

        echo str_replace(
            "Zachęcam do kontaktu",
            "Strona w realizacji <br /> Zachęcam do kontaktu",
            $content
        );
        ?>
    </main>

    <?php require_once("./components/footer.php") ?>
</body>