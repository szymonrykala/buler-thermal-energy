<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal8d502c95384eea5e51d48898bdfba16b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d502c95384eea5e51d48898bdfba16b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.building','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.building'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d502c95384eea5e51d48898bdfba16b)): ?>
<?php $attributes = $__attributesOriginal8d502c95384eea5e51d48898bdfba16b; ?>
<?php unset($__attributesOriginal8d502c95384eea5e51d48898bdfba16b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d502c95384eea5e51d48898bdfba16b)): ?>
<?php $component = $__componentOriginal8d502c95384eea5e51d48898bdfba16b; ?>
<?php unset($__componentOriginal8d502c95384eea5e51d48898bdfba16b); ?>
<?php endif; ?><?php /**PATH /Users/szymeg/Projects/buler_energy/storage/framework/views/53b7579f0f67dfdbdb7f50da0e631dde.blade.php ENDPATH**/ ?>