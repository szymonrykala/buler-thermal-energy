<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal5775e4ef8b936e5203b3348eab4363b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5775e4ef8b936e5203b3348eab4363b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.stethoscope','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.stethoscope'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5775e4ef8b936e5203b3348eab4363b6)): ?>
<?php $attributes = $__attributesOriginal5775e4ef8b936e5203b3348eab4363b6; ?>
<?php unset($__attributesOriginal5775e4ef8b936e5203b3348eab4363b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5775e4ef8b936e5203b3348eab4363b6)): ?>
<?php $component = $__componentOriginal5775e4ef8b936e5203b3348eab4363b6; ?>
<?php unset($__componentOriginal5775e4ef8b936e5203b3348eab4363b6); ?>
<?php endif; ?><?php /**PATH /Users/szymeg/Projects/buler_energy/storage/framework/views/0cd21704be108c4c8889556163a74ea7.blade.php ENDPATH**/ ?>