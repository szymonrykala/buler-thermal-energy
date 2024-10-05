<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Buler Thermal Energy - Pompy Ciepła, Magazyny Energii, Fotowoltaika','shortDescription' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji','description' => 'Buler Thermal Energy oferuje kompleksowe usługi w zakresie pomp ciepła, magazynów energii, rekuperacji, pomiarów TRT, fotowoltaiki oraz audytów budynków.','keywords' => 'Pompy ciepła, Magazyny energii, Rekuperacja, Pomiary TRT, Fotowoltaika, Audyty budynków, Piotr Buler','url' => 'https://bulerenergy.pl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


    <?php if (isset($component)) { $__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.hero','data' => ['dim' => '3','img' => ''.e(asset('images/background_960x540.jpeg')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dim' => '3','img' => ''.e(asset('images/background_960x540.jpeg')).'']); ?>
        <div class="row align-items-center">
            <img class="col-9 col-lg-4 m-auto" alt="logo firmy" src="<?php echo e(asset('images/logo_512.png')); ?>" />
            <div class="col-12">
                <h1 class="--cool-font --bald ">
                    Buler Thermal Energy
                </h1>
                <p class="h2 text-center">Wieloletnie doświadczenie w nowej
                    odsłonie</p>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764)): ?>
<?php $attributes = $__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764; ?>
<?php unset($__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764)): ?>
<?php $component = $__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764; ?>
<?php unset($__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764); ?>
<?php endif; ?>


    <section class="container py-5" id="oferta">
        <div class="row vh7 align-items-center">

            <?php
                $links_config = [
                    [
                        'title' => 'Pompy Ciepła',
                        'icon' => 'icons.heatpump-balance',
                        'link' => route('heatpumps.main'),
                    ],
                    [
                        'title' => 'Rekuperacja',
                        'icon' => 'icons.fan',
                        'link' => route('in-progress'),
                    ],
                    [
                        'title' => 'Fotowoltaika',
                        'icon' => 'icons.fw-panel',
                        'link' => route('in-progress'),
                    ],
                    [
                        'title' => 'Magazyny energii',
                        'icon' => 'icons.battery',
                        'link' => route('batteries'),
                    ],
                    [
                        'title' => 'Badanie gruntu TRT',
                        'icon' => 'icons.stethoscope',
                        'link' => route('trt-measurements'),
                    ],
                    [
                        'title' => 'Audyty budynków',
                        'icon' => 'icons.building',
                        'link' => route('in-progress'),
                    ],
                ];
            ?>

            <div class="col-12">
                <div class="custom-card__container">

                    <?php $__currentLoopData = $links_config; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a role="button" class="custom-card" href="<?php echo e($item['link']); ?>">
                            <span class="custom-card__icon">
                                <?php $p=$item["icon"]; ?>
                                <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $p] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                            </span>
                            <h3 class="custom-card__caption"><?php echo e($item['title']); ?></h3>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row gy-5 vh9">
            <h2 class="h2 col-12 text-center py-4">Kompleksowe usługi <span class="--colored">BTE</span><br />
                <small>Załatw wszystko w jednym miejscu</small>
            </h2>

            <?php
                $entries = [
                    'Weryfikacja projektu' =>
                        'Weryfikacja projektu oraz przygotowanie niezbędnych rysunków technicznych zgodnych z obowiązującymi normami.',
                    'Niezbędne obliczenia' =>
                        'Przeprowadzanie niezbędnych obliczeń technicznych, gwarantujących bezpieczeństwo oraz efektywność realizacji projektu.',
                    'Prawidłowy dobór urządzenia' =>
                        'Dobór najbardziej odpowiednich urządzeń na podstawie przeprowadzonych analiz i obliczeń, spełniających wszelkie wymagania.',
                    'Profesjonalna instalacja' =>
                        'Precyzyjna i bezpieczna instalacja wybranych urządzeń, zapewniająca pełną zgodność z projektem oraz normami branżowymi.',
                    'Serwis i utrzymanie' =>
                        'Kompleksowy serwis oraz bieżące utrzymanie urządzeń, gwarantujące ich długotrwałe i bezawaryjne funkcjonowanie.',
                ];
            ?>

            <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section
                    class="on-show-animation col-12 col-md-8 col-lg-6 <?php echo e($loop->iteration % 2 == 0 ? 'offset-lg-6 offset-md-4' : ''); ?>">
                    <div class="row align-items-start align-items-sm-center g-2">
                        <div class="col-2 col-sm-3">
                            <span class="checked_icon"><?php if (isset($component)) { $__componentOriginal91958180148c6641c97370f34c66b212 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91958180148c6641c97370f34c66b212 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.select-checked','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.select-checked'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91958180148c6641c97370f34c66b212)): ?>
<?php $attributes = $__attributesOriginal91958180148c6641c97370f34c66b212; ?>
<?php unset($__attributesOriginal91958180148c6641c97370f34c66b212); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91958180148c6641c97370f34c66b212)): ?>
<?php $component = $__componentOriginal91958180148c6641c97370f34c66b212; ?>
<?php unset($__componentOriginal91958180148c6641c97370f34c66b212); ?>
<?php endif; ?></span>
                        </div>
                        <div class="col">
                            <h3 class="h5"><?php echo e($title); ?></h3>
                            <p class="text-left"><?php echo e($entry); ?> </p>
                        </div>
                    </div>

                </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="container py-5">
        <div class="row vh8 align-items-center">
            <img class="handshake-image col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 px-5 on-show-animation"
                src=<?php echo e(asset('images/handshake.svg')); ?> alt="uścisk dłoni, zawarcie umowy">
            <div class="on-show-animation col-12 col-md-10 offset-md-1 text-center">
                <p>
                    Zajmiemy się <span class="--colored">każdym krokiem procesu</span> - od wstępnej konsultacji,
                    przez dobór urządzenia,
                    opracowanie
                    rysunków technicznych i obliczeń, aż po instalację i serwis. Możesz liczyć na nasze
                    doświadczenie i
                    profesjonalizm na każdym etapie. Dla Twojej wygody, zadbamy o wszystkie szczegóły, abyś mógł w
                    pełni
                    cieszyć się gotowym rozwiązaniem.
                </p>
                <p class="h3">
                    Jeśli jesteś zainteresowany <span class="--cool-font --colored">nowoczesnymi</span> i <span
                        class="--cool-font --colored">ekologicznymi</span> rozwiązaniami, skontaktuj się z
                    <span class="--cool-font --bald --colored">BTE</span>.
                </p>
                <a href="<?php echo e(route('contact')); ?>" class="mt-4 custom-btn custom-btn--contained center-block"
                    role="button">Skontaktuj
                    się</a>
            </div>
        </div>
    </section>

    <section id="firma" class="container py-5">
        <div class="row gy-5 vh10 align-items-center">
            <h2 class="h2 col-12 text-center">O firmie</h2>

            <div class="col-sm-12 offset-lg-1 col-lg-10 text-center">
                <p>
                    Swoje wieloletnie doświadczenie w dziedzinie pomp ciepła zdobyłem pracując od 2018 r. w
                    rodzinnej firmie Clima Komfort z siedzibą w Grudziądzu. W ostatnim roku zarządzałem
                    działem klienta indywidualnego i mikroprojektów, realizując wiele projektów związanych z
                    modernizacją istniejących budynków oraz montażem pomp ciepła w nowobudowanych obiektach.
                    W tym czasie uczestniczyłem w wielu specjalistycznych szkoleniach, poszerzając swoją
                    wiedzę w tematyce OZE.
                </p>
                <p>
                    Obecnie Clima Komfort stała się dużą firmą inżynierską, która nie zajmuje się już małymi
                    realizacjami i klientem indywidualnym. Postanowiłem więc kontynuować realizację małych
                    projektów - głównie sprzedaż i montaż pomp ciepła na własny rachunek, tworząc firmę
                    <span class="--cool-font --colored --bald">Buler Thermal Energy</span>.
                </p>
            </div>

            <div class="col-sm-12 col-lg-4 order-lg-1">
                <img class="img img-h30 center-block" src="<?php echo e(asset('images/piotr_buler.png')); ?>" alt="Piotr Buler">
            </div>

            <section class="col-sm-12 offset-lg-1 order-lg-12 col-lg-7">
                <h3 class="h3 pb-2">Moja Misja</h3>
                <p>
                    Moim celem jest wykorzystywanie zdobytej wiedzy, aby dostarczać nowoczesne, ekologiczne i
                    efektywne rozwiązania energetyczne dla klientów indywidualnych i biznesowych. Stawiam na
                    profesjonalizm i indywidualne podejście, oferując najlepsze technologie w zakresie:
                </p>
                <ul>
                    <li>ogrzewania</li>
                    <li>wentylacji</li>
                    <li>podgrzewania wody</li>
                    <li>fotowoltaiki</li>
                    <li>magazynowania energii.</li>
                </ul>
            </section>

        </div>
    </section>

    <?php if (isset($component)) { $__componentOriginal62de9fc3ebe431a0d746cd50eda6c97f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62de9fc3ebe431a0d746cd50eda6c97f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.contact','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62de9fc3ebe431a0d746cd50eda6c97f)): ?>
<?php $attributes = $__attributesOriginal62de9fc3ebe431a0d746cd50eda6c97f; ?>
<?php unset($__attributesOriginal62de9fc3ebe431a0d746cd50eda6c97f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62de9fc3ebe431a0d746cd50eda6c97f)): ?>
<?php $component = $__componentOriginal62de9fc3ebe431a0d746cd50eda6c97f; ?>
<?php unset($__componentOriginal62de9fc3ebe431a0d746cd50eda6c97f); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/home.blade.php ENDPATH**/ ?>