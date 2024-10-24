<div class="col-12 on-show-animation py-2" id="{{ $product->name }}">
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
                <a media="print" type="application/pdf" target="_blank" rel="nofollow" href="{{ $product->details }}">
                    Szczegóły techniczne
                </a>
            </div>
        @endif

    </div>
</div>

@push('head')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "{{$product->name}}",
        "image": "https://bulerenergy.pl/images/lg-monoblok.png",
        "description": "{{$product->description}}",
        "hasEnergyConsumptionDetails": {
            "hasEnergyEffiencyCategory": "https://schema.org/EUEnergyEfficiencyCategoryA3Plus"
        },
        "url": "{{ url()->current() }}#{{$product->name}}",
        "review": {
            "@type": "Review",
            "name": "Recenzja {{$product->name}}",
            "author": {
                "@type": "Person",
                "name": "Piotr Buler"
            },
            "positiveNotes": {
                "@type": "ItemList",
                "itemListElement": [
                    @foreach ($product->bulletpoints as $point)
                        {
                        "@type": "ListItem",
                        "position": {{$loop->index}},
                        "name": "{{$point}}"
                        }
                        @if(!$loop->last) , @endif
                    @endforeach
                ]
            }
        },
        "audience": {
            "@type": "PeopleAudience",
            "suggestedGender": "male",
            "suggestedMinAge": 13
        },
        {{-- "offers": {
            "@type": "Offer",
            "condition": "new",
            "priceCurrency": "PLN",
            "priceValidUntil": "{{date('Y-m-t', strtotime('+1 month'))}}",
            "url": "{{ url()->current() }}",
            "availability": "https://schema.org/InStock",
            "seller": {
                "@type": "Organization",
                "name": "Buler Thermal Energy",
                "url": "https://bulerenergy.pl"
            }
        }, --}}
        "additionalProperty": [
            @foreach ($product->bulletpoints as $point)
                {
                "@type": "PropertyValue",
                "value": "{{$point}}"
                }
                @if(!$loop->last) , @endif
            @endforeach
        ]
    }
</script>
@endpush
