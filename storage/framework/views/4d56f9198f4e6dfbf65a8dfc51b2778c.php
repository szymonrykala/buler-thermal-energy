<section class="container py-5" id="kontakt">

    <div class="row py-5">
        <?php if(Route::is('in-progress')): ?>
            <h1 class='h2 col-12 text-center'>Strona w realizacji <br /> Zachęcam do kontaktu</h1>
        <?php else: ?>
            <h2 class="col-12 h2 text-center">Zachęcam do kontaktu</h2>
        <?php endif; ?>
    </div>

    <article class="row gy-5">
        <section class="col-sm-12 col-lg-6 align-items-center">
            <?php if (isset($component)) { $__componentOriginalae8ecbce80174882d0025a933811095d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalae8ecbce80174882d0025a933811095d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.contact','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalae8ecbce80174882d0025a933811095d)): ?>
<?php $attributes = $__attributesOriginalae8ecbce80174882d0025a933811095d; ?>
<?php unset($__attributesOriginalae8ecbce80174882d0025a933811095d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalae8ecbce80174882d0025a933811095d)): ?>
<?php $component = $__componentOriginalae8ecbce80174882d0025a933811095d; ?>
<?php unset($__componentOriginalae8ecbce80174882d0025a933811095d); ?>
<?php endif; ?>
        </section>

        <address class="col-12 col-lg-6 address">
            <div class="row">
                <ul class="col-12">
                    <li>
                        <span class="address__icon">
                            <?php if (isset($component)) { $__componentOriginala16b1789e35780da92b6646fada2a940 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala16b1789e35780da92b6646fada2a940 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.person-add','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.person-add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala16b1789e35780da92b6646fada2a940)): ?>
<?php $attributes = $__attributesOriginala16b1789e35780da92b6646fada2a940; ?>
<?php unset($__attributesOriginala16b1789e35780da92b6646fada2a940); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala16b1789e35780da92b6646fada2a940)): ?>
<?php $component = $__componentOriginala16b1789e35780da92b6646fada2a940; ?>
<?php unset($__componentOriginala16b1789e35780da92b6646fada2a940); ?>
<?php endif; ?>
                        </span>&nbsp;
                        <a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/piotr-buler-099b26314/">
                            Piotr Buler
                        </a>
                    </li>

                    <li>
                        <span class="address__icon">
                            <?php if (isset($component)) { $__componentOriginal260fd331cbb4f67409660dd00b088365 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal260fd331cbb4f67409660dd00b088365 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.email','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.email'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal260fd331cbb4f67409660dd00b088365)): ?>
<?php $attributes = $__attributesOriginal260fd331cbb4f67409660dd00b088365; ?>
<?php unset($__attributesOriginal260fd331cbb4f67409660dd00b088365); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal260fd331cbb4f67409660dd00b088365)): ?>
<?php $component = $__componentOriginal260fd331cbb4f67409660dd00b088365; ?>
<?php unset($__componentOriginal260fd331cbb4f67409660dd00b088365); ?>
<?php endif; ?>
                        </span>&nbsp;
                        Napisz:&nbsp;
                        <a href="mailto:biuro@bulerenergy.pl">biuro@bulerenergy.pl</a>
                    </li>

                    <li>
                        <a href="tel:+48664435690" class="address__icon">
                            <?php if (isset($component)) { $__componentOriginalda6a6e700391614c5210d6249f833787 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda6a6e700391614c5210d6249f833787 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.phone','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda6a6e700391614c5210d6249f833787)): ?>
<?php $attributes = $__attributesOriginalda6a6e700391614c5210d6249f833787; ?>
<?php unset($__attributesOriginalda6a6e700391614c5210d6249f833787); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda6a6e700391614c5210d6249f833787)): ?>
<?php $component = $__componentOriginalda6a6e700391614c5210d6249f833787; ?>
<?php unset($__componentOriginalda6a6e700391614c5210d6249f833787); ?>
<?php endif; ?>
                        </a>&nbsp;
                        Zadzwoń:&nbsp;
                        <a href="tel:+48664435690">+48 664 435 690</a>
                    </li>

                    <li>
                        <span class="--colored">NIP:&nbsp;</span>876-166-72-65
                    </li>

                    <li>
                        <span class="address__icon">
                            <?php if (isset($component)) { $__componentOriginal9d22dc2a548f604ecfab9414ba618e4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d22dc2a548f604ecfab9414ba618e4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.pin-drop','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.pin-drop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d22dc2a548f604ecfab9414ba618e4b)): ?>
<?php $attributes = $__attributesOriginal9d22dc2a548f604ecfab9414ba618e4b; ?>
<?php unset($__attributesOriginal9d22dc2a548f604ecfab9414ba618e4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d22dc2a548f604ecfab9414ba618e4b)): ?>
<?php $component = $__componentOriginal9d22dc2a548f604ecfab9414ba618e4b; ?>
<?php unset($__componentOriginal9d22dc2a548f604ecfab9414ba618e4b); ?>
<?php endif; ?>
                        </span>&nbsp;
                        86-300 Grudziądz
                    </li>
                </ul>
                <div class="col-12">
                    <iframe class="col-12 address__map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Grudziądz Poland&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>
            </div>
        </address>
    </article>
</section>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/components/sections/contact.blade.php ENDPATH**/ ?>