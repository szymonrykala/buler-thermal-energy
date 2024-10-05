<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve(['title' => 'Magazyny Energii - Buler Thermal Energy','shortDescription' => 'Instalacja systemu magazynowania energii Energy-Butler od M-TEC jest łatwa i efektywna. Oferujemy rozwiązania zarówno dla domów jednorodzinnych, jak i dla użytku komercyjnego.','description' => 'Buler Thermal Energy oferuje modułowe systemy magazynowania energii, w tym Energy-Butler i Energy-Block od M-TEC, idealne dla domów jednorodzinnych i użytku komercyjnego. Zintegrowane inwertery i wysoka wydajność zapewniają niezależność energetyczną i maksymalne zużycie energii słonecznej.','keywords' => 'Magazyny energii, Energy-Butler, Energy-Block, M-TEC, modułowy system magazynowania energii, fotowoltaika, system all in one, Buler Thermal Energy','url' => 'https://bulerenergy.pl/magazyny-energii'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Magazyny Energii",
            "image": "https://www.bulerenergy.pl/static/energy-butler.png",
            "description": "Buler Thermal Energy oferuje modułowe systemy magazynowania energii, w tym Energy-Butler i Energy-Block od M-TEC, idealne dla domów jednorodzinnych i użytku komercyjnego.",
            "brand": {
                "@type": "Brand",
                "name": "M-TEC"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://www.bulerenergy.pl/magazyny-energii",
                "priceCurrency": "PLN",
                "availability": "https://schema.org/InStock"
            }
        }
    </script>

    <?php if (isset($component)) { $__componentOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d77bb759cf09fb7609ab7d50dcb0764 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.hero','data' => ['dim' => '1','img' => ''.e(asset('images/energy-butler.jpg')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dim' => '1','img' => ''.e(asset('images/energy-butler.jpg')).'']); ?>
        <h1 class="--bald">
            Magazyn energii <span class="--cool-font --colored --bald">all-in-one</span><br>
            <small>z systemem <span class="--cool-font --colored --bald">e-smart</span></small>
        </h1>
        <p>
            Możliwość składowania i rozbudowy za pomocą zintegrowanego inwertera <span class="--colored --bald"> od
                7,7 kWh do 30,7 kWh
            </span>.
        </p>
        <a role="button" href="#formularz-ofertowy" class="custom-btn custom-btn--contained center-block">formularz
            ofertowy</a>
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


    <section class="container">
        <article class="row py-5 align-items-center">

            <div class="d-none d-md-block col-md-4 col-lg-4 col-xl-3">
                <img class="img img-h80" src="<?php echo e(asset('images/m-tec-acu-parts.png')); ?>"
                    alt="modułowy magazyn energii z wbudowanym inverterem" />
            </div>

            <div class="col-12 col-md-8 col-lg-8 col-xl-9">
                <h2>
                    Instalacja systemu magazynowania energii nigdy nie była łatwiejsza!
                </h2>
                <p class="py-3">
                    Modułowa koncepcja Energy-Butler jest odpowiednia nie tylko dla domów
                    jednorodzinnych, ale może być również rozszerzona dla firm lub wielopiętrowych
                    budynków mieszkalnych do 307 kWh. Zintegrowany falownik oszczędza czas podczas
                    instalacji i miejsce w pomieszczeniu na sprzęt.
                </p>

                <h3 class="py-3">Korzyści płynące z zastosowania<span class="--colored --bald"> Energy
                        Butler</span>:
                </h3>
                <ul>
                    <li>Modułowy system z możliwością rozbudowy od 7,7 kWh do 30,7 kWh</li>
                    <li>Dzięki wydajnym falownikom o mocy do 20 kW można obsługiwać nawet większe
                        odbiorniki</li>
                    <li>Gwarantowane 10 000 cykli ładowania w ciągu 10 lat</li>
                    <li>Plug & Play: Inwerter jest już zintegrowany</li>
                    <li>Maksymalne zużycie energii słonecznej</li>
                    <li>Wysoka moc ładowania i rozładowywania</li>
                    <li>można wdrożyć niezależne od sieci awaryjne podtrzymanie zasilania</li>
                    <li>Możliwość 10-krotnego kaskadowania do 307 kWh*</li>
                    <li>Bezpieczna technologia ogniw (fosforanowo-litowo-żelazowe LFP)</li>
                </ul>
            </div>
        </article>
    </section>

    <section class="container py-5">
        <div class="row">
            <h2 class="col-12 py-3">
                M-TEC Energy-Butler
            </h2>
            <div class="col-12">
                <iframe width="100%" height="500px"
                    src="https://www.youtube.com/embed/DLQNexQhon0?si=JOw34XxkglYZCZjs" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>


    <article class="container py-5">
        <div class="row">
            <h2 class="col-12 h2 h2--upper  h2--color h2--bald py-5">
                Magazynowanie energii - rozwiązanie dla każdego
            </h2>
        </div>

        <section class="row g-5">

            <div class="col-12 order-lg-1 col-lg-6">
                <img class="img img-h70 center-block" src="<?php echo e(asset('/images/m-tec-img2.png')); ?>"
                    alt="modułowa konstrukcja Energy-block i energy-butler firmy M-TEC">
            </div>

            <div class="col-12 order-lg-12 col-lg-6">
                <p>
                    Oferujemy dwa systemy magazynowania od M-TEC:
                </p>
                <ul>
                    <li><a rel="nofollow" href="https://www.mtec-systems.com/products/energy-butler/">Energy-Butler</a>
                    </li>
                    <li><a rel="nofollow" href="https://www.mtec-systems.com/products/energy-block/">Energy-Block</a>
                    </li>
                </ul>
                <br>
                <p>
                    Jest to rozszerzalne rozwiązania dla domów jednorodzinnych, a także do użytku komercyjnego.
                    Nowoczesne systemy,
                    takie jak Energy-Butler lub Energy-Block, mogą być również rozbudowywane modułowo w
                    późniejszym czasie.
                    <br />
                    <br />
                </p>
                <div class="cascade-img">
                    <img class="img" src="<?php echo e(asset('/images/bateria-kaskada.png')); ?>"
                        alt="system kaskadowy rozbudowy magazynu energii">
                    <p>10-krotne<br />kaskadowanie</p>
                    <p><br /><span class="--colored">*</span>&nbsp;W zaleności od zasotosowania z dodatkową "szafą
                        kaskadową".</p>
                </div>
            </div>
        </section>
    </article>

    <section class="container">
        <article class="row gy-3 py-4 vh8">
            <div class="col-12">
                <h2 class="py-3">Dane techniczne jednofazowego systemu AIO ESS</h2>
                <p>Model jednofazowy z 2 do 5 modułami baterii</p>
            </div>

            <div class="col-12">
                <?php if (isset($component)) { $__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893 = $attributes; } ?>
