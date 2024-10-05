<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Buler Thermal Energy - Pompy Ciepła Powietrze Woda','shortDescription' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji','description' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków.','keywords' => 'Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler','url' => 'https://bulerenergy.pl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


    <?php if (isset($component)) { $__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.hero','data' => ['img' => ''.e(asset('/images/monter-and-a-lady.jpg')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['img' => ''.e(asset('/images/monter-and-a-lady.jpg')).'']); ?>
        <h1 class="--bald">Pompy Ciepła Powietrze-Woda</h1>
        <p>Ekologiczne i energooszczędne rozwiązania dla Twojego domu</p>
        <a role="button" href="#formularz-ofertowy" class="custom-btn custom-btn--contained center-block">formularz
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
        <div class="row py-5 gy-3 text-center">
            <h2 class="col-12">Zasada działania</h2>
            <div class="col-lg">
                <span class="number-icon">1</span>
                <p>
                    Pompy ciepła powietrze-woda to zaawansowane urządzenia, które efektywnie pozyskują energię do
                    ogrzewania budynków z powietrza atmosferycznego. Działanie tych pomp opiera się na cicho
                    pracującym wentylatorze, który zasysa powietrze z otoczenia i kieruje je przez wymiennik ciepła,
                    zwany parownikiem.
                </p>
            </div>
            <div class="col-lg pt-md-5">
                <span class="number-icon">2</span>
                <p>
                    W parowniku następuje kluczowy proces - czynnik chłodniczy w postaci ciekłej absorbuje ciepło z
                    powietrza, przechodząc w fazę gazową. Następnie trafia on do kompresora, gdzie jest sprężany, co
                    powoduje znaczny wzrost jego temperatury (do około 80-90°C). Gorący czynnik przepływa do
                    skraplacza, gdzie oddaje ciepło do systemu ogrzewania, takiego jak ogrzewanie podłogowe, ścienne
                    czy grzejnikowe.
                </p>
            </div>
            <div class="col-lg">
                <span class="number-icon">3</span>
                <p>
                    Pompy powietrze-woda są szczególnie efektywne przy wyższych temperaturach otoczenia i mogą być
                    wykorzystywane zarówno do ogrzewania, jak i chłodzenia pomieszczeń. To idealne rozwiązanie tam,
                    gdzie systemy geotermalne są trudne do zainstalowania lub nieopłacalne ekonomicznie.
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid position-relative w-100 py-5">
        <div class="row p-3">
            <img class="img-fluid img cover vh6 w-100" src="<?php echo e(asset('images/lady-with-a-dog.jpg')); ?>"
                alt="happy buyers of heatpump">

            <div class="w-100 py-4 my-5 py-md-5 my-md-5"></div>
            <div class="w-100 my-4 my-md-5"></div>

            <div class="col offset-md-1 col-md-8 col-lg-7 col-xl-6 p-3 p-md-4 bg-secondary blur-2 round-3 on-show-animation">
                <h2>Jakie ma zalety?</h2>
                <ul>
                    <li> <b>Oszczędność energii</b>:<br> Wykorzystują darmową energię z powietrza, znacznie
                        obniżając koszty ogrzewania.</li>
                    <li> <b>Uniwersalność</b>:<br> Ogrzewanie i chłodzenie w jednym systemie - komfort przez
                        cały rok.</li>
                    <li> <b>Łatwa instalacja</b>:<br> Szybszy i tańszy montaż w porównaniu do systemów
                        geotermalnych.</li>
                    <li> <b>Bezpieczeństwo</b>:<br> Brak ryzyka związanego ze spalaniem paliw, bezpieczne
                        użytkowanie.</li>
                    <li> <b>Dostępność</b>:<br> Idealne w miejscach, gdzie instalacja geotermalna jest
                        niemożliwa.</li>
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
        <div class="row gy-2 p-2">

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
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/heatpumps/air.blade.php ENDPATH**/ ?>