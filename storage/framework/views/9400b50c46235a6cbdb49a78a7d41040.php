<?php
    if (!isset($dim)) {
        $dim = 1;
    }
?>

<section class="hero-section vh10">
    <img src="<?php echo e($img); ?>" alt="tytułowy obraz strony">
    <div class="hero-content text-center p-4 py-5 hero-content--dim<?php echo e($dim); ?>">
        <div class="slide-up-animation">
            <?php echo e($slot); ?>

        </div>
    </div>
</section>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/components/sections/hero.blade.php ENDPATH**/ ?>