<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Buler Thermal Energy - Pompy Ciepła','shortDescription' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji','description' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków.','keywords' => 'Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler','url' => 'https://bulerenergy.pl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <h1 class="--bald">Pompy Ciepła</h1>
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


    <section class="container py-5">
        <div class="row py-5">
            <h2 class="col-12 text-center">
                Czym są Pompy Ciepła?
            </h2>
            <p class="offset-md-1 col-12 col-md-10 ">
                Pompy ciepła to urządzenia, które wykorzystują odnawialne źródła energii do ogrzewania i chłodzenia
                budynków. Działają na zasadzie przenoszenia ciepła z jednego miejsca do drugiego, co czyni je
                wyjątkowo efektywnymi i ekologicznymi.
            </p>
        </div>

        <div class="row gy-5">
            <div class="col-12">
                <div class="custom-card__container">
                    <a class="custom-card" href="<?php echo e(route('heatpumps.air')); ?>" aria-roledescription="button"
                        role="button">
                        <span class="custom-card__icon">
                            <?php if (isset($component)) { $__componentOriginal9816e836477c23860018580e43da18e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9816e836477c23860018580e43da18e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.heatpump','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.heatpump'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9816e836477c23860018580e43da18e9)): ?>
<?php $attributes = $__attributesOriginal9816e836477c23860018580e43da18e9; ?>
<?php unset($__attributesOriginal9816e836477c23860018580e43da18e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9816e836477c23860018580e43da18e9)): ?>
<?php $component = $__componentOriginal9816e836477c23860018580e43da18e9; ?>
<?php unset($__componentOriginal9816e836477c23860018580e43da18e9); ?>
<?php endif; ?>
                        </span>
                        <p class="custom-card__caption">Powietrze - woda</p>
                    </a>
                    <a class="custom-card" href="<?php echo e(route('heatpumps.ground.main')); ?>" aria-roledescription="button"
                        role="button">
                        <span class="custom-card__icon">
                            <?php if (isset($component)) { $__componentOriginalefa5baff492abd1b4a8b27d5237ca7c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefa5baff492abd1b4a8b27d5237ca7c2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.heatpump-balance','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.heatpump-balance'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefa5baff492abd1b4a8b27d5237ca7c2)): ?>
<?php $attributes = $__attributesOriginalefa5baff492abd1b4a8b27d5237ca7c2; ?>
<?php unset($__attributesOriginalefa5baff492abd1b4a8b27d5237ca7c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefa5baff492abd1b4a8b27d5237ca7c2)): ?>
<?php $component = $__componentOriginalefa5baff492abd1b4a8b27d5237ca7c2; ?>
<?php unset($__componentOriginalefa5baff492abd1b4a8b27d5237ca7c2); ?>
<?php endif; ?>
                        </span>
                        <p class="custom-card__caption">Gruntowe</p>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <p class="--cool-font text-center">
                    Zachęcamy do składania zapytań za pomocą formularza
                </p>
                <a role="button" href="#formularz-ofertowy"
                    class="custom-btn custom-btn--contained center-block">formularz
                    ofertowy</a>
            </div>
        </div>
    </section>

    <?php if (isset($component)) { $__componentOriginal9fd37fa0319b80cacafcad54fee9b8be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be = $attributes; } ?>
<?php $component = App\View\Components\BusinessPartners::resolve(['business' => 'heatpumps'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('business-partners'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BusinessPartners::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be)): ?>
<?php $attributes = $__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be; ?>
<?php unset($__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9fd37fa0319b80cacafcad54fee9b8be)): ?>
<?php $component = $__componentOriginal9fd37fa0319b80cacafcad54fee9b8be; ?>
<?php unset($__componentOriginal9fd37fa0319b80cacafcad54fee9b8be); ?>
<?php endif; ?>

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
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/heatpumps/main.blade.php ENDPATH**/ ?>