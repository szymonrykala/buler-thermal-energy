<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once("./components/header_links.html") ?>
    <title>BTE - strona w realizacji</title>

</head>
<?php require_once("./components/google_tags.php") ?>

<body>
    <?php require_once("./components/navigation.php") ?>

    <main>
        <?php
        $content = file_get_contents("./components/contact.php");

        echo str_replace(
            "Zachęcam do kontaktu",
            "Strona w realizacji <br /> Zachęcam do kontaktu",
            $content
        );
        ?>
    </main>

    <?php require_once("./components/footer.php") ?>
</body>