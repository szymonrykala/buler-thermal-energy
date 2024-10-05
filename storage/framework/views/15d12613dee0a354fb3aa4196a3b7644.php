<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginalced6491e58f706ae2056df4b93e9bd2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalced6491e58f706ae2056df4b93e9bd2c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.fw-panel','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.fw-panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalced6491e58f706ae2056df4b93e9bd2c)): ?>
<?php $attributes = $__attributesOriginalced6491e58f706ae2056df4b93e9bd2c; ?>
<?php unset($__attributesOriginalced6491e58f706ae2056df4b93e9bd2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalced6491e58f706ae2056df4b93e9bd2c)): ?>
<?php $component = $__componentOriginalced6491e58f706ae2056df4b93e9bd2c; ?>
<?php unset($__componentOriginalced6491e58f706ae2056df4b93e9bd2c); ?>
<?php endif; ?><?php /**PATH /Users/szymeg/Projects/buler_energy/storage/framework/views/4eafa53f1a06b96982c1c5903f6324ae.blade.php ENDPATH**/ ?>