<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Buler Thermal Energy - Gruntowe Pompy Ciepła','shortDescription' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji','description' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków.','keywords' => 'Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler','url' => 'https://bulerenergy.pl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


    <?php if (isset($component)) { $__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.hero','data' => ['img' => ''.e(asset('/images/hydrosplit-hydro-box.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['img' => ''.e(asset('/images/hydrosplit-hydro-box.png')).'']); ?>
        <h1 class="--bald">Gruntowe Pompy Ciepła</h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a href="#formularz-ofertowy" class="custom-btn custom-btn--contained center-block">formularz
            ofertowy</a>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764)): ?>
<?php $attributes = $__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764; ?>
<?php unset($__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764)): ?>
<?php $component = $__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764; ?>
<?php unset($__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764); ?>
<?php endif; ?>


    <section class="container">
        <div class="row py-5 gy-5 text-center">
            <h2 class="col-12">Zasada działania</h2>
            <div class="col-lg px-5">
                <span class="number-icon">1</span>
                <p>
                    W gruntowych pompach ciepła z glikolem, czynnik roboczy (glikol) krąży w dolnym źródle
                    i transportuje ciepło z gruntu do pompy. Następnie, w obiegu pompy ciepła, czynnik chłodniczy
                    przechodzi z fazy ciekłej do gazowej w parowniku, co umożliwia odzyskanie ciepła z gruntu.
                </p>
            </div>
            <div class="col-lg px-lg-5">
                <span class="number-icon">2</span>
                <p>
                    Po zwiększeniu ciśnienia i temperatury czynnika przez sprężarkę, trafia on do skraplacza, gdzie
                    oddaje ciepło do systemu grzewczego, takiego jak ogrzewanie podłogowe, ścienne czy grzejnikowe.
                    System działa najefektywniej w połączeniu z instalacjami niskotemperaturowymi, szczególnie
                    ogrzewaniem podłogowym.
                </p>
            </div>
            <div class="col-12 col-md-10 col-lg-8 m-auto">
                <span class="number-icon">👍</span>
                <p>
                    To rozwiązanie doskonale sprawdza się w domach energooszczędnych i jest idealnym wyborem dla
                    osób poszukujących ekologicznych i oszczędnych rozwiązań grzewczych.
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid position-relative py-5">
        <div class="row p-3">
            <img class="img-fluid img cover vh6" src="<?php echo e(asset('images/lady-with-a-pot.png')); ?>"
                alt="pompa ciepła powietrze-woda">

            <div class="w-100 py-5 my-5"></div>

            <div class="col offset-md-1 col-md-8 col-lg-7 col-xl-6 p-3 p-md-4 bg-secondary blur-2 round-3">
                <h2>Jakie ma zalety?</h2>
                <ul>
                    <li><b>Wysoka efektywność energetyczna </b>:<br> Gruntowe pompy ciepła działają niezależnie
                        od
                        zewnętrznych warunków pogodowych, co pozwala na stałą wydajność przez cały rok.</li>
                    <li><b>Niskie koszty eksploatacji</b>:<br> Dzięki wykorzystaniu energii z gruntu, pompy
                        ciepła
                        znacznie obniżają koszty ogrzewania i chłodzenia w porównaniu z tradycyjnymi systemami.
                    </li>
                    <li><b>Wielofunkcyjność </b>:<br> Oprócz ogrzewania, pompy mogą również chłodzić budynek
                        latem,
                        a także dostarczać ciepłą wodę użytkową.</li>
                    <li><b>Długa żywotność </b>:<br> Systemy gruntowych pomp ciepła są trwałe, a ich podziemne
                        instalacje mogą działać nawet kilkadziesiąt lat.</li>
                    <li><b>Wysoka efektywność w instalacjach niskotemperaturowych </b>:<br> Najlepiej
                        współpracują
                        z ogrzewaniem podłogowym i innymi systemami niskotemperaturowymi, co zwiększa
                        oszczędności.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row text-center">
            <h2 class="col-12">Proponowane pompy ciepła</h2>
            <p class="col-12 col-lg-8 offset-lg-2">Oferujemy tylko sprawdzone i niezawodne urządzenia.
                Odpowiednio dobrany model to kluczowa decyzja. Skontaktuj się z nami a podejmiemy ją razem.</p>
        </div>
        <div class="row gy-3 p-2">

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalfdc980dc279c4803e3fa71d4a62c1826 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdc980dc279c4803e3fa71d4a62c1826 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.heatpump-product','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heatpump-product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdc980dc279c4803e3fa71d4a62c1826)): ?>
<?php $attributes = $__attributesOriginalfdc980dc279c4803e3fa71d4a62c1826; ?>
<?php unset($__attributesOriginalfdc980dc279c4803e3fa71d4a62c1826); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdc980dc279c4803e3fa71d4a62c1826)): ?>
<?php $component = $__componentOriginalfdc980dc279c4803e3fa71d4a62c1826; ?>
<?php unset($__componentOriginalfdc980dc279c4803e3fa71d4a62c1826); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>

    <?php echo $__env->make('heatpumps.offer-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/heatpumps/glycol.blade.php ENDPATH**/ ?>