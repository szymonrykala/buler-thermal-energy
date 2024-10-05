<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

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

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefa5baff492abd1b4a8b27d5237ca7c2)): ?>
<?php $attributes = $__attributesOriginalefa5baff492abd1b4a8b27d5237ca7c2; ?>
<?php unset($__attributesOriginalefa5baff492abd1b4a8b27d5237ca7c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefa5baff492abd1b4a8b27d5237ca7c2)): ?>
<?php $component = $__componentOriginalefa5baff492abd1b4a8b27d5237ca7c2; ?>
<?php unset($__componentOriginalefa5baff492abd1b4a8b27d5237ca7c2); ?>
<?php endif; ?><?php /**PATH /Users/szymeg/Projects/buler_energy/storage/framework/views/abb68f535ec73ac1d844d49b062188cb.blade.php ENDPATH**/ ?>