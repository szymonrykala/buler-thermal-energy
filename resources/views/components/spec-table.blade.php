<section class='row spec-{{ $id }}'>
    <div class='col-12 col-lg-4 col-xl-3'>
        <div class='row g-2'>
            @foreach ($specifications as $spec)
                <div class='col-12'>
                    <div class='spec__item {{ $spec->default ? 'spec__item--default' : '' }}'>
                        <input type='radio' name='spec-view-input-{{ $id }}'
                            id='item-{{ $loop->index }}-{{ $id }}'>
                        <label role='button' for='item-{{ $loop->index }}-{{ $id }}'>
                            <x-icons.add-circle />
                            <span> {{ $spec->button }} </span>
                        </label>
                    </div>
                </div>
                <div class='d-none d-lg-none col-12 spec__view spec__view-item-{{$loop->index}}-{{$id}}'>
                    <div class='row'>
                        <h3 class='col-12 h3 pb-4'>{{ $spec->title }}</h3>
                    </div>
                    <section class='row g-1 ps-5'>
                        @foreach ($spec->params as $param)
                            <div class='col-12 col-sm-6 col-md-4'>
                                <div class='spec__param'>
                                    <h4>{{ $param->label }}</h4>
                                    <p>{{ $param->value }}</p>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            @endforeach
        </div>
    </div>
    <div class='d-none d-lg-block col-lg-8 col-xl-9 ps-5 spec__display'>
        data of the selected item
    </div>
</section>
