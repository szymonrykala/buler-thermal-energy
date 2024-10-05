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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.hero','data' => ['img' => ''.e(asset('/images/direct-evaporation-hero.jpg')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['img' => ''.e(asset('/images/direct-evaporation-hero.jpg')).'']); ?>
        <h1 class="--bald h1-title">Gruntowe Pompy Ciepła <br> Bezpośrednie parowanie</h1>
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
            <div class="col-lg">
                <span class="number-icon">1</span>
                <p>
                    Pompa ciepła bezpośredniego parowania pobiera ciepło z gruntu bezpośrednio przez wymiennik, w którym
                    krąży czynnik roboczy (np. gaz). Następnie sprężarka podnosi jego temperaturę, a ciepło jest
                    przekazywane do systemu grzewczego budynku.
                </p>
            </div>
            <div class="col-lg pt-lg-5">
                <span class="number-icon">2</span>
                <p>
                    Pompy ciepła bezpośredniego parowania są o 20% bardziej wydajne od pomp glikolowych. W sprzyjających
                    warunkach mogą osiągać współczynnik wydajności COP nawet 6,7, co oznacza, że każda jednostka zużytej
                    energii elektrycznej daje do 6,7 jednostki energii cieplnej.
                </p>
            </div>
            <div class="col-lg">
                <span class="number-icon">3</span>
                <p>
                    W pompach typu bezpośrednie parowanie dzięki eliminacji pośredniego czynnika (solanki) uzyskuje się
                    większą wydajność grzewczą w porównaniu do systemów glikolowych, niskie koszty eksploatacji,
                    ekologiczność oraz stabilna praca
                    dzięki bezpośredniemu kontaktowi z gruntem bez potrzeby stosowania pośrednich cieczy (glikolu).
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
            <img class="img-fluid img cover vh6" src="<?php echo e(asset('images/kolektor.jpg')); ?>"
                alt="pompa ciepła powietrze-woda">

            <div class="w-100 py-5 my-5"></div>
            <div class="w-100 py-5"></div>

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
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/heatpumps/direct-evaporation.blade.php ENDPATH**/ ?>