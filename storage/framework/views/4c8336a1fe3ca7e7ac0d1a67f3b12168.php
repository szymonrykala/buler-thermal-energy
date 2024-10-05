<section class="container py-5" id="formularz-ofertowy">

    <section class="row justify-content-center py-4 gy-4">
        <h2 class="col-12 text-center">
            <span class="--cool-font --colored">Darmowa</span>
            wycena!
        </h2>
        <p class="col-12 col-md-8 col-lg-8 text-center h5">
            Wypełnij formularz, a my przygotujemy i wyślemy ofertę dostosowaną do Twoich potrzeb.
            <br /> <span class="--colored">Nie zwlekaj!</span>
        </p>
    </section>

    <div class="row">
        <div class="col-12">
            <?php if (isset($component)) { $__componentOriginale456b73e72d0b7178c7857980c0e779c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale456b73e72d0b7178c7857980c0e779c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.heatpumps-offer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.heatpumps-offer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale456b73e72d0b7178c7857980c0e779c)): ?>
<?php $attributes = $__attributesOriginale456b73e72d0b7178c7857980c0e779c; ?>
<?php unset($__attributesOriginale456b73e72d0b7178c7857980c0e779c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale456b73e72d0b7178c7857980c0e779c)): ?>
<?php $component = $__componentOriginale456b73e72d0b7178c7857980c0e779c; ?>
<?php unset($__componentOriginale456b73e72d0b7178c7857980c0e779c); ?>
<?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/heatpumps/offer-form.blade.php ENDPATH**/ ?>