<header class="navbar container-fluid blur-3">
    <div class="container">
        <div class="row align-items-center py-3 justify-content-between">

            <a class="col navbar__logo --cool-font --bald" href="<?php echo e(route("home")); ?>">
                <img class="slow-constant-rotate" alt="Logo" src="<?php echo e(asset('images/logo_112.png')); ?>" />
                Buler Thermal Energy
            </a>

            <nav class="col d-none d-lg-block">
                <ul class="navbar__links">
                    <li>
                        <a class="--cool-font" href="<?php echo e(route('home') . '#oferta'); ?>">Oferta</a>
                        <ul class="navbar__submenu round-3 blur-3 bg-secondary">
                            <li>
                                <a class="--cool-font" href="/pompy-ciepla">Pompy ciepła</a>
                                <ul>
                                    <li><a href="<?php echo e(route('heatpumps.air')); ?>">Powietrzne</a></li>
                                    <li><a href="<?php echo e(route('heatpumps.ground.glycol')); ?>">Gruntowe glikol</a></li>
                                    <li><a href="<?php echo e(route('heatpumps.ground.water')); ?>">Gruntowe woda-woda</a></li>
                                    <li><a href="<?php echo e(route('heatpumps.ground.direct-evaporation')); ?>">Bezpośrednie parowanie</a></li>
                                </ul>
                            </li>

                            <li><a class="--cool-font" href="<?php echo e(route('batteries')); ?>">Magazyny energii</a></li>
                            <li>
                                <a class="--cool-font" href="<?php echo e(route('in-progress')); ?>">Rekuperacja</a>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a class="--cool-font" href="<?php echo e(route('free-pricing')); ?>">Wycena</a></li>
                    <li class=""><a class="--cool-font" href="<?php echo e(route('home') . '#firma'); ?>">O firmie</a></li>
                    <li class=""><a class="--cool-font" href="<?php echo e(route('contact')); ?>">Kontakt</a></li>
                </ul>
            </nav>

            <button class="d-lg-none col-2 navbar__menu-button">
                <span id="close-icon">
                    <?php if (isset($component)) { $__componentOriginalf6464b9a54d2bedc8c500f17bdd4af0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6464b9a54d2bedc8c500f17bdd4af0b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.close','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.close'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6464b9a54d2bedc8c500f17bdd4af0b)): ?>
<?php $attributes = $__attributesOriginalf6464b9a54d2bedc8c500f17bdd4af0b; ?>
<?php unset($__attributesOriginalf6464b9a54d2bedc8c500f17bdd4af0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6464b9a54d2bedc8c500f17bdd4af0b)): ?>
<?php $component = $__componentOriginalf6464b9a54d2bedc8c500f17bdd4af0b; ?>
<?php unset($__componentOriginalf6464b9a54d2bedc8c500f17bdd4af0b); ?>
<?php endif; ?>
                </span>
                <span id="open-icon">
                    <?php if (isset($component)) { $__componentOriginal0f76eee19490ce4ef90a90abe538c05c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f76eee19490ce4ef90a90abe538c05c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f76eee19490ce4ef90a90abe538c05c)): ?>
<?php $attributes = $__attributesOriginal0f76eee19490ce4ef90a90abe538c05c; ?>
<?php unset($__attributesOriginal0f76eee19490ce4ef90a90abe538c05c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f76eee19490ce4ef90a90abe538c05c)): ?>
<?php $component = $__componentOriginal0f76eee19490ce4ef90a90abe538c05c; ?>
<?php unset($__componentOriginal0f76eee19490ce4ef90a90abe538c05c); ?>
<?php endif; ?>
                </span>

            </button>
        </div>
    </div>
</header>


<nav class="side-nav">
    <ul class="side-nav__links">
        <li><a href="<?php echo e(route('home') . '#firma'); ?>">O firmie</a></li>
        <li>
            <a href="<?php echo e(route('home') . '#oferta'); ?>">Oferta</a>
            <ul class="side-nav__submenu">
                <li>
                    <a href="<?php echo e(route('heatpumps.main')); ?>">Pompy ciepła</a>
                </li>

                <li>
                    <a href="<?php echo e(route('batteries')); ?>">Magazyny energii</a>
                </li>
                <li>
                    <a href="<?php echo e(route('in-progress')); ?>">Rekuperacja</a>
                </li>
                <li>
                    <a href="<?php echo e(route('trt-measurements')); ?>">Pomiary TRT</a>
                </li>
                <li>
                    <a href="<?php echo e(route('in-progress')); ?>">Fotowoltaika</a>
                </li>
                <li>
                    <a href="<?php echo e(route('in-progress')); ?>">Audyty budynków</a>
                </li>
            </ul>
        </li>
        <li><a href="<?php echo e(route('contact')); ?>">Kontakt</a></li>
    </ul>
</nav>

<a href="#" class="top-scroll">
    <?php if (isset($component)) { $__componentOriginald2582e4961d14e40b7c3acffd51eb9d9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2582e4961d14e40b7c3acffd51eb9d9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.arrow-up','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.arrow-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2582e4961d14e40b7c3acffd51eb9d9)): ?>
<?php $attributes = $__attributesOriginald2582e4961d14e40b7c3acffd51eb9d9; ?>
<?php unset($__attributesOriginald2582e4961d14e40b7c3acffd51eb9d9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2582e4961d14e40b7c3acffd51eb9d9)): ?>
<?php $component = $__componentOriginald2582e4961d14e40b7c3acffd51eb9d9; ?>
<?php unset($__componentOriginald2582e4961d14e40b7c3acffd51eb9d9); ?>
<?php endif; ?>
</a>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/components/navigation.blade.php ENDPATH**/ ?>