<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal9e4ab48bf22fc247b043be3b457787a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e4ab48bf22fc247b043be3b457787a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.fan','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.fan'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e4ab48bf22fc247b043be3b457787a1)): ?>
<?php $attributes = $__attributesOriginal9e4ab48bf22fc247b043be3b457787a1; ?>
<?php unset($__attributesOriginal9e4ab48bf22fc247b043be3b457787a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e4ab48bf22fc247b043be3b457787a1)): ?>
<?php $component = $__componentOriginal9e4ab48bf22fc247b043be3b457787a1; ?>
<?php unset($__componentOriginal9e4ab48bf22fc247b043be3b457787a1); ?>
<?php endif; ?><?php /**PATH /Users/szymeg/Projects/buler_energy/storage/framework/views/67e94d6ee14be88787796457e95495b1.blade.php ENDPATH**/ ?>