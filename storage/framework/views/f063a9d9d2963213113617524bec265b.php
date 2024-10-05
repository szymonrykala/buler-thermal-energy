<section class='row spec-<?php echo e($id); ?>'>
    <div class='col-12 col-lg-4 col-xl-3'>
        <div class='row g-2'>
            <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class='col-12'>
                    <div class='spec__item <?php echo e($spec->default ? 'spec__item--default' : ''); ?>'>
                        <input type='radio' name='spec-view-input-<?php echo e($id); ?>'
                            id='item-<?php echo e($loop->index); ?>-<?php echo e($id); ?>'>
                        <label role='button' for='item-<?php echo e($loop->index); ?>-<?php echo e($id); ?>'>
                            <?php if (isset($component)) { $__componentOriginald975d0d8c5d434503dec2fa5fa2acb26 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald975d0d8c5d434503dec2fa5fa2acb26 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.add-circle','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.add-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald975d0d8c5d434503dec2fa5fa2acb26)): ?>
<?php $attributes = $__attributesOriginald975d0d8c5d434503dec2fa5fa2acb26; ?>
<?php unset($__attributesOriginald975d0d8c5d434503dec2fa5fa2acb26); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald975d0d8c5d434503dec2fa5fa2acb26)): ?>
<?php $component = $__componentOriginald975d0d8c5d434503dec2fa5fa2acb26; ?>
<?php unset($__componentOriginald975d0d8c5d434503dec2fa5fa2acb26); ?>
<?php endif; ?>
                            <span> <?php echo e($spec->button); ?> </span>
                        </label>
                    </div>
                </div>
                <div class='d-none d-lg-none col-12 spec__view spec__view-item-<?php echo e($loop->index); ?>-<?php echo e($id); ?>'>
                    <div class='row'>
                        <h3 class='col-12 h3 pb-4'><?php echo e($spec->title); ?></h3>
                    </div>
                    <section class='row g-1 ps-5'>
                        <?php $__currentLoopData = $spec->params; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $param): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class='col-12 col-sm-6 col-md-4'>
                                <div class='spec__param'>
                                    <h4><?php echo e($param->label); ?></h4>
                                    <p><?php echo e($param->value); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </section>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class='d-none d-lg-block col-lg-8 col-xl-9 ps-5 spec__display'>
        data of the selected item
    </div>
</section>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/components/spec-table.blade.php ENDPATH**/ ?>