<?php
if (in_array($_SERVER["SERVER_NAME"], ["127.0.0.1", "localhost", "macbook-air.home"])) {
    return "";
}
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5XTNC675B0"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-5XTNC675B0');
</script>
