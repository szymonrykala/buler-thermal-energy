<?php 
$version = file_get_contents("./.version");
?>

<footer class="footer">
    <div class="container">
        <div class="row p-4">
            <div class="col-12 col-md-6">
                <div class="th-list">
                    <p class="th-list__title">
                        Przydatne linki:
                    </p>
                    <ul class="th-list__list">
                        <li><a class="--cool-font" href="/pompy-ciepla">Pompy ciepła</a></li>
                        <li><a class="--cool-font" href="/magazyny-energii">Magazyny energii</a></li>
                        <li><a class="--cool-font" href="/pomiary-trt">Pomiary TRT</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row py-2">
            <span class="version"><?php echo $version; ?></span>
            <p class="footer__copy col-sm-12 text-center py-4">Copyrights &copy; <?php echo date("Y"); ?> Szymon Rykała & Piotr Buler. All Rights Reserved</p>
        </div>
    </div>
</footer>