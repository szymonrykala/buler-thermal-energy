<div class="col-12 on-show-animation py-2" id="<?php echo e($product->name); ?>">
    <div class="row align-items-center justify-content-center p-2 p-lg-4 product bg-secondary round-3">
        <div class="col-12 col-md-8 col-lg-4 p-3">
            <figure>
                <img class='img' src='<?php echo e(asset($product->image)); ?>' alt='zdjęcie pompy'>
            </figure>
        </div>
        <div class="col">
            <h3><?php echo e($product->name); ?></h3>
            <p><?php echo e($product->description); ?></p>
            <ul>

                <?php $__currentLoopData = $product->bulletpoints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($point); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
        <div class="width-100"></div>
        <div class="col-12 col-md-6 col-lg-3 py-3">
            <a href="/#kontakt" class='custom-btn center-block'>Zarezerwuj!</a>
        </div>

        <?php if($product->details): ?>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <a media="print" type="application/pdf" target="_blank" rel="nofollow"
                    href="<?php echo e($product->details); ?>">
                    Szczegóły techniczne
                </a>
            </div>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/components/heatpump-product.blade.php ENDPATH**/ ?>