<?php $component = App\View\Components\SpecTable::resolve(['id' => '0','specFileName' => 'data/hybrid-inverter-1.json'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('spec-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SpecTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893)): ?>
<?php $attributes = $__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893; ?>
<?php unset($__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893)): ?>
<?php $component = $__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893; ?>
<?php unset($__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893); ?>
<?php endif; ?>
            </div>
        </article>

        <article class="row gy-3 py-4 vh8">
            <div class="col-12">
                <h2 class="py-3">
                    Dane techniczne podłączenia inverterowego
                </h2>
                <p>Dostępnych jest od 2 do 8 trójfazowych modułów baterii</p>
            </div>
            <div class="col-12">
                <?php if (isset($component)) { $__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893 = $attributes; } ?>
<?php $component = App\View\Components\SpecTable::resolve(['id' => '1','specFileName' => 'data/hybrid-inverter-2.json'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('spec-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SpecTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893)): ?>
<?php $attributes = $__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893; ?>
<?php unset($__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893)): ?>
<?php $component = $__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893; ?>
<?php unset($__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893); ?>
<?php endif; ?>
            </div>
        </article>

        <article class="row gy-3 py-4 vh8">
            <div class="col-12">
                <h2>
                    Dane techniczne połączeń modułów baterii
                </h2>
            </div>
            <div class="col-12">
                <?php if (isset($component)) { $__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893 = $attributes; } ?>
<?php $component = App\View\Components\SpecTable::resolve(['id' => '2','specFileName' => 'data/battery-modules.json'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('spec-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SpecTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893)): ?>
<?php $attributes = $__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893; ?>
<?php unset($__attributesOriginal0ea7a8ab6356cb5ff5ad73216e1d5893); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893)): ?>
<?php $component = $__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893; ?>
<?php unset($__componentOriginal0ea7a8ab6356cb5ff5ad73216e1d5893); ?>
<?php endif; ?>
            </div>
        </article>

    </section>

    <?php if (isset($component)) { $__componentOriginal9fd37fa0319b80cacafcad54fee9b8be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be = $attributes; } ?>
<?php $component = App\View\Components\BusinessPartners::resolve(['business' => 'batteries'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('business-partners'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BusinessPartners::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be)): ?>
<?php $attributes = $__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be; ?>
<?php unset($__attributesOriginal9fd37fa0319b80cacafcad54fee9b8be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9fd37fa0319b80cacafcad54fee9b8be)): ?>
<?php $component = $__componentOriginal9fd37fa0319b80cacafcad54fee9b8be; ?>
<?php unset($__componentOriginal9fd37fa0319b80cacafcad54fee9b8be); ?>
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
<?php /**PATH /Users/szymeg/Projects/buler_energy/resources/views/batteries.blade.php ENDPATH**/ ?>