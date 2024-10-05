<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginale9845da49f16fc149e771ca22d12ff5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9845da49f16fc149e771ca22d12ff5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.battery','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.battery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9845da49f16fc149e771ca22d12ff5a)): ?>
<?php $attributes = $__attributesOriginale9845da49f16fc149e771ca22d12ff5a; ?>
<?php unset($__attributesOriginale9845da49f16fc149e771ca22d12ff5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9845da49f16fc149e771ca22d12ff5a)): ?>
<?php $component = $__componentOriginale9845da49f16fc149e771ca22d12ff5a; ?>
<?php unset($__componentOriginale9845da49f16fc149e771ca22d12ff5a); ?>
<?php endif; ?><?php /**PATH /Users/szymeg/Projects/buler_energy/storage/framework/views/4450c65f0a034aa167c7834d3a41887c.blade.php ENDPATH**/ ?>