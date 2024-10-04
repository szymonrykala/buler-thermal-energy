<div class="col-12 on-show-animation py-2" id="{{$product->name}}">
    <div class="row align-items-center justify-content-center p-2 p-lg-4 product bg-secondary round-3">
        <div class="col-12 col-md-8 col-lg-4 p-3">
            <figure>
                <img class='img' src='{{ asset($product->image) }}' alt='zdjęcie pompy'>
            </figure>
        </div>
        <div class="col">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <ul>

                @foreach ($product->bulletpoints as $point)
                    <li>{{ $point }}</li>
                @endforeach

            </ul>
        </div>
        <div class="width-100"></div>
        <div class="col-12 col-md-6 col-lg-3 py-3">
            <a href="/#kontakt" class='custom-btn center-block'>Zarezerwuj!</a>
        </div>

        @if ($product->details)
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <a media="print" type="application/pdf" target="_blank" rel="nofollow"
                    href="{{$product->details}}">
                    Szczegóły techniczne
                </a>
            </div>
        @endif

    </div>
</div>
