<section class="container py-5">
    <div class="row text-center">
        <h2 class="col-12">Dobra współpraca to podstawa!</h2>
        <p class="col-12 col-md-10 m-auto">Nasza firma współpracuje wyłącznie ze sprawdzonymi i innowacyjnymi
            liderami w branży. Dzięki temu możemy oferować naszym klientom
            rozwiązania o
            najwyższej jakości, zapewniające niezawodność, efektywność energetyczną i nowoczesne technologie.
        </p>
    </div>

    <div class="row mt-5 justify-content-center gy-3">

        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md" id="<?php echo e($partner->name); ?>">
                <section class="hovercard <?php echo e($loop->count === 1 ? 'hovercard--side-open' : ''); ?>">
                    <img class="hovercard__img hovercard__img--contain p-5" src="<?php echo e(asset('images/' . $partner->logo)); ?>"
                        alt="logo <?php echo e($partner->name); ?>">
                    
                    <div class="hovercard__content p-3">
                        <h3 class="--colored"><?php echo e($partner->name); ?></h3>
                        <p><?php echo e($partner->description); ?></p>
                        <a rel="nofollow" target="_blank" href="<?php echo e($partner->link); ?>">
                            Więcej o <?php echo e($partner->name); ?>

                        </a>
                    </div>
                </section>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/components/business-partners.blade.php ENDPATH**/ ?>